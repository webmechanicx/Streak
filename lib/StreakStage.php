<?php

namespace Streak;

/**
 * Class StreakStage
 *
 * @package Streak
 *
 * readmore: https://www.streak.com/api/#stage
 */

class StreakStage
{

	/**
	 * This call lists the stages defined in a pipeline.
	 * @param string|null $pipelinekey
	 * 
	 * @return json
	 */
	public function getAllStages($pipelinekey = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint 	= '/v1/pipelines/'.$pipelinekey.'/stages';
		$data 		= $requestor->request($endpoint);
        return $data;
	}

	/**
	 * Get a Specific Stage in Pipeline
	 * @param string|null $pipelinekey
	 * @param string|null $stagekey
	 *
	 * @return json
	 */
	public function getSingleStage($pipelinekey = null, $stagekey = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint 	= '/v1/pipelines/'.$pipelinekey.'/stages/'.$stagekey;
		$data 		= $requestor->request($endpoint);
        return $data;
	}
	
	/**
	 * Create a Stage in Pipeline
	 * @param array|null $params
	 *
	 * @return json
	 */
	public function createStage($pipelinekey = null, $params = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v1/pipelines/'.$pipelinekey.'/stages';
		$data 		= $requestor->request($endpoint, $method='PUT', $params);
		
        return $data;
	}
	
	/**
	 * Edit a Specific Stage in Pipeline
	 * @param string|null $pipelinekey
	 * @param string|null $stagekey
	 * @param array|null $params
	 *
	 * @return json
	 */
	public function editStage($pipelinekey = null, $stagekey = null, $params = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v1/pipelines/'.$pipelinekey.'/stages/'.$stagekey;
		$data 		= $requestor->request($endpoint, $method='POST', $params);
		
        return $data;
	}
	
	/**
	 * Delete a Specific Stage in Pipeline
	 * @param string|null $pipelinekey
	 * @param string|null $stagekey
	 *
	 * @return json
	 */
	public function deleteStage($pipelinekey = null, $stagekey = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v1/pipelines/'.$pipelinekey.'/stages/'.$stagekey;
		$data 		= $requestor->request($endpoint, $method='DELETE');
		
        return $data;
	}
	
}