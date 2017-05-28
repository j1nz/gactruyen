<?php
    require_once(ABSPATH .'/include/function/loader/class-load-manga.php');
	class Pagination {
        private $total_record;
        private $total_page;
        private $page;
        private $record_per_page = 10;
        private $start;
        
        private $loader;
        
        public function __construct($record_per_page) {
            $this->loader = new LoadManga();
        }
        
        public function paging($pn) {
            $this->page = $pn;
            $this->total_record = $this->loader->get_total_records_table();
            
            $this->total_page = ceil($this->total_record / $this->record_per_page);
            
            
            if ($this->page > $this->total_page){
                $this->page = $this->total_page;
            }
            else if ($this->page < 1){
                $this->page = 1;
            }
            
            if ($this->total_record > $this->record_per_page){
                $this->start = ($this->page - 1) * $this->record_per_page;
                
                
            }
            else {
                
            }
        }

	}
?>