<?php
    require_once( '/load.php' );
    
    //echo 'HTTP_HOST: '. $_SERVER['HTTP_HOST'].'<br>';
    //echo 'PHP_SELF: '.$_SERVER['PHP_SELF'].'<br>';
    //echo 'DOCUMENT_ROOT: '. $_SERVER['DOCUMENT_ROOT'].'<br>';
    //echo 'HTTP_USER_AGENT: '.$_SERVER['HTTP_USER_AGENT'] .'<br>'; 
    //echo 'HTTP_REFERER: '. $_SERVER['HTTP_REFERER'].'<br>';
    //echo 'REMOTE_ADDR: '. $_SERVER['REMOTE_ADDR'].'<br>';
    //echo 'SCRIPT_FILENAME: '. $_SERVER['SCRIPT_FILENAME'] .'<br>';
    
    $permalinks = explode('/',$_SERVER['REQUEST_URI']);

<<<<<<< HEAD
    if (isset( $permalinks ) ) { 
        
        if (isset($permalinks[1] ) ) {
            require_once(ABSPATH .'/include/function/class-function-controller.php');
        
    		$func = new FunctionController();
            $func->redirect($permalinks);
        } else {
            require(ABSPATH .'/include/function/class-base-controller.php');
            
            $base = new BaseController();
            $base->load_404();
        }
        
=======
    if (isset( $permalinks ) )
	{  
        require_once(ABSPATH .'/include/function/class-function-controller.php');
        
		$func = new FunctionController();
        $func->redirect($permalinks);
>>>>>>> 83bdfa3deb5bce3b86670b52ecd60bef7ab86c9d
    }
          
?>