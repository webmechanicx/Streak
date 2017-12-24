 <?php

	require '../../init.php';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$task	= new \Streak\StreakTask;
	
	$boxkey = '<-- Your Box Key -->';
	
	$milliseconds = 1000 * strtotime( "+7 day", strtotime(date('d-m-Y')) );
	
	$params	= array(
					'dueDate' 	=> $milliseconds,
					'text'		=> 'General Meeting',
					);
	
	$data	= $task->createTask($boxkey, $params);
	  
	print_r( json_decode($data) );

?>