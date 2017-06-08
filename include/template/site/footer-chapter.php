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
		

		<div id="button_setting">
			<!-- <i class="fa fa-cogs fa-3x" aria-hidden="true"></i> -->
			<i class="fa fa-cog fa-3x" aria-hidden="true"></i>
		</div>

         <!--back to top-->
        <div id="go_to_top">
            
        	<i class="fa fa-chevron-circle-up fa-3x" aria-hidden="true"></i>
            
        </div>
        <!-- end back to top -->

        <!-- setting modal -->
		<div class="setting-modal">
			<span>Setting read mode</span>

			<!-- button close setting modal -->
			<div id="close-modal"><span>close</span></div>

			<!-- setting mode -->
			<div class="setting-read">

				<!-- change font word -->
				<div class="changeFontFamily">
					
					<span>Change font family</span>

					<select onchange="fn_change_font()" id="changeFont" >
						<option value="Arial,Arial,Helvetica,sans-serif">Arial</option>
						<option value="Arial Black,Arial Black,Gadget,sans-serif">Arial Black</option>
						<option value="Comic Sans MS,Comic Sans MS,cursive">Comic Sans MS</option>
						<option value="Courier New,Courier New,Courier,monospace">Courier New</option>
						<option value="Georgia,Georgia,serif">Georgia</option>
						<option value="Impact,Charcoal,sans-serif">Impact</option>
						<option value="Lucida Console,Monaco,monospace">Lucida Console</option>
						<option value="Lucida Sans Unicode,Lucida Grande,sans-serif">Lucida Sans Unicode</option>
						<option value="Palatino Linotype,Book Antiqua,Palatino,serif">Palatino Linotype</option>
						<option value="Tahoma,Geneva,sans-serif">Tahoma</option>
						<option value="Times New Roman,Times,serif">Times New Roman</option>
						<option value="Trebuchet MS,Helvetica,sans-serif">Trebuchet MS</option>
						<option value="Verdana,Geneva,sans-serif">Verdana</option>
						<option value="Gill Sans,Geneva,sans-serif">Gill Sans</option>
					</select>
				</div>

				<!-- end change font word -->

				<!-- change font size -->
				<div class="changeFontSize">
					<span>Change font size</span>
					
					<select onchange="fn_change_size()" id="changeSize" >
						<option value="9px">9px</option>
						<option value="10px">10px</option>
						<option value="11px">11px</option>
						<option value="12px">12px</option>
						<option value="13px">13px</option>
						<option value="14px">14px</option>
						<option value="15px">15px</option>
						<option value="16px">16px</option>
					</select>

					<p id='resetSize'>reset</p>
				</div>
				<!-- change font size -->

				<!-- change background color -->
				<div class="changeBackground" >
					<span>Background color</span>
					<input class="jscolor" id="jscolor-back-color" onchange="change_color_background(this.jscolor)" value="" />
					<p id='resetBackground'>reset</p>
				</div>

				<!-- change color word -->
				<div class="changeForeground" >
					<span>Foreground color</span>
					<input class="jscolor" id="jscolor-fore-color" onchange="change_color_foreground(this.jscolor)" value="" />
					<p id='resetForeground'>reset</p>
				</div>
			</div>

			
		</div>
        <script src="/include/js/jquery-2.2.2.js"></script>
        <script src="/include/js/myjs-time-took.js"></script>

        <script type="text/javascript">
			var link = window.location.href;
        	var title = window.document.title;

			function fn_change_font(){
				var new_font = $('#changeFont').val();

				FontFamily.changeFont(new_font, 'content_story');
			}

        	function getScrollBody() {
				var sc = $('body').scrollTop();

				console.log('Scroll is: ' +sc);
        	}
			

			function change_color_background(jscolor) {
			    // 'jscolor' instance can be used as a string
			    document.getElementById('content_story').style.backgroundColor = '#' + jscolor;
			}

			function change_color_foreground(jscolor) {
			    // 'jscolor' instance can be used as a string
			    document.getElementById('content_story').style.color = '#' + jscolor;
			}

			function hide_setting() {
				$('#button_setting').fadeOut("slow");
			}

			/* count time load page */
			Took.getTimeLoadPage('took');
			/* end count time load page */


			$('#resetBackground').click(function () {

			    change_color_background('fff');
			    $('#jscolor-back-color').val('FFFFFF');
			});

			$('#resetForeground').click(function () {

			    change_color_foreground('222');
			    $('#jscolor-fore-color').val('222222');
			});
			

            $(function() {
                $('.setting-modal').hide();
            	$('#widget_quote_fixed').hide();
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

	                	
	                	/*$('#go_to_top').fadeIn();*/
	                	// $('#widget_quote_fixed').fadeIn();

	                	setTimeout('hide_setting()', 1500);
	                }
	                  
	                else {
	                	/*$('#widget_quote_fixed').fadeOut();*/
	                  	/*$('#go_to_top').fadeOut();*/
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
         
        <script src="/include/js/jscolor.js"></script>
        <script src="/include/js/change_font_size.js"></script>
        <script src="/include/js/view_manga.js"></script>
        
        <script src="/include/js/myjs-change-font-family.js"></script>
      </footer>