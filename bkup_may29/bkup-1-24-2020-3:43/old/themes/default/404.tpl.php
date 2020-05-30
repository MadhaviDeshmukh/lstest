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
    <div class="not-found-page">
        <h2>404 Not Found</h2>
        <p class="not-found-one"><?php echo Lang::$word->FOF_TITLE;?></p>
        <p class="not-found-two"><?php echo Lang::$word->FOF_INFO;?></p>
    </div>
</div>
<?php include("footer.tpl.php");?>
