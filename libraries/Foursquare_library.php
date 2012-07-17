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

	function __construct($access_token=FALSE)
	{
		// Global CodeIgniter instance
		$this->ci =& get_instance();
		
		$this->api_url = 'https://api.CHANGE THIS VALUE.com';
		$this->access_token = $access_token;
	}
	
	/* Interact with Data_Model */
	function my_custom_method($foursquare_user_id)
	{
		$request = $this->api_url.'add/more/url_stuffs/get_checkins?'.$foursquare_user_id;
	
		return $request;
	}
	
	function recent_checkins(){

	  $access_token = $this->access_token;
	  //$limit = $_GET["limit"];
	  //$limit = $limit || 2;
	  $limit = 2;
	  $recent_url = "https://api.foursquare.com/v2/checkins/recent?oauth_token=$access_token&v=20120717&limit=2";
	  //error_log($recent_url);
	  $checkin_data = json_decode(file_get_contents($recent_url));
	  //error_log(json_encode($checkin_data));
	  $last_checkin = $checkin_data->response->recent;
	  return $checkin_data;
	}

}