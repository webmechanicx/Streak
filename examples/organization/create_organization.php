 <?php

	require '../../init.php';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$organization	= new \Streak\StreakOrganization;
	
	$teamkey	= '<-- Your Team Key -->';
	
	$params		= array(
  						'name'				=> 'Webmechanicx', //required
						'domains'			=> array('www.streak.com'),
						'industry'			=> 'Internet/Technology',
						'phoneNumbers'		=> array('095642907'),
						'addresses'			=> array('Old School Street, Dublin, Ireland'),
						'employeeCount'		=> 50,
  					);
	
	$data		= $organization->createOrganization($teamkey, $params);
	  
	print_r( json_decode($data) );

?>