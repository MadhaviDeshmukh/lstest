<?php
/**
 * Login page layout.
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
        <title><?php echo $this->Session->read('Company.name'); ?></title>
        <!-- Favicon -->
        <link type="image/x-icon" href="<?php echo $this->webroot; ?>img/favicon.gif" rel="shortcut icon"/>
        <!-- Theme Style -->
        <style type="text/css">
        #footer1 {
        position : absolute;
        bottom : 0;
        height : 40px;
        margin-top : 40px;
        }
        </style>
        <?php
        echo $this->Html->css('bootstrap.min.css?' . rand);
        echo $this->Html->css('style.css?' . rand);
        echo $this->Html->css('application.css?' . rand);
        echo $this->Html->css('font-awesome.css?' . rand);
        echo $this->Html->css('md.css?' . rand);
        echo $this->fetch('meta');
        echo $this->fetch('css');
        ?>
        <div id = "footer-md">
        Yoooooou've spent months searching for jobs and preparing for interviews. We help you with the <i> last step, </i> starting with a useful tool to track your applications.
        </div>
        </body>
        </head>
    <body class="theme-whbl" id="login-page-full">
        <!-- Main Content -->
        <div id="login-full-wrapper">        
                     <?php echo $content_for_layout; ?>        
        </div>	
        <!--End Main Content -->
        <!-- Theme JQuery -->
             <?php echo $this->Html->script('jquery.min.js?' . rand); ?>
             <?php echo $this->Html->script('jquery.validate.min.js?' . rand); ?>
        <!--Jquery Validation-->
        <!--<script>
            $('.login').validate({
                errorClass: 'validation-error',
                rules: {
                    "data[User][email]": {required: true, email: true},
                    "data[User][password]": {required: true, minlength: 5}
                },
                messages: {
                    "data[User][email]": {required: "Please provide a  Email Address."},
                    "data[User][password]": {required: "Please specify a password."}
                },
                errorPlacement: function (error, element) {
                    error.insertAfter(element.parent());
                }

            });
        </script>-->
        <!--End Jquery Validation-->
        <!-- End Theme JQuery -->
</html>
