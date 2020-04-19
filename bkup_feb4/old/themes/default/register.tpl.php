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
	<div class="register-account">
		<?php if(!$core->reg_allowed):?>
		<?php echo Filter::msgAlert(Lang::$word->_UA_NOREG);?>
		<?php elseif($core->user_limit !=0 and $core->user_limit == $numusers):?>
		<?php echo Filter::msgAlert(Lang::$word->_UA_MAXREG);?>
		<?php else:?>
		<h3 class="margin-bottom-10 margin-top-10 align-center"><?php echo Lang::$word->_UA_TITLE2;?> / <?php echo Lang::$word->_UA_SUB2;?></h3>
		<!-- <p><?php echo Lang::$word->_UA_INFO2;?> <?php echo Lang::$word->REQFIELD1;?> (*) <?php echo Lang::$word->REQFIELD2;?></p> -->

		<div id="msgholder2"><?php print Filter::$showMsg;?></div>

		<form class="" id="form" name="" method="post">

		  <div class="six columns">
			<p class="form-row form-row-wide">
        <label for="seekerid" class="seekerid margin-bottom-20 margin-top-10">
          <input id="seekerid" class="clickclass" type="radio" name="userlevel" value="1" required />
          <span>Job Seeker</span>
        </label>
        <label for="employerid" class="employerid margin-bottom-20 margin-top-10">
          <input id="employerid" class="clickclass" type="radio" name="userlevel" value="2" required />
          <span>Employer</span>
        </label>
			</p>
		  </div>

      <div class="six columns">
  			<p class="form-row form-row-wide">
  				<input type="text" class="input-text" name="fname" id="r_fname" placeholder="<?php echo Lang::$word->FNAME;?>" value="" />
  			</p>
		  </div>
		  <div class="six columns">
  			<p class="form-row form-row-wide">
  				<input type="text" class="input-text" name="lname" id="r_lname" placeholder="<?php echo Lang::$word->LNAME;?>" value="" />
  			</p>
		  </div>

      <div class="six columns">
			<p class="form-row form-row-wide">
				<input type="text" placeholder="<?php echo Lang::$word->EMAIL;?>" class="input-text" name="email" id="r_email" value="" />
			</p>
		  </div>

      <div class="six columns">
			<p class="form-row form-row-wide">
				<input type="text" class="input-text" placeholder="<?php echo Lang::$word->USERNAME;?>" name="username" id="r_username" value="" />
			</p>
		  </div>
		  <div class="six columns">
			<p class="form-row form-row-wide">
				<input type="password" class="input-text" name="pass" id="r_password" value="" placeholder="<?php echo Lang::$word->PASSWORD;?>" />
			</p>
		  </div>
		  <div class="six columns">
			<p class="form-row form-row-wide">
				<input type="password" class="input-text" name="pass2" id="r_password2" value="" placeholder="Confirm password" />
			</p>
		  </div>


		  <div class="six columns">
			<p class="form-row form-row-wide">
				<label for="r_captcha"><img src="lib/captcha.php" alt="" class="captcha" /> <i class="icon-prepend icon-eye-open"></i></label>
				<input type="text" class="input-text" id="r_captcha" name="captcha" placeholder="<?php echo Lang::$word->CAPTCHA;?>" />
			</p>
		  </div>


          <input name="doRegister" type="hidden" value="1">
          <input data-geo="country" name="tmpcountry" type="hidden" value="">

		  <p class="form-row">
			     <input type="submit" class="button" name="dosubmit" value="<?php echo Lang::$word->_UA_REGA;?>" />
		  </p>
		  <p class="lost_password">
			     <a href="<?php echo SITEURL; ?>/login.php" >Already have an account? Login Now?</a>
		  </p>

		</form>
		<?php endif;?>
	</div>
</div>
<!-- <script src="<?php echo $protocol;?>://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
<script type="text/javascript" src="<?php echo SITEURL;?>/assets/geocomplete.js"></script> -->

<?php include("footer.tpl.php");?>

<script type="text/javascript">
// <![CDATA[
$(document).ready(function() {
  $(".clickclass").on('change', function() {
    $this = $( this );
     $(".clicked").removeClass("clicked");
    $this.parent().toggleClass( 'clicked' );
  } );
});
// ]]>
</script>
