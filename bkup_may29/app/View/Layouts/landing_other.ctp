<?php
/**
 * Dashboard home layout.
 * 
 */

?>


<!DOCTYPE html>
<html lang="zxx">

<head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-160268560-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-160268560-1');
        </script>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <title><?php echo $this->Session->read('Company.name'); ?></title>
        <!-- Favicon -->
        <link type="image/x-icon" href="<?php echo $this->webroot; ?>img/favicon.gif" rel="shortcut icon"/>
        <!-- Theme Style -->
        <?php
        echo $this->Html->css('landing/css/font-awesome.min.css?' . rand);
        echo $this->Html->css('landing/css/bootstrap.min.css?' . rand);
        //echo $this->Html->css('bootstrap.min.css?' . rand);
        //echo $this->Html->css('style.css?' . rand);
        //echo $this->Html->css('application.css?' . rand);
        //echo $this->Html->css('select2.min.css?' . rand);
        //echo $this->Html->css('jquery-ui.css?' . rand);
        //echo $this->Html->css('bootstrap-timepicker.css?' . rand);
        echo $this->Html->css('landing/css/slick.css?' . rand);
        echo $this->Html->css('landing/css/venobox.css?' . rand);
        echo $this->Html->css('landing/css/style.css?' . rand);
        echo $this->Html->css('landing/css/responsive.css?' . rand);
        ?>
        <!-- Theme JQuery -->
        <?php
        echo $this->Html->script('jquery.min.js?' . rand);
        echo $this->Html->script('bootstrap.min.js?' . rand);
        echo $this->Html->script('scripts.js?' . rand);
        echo $this->Html->script('jquery.nanoscroller.min.js?' . rand);
        echo $this->Html->script('jquery.toaster.js?' . rand);
        echo $this->Html->script('jquery.nestable.js?' . rand);
        echo $this->Html->script('jquery.slimscroll.min.js?' . rand);
        echo $this->Html->script('select2.full.min.js?' . rand);
        echo $this->Html->script('bootstrap-timepicker.min.js?' . rand);
        echo $this->Html->script('jquery-ui.js?' . rand);
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');

        ?>       
        <meta name="google-signin-scope" content="profile email">
        <meta name="google-signin-client_id" content="97355241918-9kh05p587go31s83hm9lmljv1fbo0ppu.apps.googleusercontent.com">
        <script src="https://apis.google.com/js/platform.js" async defer></script>
    </head>
</head>



<body id="index1">
    <!-- Preloader Part Start
    <div class="preload-main">
        <div class='preloader'>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div> -->
    <!-- Preloader Part End -->

    <!-- HEADER AREA START -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" style="background: #F2F2F2!important">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="/img/LastStepLogoOrig.png"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>

            <div class="collapse navbar-collapse menu-main" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu-item">
                    <li class="nav-item">
<?php if ($this->Session->read('Auth.User')){ ?>
<a class="btn btn-primary" href="/admin"><i class="fa fa-list"></i>  View your Job board </a>
<!--<a href="#" onclick="signOut();">Sign out</a>-->
<?php } else { ?>
<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark" data-width="250" data-height="40" data-longtitle="true"></div>
<?php } ?>

<script>
   function onLoad() {
      gapi.load('auth2', function() {
        gapi.auth2.init();
      });
    }
function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
	console.log("ID Token: " + id_token);

	var xhr = new XMLHttpRequest();
	xhr.open('POST', 'https://laststep.co/logingoogle');
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xhr.onload = function() {
		var returnedData = JSON.parse(xhr.responseText);
		console.log(returnedData);
		if(returnedData['redirect']) {
			console.log('will redirect to : ' + returnedData['redirect']);
			window.location.href = returnedData['redirect'];
		}
	};
	xhr.send('idtoken=' + id_token + '&email='+profile.getEmail() + '&first=' + profile.getGivenName() + '&last=' + profile.getFamilyName());
      }
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="#contact">Sign up</a>
                    </li>-->
                </ul>
            </div> 
        </div>
    </nav>
    <!-- HEADER AREA END -->

    <!-- BANNER AREA START -->
    <section id="banner">
        <div class="container">
	    <div class="row">


<?php echo $content_for_layout; ?>

            </div>
        </div>
    </section>
    <!-- BANNER AREA END -->

    <!-- COPY_RIGHT AREA START -->
    <section id="footer-btm" style="background: #343533">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 moja-loss">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="fop-btm">
                                <h2>Copyright &copy; 2020. All rights reserved by <a href="#">Last Step</a></h2>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center">
                            <div class="footer-social newfs">
                                <a href="/about">About</a>
                                <a href="/terms">Terms and Conditions</a>
                                <a href="/privacy">Privacy Policy</a>
                                <a href="/cookies">Cookie Policy</a>
                                <a href="/contactus">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Optional JavaScript -->
	<?php
        echo $this->Html->script('jquery.validate.min.js?' . rand);
        echo $this->Html->script('bootstrap3-typeahead.js?' . rand);
	echo $this->Html->script('application-home.js?q=123456');
        echo $this->Html->script('landing/js/slick.min.js?' . rand);
        echo $this->Html->script('landing/js/venobox.min.js?' . rand);
        echo $this->Html->script('landing/js/custom.js?' . rand);
	?>
</body>

</html>



<?php /*

<!DOCTYPE html>
<html lang="en">
    <head>       
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title><?php echo $this->Session->read('Company.name'); ?></title>
        <!-- Favicon -->
        <link type="image/x-icon" href="<?php echo $this->webroot; ?>img/favicon.gif" rel="shortcut icon"/>
        <!-- Theme Style -->
        <?php
        echo $this->Html->css('bootstrap.min.css?' . rand);
        echo $this->Html->css('font-awesome.css?' . rand);
        echo $this->Html->css('style.css?' . rand);
        echo $this->Html->css('application.css?' . rand);
        echo $this->Html->css('select2.min.css?' . rand);
        echo $this->Html->css('jquery-ui.css?' . rand);
        echo $this->Html->css('bootstrap-timepicker.css?' . rand);
        echo $this->Html->css('landing/css/slick.css?' . rand);
        ?>
        <!-- Theme JQuery -->
        <?php
        echo $this->Html->script('jquery.min.js?' . rand);
        echo $this->Html->script('bootstrap.min.js?' . rand);
        echo $this->Html->script('scripts.js?' . rand);
        echo $this->Html->script('jquery.nanoscroller.min.js?' . rand);
        echo $this->Html->script('jquery.toaster.js?' . rand);
        echo $this->Html->script('jquery.nestable.js?' . rand);
        echo $this->Html->script('jquery.slimscroll.min.js?' . rand);
        echo $this->Html->script('select2.full.min.js?' . rand);
        echo $this->Html->script('bootstrap-timepicker.min.js?' . rand);
        echo $this->Html->script('jquery-ui.js?' . rand);
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');

        ?>       
    </head>
    <body class="theme-whbl  pace-done fixed-header">
        <div id="theme-wrapper">
            <!-- Header Section-->
            <?php echo $this->element('header'); ?>
            <!-- End Header Section-->
            <div class="container  nav-small" id="page-wrapper">
                <div class="row">
                    <!-- Sidebar Section-->
                    <?php echo $this->element('sidebar'); ?>
                    <!-- End Sidebar Section-->
                    <!-- Main Content -->
                    <div id="content-wrapper" class="manager-home">
                        <div class="loader"></div>
                        <!-- Alert Message-->
                        <?php
                        echo $this->Session->flash('fail');
                        echo $this->Session->flash('success');
                        ?> 
                        <!-- End Alert Message-->
                        <?php echo $this->Form->input('base_url', array('type' => 'hidden', 'value' => $this->webroot)); ?>
                        <?php echo $content_for_layout; ?> 
                        <!-- Footer Section -->
                        <footer class="row" id="footer-bar" >                          
			    <p class="col-xs-12" id="footer-copyright">
                            </p>
                        </footer>
                        <!-- End Footer Section -->
                    </div>
                    <!-- End Main Content -->
                </div>
            </div>
        </div>	
        <!-- Theme JQuery -->
        <?php
        echo $this->Html->script('jquery.validate.min.js?' . rand);
        echo $this->Html->script('bootstrap3-typeahead.js?' . rand);
        echo $this->Html->script('application-home.js?q=123456');

        ?>
        <!-- End Theme JQuery -->
    </body>
    </html>

 */ ?>

