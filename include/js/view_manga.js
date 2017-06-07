var text_desc = '';
var short_text_desc = '';
var remain_text_desc = '';

$(document).ready(function($) {
	$('#show_more').hide();
	$('#hide_more').hide();

	text_desc = $('#description').text();
	var leng_desc = text_desc.length;

	var i = 900;
	if (leng_desc > i) {
		
		var x = '';

		do {
			x = text_desc.charAt(i++);
		} while(x != " ");

		short_text_desc = text_desc.substr(0, i);
		remain_text_desc = text_desc.substring(i, leng_desc);

		$('#description').text(short_text_desc);
	} else {
		$('#show_more').hide();
		$('#hide_more').hide();
		$('#description').text(text_desc);

	}

	
});

function show_more_desc () {
	$('#description').text(remain_text_desc);
	$('#show_more').hide();
	$('#hide_more').show();
	
}

function hide_more_desc () {
	$('#description').text(short_text_desc);
	$('#show_more').show();
	$('#hide_more').hide();
	
}