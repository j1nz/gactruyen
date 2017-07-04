            <div class="widget">
				<div class="title">
					<span>Chia sẻ</span>
				</div>
				<div class="news">
					<div class="share">
	                	<a href="smsto:01222558948?body=Hay doc bai viet nay <script>document.write(window.location.href);<script>">
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
		</div>

      <footer>
         <div class="widget">
            <div class="footer" align="center">
                <a href="/" >
                    <span class="footer_title">Trang chủ</span>
                </a>
                <span> | </span> 

            	<a href="/gioi-thieu.html" >
               	    <span class="footer_title">Giới thiệu</span>
               	</a>
        
                <span> | </span> 
        
                <a href="/lien-he.html" >
                	<span class="footer_title">Liên hệ</span>
                </a>
        
                <div class="footer_copyright">
                	<span>Copyright ©<?php echo date('Y')?> by </span>
        
               		<a rel="author" href="/">
               			<span>Gác Truyện™</span>
               		</a>
        
        			<div class="footer_took">
        				<span id="took">Took: 0.1 s</span>
        			</div>
                </div>
           
            </div>
         </div>
        <div class="new" style color="red" atl="lien ket">
			<b>Liên kết wap:
			</b> <a href="http://www.zumbo.mobie.in" atl="wap tai game">Wap game</a>
        </div>

		<div id="button_setting">
			<!-- <i class="fa fa-cogs fa-3x" aria-hidden="true"></i> -->
			<i class="fa fa-cog fa-3x" aria-hidden="true" data-toggle="modal" data-target=".bs-example-modal-sm"></i>
			
		</div>

         <!--back to top-->
        <div id="go_to_top">
        	<i class="fa fa-chevron-circle-up fa-3x" aria-hidden="true"></i>
            
        </div>
        <!-- end back to top -->

        <!-- Small modal -->

		<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
		  <div class="modal-dialog modal-sm" role="document">
		    <div class="modal-content">
		    	<div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="gridSystemModalLabel">Setting Mode</h4>
			    </div>
			    <div class="modal-body">
				    <div class="note">
				    	This is text will change if you change style
				    </div>

				    <div class="form-group">
						<label for="changeFont">Change font family</label>

						<select class="form-control" onchange="fn_change_font()" id="changeFont" >
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
			    	<!-- change font size -->
					<div class="form-group">
						<label for="changeSize">Change font size</label>
						
						<select class="form-control" onchange="fn_change_size()" id="changeSize" >
							<option value="9px">9px</option>
							<option value="10px">10px</option>
							<option value="11px">11px</option>
							<option value="12px">12px</option>
							<option value="13px">13px</option>
							<option value="14px">14px</option>
							<option value="15px">15px</option>
							<option value="16px">16px</option>
						</select>

						<!-- <button class="btn btn-default" id='resetSize' type="button">Default</button> -->
					</div>
					<!-- change font size -->

					<!-- change background color -->
					<div class="form-group">
						<label for="jscolor-back-color">Background color</label>
						<input class="form-control jscolor" id="jscolor-back-color" onchange="change_bg_color(this.jscolor)" value="#222222" />
						<!-- <button class="btn btn-default" id='resetBackground'>Default</button> -->
					</div>
					

					<!-- change color word -->
					<div class="form-group" >
						<label for="jscolor-fore-color">Foreground color</label>
						<input class="form-control jscolor" id="jscolor-fore-color" onchange="change_fg_color(this.jscolor)" value="#ffffff" />
						<!-- <button class="btn btn-default" id='resetForeground'>Default</button> -->
					</div>
					<div class="btn-center">
						<button type="button" class="btn btn-default" id='reset_style'>Reset</button>
						<button type="button" class="btn btn-primary" id='save_to_local'>Save</button>
					</div>
					
			    </div>
		    </div>
		  </div>
		</div>
        <!-- setting modal -->
		<!-- <div class="setting-modal" style="display: none;">
			<span>Setting read mode</span>

			<div id="close-modal"><span>close</span></div>


			<div class="setting-read">
				
			</div>

			
		</div> -->
        <script src="/include/js/jquery-3.2.1.js"></script>
        <script src="/include/js/myjs-time-took.js"></script>
        <script src="/wfe/js/myjs-save-local-storage.js"></script>

        <script type="text/javascript">
			var link = window.location.href;
        	var title = window.document.title;

        	$('#reset_style').click(function() {

        	});

        	$('#save_to_local').click(function() {
        		var font_family = $('#changeFont').val();
        		var font_size = $('#changeSize').val();
        		var fg_color = $('#jscolor-fore-color').val();
        		var bg_color = $('#jscolor-back-color').val();

        		console.log(font_family);
        		console.log(font_size);
        		console.log(bg_color);
        		console.log(fg_color);

        		var obj_save_storage = new SettingReadMode(font_family, font_size, fg_color, bg_color);
        		obj_save_storage.saveToLocalStorage();
        	});

			function fn_change_font(){
				var new_font = $('#changeFont').val();

				FontFamily.changeFont(new_font, '.note');

				FontFamily.changeFont(new_font, '#content_story');
			}

        	function getScrollBody() {
				var sc = $('body').scrollTop();

				console.log('Scroll is: ' +sc);
        	}
			

        	function change_bg_color(jscolor) {
        		document.getElementById('content_story').style.backgroundColor = '#' +jscolor;
        		$('.note').css('backgroundColor', '#' +jscolor);
        	}

        	function change_fg_color(jscolor) {
        		document.getElementById('content_story').style.color = '#' +jscolor;
        		$('.note').css('color', '#' +jscolor);
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
            	if(typeof(Storage) !== 'undefined') {
            		var variable = [];
					variable[0] = localStorage.getItem('font_family');
			    	variable[1] = localStorage.getItem('font_size');
			    	variable[2] = localStorage.getItem('color_foreground');
			    	variable[3] = localStorage.getItem('color_backgroud');

            		if (variable != null) {
            			FontFamily.changeFont(variable[0], 'content_story');
            			$('#content_story').css({'fontSize' : variable[1]});
            			change_bg_color(variable[3]);
            			change_fg_color(variable[2]);

            			$('#changeFont').val(variable[0]);
		        		$('#changeSize').val(variable[1]);
		        		$('#jscolor-fore-color').val(variable[2]);
		        		$('#jscolor-back-color').val(variable[3]);
            		}
            	}

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
        <script src="/include/js/bootstrap.js"></script>
    </footer>