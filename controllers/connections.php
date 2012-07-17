<?php
class Connections extends MY_Controller
{
	protected $consumer;
	protected $foursquare;
	protected $module_site;

    function __construct()
    {
        parent::__construct();
		   
		if (config_item('foursquare_enabled') != 'TRUE') redirect(base_url());
	
		// Load Library
        $this->load->library('oauth2');
		
		// Get Site
		$this->module_site = $this->social_igniter->get_site_view_row('module', 'foursquare');	
	}

	function index()
	{
		redirect(base_url());
	}

    // For OAuth2
    function add()
    {
        $provider = $this->oauth2->provider('foursquare', array(
            'id' 	 => config_item('foursquare_client_id'),
            'secret' => config_item('foursquare_client_secret'),
            'scope'	 => ''
        ));

        if (!isset($_GET['code']))
        {
            // By sending no options it'll come back here
            $provider->authorize();
        }
        else
        {
            // Howzit?
            try
            {                        
                //$token = $provider->access($_GET['code']);
 
		 		$url = 'https://foursquare.com/oauth2/access_token?'.http_build_query(array(
					'client_id'			=> config_item('foursquare_client_id'),
					'client_secret'		=> config_item('foursquare_client_secret'),
					'grant_type'		=> 'authorization_code',
					'redirect_url'		=> base_url().'connections/foursquare/add',
					'code' 				=> $_GET['code']
				));
		
				$token = json_decode(file_get_contents($url)); 
                
                //$user	= $provider->get_user_info($token);

                // Here you should use this information to A) look for a user B) help a new user sign up with existing data.
                // If you store it all in a cookie and redirect to a registration page this is crazy-simple.
                echo "<pre>Tokens: ";
                print_r($token).PHP_EOL.PHP_EOL;

                //print_r($user);
            }

            catch (OAuth2_Exception $e)
            {
                show_error('That didnt work: '.$e);
            }
        }
    }
    
} 