    <div class="widget">
        <div class="title">
          <span>Chia sẻ</span>
        </div>
        <div class="news">
          <div class="share">
                <a href="smsto:01222558948?body=Hay doc bai viet nay <xt:url>">
                    <img src="/upload/images/icon/sms.png" alt="SMS" />
                </a>
                  <a title="Đăng lên Google" target="_blank" href="#">
                    <img src="/upload/images/icon/gg.png" alt="Google" />
                </a>
                  <a target="_blank" href="#">
                    <img src="/upload/images/icon/zm.png" alt="Zing" />
                </a>
                  <a href="#" target="_blank">
                    <img src="/upload/images/icon/fb.png" alt="Facebook" />
                </a>
                <a href="#" target="_blank">
                    <img src="/upload/images/icon/tt.png" alt="Twitter" />
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

               		<a rel="author" href="/">
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
               </b> <a href="#" atl="wap tai game">Wap game</a>
            </div>
         </div>

		<div id="widget_quote_fixed">
			<div class="title"><span>//////title quote fixed/////</span></div>
			<div class="content"><span>//////simple is best/////</span></div>
		</div>

         <!--back to top-->
         <div id="go_to_top">
            <img src="/upload/images/icon/back-to-top.png" alt="Lên đầu trang" /><br/>
            <div align="center">
               <a href="javascript:history.go(-1)">
               <img src="/upload/images/icon/previous.png"/>
               </a>

               <a href="/gactruyen/"><img src="/upload/images/icon/icon_home.png"/></a>
            </div>
         </div>

         <script src="/include/js/jquery-2.2.2.js"></script>


         <script type="text/javascript">
			var link = window.location.href;
        	var title = window.document.title;
        	var took = 0.01;
        	var tookParseFloat;
			

			function currentTime(){
				took = took + 0.01;	
				tookParseFloat = parseFloat(took);
				
				//document.getElementById('took').innerHTML = "Took: " + Math.round(tookParseFloat * 1000) / 1000 + " s";
				$('#took').text("Took: " + Math.round(tookParseFloat * 1000) / 1000 + " s");
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