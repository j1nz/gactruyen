<?php
    require_once('class-base-controller.php');
    require_once(ABSPATH .'/include/function/class-story-controller.php');
    require_once(ABSPATH .'/story/model/class-uri-story.php');
    
    class FunctionController extends BaseController {
        private $host;
        private $function;
        private $category;
        private $story;
        private $chapter;
        private $option;
        
        private $size;
        
        private $obj_uri_model;
        private $obj_story_controller;
        
        public function __construct() {
            $this->obj_uri_model = UriStoryModel::getInstance();
            $this->obj_story_controller = StoryController::getInstance();
        }
        
        public function get_param_url($short_url) {
            
            $param_url = explode('?', $short_url);
            
            
            $page_request = $param_url[0];
            
            return $page_request;
        }
        
        
        public function process_manga_link($permalinks) {
            // Ki?m tra và ti?n hành c?t tách parameter ra kh?i url (n?u có)
            $check_category_or_story = self::get_param_url($permalinks[3]);
            
            // Tru?c d?u '?' có ký t? nào không n?u có (khác null) thì vào if
            if ($check_category_or_story != null) {
                if ($check_category_or_story == 'index' || $check_category_or_story == 'index.php'){
                    //self::load_view_category($category_id);
                    $this->obj_story_controller->redirect_story($this->obj_uri_model);
                    exit;
                } else {
                    if ($this->size > 4) {
                        self::process_chapter_link($permalinks);
                        exit;
                    }
                    echo $this->story;
                    echo 'load story';
                    exit;
                }
                
            } else {
                //self::load_view_category($category_id);
                $this->obj_story_controller->redirect_story($this->obj_uri_model);
                exit;
            }
        }
        
        private function process_chapter_link($permalinks) {


            $check_story_or_chapter = self::get_param_url($permalinks[4]);
            
            // Tru?c d?u '?' có ký t? nào không n?u có (khác null) thì vào if
            if ($check_story_or_chapter != null) {
                if ($check_story_or_chapter == 'index' || $check_story_or_chapter == 'index.php'){
                    echo 'index';
                    exit;
                } else {
                    
                    echo $this->chapter;
                    echo 'load chapter';
                    exit;
                }
                
            } else {
                echo $this->story;
                echo 'load story';
                exit;
            }
        }
        
        
        public function redirect_function($permalinks) {

            //cut the first index of array 
            //array_shift($permalinks);
            
            // host at index 0
            // functrion at index 1
            // category at index 2
            
            $this->host = $permalinks[0];
            $this->function = $permalinks[1];
            
            

            if ($this->function == 'index') {
                parent::load_index($this->host);

            } else {
                $this->function = self::get_param_url($this->function);
                
                switch($this->function) {
                    case 'story' :
                        
                        //un-comment when use at localhost, if up to host don't need nesesary'
                        //cut the first index of array 
                        //array_shift($permalinks);
                        
                        // host at index 0
                        // functrion at index 1
                        // category at index 2

                        
                        //$this->story = self::get_param_url($permalinks[3]);
//                        $this->chapter = self::get_param_url($permalinks[4]);
//                        $this->option = self::get_param_url($permalinks[5]);
                            
                        
                        //$this->obj_uri_model->setManga($this->story);
                        $this->category = self::get_param_url($permalinks[2]);
            
                        $this->obj_uri_model->setHost($this->host);
                        $this->obj_uri_model->setFunction($this->function);
                        $this->obj_uri_model->setCategory($this->category);
                        
                        $this->size = count($permalinks);
                        if ($this->size > 3) {
                            $this->story = self::get_param_url($permalinks[3]);
                            self::process_manga_link($permalinks);
                        }

                        $this->obj_story_controller->redirect_story($this->obj_uri_model);

                        break;
                        
                    default :
                        parent::load_404();
                        break;
                }
                
            }
        }
        
        
        
    }
?>