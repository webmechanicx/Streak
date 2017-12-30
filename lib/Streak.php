<?php
/**
* Streak Unofficial PHP SDK
*
* @author  Farhadur Rahim <webmechanicx@gmail.com>
* @version 1.0
* @link http://www. Author Homepage
* @license LICENSE The MIT License
*/

namespace Streak;

class Streak
{

    public static $apiKey;
    public static $apiBase = 'https://www.streak.com/api';

	
    /**
     * @return string The API key used for requests.
     */
    public static function getApiKey()
    {
        return self::$apiKey;
    }
	
    /**
	 * @param string $api The API key used for requests
     * @return string The API key used for requests.
     */
	public static function setApiKey($apiKey) 
	{
	 	self::$apiKey = $apiKey;
	}

}