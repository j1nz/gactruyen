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