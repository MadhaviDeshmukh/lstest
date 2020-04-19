<?php

  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
?>
<?php include("header.tpl.php");?>
<div id="titlebar" class="single">
	<div class="container">
		<div class="sixteen columns">
			<h2><?php echo $crumbs = include_once("crumbs.php");?></h2>
			<nav id="breadcrumbs">
				<ul>
					<li><?php echo Lang::$word->CRB_HERE;?>:</li>
					<li><a href="<?php echo SITEURL;?>/"><?php echo Lang::$word->CRB_HOME;?></a></li>
					<li><?php echo $crumbs;?></li>
				</ul>
			</nav>
		</div>
	</div>
</div>
<div class="container">
  <h2><?php echo Lang::$word->CKO_TITLE;?></h2>
  <div class="notification notice closeable">
      <p><?php echo Lang::$word->CKO_INFO;?></p>
  </div>
  <?php if(!$cartrow):?>
  <?php echo Filter::msgSingleAlert(Lang::$word->CKO_SUB);?>
  <?php else:?>
  <div id="process-checkout">
    <table class="jobboard">
      <thead>
        <tr>
          <th>#</th>
          <th><?php echo Lang::$word->PRD_NAME;?></th>
          <th><?php echo Lang::$word->PRD_PRICE;?></th>
          <th><?php echo Lang::$word->TXN_QTY;?></th>
          <th><?php echo Lang::$word->CKO_TPRICE;?></th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 0;?>
        <?php foreach ($cartrow as $ccrow): ?>
        <?php $i++;;?>
        <tr>
          <td><?php echo $i;?>.</td>
          <td><?php echo $ccrow->title;?></td>
          <td><?php echo number_format($ccrow->price, 2);?></td>
          <td><?php echo $ccrow->total;?></td>
          <td><?php echo number_format($ccrow->total * $ccrow->price, 2);?></td>
          <td><a data-id="<?php echo $ccrow->pid;?>" class="del-cart-full remove"><i class="fa fa-times-circle-o" aria-hidden="true"></i></a></td>
        </tr>
        <?php endforeach;?>
        <?php unset($ccrow);?>
      </tbody>
    </table>

    <div class="checkout-footer">

      <div class="twelve columns">
        <div class="action input">
          <input type="text" name="coupon" id="discount" placeholder="<?php echo Lang::$word->CKO_DISCODE;?>">
          <a id="verify-code" class="wojo basic button"><?php echo Lang::$word->CKO_VERIFY;?></a> <span id="totaldiscount" class="small-left-space"></span>
        </div>
      </div>
      <div class="four columns">
        <div id="cko" class="checkout-vertical">
          <div class="checkout-info"><?php echo Lang::$word->CKO_SUBT;?>: <span id="stotal"><?php echo number_format($cart->originalprice, 2);?></span></div>
          <div class="checkout-info"><?php echo Lang::$word->CKO_DISC;?>: - <span id="cptotal"><?php echo number_format($cart->coupon, 2);?></span></div>
          <?php if($core->tax):?>
          <div class="checkout-info"><?php echo Lang::$word->VAT;?>: + <span id="taxtotal"><?php echo number_format($cart->total * $cart->tax, 2);?></span></div>
          <?php endif;?>
          <div class="checkout-info"><?php echo Lang::$word->CKO_GTOTAL;?>: <span id="gtotal"><?php echo $core->formatMoney($cart->tax * $cart->total + $cart->total);?></span> </div>
          <a href="<?php echo SITEURL;?>/summary.php" class="button checkout-button"><?php echo Lang::$word->CKO_GOCKO;?> <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>

    <?php endif;?>
  </div>
</div>

<?php include("footer.tpl.php");?>
