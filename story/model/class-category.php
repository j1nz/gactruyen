<?php
	class Category {
        private $category_id;
        private $category_name;
        private $slug;
       
        public function getCategory_id(){
            return $this->category_id;
    	}
    
    	public function setCategory_id($category_id){
    		$this->category_id = $category_id;
    	}
    
    	public function getCategory_name(){
    		return $this->category_name;
    	}
    
    	public function setCategory_name($category_name){
    		$this->category_name = $category_name;
    	}
    
    	public function getSlug(){
    		return $this->slug;
    	}
    
    	public function setSlug($slug){
    		$this->slug = $slug;
    	}
	}
?>