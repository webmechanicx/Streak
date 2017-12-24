 <?php

	require_once '../../init.php';
	
	//Set your pipeline key here
  	$pipelinekey = '<-- Your Pipeline Key -->';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$field	= new \Streak\StreakField;
	
	$params = array(
					"name" => 'NewField',
					"type" => 'TEXT_INPUT', // DROPDOWN | DATE
					);
	
	$data	= $field->createField($pipelinekey, $params);
	  
	print_r( json_decode($data) );

?>