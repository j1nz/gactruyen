<?php
    require_once( dirname(dirname(__FILE__)) . '/load.php' );

    //echo 'HTTP_HOST: '. $_SERVER['HTTP_HOST'].'<br>';
//    echo 'PHP_SELF: '.$_SERVER['PHP_SELF'].'<br>';
//    echo 'DOCUMENT_ROOT: '. $_SERVER['DOCUMENT_ROOT'].'<br>';
//    echo 'HTTP_USER_AGENT: '.$_SERVER['HTTP_USER_AGENT'] .'<br>'; 
//    echo 'HTTP_REFERER: '. $_SERVER['HTTP_REFERER'].'<br>';
//    echo 'REMOTE_ADDR: '. $_SERVER['REMOTE_ADDR'].'<br>';
//    echo 'SCRIPT_FILENAME: '. $_SERVER['SCRIPT_FILENAME'] .'<br>';
    
    $permalinks = explode('/',$_SERVER['REQUEST_URI']);

    if (isset( $permalinks ) )
	{  
        require_once(ABSPATH .'/include/function/class-function-controller.php');
        
		$func = new FunctionController();
        $func->redirect_function($permalinks);
    }
          
?>