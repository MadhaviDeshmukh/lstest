<?php
if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
?>
<?php include("header.tpl.php");?>

<!-- Titlebar
================================================== -->
<div id="titlebar" class="resume">
	<div class="container">
		<div class="ten columns">
			<div class="resume-titlebar">
				<img src="<?php echo ($resume->avatar != '') ? UPLOADURL. 'avatars/' . $resume->avatar : THEMEURL . '/images/avatar-placeholder.png'; ?>" alt="<?php echo $resume->fullname;?>">
				<div class="resumes-list-content">

                    <h4><?php echo $resume->fullname; ?> <span><?php echo $resume->title; ?></span></h4>

                    <span class="icons"><i class="fa fa-map-marker"></i> <?php echo ($resume->city != '') ? $resume->city : ''; ?><?php echo ($resume->state != '') ? ', ' . $resume->state : ''; ?><?php echo ($resume->country != '') ? ', ' . $resume->country : ''; ?></span>

                    <span class="icons"><i class="fa fa-money"></i> <?php echo ($resume->hourly_rate != '') ? '$' . $resume->hourly_rate . ' / hour' : ''; ?></span>

                    <?php echo ($resume->website != '') ? '<span class="icons"><a href="' . $resume->website . '" target="_blank"><i class="fa fa-link"></i> Website</a></span>' : ''; ?>

                    <?php echo ($resume->email != '') ? '<span class="icons"><a href="mailto:' . $resume->email . '"><i class="fa fa-envelope"></i>' . $resume->email . '</a></span>' : ''; ?>

                    <div class="skills">
                        <?php $jobs->getJobSkillTags($resume->skills) ?>
                    </div>
					<div class="clearfix"></div>

				</div>
			</div>
		</div>

		<div class="six columns" id="bmid">
             <?php echo ( $jobs->bookmarkCheck('resume',$resume->uid) == 1 ) ? '<a onclick="unbookmark(\'resume\',' . $resume->uid . ');" class="button dark bookmarked"><i class="fa fa-minus-circle"></i> Remove From Bookmarks</a>' : '<a onclick="bookmark(\'resume\','. $resume->uid .');" class="button dark bookmark"><i class="fa fa-plus-circle"></i> Add To Bookmarks</a>'; ?>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<!-- Recent Jobs -->
	<div class="eight columns">
	<div class="padding-right">

		<h3 class="margin-bottom-15">Career Objective</h3>

		<p>
			<?php echo $resume->objective; ?>
		</p>

        <h3 class="margin-bottom-20">Education</h3>
        <?php $education = unserialize($resume->education); ?>

		<dl class="resume-table">
            <?php foreach( $education as $key=>$value ) { ?>
                <?php if($value['name'] != ''){ ?>
                    <dt>
        				<strong><?php echo $value['degree'] . ' - ' . $value['year'] . ' -  ' . $value['name']; ?></strong>
        				<small class="date"><?php echo $value['subject']; ?></small>
        			</dt>
                    <dd>
        				<p><?php echo cleanOut($value['notes']); ?></p>
        			</dd>
                <?php } ?>
            <?php } ?>
		</dl>

        <h3 class="margin-bottom-20">Portfolio</h3>
        <?php $portfolio = unserialize($resume->portfolio); ?>


        <ul class="portfolio-block">
            <?php foreach( $portfolio as $key=>$value ) { ?>
                <?php if($value['name'] != ''){ ?>
                    <li>
                        <a href="<?php echo $value['url']; ?>" target="_blank"><?php echo $value['name']; ?><i class="fa fa-paper-plane"></i></a>
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>

	</div>
	</div>


	<!-- Widgets -->
	<div class="eight columns">
        <h3 class="margin-bottom-20">Experience</h3>

		<?php $experience = unserialize($resume->experience); ?>
		<dl class="resume-table">
            <?php foreach( $experience as $key=>$value ) { ?>
                <?php if($value['company'] != ''){ ?>
                    <dt>
        				<small class="date"><?php echo $value['start'] . ' - ' . $value['end']; ?></small>
        				<strong><?php echo $value['designation'] . ' - ' . $value['company']; ?></strong>
        			</dt>
                    <dd>
        				<p><?php echo cleanOut($value['notes']); ?></p>
        			</dd>
                <?php } ?>
            <?php } ?>
		</dl>


	</div>

</div>

<?php include("footer.tpl.php");?>
<script type="text/javascript">
    function bookmark(type,id){
        var dataString = 'bookmark=' + 1 + '&type='+ type +'&id=' + id;
        $.ajax({
           type:"POST",
           url:"ajax/jobs.php",
           data: dataString,
           cache: false,
           success: function (html) {
              $('#bmid').html('<a onclick="unbookmark(\'resume\',' + id + ');" class="button dark bookmark" style="background-color: #003663;"><i class="fa fa-minus-circle"></i> Remove From Bookmarks</a>');
           }
        });
        return false;
    }

    function unbookmark(type,id){
        var dataString = 'unbookmark=' + 1 + '&type='+ type +'&id=' + id;
        $.ajax({
          type:"POST",
          url:"ajax/jobs.php",
          data: dataString,
          cache: false,
           success: function (html) {
              $('#bmid').html('<a onclick="bookmark(\'resume\',' + id + ');" class="button dark bookmark"><i class="fa fa-plus-circle"></i> Add To Bookmarks</a>');
           }
        });
        return false;
    }
</script>
