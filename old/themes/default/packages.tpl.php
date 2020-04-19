<?php
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
?>
<?php if($packagesrow):
  $total = count((array)$packagesrow);
  $column = ($total < 4) ? 'one-third column' : 'four columns' ;
?>
<div class="container">

    <div class="add-to-cart-message">
    </div>

    <?php foreach($packagesrow as $prow):?>
  	<div class="plan <?php echo ($prow->featured == 1) ? 'color-2 ' .$column : 'color-1 ' .$column ;?>">
  		<div class="plan-price">
  			<h3><?php echo $prow->name;?></h3>
  			<span class="plan-currency"><?php echo $core->cur_symbol;?></span>
  			<span class="value"><?php echo $prow->price;?></span>
  		</div>
  		<div class="plan-features">
        <?php echo cleanOut($prow->features);?>
        <a data-cart-item="true" data-id="<?php echo $prow->id;?>" rel="nofollow" class="button"><i class="fa fa-shopping-cart"></i> Buy Subscription</a>
  		</div>
  	</div>
    <?php endforeach;?>
    <div class="add-to-cart-message">
    </div>
</div>


<?php endif;?>
<script type="text/javascript">
$(document).ready(function () {
    /* == Cart Functions == */
    $('body').on('click', 'a[data-cart-item]', function() {
      id = $(this).attr("data-id");
      $(".add-to-cart-message").html('<a href="<?php echo SITEURL . '/checkout.php'; ?>">Package added to you cart. Click here to navigate to checkout page</a>').fadeIn("slow");
      var $item = $(this).closest(".plan");
      var $check = $(this).closest(".footer").find('span');
      $.ajax({
        type: "post",
        dataType: 'json',
        url: SITEURL + "/ajax/cart.php",
        data: {
          'addtocart': 1,
          'type': 'package',
          'id': id
        },
        success: function(json) {
          if (json.type == "success") {
              $(".addtocartmessage").html('<a href="<?php echo SITEURL . '/checkout.php'; ?>">Package added to you cart. Click here to navigate to checkout page</a>').fadeIn("slow");
          }
        }

      });
    });
    // end of cart
});
</script>
