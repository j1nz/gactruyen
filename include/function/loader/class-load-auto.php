<?php
	class LoadAutoFile {
        private static $_instance;
        private $directory;
        private $arrFiles;
        private $indexRandom;
        
        public function __construct() {
            
        }
        
        public static function getInstance() {
            if (!(self::$_instance instanceof self)) {
                self::$_instance = new self();
            }
            return self::$_instance;
        }

        public function dirAutoFile($dir) {
            $this->directory = $dir;
            self::getListFiles();
            $this->indexRandom = array_rand($this->arrFiles);
            return $this->arrFiles[$this->indexRandom];
        }
        
        private function getListFiles() {
            $sDirectory     = $this->directory;
            if( is_dir( $sDirectory ) ) 
            {
                $rDir = opendir( $sDirectory );
                
                while( ( $sFile = readdir( $rDir ) ) !== FALSE ) 
                {
                    if( ( $sFile == '.' ) || ( $sFile === '..' ) )
                    {
                        continue;
                    }
                    $this->arrFiles[] = ABSPATH .$sDirectory . '/' . $sFile;
                }
            }

        }
	}
?>