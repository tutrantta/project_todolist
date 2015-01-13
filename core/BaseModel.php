<?php 
require_once '/../library/Loader.php';

class BaseModel 
{
	protected $loader;
	protected $db;

	function __construct() 
	{
		$this->loader = new Loader;
		$this->db = new Database;
	}
}