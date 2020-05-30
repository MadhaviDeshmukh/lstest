<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * @author:   AnkkSoft.com
 * @Copyright: AnkkSoft 2019
 * @Website:   https://www.ankksoft.com
 * @CodeCanyon User:  https://codecanyon.net/user/codeloop
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Admins',
 * to use (in this case, /app/View/Admins/index.ctp)...
 */
Router::connect('/', array('controller' => 'landing', 'action' => 'landingPage'));
Router::connect('/about', array('controller' => 'about', 'action' => 'aboutPage'));
Router::connect('/terms', array('controller' => 'terms', 'action' => 'termsPage'));
Router::connect('/privacy', array('controller' => 'privacy', 'action' => 'privacyPage'));
Router::connect('/cookies', array('controller' => 'cookies', 'action' => 'cookiesPage'));
Router::connect('/contactus', array('controller' => 'contactus', 'action' => 'contactusPage'));
Router::connect('/admin', array('controller' => 'admins', 'action' => 'index'));
//Router::connect('/', array('controller' => 'admins', 'action' => 'index'));
Router::connect('/login', array('controller' => 'users', 'action' => 'login'));
Router::connect('/logingoogle', array('controller' => 'users', 'action' => 'logingoogle'));
Router::connect('/forgot_password', array('controller' => 'users', 'action' => 'forgotPassword'));
Router::connect('/profile', array('controller' => 'users', 'action' => 'profile'));
Router::connect('/activity', array('controller' => 'timelines', 'action' => 'index'));
Router::connect('/roles', array('controller' => 'users', 'action' => 'role'));
Router::connect('/staff', array('controller' => 'users', 'action' => 'staff'));
Router::connect('/clients', array('controller' => 'users', 'action' => 'client'));

/**
 * Load all plugin routes.
 * how to customize the loading of plugin routes.
 */
CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
require CAKE . 'Config' . DS . 'routes.php';