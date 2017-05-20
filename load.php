<?php  
	/** Define ABSPATH as this file's directory */
	if ( ! defined( 'ABSPATH' ) ) {
		define( 'ABSPATH', dirname(__FILE__) . '/' );

		$css_mystyle = '/gactruyen/include/css/mystyle.css';
		$css_style = '/gactruyen/include/css/style.css';
		$js_jquery = '/gactruyen/include/js/jquery-2.2.2.js';
	}

	if ( file_exists( ABSPATH . '/config.php' ) ) {
		/** The config file resides in ABSPATH */
		require_once( ABSPATH . '/config.php' );
	} 

	define('PATH_SITE', ABSPATH .'/site');
	
?>