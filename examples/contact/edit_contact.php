 <?php

	require '../../init.php';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$contact	= new \Streak\StreakContact;
	
	$contactkey	= '<-- Your Contact Key -->';
	
	$params		= array(
  						'givenName'			=> 'John',
						'familyName'		=> 'Wick',
						'emailAddresses'	=> array('johnwick2018@gmail.com'),
						'title'				=> 'Manager, ICT',
						'addresses'			=> array('Old School Street, Dublin, Ireland'),
						'phoneNumbers'		=> array('095642907'),			
  					);
	
	$data		= $contact->editContact($contactkey, $params);
	  
	print_r( json_decode($data) );

?>