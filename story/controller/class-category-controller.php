<?php
	class CategoryController {
	   protected $category;
       
	   public function __construct() {
	          
	   }
       
       public function view_category($uri) {
            ob_end_clean();
            $host = $uri[0];
            $action = $uri[1];
            $category = 'Truyện ngắn';
            
            include_once(ABSPATH .'/story/view/view-category.php');
       }

	}
?>