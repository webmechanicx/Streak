 <?php

	require '../../init.php';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$contact	= new \Streak\StreakContact;
	
	$boxkey		= '<-- Your Box Key -->';
	
	$contactkey	= '<-- Your Contact Key -->';
	
  	$params		= array( 'contacts' => 
					array(
						array(
								"isStarred"	=> true,
								"key"		=> $contactkey,
						)
					)
				);
	
	$data		= $contact->addContactToBox($boxkey, $params);
	  
	print_r( json_decode($data) );

?>