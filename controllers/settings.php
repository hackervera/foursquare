<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:			Social Igniter : Foursquare : Settings Controller
* Author: 		firepony
* 		  		tjgillies@gmail.com
* 
* Project:		http://social-igniter.com
* 
* Description: This file is for the Foursquare Settings Controller class
*/
class Settings extends Dashboard_Controller 
{
    function __construct() 
    {
        parent::__construct();

		if ($this->data['logged_user_level_id'] > 1) redirect('home');	
        
        $this->load->config('foursquare');
        
		$this->data['page_title']	= 'Settings';
    }
 
 	function index()
	{
		if (config_item('foursquare_enabled') == '') 
		{
			$this->session->set_flashdata('message', 'Oops, the Foursquare is not installed');
			redirect('settings/apps');
		}
			
		$this->data['sub_title']    = 'Foursquare';
		$this->data['shared_ajax'] .= $this->load->view(config_item('dashboard_theme').'/partials/settings_modules_ajax.php', $this->data, true);		
		$this->render('dashboard_wide');
	}
	
	function widgets()
	{
		$this->data['sub_title'] = 'Widgets';		
		$this->render('dashboard_wide');
	}		

}