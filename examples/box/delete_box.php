 <?php

	require '../../init.php';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$box	= new \Streak\StreakBox;
	
	$boxkey = '<-- Your Box Key -->';
	
	$data	= $box->deleteBox($boxkey);
	  
	print_r( json_decode($data) );

?>