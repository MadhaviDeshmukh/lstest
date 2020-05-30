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

  <form id="wojo_form" name="wojo_form" method="post" enctype="multipart/form-data">
	<!-- Submit Page -->
	<div class="sixteen columns">
		<div class="submit-page">
			<?php echo( isset($pmsg) && $pmsg != '' ) ? $pmsg : ''; ?>
			<div class="form">
				<h5>Company Name</h5>
				<input name="name" class="search-field" type="text" placeholder="Company Name" value="<?php echo ($row->name != '') ? $row->name : ''; ?>"/>
			</div>
			<div class="form">
				<h5>About Company</h5>
				<textarea name="about" class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"><?php echo ($row->about != '') ? $row->about : ''; ?></textarea>
			</div>
			<div class="form">
				<h5>Company Business</h5>
				<textarea name="business" class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"><?php echo ($row->business != '') ? $row->business : ''; ?></textarea>
			</div>
			<div class="form">
			  <h5>Company Logo</h5>
			  <div class="field">

				<label class="new-file-field">
				    <input type="file" name="avatar">
				    <i class="fa fa-upload"></i> Browse
				</label>

				<div class="avatar-image">
				  <?php if($row->avatar):?>
				  <img src="<?php echo UPLOADURL;?>avatars/<?php echo $row->avatar;?>" alt="<?php echo $row->username;?>">
				  <?php else:?>
				  <img src="<?php echo UPLOADURL;?>avatars/blank.png" alt="<?php echo $row->username;?>">
				  <?php endif;?>
				</div>
			  </div>
			</div>
			<div class="form with-line">
				<h5>Address</h5>
				<input name="address" class="search-field" type="text" placeholder="" value="<?php echo ($row->address != '') ? $row->address : ''; ?>"/>
			</div>
			<div class="form">
				<h5>Phone</h5>
				<input name="phone" class="search-field" type="text" placeholder="e.g. +1" value="<?php echo ($row->phone != '') ? $row->phone : ''; ?>"/>
			</div>
			<div class="form">
				<h5>Email</h5>
				<input name="email" class="search-field" type="text" placeholder="mail@example.com" value="<?php echo ($row->email != '') ? $row->email : ''; ?>"/>
			</div>
			<div class="form">
				<h5>Website</h5>
				<input name="website" class="search-field" type="text" placeholder="http://www.example.com/" value="<?php echo ($row->website != '') ? $row->website : ''; ?>"/>
			</div>
			<div class="form">
				<h5>Facebook</h5>
				<input name="facebook" class="search-field" type="text" placeholder="http://www.facebook.com/username" value="<?php echo ($row->facebook != '') ? $row->facebook : ''; ?>"/>
			</div>
			<div class="form">
				<h5>Twitter</h5>
				<input name="twitter" class="search-field" type="text" placeholder="http://www.twitter.com/username" value="<?php echo ($row->twitter != '') ? $row->twitter : ''; ?>"/>
			</div>
			<div class="form">
				<h5>Linked In</h5>
				<input name="linkedin" class="search-field" type="text" placeholder="http://www.linkedin.com/company" value="<?php echo ($row->linkedin != '') ? $row->linkedin : ''; ?>"/>
			</div>
			<div class="form">
				<h5>Google Plus</h5>
				<input name="gplus" class="search-field" type="text" placeholder="http://www.google.com/company" value="<?php echo ($row->gplus != '') ? $row->gplus : ''; ?>"/>
			</div>
			<input type="hidden" name="updateCompany" value="1">
			<div class="divider margin-top-0 padding-reset"></div>
			<input type="submit" value="Update Company Information">
		</div>
	</div>
  </form>
</div>
<?php include("footer.tpl.php");?>
