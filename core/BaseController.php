<?php 
require_once '/../library/Loader.php';

class BaseController 
{
	protected $loader;

	function __construct() 
	{
		$this->loader = new Loader;
	}
}