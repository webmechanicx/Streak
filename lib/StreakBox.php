<?php

namespace Streak;

/**
 * Class StreakBox
 *
 * @package Streak
 *
 * readmore: https://www.streak.com/api/#box
 */

class StreakBox
{

	/**
	 * List All Boxes a user has access to
	 * This is a fairly expensive call so there is a lower API quota limit.
	 *
	 * @return json
	 */
	public function getAllBoxes() 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v1/boxes';
		$data 		= $requestor->request($endpoint);
		
        return $data;
	}
	
	/**
	 * This call lets you get all boxes contained in the specified pipeline.
	 * @param string|null $pipelinekey
	 *
	 * @return json
	 */
	public function getPipelineBoxes($pipelinekey = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v1/pipelines/'.$pipelinekey.'/boxes';
		$data 		= $requestor->request($endpoint);
		
        return $data;
	}
	
	/**
	 * This call gives you a specific box based on the key you provide.
	 * @param string|null $boxkey
	 *
	 * @return json
	 */
	public function getSingleBox($boxkey = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v1/boxes/'.$boxkey;
		$data 		= $requestor->request($endpoint);
		
        return $data;
	}
	
	/**
	 * Create a Box
	 * @param string|null $pipelinekey
	 * @param array|null $params
	 *
	 * @return json
	 */
	public function createBox($pipelinekey = null, $params = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v1/pipelines/'.$pipelinekey.'/boxes';
		$data 		= $requestor->request($endpoint, $method='PUT', $params);
		
        return $data;
	}
	
	/**
	 * Edit a Box
	 * @param string|null $boxkey
	 * @param array|null $params
	 *
	 * @return json
	 */
	public function editBox($boxkey = null, $params = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v1/boxes/'.$boxkey;
		$data 		= $requestor->request($endpoint, $method='POST', $params);
		
        return $data;
	}
	
	/**
	 * Delete a Box. This call lets you delete a particular box.
	 * @param string|null $boxkey
	 *
	 * @return json
	 */
	public function deleteBox($boxkey = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v1/boxes/'.$boxkey;
		$data 		= $requestor->request($endpoint, $method='DELETE');
		
        return $data;
	}
	
}