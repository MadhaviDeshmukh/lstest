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
  <div class=" push-right">
    <a href="invoices.php" class="wojo small info button"><?php echo Lang::$word->_UA_SUB8;?></a>
    <a href="profile.php" class="wojo small info button"><?php echo Lang::$word->_UA_SUB5;?></a>
  </div>
  <h2>Manage Your Subscriptions / Viewing Subscriptions</h2>
  <div class="message">Here you can view all your purchased subscriptions.</div>
  <table class="jobboard basic table">
    <thead>
      <tr>
        <th>#</th>
        <th>Package Name</th>
        <th>Post Limit</th>
        <th>Available</th>
        <th>Start Date</th>
        <th>End Date</th>
      </tr>
    </thead>
    <tbody>
      <?php if(!$itemrow):?>
      <tr>
        <td colspan="4"><?php echo Filter::msgSingleAlert(Lang::$word->_UA_NODOWNS);?></td>
      </tr>
      <?php else:?>
      <?php $i = 0;?>
      <?php foreach ($itemrow as $irow):?>
      <?php $i++;?>
      <tr>
        <th><?php echo $i;?>.</th>
        <td><?php echo $irow->pname;?></td>
        <td><?php echo $irow->limit;?></td>
        <td><?php echo ($irow->limit-$irow->usage);?></td>
        <td><?php echo Filter::doDate("long_date", $irow->start_date);?></td>
        <td><?php echo Filter::doDate("long_date", $irow->end_date);?></td>
        <td></td>
      </tr>
      <?php endforeach;?>
      <?php unset($irow);?>
      <?php endif;?>
    </tbody>
  </table>
</div>
<?php include("footer.tpl.php");?>
