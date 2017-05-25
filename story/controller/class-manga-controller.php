<?php
	/**
	 * MangaController
	 * 
	 * @package gactruyen
	 * @author lehongphuc
	 * @copyright 2017
	 * @version $Id$
	 * @access public
	 */
	class MangaController extends BaseController {
	   public function __construct() {
	       require_once(ABSPATH .'/include/function/loader/class-load-manga.php');
                  
           $this->loader = LoadManga::getInstance();
	   }
       
       public function redirect($permalinks) {
            //un-comment when use at localhost, if up to host don't need nesesary'
            //cut the first index of array 
            //array_shift($permalinks);
            
            // host at index 0
            // functrion at index 1
            // category at index 2

            $host = $permalinks[0];
            $function = $permalinks[1];
            $category = $permalinks[2];
            $manga = $permalinks[3];
            
            $size = count($permalinks);
            
            if ($size > 4) {
                if ($permalinks[4] != null || $permalinks[4] != '') {
                    echo '<script>alert(' .'"load chapter of manga"'. ')</script>';
                } else {
                    if ($permalinks[4] == 'index' || $permalinks[4] == null) {
                        echo '<script>alert(' .'"index of manga"'. ')</script>';
                    } else {
                        self::process_manga($permalinks);
                    }
                }
            } else {
                self::process_manga($permalinks);
            }
            
       }
       
       public function process_manga($permalinks) {
            
            echo '<script>alert(' .'"load content include chapter of manga"'. ')</script>';
            // Lấy danh sách link của
            //$list_category_slug = $this->loader->load_category_slug();
            
            /**
             * Kiểm tra url của người dùng có tồn tại thể loại đó không
             * 
             */
            //while ($item = $list_category_slug->fetch() ) {
                //if ($this->category == $item['slug']) {
                    
                    // Nếu có category người dùng yêu cầu, thì sẽ gọi hàm load category và exit chương trình
                    //self::load_category($item['category_id'], $permalinks);
                    //exit;
                //}
            //}
            
            //Nếu không có thì sẽ gọi hàm lỗi 404
            //parent::load_404();
            
       }
        
       public function load_manga($permalinks) {
            
       }
       
       public function view_manga() {
       
       }
	}
?>