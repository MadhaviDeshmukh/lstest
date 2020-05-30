<?php
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');

   $cartrow = $content->getCartContent();
   $cart = $content->getCart();
?>
<div class="wojo basic button">
<form action="https://www.moneybookers.com/app/payment.pl" method="post" id="mb_form" name="mb_form">
  <input type="image" src="gateways/skrill/skrill_big.png" style="vertical-align:middle;border:0;width:160px;margin-right:10px" name="submit" title="Pay With Skrill" alt="" onclick="document.mb_form.submit();"/>
  <input type="hidden" name="pay_to_email" value="<?php echo $row->extra;?>" />
  <input type="hidden" name="recipient_description" value="<?php echo $core->company;?>" />
  <input type="hidden" name="transaction_id" value="<?php echo rand(10,99)?>A<?php echo rand(10,999)?>Z<?php echo rand(10,9999)?>" />
  <input type="hidden" name="language" value="EN" />
  <input type="hidden" name="logo_url" value="<?php echo ($core->logo) ? SITEURL.'/uploads/'.$core->logo : $core->company;?>" />
  <input type="hidden" name="return_url" value="<?php echo SITEURL;?>/account.php" />
  <input type="hidden" name="cancel_url" value="<?php echo SITEURL;?>/account.php" />
  <input type="hidden" name="status_url" value="<?php echo SITEURL.'/gateways/'.$row->dir;?>/ipn.php" />
  <input type="hidden" name="merchant_fields" value="session_id, item, custom" />
  <input type="hidden" name="item" value="Purchase from <?php echo $core->site_name; ?>" />
  <input type="hidden" name="session_id" value="<?php echo md5(time())?>" />
  <input type="hidden" name="custom" value="<?php echo $user->uid.'_'.$user->sesid;?>" />
  <input type="hidden" name="amount" value="<?php echo $cart->totalprice;?>" />
  <input type="hidden" name="currency" value="<?php echo ($row->extra2) ? $row->extra2 : $core->currency;?>" />
  <?php $x = 0;?>
  <?php foreach ($cartrow as $crow):?>
  <?php $x++; ?>
  <input type="hidden" name="detail<?php echo $x;?>_text" value="<?php echo $crow->total.' x '.cleanOut($crow->title);?>" />
  <input type="hidden" name="detail<?php echo $x;?>_description" value="Product Name:">
  <?php endforeach;?>
  <?php unset($crow);?>
</form>
</A>