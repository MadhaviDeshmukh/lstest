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
    <h2><?php echo Lang::$word->SMY_TITLE;?></h2>
    <?php if(!$user->logged_in):?>
    <?php Filter::msgAlert(Lang::$word->SMY_SUB);?>
    <?php else:?>
    <?php if(!$cartrow):?>
    <?php echo Filter::msgAlert(Lang::$word->CKO_SUB);?>
    <?php else:?>
    <?php if(Registry::get("Core")->tax and $user->country == ""):?>
    <?php echo Filter::msgSingleAlert(str_replace(array("[]", "[/]"), array('<a href="' . SITEURL . '/profile.php">','</a>'), Lang::$word->CKO_SUBC));?>
    <?php else:?>
    <table class="jobboard">
      <thead>
        <tr>
          <th>#</th>
          <th><?php echo Lang::$word->PRD_NAME;?></th>
          <th><?php echo Lang::$word->PRD_PRICE;?></th>
          <th><?php echo Lang::$word->TXN_QTY;?></th>
          <th><?php echo Lang::$word->CKO_TPRICE;?></th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 0;?>
        <?php foreach ($cartrow as $ccrow): ?>
        <?php $i++;;?>
        <tr>
          <td><?php echo $i;?>.</td>
          <td><?php echo $ccrow->title;?></td>
          <td><?php echo $core->formatMoney($ccrow->price);?></td>
          <td><?php echo $ccrow->total;?></td>
          <td><?php echo $core->formatMoney($ccrow->total * $ccrow->price);?></td>
        </tr>
        <?php endforeach;?>
        <?php unset($ccrow);?>
      </tbody>
    </table>

    <div class="checkout-footer">
      <div class="twelve columns">
          <?php if ($cart->originalprice > 0): ?>
            <?php if($gaterow):?>
            <h4><?php echo Lang::$word->CKO_SELPAY;?></h4>
            <?php foreach($gaterow as $grow):?>
            <a class="load-gateway" data-id="<?php echo $grow->id;?>" data-content="<?php echo $grow->displayname;?>"> <img src="<?php echo SITEURL.'/gateways/'.$grow->dir.'/'.$grow->name.'.png';?>" alt="" /></a>
            <?php endforeach;?>
            <?php endif;?>
            <br>
            <div id="show-result" class="small-top-space"></div>
        <?php else : ?>
            <div class="freecheckout">
                <a onclick="freeCheckout('<?php echo $cartrow[0]->user_id; ?>',<?php echo $cartrow[0]->pid; ?>);" class="button" />Proceed With Free &nbsp; <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
        <?php endif; ?>
      </div>
      <div class="four columns">
        <div id="cko" class="checkout-vertical">
          <div class="checkout-info">
              <?php echo Lang::$word->CKO_SUBT;?>: <?php echo number_format($cart->originalprice, 2);?>
          </div>
          <div class="checkout-info">
              <?php echo Lang::$word->CKO_DISC;?>: - <?php echo number_format($cart->coupon, 2);?>
          </div>
          <?php if($core->tax):?>
              <div class="checkout-info">
                  <?php echo Lang::$word->VAT;?>: + <?php echo number_format($cart->total * $cart->tax, 2);?>
              </div>
          <?php endif;?>
          <div class="checkout-info">
              <?php echo Lang::$word->CKO_GTOTAL;?>: <b><?php echo $core->formatMoney($cart->tax * $cart->total + $cart->total);?></b>
          </div>

        </div>
      </div>
    </div>
      <?php endif;?>
      <?php endif;?>
      <?php endif;?>
</div>
<?php include("footer.tpl.php");?>
<script type="text/javascript">
    function freeCheckout(user_id,pid) {
        var dataString = 'freeCheckout=' + 1 + '&user_id=' + user_id + '&pid=' + pid;
        $.ajax({
          type:"POST",
          url:"ajax/jobs.php",
          data: dataString,
          cache: false,
           success: function (html) {
                var url = '<?php echo SITEURL . '/account.php'?>';
                window.location.href = url;
           }
        });
        return false;
    }
</script>
