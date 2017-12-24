<?php
/**
* Streak Unofficial PHP SDK
*
* @author  Farhadur Rahim <webmechanicx@gmail.com>
* @version 1.0
* @link http://www. Author Homepage
* @license LICENSE The MIT License
*/

namespace Streak;

class Streak
{

    public static $apiKey;
    public static $apiBase = 'https://www.streak.com/api';

	
    /**
     * @return string The API key used for requests.
     */
    public static function getApiKey()
    {
        return self::$apiKey;
    }
	
    /**
	 * @param string $api The API key used for requests
     * @return string The API key used for requests.
     */
	public static function setApiKey($apiKey) 
	{
	 	self::$apiKey = $apiKey;
	}


	//Function To get the properties of a pipeline
	public function getPropertiesFromPipeline($pipelineKey) 
	{
		$url 	= $this->ENDPOINT_URL."/pipelines/".$pipelineKey;
		$data 	= $this->getRequest($url);
        return $data;
	}

	//Function to list all boxes in a pipeline
	public function getAllBoxesFromPipeline($pipelineKey) 
	{
		$url 	= $this->ENDPOINT_URL."/pipelines/".$pipelineKey."/boxes";
		$data 	= $this->getRequest($url);
        return $data;
	}
	
	//Function to create a box
	public function createBox($pipelineKey, $newBox) 
	{
		$params = array("name" => $newBox);
		$url 	= $this->ENDPOINT_URL."/pipelines/".$pipelineKey."/boxes";
		$data 	= $this->getRequest($url, $method='PUT', $params);
        return $data;
	}

	//Function to Delete Box 
    public function deleteBox($boxKey) 
	{
		$url 	= $this->ENDPOINT_URL."/boxes/".$boxKey;
		$data 	= $this->getRequest($url);
        return $data;
	}
	
	//Function to edit a box
	public function editBox($boxKey,$params) 
	{
		/* $inputData = array("name" => $boxName,
						   "notes" => $boxNotes,
						   "stageKey" => $stageKey
			); */

		$url  = $this->ENDPOINT_URL."/boxes/".$boxKey;
		$data = $this->getRequest($url, $method='POST', $params);
        return $data;
	}
	
	// Function to edit field
	public function editField($boxKey,$fieldKey,$params) 
	{
		$url  = $this->ENDPOINT_URL."/boxes/".$boxKey."/fields/".$fieldKey;
		$data = $this->getRequest($url, $method='POST', $params);
        return $data;
	}
	
	public function createContact($teamKey,$params)
	{
		$url = 'https://www.streak.com/api/v2/teams/'.$teamKey.'/contacts/';
		$data = $this->getRequest($url, $method='POST', $params);
        return $data;
	}
	
	public function getContact($contactKey)
	{
		$url = 'https://www.streak.com/api/v2/contacts/'.$contactKey;
		$data = $this->getRequest($url, $method='GET', $params='');
        return $data;
	}
	
	public function addBoxToContact($boxKey, $params)
	{
		$url = 'https://www.streak.com/api/v1/boxes/'.$boxKey;
		$data = $this->getRequest($url, $method='POST', $params);
        return $data;
	}
	
}

/*function format_json($json, $html = false, $tabspaces = null)
{
        $tabcount   = 0;
        $result     = '';
        $inquote    = false;
        $ignorenext = false;

        if ($html) {
            $tab     = str_repeat("&nbsp;", ($tabspaces == null ? 4 : $tabspaces));
            $newline = "<br/>";
        } else {
            $tab     = ($tabspaces == null ? "\t" : str_repeat(" ", $tabspaces));
            $newline = "\n";
        }

        for($i = 0; $i < strlen($json); $i++) {
            $char = $json[$i];

            if ($ignorenext) {
                $result    .= $char;
                $ignorenext = false;
            } else {
                switch($char) {
                    case ':':
                        $result .= $char . (!$inquote ? " " : "");
                        break;
                    case '{':
                        if (!$inquote) {
                            $tabcount++;
                            $result .= $char . $newline . str_repeat($tab, $tabcount);
                        }
                        else {
                            $result .= $char;
                        }
                        break;
                    case '}':
                        if (!$inquote) {
                            $tabcount--;
                            $result  = trim($result) . $newline . str_repeat($tab, $tabcount) . $char;
                        }
                        else {
                            $result .= $char;
                        }
                        break;
                    case ',':
                        if (!$inquote) {
                            $result .= $char . $newline . str_repeat($tab, $tabcount);
                        }
                        else {
                            $result .= $char;
                        }
                        break;
                    case '"':
                        $inquote = !$inquote;
                        $result .= $char;
                        break;
                    case '\\':
                        if ($inquote) $ignorenext = true;
                        $result .= $char;
                        break;
                    default:
                        $result .= $char;
                }
            }
        }

        return $result;
    }

*/