<?php
/**
 * Dashboard home layout.
 * 
 * @author:   AnkkSoft.com
 * @Copyright: AnkkSoft 2019
 * @Website:   https://www.ankksoft.com
 * @CodeCanyon User:  https://codecanyon.net/user/codeloop 
 */

?>
<!DOCTYPE html>
<html lang="en">
    <head>       
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title><?php echo $this->Session->read('Company.name'); ?></title>
        <!-- Favicon -->
	<link type="image/x-icon" href="<?php echo $this->webroot; ?>img/favicon.gif" rel="shortcut icon"/>
	<link href="https://cdn.quilljs.com/1.2.6/quill.snow.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <!-- Theme Style -->
        <?php
        echo $this->Html->css('bootstrap.min.css?' . rand);
        echo $this->Html->css('font-awesome.css?' . rand);
        echo $this->Html->css('style.css?' . rand);
        echo $this->Html->css('application.css?' . rand);
        echo $this->Html->css('select2.min.css?' . rand);
        echo $this->Html->css('jquery-ui.css?' . rand);
        echo $this->Html->css('bootstrap-timepicker.css?' . rand);
        echo $this->Html->css('dropzone.css?' . rand);
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
	<script src="https://cdn.quilljs.com/1.2.6/quill.min.js"></script>
<script src="https://cdn.tiny.cloud/1/slg9qs17bieyvau682j3x693tq9eevvjzd4a2bkom6l7g6nn/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<meta name="google-signin-scope" content="profile email">
<meta name="google-signin-client_id" content="97355241918-9kh05p587go31s83hm9lmljv1fbo0ppu.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js?onload=onGAPILoad" async defer></script>
<script>
    function onGAPILoad() {
      gapi.load('auth2', function() {
        gapi.auth2.init();
      });
    }
</script>
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
        //echo $this->Html->script('dropzone.js?' . rand);
        echo $this->Html->script('bootstrap-timepicker.min.js?' . rand);
        echo $this->Html->script('jquery.nestable.js?' . rand);
        echo $this->Html->script('jquery-ui.js?' . rand);
        echo $this->Html->script('bootstrap-tagsinput.js?' . rand);
        echo $this->Html->script('application-home.js?q=123456');

        ?>
        <!-- End Theme JQuery -->
    </body>
</html>
