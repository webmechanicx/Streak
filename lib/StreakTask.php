<?php

namespace Streak;

/**
 * Class StreakTask
 *
 * @package Streak
 *
 * readmore: https://www.streak.com/api/#task
 */

class StreakTask
{

	/**
	 * This call lets you get all the tasks associated with a particular box
	 * @param string|null $boxkey
	 * 
	 * @return json object
	 */
	public function getAllTask($boxkey) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint 	= "/v2/boxes/".$boxkey.'/tasks';
		$data 		= $requestor->request($endpoint);
        return $data;
	}

	/**
	 * This call lets you get a specific task
	 * @param string|null $taskkey
	 * 
	 * @return json object
	 */
	public function getTask($taskkey = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v2/tasks/'.$taskkey;
		$data 		= $requestor->request($endpoint);
		
        return $data;
	}
	
	/**
	 * Create Task. This call lets you create a task
	 * @param string|null $boxkey
	 * @param array|null $params
	 *
	 * @return json
	 */
	public function createTask($boxkey = null, $params = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v2/boxes/'.$boxkey.'/tasks';
		$data 		= $requestor->request($endpoint, $method='POST', $params);
		
        return $data;
	}
	
	/**
	 * Edit Task. This call lets you edit a specific task
	 * @param string|null $taskkey
	 * @param array|null $params
	 *
	 * @return json
	 */
	public function editTask($taskkey = null, $params = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v2/tasks/'.$taskkey;
		$data 		= $requestor->request($endpoint, $method='POST', $params);
		
        return $data;
	}
	
	/**
	 * Delete Task. call lets you delete a specific task
	 * @param string|null $taskkey
	 *
	 * @return json
	 */
	public function deleteTask($taskkey = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v2/tasks/'.$taskkey;
		$data 		= $requestor->request($endpoint, $method='DELETE');
		
        return $data;
	}
	
}