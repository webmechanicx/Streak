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
  $data		= json_decode($boxes);
  
  echo $data->teamKey;

?>