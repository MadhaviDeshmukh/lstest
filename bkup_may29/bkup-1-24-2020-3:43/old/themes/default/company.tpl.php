<?php
if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
?>
<?php include("header.tpl.php");?>
<pre>
<?php
//print_r($company);
 ?>
</pre>

<!-- Titlebar
================================================== -->
<div id="titlebar" class="resume">
	<div class="container">
		<div class="twelve columns">
			<div class="resume-titlebar">
				<img style="width: 200px; height: 200px;"src="<?php echo ($company->avatar != '') ? UPLOADURL. 'avatars/' . $company->avatar : THEMEURL . '/images/avatar-placeholder.png'; ?>" alt="<?php echo $company->name;?>">
				<div class="resumes-list-content" style="margin-left: 250px">
                    <h4><?php echo $company->name; ?></h4>

                    <span class="icons"><i class="fa fa-map-marker"></i> <?php echo ($company->address != '') ? $company->address : ''; ?></span><br>

                    <span class="icons"><i class="fa fa-phone"></i> <?php echo ($company->phone != '') ? $company->phone : ''; ?></span><br>

                    <?php echo ($company->email != '') ? '<span class="icons"><a href="mailto:' . $company->email . '"><i class="fa fa-envelope"></i>' . $company->email . '</a></span>' : ''; ?>


                    <div class="company-info" style="border-bottom: 0; padding-bottom: 0;margin-bottom: 0;">
                        <?php echo ( $company->website != '' ) ? '<span><a target="_blank" href="' . $company->website . '"><i class="fa fa-link"></i> Website</a></span>' : ''; ?>
                        <?php echo ( $company->facebook != '' ) ? '<span><a target="_blank" href="' . $company->facebook . '"><i class="fa fa-facebook"></i> Facebook</a></span>' : ''; ?>
                        <?php echo ( $company->twitter != '' ) ? '<span><a target="_blank" href="' . $company->twitter . '"><i class="fa fa-twitter"></i> Twitter</a></span>' : ''; ?>
                        <?php echo ( $company->linkedin != '' ) ? '<span><a target="_blank" href="' . $company->linkedin . '"><i class="fa fa-linkedin"></i> LinkedIn</a></span>' : ''; ?>
                        <?php echo ( $company->gplus != '' ) ? '<span><a target="_blank" href="' . $company->gplus . '"><i class="fa fa-google-plus"></i> Google Plus</a></span>' : ''; ?>
              			</div>
              			<div class="clearfix"></div>
              		</div>


					<div class="clearfix"></div>

				</div>
			</div>
		</div>

		<div class="two columns" id="bmid">
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<!-- Recent Jobs -->
	<div class="eight columns">
    	<div class="padding-right">

    		<h3 class="margin-bottom-15">About</h3>
    		<?php echo cleanOut($company->about); ?>
            <br>
            <br>

            <h3 class="margin-bottom-20">Company Business</h3>
            <?php echo cleanOut($company->business); ?>

    	</div>
	</div>


	<!-- Widgets -->
	<div class="eight columns">
        <h3 class="margin-bottom-20">Open Jobs</h3>
        <?php $jobsrow = $jobs->companyJobs($company->uid);?>

        <?php foreach ($jobsrow as $job):?>
            <div class="bookmark-list">
              <a class="list" href="job.php?id=<?php echo $job->id; ?>"><?php echo $job->title; ?></a>
              <?php echo $jobs->jobType($job->type);?>
            </div>
        <?php endforeach; ?>

	</div>

</div>


<?php include("footer.tpl.php");?>
