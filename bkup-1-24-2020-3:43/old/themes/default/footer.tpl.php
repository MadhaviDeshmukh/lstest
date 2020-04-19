<?php
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
?>

<!-- Footer
================================================== -->
<div class="margin-top-15"></div>

<div id="footer">
	<!-- Main -->
	<div class="container">

		<div class="seven columns">
			<h4>Connect with us</h4>
			<?php echo cleanOut($core->inv_info); ?>
		</div>

		<div class="nine columns">
            <?php $menu = $content->getFooterMenu(); ?>
            <ul class="footer-links footer-menu">
            <?php foreach ($menu as $mrow) {
                //echo '<li>' . $mrow['name'] . '</li>';
                echo '<li><a href="' . $mrow['url'] . '" ' . $mrow['target'] . '>' . $mrow['name'] . '</a></li>';
            } ?>
            </ul>
		</div>
	</div>

	<!-- Bottom -->
	<div class="container">
		<div class="footer-bottom">
			<div class="sixteen columns">
				<h4>Follow Us</h4>
				<ul class="social-icons">
					<?php echo ($core->facebook_url != '') ? '<li><a class="facebook" href="' . $core->facebook_url . '"><i class="fa fa-facebook"></i></a></li>' : ''; ?>
					<?php echo ($core->twitter_url != '') ? '<li><a class="twitter" href="' . $core->twitter_url . '"><i class="fa fa-twitter"></i></a></li>' : ''; ?>
					<?php echo ($core->google_plus_url != '') ? '<li><a class="gplus" href="' . $core->google_plus_url . '"><i class="fa fa-google-plus"></i></a></li>' : ''; ?>
					<?php echo ($core->linkedin_url != '') ? '<li><a class="linkedin" href="' . $core->linkedin_url . '"><i class="fa fa-linkedin"></i></a></li>' : ''; ?>
				</ul>
				<div class="copyrights">
                    <?php echo ($core->copyright != '') ? cleanOut($core->copyright) : "Copyright &copy; " . date('Y') . " " . $core->site_name . " " .  $core->company .' &bull;  ' . $core->site_name . ' v' . $core->version; ?>
                </div>
			</div>
		</div>
	</div>

</div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="index.html#"></a></div>

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="<?php echo THEMEURL;?>/scripts/custom.js"></script>
<script src="<?php echo THEMEURL;?>/scripts/jquery.superfish.js"></script>
<script src="<?php echo THEMEURL;?>/scripts/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo THEMEURL;?>/scripts/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo THEMEURL;?>/scripts/jquery.themepunch.showbizpro.min.js"></script>
<script src="<?php echo THEMEURL;?>/scripts/jquery.flexslider-min.js"></script>
<script src="<?php echo THEMEURL;?>/scripts/chosen.jquery.min.js"></script>
<script src="<?php echo THEMEURL;?>/scripts/jquery.magnific-popup.min.js"></script>
<script src="<?php echo THEMEURL;?>/scripts/waypoints.min.js"></script>
<script src="<?php echo THEMEURL;?>/scripts/jquery.counterup.min.js"></script>
<script src="<?php echo THEMEURL;?>/scripts/jquery.jpanelmenu.js"></script>
<script src="<?php echo THEMEURL;?>/scripts/stacktable.js"></script>

<!-- WYSIWYG Editor -->
<script type="text/javascript" src="<?php echo THEMEURL;?>/scripts/jquery.sceditor.bbcode.min.js"></script>
<script type="text/javascript" src="<?php echo THEMEURL;?>/scripts/jquery.sceditor.js"></script>

<?php if($core->analytics):?>
<!-- Google Analytics -->
<?php echo cleanOut($core->analytics);?>
<!-- Google Analytics /-->
<?php endif;?>
<?php if(isset($_GET['msg'])):?>
<?php Core::downloadErrors();?>
<script type="text/javascript">
$(document).ready(function () {
	var text = $("#showerror").html();
	new Messi(text, {
		title: "Error",
		modal: true
	});
});
</script>
<?php endif;?>
<script type="text/javascript">
$(document).ready(function () {
    /* == Remove Item == */
    $('body').on('click', 'a.delcart', function() {
      id = $(this).attr("data-id");
      var parent = $(this).closest(".item")
      $.ajax({
        type: 'post',
        dataType: 'json',
        url: SITEURL + "/ajax/cart.php",
        data: {
          'delcart': 1,
          'id': id
        },
        beforeSend: function() {
          parent.slideUp(600);
        },
        success: function(json) {
          setTimeout(function() {
            $("span#cart-status").html(json.message).fadeIn("slow");
            $("span#csub").html(json.total).fadeIn("slow");
            $("#cartList").html(json.cart).fadeIn("slow");
          }, 1500);
        }
      });
    });

    $('body').on('click', 'a.del-cart-full', function() {
        id = $(this).data("id");
        var parent = $(this).parent().parent();
        $.ajax({
            type: "post",
            dataType: 'json',
            url: SITEURL + "/ajax/cart.php",
            data: {
                'delfulcart': 1,
                'id': id
            },
            beforeSend: function() {
                parent.animate({
                    'backgroundColor': '#FFBFBF'
                }, 400);
            },
            success: function(json) {
                parent.fadeOut(400, function() {
                    parent.remove();
                });
                setTimeout(function() {
                    $("span#cart-status").html(json.message).fadeIn("slow");
                    $("span#cptotal").html("0.00").fadeIn("slow");
                    $("span#gtotal").html(json.total).fadeIn("slow");
                    $("span#stotal").html(json.subt).fadeIn("slow");
            $("span#taxtotal").html(json.tax).fadeIn("slow");
                }, 1500);
            }

        });
      });

  /* Load Gateways */
  $("a.load-gateway").on("click", function () {
    var id = $(this).data('id')
    $.ajax({
      type: "post",
      url: SITEURL + "/ajax/controller.php",
      data: {
        'loadgateway': 1,
         'id': id
         },
      success: function (msg) {
        $("#show-result").html(msg);

      }
    });
    return false;
  });

  /* Verify Coupon Code */
  $("#verify-code").on("click", function() {
    if($('#discount').val() != ''){
      $.ajax({
        type: "post",
        url: SITEURL + "/ajax/coupon.php",
        dataType: 'json',
        data: 'coupon=' + $('#discount').val(),
        success: function(json) {
          $("#totaldiscount").html(json.coupon);
          if (json.type == "success") {
            setTimeout(function() {
              //$("span#gtotal").html(json.gtotal).fadeIn("slow");
              //$("span#cptotal").html(json.cdata).fadeIn("slow");

              $("span#cptotal").html(json.ctotal).fadeIn("slow");
              $("span#gtotal").html(json.gtotal).fadeIn("slow");
              $("span#stotal").html(json.subt).fadeIn("slow");
              $("span#taxtotal").html(json.tax).fadeIn("slow");

            }, 800);
          }
        }
      });
    }
  });
});
</script>
</body>
</html>
