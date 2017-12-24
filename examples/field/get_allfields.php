 <?php

	require_once '../../init.php';
	
	//Set your pipeline key here
  	$pipelinekey = '<-- Your Pipeline Key -->';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$field	= new \Streak\StreakField;
	
	$data	= $field->getAllFields($pipelinekey);
	  
	print_r( json_decode($data) );

?>