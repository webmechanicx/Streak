 <?php

	require '../../init.php';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$pipeline	= new \Streak\StreakPipeline;
	$data		= $pipeline->getAllPipelines();
	  
	print_r( json_decode($data) );

?>