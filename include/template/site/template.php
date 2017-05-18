<?php 

	$css_mystyle = ABSPATH.'public/css/mystyle.css';
	$css_style = ABSPATH.'public/css/style.css';
	$js_jquery = ABSPATH.'public/js/jquery-2.2.2.js';
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include_once(ABSPATH .'header.php'); ?>
	</head>
	<body>
        <?php include_once(ABSPATH .'menu-bar.php'); ?>
        
        <?php include_once(ABSPATH .'body.php') ?>

        <?php include_once(ABSPATH .'footer.php'); ?>
   </body>
</html>