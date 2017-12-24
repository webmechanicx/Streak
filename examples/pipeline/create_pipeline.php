 <?php

	require '../../init.php';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$pipeline	= new \Streak\StreakPipeline;
	
	$params		= array(
						'name' => 'Foo',
						'description' => 'Bar'
					);
	
	$data		= $pipeline->createPipeline($params);
	  
	print_r( json_decode($data) );

?>