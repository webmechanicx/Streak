 <?php

	require_once '../../init.php';

	//Set your pipeline key here
  	$pipelinekey = '<-- Your Pipeline Key -->';
	
	$streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
	  
	$field	= new \Streak\StreakField;
	
	$fieldkey = '1004';
	
	$params = array(
					"name" => 'NewEditedField',
					);
	
	$data	= $field->editField($pipelinekey, $fieldkey, $params);
	  
	print_r( json_decode($data) );

?>