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

        // H�m k?t n?i
        public function db_connect(){
            if (!$connection){
                $connection = mysqli_connect('localhost', 'root', '', 'gactruyen') 
                        or die ('Kh�ng th? k?t n?i CSDL');
                mysqli_set_charset($connection, 'UTF-8');
            }
        }
         
        // H�m ng?t k?t n?i
        function db_close(){

            if ($connection){
                mysqli_close($connection);
            }
        }
         
        // H�m l?y danh s�ch, k?t qu? tr? v? danh s�ch c�c record trong m?t m?ng
        function db_get_list($sql){
            db_connect();

            $data  = array();
            $result = mysqli_query($connection, $sql);
            while ($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }
            return $data;
        }
         
        // H�m l?y chi ti?t, d�ng select theo ID v� n� tr? v? 1 record
        function db_get_row($sql){
            db_connect();

            $result = mysqli_query($connection, $sql);
            $row = array();
            if (mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
            }    
            return $row;
        }
         
        // H�m th?c thi c�u truy  v?n insert, update, delete
        function db_execute($sql){
            db_connect();

            return mysqli_query($connection, $sql);
        }
     }
     
     
     
    
?>