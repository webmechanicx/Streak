<?php

namespace Streak;

/**
 * Class ApiRequestor
 *
 * @package Streak
 */
class ApiRequestor
{
    private $_apiKey;

    private $_apiBase;

    private static $_httpClient;

    public function __construct($apiKey = null, $apiBase = null)
    {
		
        $this->_apiKey = ($apiKey) ? $apiKey : Streak::$apiKey;
        $this->_apiBase = ($apiBase) ? $apiBase : Streak::$apiBase;
    }

    protected function init($url) 
	{ 
		
		$init_session = curl_init();
		curl_setopt($init_session, CURLOPT_URL, $url);
        curl_setopt($init_session, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($init_session, CURLOPT_USERPWD, $this->_apiKey);
		curl_setopt($init_session, CURLOPT_SSL_VERIFYPEER, false);
		
		return $init_session;
		
	}

    /**
     * @param string $endpoint
     * @param string $method
     * @param array|null $params
     *
     * @return array An array whose first element is an API response and second
     *    element is the API key used to make the request.
     */
	public function request($endpoint, $method='', $params='') 
	{
		$url = $this->_apiBase . $endpoint;
		
		$init_session = $this->init($url);
			
		if(strtoupper($method) == 'PUT') {
		
			curl_setopt($init_session, CURLOPT_CUSTOMREQUEST, "PUT");
			curl_setopt($init_session, CURLOPT_POSTFIELDS, http_build_query($params));
		}
		elseif(strtoupper($method) == 'POST') {
		
			curl_setopt($init_session, CURLOPT_HTTPHEADER, 
						array(
							"Authorization: Basic ".base64_encode($this->_apiKey.":"),
							"Content-Type:application/json"
							));
        	curl_setopt($init_session, CURLOPT_POST, true);
        	curl_setopt($init_session, CURLOPT_POSTFIELDS, json_encode($params));
		}
		elseif(strtoupper($method) == 'DELETE') {
		
			curl_setopt($init_session, CURLOPT_CUSTOMREQUEST, 'DELETE');
		}
		
		$response = curl_exec($init_session);
		$code = curl_getinfo($init_session, CURLINFO_HTTP_CODE);
		curl_close($init_session);

		if($code == 200)
			return $response;
		else
			return $code;
		
	}

}
