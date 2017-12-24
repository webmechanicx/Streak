 <?php

	require '../../init.php';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$organization	= new \Streak\StreakOrganization;
	
	$orgkey	= '<-- Your Organization Key -->';
	
	$params		= array(
  						'name'				=> 'ADI Motoring Ltd',
						'domains'			=> array('www.adimotoring.com'),
						'industry'			=> 'Education/Trainning',
						'phoneNumbers'		=> array('095642907'),
						'addresses'			=> array('Old School Street, Dublin, Ireland'),
						'employeeCount'		=> 50,
  					);
	
	$data		= $organization->editOrganization($orgkey, $params);
	  
	print_r( json_decode($data) );

?>