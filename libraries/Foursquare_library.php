<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Foursquare Library
*
* @package		Social Igniter
* @subpackage	Foursquare Library
* @author		{SITE_NAME}
*
* Contains methods for Foursquare App
*/

class Foursquare_library
{
	protected $api_url;

	function __construct()
	{
		// Global CodeIgniter instance
		$this->ci =& get_instance();
		
		$this->api_url = 'https://api.CHANGE THIS VALUE.com';
	}
	
	/* Interact with Data_Model */
	function my_custom_method($foursquare_user_id)
	{
		$request = $this->api_url.'add/more/url_stuffs/get_checkins?'.$foursquare_user_id;
	
		return $request;
	}

}