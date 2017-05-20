<?php
    if (!defined('ABSPATH')) die ('The request not found');

     class Connection {
        // Bi?n luu tr? k?t n?i
        protected $connection = null;
        
        protected $instance = null;
        
        public function __construct() {
            
        }
        
        public function getInstance() {
            if ($instance == null) {
                $instance = new Connection();
            }
            
            return $instance;
        }

        // Hàm k?t n?i
        public function db_connect(){
            if (!$connection){
                require_once(ABSPATH, '/load.php')
                
                $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
                        or die ('Không th? k?t n?i CSDL');
                mysqli_set_charset($connection, 'UTF-8');
            }
        }
         
        // Hàm ng?t k?t n?i
        function db_close(){

            if ($connection){
                mysqli_close($connection);
            }
        }
         
        // Hàm l?y danh sách, k?t qu? tr? v? danh sách các record trong m?t m?ng
        function db_get_list($sql){
            db_connect();

            $data  = array();
            $result = mysqli_query($connection, $sql);
            while ($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }
            return $data;
        }
         
        // Hàm l?y chi ti?t, dùng select theo ID vì nó tr? v? 1 record
        function db_get_row($sql){
            db_connect();

            $result = mysqli_query($connection, $sql);
            $row = array();
            if (mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
            }    
            return $row;
        }
         
        // Hàm th?c thi câu truy  v?n insert, update, delete
        function db_execute($sql){
            db_connect();

            return mysqli_query($connection, $sql);
        }
     }
     
     
     
    
?>