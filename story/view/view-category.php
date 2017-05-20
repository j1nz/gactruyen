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
                <a href="<?php echo '/' .$host?>" >
                    <span>Trang chủ</span>
                </a> » 
                
                <a href="<?php echo ('/' .$host .'/' .$action);?>">
                    <span><?php echo ucfirst(strtolower($action));?></span>
                </a> » 
                
                <span><?php echo $category;?></span>
            </div>
            
            <div class="content">
                <span>Dang update thong tin</span>
            </div>
        </div>
    </div>    

    <?php include_once(ABSPATH .'/include/template/site/footer.php'); ?>
</body>
</html>
