<?php
    require_once (ABSPATH .'/include/function/loader/class-load-manga.php');
    require_once (ABSPATH .'/include/function/loader/class-load-chapter.php');
    require_once (ABSPATH .'/story/model/class-story.php');
    require_once (ABSPATH .'/story/model/class-category.php');
    require_once (ABSPATH .'/story/model/class-chapter.php');

	class ChapterController extends BaseController {
        private static $_instance;
        private $host;
        private $function;
        private $category;
        private $story;
        private $chapter;
        
        private $obj_load_category;
        private $obj_load_chapter;
        private $obj_load_story;
        
        private $obj_story;
        private $obj_chapter;
        private $obj_category;
        
        private $total_chapter;
        
        public function __construct() {
            ob_end_clean();
            $this->obj_load_category = LoadCategory::getInstance();
            $this->obj_load_story = LoadManga::getInstance();
            $this->obj_load_chapter = LoadChapter::getInstance();
        }
        
        public static function getInstance() {
            if (!(self::$_instance instanceof self)) {
                self::$_instance = new self();
            }
            return self::$_instance;
        }
        
        public function redirect() {
            $permalinks = explode('/',$_SERVER['REQUEST_URI']);
            
            $this->host = $permalinks[0];
            $this->function = $permalinks[1];
            
            $this->category = parent::get_param_url($permalinks[2]);
            $this->story = parent::get_param_url($permalinks[3]);
            $this->chapter = parent::get_param_url($permalinks[4]);
            
            $this->obj_story = new Story();
                
            $this->obj_story->setStory_id(self::get_story_id_by_story_slug($this->story));
            

            if ( self::check_chapter_slug ($this->obj_story->getStory_id(), $this->chapter ) ) {
                $this->obj_chapter = new Chapter();
                
                $this->obj_chapter->setChapter_id(self::get_chapter_id_by_chapter_slug($this->obj_story->getStory_id(), $this->chapter));
                
                self::view_chapter();
                exit;
            } else {
                parent::load_404();
                
            }
            
        }
        
        public function check_chapter_slug($story_id, $chapter_slug) {
            $__result = $this->obj_load_chapter->check_chapter_by_slug($story_id, $chapter_slug);
            
            if ($__result == true) {
                return true;
            }
            
            return false;
        }
        
//        public function check_story_slug() {
//            $__result = $this->obj_load_story->check_story_by_slug($this->story, $this->category);
//            
//            if ($__result == true) {
//                return true;
//            }
//            
//            return false;
//            
//        }
        
        public function get_story_id_by_story_slug ($story_slug) {
            $__result = $this->obj_load_story->get_story_by_story_slug($story_slug);
            
            if ($__result == true) {
                return $__result['story_id'];
            }
        }
        
        public function get_chapter_id_by_chapter_slug($story_id, $chapter_slug) {
            $__result = $this->obj_load_chapter->get_chapter_id_by_slug($chapter_slug, $story_id);
            
            if ($__result == true) {
                return $__result['chapter_id'];
            }
        }
        
        public function view_chapter() {
            $this->obj_category = new Category();
            
            $this->total_chapter = $this->obj_load_chapter->get_total_chapter_of_story($this->obj_story->getStory_id());
            
            $__result_chapter = $this->obj_load_chapter->get_chapter_by_id($this->obj_story->getStory_id(), $this->obj_chapter->getChapter_id());
            $this->obj_chapter->setChapter_id($__result_chapter['chapter_id']);
            $this->obj_chapter->setChapter_name($__result_chapter['chapter_name']);
            $this->obj_chapter->setChapter_number($__result_chapter['chapter_number']);
            $this->obj_chapter->setStory_id($__result_chapter['story_id']);
            $this->obj_chapter->setSlug($__result_chapter['slug']);
            $this->obj_chapter->setContent($__result_chapter['content']);
            
            $explode_chap = explode("-", $this->obj_chapter->getSlug());
            
            $next = $explode_chap[1] + 1;
            $previous = $explode_chap[1] - 1;
            
            if ($next > $this->total_chapter) {
                $next = $this->total_chapter;
            }
            if ($previous < 1) {
                $previous = 1;
            }
            
            $page_next = $explode_chap[0] .'-' .$next;
            $page_current = $explode_chap[1];
            $page_previous = $explode_chap[0] .'-' .$previous;
            
            $result_story = $this->obj_load_story->get_story_by_id($this->obj_story->getStory_id());
            $this->obj_story->setStory_name($result_story['story_name']);
            $this->obj_story->setCategory_id($result_story['category_id']);
            $this->obj_story->setAuthor($result_story['author']);
            $this->obj_story->setOther_name($result_story['other_name']);
            $this->obj_story->setView($result_story['view']);
            $this->obj_story->setSlug($result_story['slug']);
            $this->obj_story->setStatus($result_story['status']);
            $this->obj_story->setLike($result_story['like']);
            
            $result_category = $this->obj_load_category->get_category_by_slug($this->category);
            $this->obj_category->setCategory_id($result_category['category_id']);
            $this->obj_category->setCategory_name($result_category['category_name']);
            $this->obj_category->setSlug($result_category['slug']);
            
            include_once (ABSPATH ._STORY_DIR ._VIEW_DIR .'/view-chapter.php');
            
        }
	}
?>