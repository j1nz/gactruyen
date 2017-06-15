<?php

    require_once(ABSPATH .'/include/function/library/database-pdo.php');
    
	/**
	 * LoadFunction
	 * 
	 * @package gactruyen
	 * @author jinz
	 * @copyright 2017-06-10
	 * @version 1.0
	 * @access public
	 */
	class LoadFunction {
        private static $_instance;
        private $_pdo;
       
        /**
        * LoadFunction::__construct()
        * 
        * @return
        */
        public function __construct() {
            $this->_pdo = PdoConnection::getInstance();
            $this->_pdo->get_conect_pdo();
        }
       
        /**
        * LoadFunction::getInstance()
        * 
        * @return
        */
        public static function getInstance() {
            if (!(self::$_instance instanceof self)) {
                self::$_instance = new self();
            }
            return self::$_instance;
        }
        
        /**
         * LoadFunction::check_function_slug()
         * 
         * @param mixed $_slug
         * @return
         */
        public function check_function_slug($_slug) {
            $__sql = 'SELECT function_id FROM function WHERE function_slug = :slug';
            $__paremeter = array(
                'slug' => $_slug
            );
            
            $__result = $this->_pdo->q_item_with_param($__sql, $__paremeter);
            
            if ($__result == true) {
                return true;
            }
            
            return false;
        }
        
        /**
         * LoadFunction::get_function_by_slug()
         * 
         * @param mixed $_slug
         * @return
         */
        public function get_function_by_slug($_slug) {
            $__sql = 'SELECT function_id, function_name, function_slug FROM function WHERE function_slug = :slug';
            $__paremeter = array(
                'slug' => $_slug
            );
            
            $__result = $this->_pdo->q_item_with_param($__sql, $__paremeter);
            
            return $__result;
        }
	}
?>