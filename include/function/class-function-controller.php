<?php
    require_once('class-base-controller.php');
    class FunctionController extends BaseController {
        protected $function;
        
        public function __construct() {
            
        }
        
        public function get_param_url($short_url) {
            
            $param_url = explode('?', $short_url);
            
            
            $page_request = $param_url[0];
            
            return $page_request;
        }
        
        public function redirect($permalinks) {

            //cut the first index of array 
            //array_shift($permalinks);
            
            // host at index 0
            // functrion at index 1
            // category at index 2

            
            $this->host = $permalinks[0];
            $this->function = $permalinks[1];
            

            if ($this->function == 'index' || $this->function == null) {
                parent::load_index($this->host);

            } else {
                $this->function = self::get_param_url($this->function);
                
                switch($this->function) {
                    case 'story' :
                        //include_once(ABSPATH .'/story/index.php');
                        
                        $permalinks = explode('/',$_SERVER['REQUEST_URI']);

                        if (isset( $permalinks ) )
                    	{  
                            require_once(ABSPATH .'/include/function/class-story-controller.php');
                            
                    		$story_controller = new StoryController();
                            $story_controller->redirect($permalinks);
                        }

                        break;
                        
                    default :
                        parent::load_404();
                        break;
                }
                
            }
        }
        
    }
?>