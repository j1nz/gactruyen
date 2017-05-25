<?php
	class LoadManga {
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

        function load_manga_name_by_id($manga_id) {
            $db_pdo = PdoConnection::getInstance();
            $db_pdo->get_conect_pdo();
            
            $sql = 'SELECT story_name FROM story WHERE story_id = :id';
            $paremeter = array(
                'id' => $manga_id
            );
            
            $__result = $db_pdo->query_pdo_parameter($sql, $paremeter);
            
            foreach( $__result as $i ) {
                $story_name = $i['story_name'];
            }
            
            return $story_name;
        }
    
        function load_manga_all() {
            
            $db_pdo = PdoConnection::getInstance();
            $db_pdo->get_conect_pdo();
            $list_manga = $db_pdo->query_pdo('SELECT * FROM story');
            
            return $list_manga;
        }
        
        function load_story_slug() {
            $db_pdo = PdoConnection::getInstance();
            $db_pdo->get_conect_pdo();
            
            $list_manga_slug = $db_pdo->query_pdo('SELECT story_id, slug FROM story');
            
            return $list_manga_slug;
        }
	}
?>