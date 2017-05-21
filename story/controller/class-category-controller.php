<?php
	class CategoryController {
<<<<<<< HEAD
	   protected $host;
       protected $function;
	   protected $category_name;
       protected $category_id;
       protected $loader;
       
	   public function __construct($host, $function, $category_id) {
	       
            $this->host = $host;
            $this->function = $function;
            $this->category_id = $category_id;
            
            require_once(ABSPATH .'/include/function/loader/class-load-category.php');
            
            $this->loader = LoadCategory::getInstance();
	   }

       
       public function view_category() {
            //ob_end_clean();
            
            $this->category_name = $this->loader->load_category_name_by_id($this->category_id);
=======
	   protected $category;
       
	   public function __construct() {
	          
	   }
       
       public function view_category($uri) {
            ob_end_clean();
            $host = $uri[0];
            $action = $uri[1];
            $category = 'Truyện ngắn';
>>>>>>> 83bdfa3deb5bce3b86670b52ecd60bef7ab86c9d
            
            include_once(ABSPATH .'/story/view/view-category.php');
       }

	}
?>