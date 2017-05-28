<?php
    require_once('class-base-controller.php');
    require_once(ABSPATH .'/story/model/class-category.php');
    require_once(ABSPATH .'/include/function/loader/class-load-category.php');
    require_once(ABSPATH .'/story/controller/class-manga-controller.php');
    require_once(ABSPATH .'/story/controller/class-category-controller.php');
    
    class StoryController extends BaseController {
        protected $function;
        protected $category;
        protected $story;
        protected $chapter;
        protected $loader; // loader of class LoadCategory
        
        /**
         * StoryController::__construct()
         * 
         * @return
         */
        public function __construct() {
            
            
            $this->loader = LoadCategory::getInstance();
        }
        
        
        
        /**
         * StoryController::redirect()
         * 
         * Function handle url, check url request
         * 
         * @param mixed $permalinks (url request)
         * @return
         */
        public function redirect($permalinks) {
            //un-comment when use at localhost, if up to host don't need nesesary'
            //cut the first index of array 
            //array_shift($permalinks);
            
            // host at index 0
            // functrion at index 1
            // category at index 2

            $this->host = $permalinks[0];
            $this->function = $permalinks[1];
            $this->category = $permalinks[2];
            
            $this->category = parent::get_param_url($this->category);
            
            if ($this->category != null) {
                if ($this->category == 'index' || $this->category == null) {
                    self::index();
                    
                } else {
                    self::load_slug_category($permalinks);                    
                }
            } else {
                self::index();
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
        private function load_slug_category($permalinks) {
            // Biến flag để kiểm tra đường link đúng hay không?
            //return boolean
            $flag_slug = $this->loader->check_slug_by_slug($this->category);

            // Nếu tồn tại (flag = true)
            if ($flag_slug == true) {
                $item_category = $this->loader->get_categoryId_by_slug($this->category);
                
                // Call method load_category
                self::load_category($item_category['category_id'], $permalinks);
                
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
            
            $list_category = $this->loader->get_category_all();
            
            include_once(ABSPATH .'/story/story.php');

        }
        
        /**
         * StoryController::load_category()
         * 
         * @param mixed $category_id
         * @param mixed $permalinks
         * @return
         */
        public function load_category($category_id, $permalinks) {
            $size = count($permalinks);
            
            // Nếu size lớn hơn 3 nghĩa là sau trong url request phía sau của category (phần url của manga)
            // tồn tại paramater (ví dụ http://gactruyen.com/story/truyen-ngan/?pn=1&lm=20) phần ?pn=1&lm=20
            // sẽ làm url tăng size lên lớn hơn 3
            if ($size > 3) {
                
                // Kiểm tra và tiến hành cắt tách parameter ra khỏi url (nếu có)
                $this->category = self::get_param_url($permalinks[3]);
                
                // Trước dấu '?' có ký tự nào không nếu có (khác null) thì vào if
                if ($this->category != null) {
                    
                    // Ký tự đầu có phải là index hoặc index.php hay không
                    if ($this->category == 'index' || $this->category == 'index.php'){
                        self::load_view_category($category_id);
                    } else {
                        
                        // Nếu tất cả vào tới đây nghĩa là url request đang yêu cầu 1 manga
                        // Tiến hành forward sang cho MangaController class
                        $obj_manga = new MangaController();
                        $obj_manga->redirect($permalinks);
                    }
                    
                } else {
                    self::load_view_category($category_id);
                }
            } else {
                self::load_view_category($category_id);
            }

        }
        
        /**
         * StoryController::load_view_category()
         * 
         * @param mixed $category_id
         * @return
         */
        private function load_view_category($category_id) {
            $obj_category = new CategoryController($this->host, $this->function, $category_id);
            
            $obj_category->view_category();
        }
    }
?>