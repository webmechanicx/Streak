 <?php

	require '../../init.php';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$contact	= new \Streak\StreakContact;
	
	$teamkey	= '<-- Your Team Key -->';
	
	$params		= array(
						'emailAddresses'	=> array('johnwick2018@gmail.com'),			
  					);
	
	$data		= $contact->contactExist($teamkey, $params, $getIfExisting = true);
	  
	print_r( json_decode($data) );

?>