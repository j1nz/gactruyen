<?php
    require_once ('/config.php');
    
    
    class LoadContentStory {
        private static $_instance;
        private $_pdo;
        
        public function __construct() {
            
        }
        
        public static function getInstance() {
            if (!(self::$_instance instanceof self)) {
                self::$_instance = new self();
            }
            return self::$_instance;
        }
        
        private function connect_db() {
            
            try {
                $this->_pdo = new PDO('mysql:host=localhost;dbname=story_db', 'root', '');
            
                $this->_pdo->exec('set names utf8');
            } catch (PDOException $e) {
                //header('HTTP/1.0 404 Not Found');
                header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
                exit;
                //die('Could not connect to the database '.DB_NAME .' :' . $e->getMessage());
            }
        }
        
        function q_item_with_param($sql, $parameter_array) {
            
            $stmt = $this->_pdo->prepare($sql);
            //$this->_pdo->bindParam(':id', $category_id);
            $stmt->execute($parameter_array);
            
            $result = $stmt->fetch();
            
            return $result;
        }
        
        public function diplay_content ($story_id, $chapter_id) {
            self::connect_db();
            
            $__sql = 'select content from chapter where story_id = :storyId AND chapter_id = :chapterId';
            $__paremeter = array(
                'storyId' => $story_id,
                'chapterId' => $chapter_id
            );
            
            $__chapter = self::q_item_with_param($__sql, $__paremeter);
            
            header('Content-Type: text/html; charset=utf-8');
            echo $__chapter['content'];
            exit;
        }
    }

    $story_id = isset($_POST['storyId']) ? (int)$_POST['storyId'] : false;
    $chapter_id = isset($_POST['chapterId']) ? (int)$_POST['chapterId'] : false;
    
    $display = LoadContentStory::getInstance();
    $display->diplay_content($story_id, $chapter_id);
?>