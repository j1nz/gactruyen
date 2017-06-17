<?php
    /**
     * define static variable
     * define information of database
     */
     
    if ( ! defined( 'ABSPATH' ) ) {
		define( 'ABSPATH', dirname(__FILE__) . '/' );
	}
    
    /**
     * Config for story directory
     * @since 2017-06-17
     * @author j1nz
     * @version 1.0
     */
     
    // config folder
    define ('_INCLUDE_DIR', '/include');
    define ('_FUNCTION_DIR', '/function');
    
    define ('_STORY_DIR', '/story');
    define ('_VIEW_DIR', '/view');
    define ('_CONTROLLER_DIR', '/controller');
    define ('_MODEL_DIR', '/model');
    define ('_TEMPLATE_DIR', '/template');
    define ('_SITE_DIR', '/site');
    
    // config file
    define('_HEADER_FILE', _STORY_DIR ._TEMPLATE_DIR ._SITE_DIR .'/header.php');
    define('_FOOTER_FILE', _STORY_DIR ._TEMPLATE_DIR ._SITE_DIR .'/footer.php');
    define('_MENU_BAR_FILE', _STORY_DIR ._TEMPLATE_DIR ._SITE_DIR .'/menu-bar.php');
    define('_HEADER_MANGA_FILE', _STORY_DIR ._TEMPLATE_DIR ._SITE_DIR .'/header-manga.php');
    define('_FOOTER_CHAPTER_FILE', _STORY_DIR ._TEMPLATE_DIR ._SITE_DIR .'/footer-chapter.php');
    define('_FOOTER_MANGA_FILE', _STORY_DIR ._TEMPLATE_DIR ._SITE_DIR .'/footer-manga.php');
    define('_SETTING_MODAL_FILE', _STORY_DIR ._TEMPLATE_DIR ._SITE_DIR .'/setting-modal.php');
    /**
     * end config for story
     */
    
	// information database
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'story_db');
?>