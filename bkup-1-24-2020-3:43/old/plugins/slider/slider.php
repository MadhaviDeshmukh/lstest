<?php
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');

	  $slides = $content->getSlides();
?>
<!-- Start Slider-->
<?php if($slides):?>
<?php $conf = $content->sliderConfiguration();?>

  <!-- Slider
  ================================================== -->
  <div class="fullwidthbanner-container">
  	<div class="fullwidthbanner">
  		<ul>

  			<!-- Slide 1 -->
        <?php foreach ($slides as $srow):?>
  			<li data-fstransition="fade" data-transition="fade" data-slotamount="10" data-masterspeed="300">

  				<img src="<?php echo UPLOADURL . '/slider/' . $srow->thumb;?>" alt="">

  				<div class="caption title sfb" data-x="<?php echo $srow->alignment;?>" data-y="165" data-speed="400" data-start="800"  data-easing="easeOutExpo">
  					<?php if($conf->showCaptions):?><h2><?php echo $srow->caption;?></h2><?php endif;?>
  				</div>

  				<div class="caption text sfb" data-x="<?php echo $srow->alignment;?>" data-y="240" data-speed="400" data-start="1200" data-easing="easeOutExpo">
  					<p align="<?php echo $srow->alignment;?>"><?php echo $srow->body;?></p>
  				</div>

          <?php if($srow->urltype != "nourl"):?>
            <?php $url = ($core->seo) ? SITEURL . '/product/' . $srow->url . '/' : SITEURL . '/item.php?itemname=' . $srow->url;?>
          		<div class="caption sfb" data-x="<?php echo $srow->alignment;?>" data-y="370" data-speed="400" data-start="1600" data-easing="easeOutExpo">
          			<a href="<?php echo ($srow->urltype == "ext") ? $srow->url : $url;?>" <?php echo ($srow->urltype == "ext") ? "target=\"_blank\"" : "target=\"_self\"";?> class="slider-button"><?php echo ($srow->button_text != '') ? $srow->button_text : 'Get Started';?></a>
          		</div>
          <?php endif;?>

  			</li>
        <?php endforeach;?>
        <?php unset($srow);?>

  		</ul>
  	</div>
  </div>

<script src="<?php echo SITEURL;?>/plugins/slider/slider.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$("head").append("<link rel='stylesheet' type='text/css' href='<?php echo SITEURL;?>/plugins/slider/style.css' />");
	$(".ns-slider").nerveSlider({
		sliderWidth: '3600px',
		sliderHeightAdaptable:<?php echo $conf->sliderHeightAdaptable;?>,
		<?php if(!$conf->sliderHeightAdaptable):?>
		sliderHeight: "<?php echo $conf->sliderHeight;?>px",
		<?php endif;?>
		slideTransitionSpeed: <?php echo $conf->slideTransitionSpeed;?>,
		slideTransitionEasing: "<?php echo $conf->slideTransitionEasing;?>",
		slideTransitionDelay: <?php echo $conf->slideTransitionDelay;?>,
		slideTransition: "<?php echo $conf->slideTransition;?>",
		showFilmstrip: <?php echo $conf->showFilmstrip;?>,
		showCaptions:<?php echo $conf->showCaptions;?>,
		simultaneousCaptions: <?php echo $conf->simultaneousCaptions;?>,
		slideTransitionDirection:"<?php echo $conf->slideTransitionDirection;?>",
		sliderFullscreen:0,
		sliderResizable: true,
		showArrows: <?php echo $conf->showArrows;?>,
		showDots: <?php echo $conf->showDots;?>,
		showPause: <?php echo $conf->showPause;?>,
		showTimer: <?php echo $conf->showTimer;?>,
		slideReverse: <?php echo $conf->slideReverse;?>,
		slideShuffle: <?php echo $conf->slideShuffle;?>,
		sliderAutoPlay: <?php echo $conf->sliderAutoPlay;?>,
		waitForLoad: <?php echo $conf->waitForLoad;?>,
		slideImageScaleMode: "<?php echo $conf->slideImageScaleMode;?>",
		});
});
</script>
<?php endif;?>
<!-- End Slider/-->
