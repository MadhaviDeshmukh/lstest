<?php
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
	  
   $cartrow = $content->getCartContent();
   $cart = $content->getCart();
?>
<div class="wojo basic button">
  <?php $url = ($row->demo == '0') ? 'sandbox.Payza.com/sandbox/payprocess.aspx' : 'secure.payza.com/checkout';?>
  <form action="https://<?php echo $url;?>" method="post" class="xform" id="ap_form" name="ap_form">
    <input type="image" src="gateways/payza/payza_big.png" name="submit" style="vertical-align:middle;border:0;width:171px;margin-right:10px" title="Pay With Payza" alt="" onclick="document.ap_form.submit();"/>
    <input type="hidden" name="ap_purchasetype" value="item"/>
    <input type="hidden" name="ap_merchant" value="<?php echo $row->extra;?>" />
    <input type="hidden" name="ap_returnurl" value="<?php echo SITEURL;?>/account.php" />
    <input type="hidden" name="ap_currency" value="<?php echo ($row->extra2) ? $row->extra2 : $core->currency;?>" />
    <input type="hidden" name="apc_1" value="<?php echo $user->uid.'_'.$user->sesid;?>" />
    <?php if($cart->coupon <> 0):?>
    <input type="hidden" name="ap_discountamount" value="<?php echo $cart->coupon;?>" />
    <?php endif;?>
    <?php if($core->tax):?>
    <input type="hidden" name="ap_taxamount" value="<?php echo number_format($cart->total * $cart->tax, 2);?>" />
    <?php endif;?>
    <?php $x = 0;?>
    <?php foreach ($cartrow as $crow):?>
    <?php $x++; ?>
    <input type="hidden" name="ap_itemname_<?php echo $x;?>" value="<?php echo $crow->title;?>" />
    <input type="hidden" name="ap_itemcode_<?php echo $x;?>" value="<?php echo $crow->pid;?>" />
    <input type="hidden" name="ap_quantity_<?php echo $x;?>" value="<?php echo $crow->total;?>" />
    <input type="hidden" name="ap_amount_<?php echo $x;?>" value="<?php echo $crow->price;?>" />
    <?php endforeach;?>
    <?php unset($crow);?>
  </form>
</div>