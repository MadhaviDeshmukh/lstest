<?php
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<?php $row = isset($row) ? $row : null;?>
<?php echo $content->renderMetaData($row);?>
<script type="text/javascript">
var SITEURL = "<?php echo SITEURL; ?>";
</script>
<meta charset="utf-8">

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->

<link rel="stylesheet" href="<?php echo THEMEURL;?>/css/base.css">
<link rel="stylesheet" href="<?php echo THEMEURL;?>/css/responsive.css">
<link rel="stylesheet" href="<?php echo THEMEURL;?>/css/style.css">
<link rel="stylesheet" href="<?php echo THEMEURL;?>/css/colors/default.css" id="colors">
<script src="<?php echo THEMEURL;?>/scripts/jquery-2.1.3.min.js"></script>
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>
<div id="wrapper">

<!-- Header
================================================== -->
<header>
<div class="container">
	<div class="sixteen columns">

		<!-- Logo -->
		<div id="logo">
			<h1><a href="<?php echo SITEURL; ?>/"><?php echo ($core->logo) ? '<img src="'.UPLOADURL . $core->logo.'" alt="'.$core->company.'" />': $core->company;?></a></h1>
		</div>

		<!-- Menu -->
		<nav id="navigation" class="menu">
			<?php $menu = $content->getMenu(); $content->getMainMenus($menu,0, "menu", "sm topmenu"); ?>
			<?php if ( $user->logged_in && $user->userlevel == 1 ){ ?>
                <?php $countMsgs = $core->countMessages();?>
				<ul class="float-right">
					<li><a href="<?php echo SITEURL; ?>/account.php"><i class="fa fa-user"></i> Manage</a>
						<ul>
                            <li><a href="<?php echo SITEURL; ?>/messages.php">Messages <span><?php echo $countMsgs;?></span></a></li>
                            <li><a href="<?php echo SITEURL; ?>/browse-jobs.php">Browse Jobs</a></li>
							<li><a href="<?php echo SITEURL; ?>/browse-categories.php">Browse Categories</a></li>
							<li><a href="<?php echo SITEURL; ?>/add-resume.php">Manage Resume</a></li>
							<li><a href="<?php echo SITEURL; ?>/bookmarks.php">Manage Bookmarks</a></li>
							<li><a href="<?php echo SITEURL; ?>/ajax/jobs.php?doresume=<?php echo $user->uid; ?>">Download Resume</a></li>
							<li><a href="<?php echo SITEURL; ?>/profile.php">Edit Profile</a></li>
						</ul>
					</li>
					<li><a href="index.php?do=logout"><i class="fa fa-lock"></i> Logout</a></li>
				</ul>
			<?php } if ( $user->logged_in && $user->userlevel == 2 ){ ?>
                <?php $countMsgs = $core->countMessages();?>
				<ul class="float-right">
					<li><a href="<?php echo SITEURL; ?>/account.php"><i class="fa fa-user"></i> Manage</a>
						<ul>
                            <li><a href="<?php echo SITEURL; ?>/messages.php">Messages <span><?php echo $countMsgs;?></span></a></li>
                            <li><a href="<?php echo SITEURL; ?>/add-job.php">Post New Job</a></li>
							<li><a href="<?php echo SITEURL; ?>/manage-jobs.php">Manage Jobs</a></li>
							<li><a href="<?php echo SITEURL; ?>/manage-jobs.php">Manage Applications</a></li>
							<li><a href="<?php echo SITEURL; ?>/browse-resumes.php">Browse Resumes</a></li>
                            <li><a href="<?php echo SITEURL; ?>/bookmarks.php">Manage Bookmarks</a></li>
							<li><a href="<?php echo SITEURL; ?>/invoices.php">Invoices</a></li>
							<li><a href="<?php echo SITEURL; ?>/profile.php">Edit Profile</a></li>
							<li><a href="<?php echo SITEURL; ?>/company-settings.php">Company Settings</a></li>
						</ul>
					</li>
					<li><a href="<?php echo SITEURL; ?>/logout.php"><i class="fa fa-lock"></i> Logout</a></li>
				</ul>
			<?php } if ( $user->logged_in ){ ?>
				<ul class="float-right">
					<li><a href="<?php echo SITEURL; ?>/logout.php"><i class="fa fa-lock"></i> Logout</a></li>
				</ul>
			<?php } else { ?>
				<ul class="float-right">
					<li><a href="<?php echo SITEURL; ?>/register.php"><i class="fa fa-user"></i> Register</a></li>
					<li><a href="<?php echo SITEURL; ?>/login.php"><i class="fa fa-lock"></i> Log In</a></li>
				</ul>
			<?php } ?>

		</nav>

		<!-- Navigation -->
		<div id="mobile-navigation">
			<a href="index.php" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
		</div>

	</div>
</div>
</header>
<div class="clearfix"></div>
