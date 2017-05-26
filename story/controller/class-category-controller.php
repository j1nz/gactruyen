<?php
    require_once(ABSPATH .'/include/function/loader/class-load-category.php');
    require_once(ABSPATH .'/include/function/loader/class-load-manga.php');
	class CategoryController {

            protected $host;
            protected $function;
            protected $category_name;
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
                $obj_category = new Category();
                
                $list_manga = $obj_load_manga->get_story_of_category_id($this->category_id);            
                
                $obj_category->setCategory_id($item_category['category_id']);
                $obj_category->setCategory_name($item_category['category_name']);
                $obj_category->setSlug($item_category['slug']);

                require_once(ABSPATH .'/story/view/view-category.php');
            }

	}
?>