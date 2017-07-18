<?php
    if (!defined('ABSPATH')) die ('The request not found');
    
	class LoadAjax extends BaseController {
        private static $_instance;
        private $obj_load_chapter;
        private $link;
        
        public function __construct() {
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
            
            $functionSlug = isset($_POST['functionSlug']) ? $_POST['functionSlug'] : null;
            $categorySlug = isset($_POST['categorySlug']) ? $_POST['categorySlug'] : null;
            $storySlug = isset($_POST['storySlug']) ? $_POST['storySlug'] : null;
            
            $this->link = '/' . $functionSlug . '/' . $categorySlug . '/' . $storySlug . '/';
            
            if (parent::get_param_url($permalinks[3]) == 'chapter') {
                $story_id = isset($_POST['storyId']) ? (int)$_POST['storyId'] : false;
                
                $list_chapter = $this->obj_load_chapter->get_chapter_of_story($story_id);
                self::display_chapter_list($list_chapter);
            }
            if (parent::get_param_url($permalinks[3]) == 'story') {
                $story_id = isset($_POST['storyId']) ? (int)$_POST['storyId'] : false;
                $index_chap = isset($_POST['indexChap']) ? (int)$_POST['indexChap'] : false;
                $chapter_id = isset($_POST['chapterId']) ? (int)$_POST['chapterId'] : false;
                
                $__result_chapter_content = $this->obj_load_chapter->get_content_chapter_by_id($story_id, $index_chap);
                $__result_chapter = $this->obj_load_chapter->get_chapter_by_id($story_id, $chapter_id);
                
                self::display_content_story ($__result_chapter, $__result_chapter_content);
            }
            
            if (parent::get_param_url($permalinks[3]) == 'ipclient') {
                $ipaddress = '';
                if (isset($_SERVER['HTTP_CLIENT_IP']))
                    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
                else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
                    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
                else if(isset($_SERVER['HTTP_X_FORWARDED']))
                    $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
                else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
                    $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
                else if(isset($_SERVER['HTTP_FORWARDED']))
                    $ipaddress = $_SERVER['HTTP_FORWARDED'];
                else if(isset($_SERVER['REMOTE_ADDR']))
                    $ipaddress = $_SERVER['REMOTE_ADDR'];
                else
                    $ipaddress = 'UNKNOWN';
                echo $ipaddress;
            }
            
            else {
                exit;
            }
        }
        
        private function display_content_story ($__result_chapter, $__result_chapter_content) {
            if ( $__result_chapter_content['content'] == '') {
                echo '<div class="sc_focus">N?i dung c?a chuong dang du?c c?p nh?p, vui lòng quai l?i sau ^^</div>';
            } else {
                $regex_content = '/(?:\r\n|\r|\n)/';
                echo '<input type="hidden" id="chap_nnumber" value="'.$__result_chapter['chapter_number'] .'" />';
                echo '<input type="hidden" id="chap_name" value="'.$__result_chapter['chapter_name'] .'" />';
                echo '<div class="chapter-title">';
                    	echo '<span>';
                            echo $__result_chapter['chapter_number'] .' ' .$__result_chapter['chapter_name'];
                        echo '</span>';
                echo '</div>';
                echo '<div class="content-story">';
                    $story_id = isset($_POST['storyId']) ? (int)$_POST['storyId'] : false;
                    if ($story_id != 2) 
                        echo preg_replace($regex_content, '<br/>', $__result_chapter_content['content']);
                    else
                        echo $__result_chapter_content['content'];
                echo '</div>';
            }
        }
        
        public function display_chapter_list($list_chapter) {
            if ($list_chapter != null) {
                echo '<div class="list-chapter">';
                foreach($list_chapter as $row) {
                    echo '<div class="item-chapter">';
                        echo '<div class="chapter-part">';
                            echo '<a href="' .$this->link .$row['slug'] .'" title="">';
                                        echo $row['chapter_number'];
                            echo '</a>';
                        echo '</div>';
		    			echo '<div class="chapter-name">';
		    					echo '<a href="' .$this->link .$row['slug'] .'" title="">';
                                        echo $row['chapter_name'];
                            echo '</a>';
		    				echo '</div>';
		    			echo '</div>';

                            } // end foreach
                echo '</div>';
            } // end if
            else {
                exit;    
            }
            
        }
	}
?>