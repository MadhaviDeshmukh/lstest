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
				<h5>Your Name</h5>
				<input name="fullname" class="search-field" type="text" placeholder="Your full name" value="<?php echo ($row->fullname != '') ? $row->fullname : ''; ?>"/>
			</div>
			<div class="form">
				<h5>Professional Title</h5>
				<input name="title" class="search-field" type="text" placeholder="e.g. Web Developer" value="<?php echo ($row->title != '') ? $row->title : ''; ?>"/>
			</div>
			<div class="form">
				<h5>Hourly Rate</h5>
				<input name="hourly_rate" class="search-field" type="text" placeholder="e.g. 20" value="<?php echo ($row->hourly_rate != '') ? $row->hourly_rate : ''; ?>"/>
			</div>
			<div class="form">
				<h5>Phone</h5>
				<input name="phone" class="search-field" type="text" placeholder="e.g. +1" value="<?php echo ($row->phone != '') ? $row->phone : ''; ?>"/>
			</div>
			<div class="form">
				<h5>Your Email</h5>
				<input name="email" class="search-field" type="text" placeholder="mail@example.com" value="<?php echo ($row->email != '') ? $row->email : ''; ?>"/>
			</div>
			<div class="form">
			  <h5>Resume Photo</h5>
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
			<div class="form">
				<h5>Career Objective</h5>
				<textarea name="objective" class="" name="summary" cols="40" rows="5" max="200" id="summary" spellcheck="true"><?php echo ($row->objective != '') ? $row->objective : ''; ?></textarea>
        <p class="note">Maximum 200 letters.</p>
			</div>
			<div class="form">
				<h5>Skills<span>(skill keywords)</span></h5>
        <select name="skills[]" data-placeholder="PHP, CSS, HTML" class="chosen-select" multiple>
					<?php $jobs->getJobSkillDropList($row->skills);?>
				</select>
			</div>
			<div class="form">
				<h5>Experience</h5>
				<div class="form-inside">
				<?php $array = unserialize($row->experience); ?>
				<?php foreach( $array as $key=>$value ) { ?>
				  <?php if($value['company'] != ''){ ?>
					<!-- Add Experience -->
					<div class="form boxed box-to-clone experience-box show-box">
						<a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
						<input name="exp_company[]" class="search-field" type="text" placeholder="Employer" value="<?php echo ($value['company'] != '') ? $value['company'] : ''; ?>"/>
						<input name="exp_designation[]" class="search-field" type="text" placeholder="Job Title" value="<?php echo ($value['designation'] != '') ? $value['designation'] : ''; ?>"/>
						<input name="exp_start[]" class="search-field" type="text" placeholder="Start e.g. DD/MM/YYYY" value="<?php echo ($value['start'] != '') ? $value['start'] : ''; ?>"/>
						<input name="exp_end[]" class="search-field" type="text" placeholder="End date e.g. DD/MM/YYYY" value="<?php echo ($value['end'] != '') ? $value['end'] : ''; ?>"/>
						<textarea name="exp_notes[]" name="desc1" id="desc1" cols="30" rows="10" placeholder="Responsibilities"><?php echo ($value['notes'] != '') ? $value['notes'] : ''; ?></textarea>
					</div>
				  <?php } ?>
				<?php } ?>
					<!-- Add Experience -->
					<div class="form boxed box-to-clone experience-box">
						<a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
						<input name="exp_company[]" class="search-field" type="text" placeholder="Employer" value=""/>
						<input name="exp_designation[]" class="search-field" type="text" placeholder="Job Title" value=""/>
						<input name="exp_start[]" class="search-field" type="text" placeholder="Start e.g. DD/MM/YYYY" value=""/>
						<input name="exp_end[]" class="search-field" type="text" placeholder="End date e.g. DD/MM/YYYY" value=""/>
						<textarea name="exp_notes[]" name="desc1" id="desc1" cols="30" rows="10" placeholder="Responsibilities"></textarea>
					</div>
					<a href="#" class="button green add-experience add-box"><i class="fa fa-plus-circle"></i> Add Experience</a>
				</div>
			</div>
			<div class="form with-line">
				<h5>Education <span>(optional)</span></h5>
				<div class="form-inside">
				<?php $array = unserialize($row->education); ?>
				<?php foreach( $array as $key=>$value ) { ?>
				  <?php if($value['name'] != ''){ ?>
					<div class="form boxed box-to-clone education-box show-box">
						<a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
						<input name="edu_name[]" class="search-field" type="text" placeholder="Institute / University" value="<?php echo ($value['name'] != '') ? $value['name'] : ''; ?>"/>
						<input name="edu_subject[]" class="search-field" type="text" placeholder="Major Subject / Course" value="<?php echo ($value['subject'] != '') ? $value['subject'] : ''; ?>"/>
						<input name="edu_degree[]" class="search-field" type="text" placeholder="Degree / Level" value="<?php echo ($value['degree'] != '') ? $value['degree'] : ''; ?>"/>
						<input name="edu_year[]" class="search-field" type="text" placeholder="Year of Passing" value="<?php echo ($value['year'] != '') ? $value['year'] : ''; ?>"/>
						<textarea name="edu_notes[]" name="desc" id="desc" cols="30" rows="10" placeholder="Notes (optional)"><?php echo ($value['notes'] != '') ? $value['notes'] : ''; ?></textarea>
					</div>
				  <?php } ?>
				<?php } ?>
					<div class="form boxed box-to-clone education-box">
						<a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
						<input name="edu_name[]" class="search-field" type="text" placeholder="Institute / University" value=""/>
						<input name="edu_subject[]" class="search-field" type="text" placeholder="Major Subject / Course" value=""/>
						<input name="edu_degree[]" class="search-field" type="text" placeholder="Degree / Level" value=""/>
						<input name="edu_year[]" class="search-field" type="text" placeholder="Year of Passing" value=""/>
						<textarea name="edu_notes[]" name="desc" id="desc" cols="30" rows="10" placeholder="Notes (optional)"></textarea>
					</div>
					<a href="#" class="button green add-education add-box"><i class="fa fa-plus-circle"></i> Add Education</a>
				</div>
			</div>
			<div class="form with-line">
				<h5>Online Portfolio URL(s) <span>(optional)</span></h5>
				<div class="form-inside">
				<?php $array = unserialize($row->portfolio); ?>
				<?php foreach( $array as $key=>$value ) { ?>
				  <?php if($value['name'] != ''){ ?>
					<div class="form boxed box-to-clone url-box show-box">
						<a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
						<input name="port_name[]" class="search-field" type="text" placeholder="Name" value="<?php echo ($value['name'] != '') ? $value['name'] : ''; ?>"/>
						<input name="port_url[]" class="search-field" type="text" placeholder="http://" value="<?php echo ($value['url'] != '') ? $value['url'] : ''; ?>"/>
					</div>
				  <?php } ?>
				<?php } ?>
					<div class="form boxed box-to-clone url-box">
						<a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
						<input name="port_name[]" class="search-field" type="text" placeholder="Name" value=""/>
						<input name="port_url[]" class="search-field" type="text" placeholder="http://" value=""/>
					</div>
					<a href="#" class="button green add-url add-box"><i class="fa fa-plus-circle"></i> Add Portfolio Online</a>
					<p class="note">Optionally provide links to any of your websites or social network profiles.</p>
				</div>
			</div>
			<div class="form with-line">
				<h5>Reffences<span>(optional)</span></h5>
				<div class="form-inside">
				<?php $array = unserialize($row->references); ?>
				<?php foreach( $array as $key=>$value ) { ?>
				  <?php if($value['name'] != ''){ ?>
					<!-- Adding Reffences -->
					<div class="form boxed box-to-clone url-box show-box">
						<a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
						<input name="ref_name[]" class="search-field" type="text" placeholder="Name" value="<?php echo ($value['name'] != '') ? $value['name'] : ''; ?>"/>
						<input name="ref_profession[]" class="search-field" type="text" placeholder="Profession" value="<?php echo ($value['profession'] != '') ? $value['profession'] : ''; ?>"/>
						<input name="ref_phone[]" class="search-field" type="text" placeholder="Phone" value="<?php echo ($value['phone'] != '') ? $value['phone'] : ''; ?>"/>
						<input name="ref_email[]" class="search-field" type="text" placeholder="Email" value="<?php echo ($value['email'] != '') ? $value['email'] : ''; ?>"/>
					</div>
				  <?php } ?>
				<?php } ?>
					<div class="form boxed box-to-clone url-box">
						<a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
						<input name="ref_name[]" class="search-field" type="text" placeholder="Name" value=""/>
						<input name="ref_profession[]" class="search-field" type="text" placeholder="Profession" value=""/>
						<input name="ref_phone[]" class="search-field" type="text" placeholder="Phone" value=""/>
						<input name="ref_email[]" class="search-field" type="text" placeholder="Email" value=""/>
					</div>
					<a href="#" class="button green add-url add-box"><i class="fa fa-plus-circle"></i> Add Reffence</a>
					<p class="note">Optionally provide links to any of your websites or social network profiles.</p>
				</div>
			</div>
			<div class="form with-line">
				<h5>Present Address</h5>
				<input name="present_address" class="search-field" type="text" placeholder="" value="<?php echo ($row->present_address != '') ? $row->present_address : ''; ?>"/>
			</div>


			<div class="form">
				<h5>Permanent Address</h5>
				<input name="permanent_address" class="search-field" type="text" placeholder="" value="<?php echo ($row->permanent_address != '') ? $row->permanent_address : ''; ?>"/>
			</div>
			<div class="form">
				<h5>City</h5>
				<input name="city" class="search-field" type="text" placeholder="Sydney" value="<?php echo ($row->city != '') ? $row->city : ''; ?>"/>
			</div>
			<div class="form">
				<h5>State</h5>
				<input name="state" class="search-field" type="text" placeholder="" value="<?php echo ($row->state != '') ? $row->state : ''; ?>"/>
			</div>
			<div class="form">
				<h5>Country</h5>
        <select name="country" id="country" class="chosen-select-no-single">
          <option value="">-- <?php echo Lang::$word->CNT_SELECT;?> --</option>
          <?php echo Core::loopOptions($datacountry, "name", "name", $row->country);?>
        </select>
			</div>


			<div class="form">
				<h5>Website</h5>
				<input name="website" class="search-field" type="text" placeholder="http://www.example.com/" value="<?php echo ($row->website != '') ? $row->website : ''; ?>"/>
			</div>
			<div class="form">
				<h5>Facebook</h5>
				<input name="facebook" class="search-field" type="text" placeholder="http://www.facebook.com/your.username" value="<?php echo ($row->facebook != '') ? $row->facebook : ''; ?>"/>
			</div>
			<div class="form">
				<h5>Twitter</h5>
				<input name="twitter" class="search-field" type="text" placeholder="http://www.twitter.com/your_username" value="<?php echo ($row->twitter != '') ? $row->twitter : ''; ?>"/>
			</div>
			<div class="form">
				<h5>Linked In</h5>
				<input name="linkedin" class="search-field" type="text" placeholder="http://www.linkedin.com/you" value="<?php echo ($row->linkedin != '') ? $row->linkedin : ''; ?>"/>
			</div>
			<div class="form">
				<h5>Google Plus</h5>
				<input name="gplus" class="search-field" type="text" placeholder="http://www.google.com/you" value="<?php echo ($row->gplus != '') ? $row->gplus : ''; ?>"/>
			</div>
			<input type="hidden" name="updateResume" value="1">
			<div class="divider margin-top-0 padding-reset"></div>
			<input type="submit" value="Update Resume">
		</div>
	</div>
  </form>
</div>
<?php include("footer.tpl.php");?>
