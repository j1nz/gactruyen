<?php
	class UriStoryModel {
        private $host;
        private $function;
        private $category;
        private $manga;
        private $chapter;
        private $option;
       
        public function getHost(){
    		return $this->host;
    	}
    
    	public function setHost($host){
    		$this->host = $host;
    	}
    
    	public function getFunction(){
    		return $this->function;
    	}
    
    	public function setFunction($function){
    		$this->function = $function;
    	}
    
    	public function getCategory(){
    		return $this->category;
    	}
    
    	public function setCategory($category){
    		$this->category = $category;
    	}
    
    	public function getManga(){
    		return $this->manga;
    	}
    
    	public function setManga($manga){
    		$this->manga = $manga;
    	}
    
    	public function getChapter(){
    		return $this->chapter;
    	}
    
    	public function setChapter($chapter){
    		$this->chapter = $chapter;
    	}
    
    	public function getOption(){
    		return $this->option;
    	}
    
    	public function setOption($option){
    		$this->option = $option;
    	}
	}
?>