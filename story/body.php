<?php
	
?>

<!DOCTYPE html>
<html>
<head>
	<?php include_once(ABSPATH .'/include/template/site/header.php'); ?>
</head>
<body>
	<?php include_once(ABSPATH .'/include/template/site/menu-bar.php'); ?>
	<span>
	Thông thường, khi nghĩ tới việc tối ưu hóa, viết lại đường dẫn thân thiện bạn nghĩ đến .htaccess, điều này đúng nhưng sẽ rất phức tạp nếu url dạng như:
<br>
Url: http://tenmiencuaban.com/ten-danh-muc/ten-bai-viet hoặc http://tenmiencuaban.com/ten-danh-muc/so-trang

Url: http://tenmiencuaban.com/home hoặc http://tenmiencuaban.com hoặc http://tenmiencuaban/index.php đều về trang chủ.
<br>
Đại loại như thế, cứ tưởng tượng bạn viết được url thân thiện giống như wordpress mà sử dụng .htaccess thì sẽ phức tạp biết nhường nào, bạn cứ thử đi, rồi sẽ rối tung lên mà xem. Lúc này bạn cần nghĩ đến phương án kết hợp giữa .htaccess và php. Hãy nhìn vào file .htaccess của wordpress:

# BEGIN WordPress
<br><IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^index\.php$ – [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>
# END WordPress
Ở đây, .htaccess chỉ đơn giản làm nhiềm vụ kiểm tra file không tồn tại thì đưa hết về index.php. Vậy thì việc phân tích url và đưa ra đúng đường dẫn thực tế do ai đảm nhiệm, chắc chắn là php rồi.

Sau khi phân tích được đường dẫn, php sẽ điều hướng xử lý (truyền biến, include file)

Giờ quay lại phần xử lý của PHP nhé, sau khi .htaccess đưa tất cả request về index.php, php sẽ xử lý như sau:

1. Sử dụng $_SERVER[‘REQUEST_URI’] để lấy đường dẫn.
2. Cắt ra thành giá trị của mảng, $permalinks = explode(“/”,$_SERVER[‘REQUEST_URI’]);

Ví dụ: http://tenmiencuaban.com/lap-trinh-web/friendly-url sau khi cắt ra sẽ có:

$permalinks[0] = tenmiencuaban.com
$permalinks[1] = lap-trinh-web
$permalinks[2] = friendly-url

3. Xử lý và include file.

Ơ bước 2, ta chú ý giá trị $permalinks[1] và $permalinks[2], đó là lap-trinh-web và friendly-url lần lượt là slug của category va bài post. Dựa vào 2 thông số này, ta tiếp tục truyền biến, include  file xử lý . Ví dụ đơn giản


$permalinks = explode(“/”,$_SERVER[‘REQUEST_URI’]);
if(isset($permalinks))
{
//Liệt kê categories, url la: http://tenmiencuaban.com/home hoặc http://tenmiencuaban.com hoặc http://tenmiencuaban/index.php
switch($permalinks[1]){
case ‘home':
case ”:
case ‘index.php':
include(‘home.php’);
break;
case ‘categories':
case ‘categories.php':
include(‘categories.php’);
break;
//Và các trường hợp khác, đối với post bạn cần truyền slug để tìm va include file xử lý truy vấn vào database để trả về kết quả như mong muốn
//…
}

Cảm ơn đã theo dõi. Nếu có thắc mắc, hay đừng ngại comment nhé.
</span>
	<?php include_once(ABSPATH .'/include/template/site/footer.php'); ?>
</body>
</html>