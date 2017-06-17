<?php
    require_once('class-base-controller.php');
    require_once(ABSPATH .'/story/model/class-category.php');
    require_once(ABSPATH .'/include/function/loader/class-load-category.php');
    require_once(ABSPATH .'/story/controller/class-manga-controller.php');
    require_once(ABSPATH .'/story/controller/class-category-controller.php');
    
    class StoryController extends BaseController {
        private static $_instance;
        
        protected $host;
        protected $function;
        protected $category;
        protected $story;
        protected $chapter;

        private $obj_uri;
        
        protected $loader; // loader of class LoadCategory
        
        /**
         * StoryController::__construct()
         * 
         * @return
         */
        public function __construct() {
            $this->loader = LoadCategory::getInstance();
        }
        
        public static function getInstance() {
            if (!(self::$_instance instanceof self)) {
                self::$_instance = new self();
            }
            return self::$_instance;
        }
        
        /**
         * StoryController::redirect()
         * 
         * Function handle url, check url request
         * 
         * @param mixed $permalinks (url request)
         * @return
         */
        public function redirect_story($obj_link) {

            $this->host = $obj_link->getHost();
            $this->function = $obj_link->getFunction();
            $this->category = $obj_link->getCategory();
            
            $this->category = parent::get_param_url($this->category);
            
            //if ($this->category != null) {
//                if ($this->category == 'index' || $this->category == null) {
//                    self::index();
//                    
//                } else {
//                    self::load_slug_category($permalinks);                    
//                }
//            } else {
//                self::index();
//            }
            
            if ($this->category == 'index' || $this->category == null) {
                self::index();
                
            } else {
                self::load_slug_category();                    
            }
        }
        
        /**
         * StoryController::chec_slug_category()
         * 
         * Check url and find category if category found then display category else display 404
         * 
         * @param mixed $permalinks
         * @return
         */
        private function load_slug_category() {
            // Biến flag để kiểm tra đường link đúng hay không?
            //return boolean
            $flag_slug = $this->loader->check_slug_by_slug($this->category);

            // Nếu tồn tại (flag = true)
            if ($flag_slug == true) {
                $item_category = $this->loader->get_categoryId_by_slug($this->category);
                
                // Call method load_category
                self::load_category($item_category['category_id']);
                
                // stop process at this class
                exit;
            }
            
            // If category not found (flag_slug = false) then load function call to 404.php (error page)
            parent::load_404();
        }
        
        /**
         * StoryController::index()
         * 
         * @return
         */
        public function index() {
            //ob_end_clean();
            header('HTTP/1.0 200 OK');
            
            $obj_load_function = LoadFunction::getInstance();
                
            $obj_result_function = $obj_load_function->get_function_by_slug($this->function);
            
            $list_category = $this->loader->get_category_all();
            
            include_once(ABSPATH ._STORY_DIR .'/story.php');

        }
        
        /**
         * StoryController::load_category()
         * 
         * @param mixed $category_id
         * @param mixed $permalinks
         * @return
         */
        public function load_category($category_id) {
            
            //ob_end_flush();
            $obj_category = CategoryController::getInstance($this->host, $this->function, $category_id);
            
            $obj_category->view_category();
        }

    }
?>