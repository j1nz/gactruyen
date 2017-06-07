//hàm thay đổi chuỗi
//function str_replace(haystack, needle, replacement) {
//    var temp = haystack.split(needle);
//    return temp.join(replacement);
//}

// lấy font chữ mực định
var default_font_size = $('#content_story').css('fontSize');

//những phần tử sẽ thực hiện khi chức năng được gọi
var elm = $('#content_story');

// ấn định kích thước font chữ mặc định và xóa bỏ px từ giá trị
//var size = str_replace(reset, 'px', '');

//Change font
function fn_change_size() {

	var new_size = $('#changeSize').val();

	elm.css({'fontSize' : new_size});
	//return false;
}

// khôi phục lại kích thước mặc định
$('#resetSize').click(function () {

    // ấn định kích thước font chữ mặc định
    elm.css({'fontSize' : default_font_size});
});