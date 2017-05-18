<!DOCTYPE html>
<html>
	<head>
		<?php include_once('header.php'); ?>
	</head>
	<body>
    	<?php include_once('menu-bar.php'); ?>

  		<div class="container">

  			<div class="widget_quote">
				<div class="title"><span>Tr&iacute;ch dẫn hay: </span></div>
				<div class="content"><i>//random quote //</i></div>
  			</div>

		</div>
		<div class="container">
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

			<div class="widget">
				<div class="title">
					<span>Chia sẻ</span>
				</div>
				<div class="news">
					<div class="share">
	                	<a href="smsto:01222558948?body=Hay doc bai viet nay <xt:url>">
	                    	<img src="http://gactruyen.mobie.in/images/icon/sms.png" alt="SMS" />
	                	</a>
	                  	<a title="Đăng lên Google" target="_blank" href="https://www.google.com.vn/bookmarks/mark?op=add&amp;bkmk=<xt:url>&amp;title=$name_bv&amp;annotation=">
	                    	<img src="http://gactruyen.mobie.in/images/icon/gg.png" alt="Google" />
	                	</a>
	                  	<a target="_blank" href="http://link.apps.zing.vn/pro/view/conn/share?u=<xt:url>">
	                    	<img src="http://gactruyen.mobie.in/images/icon/zm.png" alt="Zing" />
	                	</a>
	                  	<a href="http://facebook.com/sharer/sharer.php?u=<xt:url>" target="_blank">
	                    	<img src="http://gactruyen.mobie.in/images/icon/fb.png" alt="Facebook" />
	                	</a>
	                	<a href="http://twitter.com/share?url=<xt:url>" target="_blank">
	                    	<img src="http://gactruyen.mobie.in/images/icon/tt.png" alt="Twitter" />
	                	</a>
	            	</div>
					<div class="bbcode">
						<span>URL</span>
						<textarea id="url" cols="20" rows="1"></textarea>
						<span>BBCode</span>
						<textarea id="bbcode" cols="20" rows="2"></textarea>
					</div>
					
	            	
				</div>
				
			</div>

  		</div>

		////////////////////////
      <?php include_once('footer.php'); ?>
   </body>
</html>