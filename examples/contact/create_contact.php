 <?php

	require '../../init.php';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$contact	= new \Streak\StreakContact;
	
	$teamkey	= '<-- Your Team Key -->';
	
	$params		= array(
  						'givenName'			=> 'Ronny',
						'familyName'		=> 'Handscob',
						'emailAddresses'	=> array('ronyhandscob28@gmail.com'),
						'title'				=> 'R. Handscob',
						'addresses'			=> array('Old School Street, Dublin, Ireland'),
						'phoneNumbers'		=> array('095642907'),			
  					);
	
	$data		= $contact->createContact($teamkey, $params);
	  
	print_r( json_decode($data) );

?>