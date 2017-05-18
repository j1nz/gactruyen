<?php 
	// Kiem tra hang so he thong ngan chan truy cap bat hop phap
	if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

	/**
	* author ThangLe
	* date 18/05/2017
	*/
	class Main_Controller
	{
		 // Đối tượng view
   		protected $view = NULL;
     
	    // Đối tượng model
	    protected $model = NULL;
	     
	    // Đối tượng library
	    protected $library = NULL;
	     
	    // Đối tượng helper
	    protected $helper = NULL;
	     
	    // Đối tượng config
	    protected $config = NULL;
	     
	    /**
	     * Hàm khởi tạo
	     * 
	     * @desc    Load các thư viện cần thiết
	     */
		function __construct()
		{
			# code...
		}

		
	}

?>