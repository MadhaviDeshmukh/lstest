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
      <a href="account.php" class="button">Subscriptions</a>
      <a href="manage-jobs.php" class="button">Manage Jobs</a>
      <a href="profile.php" class="button"><?php echo Lang::$word->_UA_SUB5;?></a>
    </div>
    <h2>Viewing Your Invoices</h2>
    <div class="wojo message">Here you can view and download generated invoices.</div>
    <table class="jobboard basic table">
      <thead>
        <tr>
          <th>#</th>
          <th><?php echo Lang::$word->TXN_AMT;?></th>
          <th><?php echo Lang::$word->_UA_PURCHASED;?></th>
          <th><?php echo Lang::$word->ACTIONS;?></th>
        </tr>
      </thead>
      <tbody>
        <?php if(!$itemrow):?>
        <tr>
          <td colspan="4"><?php echo Filter::msgSingleAlert(Lang::$word->_UA_NOINV);?></td>
        </tr>
        <?php else:?>
        <?php $i = 0;?>
        <?php foreach ($itemrow as $irow):?>
        <?php $i++;?>
        <tr>
          <th><?php echo date('Y') . $irow->id;?>.</th>
          <td><?php echo number_format($irow->totalprice, 2);?></td>
          <td><?php echo Filter::doDate("long_date", $irow->created);?></td>
          <td><a href="ajax/controller.php?doInvoice&amp;id=<?php echo $irow->id;?>" data-content="<?php echo Lang::$word->_UA_VIEW_DOWN;?>"><i class="fa fa-file-pdf-o"></i></a></td>
        </tr>
        <?php endforeach;?>
        <?php unset($irow);?>
        <?php endif;?>
      </tbody>
    </table>
</div>
<?php include("footer.tpl.php");?>
