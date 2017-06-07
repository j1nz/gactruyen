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
                <a href="<?php echo '/' .$this->function .'/' .$this->obj_category->getSlug();?>">
                    <span><?php echo $this->obj_category->getCategory_name();?></span>
                </a>
                <span> » </span>

                <span><?php echo $this->obj_story->getStory_name();?></span>

            </div>
            <div class="content">
                <div class="container-field">
		    		<div class="img-cover">
		    			<img src="/upload/images/cover/truyen-ngan/until_you.jpg" width="180px" height="281px" alt="anh bia">
		    		</div>

		    		<div class="title-story">
		    			<h3><?php echo $this->obj_story->getStory_name();?></h3>
		    		</div>

		    		<div class="author-story">
		    			<h5><?php echo $this->obj_story->getAuthor() ?> </h5>
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

		    		<div class="action-story">
		    			
		    			<button class="btn btn-lg btn-info">
			    			<i class="fa fa-book" aria-hidden="true">
			    				<span>Read</span>
			    			</i>
		    			</button>

		    			<button class="btn btn-lg btn-plus">
		    				<i class="fa fa-heart-o fa-lg" aria-hidden="true"></i>
		    			</button>
		    		</div>

		    		<div class="description-story">
		    			<span class="title-info">
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
                        <span class="title-info">
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
                                    <a href="<?php echo '/' .$this->function .'/' .$this->obj_category->getSlug() .'/' .$this->manga .'/' .$row['slug'] ?>">
                                        <?php echo $row['chapter_number'] ?>
                                    </a>
			    				</div>
			    				<div class="chapter-name">
			    					<a href="<?php echo '/' .$this->function .'/' .$this->obj_category->getSlug() .'/' .$this->manga .'/' .$row['slug'] ?>">
                                        <?php echo $row['chapter_name'] ?>
                                    </a>
			    				</div>
			    			</div>
                        <?php
                                } 
                            } 
                        ?>
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
    <?php include_once(ABSPATH .'/include/template/site/footer-manga.php'); ?>
</body>
</html>