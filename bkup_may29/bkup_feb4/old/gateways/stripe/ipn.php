<?php
  define("_VALID_PHP", true);

  require_once ("../../init.php");
  require_once (dirname(__file__) . '/lib/Stripe.php');

  ini_set('log_errors', true);
  ini_set('error_log', dirname(__file__) . '/ipn_errors.log');

  if (!$user->logged_in)
      redirect_to("../../index.php");

  if (isset($_POST['processStripePayment'])) {
      $key = $db->first("SELECT * FROM gateways WHERE name = 'stripe'");
      $stripe = array("secret_key" => $key->extra, "publishable_key" => $key->extra3);
      Stripe::setApiKey($stripe['secret_key']);

      try {
          $charge = Stripe_Charge::create(array(
              "amount" => round($_POST['amount'] * 100, 0), // amount in cents, again
              "currency" => $_POST['currency_code'],
              "card" => array(
                  "number" => $_POST['card-number'],
                  "exp_month" => $_POST['card-expiry-month'],
                  "exp_year" => $_POST['card-expiry-year'],
                  "cvc" => $_POST['card-cvc'],
                  ),
              "description" => $_POST['item_name']));
          $json = json_decode($charge);
          $mc_gross = round(($json->{'amount'} / 100), 2);
		  $txn_id = $json->{'balance_transaction'};

		  /* == Payment Completed == */
		  $user_id = $user->uid;
		  $sesid = $user->sesid;
		  $cartrow = $content->getCartContent();
		  $totalrow = Content::getCart($sesid);

		  $v1 = compareFloatNumbers($mc_gross, $totalrow->totalprice, "=");
		  $items = array();

		  if ($v1 == true) {
			  if ($cartrow) {
				  $i = 0;
				  foreach ($cartrow as $crow) {
					  $i++;
					  $data = array(
						  'txn_id' => sanitize($txn_id),
						  'pid' => $crow->pid,
						  'uid' => intval($user->uid),
						  'downloads' => 0,
						  'file_date' => time(),
						  'ip' => sanitize($_SERVER['REMOTE_ADDR']),
						  'created' => "NOW()",
						  'payer_email' => sanitize($user->email),
						  'coupon' => $totalrow->coupon,
						  'tax' => $totalrow->totaltax,
						  'item_qty' => $crow->total,
						  'price' => $crow->total * $crow->price,
						  'currency' => sanitize($_POST['currency_code']),
						  'pp' => "Stripe",
						  'status' => 1,
						  'active' => 1);

					  $items[$crow->price] = $crow->title;
					  $db->insert(Jobs::txnTable, $data);

                      $srow = Core::getRowById(Jobs::pTable, $crow->pid);
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
                      $db->insert(Jobs::sbTable, $sdata);

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
			  require_once (BASEPATH . "lib/class_mailer.php");
			  $row2 = Core::getRowById(Content::eTable, 5);
			  $usr = Core::getRowById(Users::uTable, $user->uid);

			  $body = str_replace(array(
				  '[USERNAME]',
				  '[STATUS]',
				  '[TOTAL]',
				  '[PP]',
				  '[IP]'), array(
				  $usr->username,
				  "Completed",
				  $core->formatMoney($totalrow->totalprice),
				  "Stripe",
				  $_SERVER['REMOTE_ADDR']), $row2->body);

			  $newbody = cleanOut($body);

			  $mailer = Mailer::sendMail();
			  $message = Swift_Message::newInstance()
						->setSubject($row2->subject)
						->setTo(array($core->site_email => $core->site_name))
						->setFrom(array($core->site_email => $core->site_name))
						->setBody($newbody, 'text/html');

			  $mailer->send($message);

			  /* == Notify User == */
			  $row3 = Core::getRowById(Content::eTable, 8);
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

			  $body3 = str_replace(array(
				  '[USERNAME]',
				  '[ITEMS]',
				  '[SITE_NAME]',
				  '[URL]'), array(
				  $usr->username,
				  $val,
				  $core->site_name,
				  SITEURL), $row3->body);

			  $newbody2 = cleanOut($body3);
			  $mailer2 = Mailer::sendMail();

			  $message2 = Swift_Message::newInstance()
						->setSubject($row3->subject)
						->setTo(array($usr->email => $usr->username))
						->setFrom(array($core->site_email => $core->site_name))
						->setBody($newbody2, 'text/html');

			  $mailer2->send($message2);

			  $db->delete(Content::crTable, "user_id='" . $sesid . "'");
			  $db->delete(Content::exTable, "user_id='" . $sesid . "'");

			  $jn['type'] = 'success';
			  $jn['message'] = 'Thank you payment completed';
			  print json_encode($jn);
		  }

      }
      catch (Stripe_CardError $e) {
          //$json = json_decode($e);
          $body = $e->getJsonBody();
          $err = $body['error'];
          $json['type'] = 'error';
          Filter::$msgs['status'] = 'Status is:' . $e->getHttpStatus() . "\n";
          Filter::$msgs['type'] = 'Type is:' . $err['type'] . "\n";
          Filter::$msgs['code'] = 'Code is:' . $err['code'] . "\n";
          Filter::$msgs['param'] = 'Param is:' . $err['param'] . "\n";
          Filter::$msgs['msg'] = 'Message is:' . $err['message'] . "\n";
          $json['message'] = Filter::msgStatus();
          print json_encode($json);
      }
      catch (Stripe_InvalidRequestError $e) {}
      catch (Stripe_AuthenticationError $e) {}
      catch (Stripe_ApiConnectionError $e) {}
      catch (Stripe_Error $e) {}
      catch (exception $e) {}
  }
?>
