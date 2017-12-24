<?php

namespace Streak;

/**
 * Class StreakFile
 *
 * @package Streak
 *
 * readmore: https://www.streak.com/api/#file
 */

class StreakFile
{

	/**
	 * Get all the files associated with a particular box
	 * @param string|null $boxkey
	 * 
	 * @return json object
	 */
	public function getAllFiles($boxkey) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint 	= "/v1/boxes/".$boxkey.'/files';
		$data 		= $requestor->request($endpoint);
        return $data;
	}

	/**
	 * Get Specific File
	 * @param string|null $filekey
	 * 
	 * @return json object
	 */
	public function getFile($filekey = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v1/files/'.$filekey;
		$data 		= $requestor->request($endpoint);
		
        return $data;
	}
	
	/**
	 * Get the binary contents of the file. 
	 * The mime type of the response contents is based on the file type
	 * @param string|null $filekey
	 *
	 * @return json
	 */
	public function getFileContents($filekey = null) 
	{
		$requestor 	= new \Streak\ApiRequestor();
		$endpoint	= '/v1/files/'.$filekey.'/contents';
		$data 		= $requestor->request($endpoint);
		
        return $data;
	}
	
	
}