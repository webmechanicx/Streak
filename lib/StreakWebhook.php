<?php

namespace Streak;

/**
 * Class StreakWebhook
 *
 * @package Streak
 *
 * readmore: https://streak.readme.io/reference#webhooks
 */

class StreakWebhook
{

	/**
	 * Get all pipeline-based webhooks
	 * @param string|null $pipelinekey
	 * 
	 * @return json object
	 */
	public function getPipelineHooks($pipelinekey) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint 	= '/v2/pipelines/'.$pipelinekey.'/webhooks';
		$data 		= $requestor->request($endpoint);
        return $data;
	}

	/**
	 * Get all team-based webhooks
	 * @param string|null $teamkey
	 * 
	 * @return json object
	 */
	public function getTeamHooks($teamkey) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint 	= '/v2/teams/'.$teamkey.'/webhooks';
		$data 		= $requestor->request($endpoint);
        return $data;
	}

	/**
	 * Get webhook by key
	 * @param string|null $webhookkey
	 * 
	 * @return json object
	 */
	public function getWebhook($webhookkey) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint 	= '/v2/teams/'.$teamkey.'/webhooks';
		$data 		= $requestor->request($endpoint);
        return $data;
	}

	/**
	 * Create a Webhook
	 * @param string|null $key specify either a "pipelineKey" or a "teamKey"
	 * @param string $type specify whether this $key a "pipelineKey" or a "teamKey"
	 * @param array|null $params
	 * 
	 * @return json object
	 */
	public function createWebhook($key = null, $type = 'pipelineKey', $params = null) 
	{
		$query		= '?' . $type . '=' . $key;
		
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v7/webhooks/'.$query;
		$data 		= $requestor->request($endpoint, $method='POST', $params);
		
        return $data;
	}
	
}