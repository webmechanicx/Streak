 <?php
 /**
  * Define Get Pipeline Function
  */

  require '../../init.php';

  //Set your pipeline key here
  $pipelinekey = '<-- Your Pipeline Key -->';

  $streak = \Streak\Streak::setApiKey('<-- Your Streak Api Key -->');
  
  $pipeline	= new \Streak\StreakPipeline;
  $boxes	= $pipeline->getProperties($pipelinekey);
  
  print_r( json_decode($boxes) );

?>