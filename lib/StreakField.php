<?php

namespace Streak;

/**
 * Class StreakField
 *
 * @package Streak
 *
 * readmore: https://www.streak.com/api/#field
 */

class StreakField
{

	/**
	 * Get All Fields in Pipeline
	 * @param string|null $pipelinekey
	 * 
	 * @return json
	 */
	public function getAllFields($pipelinekey = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint 	= '/v1/pipelines/'.$pipelinekey.'/fields';
		$data 		= $requestor->request($endpoint);
        return $data;
	}

	/**
	 * Get Specific Field in Pipeline
	 * @param string|null $pipelinekey
	 * @param string|null $fieldkey
	 *
	 * @return json
	 */
	public function getSingleField($pipelinekey = null, $fieldkey = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint 	= '/v1/pipelines/'.$pipelinekey.'/fields/'.$fieldkey;
		$data 		= $requestor->request($endpoint);
        return $data;
	}
	
	/**
	 * Create Field in Pipeline
	 * @param array|null $params
	 *
	 * @return json
	 */
	public function createField($pipelinekey = null, $params = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v1/pipelines/'.$pipelinekey.'/fields';
		$data 		= $requestor->request($endpoint, $method='PUT', $params);
		
        return $data;
	}
	
	/**
	 * Edit Field in Pipeline
	 * @param string|null $pipelinekey
	 * @param string|null $fieldkey
	 * @param array|null $params
	 *
	 * @return json
	 */
	public function editField($pipelinekey = null, $fieldkey = null, $params = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v1/pipelines/'.$pipelinekey.'/fields/'.$fieldkey;
		$data 		= $requestor->request($endpoint, $method='POST', $params);
		
        return $data;
	}
	
	/**
	 * Delete Field in Pipeline
	 * @param string|null $pipelinekey
	 * @param string|null $fieldkey
	 *
	 * @return json
	 */
	public function deleteField($pipelinekey = null, $fieldkey = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v1/pipelines/'.$pipelinekey.'/fields/'.$fieldkey;
		$data 		= $requestor->request($endpoint, $method='DELETE');
		
        return $data;
	}
	
	/**
	 * Get Field Values for Box
	 * @param string|null $boxkey
	 *
	 * @return json
	 */
	public function getAllFieldValue($boxkey = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v1/boxes/'.$boxkey.'/fields';
		$data 		= $requestor->request($endpoint);
		
        return $data;
	}
	
	/**
	 * Get Specific Field Value for Box
	 * @param string|null $boxkey
	 *
	 * @return json
	 */
	public function getFieldValue($boxkey = null, $fieldkey = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v1/boxes/'.$boxkey.'/fields/'.$fieldkey;
		$data 		= $requestor->request($endpoint);
		
        return $data;
	}
	
	/**
	 * Edit Field Value for Box
	 * @param string|null $boxkey
	 * @param string|null $fieldkey
	 * @param array|null $params
	 *
	 * @return json
	 */
	public function editFieldValue($boxkey = null, $fieldkey = null, $params = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v1/boxes/'.$boxkey.'/fields/'.$fieldkey;
		$data 		= $requestor->request($endpoint, $method='POST', $params);
		
        return $data;
	}
	
}