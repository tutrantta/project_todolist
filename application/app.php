<?php 

require_once '/../config/define.php';
require_once '/../library/loader.php';

class Application
{
	private $url;
	private $loader;
	private $controller = "defaultController";
	private $method = "defaultMethod";
	private $arrParams = array();

	function __construct()
	{
		$this->loader = new Loader;
	}

	function parseURL() 
	{
		$arrQueryString = explode('&', $_SERVER['QUERY_STRING']);
		$arrParseResult = array_diff(explode('/', $arrQueryString[0]), array(''));
		if(count($arrParseResult) >= 1) $this->controller = $arrParseResult[0];
		if(count($arrParseResult) >= 2) $this->method = $arrParseResult[1];
		if(count($arrParseResult) >= 3) $this->arrParams = array_slice($arrParseResult, 2);
	}

	function run() 
	{
		$this->parseURL();
		$this->loader->callController($this->controller, $this->method, $this->arrParams);
	}
}

$app = new Application;
$app->run();
