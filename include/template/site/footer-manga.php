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
            <!-- <img src="http://gactruyen.mobie.in/images/icon/back-to-top.png" alt="Lên đầu trang" /><br/> -->
            <i class="fa fa-chevron-circle-up fa-3x" aria-hidden="true"></i>
            <!-- <div align="center">
               <a href="javascript:history.go(-1)">
               <img src="http://gactruyen.mobie.in/images/icon/previous.png"/>
               </a>
               <a href="/"><img src="http://gactruyen.mobie.in/images/icon/icon_home.png"/></a>
            </div> -->
         </div>

         //include setting modal

        <script src="/include/js/jquery-2.2.2.js"></script>
        <script src="/include/js/jscolor.js"></script>
        <script src="/include/js/change_font_size.js"></script>
        <script src="/include/js/view_manga.js"></script>
        <!-- <script type="text/javascript" src="js/jquery.fontselector.js"></script> -->

        <script type="text/javascript">
			var link = window.location.href;
        	var title = window.document.title;
        	var took = 0.01;
        	var tookParseFloat;

			function fn_change_font(){
				var new_font = $('#changeFont').val();

				$('#test-change-size').css({'font-family' : new_font});
			}

        	function getScrollBody() {
				var sc = $('body').scrollTop();

				console.log('Scroll is: ' +sc);
        	}
			
			function change_font_family(font){

			}

			function change_color_background(jscolor) {
			    // 'jscolor' instance can be used as a string
			    document.getElementById('test-change-size').style.backgroundColor = '#' + jscolor;
			}

			function change_color_foreground(jscolor) {
			    // 'jscolor' instance can be used as a string
			    document.getElementById('test-change-size').style.color = '#' + jscolor;
			}



			function hide_setting() {
				$('#button_setting').fadeOut("slow");
			}

			$('#resetBackground').click(function () {

			    change_color_background('fff');
			    $('#jscolor-back-color').val('FFFFFF');
			});

			$('#resetForeground').click(function () {

			    change_color_foreground('222');
			    $('#jscolor-fore-color').val('222222');
			});
			

            $(function() {
            	
            	/*$(document).mousewheel( function(e, delta){
					if (delta == 0) {
						time_show = setTimeout('hide_setting()', 2000);
					}

					if (delta == 1) {

						time_show = setTimeout('show_setting()', 1000);
					}
				});*/

            	$('#widget_quote_fixed').hide();

            	$('.setting-modal').hide();

              	$('#url').text(link);
              	$('#bbcode').text("[" +link + "] [" +title+ "]");
				
				var timeStamp = new Date().getTime();
				var iScrollPos = 0;
	            $(window).scroll(function () {
					var timeNow = new Date().getTime();
					var positionScroll = $(this).scrollTop();


					//chặn scroll liên tục
				    if (timeNow - timeStamp < 500) {
				    	timeStamp = timeNow;
				    	return;
				    } else {
				    	timeStamp = timeNow;
					}

	                if ($(this).scrollTop() > 50) {

	                	if (positionScroll < iScrollPos) {
						    // Hành động scroll lên
						    $('#button_setting').fadeIn();
						    console.log('scroll up');
						    console.log('scroll: ' +positionScroll);
						    console.log('point: ' +iScrollPos);
						} else {
							console.log('scroll down');
						    console.log('scroll: ' +positionScroll);
						    console.log('point: ' +iScrollPos);
						}
						iScrollPos = positionScroll;

	                	
	                	$('#go_to_top').fadeIn();
	                	$('#widget_quote_fixed').fadeIn();

	                	setTimeout('hide_setting()', 1500);
	                }
	                  
	                else {
	                	$('#widget_quote_fixed').fadeOut();
	                  	$('#go_to_top').fadeOut();
	                  	hide_setting();
	                 
	                }
	            });

				$('#button_setting').click(function () {
	            	console.log('open setting read mode');
	            	$('.setting-modal').show();
	            		
	            });
	            

	            $('#close-modal').click(function () {
	            	console.log('close setting read mode');
	            	$('.setting-modal').hide();
	            
	            });

	            $('#go_to_top').click(function () {
	            	$('body, html').animate({
	            		scrollTop: 0
	            	}, 'slow');
	            });
            });
         </script>
      </footer>