 <?php

	require '../../init.php';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$box	= new \Streak\StreakBox;
	
	$data		= $box->getAllBoxes();
	  
	print_r( json_decode($data) );

?>