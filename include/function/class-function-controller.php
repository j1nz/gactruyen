<?php
    require_once('class-base-controller.php');
    class FunctionController extends BaseController {
        protected $function;
        
        public function __construct() {
            
        }
        
        public function redirect($permalinks) {
            array_shift($permalinks);
            
            $this->host = $permalinks[0];
            $this->function = $permalinks[1];
            
            if ($this->function == 'index' || $this->function == 'index.php' || $this->function == null) {
                parent::load_index($this->host .'/');
                
            } else {
                switch($this->function) {
                    case 'story' :
                        
                        include_once(ABSPATH .'/story/index.php');
                        break;
                        
                    default :
                        parent::load_404();
                        break;
                }
                
            }
        }
        
        
        

    }
?>