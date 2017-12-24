 <?php

	require '../../init.php';
	
	//Set your pipeline key here
  	$pipelinekey = '<-- Your Pipeline Key -->';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$box	= new \Streak\StreakBox;
	
	$params	= array('name' => 'Foo');
	
	$data	= $box->createBox($pipelinekey, $params);
	  
	print_r( json_decode($data) );

?>