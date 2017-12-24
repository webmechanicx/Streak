 <?php

	require '../../init.php';
	
	//Set your pipeline key here
  	$pipelinekey = '<-- Your Pipeline Key -->';
  
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$pipeline	= new \Streak\StreakPipeline;
	
	$data		= $pipeline->deletePipeline($pipelinekey);
	  
	print_r( json_decode($data) );

?>