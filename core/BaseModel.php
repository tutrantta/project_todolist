<?php 
require_once '/../library/Loader.php';

class BaseModel 
{
	protected $loader;

	function __construct() 
	{
		$this->loader = new Loader;
	}
}