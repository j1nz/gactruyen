<?php
    require_once( dirname( __FILE__ ) . '/config.php' );
    
    require_once (ABSPATH. '/include/function/loader/class-load-auto.php');
    
    $sDirectory     = 'include/function/auto';
    
    $obj_load_autoFile = LoadAutoFile::getInstance();
    
    $dirAF = $obj_load_autoFile->dirAutoFile($sDirectory);
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include_once(ABSPATH ._HEADER_FILE); ?>
	</head>
	<body>
    	<?php include_once(ABSPATH ._MENU_BAR_FILE); ?>

  		<div class="container">
  			<div class="widget_quote">
				<div class="title">
                
                </div>
				<div class="content" style="word-wrap: break-word;">
                    <span style="color: red; font-weight:  bold;">Tr&iacute;ch dẫn hay: </span>
                        <i><?php include_once ($dirAF) ?></i>
                    
                </div>
  			</div>
		</div>

		<div class="widget">
			<div class="title">Thông Tin Cập Nhập</div>
		    <div class="content" >
		    	<span>// update daily</span>
		    	<span>//information.txt</span>
		    </div>

		    <div class="news_ex">
				<span>Các bạn hãy like fanpage để có thể cập nhập truyện nhanh nhất nhé</span>
			  	// display fb like and gg like
			</div>
		</div>
		
		<div class="widget">
			<div class="title">
				<span>Truyện Hay Cập Nhập</span>
			</div>
			<div class="content">
				include /xts/function.xt
				call @filelist $fi=-index;$dir=truyen
			</div>
		</div>

		<div class="widget">
			<div class="title">
				<span>Sự Thật Thú Vị</span>
			</div>
			<div class="content">
				include /xts/function.xt
				call @filelist $fi=-index;$dir=su-that-thu-vi
			</div>
		</div>

		<div class="widget">
			<div class="title">
				<span>Kho Truyện Hay</span>
			</div>
			<div class="content">
				call @chuyenmuc $fi=-*.*;$dir=truyen
				Comment trong HTML/CSS hay trong mã của bất kỳ ngôn ngữ lập trình <br>là điều không thể thiếu giúp các nhà phát triển giải thích ý nghĩa những đoạn mã, giúp người <br>khác dễ dàng đọc và hiểu mã nguồn. Do vậy, bất kỳ code editor nào đều tích hợp những phím<br> tắt để thêm comment một cách nhanh chóng. <br>Với Emmet plugin bạn có thể dễ dàng comment những<br> đoạn mã HTML, thậm chí không cần phải chọn (select) cả đoạn như chúng ta vẫn thường làm.<br> Khi đặt con trỏ vào thẻ HTML hay property của CSS rồi nhấn Shift + Ctrl + / <br>là toàn bộ đoạn mã trong thẻ HTML hay trong property của CSS sẽ thành comment. Và nhấn thêm lần nữa để uncomment. Xem hình dưới để hiểu rõ<br>
				Tổ hợp phím Shift + Ctrl + ` sẽ chuyển cặp thẻ <br> thành và nhấn thêm lần nữa để chuyển ngược lại

				Remove Tag 

				Sử dụng phím tắt Shift + Ctrl + ; sẽ bỏ tag ra khỏi text, ví dụ, nếu bạn muốn bỏ thẻ <br> trong đoạn <br>hello there<br>, chỉ cần đặt con trỏ trong thẻ <br>và nhấn Shift + Ctrl + ; và nhấn thêm lần nữa để thêm các thẻ vừa remove vào nhé.
			</div>			
		</div>

      <?php include_once(ABSPATH ._FOOTER_FILE); ?>
      
   </body>
</html>