<?php
if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
?>
<?php include("header.tpl.php");?>

<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>Manage Applications</h2>
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="#">Home</a></li>
					<li>Job Dashboard</li>
				</ul>
			</nav>
		</div>

	</div>
</div>

<div class="container">
	<!-- Table -->

	<div class="sixteen columns">
		<p class="margin-bottom-25" style="float: left;">The job applications for <strong><a class="application-title" href="job.php?id=<?php echo (isset($_GET['jobid']) && $_GET['jobid'] > 0) ? $_GET['jobid'] : ''; ?>"><?php echo $jobs->getJobTitle($_GET['jobid']); ?></a></strong> are listed below.</p>
	</div>

	<div class="eight columns">
		<!-- Select -->
		<select id="statusfilter" data-placeholder="Filter by status" class="chosen-select-no-single">
			<option value="">Filter by status</option>
			<option value="all" <?php echo (isset($_GET['status']) && $_GET['status'] == 'all') ? 'selected="selected"' : ''; ?>>All Applications</option>
			<option value="new" <?php echo (isset($_GET['status']) && $_GET['status'] == 'new') ? 'selected="selected"' : ''; ?>>New</option>
			<option value="interviewed" <?php echo (isset($_GET['status']) && $_GET['status'] == 'interviewed') ? 'selected="selected"' : ''; ?>>Interviewed</option>
			<option value="offer extended" <?php echo (isset($_GET['status']) && $_GET['status'] == 'offer extended') ? 'selected="selected"' : ''; ?>>Offer extended</option>
			<option value="hired" <?php echo (isset($_GET['status']) && $_GET['status'] == 'hired') ? 'selected="selected"' : ''; ?>>Hired</option>
			<option value="archived" <?php echo (isset($_GET['status']) && $_GET['status'] == 'archived') ? 'selected="selected"' : ''; ?>>Archived</option>
		</select>
		<div class="margin-bottom-15"></div>
	</div>

	<div class="eight columns">
		<!-- Select -->
		<select id="orderfilter" data-placeholder="Newest first" class="chosen-select-no-single">
			<option value="">Newest first</option>
			<option value="name" <?php echo (isset($_GET['order']) && $_GET['order'] == 'name') ? 'selected="selected"' : ''; ?>>Sort by name</option>
			<option value="rating" <?php echo (isset($_GET['order']) && $_GET['order'] == 'rating') ? 'selected="selected"' : ''; ?>>Sort by rating</option>
		</select>
		<div class="margin-bottom-35"></div>
	</div>




	<!-- Applications -->
	<div class="sixteen columns">

  <?php if($applications): ?>
    <?php foreach ($applications as $application):?>
    <!-- Application #1 -->
		<div class="application application<?php echo $application->id; ?>">
			<div class="app-content">

				<!-- Name / Avatar -->
				<div class="info">
					<img src="<?php echo ($application->avatar != '') ? UPLOADURL. 'avatars/' . $application->avatar : THEMEURL . '/images/avatar-placeholder.png'; ?>" alt="<?php echo $application->fullname; ?>">

					<span><a href="<?php echo SITEURL . "/resume.php?resumeid=" . $application->userid;?>"><?php echo $application->fullname; ?></a></span>
					<ul>
						<li><a href="<?php echo SITEURL . '/ajax/jobs.php?doresume=' .$application->userid; ?>"><i class="fa fa-file-text"></i> Download CV</a></li>
						<li><a href="#four-1" class="app-link"><i class="fa fa-envelope"></i> Contact</a></li>
					</ul>
				</div>

				<!-- Buttons -->
				<div class="buttons">
					<a href="#one-1" class="button gray app-link"><i class="fa fa-pencil"></i> Edit</a>
					<a href="#two-1" class="button gray app-link"><i class="fa fa-sticky-note"></i> Add Note</a>
					<a href="#three-1" class="button gray app-link"><i class="fa fa-plus-circle"></i> Show Details</a>
				</div>
				<div class="clearfix"></div>

			</div>

			<!--  Hidden Tabs -->
			<div class="app-tabs">

				<a href="#" class="close-tab button gray"><i class="fa fa-close"></i></a>

				<!-- First Tab -->
			    <div class="app-tab-content applicationStatusUpdate<?php echo $application->id; ?>" id="one-1">

					<div class="select-grid">
						<select id="applicationStatus<?php echo $application->id; ?>" data-placeholder="Application Status" class="chosen-select-no-single">
							<option value="">Application Status</option>
							<option value="new" <?php echo ($application->status == 'new') ? 'selected="selected"' : '' ; ?>>New</option>
							<option value="interviewed" <?php echo ($application->status == 'interviewed') ? 'selected="selected"' : '' ; ?>>Interviewed</option>
							<option value="offer extended" <?php echo ($application->status == 'offer extended') ? 'selected="selected"' : '' ; ?>>Offer extended</option>
							<option value="hired" <?php echo ($application->status == 'hired') ? 'selected="selected"' : '' ; ?>>Hired</option>
							<option value="archived" <?php echo ($application->status == 'archived') ? 'selected="selected"' : '' ; ?>>Archived</option>
						</select>
					</div>

                    <div class="select-grid">
						<select id="applicationRating<?php echo $application->id; ?>" data-placeholder="Rating" class="chosen-select-no-single">
							<option value="">Rating</option>
							<option value="one" <?php echo ($application->rating == 'one') ? 'selected="selected"' : '' ; ?>>One</option>
							<option value="two" <?php echo ($application->rating == 'two') ? 'selected="selected"' : '' ; ?>>Two</option>
							<option value="three" <?php echo ($application->rating == 'three') ? 'selected="selected"' : '' ; ?>>Three</option>
							<option value="four" <?php echo ($application->rating == 'four') ? 'selected="selected"' : '' ; ?>>Four</option>
							<option value="five" <?php echo ($application->rating == 'five') ? 'selected="selected"' : '' ; ?>>Five</option>
						</select>
					</div>

					<div class="clearfix"></div>
					<a onclick="applicationStatusUpdate(<?php echo $application->id; ?>);" class="button margin-top-15">Save</a>
					<a onclick="applicationDelete(<?php echo $application->id; ?>);" class="button gray margin-top-15 delete-application">Delete this application</a>

			    </div>

			    <!-- Second Tab -->
			    <div class="app-tab-content applicationAddNote<?php echo $application->id; ?>"  id="two-1">
					<textarea id="applicationNote<?php echo $application->id; ?>" placeholder="Private note regarding this application"><?php echo ($application->note != '') ? $application->note : '' ; ?></textarea>
					<a onclick="applicationAddNote(<?php echo $application->id; ?>);" class="button margin-top-15">Add Note</a>
			    </div>

			    <!-- Third Tab -->
			    <div class="app-tab-content opened" id="three-1">
					<i>Full Name:</i>
					<span><?php echo $application->fullname; ?></span>

					<i>Email:</i>
					<span><a href="mailto:<?php echo $application->email; ?>"><?php echo $application->email; ?></a></span>

                    <i>Expectation:</i>
					<span><?php echo ($application->expected != '') ? $application->expected : '' ; ?></span>

					<i>Message:</i>
					<span><?php echo $application->message; ?></span>
                    <?php if($application->note != ''): ?>
                        <i>Note:</i>
                        <span><?php echo $application->note; ?></span>
                    <?php endif; ?>
			    </div>

          <!-- Fourth Tab -->
          <div class="app-tab-content applicationSendMessage<?php echo $application->id; ?>"  id="four-1"  style="display: block;">
          <textarea id="applicationMessage<?php echo $application->id; ?>" placeholder="Send private message to the applicant"></textarea>
          <a onclick="applicationSendMessage(<?php echo $application->id; ?>,<?php echo $application->userid;?>);" id="sendMessage" class="button margin-top-15">Send Message</a>
          </div>


			</div>

			<!-- Footer -->
			<div class="app-footer">

				<div id="arating" class="rating <?php echo $application->rating; ?>-stars">
					<div class="star-rating"></div>
					<div class="star-bg"></div>
				</div>

				<ul>
					<li class="astatus"><i class="fa fa-file-text-o"></i> <?php echo ucfirst($application->status); ?></li>
					<li><i class="fa fa-calendar"></i> <?php echo dodate($application->created);?></li>
				</ul>
				<div class="clearfix"></div>

			</div>
		</div>
  <?php endforeach; ?>
  <?php unset($application) ?>
    <?php else: ?>
      <p>Sorry, No application found.</p>
    <?php endif; ?>

	</div>

</div>

<?php include("footer.tpl.php");?>

<script type="text/javascript">
  $(document).ready(function () {
      $('#statusfilter').change(function () {
      		var sts = $("#statusfilter option:selected").val();
      		var ord = $("#orderfilter option:selected").val();
          var url = 'manage-applications.php?jobid=<?php echo $_GET['jobid']; ?>';
          url = (sts != '') ? url + '&status=' + sts : url;
          url = (ord != '') ? url + '&order=' + ord : url;
      		window.location.href = url;
      })
      $('#orderfilter').change(function () {
      		var sts = $("#statusfilter option:selected").val();
      		var ord = $("#orderfilter option:selected").val();
          var url = 'manage-applications.php?jobid=<?php echo $_GET['jobid']; ?>';
          url = (sts != '') ? url + '&status=' + sts : url;
          url = (ord != '') ? url + '&order=' + ord : url;
      		window.location.href = url;
      })
  });

  function applicationStatusUpdate(appid){
      var status = document.getElementById('applicationStatus' + appid).value;
      var rating = document.getElementById('applicationRating' + appid).value;
      var dataString = 'applicationStatusUpdate=' + 1 + '&appid=' + appid + '&status=' + status + '&rating=' + rating;
      $.ajax({
         type:"POST",
         url:"ajax/jobs.php",
         data: dataString,
         cache: false,
         success: function (html) {
            $('.applicationStatusUpdate' + appid).prepend('<div class="notification success closeable">Application status and rating updates successfully.</div>');
            $('.application' + appid + ' .app-footer #arating').removeClass();
            $('.application' + appid + ' .app-footer #arating').addClass('rating ' + rating + '-stars');
            $('.application' + appid + ' .app-footer ul .astatus').html('<i class="fa fa-file-text-o"></i> ' + status);

         }
      });
      return false;
  }

  function applicationAddNote(appid){
      var note = document.getElementById('applicationNote' + appid).value;
      var dataString = 'applicationAddNote=' + 1 + '&appid=' + appid + '&note=' + note;
      $.ajax({
         type:"POST",
         url:"ajax/jobs.php",
         data: dataString,
         cache: false,
         success: function (html) {
            $('.applicationAddNote' + appid).prepend('<div class="notification success closeable">Note for this application added or updated successfully.</div>');
         }
      });
      return false;
  }

  function applicationSendMessage(appid,to){
      var content = document.getElementById('applicationMessage' + appid).value;
      var msgsubject = 'Contact through job "' + '<?php echo $jobs->getJobTitle($_GET["jobid"]); ?>' + '"';
      var dataString = 'processMessage=' + 1 + '&recipient=' + to + '&msgsubject=' + msgsubject + '&body=' + content;
      $.ajax({
         type:"POST",
         url:"ajax/jobs.php",
         data: dataString,
         cache: false,
         success: function (html) {
            $('.applicationSendMessage' + appid).prepend('<div class="notification success closeable">Your message has been successfully send to the applicant.</div>');
            document.getElementById('applicationMessage' + appid).value = '';
         }
      });
      return false;
  }

  function applicationDelete(appid){
      var dataString = 'applicationDelete=' + 1 + '&appid=' + appid;
      $.ajax({
         type:"POST",
         url:"ajax/jobs.php",
         data: dataString,
         cache: false,
         success: function (html) {
            $('.application' + appid).html('<div class="notification error closeable">Application has been deleted successfully.</div>');
         }
      });
      return false;
  }

</script>
