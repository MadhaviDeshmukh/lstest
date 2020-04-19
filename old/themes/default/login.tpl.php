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
	<div class="my-account">
		<ul class="tabs-nav">
			<li class=""><a href="#tab1">Login</a></li>
			<li><a href="#tab2">Forget Password</a></li>
		</ul>

		<div class="tabs-container login-form">
			<!-- Login -->
			<div class="tab-content" id="tab1" style="display: none;">
				<h3 class="margin-bottom-10 margin-top-10"><?php echo Lang::$word->_UA_TITLE;?></h3>
				<?php print Filter::$showMsg;?>
				<form class="login" method="post" id="login_form" name="login_form">
					<p class="form-row form-row-wide">
						<input type="text" class="input-text" id="username" name="username" placeholder="<?php echo Lang::$word->USERNAME;?>" value="" />
					</p>
					<p class="form-row form-row-wide">
						<input class="input-text" type="password" id="password" name="password" placeholder="<?php echo Lang::$word->PASSWORD;?>" />
					</p>
					<p class="form-row">
						<input type="submit" class="button" name="submit" value="<?php echo Lang::$word->_UA_LOGIN;?>" />
					</p>
					<?php if($core->reg_allowed):?>
					<p class="lost_password">
						<a href="<?php echo SITEURL; ?>/register.php" >Don't have account? Register Now?</a>
					</p>
					<?php endif;?>
					<input name="doLogin" type="hidden" value="1" />
				</form>
			</div>

			<!-- Register -->
			<div class="tab-content" id="tab2" style="display: none;">
				<h3 class="margin-bottom-10 margin-top-10"><?php echo Lang::$word->_UA_TITLE1;?></h3>
				<?php print Filter::$showMsg;?>
				<form class="register form" id="wojo_form" name="wojo_form" method="post">

					<p class="form-row form-row-wide">
						<input type="text" class="input-text" id="for_uname" name="uname" placeholder="<?php echo Lang::$word->USERNAME;?>" value="" />
					</p>


					<p class="form-row form-row-wide">
						<input type="text" class="input-text" id="for_email" name="email" placeholder="<?php echo Lang::$word->EMAIL;?>" />
					</p>

					<p class="form-row form-row-wide">
						<label for="for_captcha"><img src="lib/captcha.php" alt="" class="captcha" /> <i class="icon-prepend icon-eye-open"></i></label>
						<input type="text" class="input-text" id="for_captcha" name="captcha" placeholder="<?php echo Lang::$word->CAPTCHA;?>" />
					</p>

					<p class="form-row">
					<input type="submit" name="dosubmit" class="wojo info button" value="<?php echo Lang::$word->_UA_SUBREQ;?>" />
					<input name="passReset" type="hidden" value="1">
					</p>

				</form>
			</div>
		</div>
	</div>
</div>
<?php include("footer.tpl.php");?>
