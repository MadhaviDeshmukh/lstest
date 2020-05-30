<?php
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
	  
  $cartdata = $content->renderCart();
?>
<!-- Start Cart-->
<div class="wojo quaternary segment">
  <div class="wojo header"><i class="icon cart"></i>  <?php echo Lang::$word->PLG_CART;?></div>
  <div id="cartList" class="wojo divided list">
    <?php if($cartdata) :?>
    <?php $trow = $db->first("SELECT sum(price) as total FROM " . Content::crTable . " WHERE user_id = '" . $db->escape(Registry::get("Users")->sesid) . "'");?>
    <?php foreach ($cartdata as $crtrow) :?>
    <?php $thumb = SITEURL . '/thumbmaker.php?src='.UPLOADURL . '/prod_images/'.$crtrow->thumb.'&amp;h=35&amp;w=35';?>
    <?php  $url = (Registry::get("Core")->seo) ? SITEURL . '/product/' . $crtrow->slug . '/' : SITEURL . '/item.php?itemname=' . $crtrow->slug;?>
    <div class="item"><img src="<?php echo $thumb;?>" alt="" class="tooltip" title="<?php echo $crtrow->title;?>"/> <a data-id="<?php echo $crtrow->pid;?>" class="delcart right tiny circular floated negative wojo icon button"><i class="icon trash"></i></a>
      <div class="content"> <a class="header" href="<?php echo $url;?>"><?php echo truncate($crtrow->title, 30);?></a>
        <p><?php echo Registry::get("Core")->formatMoney($crtrow->price) . ' x ' . $crtrow->total;?></p>
      </div>
    </div>
    <?php endforeach;?>
    <?php else:?>
    <div class="item"> <i class="icon ban circle"></i> <?php echo Lang::$word->CKO_SUB;?> </div>
    <?php  endif;?>
  </div>
  <div class="wojo divider"></div>
  <a data-content="<?php echo Lang::$word->CKO_GOCKO;?>" href="<?php echo SITEURL;?>/checkout.php" class="wojo right info labeled icon button"><i class="icon chevron right"></i><?php echo Lang::$word->SUBTOTAL ;?>: <span id="csub"><?php echo ($cartdata) ? Registry::get("Core")->formatMoney($trow->total) : "0.00";?></span></a> </div>
<!-- End Cart/--> 