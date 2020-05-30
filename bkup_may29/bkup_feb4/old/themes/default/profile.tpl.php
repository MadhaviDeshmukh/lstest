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
<div class="wojo-grid">
  <div class="vspace">
    <div class="wojo form tertiary segment">
      <h2><?php echo Lang::$word->_UA_TITLE4;?> / <?php echo Lang::$word->_UA_SUB5;?></h2>
      <div class="wojo message"><i class="icon pin"></i> <?php echo Lang::$word->_UA_INFO4;?> <?php echo Lang::$word->REQFIELD1;?> <i class="icon asterisk"></i> <?php echo Lang::$word->REQFIELD2;?></div>

	  <?php echo( isset($pmsg) && $pmsg != '' ) ? $pmsg : ''; ?>

	  <form id="wojo_form" name="wojo_form" method="post" enctype="multipart/form-data">
        <div class="two fields">
          <div class="field">
            <label><?php echo Lang::$word->USERNAME;?></label>
            <label class="input state-disabled"> <i class="icon-prepend icon user"></i>
              <input type="text" disabled="disabled" name="username" readonly value="<?php echo $row->username;?>">
            </label>
          </div>
          <div class="field">
            <label><?php echo Lang::$word->PASSWORD;?></label>
            <label class="input"> <i class="icon-prepend icon lock"></i>
              <input type="password" name="password">
            </label>
          </div>
        </div>
        <div class="three fields">
          <div class="field">
            <label><?php echo Lang::$word->EMAIL;?></label>
            <label class="input"> <i class="icon-prepend icon mail"></i> <i class="icon-append icon asterisk"></i>
              <input type="text" name="email" value="<?php echo $row->email;?>">
            </label>
          </div>
          <div class="field">
            <label><?php echo Lang::$word->FNAME;?></label>
            <label class="input"> <i class="icon-prepend icon user"></i> <i class="icon-append icon asterisk"></i>
              <input type="text" name="fname" value="<?php echo $row->fname;?>">
            </label>
          </div>
          <div class="field">
            <label><?php echo Lang::$word->LNAME;?></label>
            <label class="input"> <i class="icon-prepend icon user"></i> <i class="icon-append icon asterisk"></i>
              <input type="text" name="lname" value="<?php echo $row->lname;?>">
            </label>
          </div>
        </div>
        <div class="two fields">
          <div class="field">
            <label><?php echo Lang::$word->_UA_ADDRESS;?></label>
            <label class="input"><i class="icon-append icon asterisk"></i>
              <input type="text" value="<?php echo $row->address;?>" name="address">
            </label>
          </div>
          <div class="field">
            <label><?php echo Lang::$word->_UA_CITY;?></label>
            <label class="input"><i class="icon-append icon asterisk"></i>
              <input type="text" value="<?php echo $row->city;?>" name="city">
            </label>
          </div>
        </div>
        <div class="two fields">
          <div class="field">
            <label><?php echo Lang::$word->_UA_STATE;?></label>
            <label class="input"><i class="icon-append icon asterisk"></i>
              <input type="text" value="<?php echo $row->state;?>" name="state">
            </label>
          </div>
          <div class="field">
            <label><?php echo Lang::$word->_UA_ZIP;?></label>
            <label class="input"><i class="icon-append icon asterisk"></i>
              <input type="text" value="<?php echo $row->zip;?>" name="zip">
            </label>
          </div>
        </div>
        <div class="two fields">
          <p class="form-row form-row-wide">
            <label for="r_country"><?php echo Lang::$word->_UA_COUNTRY;?></label>
            <select name="country" id="r_country" class="chosen-select-no-single">
              <option value="">-- <?php echo Lang::$word->CNT_SELECT;?> --</option>
              <?php echo Core::loopOptions($datacountry, "abbr", "name", false);?>
            </select>
          </p>
        </div>






		<div class="six columns">
		  <div class="field">
			<label><?php echo Lang::$word->USR_AVATAR;?></label>
            <label class="new-file-field">
              <input type="file" name="avatar" class="filefield">
            </label>
		  </div>
		</div>
		<div class="six columns">
		  <div class="field">
			<label><?php echo Lang::$word->USR_AVATAR;?></label>
            <div class="avatar-image">
              <?php if($row->avatar):?>
              <img src="<?php echo UPLOADURL;?>avatars/<?php echo $row->avatar;?>" alt="<?php echo $row->username;?>">
              <?php else:?>
              <img src="<?php echo UPLOADURL;?>avatars/blank.png" alt="<?php echo $row->username;?>">
              <?php endif;?>
            </div>
		  </div>
		</div>

        <div class="field">
          <label><?php echo Lang::$word->USR_NEWS;?></label>
          <div class="inline-group">
            <label class="radio">
              <input type="radio" name="newsletter" value="1" <?php getChecked($row->newsletter, 1); ?>>
              <i></i><?php echo Lang::$word->YES;?></label>
            <label class="radio">
              <input type="radio" name="newsletter" value="0" <?php getChecked($row->newsletter, 0); ?>>
              <i></i><?php echo Lang::$word->NO;?></label>
          </div>
        </div>
        <div class="two fields">
          <div class="field">
            <label><?php echo Lang::$word->USR_REGDATE;?></label>
            <label class="input state-disabled"> <i class="icon-prepend icon calendar"></i>
              <input type="text" name="created" disabled="disabled" readonly value="<?php echo Filter::dodate("long_date", $row->created);?>">
            </label>
          </div>
          <div class="field">
            <label><?php echo Lang::$word->USR_LASTLOGIN;?></label>
            <label class="input state-disabled"> <i class="icon-prepend icon calendar"></i>
              <input type="text" name="lastlogin" disabled="disabled" readonly value="<?php echo Filter::dodate("long_date", $row->lastlogin);?>">
            </label>
          </div>
        </div>
        <div class="wojo fitted divider"></div>
        <div class="field">
          <input type="submit" name="dosubmit" class="wojo info button" value="<?php echo Lang::$word->_UA_UPROFILE;?>">
        </div>
        <input name="processUser" type="hidden" value="1">
      </form>
    </div>
    <div id="msgholder"></div>
  </div>
</div>
</div>
</div>
<?php include("footer.tpl.php");?>
