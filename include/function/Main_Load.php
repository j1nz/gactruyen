<?php  
	/** Define ABSPATH as this file's directory */
	if ( ! defined( 'ABSPATH' ) ) {
		define( 'ABSPATH', dirname( __FILE__ ) . '/' );
	}

	if ( file_exists( ABSPATH . '/config.php') ) {

		/** The config file resides in ABSPATH */
		require_once( ABSPATH . '/config.php' );
	} 
?>