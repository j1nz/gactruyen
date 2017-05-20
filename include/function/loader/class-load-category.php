<?php
	class LoadCategory {
        private static $_instance;
        private $connect;
        
        public function __construct() {
            require_once(ABSPATH .'/include/function/library/database-pdo.php');
        }
        
        public static function getInstance() {
            if (!(self::$_instance instanceof self)) {
                self::$_instance = new self();
            }
            return self::$_instance;
        }

        function load_category_name_by_id($category_id) {
            $db_pdo = PdoConnection::getInstance();
            $db_pdo->get_conect_pdo();
            
            $sql = 'SELECT category_name FROM category WHERE category_id = :id';
            $paremeter = array(
                'id' => $category_id
            );
            
            $__result = $db_pdo->query_pdo_parameter($sql, $paremeter);
            
            foreach( $__result as $i ) {
                $category_name = $i['category_name'];
            }
            
            return $category_name;
        }
    
        function load_category_all() {
            
            $db_pdo = PdoConnection::getInstance();
            $db_pdo->get_conect_pdo();
            $list_category = $db_pdo->query_pdo('SELECT * FROM category');
            
            return $list_category;
        }
        
        function load_category_slug() {
            $db_pdo = PdoConnection::getInstance();
            $db_pdo->get_conect_pdo();
            $list_category_slug = $db_pdo->query_pdo('SELECT category_id, slug FROM category');
            
            return $list_category_slug;
        }
	}
?>