<?php
    require_once(ABSPATH .'/include/function/loader/class-load-category.php');
    require_once(ABSPATH .'/include/function/loader/class-load-manga.php');
	class CategoryController {

            protected $host;
            protected $function;
            protected $category_name;
            
            protected $pn;
            
            protected $category_id;
            private $permalinks;
            protected $loader;

            /**
             * CategoryController::__construct()
             * 
             * @param mixed $host
             * @param mixed $function
             * @param mixed $category_id
             * @return
             */
            public function __construct($host, $function, $category_id) {
	       
                  $this->host = $host;
                  $this->function = $function;
                  $this->category_id = $category_id;
                  
                  
                  
                  $this->loader = LoadCategory::getInstance();
            }
            
            /**
             * CategoryController::setPermalinks()
             * 
             * @param mixed $permalinks
             * @return
             */
            public function setPermalinks($permalinks) {
                $this->permalinks = $permalinks;
            }
       
            
            /**
             * CategoryController::view_category()
             * 
             * @return
             */
            public function view_category() {
                require_once(ABSPATH .'/story/model/class-category.php');
                $item_category = $this->loader->get_category_by_id($this->category_id);
                //ob_end_clean();
                  
                /**
                 * @todo get all story of category id
                 * 
                 */
                 
                $obj_load_manga = LoadManga::getInstance();
                $total_records = $obj_load_manga->get_total_records_table();
                
                
                if (isset($_GET['lm'])) {
                    $value_lm = $_GET['lm'];
                } else {
                    $value_lm = 10;
                }
                
                if ($value_lm > $total_records) {
                    $record_per_page = 10;
                } else {
                    $record_per_page = $value_lm;
                }
                
                $total_page = ceil($total_records / $record_per_page);
                
                if (isset($_GET['pn'])) {
                    if ($_GET['pn'] > $total_page) {
                        $page = 1;
                    } else {
                        $page = $_GET['pn'];
                    } 
                } else {
                    $page = 1;
                }
                
                
                
                
                
                 
                 
                if ($page > $total_page){
                    $page = $total_page;
                }
                else if ($page < 1){
                    $page = 1;
                }
                
                
                
                if ($total_records > $record_per_page){
                    $start = ($page - 1) * $record_per_page;
                    
                    $obj_category = new Category();
                    
                    $list_manga = $obj_load_manga->get_story_by_paging_a_slug($start, $record_per_page, $this->category_id);            
                    
                    $obj_category->setCategory_id($item_category['category_id']);
                    $obj_category->setCategory_name($item_category['category_name']);
                    $obj_category->setSlug($item_category['slug']);
                }
                 
                 /**
                  * @todo thuat toan phan trang
                  * 
                  */

                

                include_once(ABSPATH .'/story/view/view-category.php');
            }

	}
?>