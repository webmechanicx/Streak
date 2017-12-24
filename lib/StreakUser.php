<?php

namespace Streak;

/**
 * Class StreakUser
 *
 * @package Streak
 *
 * readmore: https://www.streak.com/api/#user
 */

class StreakUser
{

	/**
	 * This call will give the current user (as defined by the API Key)
	 * 
	 * @return json of the current user object
	 */
	public function getCurrentUser() 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint 	= "/v1/users/me";
		$data 		= $requestor->request($endpoint);
        return $data;
	}

	/**
	 * This call will return the details for the user specified.
	 * @param string|null $userkey
	 * 
	 * @return json user object
	 */
	public function getUser($userkey = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v1/users/'.$userKey;
		$data 		= $requestor->request($endpoint);
		
        return $data;
	}
	
}