<?php
    require_once(ABSPATH .'/include/function/loader/class-load-category.php');
    require_once(ABSPATH .'/include/function/library/database-pdo.php');
	/**
	 * LoadManga
	 * 
	 * @package   
	 * @author 
	 * @copyright GacTruyen
	 * @version 2017
	 * @access public
	 */
	class LoadManga {
        private static $_instance;
        private $connect;
        
        /**
         * LoadManga::__construct()
         * 
         * @return
         */
        public function __construct() {
            
        }
        
        /**
         * LoadManga::getInstance()
         * 
         * @return
         */
        public static function getInstance() {
            if (!(self::$_instance instanceof self)) {
                self::$_instance = new self();
            }
            return self::$_instance;
        }
        
        
        function check_story_by_slug($permalinks) {
            $load_category = LoadCategory::getInstance();
            
            // lay id cua category thong qua duong link
            $__result_category_id = $load_category->get_categoryId_by_slug($permalinks[2]);
            
            // Lay slug link story
            $__slug_link = $permalinks[3];
            
            $db_pdo = PdoConnection::getInstance();
            $db_pdo->get_conect_pdo();
            
            $__sql = 'SELECT story_id FROM story WHERE slug = :link AND category_id = :category';
            $__paremeter = array(
                'link' => $__slug_link,
                'category' => $__result_category_id['category_id']
            );
            
            $__result = $db_pdo->q_item_with_param($__sql, $__paremeter);
            
            if ($__result == true) {
                return true;
            }
            
            return false;
        }

        /**
         * LoadManga::get_story_by_slug()
         * 
         * @since 2017/05/24
         * @param mixed $permalinks
         * @return list story from database
         */
        function get_story_by_slug($permalinks) {
            $load_category = LoadCategory::getInstance();
            
            // lay id cua category thong qua duong link
            $__category_id = $load_category->get_categoryId_by_slug($permalinks[2]);
            
            // Lay slug link story
            $__slug_link = $permalinks[3];
            
            $db_pdo = PdoConnection::getInstance();
            $db_pdo->get_conect_pdo();
            
            $__sql = 'SELECT story_id, story_name, slug FROM story WHERE slug = :link AND category_id = :category';
            $__paremeter = array(
                'link' => $__slug_link,
                'category' => $__category_id
            );
            
            $__list_manga_slug = $db_pdo->q_item_with_param($__sql, $__paremeter);
            
            return $__list_manga_slug;
        }
        
        function get_story_of_category_id($category_id) {
            $db_pdo = PdoConnection::getInstance();
            $db_pdo->get_conect_pdo();
            
            $__sql = 'SELECT story_id, story_name, slug FROM story WHERE category_id = :id';
            $__paremeter = array(
                'id' => $category_id
            );
            
            $__result = $db_pdo->q_all_with_param($__sql, $__paremeter);
            
            return $__result;
        }
	}
?>