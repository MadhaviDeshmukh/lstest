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

<?php
function lang($value) {return $value; } ?>
<?php switch(Filter::$action): case "view": ?>
<?php $single = $content->getMessageById();?>
<?php if($single->user1 == $user->uid or $single->user2 == $user->uid):?>
<?php $userp = $content->updateMessageStatus($single->user1);?>
<?php $msgdata = $content->renderMessages();?>
<div class="container">
<form class="form" method="post">
  <h3>Viewing Instant Messages <i class="fa fa-angle-right"></i> <?php echo $single->msgsubject;?></h3>
  <ul id="reply-list">
    <?php foreach ($msgdata as $row):?>
    <li class="<?php echo ($user->uid == $row->userid) ? 'row-staff' : 'row-client'?>"><strong>From:</strong> <?php echo ($user->uid == $row->userid) ? '<span class="label2 label-you">You</span>' : '<span class="label2 label-other">' . $row->username . '</span>';?> <?php echo dodate($row->created);?>
      <div class="message"><strong>Message:</strong> <?php echo cleanOut($row->body);?>
        <?php if($row->attachment):?>
        <div> <strong><?php echo lang('MAIL_REC_ATTACH');?>:</strong> <i class="icon-download-alt"></i> <a href="<?php echo UPLOADURL . 'tempfiles/' . $row->attachment;?>"><?php echo lang('FORM_DOWNLOAD');?></a> </div>
        <?php endif;?>
      </div>
    </li>
    <?php endforeach;?>
    <?php unset($row);?>
  </ul>

    <section>
        <div class="field-wrap wysiwyg-wrap">
            <textarea class="post" name="body" rows="5"></textarea>
        </div>
    </section>
    <button class="message-button" name="dosubmit" type="submit">Reply</button>
    <a href="<?php echo SITEURL; ?>/messages.php" class="message-button">Cancel</a>
    <input name="id" type="hidden" value="<?php echo Filter::$id;?>" />
    <input name="uid2" type="hidden" value="<?php echo count($msgdata) + 1;?>" />
    <input name="userp" type="hidden" value="<?php echo $userp;?>" />
    <input name="msgsubject" type="hidden" value="<?php echo sanitize($single->msgsubject);?>" />
    <input name="recipient" type="hidden" value="<?php echo ($user->uid == $single->user1) ?  $single->user2 : $single->user1;?>" />
    <input name="update" type="hidden" value="1" />
    <input name="processMessage" type="hidden" value="1" />
</form>
<?php else:?>
    <p>Sorry, something went wrong.</p>
<?php endif;?>
</div>
<?php break;?>
<?php case"add": ?>
<?php if ($user->userlevel > 2):?>
<div class="container">
    <?php $userlist = $user->getUserList(1);?>
    <form class="xform" id="admin_form" method="post">
        <h3>Send New Message</h3>

        <div class="form">
            <h5>Message Subject</h5>
            <input type="text" name="msgsubject" placeholder="Message Subject">
        </div><br>

        <div class="form">
            <h5>Recipient</h5>
            <select name="recipient" class="chosen-select-no-single">
                <option value="">--- Select Recipient ---</option>
                <?php if($userlist):?>
                <?php foreach ($userlist as $urow):?>
                <?php if($user->userlevel == 9):?>
                <option value="<?php echo $urow->id;?>"><?php echo $urow->name.' - '.$urow->email;?></option>
                <?php else:?>
                <option value="<?php echo $urow->id;?>"><?php echo $urow->name;?></option>
                <?php endif;?>
                <?php endforeach;?>
                <?php unset($urow);?>
                <?php endif;?>
            </select>
        </div><br>

        <div class="form">
            <h5>Message Content</h5>
            <div class="field-wrap wysiwyg-wrap">
                <textarea class="post" name="body" rows="5"></textarea>
            </div>
        </div><br>

        <button class="button" name="dosubmit" type="submit">Send Message</button>
        <a href="<?php echo SITEURL; ?>/messages.php" class="button">Cancel</a>
        <input type="hidden" name="processMessage" value="1">
    </form>
</div>
<?php endif; ?>
<?php break;?>
<?php default: ?>
<div class="container">
    <?php $messagerow = $content->getMessages();?>
    <section class="widget">
      <header>
        <?php if ($user->userlevel > 2):?>
            <!-- <div class="push-right"><a href="<?php echo SITEURL; ?>/messages.php?action=add" class="button">Send New Message</a></div> -->
        <?php endif; ?>
        <h1>Viewing Instant Messages</h1>
      </header>
      <div class="content2">
        <?php if(!$messagerow):?>
        <?php echo "Soory, there is no Message.";?>
        <?php else:?>
        <table class="jobboard basic table">
          <thead>
            <tr>
              <th class="header"></th>
              <th class="header">Sender Name</th>
              <th class="header">Message Subject</th>
              <th class="header">#Replies</th>
              <th class="header">Message Sent</th>
              <th class="header">Actions</th>
            </tr>
          </thead>
          <?php foreach ($messagerow as $row):?>
          <tr>
            <td><span class="message-dropcap"><?php echo substr($row->name, 0, 1);?></span></td>
            <td><?php echo $row->name;?></td>
            <td><?php echo $row->msgsubject;?></td>
            <td><?php echo $row->replies - 1;?></td>
            <td><?php echo $row->created;?></td>
            <td>
                <a href="<?php echo SITEURL; ?>/messages.php?action=view&amp;id=<?php echo $row->uid1;?>" class="message-view-button"><i class="fa fa-desktop"></i></a>
                <a href="javascript:void(0);" id="item_<?php echo $row->id . ':' . $row->uid1;?>" class="message-remove-button" ><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          <?php endforeach;?>
          <?php unset($row);?>
        </table>
        <?php if($pager->display_pages()):?>
        <?php echo $pager->display_pages();?>
        <?php endif;?>
        <?php endif;?>
      </div>
    </section>
</div>
<?php break;?>
<?php endswitch;?>

<?php include("footer.tpl.php");?>
