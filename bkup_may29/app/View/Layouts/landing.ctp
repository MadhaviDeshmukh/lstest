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
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
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
        <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
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
            <div class="row" style="padding: 50px 0">
                <div class="col-lg-6 banner-text">
                    <h4 class="tagline">Last Step in your job search </h4>
                    <h4 class="desh">Take back control of your job search and stay on top of every job application. </h4>
                    <p></p>
                    <!--<form>
                        <input type="email" class="version2" placeholder="Enter your email">
                        <button type="submit" class="mix-a">Sign Up!</button>
                    </form>-->
                        <?php echo $content_for_layout; ?> 
<!--<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark" data-width="250" data-height="40" data-longtitle="true"></div>
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
</script>-->
<!--<a href="#" onclick="signOut();">Sign out</a>-->
                </div>
                <div class="col-lg-6 col-sm-9 col-md-8 m-sm-auto m-md-auto">
                    <div class="row xm_top_pa">
                        <div class="col-lg-9 m-auto">
			    <div class="banner-img">
                                <figure>
                                  <div id="compare"></div>
                                </figure>
                                <input oninput="beforeAfter()" onchange="beforeAfter()" type="range" min="0" max="100" value="50" id="slider"/>
                                <!--<img src="https://i.imgur.com/HZPI9JW.png" alt="banner-img" class="img-fluid">-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER AREA END -->

    <!-- FEATURE AREA START -->
<section id="feature" style="background: #f2f2f2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center overview-heading">
                    <h3>Everything you need to track your application</h3>
                    <p>Too many job portals are built for the recruiters/company. <br>Our vision is to have a platform that is built ground up with the job seeker in mind, first and foremost!</p>
                    <h4></h4>
                </div>
            </div>
            <div class="row pa-top">
                <div class="col-lg-12">
                    <div class="col-lg-6 col-md-6 go-bottom text-center">
                        <div class="fea-item">
                            <i class="fa fa-map-o" aria-hidden="true"></i>
                            <!--<img src="https://i.imgur.com/wFME75Y.png" alt="banner-img" class="img-fluid" style="padding: 15px 0px">-->
                            <img src="/img/BoardScreenshot.png" alt="banner-img" class="img-fluid" style="padding: 15px 0px">
                            <h4 style="padding: 0px 10px">Track your applications, start to finish</h4>
                            <p style="padding: 0px 10px">Single page view of all the stages of your application. Easily move between stages.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 ml-auto text-center">
                        <div class="fea-item">
                            <i class="fa fa-folder-open-o" aria-hidden="true"></i>
                            <!--<img src="https://i.imgur.com/yrbQs7a.png" alt="feature-img" class="img-fluid" style="padding: 15px 0px">-->
                            <img src="/img/FilesScreenshot.png" alt="feature-img" class="img-fluid" style="padding: 15px 0px">
                            <h4 style="padding: 0px 10px">Keep your resume next to your job</h4>
                            <p style="padding: 0px 10px">Keep track of all the versions of your resume and cover letters per job.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 go-top text-center">
                        <div class="fea-item">
                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                            <!--<img src="https://i.imgur.com/3atBSBQ.png" alt="feature-img" class="img-fluid" style="padding: 15px 0px">-->
                            <img src="/img/TasksScreenshot.png" alt="feature-img" class="img-fluid" style="padding: 15px 0px">
                            <h4 style="padding: 0px 10px">Track tasks and add notes</h4>
                            <p style="padding: 0px 10px">Get Things Done by creating tasks and maintaining a journal for each job.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php /*
    <section id="feature" style="background: #F2F2F2">
        <div class="container">
           <!-- <div class="row">
                <div class="col-lg-12 text-center overview-heading">
                    <h3><span>Features</span></h3>
                </div>
            </div>-->
            <div class="row pt-5">
                <div class="col-lg-6 col-md-6">
                    <img src="https://i.imgur.com/wFME75Y.png" alt="banner-img" class="img-fluid">
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="f-item remove-border">
                        <span>TRACK</span>
                        <h3>Track your applications, start to finish</h3>
                        <p>Single page view of all the stages of your application. Easily move between stages.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="feature" style="background: #FFF">
        <div class="container">
            <div class="row pt-5">
                <div class="col-lg-5 col-md-6">
                    <div class="f-item sm_top_ma ">
                        <span>DOCUMENTS</span>
                        <h3>Keep your resume next to your job</h3>
                        <p>Keep track of all the versions of your resume and cover letters per job.</p>
                    </div>
                </div>
                <div class="col-lg-6 xm_dis2 col-md-6">
                    <img src="https://i.imgur.com/yrbQs7a.png" alt="feature-img" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section id="feature" style="background: #F2F2F2">
        <div class="container">
            <div class="row pt-5">
                <div class="col-lg-6 col-md-6">
                    <img src="https://i.imgur.com/3atBSBQ.png" alt="feature-img" class="img-fluid">
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="f-item fi-color remove-border">
                        <span>TASKS, NOTES</span>
                        <h3>Track tasks and add notes</h3>
                        <p>Get Things Done by creating tasks and maintaining a journal for each job.</p>
                        </a>
                    </div>
                </div>
            </div>
            <!--<div class="row pt-2">
                <div class="col-lg-5 col-md-6">
                    <div class="f-item sm_top_ma ">
                        <span>NETWORK</span>
                        <h3>Contacts list</h3>
                        <p>Maintain list of contacts relevant to each job.</p>
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
            </div>-->
        </div>
	</section>
 */ ?>
    <!-- FEATURE AREA END -->
<!--<footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-logo">
                        <a class="f-logo" href="#banner"><b>LastStep</b></a>
                        <p>Everything you need to cross the last step of your job search.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="links">
                        <h3>Menu</h3>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">overview</a></li>
                            <li><a href="#">feature</a></li>
                            <li><a href="#">Review</a></li>
                            <li><a href="#">Sign up</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="location links">
                        <h3>Location</h3>
                        <p><a href="#">San Carlos, CA, USA</a></p>
                        <h3>Email</h3>
                        <p>
                            <a href="#">founders@laststep.co</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="links pb-2 insta">
                        <h3>Gallery</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-6 col-sm-4 col-md-2 extra3">
                            <img src="images/in1.jpg" alt="instagram" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-4 col-6 col-sm-4 col-md-2 extra3">
                            <img src="images/in2.jpg" alt="instagram" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-4 col-6 col-sm-4 col-md-2 extra3">
                            <img src="images/in3.jpg" alt="instagram" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-4 col-6 col-sm-4 col-md-2">
                            <img src="images/in4.jpg" alt="instagram" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-4 col-6 col-sm-4 col-md-2">
                            <img src="images/in6.jpg" alt="instagram" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-4 col-6 col-sm-4 col-md-2">
                            <img src="images/in5.jpg" alt="instagram" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>-->

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
	<script>
	function beforeAfter() {
  document.getElementById('compare').style.width = document.getElementById('slider').value + "%";
}
</script>
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

