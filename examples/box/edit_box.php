 <?php

	require '../../init.php';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$box	= new \Streak\StreakBox;
	
	$boxkey = '<-- Your Box Key -->';
	
	$params	= array('name' => 'NewFoo',
					'notes' => 'AdditionalNotesText',
					'stageKey' => 5002
					);
	
	$data	= $box->editBox($boxkey, $params);
	  
	print_r( json_decode($data) );

?>