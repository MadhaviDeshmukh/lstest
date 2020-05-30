<?php
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
	  
	  $slides = $content->getSlides();
?>
<!-- Start Slider-->
<?php if($slides):?>
<?php $conf = $content->sliderConfiguration();?>
  <div class="ns-slider">
    <?php foreach ($slides as $srow):?>
    <?php $url = ($core->seo) ? SITEURL . '/product/' . $srow->url . '/' : SITEURL . '/item.php?itemname=' . $srow->url;?>
      <?php if($srow->urltype == "nourl"):?>
      <img src="<?php echo UPLOADURL . '/slider/' . $srow->thumb;?>" <?php if($conf->showCaptions):?>data-slidecaption="<h1><?php echo $srow->caption;?></h1>"<?php endif;?> alt="">
      <?php else:?>
      <a href="<?php echo ($srow->urltype == "ext") ? $srow->url : $url;?>" <?php echo ($srow->urltype == "ext") ? "target=\"_blank\"" : "target=\"_self\"";?>><img src="<?php echo UPLOADURL . '/slider/' . $srow->thumb;?>" <?php if($conf->showCaptions):?>data-slidecaption="<h1><?php echo $srow->caption;?></h1>"<?php endif;?> alt=""></a>
      <?php endif;?>
    <?php endforeach;?>
    <?php unset($srow);?>
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