<?php

namespace Streak;

/**
 * Class StreakContact
 *
 * @package Streak
 *
 * readmore: https://streak.readme.io/reference/read-a-contact-1
 */

class StreakContact
{

	/**
	 * Get a contact
	 * @param string|null $contactkey
	 * 
	 * @return json object
	 */
	public function getContact($contactkey) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint 	= '/v2/contacts/'.$contactkey;
		$data 		= $requestor->request($endpoint);
        return $data;
	}

	/**
	 * Check for existing contacts
	 * @param string|null $teamkey
	 * @param array|null $params
	 * 
	 * @return json object
	 */
	public function contactExist($teamkey, $params, $getIfExisting = true) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint 	= '/v2/teams/'.$teamkey.'/contacts/?getIfExisting='.$getIfExisting;
		$data 		= $requestor->request($endpoint, $method='POST', $params);
        return $data;
	}

	/**
	 * Create a contact
	 * @param string|null $teamkey
	 * @param array|null $params
	 * 
	 * @return json object
	 */
	public function createContact($teamkey = null, $params = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v2/teams/'.$teamkey.'/contacts/';
		$data 		= $requestor->request($endpoint, $method='POST', $params);
		
        return $data;
	}
	
	/**
	 * Update a contact
	 * @param string|null $contactkey
	 * @param array|null $params
	 * 
	 * @return json object
	 */
	public function editContact($contactkey = null, $params = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v2/contacts/'.$contactkey;
		$data 		= $requestor->request($endpoint, $method='POST', $params);
		
        return $data;
	}
	
	/**
	 * Delete a contact by providing the contact key
	 * @param string|null $contactkey
	 * 
	 * @return json object
	 */
	public function deleteContact($contactkey) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint 	= "/v2/contacts/".$contactkey;
		$data 		= $requestor->request($endpoint, $method='DELETE');
        return $data;
	}
	
	/**
	 * Add contact(s) to a box
	 * @param string|null $boxkey
	 * @param array|null $params
	 * 
	 * @return json object
	 */
	public function addContactToBox($boxkey = null, $params = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v1/boxes/'.$boxkey;
		$data 		= $requestor->request($endpoint, $method='POST', $params);
		
        return $data;
	}
	
}