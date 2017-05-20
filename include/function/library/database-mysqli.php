<?php
    if (!defined('ABSPATH')) die ('The request not found');

     class Connection {
        // Bi?n luu tr? k?t n?i
        protected $connection = null;
        protected static $instance = null;
        
        public function __construct() {
            self::db_connect();
        }
        
        public static function getInstance() {
            if ($instance == null) {
                $instance = new Connection();
            }
            
            return $instance;
        }
        

        // Hàm k?t n?i
        public function db_connect(){
            if (!$this->connection){
                
                
                require_once(ABSPATH .'/load.php');
                
                mysqli_set_charset($this->connection, 'utf-8');
                $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
                        or die ('Không th? k?t n?i CSDL');
                //$this->connection->set_charset('UTF-8');
                
                //$this->connection->set_charset('UTF-8');
            }
        }
         
        // Hàm ng?t k?t n?i
        function db_close(){

            if ($this->connection){
                mysqli_close($this->connection);
            }
        }
         
        // Hàm l?y danh sách, k?t qu? tr? v? danh sách các record trong m?t m?ng
        function db_get_list($sql){
            db_connect();

            $data  = array();
            $result = mysqli_query($this->connection, $sql);
            while ($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }
            return $data;
        }
         
        // Hàm l?y chi ti?t, dùng select theo ID vì nó tr? v? 1 record
        function db_get_row($sql){
            db_connect();

            $result = mysqli_query($this->connection, $sql);
            $row = array();
            if (mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
            }    
            return $row;
        }
         
        // Hàm th?c thi câu truy  v?n insert, update, delete
        function db_execute($sql){
            //self::db_connect();
            $this->connection->set_charset('UTF-8');

            return mysqli_query($this->connection, $sql);
        }
     }
     
     
     
    
?>