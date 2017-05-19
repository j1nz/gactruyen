<?php
    if (!defined('ABSPATH')) die ('The request not found');
    
    // Gán session (SET)
    function session_set($key, $val){
        $_SESSION[$key] = $val;
    }
     
    // L?y session (GET)
    function session_get($key){
        return (isset($_SESSION[$key])) ? $_SESSION[$key] : false;
    }
     
    // Xóa session (DELETE)
    function session_delete($key){
        if (isset($_SESSION[$key])){
            unset($_SESSION[$key]);
        }
    }

?>