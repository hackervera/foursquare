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
	protected $access_token;

	function __construct($access_token=FALSE)
	{
		// Global CodeIgniter instance
		$this->ci =& get_instance();
		
		$this->api_url = 'https://api.foursquare.com/v2';
		$this->access_token = $access_token;
	}

	function recent_checkins()
	{
		$limit = 250;
		$before = '';//'&beforeTimestamp=1350164707';
		$recent_url = $this->api_url.'/users/self/checkins?oauth_token='.$this->access_token.'&v=20120717&limit='.$limit.$before;
		$checkin_data = json_decode(file_get_contents($recent_url));
		
		return $checkin_data;
	}

}