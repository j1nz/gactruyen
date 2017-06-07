<?php
	class Story {
        private $story_id;
        private $story_name;
        private $category_id;
        private $description;
        private $author;
        private $cover;
        private $other_name;
        private $view;
        private $create_time;
        private $update_time;
        private $slug;
        private $status;
        private $like;
        
        /**
         * Magic method 
         * 
         */
//        public function __get($name) {
//            if (property_exists($this, $name)) {
//                return $this->$name;
//            }
//        }
//        
//        public function __set($name, $value) {
//            if (property_exists($this, $name)) {
//                $this->$name = $value;
//            }
//            
//            return $this;
//        }

    	public function getStory_id(){
    		return $this->story_id;
    	}
    
    	public function setStory_id($story_id){
    		$this->story_id = $story_id;
    	}
    
    	public function getStory_name(){
    		return $this->story_name;
    	}
    
    	public function setStory_name($story_name){
    		$this->story_name = $story_name;
    	}
    
    	public function getCategory_id(){
    		return $this->category_id;
    	}
    
    	public function setCategory_id($category_id){
    		$this->category_id = $category_id;
    	}
    
    	public function getDescription(){
    		return $this->description;
    	}
    
    	public function setDescription($description){
    		$this->description = $description;
    	}
    
    	public function getAuthor(){
    		return $this->author;
    	}
    
    	public function setAuthor($author){
    		$this->author = $author;
    	}
    
    	public function getCover(){
    		return $this->cover;
    	}
    
    	public function setCover($cover){
    		$this->cover = $cover;
    	}
    
    	public function getOther_name(){
    		return $this->other_name;
    	}
    
    	public function setOther_name($other_name){
    		$this->other_name = $other_name;
    	}
    
    	public function getView(){
    		return $this->view;
    	}
    
    	public function setView($view){
    		$this->view = $view;
    	}
    
    	public function getCreate_time(){
    		return $this->create_time;
    	}
    
    	public function setCreate_time($create_time){
    		$this->create_time = $create_time;
    	}
    
    	public function getUpdate_time(){
    		return $this->update_time;
    	}
    
    	public function setUpdate_time($update_time){
    		$this->update_time = $update_time;
    	}
    
    	public function getSlug(){
    		return $this->slug;
    	}
    
    	public function setSlug($slug){
    		$this->slug = $slug;
    	}
    
    	public function getStatus(){
    		return $this->status;
    	}
    
    	public function setStatus($status){
    		$this->status = $status;
    	}
        
        public function getLike(){
    		return $this->like;
    	}
    
    	public function setLike($like){
    		$this->like = $like;
    	}
	}
?>