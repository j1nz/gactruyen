<?php
    require_once('class-base-controller.php');
    
    class StoryController extends BaseController {
        protected $function;
        protected $category;
        protected $story;
        protected $chapter;
        protected $option;
        
        protected $uri;
        
        public function __construct() {
            
        }
        
        public function redirect($permalinks) {
            array_shift($permalinks);
            //echo 'host: ' .$permalinks[0] .'<br>';
            //echo 'function: ' .$permalinks[1] .'<br>';
            //echo 'category: ' .$permalinks[2] .'<br>';
            
            $this->host = $permalinks[0];
            $this->function = $permalinks[1];
            $this->category = $permalinks[2];
            $this->uri = $permalinks;
            
            if ($this->category == 'index' || $this->category == 'index.php' || $this->category == null) {
                self::index();
                
            } else {
                switch($this->category) {
                    case 'truyen-ngan' :
                        self::load_category('');
                        break;
                        
                    default :
                        parent::load_404();
                        break;
                }
            }
               
        }
        
        public function index() {
            ob_end_clean();
            header('HTTP/1.0 200 OK');
            include_once('body.php');
        }
        
        public function load_category($category) {
            require_once(ABSPATH .'/story/controller/class-category-controller.php');
            
            $obj_category = new CategoryController();
            $obj_category->view_category($this->uri);
        }
    }
?>