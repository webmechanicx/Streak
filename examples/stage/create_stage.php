 <?php

	require_once '../../init.php';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$stage	= new \Streak\StreakStage;
	
	$pipelinekey = '<-- Your Pipeline Key -->';
	
	$params = array('name' => 'NewStage');
	
	$data	= $stage->createStage($pipelinekey, $params);
	  
	print_r( json_decode($data) );

?>