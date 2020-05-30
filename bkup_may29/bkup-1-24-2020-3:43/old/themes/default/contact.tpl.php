<?php
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');

?>
<!-- Start Contact Form-->
<div class="container">
  <form id="wojo_form" name="wojo_form" method="post">
    <div class="two fields">
      <div class="field">
        <label><?php echo Lang::$word->PLG_CT_NAME;?></label>
        <label class="input"> <i class="icon-prepend icon user"></i><i class="icon-append icon asterisk"></i>
          <input type="text" name="name" value="<?php if ($user->logged_in) echo $user->name;?>" placeholder="<?php echo Lang::$word->PLG_CT_NAME;?>">
        </label>
      </div>
      <div class="field">
        <label><?php echo Lang::$word->EMAIL;?></label>
        <label class="input"> <i class="icon-prepend icon mail"></i><i class="icon-append icon asterisk"></i>
          <input type="text" name="email" value="<?php if ($user->logged_in) echo $user->email;?>" placeholder="<?php echo Lang::$word->EMAIL;?>">
        </label>
      </div>
    </div>
    <div class="two fields">
      <div class="field">
        <p class="form-row form-row-wide">
          <label for="contact_subject"><?php echo Lang::$word->PLG_CT_SUBJECT;?></label>
          <select name="subject" id="contact_subject" class="chosen-select-no-single">
            <option value="">--- <?php echo Lang::$word->PLG_CT_SUBJECT_1;?> ---</option>
            <option value="<?php echo Lang::$word->PLG_CT_SUBJECT_2;?>"><?php echo Lang::$word->PLG_CT_SUBJECT_2;?></option>
            <option value="<?php echo Lang::$word->PLG_CT_SUBJECT_3;?>"><?php echo Lang::$word->PLG_CT_SUBJECT_3;?></option>
            <option value="<?php echo Lang::$word->PLG_CT_SUBJECT_4;?>"><?php echo Lang::$word->PLG_CT_SUBJECT_4;?></option>
            <option value="<?php echo Lang::$word->PLG_CT_SUBJECT_5;?>"><?php echo Lang::$word->PLG_CT_SUBJECT_5;?></option>
            <option value="<?php echo Lang::$word->PLG_CT_SUBJECT_6;?>"><?php echo Lang::$word->PLG_CT_SUBJECT_6;?></option>
            <option value="<?php echo Lang::$word->PLG_CT_SUBJECT_7;?>"><?php echo Lang::$word->PLG_CT_SUBJECT_7;?></option>
          </select>
        </p>
      </div>
      <div class="field">
        <label><?php echo Lang::$word->CAPTCHA;?></label>
        <label class="input"> <img src="<?php echo SITEURL;?>/lib/captcha.php" alt="" class="captcha-append" /> <i class="icon-prepend icon hide"></i>
          <input type="text" name="captcha" placeholder="<?php echo Lang::$word->CAPTCHA;?>">
        </label>
      </div>
    </div>
    <div class="field">
      <label><?php echo Lang::$word->PLG_CT_MSG;?></label>
      <label class="textarea"> <i class="icon-append icon asterisk"></i>
        <textarea name="message" placeholder="<?php echo Lang::$word->PLG_CT_MSG;?>"></textarea>
      </label>
    </div>
    <div class="wojo fitted divider"></div>
    <div class="field">
      <button data-url="/ajax/sendmail.php" type="button" name="dosubmit" class="wojo info button"><?php echo Lang::$word->PLG_CT_SEND;?></button>
    </div>
  </form>
</div>
<div id="msgholder"></div>
<!-- End Contact Form/-->
