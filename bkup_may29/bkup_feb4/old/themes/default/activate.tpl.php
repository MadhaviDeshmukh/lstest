<?php
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
?>
<?php include("header.tpl.php");?>
<div class="wojo-grid">
  <div class="vspace">
    <div class="wojo form tertiary segment">
      <h2><?php echo Lang::$word->_UA_TITLE3;?> / <?php echo Lang::$word->_UA_SUB3;?></h2>
      <div class="wojo message"><i class="icon pin"></i> <?php echo Lang::$word->_UA_INFO3;?> <?php echo Lang::$word->REQFIELD1;?> <i class="icon asterisk"></i> <?php echo Lang::$word->REQFIELD2;?></div>
      <form id="wojo_form" name="wojo_form" method="post">
        <div class="field">
          <label><?php echo Lang::$word->EMAIL;?></label>
          <label class="input"> <i class="icon-prepend icon mail"></i> <i class="icon-append icon asterisk"></i>
            <input type="text" name="email" placeholder="<?php echo Lang::$word->EMAIL;?>">
          </label>
        </div>
        <div class="field">
          <label><?php echo Lang::$word->_UA_TOKEN;?></label>
          <label class="input"> <i class="icon-prepend icon filter"></i> <i class="icon-append icon asterisk"></i>
            <input type="text" name="token" placeholder="<?php echo Lang::$word->_UA_TOKEN;?>">
          </label>
        </div>
        <div class="wojo fitted divider"></div>
        <div class="field">
          <div class="push-right"> <a href="login.php" class="wojo black labeled icon button"> <i class="left arrow icon"></i> <?php echo Lang::$word->BACKTOLOGIN;?></a> </div>
          <button data-url="/ajax/user.php" type="button" name="dosubmit" class="wojo info button"><?php echo Lang::$word->_UA_SUB3;?></button>
        </div>
        <input name="accActivate" type="hidden" value="1">
      </form>
      <div id="msgholder"></div>
    </div>
  </div>
</div>
<?php include("footer.tpl.php");?>