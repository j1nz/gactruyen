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
                </a>
                <span> » </span>

                <span><?php echo $obj_result_function['function_name'];?></span>
                
            </div>
            
            <?php 
                if ($list_category != null) {
                    foreach($list_category as $row) {
                        echo '<div class="list-item">';
                        echo '<img src="/upload/images/icon/item.png" alt="»">';
                        echo '<a rel="dofollow" href="/'.$this->function .'/' .$row['slug'] .'" title="'.$row['category_name'] .'">';
                        echo $row['category_name'];
                        echo '</a>';
                        echo '</div>';
                    }
                } else {
                    echo '<div class="content">';
                    echo 'Chua co category';
                    echo '</div>';
                }
            ?>

            </div>
            
		</div>
    
    </div>
    
	<?php include_once(ABSPATH .'/include/template/site/footer.php'); ?>
</body>
</html>