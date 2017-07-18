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
            <i class="fa fa-cog fa-3x" aria-hidden="true"></i>
			<i class="fa fa-pencil-square-o fa-3x edit-style" aria-hidden="true" data-toggle="modal" data-target=".readmode-setting-modal-sm"></i>
		</div>

         <!--back to top-->
        <div id="go_to_top">
        	<i class="fa fa-chevron-circle-up fa-3x" aria-hidden="true"></i>
        </div>
        <!-- end back to top -->

        <!-- Setting style modal -->
		<div class="modal fade readmode-setting-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
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
        
        <!-- Hint modal -->
        <div class="modal fade bs-modal-sm" id="hint_setting" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
		  <div class="modal-dialog modal-sm" role="document">
		    <div class="modal-content">
		    	<div class="modal-header" style="height: 35px">
			        <button type="button" id="close_hint_modal" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    </div>
			    <div class="modal-body">
			    	<span>Cuộn truyện lên để hiển thị tùy chọn setting, giúp bạn điều chỉnh font chữ nhiều thứ khác khi đọc truyện :))</span>

			    	<div class="checkbox not-display-again">
						<label><input type="checkbox" id="not_display_hint_readmode" value="">Không hiển thị nữa</label>
					</div>
			    </div>
		    </div>
		  </div>
		</div>
        <!-- end Hint modal -->
        
        <!-- chapter modal -->
        <div class="modal fade bs-modal-sm" id="chapter_modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
		  <div class="modal-dialog modal-sm" role="document">
		    <div class="modal-content">
		    	<div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="gridSystemModalLabel">Chapter</h4>
			    </div>
			    <div class="modal-body">
			    	<div class="chapter_view_ajax" id="chapter_list">
                    </div>
			    </div>
		    </div>
		  </div>
		</div>
        <!-- end chapter modal -->

        <script src="/include/js/jquery-2.2.2.js"></script>
        <script src="/include/js/change-style.js"></script>
        <script src="/include/js/time-took.js"></script>
        <script src="/include/js/cookie.js"></script>
        <script src="/include/js/hint-modal.js"></script>
        <script src="/include/js/content-story-ajax.js"></script>

        <script type="text/javascript">
			var link = window.location.href;
        	var title = window.document.title;
            
            
            
            $(document).ready(function() {
                $(".chapter-pager").show();
                $('.setting-modal').hide();
            	$('#widget_quote_fixed').hide();
              	$('#url').text(link);
              	$('#bbcode').text("[" +link + "] [" +title+ "]");

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

			function hide_setting() {
				$('#button_setting').fadeOut("slow");
			}

			/* count time load page */
			Took.getTimeLoadPage('took');
			/* end count time load page */
         </script>
         
        <script src="/include/js/storage.js"></script>
        <script src="/include/js/jscolor.js"></script>
        <script src="/include/js/change-font-size.js"></script>
        <script src="/include/js/view-chapter.js"></script>
        <script src="/include/js/change-font-family.js"></script>
        <script src="/include/js/bootstrap.js"></script>
        <script src="/include/js/list-chapter-ajax.js"></script>
        <script src="/include/js/scroll-page.js"></script>
        <script src="/include/js/touch-page.js"></script>
        <script src="/include/js/analyst.js"></script>
        <script src="/include/js/jquery.mobile.custom.min.js"></script>

    </footer>