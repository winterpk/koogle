<?php defined('SYSPATH') or die('No direct access allowed.');

/*
 * This is the core class for koogle used to access Google's many API's
 * 
 * 
 */
class koogle_core {
	
	/*
	 * Holds the an instance of the api
	 * 
	 */ 
	protected static $_api;
	
	protected function __construct()
	{
		
	}
	
	/*
	 * Parameterized instance method used to 
	 * 
	 * @param	(string) Google api name 
	 */
	public static function factory($api)
	{
		if ( ! Kohana::find_file('classes/koogle/'.$api))
			throw new Koogle_Exception('No api class found: ' . $api);
		self::$_api = new Koogle_.$api;
	}
	
	/*
	 * Check to see if the loaded api has authorization
	 * 
	 */
	public function is_auth() 
	{
		
	}
	
	
	
}
