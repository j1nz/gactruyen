<?php
    require_once( dirname(dirname(dirname(__FILE__))) . '/load.php' );
	echo 'total chapter of story: ' .$total_chapter;
?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once(ABSPATH .'/include/template/site/header.php'); ?>
</head>
<body>
	<?php include_once(ABSPATH .'/include/template/site/menu-bar.php'); ?>
    <div class="container">
        <div class="widget">
            <div class="title">
                <a href="<?php echo '/' .$this->function .'/' .$obj_category->getSlug();?>">
                    <span><?php echo $obj_category->getCategory_name();?></span>
                </a>
                <span> » </span>

                <span><?php echo $obj_story->getStory_name();?></span>

            </div>
            <div class="content">
                Cái gì?! Thương Nguyệt quốc đại công chúa bị trộm!

                Nghe nói nàng không chỉ bị giam lỏng, cường hôn,trong sạch mất hết
                
                Nhất là ngay cả tâm đều đem trao hết cho đối phương
                
                Ô…… Nàng cũng không muốn biết thành như vậy đâu
                
                thanh danh của nàng đều bị nam nhân vẻ mặt phong lưu này phá hư hết
                
                Bất quá, nếu đã lỡ nấu cơm thì nấu chín luôn đi
                
                Có lẽ nàng có
            </div>
        </div>
    
    </div>
    <?php include_once(ABSPATH .'/include/template/site/footer.php'); ?>
</body>
</html>