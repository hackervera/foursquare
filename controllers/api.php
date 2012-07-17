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
		$this->load->dbforge();

		// Create Data Table
		$this->dbforge->add_key('data_id', TRUE);
		$this->dbforge->add_field(config_item('database_foursquare_data_table'));
		$this->dbforge->create_table('data');

		// Settings & Create Folders
		$settings = $this->installer->install_settings('foursquare', config_item('foursquare_settings'));

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