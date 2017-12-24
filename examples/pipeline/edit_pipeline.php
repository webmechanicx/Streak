 <?php

	require '../../init.php';
	
	//Set your pipeline key here
  	$pipelinekey = '<-- Your Pipeline Key -->';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$pipeline	= new \Streak\StreakPipeline;
	
	$params		= array(
						'name' => 'NewFoo',
						'description' => 'NewBar'
					);
	
	$data		= $pipeline->editPipeline($pipelinekey, $params);
	  
	print_r( json_decode($data) );

?>