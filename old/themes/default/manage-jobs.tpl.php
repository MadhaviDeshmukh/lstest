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

		<?php if( isset($_GET['jobid']) && ($_GET['jobid']) ){ ?>
			<div class="success-message">You have succesfully posted the job. Here is <a href="manage-jobs.php?do=details&id=<?php echo $_GET['jobid'];?>">details</a></div>
		<?php } ?>

		<pre>
		<?php //print_r($jobs); ?>
		</pre>

		<table class="manage-table responsive-table">
			<tr>
				<th><i class="fa fa-file-text"></i> Title</th>
				<th><i class="fa fa-check-square-o"></i> Filled?</th>
				<th><i class="fa fa-calendar"></i> Date Published</th>
				<th><i class="fa fa-calendar"></i> Date Expires</th>
				<th><i class="fa fa-user"></i> Applications</th>
				<th></th>
			</tr>

			<?php if(!$jobs):?>
				<tr>
					<td colspan="6"><?php echo Filter::msgSingleAlert('No job posting found');?></td>
				</tr>
			<?php else:?>
			  <?php foreach ($jobs as $row):?>
				<tr>
					<td class="title"><a href="job.php?id=<?php echo $row->id; ?>"><?php echo $row->title; ?> <?php if($row->status == 'pending'){ ?><span class="pending">(Pending Approval)</span><?php } ?></a></td>
					<td class="centered"><?php echo ($row->filled == 1) ? '<i class="fa fa-check"></i>' : '-'; ?></td>
					<td><?php echo dodate($row->publish_date);?></td>
					<td><?php echo dodate($row->expire_date);?></td>
					<td class="centered"><?php echo ($row->totalapplications > 0) ? '<a href="manage-applications.php?jobid=' . $row->id . '" class="button">Show (' . $row->totalapplications . ')</a>' : '<a href="#" class="button" style="background: #aaa;">No App.</a>'; ?></td>
					<td class="action">
						<a href="manage-jobs.html#" class="delete"><i class="fa fa-remove"></i> Delete</a>
					</td>
				</tr>
			  <?php endforeach;?>
			  <?php unset($row);?>
			<?php endif;?>

		</table>


      <div class="row"> <span class="wojo label"><?php echo Lang::$word->TOTAL . ': ' . $pager->items_total;?> / <?php echo Lang::$word->CURPAGE . ': ' . $pager->current_page . ' ' . Lang::$word->OF . ' ' . $pager->num_pages;?></span> </div>
      <div class="row">
        <div class="push-right"><?php echo $pager->display_pages();?></div>
      </div>

		<br>
		<a href="add-job.php" class="button">Post New Job</a>

	</div>

</div>
<?php include("footer.tpl.php");?>
