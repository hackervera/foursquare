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
$config['foursquare_settings']['enabled']			= 'TRUE';
$config['foursquare_settings']['create_permission'] 	= '3';
$config['foursquare_settings']['publish_permission']	= '2';
$config['foursquare_settings']['manage_permission']	= '2';


/* CUSTOM DATA */
/* FOR CONNECTIONS */
$config['foursquare_settings']['consumer_key']	 	= '';
$config['foursquare_settings']['consumer_secret'] 	= '';
$config['foursquare_settings']['social_connection'] 	= 'TRUE';
$config['foursquare_settings']['connections_redirect']= 'settings/connections/';

/* Sites */
$config['foursquare_sites'][] = array(
	'url'		=> 'http://foursquare.com/', 
	'module'	=> 'foursquare',
	'type' 		=> 'remote', 
	'title'		=> 'Foursquare', 
	'favicon'	=> 'http://foursquare.com/favicon.ico'
);

/* Data Table */
$config['database_foursquare_data_table'] = array(
'data_id' => array(
	'type' 					=> 'INT',
	'constraint' 			=> 11,
	'unsigned' 				=> TRUE,
	'auto_increment'		=> TRUE
),
'user_id' => array(
	'type' 					=> 'INT',
	'constraint' 			=> '11',
	'null'					=> TRUE
),
'text' => array(
	'type'					=> 'TEXT',
	'null'					=> TRUE
),
'created_at' => array(
	'type'					=> 'DATETIME',
	'default'				=> '9999-12-31 00:00:00'
),
'updated_at' => array(
	'type'					=> 'DATETIME',
	'default'				=> '9999-12-31 00:00:00'
));