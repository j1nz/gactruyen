<?php 
	if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

	/**
	* 
	*/
	class Management_Controller extends Main_Controller
	{
		
		function __construct()
		{
			# code...
		}

		public function indexAction()
	    {
	    	print_r($this);
	        echo '<h1>Index Action</h1>';
	    }
	     
	    public function detailAction()
	    {
	        echo '<h1>Detail Action</h1>';
	    }
	}
?>