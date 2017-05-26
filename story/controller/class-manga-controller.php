<?php
    require_once(ABSPATH .'/include/function/loader/class-load-manga.php');
    
	/**
	 * MangaController
	 * 
	 * @package gactruyen
	 * @author lehongphuc
	 * @copyright 2017
	 * @version $Id$
	 * @access public
	 */
	class MangaController extends BaseController {
	   private static $instance;
       
       private $host;
       private $function;
       private $category;
       private $manga;

       private $loader;
       
	   public function __construct() {
	       
                  
           $this->loader = LoadManga::getInstance();
	   }
       
       public function redirect($permalinks) {
            //un-comment when use at localhost, if up to host don't need nesesary'
            //cut the first index of array 
            //array_shift($permalinks);
            
            // host at index 0
            // functrion at index 1
            // category at index 2

            $this->host = $permalinks[0];
            $this->function = $permalinks[1];
            $this->category = $permalinks[2];
            $this->manga = $permalinks[3];
            
            $size = count($permalinks);
            
            if ($size > 4) {
                if ($permalinks[4] != null || $permalinks[4] != '') {
                    
                    $chapter = $permalinks[4];
                    if ($chapter == 'index' || $chapter == 'index.html' || $chapter == 'index.php') {
                        self::check_link_manga($permalinks);
                    } else {
                        echo '<script>alert(' .'"load chapter of manga"'. ')</script>';
                    }
                } else {
                    self::check_link_manga($permalinks);
                }
            } else {
                self::check_link_manga($permalinks);
            }
            
       }
       
       public function check_link_manga($permalinks) {
            
            // Lấy danh sách link của table story
            $flag_manga = $this->loader->check_story_by_slug($permalinks);
            
            if ($flag_manga == true) {
                //require_once (ABSPATH .'/story/model/class-story.php');
                
                echo '<script>alert(' .'"load manga"'. ')</script>';
                //$obj_story = new Story();
//                $obj_story->setStory_id($result_slug_link['story_id']);
//                $obj_story->setStory_name($result_slug_link['story_name']);
//                $obj_story->setSlug($result_slug_link['slug']);
//                
//                var_dump($obj_story);
            } else {
                parent::load_404();
            }
            
       }
       
       // lay ra story va kiem tra ben trong co chapter nao khong, neu co chapter forward it to class chapter controller
       // neu khong se load len noi dung
       public function load_manga($permalinks) {
            
       }
       
       public function view_manga() {
       
       }
	}
?>