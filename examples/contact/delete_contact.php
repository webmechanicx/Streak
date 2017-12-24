 <?php

	require '../../init.php';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$contact	= new \Streak\StreakContact;
	
	$contactkey	= '<-- Your Contact Key -->';
	
	
	$data		= $contact->deleteContact($contactkey);
	  
	print_r( json_decode($data) );

?>