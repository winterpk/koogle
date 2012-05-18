<?php defined('SYSPATH') or die('No direct access allowed.');

/*
 * Used to access google calendar api
 * 
 * 
 */
class koogle_calendar extends koogle_core {
	
	
	private $_oauth; 
	
	/*
	 * 
	 * 
	 */
	private $_calendar_event_feed_uri = 'https://www.google.com/calendar/feeds/default/private/full';
	
	/*
	 * 
	 * 
	 */
	private $_calendar_uri = 'https://www.google.com/calendar/feeds';
	
	
	private $_auth_service_name = 'c1';
	
	public function __construct()
	{
		
		// load up an Oauth class
		$this->_oauth = Koogle_Oauth::instance();
	}
	
	public function get_calendar_event_feed($location = null)
	{
		
	}
	
	public function get_calendar_event_entry($location = null)
	{
		
	}
	
	public function get_calendar_list_feed()
	{
		
	}
	
	public function get_calendar_list_entry()
	{
		
	}
	
	public function insertEvent()
	{
		
	}
	
}
