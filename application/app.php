<?php 

require_once '/../config/define.php';
require_once '/../library/loader.php';

class Application
{
	function run() 
	{
		echo 'test run' . '<br>';
		echo PROJECT_FOLDER . '<br>';
		echo APPLICATION_DIR . '<br>';
		echo CONTROLLERS_DIR . '<br>';		
	}
}

$app = new Application;
$app->run();

