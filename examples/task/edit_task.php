 <?php

	require '../../init.php';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$task	= new \Streak\StreakTask;
	
	$taskkey = '<-- Your Task Key -->';
	
	$milliseconds = 1000 * strtotime( "+7 day", strtotime(date('d-m-Y')) );
	
	$params	= array(
					'dueDate' 	=> $milliseconds,
					'text'		=> 'Production Meeting',
					);
	
	$data	= $task->editTask($taskkey, $params);
	  
	print_r( json_decode($data) );

?>