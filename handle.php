<?php
    /**
     * Handle url request (making url friendly)
     * Config forward at .htaccess
     * When server not found file or directory on project, server will forward all request to handle.php
     * 
     * @author j1nz
     * @since 2017-05-20
     * @version 1.1
     */

    if ( file_exists('config.php' ) ) {
		require ( '/config.php' );
	} else {
	   exit;
	}

    // Get current link
    $permalinks = explode('/',$_SERVER['REQUEST_URI']);

    if (isset( $permalinks ) ) {         
        if (isset($permalinks[1] ) ) {
            require_once(ABSPATH ._INCLUDE_DIR ._FUNCTION_DIR .'/class-function-controller.php');
        
    		$func = FunctionController::getInstance();
            $func->redirect_function($permalinks);
        } else {
            require(ABSPATH ._INCLUDE_DIR ._FUNCTION_DIR .'/class-base-controller.php');
            
            $base = BaseController::getInstance();
            $base->load_404();
        }
    } 
?>