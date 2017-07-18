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
});

function change_bg_color(jscolor) {
	document.getElementById('content_story').style.backgroundColor = '#' +jscolor;
	$('.note').css('backgroundColor', '#' +jscolor);
}

function change_fg_color(jscolor) {
	document.getElementById('content_story').style.color = '#' +jscolor;
	$('.note').css('color', '#' +jscolor);
}

$('#resetBackground').click(function () {
    change_color_background('fff');
    $('#jscolor-back-color').val('FFFFFF');
});

$('#resetForeground').click(function () {

    change_color_foreground('222');
    $('#jscolor-fore-color').val('222222');
});

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