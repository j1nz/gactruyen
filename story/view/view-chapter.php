<?php
    //require_once( dirname(dirname(dirname(__FILE__))) . '/load.php' );
?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once(ABSPATH ._HEADER_FILE); ?>
    <link rel="stylesheet" href="/include/css/ex-manga.css" />
    
</head>
<body>
	<?php include_once(ABSPATH ._MENU_BAR_FILE); ?>

    

    <div class="widget">
        <div class="title">
            <a id="a-story" href="<?php echo '/' .$this->function .'/' .$this->obj_category->getSlug() .'/' .$this->obj_story->getSlug();?>">
                <span><?php echo $this->obj_story->getStory_name();?></span>
            </a>
            <span> » </span>

            <span id="chapter_no"><?php echo 'Chương ' .$page_current; ?></span>

        </div>
        
        
        <div class="content">
            <div class="container-field">
	    		
	    		<div class="title-story">
                	<h3><?php echo $this->obj_story->getStory_name();?></h3>
                </div>
                
                <div class="download-story">
                
                </div>
                
                <div class="meta-story">
	    			<div class="status-story">
		    			<i class="fa fa-check-square-o" aria-hidden="true"></i>
		    			<span style="text-transform: uppercase;">
                            <?php echo $this->obj_story->getStatus() ?>
                        </span>
					</div>
                    <span>
	                    <i class="fa fa-eye" aria-hidden="true"></i>
	                    <?php echo $this->obj_story->getView() ?> 
                    </span>
            		<span>
	                    <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
	                    <?php echo $this->obj_story->getLike() ?>  
                    </span>
                    <span>
	                    <i class="fa fa-list" aria-hidden="true"></i>
	                    <?php echo $this->total_chapter ?> 
                    </span>
        
	    		</div>

                <div class="chapter-pager">
                	<div class="pager">
                		<a class="a-prev" href="<?php echo '/' .$this->function .'/' .$this->obj_category->getSlug() .'/' .$this->obj_story->getSlug() .'/' .$page_previous .'/'; ?>" title="">Chương trước</a>
                	</div>
                
                	<div class="pager">
                		<span class="table_content" title="Mục lục <?php echo $this->obj_story->getStory_name();?>">Mục lục</span>
                	</div>
                
                	<div class="pager">
                		<a class="a-next" href="<?php echo '/' .$this->function .'/' .$this->obj_category->getSlug() .'/' .$this->obj_story->getSlug() .'/' .$page_next .'/'; ?>" title="">Chương sau</a>
                	</div>
                </div>
                
                
                
                <div class="view-content" id='content_story'>
                    <?php
                        if ($this->obj_chapter->getContent() == '') {
                            echo '<div class="sc_focus">N?i dung c?a chuong dang du?c c?p nh?p, vui lòng quai l?i sau ^^</div>';
                        } else {
                            echo '<div class="chapter-title">';
                                	echo '<span>';
                                        echo $__result_chapter['chapter_number'] .' ' .$__result_chapter['chapter_name'];
                                    echo '</span>';
                            echo '</div>';
                            echo '<div class="content-story">';
                                echo $this->obj_chapter->getContent();
                            echo '</div>';
                            echo '<div class="chapter-end" ><span>o O o</span></div>';
                        }
                     
                    ?>
                </div>
                
                
                
                <div class="chapter-pager">
                	<div class="pager">
                		<a class="a-prev" href="<?php echo '/' .$this->function .'/' .$this->obj_category->getSlug() .'/' .$this->obj_story->getSlug() .'/' .$page_previous .'/'; ?>" title="">Chương trước</a>
                	</div>
                
                	<div class="pager">
                		<span class="table_content" title="Mục lục <?php echo $this->obj_story->getStory_name();?>">Mục lục</span>
                	</div>
                
                	<div class="pager">
                		<a class="a-next"  href="<?php echo '/' .$this->function .'/' .$this->obj_category->getSlug() .'/' .$this->obj_story->getSlug() .'/' .$page_next .'/'; ?>" title="">Chương sau</a>
                	</div>
                </div>

	    		<div class="info-story">
	    			
	    			<div class="tags">
	    				<span class="title-info">
	    					<i class="fa fa-tags" aria-hidden="true"></i>
	    					Tags
	    				</span>
	    				<span>
						// tag name
						</span>
	    			</div>
	    		</div>
	    	</div>
        </div>
    </div>

    
    <div class="hidden-area" style="display: none;">
        <input type="hidden" name="commonSlug" id="commonSlug" 
            value="<?php echo '/' .$this->function .'/' .$this->obj_category->getSlug() .'/' .$this->obj_story->getSlug() .'/chap-' .$page_current;?>">

        <input type="hidden" name="storyId" id="storyId" value="<?php echo $this->obj_story->getStory_id() ?>" />
        <input type="hidden" name="chapterId" id="chapterId" value="<?php echo $this->obj_chapter->getChapter_id() ?>" />
        <input type="hidden" name="functionSlug" id="functionSlug" value="<?php echo $this->function ?>" />
        <input type="hidden" name="categorySlug" id="categorySlug" value="<?php echo $this->obj_category->getSlug() ?>" />
        <input type="hidden" name="storySlug" id="storySlug" value="<?php echo $this->obj_story->getSlug() ?>" />
        <input type="hidden" name="totalChapter" id="totalChapter" value="<?php echo $this->total_chapter ?> "/>
        <input type="hidden" name="chapterCurrent" id="chapterCurrent" value="<?php echo $page_current ?> "/>
    </div>

    <?php include_once(ABSPATH ._FOOTER_CHAPTER_FILE); ?>
</body>
</html>