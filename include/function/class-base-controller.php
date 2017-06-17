<?php
	/**
	 * BaseController
     * 
     * @package gactruyen  
     * @author j1nz
     * @copyright 2017
     * @version 1.3
     * @since 2017-05-20
	 * @access public
	 */
	class BaseController {
        private static $_instance;
       
        public function __construct() {
            
        }
        
        public static function getInstance() {
            if (!(self::$_instance instanceof self)) {
                self::$_instance = new self();
            }
            return self::$_instance;
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
        
        /**
         * Display 404 page when not found page request
         * @since 2017/05/20
         * @version 1.1
         */
        public function load_404() {
            ob_end_clean();
            include_once(ABSPATH .'/404.php');
            
            // redirect to 404 page
            //header('Location: ' .'/404.php');

            exit;
        }
        
        /**
         * Display index page with parameter
         * @version 1.0
         * @since 2017/05/20
         * @param $url_redirect
         */ 
        public function load_index($url_redirect) {
            ob_end_clean();
            //header('HTTP/1.0 200 OK');
            header('Location: /' .$url_redirect);
            exit;
        }
	}
?>