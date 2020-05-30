<?php
  define("_VALID_PHP", true);
  define("_PIPN", true);

  ini_set('log_errors', true);
  ini_set('error_log', dirname(__file__) . '/ipn_errors.log');

  if (isset($_POST['payment_status'])) {
      require_once ("../../init.php");

      include (BASEPATH . 'lib/class_pp.php');
      $demo = getValue("demo", Content::gTable, "name = 'paypal'");

      $listener = new IpnListener();
      $listener->use_live = $demo;
      $listener->use_ssl = false;
      $listener->use_curl = true;

      try {
          $listener->requirePostMethod();
          $ppver = $listener->processIpn();
      }
      catch (exception $e) {
          error_log($e->getMessage());
          exit(0);
      }

      $payment_status = $_POST['payment_status'];
      $receiver_email = $_POST['receiver_email'];
      $payer_email = $_POST['payer_email'];
      $payer_status = $_POST['payer_status'];
      $mc_currency = $_POST['mc_currency'];
      $mc_fee = isset($_POST['mc_fee']) ? floatval($_POST['mc_fee']) : 0.00;

      list($user_id, $sesid) = explode('_', $_POST['custom']);
      $mc_gross = $_POST['mc_gross'];
      $txn_id = $_POST['txn_id'];

      $getxn_id = $core->verifyTxnId($txn_id);

      $cartrow = $content->getCartContent($sesid);
	  $totalrow = Content::getCart($sesid);
	  $v1 = compareFloatNumbers($mc_gross, $totalrow->totalprice, "=");
	  $items = array();

      $pp_email = getValue("extra", Content::gTable, "name = 'paypal'");

      if ($ppver) {
          if ($_POST['payment_status'] == 'Completed') {
              if ($receiver_email == $pp_email && $v1 == true && $getxn_id == true) {
                  if ($cartrow) {
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
                                'payer_status' => sanitize($payer_status),
                                'item_qty' => $crow->total,
                                'price' => $crow->total * $crow->price,
                                'coupon' => $totalrow->coupon,
                                'tax' => $totalrow->totaltax,
                                'mc_fee' => $mc_fee,
                                'currency' => sanitize($mc_currency),
                                'pp' => "PayPal",
                                'status' => 1,
                                'active' => 1
                            );

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

                        $db->insert(Content::inTable, $xdata);                  }

                  /* == Notify Administrator == */
                  require_once (BASEPATH . "lib/class_mailer.php");
                  $row2 = Core::getRowById(Content::eTable, 5);
                  $usr = Core::getRowById(Users::uTable, $user_id);

                  $body = str_replace(array(
                      '[USERNAME]',
                      '[STATUS]',
                      '[TOTAL]',
                      '[PP]',
                      '[IP]'), array(
                      $usr->username,
                      "Completed",
                      $core->formatMoney($gross),
                      "PayPal",
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
              }

          } else {
              /* == Failed Transaction= = */
              require_once (BASEPATH . "lib/class_mailer.php");
              $row = Core::getRowById(Content::eTable, 6);
              $usr = Core::getRowById(Users::uTable, $user_id);


			  $body = str_replace(array('[USERNAME]','[STATUS]','[TOTAL]','[PP]','[IP]'), array(
			  $usr->username,"Failed",$core->formatMoney($gross),"PayPal",$_SERVER['REMOTE_ADDR']), $row->body);

              $newbody = cleanOut($body);

			  $mailer = Mailer::sendMail();
			  $message = Swift_Message::newInstance()
			  ->setSubject($row->subject)
			  ->setTo(array($core->site_email => $core->site_name))
			  ->setFrom(array($core->site_email => $core->site_name))
			  ->setBody($newbody, 'text/html');

			  $mailer->send($message);

          }
      }
  }
?>
