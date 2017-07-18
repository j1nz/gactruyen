<?php
    require_once( dirname(dirname(dirname(__FILE__))) . '/config.php' );
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
            <a href="<?php echo '/' .$this->function .'/' .$this->obj_category->getSlug();?>">
                <span><?php echo $this->obj_category->getCategory_name();?></span>
            </a>
            <span> » </span>

            <span><?php echo $this->obj_story->getStory_name();?></span>

        </div>
        <input type="hidden" name="storyId" id="storyId" value="<?php echo $this->obj_story->getStory_id() ?>" />
        <input type="hidden" name="chapterId" id="chapterId" value="<?php echo $this->obj_chapter->getChapter_id() ?>" />
        <div class="content">
            <div class="container-field">
	    		<div class="img-cover">
	    			<img src="<?php echo $this->obj_story->getCover();?>" width="180px" height="281px" 
                        alt="<?php echo $this->obj_story->getStory_name() .' - ' .$this->obj_story->getOther_name() .', ' .$this->obj_story->getAuthor();?>" 
                        title="<?php echo $this->obj_story->getStory_name() .' - ' .$this->obj_story->getAuthor();?>">
	    		</div>

	    		<div class="title-story">
	    			<h3><?php echo $this->obj_story->getStory_name();?></h3>
	    		</div>
				
	    		<div class="meta-story">
	    			<div class="status-story">
		    			<h5><?php echo $this->obj_story->getAuthor() ?> </h5>
					</div>
                    <span title="<?php echo 'lượt xem ' .$this->obj_story->getStory_name();?>">
	                    <i class="fa fa-eye" aria-hidden="true"></i>
	                    <?php echo $this->obj_story->getView() ?> 
                    </span>
            		<span title="<?php echo 'lượt like ' .$this->obj_story->getStory_name();?>">
	                    <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
	                    <?php echo $this->obj_story->getLike() ?>  
                    </span>
                    <span title="<?php echo 'tổng số chương của truyện ' .$this->obj_story->getStory_name();?>">
	                    <i class="fa fa-list" aria-hidden="true"></i>
	                    <?php echo $this->total_chapter ?> 
                    </span>
	    		</div>

	    		<div class="content-story" style="border-top: 1px dotted darkslategray;padding-top: 10px;" id='content_story'>
      	             <?php echo $this->obj_chapter->getContent(); ?>
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

    <?php include_once(ABSPATH ._FOOTER_CHAPTER_FILE); ?>
</body>
</html>