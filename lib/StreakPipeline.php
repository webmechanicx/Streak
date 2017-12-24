<?php

namespace Streak;

/**
 * Class StreakPipeline
 *
 * @package Streak
 *
 * readmore: https://www.streak.com/api/#pipeline
 */

class StreakPipeline
{

	/**
	 * This call will give you access to all pipelines the user of this API key has access to.
	 * 
	 * @return json
	 */
	public function getAllPipelines() 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint 	= "/v1/pipelines";
		$data 		= $requestor->request($endpoint);
        return $data;
	}

	/**
	 * This call will give you a single pipeline given the key.
	 * @param string|null $pipelinekey
	 *
	 * @return json
	 */
	public function getSinglePipeline($pipelinekey = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint 	= "/v1/pipelines/".$pipelinekey;
		$data 		= $requestor->request($endpoint);
        return $data;
	}

	/**
	 * This call lets you get all boxes contained in the specified pipeline.
	 * @param string|null $pipelinekey
	 *
	 * @return json
	 */
	public function getAllBox($pipelinekey = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v1/pipelines/'.$pipelinekey."/boxes";
		$data 		= $requestor->request($endpoint);
		
        return $data;
	}
	
	/**
	 * Create a Pipeline
	 * @param array|null $params
	 *
	 * @return json
	 */
	public function createPipeline($params = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v1/pipelines';
		$data 		= $requestor->request($endpoint, $method='PUT', $params);
		
        return $data;
	}
	
	/**
	 * Edit a Pipeline
	 * @param string|null $pipelinekey
	 * @param array|null $params
	 *
	 * @return json
	 */
	public function editPipeline($pipelinekey = null, $params = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v1/pipelines/'.$pipelinekey;
		$data 		= $requestor->request($endpoint, $method='POST', $params);
		
        return $data;
	}
	
	/**
	 * Delete a Pipeline
	 * @param string|null $pipelinekey
	 *
	 * @return json
	 */
	public function deletePipeline($pipelinekey = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v1/pipelines/'.$pipelinekey;
		$data 		= $requestor->request($endpoint, $method='DELETE');
		
        return $data;
	}
	
	/**
	 * This call will give you access to all properties of a pipeline.
	 * @param string|null $pipelinekey
	 *
	 * @return json
	 */
	public function getProperties($pipelinekey = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint 	= "/v1/pipelines/".$pipelinekey;
		$data 		= $requestor->request($endpoint);
		
        return $data;
	}
	
}