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

<div class="container">
	<div class="sixteen columns">
		<div class="submit-page">
			<!-- Tabs Navigation -->
			<ul class="tabs-nav">
				<li class="active"><a href="#tab1">Bookmarked Jobs</a></li>
				<li><a href="#tab2">Bookmarked Resumes</a></li>
			</ul>

			<!-- Tabs Content -->
			<div class="tabs-container">
				<div class="tab-content" id="tab1">
					<?php if ($bookmarked_jobs): ?>
					  <?php foreach ($bookmarked_jobs as $bookmark):?>
						<div id="bookmark_job_<?php echo $bookmark->source_id; ?>" class="bookmark-list">
						  <a class="list" href="job.php?id=<?php echo $bookmark->source_id; ?>"><?php echo $bookmark->title; ?>  </a>
						  <?php echo $jobs->jobType($bookmark->jobtype);?>
						  <span class="remove" onclick="unbookmark('job',<?php echo $bookmark->source_id; ?>);" class="close">X</span>
						</div>
					  <?php endforeach; ?>
					  <?php unset($bookmark); ?>
					<?php else: ?>
					  <div class="notification error closeable">
							  <p><span>Sorry!</span> We could not find any bookmarks for you.</p>
							  <a class="close" href="shortcodes.html#">X</a>
						  </div>
					<?php endif; ?>
				</div>

				<div class="tab-content" id="tab2">
					<?php if ($bookmarked_resumes): ?>
					  <?php foreach ($bookmarked_resumes as $bookmark):?>
						<div id="bookmark_resume_<?php echo $bookmark->source_id; ?>" class="bookmark-list">
						  <a class="list" href="resume.php?resumeid=<?php echo $bookmark->source_id; ?>"><?php echo $bookmark->fullname . ' / ' . $bookmark->title; ?>  </a>
						  <span class="remove" onclick="unbookmark('resume',<?php echo $bookmark->source_id; ?>);" class="close">X</span>
						</div>
					  <?php endforeach; ?>
					  <?php unset($bookmark); ?>
					<?php else: ?>
					  <div class="notification error closeable">
							  <p><span>Sorry!</span> We could not find any bookmarks for you.</p>
							  <a class="close" href="shortcodes.html#">X</a>
						  </div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include("footer.tpl.php");?>
<script type="text/javascript">
    function unbookmark(type,id){
		alert(type +id);
        var dataString = 'unbookmark=' + 1 + '&type='+ type +'&id=' + id;
        $.ajax({
			type:"POST",
			url:"ajax/jobs.php",
			data: dataString,
			cache: false,
			success: function (html) {
				$('#bookmark_' + type + '_' + id).hide();
			}
        });
        return false;
    }
</script>
