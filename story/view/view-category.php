<?php
    require_once( dirname(dirname(dirname(__FILE__))) . '/load.php' );
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
                <a href="<?php echo '/' ?>" >
                    <span>Trang chủ</span>
                </a>
                <span> » </span>
                <a href="<?php echo ('/' .$this->function .'/' );?>">
                    <span><?php echo ucfirst(strtolower($this->function));?></span>
                </a>
                <span> » </span>
                <span><?php echo $obj_category->getCategory_name();?></span>

            </div>
            
            <?php 
                foreach($list_manga as $row) {
                    echo '<div class="list_item">';
                    echo '<img src="http://gactruyen.mobie.in/images/icon/item.png" alt="»">';
                    echo '<a rel="dofollow" href="/'.$this->function .'/' .$obj_category->getSlug() .'/' .$row['slug'] .'" title="'.$row['story_name'] .'">';
                    echo $row['story_name'];
                    echo '</a>';
                    echo '</div>';
                }
            ?>
        </div>
    </div>    

    <?php include_once(ABSPATH .'/include/template/site/footer.php'); ?>
</body>
</html>
