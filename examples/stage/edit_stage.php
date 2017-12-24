 <?php

	require_once '../../init.php';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$stage	= new \Streak\StreakStage;
	
	$pipelinekey = '<-- Your Pipeline Key -->';
	
	$stagekey = '5008';
	
	$params = array('name' => 'NewEditedStage');
	
	$data	= $stage->editStage($pipelinekey, $stagekey, $params);
	  
	print_r( json_decode($data) );

?>