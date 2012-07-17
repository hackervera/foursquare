<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:			Social Igniter : Foursquare : Widgets
* Author: 		firepony
* 		  		tjgillies@gmail.com
*          
* Project:		http://social-igniter.com/
*
* Description: 	Installer values for Foursquare for Social Igniter 
*/

$config['foursquare_widgets'][] = array(
	'regions'	=> array('sidebar','content'),
	'widget'	=> array(
		'module'	=> 'foursquare',
		'name'		=> 'Recent Data',
		'method'	=> 'run',
		'path'		=> 'widgets_recent_data',
		'multiple'	=> 'FALSE',
		'order'		=> '1',
		'title'		=> 'Recent Data',
		'content'	=> ''
	)
);