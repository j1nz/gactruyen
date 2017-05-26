<?php
	class LoadCategory {
        private static $_instance;
        private $connect;
        
        /**
         * LoadCategory::__construct()
         * 
         * @return
         */
        public function __construct() {
            require_once(ABSPATH .'/include/function/library/database-pdo.php');
        }
        
        /**
         * LoadCategory::getInstance()
         * 
         * @return
         */
        public static function getInstance() {
            if (!(self::$_instance instanceof self)) {
                self::$_instance = new self();
            }
            return self::$_instance;
        }
        
        function get_categoryId_by_slug($slug) {
            $db_pdo = PdoConnection::getInstance();
            $db_pdo->get_conect_pdo();
            
            $sql = 'SELECT category_id FROM category WHERE slug = :slug';
            $paremeter = array(
                'slug' => $slug
            );
            
            $__result = $db_pdo->q_item_with_param($sql, $paremeter);
            
            return $__result;
        }
        
        function check_slug_by_slug($slug) {
            $db_pdo = PdoConnection::getInstance();
            $db_pdo->get_conect_pdo();
            
            $sql = 'SELECT category_id FROM category WHERE slug = :slug';
            $paremeter = array(
                'slug' => $slug
            );
            
            $__result = $db_pdo->q_item_with_param($sql, $paremeter);
            
            if ($__result == true) {
                return true;
            }
            
            return false;
        }
        
        public function get_category_by_id($id) {
            $db_pdo = PdoConnection::getInstance();
            $db_pdo->get_conect_pdo();
            
            $sql = 'SELECT category_id, category_name, slug FROM category WHERE category_id = :id';
            $paremeter = array(
                'id' => $id
            );
            
            $__result = $db_pdo->q_item_with_param($sql, $paremeter);
            
            return $__result;
        }
        
        
        /**
         * LoadCategory::get_category_by_slug()
         * 
         * @param mixed $slug
         * @return
         */
        function get_category_by_slug ($slug) {
            $db_pdo = PdoConnection::getInstance();
            $db_pdo->get_conect_pdo();
            
            $sql = 'SELECT category_id, category_name, slug FROM category WHERE slug = :slug';
            $paremeter = array(
                'slug' => $slug
            );
            
            $__result = $db_pdo->q_item_with_param($sql, $paremeter);
            
            return $__result;
        }
    
        /**
         * LoadCategory::load_category_all()
         * 
         * @return
         */
        function get_category_all() {
            
            $db_pdo = PdoConnection::getInstance();
            $db_pdo->get_conect_pdo();
            $list_category = $db_pdo->q_get_all('SELECT * FROM category');
            
            return $list_category;
        }
        
	}
?>