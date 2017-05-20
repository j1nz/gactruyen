<?php
	class BaseController {
        protected $host;
       
        public function __construct() {
            
        }
        
        public function load_404() {
            ob_end_clean();
            header('HTTP/1.0 404 Not Found');
            header('Location: ' .'/gactruyen/404.php');
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