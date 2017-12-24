 <?php

	require_once '../../init.php';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$stage	= new \Streak\StreakStage;
	
	$pipelinekey = '<-- Your Pipeline Key -->';
	
	$data	= $stage->getAllStages($pipelinekey);
	  
	print_r( json_decode($data) );

?>