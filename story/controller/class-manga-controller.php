<?php
    require_once (ABSPATH .'/story/model/class-story.php');
    require_once (ABSPATH .'/include/function/loader/class-load-chapter.php');
    
    
	/**
	 * MangaController
	 * 
	 * @package gactruyen
	 * @author j1nz
	 * @copyright gactruyen.mobie.in
	 * @version 1.1
	 * @access public
	 */
	class MangaController extends BaseController {
	   private static $_instance;
       
       private $host;
       private $function;
       private $category;
       private $manga;
       private $total_chapter;

        private $obj_story;
        private $obj_chapter;
        //object of Load Manga class
        private $loader;
        private $obj_load_chapter;
        private $obj_load_category;
       
        public function __construct() {
           $this->obj_load_category = LoadCategory::getInstance();
           $this->obj_load_chapter = LoadChapter::getInstance();
           $this->loader = LoadManga::getInstance();
        }
        
        public static function getInstance() {
            if (!(self::$_instance instanceof self)) {
                self::$_instance = new self();
            }
            return self::$_instance;
        }

        public function redirect_manga() {
            //get url request
            $permalinks = explode('/',$_SERVER['REQUEST_URI']);
            
            $this->host = $permalinks[0];
            $this->function = $permalinks[1];
            $this->category = $permalinks[2];
            $this->manga = $permalinks[3];
            
            $size = count($permalinks);
            
            $this->manga = parent::get_param_url($permalinks[3]);
            
            if (self::check_link_manga($this->manga, $this->category)) {
                $this->obj_story = new Story();
                $result_story_id = $this->loader->get_story_by_story_slug($this->manga);
                $this->obj_story->setStory_id($result_story_id['story_id']);
                
                // Lay tong so luong chuong cua mot truyen
                $this->total_chapter = $this->obj_load_chapter->get_total_chapter_of_story($this->obj_story->getStory_id());
                
                if ($this->total_chapter == 1) {
                    self::view_content();
                } else {
                    self::load_manga($this->manga, $this->category);
                }
                
            } else {
                parent::load_404();
            }
            
        }
        
        public function check_link_manga($manga, $category) {
            
            // Lấy danh sách link của table story
            $flag_manga = $this->loader->check_story_by_slug($manga, $category);
            
            if ($flag_manga == true) {
                return true;
            } 
            
            return false;
        }
        
        // lay ra story va kiem tra ben trong co chapter nao khong, neu co chapter forward it to class chapter controller
        // neu khong se load len noi dung
        public function load_manga($manga, $category) {
            // Lấy danh sách link của table story
            $flag_manga = $this->loader->check_story_by_slug($manga, $category);
            
            if ($flag_manga == true) {
                self::view_manga();
                //exit;
            }
            
        }
        
        // 23h00 8-6-2017
        public function view_content() {
            $this->obj_category = new Category();
            $obj_chapter = ChapterController::getInstance();
            $this->obj_chapter = new Chapter();
            
            $this->obj_chapter->setChapter_id($obj_chapter->get_chapter_id_by_chapter_slug($this->obj_story->getStory_id(), 'only'));
            
            $__result_chapter = $this->obj_load_chapter->get_chapter_by_id($this->obj_story->getStory_id(), $this->obj_chapter->getChapter_id());
            $this->obj_chapter->setChapter_id($__result_chapter['chapter_id']);
            $this->obj_chapter->setChapter_name($__result_chapter['chapter_name']);
            $this->obj_chapter->setChapter_number($__result_chapter['chapter_number']);
            $this->obj_chapter->setStory_id($__result_chapter['story_id']);
            $this->obj_chapter->setSlug($__result_chapter['slug']);
            $this->obj_chapter->setContent($__result_chapter['content']);

            $result_story = $this->loader->get_story_by_id($this->obj_story->getStory_id());
            $this->obj_story->setStory_name($result_story['story_name']);
            $this->obj_story->setCategory_id($result_story['category_id']);
            $this->obj_story->setAuthor($result_story['author']);
            $this->obj_story->setCover($result_story['cover']);
            $this->obj_story->setOther_name($result_story['other_name']);
            $this->obj_story->setView($result_story['view']);
            $this->obj_story->setSlug($result_story['slug']);
            $this->obj_story->setStatus($result_story['status']);
            $this->obj_story->setLike($result_story['like']);
            
            $result_category = $this->obj_load_category->get_category_by_slug($this->category);
            $this->obj_category->setCategory_id($result_category['category_id']);
            $this->obj_category->setCategory_name($result_category['category_name']);
            $this->obj_category->setSlug($result_category['slug']);
            
            //echo 'content here';
            include_once (ABSPATH ._STORY_DIR ._VIEW_DIR .'/view-only-content.php');
            exit;
        }
        
        // 23h00 8-6-2017
        public function view_manga() {
            //ob_end_flush();
            
            $this->obj_category = new Category();
            
            $result_story = $this->loader->get_story_by_id($this->obj_story->getStory_id());
            $this->obj_story->setStory_name($result_story['story_name']);
            $this->obj_story->setCategory_id($result_story['category_id']);
            $this->obj_story->setDescription($result_story['description']);
            $this->obj_story->setAuthor($result_story['author']);
            $this->obj_story->setCover($result_story['cover']);
            $this->obj_story->setOther_name($result_story['other_name']);
            $this->obj_story->setView($result_story['view']);
            $this->obj_story->setSlug($result_story['slug']);
            $this->obj_story->setStatus($result_story['status']);
            $this->obj_story->setLike($result_story['like']);
            
            $result_category = $this->obj_load_category->get_category_by_slug($this->category);
            $this->obj_category->setCategory_id($result_category['category_id']);
            $this->obj_category->setCategory_name($result_category['category_name']);
            $this->obj_category->setSlug($result_category['slug']);

            // Lay danh sach chuong cua moi truyen
            $list_chapter = $this->obj_load_chapter->get_chapter_of_story($this->obj_story->getStory_id());

            //ob_end_clean();
            //ob_get_clean();
            include_once (ABSPATH ._STORY_DIR ._VIEW_DIR .'/view-manga.php');
            exit;
        }
	}
?>