<?php
    if (!defined('ABSPATH')) die ('The request not found');
    
    class PdoConnection {
        private static $_instance;
        private $_pdo;
        
        public function __construct() {
            //self::get_conect_pdo();
        }

        
        public static function getInstance() {
            if (!(self::$_instance instanceof self)) {
                self::$_instance = new self();
            }
            return self::$_instance;
        }
        
        function get_conect_pdo() {
            try {
                $this->_pdo = new PDO('mysql:host=' .DB_HOST .';dbname=' .DB_NAME, DB_USER, DB_PASSWORD);
            
                $this->_pdo->exec('set names utf8');
            } catch (PDOException $e) {
                //header('HTTP/1.0 404 Not Found');
                header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
                exit;
                //die('Could not connect to the database '.DB_NAME .' :' . $e->getMessage());
            }
    
        }
        
        function q_all_with_param($sql, $parameter_array) {
            
            $stmt = $this->_pdo->prepare($sql);
            //$this->_pdo->bindParam(':id', $category_id);
            $stmt->execute($parameter_array);
            
            $result = $stmt->fetchAll();
            return $result;
        }
        
        function q_item_with_param($sql, $parameter_array) {
            
            $stmt = $this->_pdo->prepare($sql);
            //$this->_pdo->bindParam(':id', $category_id);
            $stmt->execute($parameter_array);
            
            $result = $stmt->fetch();
            
            return $result;
        }
        
        function q_get_all($sql) {
            
            $stmt = $this->_pdo->prepare($sql);
            //$this->_pdo->bindParam(':id', $category_id);
            $stmt->execute();
            
            $result = $stmt;
        
            return $result;
        }
    }
    
    
?>