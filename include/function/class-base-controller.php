<?php
	class BaseController {
       
        public function __construct() {
            
        }
        
        /**
         * StoryController::get_param_url()
         * 
         * explode url if url have parameter attach
         * 
         * @param mixed $short_url
         * @return
         */
        public function get_param_url($short_url) {
            
            $param_url = explode('?', $short_url);
            
            
            $page_request = $param_url[0];
            
            return $page_request;
        }
        
        public function load_404() {
            //ob_end_clean();
            header('HTTP/1.0 404 Not Found');

            header('Location: ' .'/404.php');

            exit;
        }
        
        public function load_index($url_redirect) {
            ob_end_clean();
            header('HTTP/1.0 200 OK');
            header('Location: /' .$url_redirect);
            exit;
        }
	}
?>