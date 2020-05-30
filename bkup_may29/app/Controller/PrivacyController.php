<?php

/**
 * Class for performing all dashboard related functions
 * 
 * @author:   AnkkSoft.com
 * @Copyright: AnkkSoft 2019
 * @Website:   https://www.ankksoft.com
 * @CodeCanyon User:  https://codecanyon.net/user/codeloop 
 */
class PrivacyController extends AppController
{

    /**
     * This controller uses following models
     *
     * @var array
     */
    public $uses = array('Pipeline', 'Stage', 'User', 'Label', 'LabelDeal', 'Deal', 'Contact', 'Task', 'UserDeal', 'ProductDeal', 'Custom', 'CustomDeal', 'AppFile', 'NoteDeal', 'Source', 'Product', 'Discussion', 'ContactDeal', 'Announcement');

    /**
     * This controller uses following helpers
     *
     * @var array
     */
    var $helpers = array('Html', 'Form', 'Common', 'Js', 'Paginator', 'Time');

    /**
     * This controller uses following components
     *
     * @var array
     */
    var $components = array('Auth', 'Cookie', 'Session', 'Paginator', 'RequestHandler');

    /**
     * Called before the controller action.  You can use this method to configure and customize components
     * or perform logic that needs to happen before each controller action.
     *
     * @return void
     */
    /*public function beforeFilter()
    {
        //parent::beforeFilter();
        //check if login
        //$this->checkLogin();
        //set layout
        //$this->layout = 'home';
        //check if admin or staff
    }*/

    /**
     *  This function is used to display deals dashboard/home page
     *
     * @return array
     */
    public function privacyPage()
    {
	$this->layout = 'landing_other';
	//return $this->render();
	$this->render('/Elements/privacy');
        //return $this->render('/Layouts/landing');
    }

}

/* End of file AdminsController.php */
/* Location: ./app/Controller/AdminsController.php */
