<?php defined('SYSPATH') or die('No direct access allowed.');

class koogle_httpRequest {
	
	protected $_handle;
	
	protected $_cookie;
	
	/*
	 * Http method
	 * 
	 * @var string GET/POST/PUT/DELETE
	 * 
	 */ 
	protected $_method;
	
	protected function __construct()
	{
		$this->_config = Kohana::$config->load('koogle');
		$this->_cookie = $this->_config->cookie;
		$this->_handle = curl_init();
	}
	
	/*
	 * 
	 * @param string 	url of the request
	 * @param string 	http_method in which to make the request 
	 * @param bool 		http or https
	 * 
	 *  
	 */
	public function request($uri, $method = 'GET', array $params = array(), $secure = false, array $headers = array(), $cookie = false)
	{
		$uri = str_replace('http://', '', $uri); // rip out the protocol
		$uri = str_replace('https://', '', $uri); // rip out the protocol
		$uri = preg_replace('/\?.*/', '', $uri); // rip out any get params
		$protocol = 'http://';
		if ($secure === true)
		{
			$protocol = 'https://';
		} 
		$uri =  $protocol . $uri;
		switch($method) {
			case 'GET':
				if (!empty($params))
				{
					$get_params = '?';
					foreach ($params as $key => $value)
					{
						$get_params .= $key . '=' . $value . '&';
					}	
					$uri .= $get_params;
				}
				break;
			case 'POST':
				curl_setopt($this->_handle, CURLOPT_POST, true);
				if (!empty($params))
				{
					curl_setopt($this->_handle, CURLOPT_POSTFIELDS, $params);	
				}
				break;
			case 'PUT':
				curl_setopt($this->_handle, CURLOPT_CUSTOMREQUEST, "PUT");
				if (!empty($params))
				{
					curl_setopt($this->_handle, CURLOPT_POSTFIELDS, $params);	
				}
				break;
			case 'DELETE':
				curl_setopt($this->_handle, CURLOPT_CUSTOMREQUEST, "DELETE");
				if (!empty($params))
				{
					curl_setopt($this->_handle, CURLOPT_POSTFIELDS, $params);	
				}
				break;
			case 'PATCH':
				curl_setopt($this->_handle, CURLOPT_CUSTOMREQUEST, "PATCH");
				if (!empty($params))
				{
					curl_setopt($this->_handle, CURLOPT_POSTFIELDS, $params);	
				}
				break;
			default:
				break;
		}
		if ($cookie === true)
		{
			curl_setopt($this->_handle, CURLOPT_COOKIEJAR, $this->_cookie);
			curl_setopt($this->_handle, CURLOPT_COOKIEJAR, $this->_cookie);
		}
		curl_setopt($this->_handle, CURLOPT_URL, $uri);
		curl_setopt($this->_handle, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($this->_handle, CURLOPT_HTTPHEADER, $headers);
		return curl_exec ($this->_handle);
	}

	protected function __destruct()
	{
		curl_close($this->_handle);
	}
}
