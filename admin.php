<?php 
	// Đường dẫn tới hệ  thống
	define('PATH_SYSTEM', __DIR__ .'/system');
	define('PATH_ADMIN', __DIR__ . '/admin');
	 
	// Lấy thông số cấu hình
	require (PATH_SYSTEM . '/config/config.php');

	// Require file
	require_once PATH_SYSTEM . '/core/Main_Common.php';

	$common = new Main_Common();
	$common->load();
?>