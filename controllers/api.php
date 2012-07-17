<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:			Social Igniter : Foursquare : API Controller
* Author: 		firepony
* 		  		tjgillies@gmail.com
* 
* Project:		http://social-igniter.com
* 
* Description: This file is for the Foursquare API Controller class
*/
class Api extends Oauth_Controller
{
    function __construct()
    {
        parent::__construct();
	}

    /* Install App */
	function install_get()
	{
		// Load
		$this->load->library('installer');
		$this->load->config('install');

		// Settings & Create Folders
		$settings = $this->installer->install_settings('foursquare', config_item('foursquare_settings'));

		// Site
		$site = $this->installer->install_sites(config_item('foursquare_sites'));


		if ($settings == TRUE)
		{
            $message = array('status' => 'success', 'message' => 'Yay, the Foursquare App was installed');
        }
        else
        {
            $message = array('status' => 'error', 'message' => 'Dang Foursquare App could not be installed');
        }		
		
		$this->response($message, 200);
	} 


}