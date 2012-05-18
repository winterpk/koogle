<?php defined('SYSPATH') or die('No direct access allowed.');

/*
 * Google authentication class uses Oauth 2.0
 * 
 */
class Koogle_Oauth {
	
	protected $_httpRequest;
	
	protected static $_instance;
	
	protected $_session;
	
	protected $_httpRequest;
	
	protected function __construct()
	{
		
	}
	
	public function get_login_uri()
	{
		
	}
	
	public function so()
	{
		
	}
	
	public static function instance()
	{
		if ( ! isset(self::$_instance))
		{
			Koogle_Oauth::$_instance = new Koogle_Oauth;
		}
		return Koogle_Oauth::$_instance;
	}

	
	
}
