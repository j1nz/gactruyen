<?php 
	if ( ! defined('PATH_SYSTEM')) {
		die ('Bad requested!');
	} 

	/**
	* 
	*/
	class ClassName extends AnotherClass
	{
		
		function __construct()
		{
			define('PATH_SYSTEM', __DIR__ .'/system');
			define('PATH_ADMIN', __DIR__ . '/admin');
			define('PATH_SITE', __DIR__ . '/site');
		}

		public function init()
		{
			
		}
	}

	
?>