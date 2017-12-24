 <?php

	require_once '../../init.php';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$field	= new \Streak\StreakField;
	
	$boxkey = '<-- Your Box Key -->';
	
	$fieldkey = '1005';
	
	$data	= $field->getFieldValue($boxkey, $fieldkey);
	  
	print_r( json_decode($data) );

?>