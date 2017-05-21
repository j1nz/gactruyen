<?php
    require_once('class-base-controller.php');
    class FunctionController extends BaseController {
        protected $function;
        
        public function __construct() {
            
        }
        
        public function redirect($permalinks) {
<<<<<<< HEAD
            //cut the first index of array 
            //array_shift($permalinks);
            
            // host at index 0
            // functrion at index 1
            // category at index 2
=======
            array_shift($permalinks);
>>>>>>> 83bdfa3deb5bce3b86670b52ecd60bef7ab86c9d
            
            $this->host = $permalinks[0];
            $this->function = $permalinks[1];
            
<<<<<<< HEAD
            if ($this->function == 'index' || $this->function == null) {
                parent::load_index($this->host);
=======
            if ($this->function == 'index' || $this->function == 'index.php' || $this->function == null) {
                parent::load_index($this->host .'/');
>>>>>>> 83bdfa3deb5bce3b86670b52ecd60bef7ab86c9d
                
            } else {
                switch($this->function) {
                    case 'story' :
<<<<<<< HEAD
                        //include_once(ABSPATH .'/story/index.php');
                        
                        $permalinks = explode('/',$_SERVER['REQUEST_URI']);

                        if (isset( $permalinks ) )
                    	{  
                            require_once(ABSPATH .'/include/function/class-story-controller.php');
                            
                    		$story_controller = new StoryController();
                            $story_controller->redirect($permalinks);
                        }
=======
                        
                        include_once(ABSPATH .'/story/index.php');
>>>>>>> 83bdfa3deb5bce3b86670b52ecd60bef7ab86c9d
                        break;
                        
                    default :
                        parent::load_404();
                        break;
                }
                
            }
        }
        
        
        

    }
?>