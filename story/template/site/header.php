<?php 
    if ( ! defined('ABSPATH')) die ('Bad requested!');
    $actual_link = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' .$_SERVER['HTTP_HOST'] .$_SERVER['REQUEST_URI'];
?>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="google-site-verification" content="dy_GrayTjOC78BsvrHj_uiKKke8OPJqrTjncnQ-vssg" />
    <meta name="Language" content="vietnamese" />
    <meta name="robots" content="noodp,index,follow" />
    <meta name="revisit-after" content="1 days" />
    <meta name="Googlebot" content="follow" />

    <title>GacTruyen.Mobie.In</title>

    <link rel="author" href="#" />
    <link rel="alternate" media="handheld" href="<?php echo $actual_link?>" />
    <link rel="canonical" href="<?php echo $actual_link?>" />
    <link rel="shortcut icon" href="/upload/images/icon/bieu-tuong-wap.ico" type="image/x-icon" />

    <!-- include css file -->
    <link rel="stylesheet" href="/include/css/bootstrap.css" />
    <link rel="stylesheet" href="/include/css/ex-filelist.css" />
    <link rel="stylesheet" href="/include/css/ex-public.css" />
    <link rel="stylesheet" href="/include/css/ex-modal-setting.css" />
    <link rel="stylesheet" href="/include/css/font-awesome.css" />
    <link rel="stylesheet" href="/include/css/ex-navigator.css" />