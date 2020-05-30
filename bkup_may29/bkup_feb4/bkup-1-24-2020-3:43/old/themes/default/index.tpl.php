<?php
if (!defined("_VALID_PHP"))
die('Direct access to this location is not allowed.');
?>
<?php include("header.tpl.php");?>

<!-- End SLider /-->
<?php if($core->show_slider):?>
<?php include("plugins/slider/slider.php");?>
<?php else: ?>

<?php if($core->show_home):?>
<?php echo cleanOut($home->body);?>
<?php endif;?>

<?php endif;?>
<!-- End Slider /-->

<!-- Start News-->
<?php if($news):?>
  <div class="container">
    <div class="news-notice">
        <div class="news-header"> <?php echo $news->title;?> </div>
        <div class="news-content"><?php echo cleanOut($news->body);?></div>
    </div>
  </div>
<?php endif;?>
<!-- End News/-->


<!-- Content
================================================== -->
<!-- Categories -->
<?php $popularCategories = $jobs->mostPopCategories(); ?>
<?php if($popularCategories): ?>
<div class="container">
	<div class="sixteen columns">
		<h3 class="margin-bottom-25">Popular Categories</h3>
		<ul id="popular-categories">
      <?php foreach ($popularCategories as $category) {
          $icon = ($category->icon == '') ? 'ln ln-icon-Align-Center' : $category->icon;
          echo '<li><a href="browse-jobs.php?category=' . $category->cid . '"><i class="' . $icon . '"></i> ' . $category->name . '</a></li>';
      } ?>
		</ul>
		<div class="clearfix"></div>
		<div class="margin-top-30"></div>
		<a href="<?php echo SITEURL . '/browse-categories.php'; ?>" class="button centered">Browse All Categories</a>
		<div class="margin-bottom-50"></div>
	</div>
</div>
<?php endif; ?>

<div class="container">
	<!-- Recent Jobs -->
  <?php $recentJobs = $jobs->getlLatestJobs(); ?>
  <?php if($recentJobs): ?>
  	<div class="eleven columns">
    	<div class="padding-right">
    		<h3 class="margin-bottom-25">Recent Jobs</h3>
    		<ul class="job-list">
          <?php $count = 1; foreach ($recentJobs as $job) { ?>
            <li class="<?php echo ($count == 1) ? 'highlighted' : ''; $count++;?>"><a href="job.php?id=<?php echo $job->id;?>">
      				<img src="<?php echo UPLOADURL;?>avatars/<?php echo $job->company_logo;?>" alt="">
      				<div class="job-list-content">
      					<h4><?php echo $job->title; ?> <?php echo $jobs->jobType($job->type);?></h4>
      					<div class="job-icons">
      						<span><i class="fa fa-briefcase"></i> <?php echo $job->company_name;?></span>
      						<span><i class="fa fa-map-marker"></i> <?php echo $jobs->jobLocation($job->location); ?></span>
      						<span><i class="fa fa-money"></i> <?php echo $job->salary;?></span>
      					</div>
      				</div>
      				</a>
      				<div class="clearfix"></div>
      			</li>
          <?php } ?>
    		</ul>

    		<a href="<?php echo SITEURL . '/browse-jobs.php'; ?>" class="button centered"><i class="fa fa-plus-circle"></i> Show More Jobs</a>
    		<div class="margin-bottom-55"></div>
    	</div>
  	</div>
  <?php endif; ?>

    <!-- Job Spotlight -->
	<div class="five columns">
		<h3 class="margin-bottom-5">Featured Jobs</h3>
        <?php $featuredjobs = $jobs->featuredjobs(); ?>
		<!-- Navigation -->
		<div class="showbiz-navigation">
			<div id="showbiz_left_1" class="sb-navigation-left"><i class="fa fa-angle-left"></i></div>
			<div id="showbiz_right_1" class="sb-navigation-right"><i class="fa fa-angle-right"></i></div>
		</div>
		<div class="clearfix"></div>

		<!-- Showbiz Container -->
		<div id="job-spotlight" class="showbiz-container">
			<div class="showbiz" data-left="#showbiz_left_1" data-right="#showbiz_right_1" data-play="#showbiz_play_1" >
				<div class="overflowholder">
					<ul>
                        <?php foreach ($featuredjobs as $job): ?>
						<li>
							<div class="job-spotlight">
								<a href="job.php?id=<?php echo $job->id;?>"><h4><?php echo $job->title;?> <?php echo $jobs->jobType($job->type);?></h4></a>
								<span><i class="fa fa-map-marker"></i> <?php echo $jobs->jobLocation($job->location); ?></span>
								<span><i class="fa fa-money"></i> <?php echo $job->salary;?></span>
								<p><?php echo substr(strip_tags(cleanOut($job->description)), 0,220);?></p>
								<a href="job.php?id=<?php echo $job->id;?>" class="button">See Job Details</a>
							</div>
						</li>
                        <?php endforeach; unset($job); ?>
					</ul>
					<div class="clearfix"></div>

				</div>
				<div class="clearfix"></div>
			</div>
		</div>



        <?php $featuredresumes = $jobs->featuredResumes(); ?>
        <h3 class="margin-bottom-5">Featured Resumes</h3>

		<!-- Navigation -->
		<div class="showbiz-navigation">
			<div id="showbiz_left_2" class="sb-navigation-left"><i class="fa fa-angle-left"></i></div>
			<div id="showbiz_right_2" class="sb-navigation-right"><i class="fa fa-angle-right"></i></div>
		</div>
		<div class="clearfix"></div>

        <div id="our-clients" class="showbiz-container">
            <div class="showbiz" data-left="#showbiz_left_2" data-right="#showbiz_right_2" data-play="#showbiz_play_2" >
                <div class="overflowholder">

                    <ul>
                        <?php foreach ($featuredresumes as $resume): ?>
                        <li>
                            <div class="featured-resume">
                                <img src="<?php echo ($resume->avatar != '') ? UPLOADURL. 'avatars/' . $resume->avatar : THEMEURL . '/images/avatar-placeholder.png'; ?>" alt="<?php echo $resume->fullname;?>">
                                <h4><?php echo $resume->fullname;?></h4>
                                <h5><?php echo $resume->title;?></h5>
                                <span><i class="fa fa-map-marker"></i> <?php echo $resume->city . ', ' . $resume->country;?></span>
                                <span><i class="fa fa-money"></i> $<?php echo $resume->hourly_rate;?> / hour</span>
                                <p><?php echo substr(strip_tags(cleanOut($resume->objective)),0,200); ?></p>
                                <a href="resume.php?resumeid=<?php echo $resume->uid;?>" class="button">See More</a>
                            </div>
                        </li>
                    <?php endforeach; unset($resume); ?>


                    </ul>
                    <div class="clearfix"></div>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>








	</div>


</div>

<?php $testimonialrow = $content->getTestimonials();?>
<?php if($testimonialrow):?>
<div id="testimonials">
	<div class="container">
		<div class="sixteen columns">
			<div class="testimonials-slider">
				  <ul class="slides">
                      <?php foreach ($testimonialrow as $row):?>
                          <li>
                              <p><?php echo strip_tags($row->content); ?><span><?php echo $row->name;?><?php echo ($row->company != '') ? ', ' . $row->company : '';?></span></p>
      				      </li>
                      <?php endforeach;?>
                      <?php unset($row);?>
				  </ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<!-- Counters -->
<div id="counters" style="margin-bottom: -65px;">
	<div class="container">

		<div class="four columns">
			<div class="counter-box">
				<span class="counter"><?php echo $jobs->jobCount(); ?></span><i></i>
				<p>Job Offers</p>
			</div>
		</div>

		<div class="four columns">
			<div class="counter-box">
				<span class="counter"><?php echo $jobs->applicationCount(); ?></span>
				<p>Applications</p>
			</div>
		</div>

		<div class="four columns">
			<div class="counter-box">
				<span class="counter"><?php echo $jobs->resumesCount(); ?></span>
				<p>Resumes Posted</p>
			</div>
		</div>

		<div class="four columns">
			<div class="counter-box">
				<span class="counter"><?php echo $jobs->companyCount(); ?></span><i></i>
				<p>Company Hiring</p>
			</div>
		</div>

	</div>
</div>


<?php include("footer.tpl.php");?>
