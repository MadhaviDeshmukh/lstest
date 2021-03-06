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
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="/img/LastStepLogo.png"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>

         <!-- <div class="collapse navbar-collapse menu-main" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu-item">
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Sign up</a>
                    </li>
                </ul>
            </div> -->
        </div>
    </nav>
    <!-- HEADER AREA END -->

    <!-- BANNER AREA START -->
    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 banner-text">
                    <h4 class="desh">You've spent months searching for jobs and preparing for interviews. We help you with the last step, the application and tracking of your interviews. </h4>
                    <p></p>
                    <!--<form>
                        <input type="email" class="version2" placeholder="Enter your email">
                        <button type="submit" class="mix-a">Sign Up!</button>
                    </form>-->
<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark" data-width="250" data-height="40" data-longtitle="true"></div>
    <script>
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
	xhr.open('POST', 'http://laststep.co/logingoogle');
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
<!--<a href="#" onclick="signOut();">Sign out</a>-->
                </div>
                <div class="col-lg-6 col-sm-9 col-md-8 m-sm-auto m-md-auto">
                    <div class="row xm_top_pa">
                        <div class="col-lg-9 m-auto">
                            <div class="banner-img">
                                <img src="https://www.sakibul.com/demos/html/brandify/demo/images/banner1.jpg" alt="banner-img" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER AREA END -->

    <!-- FEATURE AREA START -->
    <section id="feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center overview-heading">
                    <h3><span>Features</span></h3>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-6 col-md-6">
                    <img src="https://www.sakibul.com/demos/html/brandify/demo/images/f1.jpg" alt="feature-img" class="img-fluid">
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="f-item remove-border">
                        <span>01.</span>
                        <h3>Track your applications, start to finish</h3>
                        <p>Single page view of all the stages of your application. Easily move between stages.</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-lg-6 xm_dis col-md-6">
                    <img src="https://www.sakibul.com/demos/html/brandify/demo/images/f2.jpg" alt="feature-img" class="img-fluid">
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="f-item sm_top_ma ">
                        <span>02.</span>
                        <h3>Keep your documents in one place</h3>
                        <p>Keep track of all the versions of your resume and cover letters.</p>
                    </div>
                </div>
                <div class="col-lg-6 xm_dis2 col-md-6">
                    <img src="https://www.sakibul.com/demos/html/brandify/demo/images/f2.jpg" alt="feature-img" class="img-fluid">
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-lg-6 col-md-6">
                    <img src="https://www.sakibul.com/demos/html/brandify/demo/images/f3.jpg" alt="feature-img" class="img-fluid">
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="f-item fi-color remove-border">
                        <span>03.</span>
                        <h3>Contacts list</h3>
                        <p>Maintain list of contacts relevant to each job.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FEATURE AREA END -->

    <!-- COPY_RIGHT AREA START -->
    <section id="footer-btm">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 moja-loss">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="fop-btm">
                                <h2>Copyright &copy; 2019. All rights reserved by <a href="#">Last Step</a></h2>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center">
                            <div class="footer-social newfs">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
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

