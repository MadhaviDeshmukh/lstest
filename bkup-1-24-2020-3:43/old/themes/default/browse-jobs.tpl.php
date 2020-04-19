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
			<span>We found following jobs matching:</span>
			<h2>Browse Jobs</h2>
		</div>

		<div class="six columns">
			<a href="<?php echo SITEURL . '/add-job.php'; ?>" class="button">Post a Job, It’s Free!</a>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">

		<form action="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" method="get" class="list-search">
			<button><i class="fa fa-search"></i></button>
			<input id="keyword" name="search" type="text" placeholder="job title, keywords" value="<?php echo ( isset($_GET['search']) && $_GET['search'] != '' ) ? $_GET['search'] : '';?>"/>
			<div class="clearfix"></div>
		</form>

		<ul class="job-list full">

			<?php if($alljobs): ?>
				<?php foreach ($alljobs as $job) { ?>
					<li><a href="job.php?id=<?php echo $job->id;?>">
						<img src="<?php echo UPLOADURL;?>avatars/<?php echo $job->avatar;?>" alt="">
						<div class="job-list-content">
							<h4><?php echo $job->title;?> <?php echo $jobs->jobType($job->type);?></h4>
							<div class="job-icons">
								<span><i class="fa fa-briefcase"></i> <?php echo $job->name; ?></span>
								<span><i class="fa fa-map-marker"></i> <?php echo $jobs->jobLocation($job->location); ?></span>
								<span><i class="fa fa-money"></i> <?php echo $job->salary;?></span>
							</div>
							<p><?php echo substr(strip_tags(cleanOut($job->description)),0,150); ?></p>
						</div>
						</a>
						<div class="clearfix"></div>
					</li>
				<?php } ?>
			<?php else: ?>
				<li>Sorry, No Job Found. Please try again later.
				</li>
			<?php endif; ?>

		</ul>
		<div class="clearfix"></div>

		<div class="pagination-container paginate">
			<p class="total-pages">
				<?php echo Lang::$word->TOTAL . ': ' . $pager->items_total;?> / <?php echo Lang::$word->CURPAGE . ': ' . $pager->current_page . ' ' . Lang::$word->OF . ' ' . $pager->num_pages;?>
			</p>
			<div class="pagination-new">
				<?php echo $pager->display_pages();?>
			</div>
		</div>

	</div>
	</div>


	<!-- Widgets -->
	<div class="five columns">

		<!-- Sort by -->
		<div class="widget">
			<h4>Sort by</h4>

			<!-- Select -->
			<select id="orderfilter" data-placeholder="Choose Order" class="chosen-select-no-single">
				<option value="recent" <?php echo (isset($_GET['short']) && $_GET['short'] == 'recent') ? 'selected="selected"' : ''; ?>>Newest</option>
				<option value="oldest" <?php echo (isset($_GET['short']) && $_GET['short'] == 'oldest') ? 'selected="selected"' : ''; ?>>Oldest</option>
				<option value="expiry" <?php echo (isset($_GET['short']) && $_GET['short'] == 'expiry') ? 'selected="selected"' : ''; ?>>Expiring Soon</option>
			</select>

		</div>

		<!-- Job Type -->
		<div class="widget">
			<h4>Job Type</h4>

			<ul class="checkboxes">
				<li>
					<input id="check-1" type="checkbox" name="check" value="check-1" checked>
					<label for="check-1">Any Type</label>
				</li>
				<li>
					<input id="check-2" type="checkbox" name="check" value="check-2">
					<label for="check-2">Full-Time <span>(312)</span></label>
				</li>
				<li>
					<input id="check-3" type="checkbox" name="check" value="check-3">
					<label for="check-3">Part-Time <span>(269)</span></label>
				</li>
				<li>
					<input id="check-4" type="checkbox" name="check" value="check-4">
					<label for="check-4">Internship <span>(46)</span></label>
				</li>
				<li>
					<input id="check-5" type="checkbox" name="check" value="check-5">
					<label for="check-5">Freelance <span>(119)</span></label>
				</li>
			</ul>

		</div>

		<!-- Location -->
		<div class="widget">
			<h4>Location</h4>
			<form action="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" method="get">
				<input type="text" placeholder="State / Province" value=""/>
				<input type="text" placeholder="City" value=""/>

				<input type="text" class="miles" placeholder="Miles" value=""/>
				<label for="zip-code" class="from">from</label>
				<input type="text" id="zip-code" class="zip-code" placeholder="Zip-Code" value=""/><br>

				<button class="button">Filter</button>
			</form>
		</div>

	</div>
	<!-- Widgets / End -->

</div>
<?php include("footer.tpl.php");?>
<script type="text/javascript">
  $(document).ready(function () {
      $('#orderfilter').change(function () {
			var order = $("#orderfilter option:selected").val();
			var keyword = $("#keyword").val();
			var url = '<?php echo SITEURL . '/browse-jobs.php'?>';
			if(order != '' && keyword != ''){
				var url = url + '?search=' + keyword + '&short=' + order;
			} else if (order == '' && keyword != '') {
				var url = url + '?search=' + keyword;
			} else if (order != '' && keyword == '') {
				var url = url + '?short=' + order;
			}
			window.location.href = url;
      })
  });
</script>
