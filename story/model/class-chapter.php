<?php
    class Chapter {
        private $chapter_id;
        private $story_id;
        private $chapter_name;
        private $slug;
        private $content;
        private $description;
        private $status;
        private $create_time;
        private $update_time;
        
        public function getChapter_id(){
    		return $this->chapter_id;
    	}

    	public function setChapter_id($chapter_id){
    		$this->chapter_id = $chapter_id;
    	}
    
    	public function getStory_id(){
    		return $this->story_id;
    	}
    
    	public function setStory_id($story_id){
    		$this->story_id = $story_id;
    	}
    
    	public function getChapter_name(){
    		return $this->chapter_name;
    	}
    
    	public function setChapter_name($chapter_name){
    		$this->chapter_name = $chapter_name;
    	}
    
    	public function getSlug(){
    		return $this->slug;
    	}
    
    	public function setSlug($slug){
    		$this->slug = $slug;
    	}
    
    	public function getContent(){
    		return $this->content;
    	}
    
    	public function setContent($content){
    		$this->content = $content;
    	}
    
    	public function getDescription(){
    		return $this->description;
    	}
    
    	public function setDescription($description){
    		$this->description = $description;
    	}
    
    	public function getStatus(){
    		return $this->status;
    	}
    
    	public function setStatus($status){
    		$this->status = $status;
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
    }
		
?>