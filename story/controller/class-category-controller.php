<?php
    require_once(ABSPATH .'/include/function/loader/class-load-category.php');
    require_once(ABSPATH .'/include/function/loader/class-load-manga.php');
    require_once(ABSPATH .'/story/model/class-category.php');
    
	class CategoryController {
        protected static $_instance;
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
        
        public static function getInstance($host, $function, $category_id) {
            if (!(self::$_instance instanceof self)) {
                self::$_instance = new self($host, $function, $category_id);
            }
            return self::$_instance;
        }
        
        /**
         * CategoryController::view_category()
         * 
         * @since 2017-05-26
         * @version 1.3
         * @return
         */
        public function view_category() {
            
            
            //un-conmment when finish test by 'echo' command
            //ob_end_clean();
            
            
              
            /**
             * @todo get all story of category id
             * 
             */
            
            // Define variable
            $obj_load_manga = LoadManga::getInstance();
            $obj_category = new Category();
            $list_manga = null;
            
            /**
             * Load category id, name and slug at database
             * Fucntion:
             * 
             */
            $item_category = $this->loader->get_category_by_id($this->category_id);
            
            /**
             * Start pagination
             * @version 1.1
             * @since 2017-05-27
             */
            $total_records = $obj_load_manga->get_total_records_table($this->category_id);
            
            if (isset($_GET['lm'])) {
                $value_lm = $_GET['lm'];
            } else {
                $value_lm = 20;
            }
            
            if ($value_lm > $total_records) {
                $record_per_page = 20;
            } else {
                $record_per_page = $value_lm;
            }
            
            $total_page = ceil($total_records / $record_per_page);
            
            if (isset($_GET['pn'])) {
                
                // 2017-05-29 bug if not add = into $_GET['pn'] >= $total_page
                // 2017-05-30 it not bug
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

//                if ($total_records > $record_per_page){
//                    $start = ($page - 1) * $record_per_page;
//                    
//                    $list_manga = $obj_load_manga->get_story_by_paging_a_slug($start, $record_per_page, $this->category_id);            
//                }
            
            $start = ($page - 1) * $record_per_page;
            
            $list_manga = $obj_load_manga->get_story_by_paging_a_slug($start, $record_per_page, $this->category_id);

            // end thuat toan phan trang
            
            $obj_category->setCategory_id($item_category['category_id']);
            $obj_category->setCategory_name($item_category['category_name']);
            $obj_category->setSlug($item_category['slug']);
            
            $obj_load_function = LoadFunction::getInstance();
                
            $obj_result_function = $obj_load_function->get_function_by_slug($this->function);

            include_once(ABSPATH .'/story/view/view-category.php');
        }

	}
?>