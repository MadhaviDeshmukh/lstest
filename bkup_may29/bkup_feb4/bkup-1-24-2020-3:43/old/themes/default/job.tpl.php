<?php
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
?>
<?php include("header.tpl.php");?>

<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="ten columns">
			<span><a href="browse-jobs.php?categories=<?php echo $job->categories;?>"><?php echo $jobs->getCatInfo($job->categories);?></a></span>
			<h2><?php echo $job->title; ?> <?php echo $jobs->jobType($job->type);?></h2>
		</div>

		<div class="six columns"  id="bmid">
             <?php echo ( $jobs->bookmarkCheck('job',$job->id) == 1 ) ? '<a onclick="unbookmark(\'job\',' . $job->id . ');" class="button dark bookmarked"><i class="fa fa-minus-circle"></i> Remove From Bookmarks</a>' : '<a onclick="bookmark(\'job\','. $job->id .');" class="button dark bookmark"><i class="fa fa-plus-circle"></i> Add To Bookmarks</a>'; ?>
		</div>

	</div>
</div>


<!-- Content
================================================== -->

<div class="container">

	<!-- Recent Jobs -->
  <div class="eleven columns" id="jobpage">
  	<div class="padding-right">

  		<!-- Company Info -->
  		<div class="company-info">
  			<img src="<?php echo UPLOADURL;?>avatars/<?php echo $job->avatar;?>" alt="">
  			<div class="content">
  				<h4><a href="<?php echo SITEURL . "/company.php?id=" . $job->company; ?>"><?php echo $job->name;?></a></h4>
            <?php echo ( $job->website != '' ) ? '<span><a target="_blank" href="' . $job->website . '"><i class="fa fa-link"></i> Website</a></span>' : ''; ?>
            <?php echo ( $job->facebook != '' ) ? '<span><a target="_blank" href="' . $job->facebook . '"><i class="fa fa-facebook"></i> Facebook</a></span>' : ''; ?>
            <?php echo ( $job->twitter != '' ) ? '<span><a target="_blank" href="' . $job->twitter . '"><i class="fa fa-twitter"></i> Twitter</a></span>' : ''; ?>
            <?php echo ( $job->linkedin != '' ) ? '<span><a target="_blank" href="' . $job->linkedin . '"><i class="fa fa-linkedin"></i> LinkedIn</a></span>' : ''; ?>
            <?php echo ( $job->gplus != '' ) ? '<span><a target="_blank" href="' . $job->gplus . '"><i class="fa fa-google-plus"></i> Google Plus</a></span>' : ''; ?>
  			</div>
  			<div class="clearfix"></div>
  		</div>

  		<p class="margin-reset">
  			<?php echo htmlspecialchars_decode($job->description); ?>
  		</p>
  		<br>

  		<h4 class="margin-bottom-10">Job Responsibility</h4>
  		<p class="margin-reset">
  			<?php echo htmlspecialchars_decode($job->responsibility); ?>
  		</p>
  		<br>

  		<h4 class="margin-bottom-10">Work Experience</h4>
  		<p class="margin-reset">
  			<?php echo htmlspecialchars_decode($job->experience); ?>
  		</p>
  		<br>

  		<h4 class="margin-bottom-10">Academic Qualifications</h4>
  		<p class="margin-reset">
  			<?php echo htmlspecialchars_decode($job->education); ?>
  		</p>
  		<br>

  		<h4 class="margin-bottom-10">Salary</h4>
  		<p class="margin-reset">
  			<?php echo $job->salary; ?>
  		</p>
  		<br>

  		<h4 class="margin-bottom-10">Job Location</h4>
  		<p class="margin-reset">
  			<?php echo $jobs->getLocInfo($job->location);?>
  		</p>
  		<br>

  		<h4 class="margin-bottom-10">Other Benefits</h4>
  		<p class="margin-reset">
  			<?php echo htmlspecialchars_decode($job->benefits); ?>
  		</p>
  		<br>

  		<h4 class="margin-bottom-10">Additional Information</h4>
  		<p class="margin-reset">
  			<?php echo htmlspecialchars_decode($job->additional_info); ?>
  		</p>
  		<br>

  		<h4 class="margin-bottom-10">Apply URL/Email</h4>
  		<p class="margin-reset">
  			<?php echo $job->apply_url; ?>
  		</p>
  		<br>
  	</div>
	</div>


	<!-- Widgets -->
	<div class="five columns">

		<!-- Sort by -->
		<div class="widget">
			<h4>Overview</h4>

			<div class="job-overview">

				<ul>
					<li>
						<i class="fa fa-user"></i>
						<div>
							<strong>Job Title:</strong>
							<span><?php echo $job->title;?></span>
						</div>
					</li>
					<li>
						<i class="fa fa-user"></i>
						<div>
							<strong>Company:</strong>
							<span><?php echo $job->name;?></span>
						</div>
					</li>
                    <li>
						<i class="fa fa-map-marker"></i>
						<div>
							<strong>Location:</strong>
							<span><?php echo $jobs->getLocInfo($job->location);?></span>
						</div>
					</li>
					<li>
						<i class="fa fa-money"></i>
						<div>
							<strong>Salary:</strong>
							<span><?php echo $job->salary; ?></span>
						</div>
					</li>
				</ul>

                <?php if ($user->userlevel == 1) { ?>

                    <?php if ($jobs->jobAppliedCheck($job->id) == 1) { ?>
                        <a href="" class="popup-with-zoom-anim button" style="background-color: green;">Applied</a>
                    <?php } else { ?>
                        <a href="#small-dialog" id="applybutton" class="popup-with-zoom-anim button">Apply For This Job</a>
                    <?php } ?>

    				<div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
    					<div class="small-dialog-headline">
    						<h2>Apply For "<?php echo $job->title; ?>"</h2>
    					</div>

    					<div class="small-dialog-content" id="applyform">
    						<form >
    							<textarea id="amessage" name="message" placeholder="Your message / cover letter sent to the employer"></textarea>
                                <br>
                                <input id="aexpected" type="number" name="expected" placeholder="Expected Salary" value=""/>

    							<div class="divider"></div>

    							<a href="javascript:void(0);" class="button" onclick="applyToJob(<?php echo $job->id; ?>);">Send Application</a>
                            </form>
    					</div>

    				</div>
                <?php } ?>

			</div>

		</div>



    <!-- Job Spotlight -->
  	<div class="widget">

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


  	</div>

	</div>
	<!-- Widgets / End -->

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
              $('#bmid').html('<a onclick="unbookmark(\'job\',' + id + ');" class="button dark bookmark" style="background-color: #003663;"><i class="fa fa-minus-circle"></i> Remove From Bookmarks</a>');
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
              $('#bmid').html('<a onclick="bookmark(\'job\',' + id + ');" class="button dark bookmark"><i class="fa fa-plus-circle"></i> Add To Bookmarks</a>');
           }
        });
        return false;
    }

    function applyToJob(jobid) {
        var message = $("#amessage").val();
        var expected = $("#aexpected").val();
        var dataString = 'applytojob=' + 1 + '&jobid=' + jobid + '&message=' + message + '&expected=' + expected;
        $.ajax({
          type:"POST",
          url:"ajax/jobs.php",
          data: dataString,
          cache: false,
           success: function (html) {
              $('#applyform').html('<a class="button dark bookmark" style="text-align: center;background-color: green;margin: 0 auto;display: block;"></i>Applie To Job Succesfully</a>');
              $('#applybutton').html('Applied');
           }
        });
        return false;

    }
</script>
