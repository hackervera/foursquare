<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:			Social Igniter : Foursquare : Install
* Author: 		firepony
* 		  		tjgillies@gmail.com
*          
* Project:		http://social-igniter.com/
*
* Description: 	Installer values for Foursquare for Social Igniter 
*/

/* Settings */
$config['foursquare_settings']['widgets']				= 'TRUE';
$config['foursquare_settings']['enabled']				= 'TRUE';
$config['foursquare_settings']['client_id']	 			= '';
$config['foursquare_settings']['client_secret'] 		= '';
$config['foursquare_settings']['social_connection'] 	= 'TRUE';
$config['foursquare_settings']['social_login'] 			= 'TRUE';
$config['foursquare_settings']['login_redirect']		= 'home/';
$config['foursquare_settings']['connections_redirect']	= 'settings/connections/';

/* Sites */
$config['foursquare_sites'][] = array(
	'url'		=> 'http://foursquare.com/', 
	'module'	=> 'foursquare',
	'type' 		=> 'remote', 
	'title'		=> 'Foursquare', 
	'favicon'	=> 'http://foursquare.com/favicon.ico'
);