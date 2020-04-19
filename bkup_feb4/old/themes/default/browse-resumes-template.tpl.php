<div class="container">
	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">

		<form action="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" method="get" class="list-search">
			<button type="submit"><i class="fa fa-search"></i></button>
			<input id="keyword" type="text" name="search" placeholder="Search professionals (e.g. PHP Expert)" value="<?php echo ( isset($_GET['search']) && $_GET['search'] != '' ) ? $_GET['search'] : '';?>"/>
			<div class="clearfix"></div>
		</form>

    <?php if($resumes): ?>
  		<ul class="resumes-list">
        <?php foreach ($resumes as $resume): ?>
    			<li><a href="<?php echo SITEURL . '/resume.php?resumeid=' . $resume->uid;?>">
    				<img src="<?php echo ($resume->avatar != '') ? UPLOADURL. 'avatars/' . $resume->avatar : THEMEURL . '/images/avatar-placeholder.png'; ?>" alt="<?php echo $resume->fullname;?>">
    				<div class="resumes-list-content">
    					<h4><?php echo $resume->fullname;?> <span><?php echo $resume->title;?></span></h4>
    					<span><i class="fa fa-map-marker"></i> <?php echo $resume->city;?></span>
    					<span><i class="fa fa-money"></i> $<?php echo $resume->hourly_rate;?> / hour</span>
              <p><?php echo substr(strip_tags($resume->objective),0,200); ?></p>

    					<div class="skills">
    						<?php $jobs->getJobSkillTags($resume->skills) ?>
    					</div>
    					<div class="clearfix"></div>

    				</div>
    				</a>
    				<div class="clearfix"></div>
    			</li>
        <?php endforeach; ?>

  		</ul>
    <?php endif; ?>
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
  			<select id="orderfilter" data-placeholder="Choose Category" class="chosen-select-no-single">
  				<option value="DESC" <?php echo (isset($_GET['short']) && $_GET['short'] == 'DESC') ? 'selected="selected"' : ''; ?>>Hourly Rate – Highest First</option>
  				<option value="ASC" <?php echo (isset($_GET['short']) && $_GET['short'] == 'ASC') ? 'selected="selected"' : ''; ?>>Hourly Rate – Lowest First</option>
  			</select>

		</div>

		<!-- Skills -->
		<div class="widget">
			<h4>Skills</h4>

			<!-- Select -->
			<form action="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" method="get">
				<select name="skills" data-placeholder="Select Skills" class="chosen-select" multiple>
					<?php $jobs->getJobSkillDropList($row->skills);?>
				</select>
				<div class="margin-top-15"></div>
				<button class="button">Filter</button>
			</form>
		</div>

		<!-- Location -->
		<div action="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" class="widget">
			<h4>Location</h4>
			<form action="browse-resumes.html#" method="get">
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
