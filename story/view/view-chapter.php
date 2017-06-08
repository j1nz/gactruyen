<?php
    require_once( dirname(dirname(dirname(__FILE__))) . '/load.php' );
?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once(ABSPATH .'/include/template/site/header.php'); ?>
    <link rel="stylesheet" href="/include/css/css-manga.css" />
</head>
<body>
	<?php include_once(ABSPATH .'/include/template/site/menu-bar.php'); ?>
    <div class="container">
        <div class="widget">
            <div class="title">
                <a href="<?php echo '/' .$this->function .'/' .$this->obj_category->getSlug() .'/' .$this->obj_story->getSlug();?>">
                    <span><?php echo $this->obj_story->getStory_name();?></span>
                </a>
                <span> » </span>

                <span><?php echo $this->obj_chapter->getChapter_name(); ?></span>

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
			    			<span style="text-transform: uppercase;"><?php echo $this->obj_story->getStatus() ?> </span>
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
                    		<a href="<?php echo $page_previous; ?>" title="">Chương trước</a>
                    	</div>
                    
                    	<div class="pager">
                    		<a href="#" id="table_content" title="">Mục lục</a>
                    	</div>
                    
                    	<div class="pager">
                    		<a href="<?php echo $page_next; ?>" title="">Chương sau</a>
                    	</div>
                    </div>
                    
                    <div class="chapter-title">
                    	<span><?php echo $this->obj_chapter->getChapter_number() .': ' .$this->obj_chapter->getChapter_name();?></span>
                    </div>
                    
                    <div class="content-story" id='content_story'>
                    	<?php echo $this->obj_chapter->getContent(); ?>
                    </div>
                    
                    <div class="chapter-end" >
                        <span>End chapter <?php echo $page_current; ?></span>
                    </div>
                    
                    <div class="chapter-pager">
                    	<div class="pager">
                    		<a href="<?php echo $page_previous; ?>" title="">Chương trước</a>
                    	</div>
                    
                    	<div class="pager">
                    		<a href="#" id="table_content" title="">Mục lục</a>
                    	</div>
                    
                    	<div class="pager">
                    		<a href="<?php echo $page_next; ?>" title="">Chương sau</a>
                    	</div>
                    </div>

		    		<div class="info-story">
		    			
		    			<div class="tags">
		    				<span class="title-info">
		    					<i class="fa fa-tags" aria-hidden="true"></i>
		    					Tags
		    				</span>
		    				<span>
							fjdigjdfjifjgifjgijvijfibjhuidhfbuhfbhnjubnfnbngbifhgiujdfgodfoigujfdoigjoifdjgiodfjgiodfjgifdjgoidjfogijfdojgofdjgoifdjgojdfojgfoijgdojgofjdoijgodifjgodfjgodjfgodjfgodfjgodjfgojfdogjfoijgodjgohuiasiyhkjhdsvjhhfyhdsiuyihvkfh
							</span>
		    			</div>
		    		</div>
		    	</div>
            </div>
        </div>
    
    </div>
    <?php include_once(ABSPATH .'/include/template/site/footer-chapter.php'); ?>
</body>
</html>