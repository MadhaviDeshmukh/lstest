<?php
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
?>
<?php include("header.tpl.php");?>
<?php if( $row && $row->breadcrumb == 1){ ?>
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
<?php } ?>

<?php if(!$row):?>
<?php redirect_to(SITEURL . '/404.php');?>
<?php else:?>
    <!-- <h1 class="wojo header"><?php //echo $row->title;?></h1> -->
    <div class="container" id="pagecontainer">
      <?php echo htmlspecialchars_decode($row->body);?>
    </div>
    <?php if($row->template != ''):?>
        <?php if($row->directory == 'plugin'):?>
          <?php include( PLUGINPATH . "/" . $row->filename);?>
        <?php endif;?>
        <?php if($row->directory == 'template'):?>
          <?php include( TEMPLATEPATH . "/" . $row->filename);?>
        <?php endif; ?>
    <?php endif;?>

  <?php endif;?>
<?php include("footer.tpl.php");?>
