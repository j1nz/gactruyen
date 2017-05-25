<?php
	class CategoryController {

            protected $host;
            protected $function;
            protected $category_name;
            protected $category_id;
            private $permalinks;
            protected $loader;

            public function __construct($host, $function, $category_id) {
	       
                  $this->host = $host;
                  $this->function = $function;
                  $this->category_id = $category_id;
                  
                  require_once(ABSPATH .'/include/function/loader/class-load-category.php');
                  
                  $this->loader = LoadCategory::getInstance();
            }
            
            public function setPermalinks($permalinks) {
                $this->permalinks = $permalinks;
            }
       
            public function view_category() {
                  //ob_end_clean();
            
                  $this->category_name = $this->loader->load_category_name_by_id($this->category_id);

            
                  include_once(ABSPATH .'/story/view/view-category.php');
            }

	}
?>