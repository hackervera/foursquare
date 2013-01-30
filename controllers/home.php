<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:			Social Igniter : Foursquare : Home Controller
* Author: 		firepony
* 		  		tjgillies@gmail.com
* 
* Project:		http://social-igniter.com
* 
* Description: This file is for the Foursquare Home Controller class
*/
class Home extends Dashboard_Controller
{
    function __construct()
    {
        parent::__construct();

		$this->load->config('foursquare');
		$connection = $this->social_auth->check_connection_user($this->session->userdata('user_id'), 'foursquare', 'primary');
		
		$this->load->library('foursquare_library', $connection->auth_one);

		$this->data['page_title'] = 'Foursquare';

	}
	
	function checkins()
	{
		$checkins = $this->foursquare_library->recent_checkins();

		$this->data['sub_title'] = 'Recent Checkins';
		$this->data['json_data'] = $checkins;

		$this->render();
	}
	
}