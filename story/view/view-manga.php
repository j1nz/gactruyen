<?php
    // require_once( dirname(dirname(dirname(__FILE__))) . '/load.php' );
    /**
     * SEO with title tag
     * @since 2017-06-10 11h33 pm
     * @version 1.0
     */
?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once(ABSPATH ._HEADER_FILE); ?>
    <link rel="stylesheet" href="/include/css/css-manga.css" />
</head>
<body>
	<?php include_once(ABSPATH ._MENU_BAR_FILE); ?>
    <div class="container">
        <div class="widget">
            <div class="title">
                <a href="<?php echo '/' .$this->function .'/' .$this->obj_category->getSlug();?>">
                    <span><?php echo $this->obj_category->getCategory_name();?></span>
                </a>
                <span> » </span>

                <span><?php echo $this->obj_story->getStory_name();?></span>

            </div>
            <div class="content">
                <div class="container-field">
		    		<div class="img-cover">
		    			<img src="<?php echo $this->obj_story->getCover();?>" width="180px" height="281px" 
                            alt="<?php echo $this->obj_story->getStory_name() .' - ' .$this->obj_story->getOther_name() .', ' .$this->obj_story->getAuthor();?>" 
                            title="<?php echo $this->obj_story->getStory_name() .' - ' .$this->obj_story->getAuthor();?>">
		    		</div>

		    		<div class="title-story">
		    			<h3 title="<?php echo $this->obj_story->getStory_name();?>">
                            <?php echo $this->obj_story->getStory_name();?>
                        </h3>
		    		</div>

		    		<div class="author-story">
		    			<h5 title="<?php echo $this->obj_story->getAuthor();?>">
                            <?php echo $this->obj_story->getAuthor() ?>
                        </h5>
		    		</div>
					
		    		<div class="meta-story">
		    			<div class="status-story" title="<?php echo 'status của truyện ' .$this->obj_story->getStory_name();?>">
			    			<i class="fa fa-check-square-o" aria-hidden="true"></i>
			    			<span style="text-transform: uppercase;"><?php echo $this->obj_story->getStatus() ?> </span>
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

		    		<div class="action-story">
		    			<form action="<?php echo '/' .$this->function .'/' .$this->obj_category->getSlug() .'/' .$this->manga .'/chap-1/' ?>" style="display: inline;" method="post">
    		    			<button class="btn btn-lg btn-info" title="<?php echo 'đọc truyện ' .$this->obj_story->getStory_name();?>">
    			    			<i class="fa fa-book" aria-hidden="true">
    			    				<span>Read</span>
    			    			</i>
    		    			</button>
                        </form>

		    			<button class="btn btn-lg btn-plus">
		    				<i class="fa fa-heart-o fa-lg" aria-hidden="true"></i>
		    			</button>
		    		</div>

		    		<div class="description-story">
		    			<span class="title-info" title="<?php echo 'mô tả ' .$this->obj_story->getStory_name();?>">
		    				<i class="fa fa-info-circle" aria-hidden="true"></i>
							Tóm tắt - Mô tả
		    			</span>
		    			<p id="description" style="display: inline;">
		    				<?php echo $this->obj_story->getDescription() ?> 
                        </p>
						<span class="read-more" id='show_more' onclick="show_more_desc();" href="#">View More
						</span>
          				<span class="read-more" id='hide_more' onclick="hide_more_desc();" href="#">Hide More</span>
		    		</div>
                    
		    		<div class="chapter">
                        <span class="title-info" title="<?php echo 'danh sách chương ' .$this->obj_story->getStory_name();?>">
            				<i class="fa fa-bars" aria-hidden="true"></i>
        					Mục lục
            			</span>
		    			
                        <div class="list-chapter">
                        <?php
                            if ($list_chapter != null) {
                               foreach($list_chapter as $row) {
                        ?>
                            <div class="item-chapter">
			    				<div class="chapter-part">
                                    <a href="<?php echo '/' .$this->function .'/' .$this->obj_category->getSlug() .'/' .$this->manga .'/' .$row['slug'] ?>" 
                                        title="<?php echo $row['chapter_number'] .' - ' .$row['chapter_name'] ?>">
                                        <?php echo $row['chapter_number'] ?>
                                    </a>
			    				</div>
			    				<div class="chapter-name">
			    					<a href="<?php echo '/' .$this->function .'/' .$this->obj_category->getSlug() .'/' .$this->manga .'/' .$row['slug'] ?>" 
                                        title="<?php echo $row['chapter_number'] .' - ' .$row['chapter_name'] ?>">
                                        <?php echo $row['chapter_name'] ?>
                                    </a>
			    				</div>
			    			</div>
                        <?php
                                } // end foreach
                            } // end if
                        ?>
		    			</div>

		    			
		    		</div>

		    		<div class="info-story">
		    			
		    			<div class="tags">
		    				<span class="title-info" title="<?php echo 'tag ' .$this->obj_story->getStory_name();?>">
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
    </div>
    <?php include_once(ABSPATH ._FOOTER_MANGA_FILE); ?>
</body>
</html>