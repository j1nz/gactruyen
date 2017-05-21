<?php
	if (!defined('ABSPATH')) die ('The request not found');
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
                </a> » 
                
                <span><?php echo ucfirst(strtolower($this->function));?></span>
                
            </div>
            
            <?php 
                while($row = $list_category->fetch()) {
                    echo '<div class="list_item">';
                    echo '<img src="http://gactruyen.mobie.in/images/icon/item.png" alt="»">';
                    echo '<a rel="dofollow" href="/'.$this->function .'/' .$row['slug'] .'" title="'.$row['category_name'] .'">';
                    echo $row['category_name'];
                    echo '</a>';
                    echo '</div>';
                }
            ?>
            

            </div>
            
            
            
            
		</div>
    
    </div>
    
	<?php include_once(ABSPATH .'/include/template/site/footer.php'); ?>
</body>
</html>