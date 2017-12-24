 <?php

	require_once '../../init.php';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$field	= new \Streak\StreakField;
	
	$boxkey = '<-- Your Box Key -->';
	
	$fieldkey = '1005';
	
	$params = array('value' => 'Test Value');
	
	$data	= $field->editFieldValue($boxkey, $fieldkey, $params);
	  
	print_r( json_decode($data) );

?>