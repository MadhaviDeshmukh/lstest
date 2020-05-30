<div id="titlebar" class="photo-bg" style="background-image: url(images/all-categories-photo.jpg);">
	<div class="container">
		<div class="ten columns">
			<h2>All Categories</h2>
		</div>

		<div class="six columns">
			<a href="<?php echo SITEURL; ?>/add-job.php" class="button">Post a Job, It’s Free!</a>
		</div>

	</div>
</div>
<div id="categories">

	<div class="categories-group">
		<div class="container">
			<?php $jobs->browseCategories(); ?>
		</div>
	</div>

</div>
