<?php
/**
 * View for login page.
 * 
 * @author:   AnkkSoft.com
 * @Copyright: AnkkSoft 2019
 * @Website:   https://www.ankksoft.com
 * @CodeCanyon User:  https://codecanyon.net/user/codeloop 
 */

?>
<meta name="google-signin-scope" content="profile email">
<meta name="google-signin-client_id" content="97355241918-9kh05p587go31s83hm9lmljv1fbo0ppu.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div id="login-box">
                <div id="login-box-holder">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- Logo/Title Section -->
                            <header id="login-header">
                                <div id="login-logo"><?php $this->Common->logo(h($settings['Setting']['title']), h($settings['Setting']['title_logo']), h($settings['Setting']['title_text'])); ?>
                                </div>
                            </header>
                            <!-- End Logo/Title Section -->
			    <div id="login-box-inner">                              
<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
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
</script>
<a href="#" onclick="signOut();">Sign out</a>
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>
                                <?php if ($this->session->check('Message.flash')) { ?>
                                    <!-- Alert Message -->
                                    <div role="alert" class="alert alert-info">
                                        <?php echo $this->Session->flash(); ?>
                                    </div>
                                    <!-- End Alert Message -->
                                <?php } ?>                               
                                <!-- Login Form -->
                                <?php echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login'), 'inputDefaults' => array('label' => false, 'div' => false), 'class' => 'form-horizontal login'), array('role' => 'form', 'method' => 'post')); ?>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <?php echo $this->Form->input('User.email', array('type' => 'text', 'class' => 'form-control', 'Placeholder' => 'Email Address')); ?>
                                </div>	
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <?php echo $this->Form->input('User.password', array('type' => 'password', 'class' => 'form-control', 'placeholder' => 'Password')); ?>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <button type="submit" class="btn btn-success col-xs-12">Login</button>
                                    </div>
                                </div>
                                <div class="row">  
                                    <div class="col-xs-12"><br>
                                        <?php echo $this->Html->link('Forgot password?', array('controller' => 'users', 'action' => 'forgotPassword'), array('class' => 'col-xs-12', 'id' => 'login-forget-link')); ?>
                                    </div>
                                </div>
                                <?php echo $this->Form->end(); ?>	
                                <?php echo $this->Js->writeBuffer(); ?>
                                <!-- End Login Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
