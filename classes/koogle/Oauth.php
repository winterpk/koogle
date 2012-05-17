<?php defined('SYSPATH') or die('No direct access allowed.');

class Koogle_Oauth {
	
	protected static $_instance;
	
	protected $_session;
	
	protected $_httpRequest;
	
	protected function __construct()
	{
		
		//$this->_session = 	
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
