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

<?php $limit = $jobs->jobPostCheck(); ?>
<?php if ($limit): ?>
<div class="container">
  <form id="wojo_form" name="wojo_form" method="post" enctype="multipart/form-data">
	<!-- Submit Page -->
	<div class="sixteen columns">
		<div class="submit-page">

			<?php if( isset($pmsg) && $pmsg != ''){ ?>
				<div class="error-message"><?php echo $pmsg; ?></div>
			<?php } ?>

			<div class="form">
				<h5>Job Title</h5>
				<input name="title" class="search-field" type="text" placeholder="" value=""/>
			</div>
			<div class="form">
				<h5>Location</h5>
				<select name="location" data-placeholder="e.g. London" class="chosen-select-no-single">
					<?php $jobs->getJobLocDropList(0, 0,"&#166;&nbsp;&nbsp;&nbsp;&nbsp;", $row->parent_id);?>
				</select>
				<p class="note">Leave this blank if the location is not important</p>
			</div>
			<div class="form">
				<h5>Job Type</h5>
				<select name="type" data-placeholder="Full-Time" class="chosen-select-no-single">
					<?php $jobs->getJobTypeDropList();?>
				</select>
			</div>
			<div class="form">
				<div class="select">
					<h5>Category</h5>
					<select name="categories[]" data-placeholder="Choose Categories" class="chosen-select" multiple>
						<?php $jobs->getJobCatDropList(0, 0,"&#166;&nbsp;&nbsp;&nbsp;&nbsp;", $row->parent_id);?>
					</select>
				</div>
			</div>
			<div class="form">
				<h5>Skill Tags <span>(optional)</span></h5>
				<select name="skills[]" data-placeholder="PHP, CSS, HTML" class="chosen-select" multiple>
					<?php $jobs->getJobSkillDropList();?>
				</select>
			</div>
			<div class="form">
				<h5>Salary</h5>
				<input name="salary" class="search-field" type="text" placeholder="" value=""/>
			</div>
			<div class="form">
				<h5>Job Description</h5>
				<textarea name="description" class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
			</div>
			<div class="form">
				<h5>Job Responsibility</h5>
				<textarea name="responsibility" class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
			</div>
			<div class="form">
				<h5>Experience Requirements</h5>
				<textarea name="experience" class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
			</div>
			<div class="form">
				<h5>Academic Requirements</h5>
				<textarea name="education" class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
			</div>
			<div class="form">
				<h5>Other Benefits</h5>
				<textarea name="benefits" class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
			</div>
			<div class="form">
				<h5>Additional Informations</h5>
				<textarea name="additional_info" class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
			</div>
			<div class="form">
				<h5>Application email / URL</h5>
				<input name="apply_url" type="text" placeholder="Enter an email address or website URL">
			</div>
			<div class="form">
				<h5>Publication Date <span>(optional)</span></h5>
				<input name="publish_date" id="publish_date" data-role="date" type="text" placeholder="DD-MM-YYYY">
				<p class="note">Publish from the date.</p>
			</div>
			<div class="form">
				<h5>Closing Date <span>(optional)</span></h5>
				<input name="expire_date" id="expire_date" data-role="date" type="text" placeholder="DD-MM-YYYY">
				<p class="note">Deadline for new applicants.</p>
			</div>

			<input type="hidden" name="userid" value="<?php echo $user->uid; ?>">
			<input type="hidden" name="addJob" value="1">
			<div class="divider margin-top-0 padding-reset"></div>
			<input type="submit" value="Post New Job">
		</div>
	</div>
  </form>
</div>
<?php else: ?>
  <div class="container">
  	<div class="sixteen columns">

  		<div class="info-banner">
  			<div class="info-content">
  				<h3>Hello, Employer,</h3>
  				<p>You don't have any subscription pack available now. Please get a subscription.</p>
  			</div>
  			<a href="<?php echo SITEURL; ?>" class="button">Back to Home</a>
  			<div class="clearfix"></div>
  		</div>

  	</div>
  </div>
<?php endif; ?>
<?php include("footer.tpl.php");?>
