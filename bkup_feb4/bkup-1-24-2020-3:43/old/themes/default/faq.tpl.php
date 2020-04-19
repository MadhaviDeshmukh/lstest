<?php
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
?>
<!-- Start F.A.Q. -->
<?php if($faqrow):?>
<div class="container">
  <div id="faq">
    <div class="clearfix"><a class="expand_all faq-button button"><?php echo Lang::$word->PLG_FAQ_V;?></a></div>
    <?php foreach($faqrow as $frow):?>
    <section class="clearfix">
      <h4 class="question"><i class="fa icon fa-plus"></i> <?php echo $frow->question;?></h4>
      <div class="answer clearfix"><?php echo cleanOut($frow->answer);?></div>
    </section>
    <?php endforeach;?>
    <?php endif;?>
  </div>
</div>
<script type="text/javascript">
// <![CDATA[
$(document).ready(function () {
    $('h4.question').on('click', function () {
        var parent = $(this).parent();
		    var active = $(this).parent();
        var answer = parent.find('.answer');
        var icon = parent.find('.icon');

        if (answer.is(':visible')) {
            answer.slideUp(100, function () {
              answer.slideUp();
              active.removeClass('active');
              icon.removeClass('fa-minus');
              icon.addClass('fa-plus');
            });
        } else {
            answer.fadeIn(300, function () {
              answer.slideDown();
              active.addClass('active');
              icon.removeClass('fa-plus');
              icon.addClass('fa-minus');
            });
        }
    });

    $("a.expand_all").on("click", function () {
        if (!$('.answer').is(':visible')) {
            $(this).attr('data-hint', '<?php echo Lang::$word->PLG_FAQ_H;?>');
            $('.answer').slideDown(150);
            $('.icon').removeClass('fa-plus');
            $('.icon').addClass('fa-minus');
        } else {
            $(this).attr('data-hint', '<?php echo Lang::$word->PLG_FAQ_V;?>');
            $('.answer').slideUp(150);
            $('.icon').removeClass('fa-minus');
            $('.icon').addClass('fa-plus');
        }
    });
});
// ]]>
</script>
<!-- End F.A.Q./-->
