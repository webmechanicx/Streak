 <?php

	require '../../init.php';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$user	= new \Streak\StreakUser;
	$data	= $user->getCurrentUser();
	  
	print_r( json_decode($data) );

?>