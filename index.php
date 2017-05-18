<?php 
	define('PATH_PUBLIC', 'public');

	$css_mystyle = PATH_PUBLIC.'/css/mystyle.css';
	$css_style = PATH_PUBLIC.'/css/style.css';
	$js_jquery = PATH_PUBLIC.'/js/jquery-2.2.2.js';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" href="<?php echo $css_style; ?>">
		<link rel="stylesheet" href="<?php echo $css_mystyle; ?>">
      	<title>GacTruyen.Mobie.In</title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  	<meta name="viewport" content="width=device-width,initial-scale=1" />
      	<meta name="google-site-verification" content="dy_GrayTjOC78BsvrHj_uiKKke8OPJqrTjncnQ-vssg" />
      	<meta name="Language" content="vietnamese" />
      	<meta name="robots" content="noodp,index,follow" />
    	<meta name="revisit-after" content="1 days" />
      	<meta name="Googlebot" content="follow" />
      	<link rel="author" href="https://plus.google.com/u/0/107012086250607128099" />
      	<link rel="alternate" media="handheld" href="http://gactruyen.mobie.in" />
      	<link rel="canonical" href="http://gactruyen.mobie.in" />
      	<link rel="shortcut icon" href="http://www.zumbo.mobie.in/images/icon/bieu-tuong-wap.ico" type="image/x-icon" />
      	

	</head>
	<body>
    	<div class="container">
        	<a href="/">
	            <div class="header" align="center">
	               <img src="http://gactruyen.mobie.in/images/gactruyen.mobie.in.png" alt="Wap đọc truyện, sách hay miễn phí cập nhập mỗi ngày"/>
	            </div>
	        </a>
	        <div class="navbar">
	        	<a title="Thế giới giải trí, đọc truyện hay miễn phí, sách hay cho bạn" href="/">
		            <span class="item selected">
		            <b><img src="http://gactruyen.mobie.in/images/icon/home.png" alt="HOME"/>HOME</b>
		            </span>
	            </a>
	            <a title="Blog Radio cập nhật" href="/blog">
		            <span class="item">
		            <b>BLOG</b>
		            </span>
	            </a>
	            <a title="Truyện hay" href="/truyen">
		            <span class="item">
		            <b>TRUYỆN</b>
		            </span>
	            </a>
	            <a title="Game Hay" href="http://gactruyen.mobie.in/game">
		            <span class="item">
		            <b>GAME</b>
		            </span>
	            </a>
	            <a title="Chat kết bạn" href="/chat/index.php">
		            <span class="item">
		            <b>CHAT</b>
		            </span>
	            </a>
	        </div>
	        <div class="mainstory">
	            <div class="rmenu" align="center">
	               <form action="http://google.com/search" method="get">
		                <input type="hidden" name="sitesearch" value="www.gactruyen.mobie.in"/>
		                <input type="text" name="q" value="Tìm trong trang..." size=""/>
		                <input type="submit" value="Tìm"/>
	               </form>
	            </div>
	        </div>
      	</div>

      	///////////////////////////

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
      <footer>
         <div class="container">
            
            <div class="footer" align="center">
               
            	<a href="/gioi-thieu.html" >
               	<span class="footer_title">Giới thiệu</span>
               	</a>

                <span> | </span> 

            	<a href="/dieu-khoan-su-dung.html" >
                	<span class="footer_title">Điều khoản sử dụng</span>
                </a>

                <span> | </span> 

                <a href="/lien-he.html" >
                	<span class="footer_title">Liên hệ</span>
                </a>

                <div class="footer_copyright">
                	<span>Copyright ©2014 by </span>

               		<a rel="author" href="https://www.google.com/">
               			<span>Gác Truyện™</span>
               		</a>

					<div class="footer_took">
						<span id="took">Took: 0.1 s</span>
					</div>
                </div>
               
            </div>
         </div>
         <div class="container">
            <div class="new" style color="red" atl="lien ket">
               <b>Liên kết wap:
               </b> <a href="http://www.zumbo.mobie.in" atl="wap tai game">Wap game</a>
            </div>
         </div>

		<div id="widget_quote_fixed">
			<div class="title"><span>//////title quote fixed/////</span></div>
			<div class="content"><span>//////simple is best/////</span></div>
		</div>

         <!--back to top-->
         <div id="go_to_top">
            <img src="http://gactruyen.mobie.in/images/icon/back-to-top.png" alt="Lên đầu trang" /><br/>
            <div align="center">
               <a href="javascript:history.go(-1)">
               <img src="http://gactruyen.mobie.in/images/icon/previous.png"/>
               </a>
               <a href="/"><img src="http://gactruyen.mobie.in/images/icon/icon_home.png"/></a>
            </div>
         </div>

         <script src="<?php echo $js_jquery; ?>"></script>

         <script type="text/javascript">
			var link = window.location.href;
        	var title = window.document.title;
        	var took = 0.01;
        	var tookParseFloat;
			

			function currentTime(){
				took = took + 0.01;	
				tookParseFloat = parseFloat(took);
				
				document.getElementById('took').innerHTML = "Took: " + Math.round(tookParseFloat * 1000) / 1000 + " s";
				//$('#took').text("");
			}

			var loopTime = setInterval("currentTime()", 10);

			$(window).bind("load", function() { 
				clearInterval(loopTime);
			});

            $(function() {
            	
            	$('#widget_quote_fixed').hide();

              	$('#url').text(link);
              	$('#bbcode').text("[" +link + "] [" +title+ "]");

				
				
	            $(window).scroll(function () {

	                if ($(this).scrollTop() > 50) {
	                	$('#go_to_top').fadeIn();
	                	$('#widget_quote_fixed').fadeIn();
	                }
	                  
	                else {
	                	$('#widget_quote_fixed').fadeOut();
	                  	$('#go_to_top').fadeOut();
	                }
	            });

	            $('#go_to_top').click(function () {
	            	$('body, html').animate({
	            		scrollTop: 0
	            	}, 'slow');
	            });
            });
         </script>
         <!--back to top-->
      </footer>
   </body>
</html>