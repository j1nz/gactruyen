<?php
    require_once('class-base-controller.php');
    
    class StoryController extends BaseController {
        protected $function;
        protected $category;
        protected $story;
        protected $chapter;
        protected $option;
        
<<<<<<< HEAD
        protected $loader;
        
        protected $uri;
        
        public function __construct() {
            require_once(ABSPATH .'/include/function/loader/class-load-category.php');
            
            $this->loader = LoadCategory::getInstance();
        }
        
        public function redirect($permalinks) {
            //cut the first index of array 
            //array_shift($permalinks);
            
            // host at index 0
            // functrion at index 1
            // category at index 2
=======
        protected $uri;
        
        public function __construct() {
            
        }
        
        public function redirect($permalinks) {
            array_shift($permalinks);
            //echo 'host: ' .$permalinks[0] .'<br>';
            //echo 'function: ' .$permalinks[1] .'<br>';
            //echo 'category: ' .$permalinks[2] .'<br>';
>>>>>>> 83bdfa3deb5bce3b86670b52ecd60bef7ab86c9d
            
            $this->host = $permalinks[0];
            $this->function = $permalinks[1];
            $this->category = $permalinks[2];
<<<<<<< HEAD
            
            if ($this->category == 'index' || $this->category == null) {
                self::index();
                
            } else {
                
                // Lấy danh sách link của category
                $list_category_slug = $this->loader->load_category_slug();
                
                /**
                 * Kiểm tra url của người dùng có tồn tại thể loại đó không
                 * 
                 */
                while ($item = $list_category_slug->fetch() ) {
                    if ($this->category == $item['slug']) {
                        
                        // Nếu có category người dùng yêu cầu, thì sẽ gọi hàm load category và exit chương trình
                        self::load_category($item['category_id']);
                        exit;
                        
                    }
                }
                
                //Nếu không có thì sẽ gọi hàm lỗi 404
                parent::load_404();
                
=======
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
>>>>>>> 83bdfa3deb5bce3b86670b52ecd60bef7ab86c9d
            }
               
        }
        
<<<<<<< HEAD
        public function get_uri($permalinks) {
            
        }
        
        public function index() {
            //ob_end_clean();
            header('HTTP/1.0 200 OK');
            
            $list_category = $this->loader->load_category_all();
            
            include_once(ABSPATH .'/story/story.php');

        }
        
        public function load_category($category_id) {
            require_once(ABSPATH .'/story/controller/class-category-controller.php');
            
            $obj_category = new CategoryController($this->host, $this->function, $category_id);
            
            $obj_category->view_category();
=======
        public function index() {
            ob_end_clean();
            header('HTTP/1.0 200 OK');
            include_once('body.php');
        }
        
        public function load_category($category) {
            require_once(ABSPATH .'/story/controller/class-category-controller.php');
            
            $obj_category = new CategoryController();
            $obj_category->view_category($this->uri);
>>>>>>> 83bdfa3deb5bce3b86670b52ecd60bef7ab86c9d
        }
    }
?>