<?php defined('SYSPATH') or die('No direct access allowed.');

/*
 * Used to access google calendar api
 * 
 * 
 */
class koogle_calendar extends koogle_core {
	
	private $_calendar_uri = 'https://www.google.com/calendar/feeds';
	private $_calendar_event_feed_uri = 'https://www.google.com/calendar/feeds/default/private/full';
	private $_auth_service_name = 'c1';
	
	
}
