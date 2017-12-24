 <?php

	require '../../init.php';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$task	= new \Streak\StreakTask;
	
	$taskkey = '<-- Your Task Key -->';
	
	$data	= $task->deleteTask($taskkey);
	  
	print_r( json_decode($data) );

?>