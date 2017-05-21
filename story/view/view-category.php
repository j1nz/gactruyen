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
<<<<<<< HEAD
                <a href="<?php echo '/' ?>" >
                    <span>Trang chủ</span>
                </a> » 
                
                <a href="<?php echo ('/' .$this->function .'/' );?>">
                    <span><?php echo ucfirst(strtolower($this->function));?></span>
                </a> » 
                
                <span><?php echo $this->category_name;?></span>
=======
                <a href="<?php echo '/' .$host?>" >
                    <span>Trang chủ</span>
                </a> » 
                
                <a href="<?php echo ('/' .$host .'/' .$action);?>">
                    <span><?php echo ucfirst(strtolower($action));?></span>
                </a> » 
                
                <span><?php echo $category;?></span>
>>>>>>> 83bdfa3deb5bce3b86670b52ecd60bef7ab86c9d
            </div>
            
            <div class="content">
                <span>Dang update thong tin</span>
            </div>
        </div>
    </div>    

    <?php include_once(ABSPATH .'/include/template/site/footer.php'); ?>
</body>
</html>
