		<div id="button_setting">
			<!-- <i class="fa fa-cogs fa-3x" aria-hidden="true"></i> -->
			<i class="fa fa-cog fa-3x" aria-hidden="true"></i>
		</div>


		<div class="setting-modal">
			<span>Setting read mode</span>

			<div id="close-modal"><span>close</span></div>

			<div class="setting-read">
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

				<div class="changeBackground" >
					<span>Background color</span>
					<input class="jscolor" id="jscolor-back-color" onchange="change_color_background(this.jscolor)" value="" />
					<p id='resetBackground'>reset</p>
				</div>

				<div class="changeForeground" >
					<span>Foreground color</span>
					<input class="jscolor" id="jscolor-fore-color" onchange="change_color_foreground(this.jscolor)" value="" />
					<p id='resetForeground'>reset</p>
				</div>
			</div>

			
		</div>