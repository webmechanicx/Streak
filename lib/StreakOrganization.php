<?php

namespace Streak;

/**
 * Class StreakOrganization
 *
 * @package Streak
 *
 * readmore: https://streak.readme.io/reference#get-an-organization
 */

class StreakOrganization
{

	/**
	 * Get a Organization
	 * @param string|null $orgkey
	 * 
	 * @return json object
	 */
	public function getOrganization($orgkey) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint 	= '/v2/organizations/'.$orgkey;
		$data 		= $requestor->request($endpoint);
        return $data;
	}

	/**
	 * Check for existing Organizations with a matching domain 
	 * if it exists, otherwise it will create the organization
	 * @param string|null $teamkey
	 * @param boolean $getIfExisting
	 * @param array|null $params
	 * 
	 * @return json object
	 */
	public function organizationExist($teamkey, $params, $getIfExisting = true) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint 	= '/v2/teams/'.$teamkey.'/organizations/?getIfExisting='.$getIfExisting;
		$data 		= $requestor->request($endpoint, $method='POST', $params);
        return $data;
	}

	/**
	 * Create an Organization
	 * @param string|null $teamkey
	 * @param array|null $params
	 * 
	 * @return json object
	 */
	public function createOrganization($teamkey = null, $params = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v2/teams/'.$teamkey.'/organizations';
		$data 		= $requestor->request($endpoint, $method='POST', $params);
		
        return $data;
	}
	
	/**
	 * Update an Organization
	 * @param string|null $orgkey
	 * @param array|null $params
	 * 
	 * @return json object
	 */
	public function editOrganization($orgkey = null, $params = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v2/organizations/'.$orgkey;
		$data 		= $requestor->request($endpoint, $method='POST', $params);
		
        return $data;
	}
	
	/**
	 * Delete an Organization by providing the organization key
	 * @param string|null $orgkey
	 * 
	 * @return json object
	 */
	public function deleteOrganization($orgkey) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint 	= "/v2/organizations/".$orgkey;
		$data 		= $requestor->request($endpoint, $method='DELETE');
        return $data;
	}
	
	/**
	 * Add Organization(s) to a box
	 * @param string|null $boxkey
	 * @param array|null $params
	 * 
	 * @return json object
	 */
	public function addOrganizationToBox($boxkey = null, $params = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v1/boxes/'.$boxkey;
		$data 		= $requestor->request($endpoint, $method='POST', $params);
		
        return $data;
	}
	
}