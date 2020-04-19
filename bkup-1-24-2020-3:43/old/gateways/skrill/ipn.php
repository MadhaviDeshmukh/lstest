<?php
  define("_VALID_PHP", true);
  define("_PIPN", true);

  require_once("../../init.php");

  /* only for debuggin purpose. Create logfile.txt and chmot to 0777
   ob_start();
   echo '<pre>';
   print_r($_POST);
   echo '</pre>';
   $logInfo = ob_get_contents();
   ob_end_clean();

   $file = fopen('logfile.txt', 'a');
   fwrite($file, $logInfo);
   fclose($file);
   */

  /* Check for mandatory fields */
  $r_fields = array(
		'status',
		'md5sig',
		'merchant_id',
		'pay_to_email',
		'mb_amount',
		'mb_transaction_id',
		'currency',
		'amount',
		'transaction_id',
		'pay_from_email',
		'mb_currency'
  );
  $mb_secret = getValue("extra3", "gateways", "name = 'moneybookers'");

  foreach ($r_fields as $f)
      if (!isset($_POST[$f]))
          die();

  /* Check for MD5 signature */
  $md5 = strtoupper(md5($_POST['merchant_id'] . $_POST['transaction_id'] . strtoupper(md5($mb_secret)) . $_POST['mb_amount'] . $_POST['mb_currency'] . $_POST['status']));
  if ($md5 != $_POST['md5sig'])
      die();

  if (intval($_POST['status']) == 2) {

	  list($user_id, $sesid) = explode("_", $_POST['custom']);

	  $cartrow = $content->getCartContent($sesid);
	  $totalrow = Content::getCart($sesid);

	  $payer_email = $_POST['pay_from_email'];
	  $receiver_email = $_POST['pay_to_email'];
      $mb_currency = $_POST['mb_currency'];
	  $mb_gross = $_POST['amount'];
	  $txn_id = $_POST['transaction_id'];

      $mb_email = getValue("extra", "gateways", "name = 'moneybookers'");
	  $getxn_id = $core->verifyTxnId($txn_id);

	  $v1 = compareFloatNumbers($mc_gross, $totalrow->totalprice, "=");
	  $items = array();


	  if ($receiver_email == $mb_email && $v1== true && $getxn_id == true) {
		  if($cartrow) {
			  foreach ($cartrow as $crow) {
				  $data = array(
						  'txn_id' => sanitize($txn_id),
						  'pid' => $crow->pid,
						  'uid' => intval($user_id),
						  'downloads' => 0,
						  'file_date' => time(),
						  'ip' => sanitize($_SERVER['REMOTE_ADDR']),
						  'created' => "NOW()",
						  'payer_email' => sanitize($payer_email),
						  'payer_status' => 'verified',
						  'item_qty' => $crow->total,
						  'coupon' => $totalrow->coupon,
						  'tax' => $totalrow->totaltax,
						  'price' => $crow->total * $crow->price,
						  'currency' => sanitize($mb_currency),
						  'pp' => "MoneyBookers",
						  'status' => 1,
						  'active' => 1
				  );
				  $items[$crow->price] = $crow->title;
				  $db->insert("transactions", $data);

                  $srow = Core::getRowById("packages", $crow->pid);
                  $enddate = date('Y-m-d', strtotime($date. ' + ' . $srow->duration . ' days'));
                  $sdata = array(
                      'uid'             => intval($user_id),
                      'pid'             => $srow->id,
                      'txn_id'          => sanitize($txn_id),
                      'limit'           => $srow->limit,
                      'usage'           => 0,
                      'start_date'      => "NOW()",
                      'end_date'        => $enddate,
                      'created'         => "NOW()"
                  );
                  $db->insert("subscriptions", $sdata);

			  }

			  unset($crow);
			  $xdata = array(
			      'invid' => date('Ymd').$db->insertid(),
				  'user_id' => $user->uid,
				  'items' => serialize($items),
				  'coupon' => $totalrow->coupon,
				  'originalprice' => $totalrow->originalprice,
				  'tax' => $totalrow->tax,
				  'totaltax' => $totalrow->totaltax,
				  'total' => $totalrow->total,
				  'totalprice' => $totalrow->totalprice,
				  'currency' => sanitize($_POST['currency_code']),
				  'created' => "NOW()",
				  );
			  $db->insert(Content::inTable, $xdata);
		  }

			/* == Notify Administrator == */
		  require_once(BASEPATH . "lib/class_mailer.php");
		  $row2 = Core::getRowById("email_templates", 5);
		  $usr = Core::getRowById("users", $user_id);

		  $body = str_replace(array('[USERNAME]', '[STATUS]', '[TOTAL]', '[PP]', '[IP]'),
		  array($usr->username, "Completed", $core->formatMoney($gross), "Skrill", $_SERVER['REMOTE_ADDR']), $row2->body);

		  $newbody = cleanOut($body);

		  $mailer = Mailer::sendMail();

		  $message = Swift_Message::newInstance()
				  ->setSubject($row2->subject)
				  ->setTo(array($core->site_email => $core->site_name))
				  ->setFrom(array($core->site_email => $core->site_name))
				  ->setBody($newbody, 'text/html');

		  $mailer->send($message);

		  /* == Notify User == */
		  $row3 = Core::getRowById("email_templates", 8);
		  $val = '
		  <table border="0" cellpadding="4" cellspacing="2">';
			$val .= '
			<thead>
			  <tr>
				<td width="20"><strong>#</strong></td>
				<td class="header">' . Lang::$word->PRD_NAME . '</td>
				<td class="header">' . Lang::$word->PRD_PRICE . '</td>
				<td class="header">' . Lang::$word->TXN_QTY . '</td>
				<td class="header">' . Lang::$word->CKO_TPRICE . '</td>
			  </tr>
			</thead>
			<tbody>
			';
			$i = 0;
			foreach ($cartrow as $ccrow) {
			$i++;
			$val .= '
			<tr>
			  <td style="border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed">' . $i . '.</td>
			  <td style="border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed">' . sanitize($ccrow->title, 30, false) . '</td>
			  <td style="border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed">' . $core->formatMoney($ccrow->price) . '</td>
			  <td align="center" style="border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed">' . $ccrow->total . '</td>
			  <td align="right" style="border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed">' . $core->formatMoney($ccrow->total * $ccrow->price) . '</td>
			</tr>
			';
			}
			unset($ccrow);
			$val .= '
			<tr>
			  <td colspan="4" align="right" valign="top" style="border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed"><strong>';
				$val .= Lang::$word->CKO_SUBT . ':<br />';
				$val .= Lang::$word->CKO_DISC . ':<br />';
				$val .= Lang::$word->VAT . ':<br />
				</strong></td>
			  <td align="right" valign="top" style="border-bottom-width:1px; border-bottom-color:#bbb; border-bottom-style:dashed"><strong>';
				$val .= $core->formatMoney($totalrow->originalprice) . '<br />';
				$val .= '- ' . $core->formatMoney($totalrow->coupon) . '<br />';
				$val .= '+ ' . $core->formatMoney($totalrow->total * $totalrow->tax) . '<br />
				</strong>';
				$val .= ' </td>
			</tr>
			<tr>
			  <td colspan="4" align="right" valign="top"><strong style="color:#F00">' . Lang::$word->CKO_GTOTAL . ':</strong></td>
			  <td align="right" valign="top"><strong style="color:#F00">' . $core->formatMoney($totalrow->tax * $totalrow->total + $totalrow->total) . '</strong></td>
			</tr>
			  </tbody>
		  </table>';

		  $body3 = str_replace(array('[USERNAME]', '[ITEMS]', '[SITENAME]', '[URL]'),
		  array($usr->username, $val, $core->site_url, $core->site_name), $row3->body);

		  $newbody2 = cleanOut($body3);

		  $mailer2 = Mailer::sendMail();
		  $message2 = Swift_Message::newInstance()
				  ->setSubject($row3->subject)
				  ->setTo(array($usr->email => $usr->username))
				  ->setFrom(array($core->site_email => $core->site_name))
				  ->setBody($newbody2, 'text/html');

		  $mailer2->send($message2);

		  $db->delete("cart", "user_id='" . $sesid . "'");
		  $db->delete("extras", "user_id='" . $sesid . "'");
	  }
  } else {
	  /* == Failed Transaction= = */
	  require_once(BASEPATH . "lib/class_mailer.php");
	  $row = $core->getRowById("email_templates", 6);
	  $usr = $core->getRowById("users", $user_id);


	  $body = str_replace(array('[USERNAME]', '[STATUS]', '[TOTAL]', '[PP]', '[IP]'),
	  array($usr->username, "Failed", $core->formatMoney($gross), "Skrill", $_SERVER['REMOTE_ADDR']), $row->body);

	  $newbody = cleanOut($body);

	  $mailer = $mail->sendMail();
	  $message = Swift_Message::newInstance()
			  ->setSubject($row->subject)
			  ->setTo(array($core->site_email => $core->site_name))
			  ->setFrom(array($core->site_email => $core->site_name))
			  ->setBody($newbody, 'text/html');

	  $mailer->send($message);
  }
?>
