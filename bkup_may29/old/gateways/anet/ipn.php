<?php
  define("_VALID_PHP", true);
  require_once ("../../init.php");

  if (!$user->logged_in)
      exit;

  function ccValidate($ccn, $type)
  {
      switch ($type) {
          case "A":
              //American Express
              $pattern = "/^([34|37]{2})([0-9]{13})$/";
              return (preg_match($pattern, $ccn)) ? true : false;
              break;

          case "DI":
              //Diner's Club
              $pattern = "/^([30|36|38]{2})([0-9]{12})$/";
              return (preg_match($pattern, $ccn)) ? true : false;
              break;

          case "D":
              //Discover Card
              $pattern = "/^([6011]{4})([0-9]{12})$/";
              return (preg_match($pattern, $ccn)) ? true : false;
              break;

          case "M":
              //Mastercard
              $pattern = "/^([51|52|53|54|55]{2})([0-9]{14})$/";
              return (preg_match($pattern, $ccn)) ? true : false;
              break;

          case "V":
              //Visa
              $pattern = "/^([4]{1})([0-9]{12,15})$/";
              return (preg_match($pattern, $ccn)) ? true : false;
              break;
      }
  }

  function ccnCheck($ccn)
  {
      $ccn = preg_replace('/\D/', '', $ccn);
      $num_lenght = strlen($ccn);
      $parity = $num_lenght % 2;

      $total = 0;
      for ($i = 0; $i < $num_lenght; $i++) {
          $digit = $ccn[$i];
          if ($i % 2 == $parity) {
              $digit *= 2;
              if ($digit > 9) {
                  $digit -= 9;
              }
          }
          $total += $digit;
      }
      return ($total % 10 == 0) ? true : false;
  }


  require 'autoload.php';

  $row2 = $db->first("SELECT * FROM " . Content::gTable . " WHERE name = 'anet'");
  $cartrow = $content->getCartContent();
  $totalrow = Content::getCart();

  define("AUTHORIZENET_API_LOGIN_ID", $row2->extra);
  define("AUTHORIZENET_TRANSACTION_KEY", $row2->extra3);
  define("AUTHORIZENET_SANDBOX", $row2->demo);

  if (isset($_POST['doAnet'])) {
      Filter::checkPost('fname', Lang::$word->FNAME);
      Filter::checkPost('lname', Lang::$word->LNAME);
      Filter::checkPost('email', Lang::$word->EMAIL);
      Filter::checkPost('address', Lang::$word->_UA_ADDRESS);
      Filter::checkPost('city', Lang::$word->_UA_CITY);
      Filter::checkPost('country', Lang::$word->_UA_COUNTRY);
      Filter::checkPost('state', Lang::$word->_UA_STATE);
      Filter::checkPost('zip', Lang::$word->_UA_ZIP);

      if (!isset($_POST['cctype']))
          Filter::$msgs['cctype'] = 'Please select your Credit Card Type';

      if (empty($_POST['ccn']))
          Filter::$msgs['ccn'] = 'Please enter your Credit Card number';

      if (!empty($_POST['ccn']) and isset($_POST['cctype'])) {
          if (!ccValidate($_POST['ccn'], $_POST['cctype']))
              Filter::$msgs['ccn'] = 'Credit Card number does not match the card type';

          if (!ccnCheck($_POST['ccn']))
              Filter::$msgs['ccn'] = 'Invalid credit card number.';
      }

      if (empty($_POST['ccname']))
          Filter::$msgs['ccname'] = 'Please enter name on your Credit Card';

      if (empty($_POST['cvv']))
          Filter::$msgs['cvv'] = 'Please enter your 3/4 digit CVV code';

      $items = array();

      if (empty(Filter::$msgs)) {
          $sale = new AuthorizeNetAIM;
          $sale->amount = $totalrow->totalprice;
          $sale->card_num = sanitize($_POST['ccn']);
          $sale->exp_date = sanitize($_POST['month'] . '/' . $_POST['year']);
          $response = $sale->authorizeAndCapture();
          $trans_id = $response->transaction_id;
          $staus = $response->approved;
          $case = 1;

          switch ($staus) {
              case $case:
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
                              'payer_email' => $user->email,
                              'payer_status' => "Verified",
                              'item_qty' => $crow->total,
                              'price' => $crow->total * $crow->price,
                              'coupon' => $totalrow->coupon,
                              'tax' => $totalrow->totaltax,
                              'currency' => "USD",
                              'pp' => "Authorize.Net",
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
                          $user->username,
                          $val,
                          $core->site_name,
                          SITEURL), $row3->body);

                      $newbody2 = cleanOut($body3);

                      $mailer2 = Mailer::sendMail();
                      $message2 = Swift_Message::newInstance()
								->setSubject($row3->subject)
								->setTo(array($user->email => $user->username))
								->setFrom(array($core->site_email => $core->site_name))
								->setBody($newbody2,'text/html');

                      $mailer2->send($message2);

                      $db->delete(Content::crTable, "user_id='" . $sesid . "'");
                      $db->delete(Content::exTable, "user_id='" . $sesid . "'");

                  }

                  Filter::msgOk("Your payment was <strong>APPROVED!</strong> and your items are added to your dashboard");
                  break;

              default:

                  Filter::msgError('API Error Code: ' . $response->response_reason_code . '<br>Description: ' . $response->response_reason_text);
                  break;

          }
          //echo '<pre>' . print_r($response, true) . '</pre>';

      } else
          print Filter::msgStatus();

  }

?>
