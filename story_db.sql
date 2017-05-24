-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 03:58 PM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `story_db`
--
CREATE DATABASE IF NOT EXISTS `story_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `story_db`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `slug`) VALUES
(1, 'Truyện ngắn', 'truyen-ngan'),
(2, 'Truyện dài', 'truyen-dai'),
(3, 'Trà sữa tâm hồn', 'tra-sua-tam-hon');

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE IF NOT EXISTS `chapter` (
  `chapter_id` int(11) NOT NULL,
  `story_id` int(11) DEFAULT NULL,
  `chapter_name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `description` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`chapter_id`, `story_id`, `chapter_name`, `slug`, `content`, `description`, `status`, `create_time`, `update_time`) VALUES
(1, 1, 'Chương 1: Tóm lại là đã hết một ngày', 'chuong-1-tom-lai-la-da-het-mot-ngay', 'Một ngày, tôi chợt nhận thấy cuộc sống thật là buồn chán và tẻ nhạt. \n    Năm đó tôi tám tuổi. \n    Sau này, tôi cũng nhiều lần thấy cuộc sống đáng chán khi thi trượt ở tuổi mười lăm, thất tình ở tuổi hăm bốn, thất nghiệp ở tuổi ba mươi ba và gặt hái mọi thành công ở tuổi bốn mươi.\n    Nhưng tám tuổi có cái buồn chán của tuổi lên tám. \n    Đó là cái ngày không hiểu sao tôi lại có ý nghĩ rằng cuộc sống không có gì để mà chờ đợi nữa. \n    Rất nhiều năm về sau, tôi được biết các triết gia và các nhà thần học vẫn đang loay hoay đi tìm ý nghĩa của cuộc sống và tới Tết Ma Rốc họ cũng chưa chắc đã tìm ra. \n    Nhưng năm tôi tám tuổi, tôi đã thấy cuộc sống chả có gì mới mẻ để khám phá. \n    Vẫn ánh mặt trời đó chiếu rọi mỗi ngày. Vẫn bức màn đen đó buông xuống mỗi đêm. Trên mái nhà và trên các cành lá sau vườn, gió vẫn than thở giọng của gió. Chim vẫn hót giọng của chim. Dế ri ri giọng dế, gà quang quác giọng gà. Nói tóm lại, cuộc sống thật là cũ kỹ. \n    Cuộc sống của tôi còn cũ kỹ hơn nữa. Mỗi đêm, trước khi đi ngủ, tôi đã biết tỏng ngày mai những sự kiện gì sẽ diễn ra trong cuộc đời tôi. \n    Tôi kể ra nhé: Sáng, tôi phải cố hết sức để thức dậy trong khi tôi vẫn còn muốn ngủ tiếp. Tất nhiên là trước đó tôi vẫn giả vờ ngủ mê mặc cho mẹ tôi kêu khản cả giọng rồi lay lay người tôi, nhưng dĩ nhiên tôi vẫn trơ ra như khúc gỗ cho đến khi mẹ tôi cù vào lòng bàn chân tôi. Khi đặt chân xuống đất rồi, tôi phải đi đánh răng rửa mặt, tóm lại là làm vệ sinh buổi sáng trước khi bị ấn vào bàn ăn để uể oải nhai chóp chép một thứ gì đó thường là không hợp khẩu vị. Mẹ tôi luôn luôn quan tâm đến sức khỏe và cụ thể hoá mối quan tâm của mình bằng cách bắt tôi (và cả nhà) ăn những món ăn có nhiều chất dinh dưỡng trong khi tôi chỉ khoái xực những món mà bà cho rằng chẳng bổ béo gì, như mì gói chẳng hạn. \n    Quan tâm đến sức khoẻ là điều tốt, và càng lớn tuổi mối quan tâm đó càng tỏ ra đúng đắn. Chẳng ai dám nói quan tâm như vậy là điều không tốt. Tôi cũng thế thôi. Khi tôi trưởng thành, có nhà báo phỏng vấn tôi, rằng giữa sức khoẻ, tình yêu và tiền bạc, ông quan tâm điều gì nhất? Lúc đầu tôi nói nhiều về tình yêu, về sau tôi nói nhiều hơn về sức khoẻ. Tôi phớt lờ tiền bạc, mặc dù tôi nhận thấy đó là một bất công: tiền bạc chưa bao giờ được con con người ta thừa nhận là mối quan tâm hàng đầu dù tiền bạc ngày nào cũng chạy đi mua quà tặng cho tình yêu và thuốc men cho sức khoẻ. \n    Nhưng thôi, đó là chuyện của người lớn - chuyện sau này. Còn tôi, lúc tám tuổi, tôi chỉ nhớ là tôi không thích ăn những món bổ dưỡng. Nhưng tất nhiên là tôi vẫn buộc phải ăn, dù là ăn trong miễn cưỡng và lười nhác, và đó là lý dó mẹ tôi luôn than thở về tôi. \n    Ăn xong phần ăn buổi sáng (chả sung sướng gì), tôi vội vàng truy lùng sách vở để nhét vào cặp, nhặt lên đầu tivi một quyển, trên đầu tủ lạnh một quyển khác và moi từ dưới đống chăn gối một quyển khác nữa, dĩ nhiên bao giờ cũng thiếu một món gì đó, rồi ba chân bốn cẳng chạy vù ra khỏi nhà. \n    Trường gần nhà nên tôi đi bộ, nhưng thực tế thì tôi chưa bao giờ được thưởng thức thú đi bộ tới trường. Tôi toàn phải chạy. Vì tôi luôn luôn dậy trễ, luôn luôn làm vệ sinh trễ, luôn luôn ăn sáng trễ và mất rất nhiều thì giờ để thu gom tập vở cho một buổi học. Về chuyện này, ba tôi bảo: "Con à, hồi bằng tuổi con, bao giờ ba cũng xếp gọn gàng tập vở vào cặp trước khi đi ngủ, như vậy sáng hôm sau chỉ việc ôm cặp ra khỏi nhà!". Nhưng hồi ba tôi bằng tuổi tôi thì tôi đâu có mặt trên cõi đời để kiểm tra những gì ông nói, bởi khi tôi bằng tuổi ba tôi bây giờ chắc chắn tôi cũng sẽ lặp lại với con tôi những điều ông nói với tôi - chuyện xếp tập vở trước khi đi ngủ và hàng đống những chuyện khác nữa, những chuyện mà tôi không hề làm. Chà, với những chuyện như thế này, bạn đừng bao giờ đòi hỏi phải chứng minh. Đôi khi vì một lý do nào đó mà chúng ta buộc phải bịa chuyện. Chúng ta cứ lặp lại mãi câu chuyện bịa đó cho đến một ngày chúng ta không nhớ có thật là chúng ta bịa nó ra hay không, rồi sau đó một thời gian nữa nếu cứ tiếp tục lặp lại câu chuyện đó nhiều lần thì chúng ta sẽ tin là nó có thật. Thậm chí còn hơn cả niềm tin thông thường, đó là niềm tin vô điều kiện, gần như là sự xác tín. Như các nhà toán học tin vào định đề Euclide hay các tín đồ Thiên Chúa tin vào sự sống lại của Jesus. \n    Ôi, nhưng đó cũng lại là những vấn đề của người lớn. \n    Tôi kể tiếp câu chuyện của tôi hồi tám tuổi. \n    Như vậy, ra khỏi nhà một lát thì tôi tới trường. \n    Trong lớp tôi luôn luôn ngồi ở bàn chót. Ngồi bàn chót thì tha hồ tán gẫu, cãi cọ, cấu véo hay giở đủ trò nghịch ngợm mà không sợ bị cô giáo phát hiện, nhưng điều hấp dẫn nhất ở vị trí tối tăm đó là ít khi bị kêu lên bảng trả bài. \n    Điều đó có quy luật của nó. Bạn nhớ lại đi, có phải bạn có rất nhiều bạn bè, yêu quí rất nhiều người nhưng không phải lúc noà bạn cũng nhớ tới họ. Bộ nhớ chúng ta quá nhỏ để chứa cùng lúc nhiều khuôn mặt hay nhiều cái tên, chỉ khi nào nhìn thấy người đó ngoài phố hay bắt gặp cái tên đó trong một mẩu tin trên báo chẳng hạn thì chúng ta mới chợt nhớ ra và cảm động thốt lên “Ôi, đã lâu lắm mình không gặp nó. Năm ngoái mình kẹt tiền, nó có cho mình vay năm trăm ngàn!”. \n     \n    Cô giáo của tôi cũng vậy thôi. Làm sao cô có thể nhớ tới tôi và kêu tôi lên bảng trả bài khi mà cô không thể nào nhìn thấy tôi giữa một đống đầu cổ lúc nhúc che chắn trước mặt. \n    Ngày nào cũng như ngày nào, tôi ngồi đó, vừa xì xầm trò chuyện vừa cựa quậy lung tung, và mong ngóng tiếng chuông ra chơi đến chết được. \n    Trong những năm tháng mà người ta gọi một cách văn hoa là mài đũng quần trên ghế nhà trường (tôi thì nói thẳng là bị giam cầm trong lớp học), tôi chẳng thích được giờ nào cả, từ giờ toán, giờ tập viết đến giờ tập đọc, giờ chính tả. Tôi chỉ thích mỗi giờ ra chơi. \n    Ra chơi có lẽ là điều tuyệt vời nhất mà người lớn có thể nghĩ ra cho trẻ con. Ra chơi có nghĩa là những lời vàng ngọc của thầy cô tuột khỏi trí nhớ nhanh như gió, hết sức trơn tru. Ra chơi có nghĩa là được tháo cũi sổ lồng (tất nhiên sau đó phải bấm bụng chu vào lại), là được tha hồ hít thở không khí tự do. \n    Suốt những năm đi học, tôi và lũ bạn đã sử dụng những khoảng khắc tự do hiếm hoi đó vào việc đá bóng, bắn bi, nhưng thường xuyên nhất và hăng hái nhấ là những trò rượt đuổi, đánh nhau hay vật nhau xuống đất cho đến khi không đứa nào còn ra hình thù một học sinh ngoan ngoãn nữa mới thôi, tức là lúc khuỷu tay đã trầy xước, mắt đã bầm tím, chân đi cà nhắc và áo quần thì trông còn tệ hơn mớ giẻ lau nhà. \n    Tại sao tôi không kể giờ ra về vào đây. Vì ra về có nghĩa là rời khỏi một nhà giam này để đến một nhà giam khác, y như người ta chuyển trại cho các tù nhân, có gì hay ho đâu. \n    Tôi không nói quá lên đâu, vì ngày nào chào đón tôi ở đầu ngõ cũng là khuôn mặt lo lắng của mẹ tôi và khuôn mặt hầm hầm của ba tôi. \n    - Trời ơi, sao ngày nào cũng ra nông nỗi này thế hả con? \n    Đại khái mẹ tôi nói thế, giọng thảng thốt, vừa nói vừa nắn nót cánh tay rướm máu của tôi như để xem nó sắp rụng khỏi người tôi chưa. \n    Ba tôi thì có cách nói khác, rất gần với cách rồng phun lửa: \n    - Mày lại đánh nhau rồi phải không? \n    - Con không đánh nhau. Tụi bạn đánh con và con đánh lại. \n    Tôi nói dối (mặc dù nói dối như thế còn thật hơn là nói thật) và khi ba tôi tiến về phía tôi với dáng điệu của một cơn bão cấp mười tiến vào đất liền thì mẹ tôi đã kịp kéo tôi ra xa: \n    - Ông ơi, con nó đã nát nhừ ra rồi! \n    Mẹ tôi có cách nói cường điệu rất giống tôi, tôi vừa chạy theo bà vừa cười thầm về điều đó. \n    Sau đó, không nói thì ai cũng biết là tôi bị mẹ tôi tống vào nhà tắm. Khi tôi đã tinh tươm và thơm phức như một ổ bánh mì mới ra lò thì mẹ tôi bắt đầu bôi lên người tôi đủ thứ thuốc xanh xanh đỏ đỏ khiến tôi chẳng mấy chốc đã rất giống một con tắc kè bông. \n    Dĩ nhiên là từ đó cho tới bữa cơm, tôi không được phép bước ra khỏi nhà để tránh phải sa vào những trò đánh nhau khác hấp dẫn không kém với bọn nhóc trong xóm, những đối thủ thay thế hết sức xứng đáng cho tụi bạn ở trường. \n    Ăn trưa xong thì tôi làm gì vào thời tôi tám tuổi? \n    Đi ngủ trưa! \n    Trên thế giới rộng lớn này, có lẽ có rất nhiều đứa nhóc trạc tuổi tôi đều bị các bậc phụ huynh cột chặt vào giấc ngủ trưa theo cái cách người ta cột bò vào cọc để chúng khỏi chạy lung tung mà hậu quả là thế nào hàng xóm cũng kéo đến nhà chửi bới om sòm. \n    Chứ thực ra với một đứa bé tám tuổi thì giấc ngủ trưa chẳng có giá trị gì về mặt sức khoẻ. Khi tôi lớn lên thì tôi phải công nhận giấc ngủ trưa đối với một người lớn tuổi đúng là quý hơn vàng. Lớn tuổi thì sức khoẻ suy giảm. Làm việc nhiều thì đầu nhức, mắt mờ, lưng mỏi, tay run, giấc ngủ ban đêm vẫn chưa đủ liều để sửa chữa thành công những chỗ hỏng hóc của cơ thể. Buổi trưa phải chợp mắt thêm một lát thì buổi chiều mới đủ tỉnh táo mà không nện búa vào tay hay hụt chân khi bước xuống cầu thang. \n     \n    Nhưng nếu bạn sống trên đời mới có tám năm thì bạn không có lý do chính đáng để coi trọng giấc ngủ trưa. Với những dân tộc không có thói quen ngủ trưa, như dân Mỹ chẳng hạn, trẻ con càng không tìm thấy chút xíu ý nghĩa nào trong việc phải leo lên giường sau giờ cơm trưa. \n    Hồi tôi tám tuổi dĩ nhiên tôi không có được cái nhìn thông thái như thế. Nhưng tôi cũng lờ mờ nhận ra khi ba tôi đi ngủ thì bôi buộc phải đi ngủ, giống như một con cừu còn thức thì người chăn cừu không yên tâm chợp mắt vậy. \n    Tôi nằm cựa quậy bên cạnh ông trên chiếc đi-văng, thở dài thườn thượt khi nghĩ đến những quả đấm mà lũ bạn nghịch ngợm đang vung lên ngoài kia. \n    - Đừng cựa quậy! Cựa quậy hoài thì sẽ không ngủ được! \n    Ba tôi nói, và tôi vờ nghe lời ông. Tôi không cựa quậy nhưng mắt vẫn mở thao láo. \n    - Đừng mở mắt! Mở mắt hoài thì sẽ không ngủ được! \n    Ba tôi lại nói, ông vẫn nằm ngay ngắn nên tôi nghĩ là ông không nhìn thấy tôi mở mắt, ông chỉ đoán thế thôi. Chẳng may cho tôi là lần nào ông cũng đoán đúng. \n    Tôi nhắm mắt lại, lim dim thôi, mi mắt vẫn còn hấp háy, nhưng tôi không thể nào bắt mi mắt tôi đừng hấp háy được. \n    Một lát, ba tôi hỏi: \n    - Con ngủ rồi phải không? \n    - Dạ rồi. \n    Tôi đáp, ngây ngô và ngoan ngoãn, rơi vào bẫy của ba tôi một cách dễ dàng. \n    Tôi nằm như vậy, thao thức một lát, tủi thân và sầu muộn, rồi thiếp đi lúc nào không hay. \n    Khi tôi thức dậy thì đường đời của tôi đã được vạch sẵn rồi. Tôi đi từ giường ngủ đến phòng tắm để rửa mặt rồi từ phòng tắm đi thăng tới bàn học để làm một công việc chán ngắt là học bài hoặc làm bài tập. \n    Thỉnh thoảng tôi cũng đựoc phép chạo ra đằng trước nhà chơi với lũ trẻ hàng xóm nhưng trước ánh mắt giám sát của mẹ tôi (từ một vị trí bí hiểm nào đó đằng sau các ô cửa mà mãi mãi tôi không khám phá được), tôi chỉ dám chơi những trò ẻo lả như nhảy lò cò hay bịt mắt bắt dê, đại khái là những trò dành cho bọn con gái hay khóc nhè. (Về sau, tinh khôn hơn, tôi đã biết cách ỉ ôi để mẹ tôi thả tôi qua nhà hàng xóm, nhờ đó một thời gian dài tôi đã có cơ hội làm những gì tôi thích). \n    Chơi một lát, tôi lại phải vào ngồi ê a tụng bài tiếp, càng tụng càng quên, nhưng vẫn cứ tụng cho mẹ yên lòng đi nấu cơm. \n    Từ giây phút này trở đi thì đời sống của tôi tẻ nhạt vô bờ bến. \n    Tôi uể oải học bài trong khi chờ cơm chín. Cơm chín rồi thì tôi uể oải ăn cơm trong khi chờ tiếp tục học bài. \n    Tivi tiveo hiếm khi tôi mó thay vào được, trông nó cứ như một thứ để trang trí. Bao giờ cũng vậy, tôi chỉ được rời khỏi bàn học khi nào tôi đã thuộc tất cả bài vở của ngày hôm sau. \n    Ba tôi là người trực tiếp kiểm tra điều đó. Khác với mẹ tôi, ba tôi là người kiên quyết đến mức tôi có thể cảm tưởng ông sẽ thăng tiến vùn vụt nếu vô ngành cảnh sát, toà án hay thuế vụ. Ông không bao giờ lùi bước trước những giọt nước mắt của tôi, dù lúc đó trông tôi rất giống một kẻ sầu đời đến mức chỉ cách cái chết có một bước chân. \n    - Con học bài xong rồi ba. - Thường thì tôi mở miệng trước. \n    Ba tôi tiến lại và nhìn tôi bằng ánh mắt nghi ngờ: \n    - Chắc không con? \n    - Dạ, chắc! \n    Tôi mau mắn đáp và khi ba tôi bắt đầu dò bài thì tôi lập tức phủ nhận sạch trơn sự quả quyết của mình bằng cách ngắc ngứ ngay ở chỗ mà tôi nghĩ dù có va đầu phải gốc cây tôi cũng không thể nào quên được. \n    - Học lại lần nữa đi con! \n    Ba tôi nhún vai nói và quay đi với tờ báo vẫn cầm chặt trên tay, rõ ràng ông muốn gửi đến tôi thông điệp rằng ông sãn sàng chờ đợi tôi cho dù ông buộc phải đọc tới mẩu rao vặt cuối cùng khi không còn gì để mà đọc nữa. \n    Qua cái cách ông vung vẩy tờ báo trên tay, tôi e rằng ẩn ý của ông còn đi xa hơn: có vẻ như nếu cần, ông sẽ bắt đầu đọc lại tờ báo đến lần thứ hai và hơn thế nữa. Nghĩ vậy, tôi đành vùi đầu vào những con chữ mà lúc này đối với tôi đã như những kẻ tử thù, tâm trạng đó càng khiến tôi khó mà ghi nhớ chúng vô đầu óc. \n    Cho nên các bạn cũng có thể đoán ra khi tôi đã thuộc tàm tạm, nghĩa là không trôi chảy lắm thì cơ thể tôi đã bị giấc ngủ đánh gục một cách không thương tiếc và thường thì tôi lết vào giường bằng những bước chân xiêu vẹo, nửa tỉnh nửa mê trước ánh mắt xót xa của mẹ tôi. \n    Như vậy, tóm lại là đã hết một ngày.', NULL, 'done', '2017-05-20 08:47:15', NULL),
(2, 1, 'Chương 2: Bố mẹ tuyệt vời', 'chuong-2-bo-me-tuyet-voi', 'Bây giờ thì các bạn đã hình dung ra một ngày của tôi. \n    Tôi chỉ cần kể một ngày là đủ, không cần phải kể thêm những ngày khác. \n    Đơn giản là ngày nào cũng giống như ngày nào. Một ngày như mọi ngày, như người ta vẫn nói. \n    Và vì thế cuộc sống đối với tôi thật là đơn điệu, nếu sự lặp đi lặp lại là biểu hiện chính xác nhất và rõ rệt nhất của sự đơn điệu. \n    Mãi về sau này, tôi mới khám phá ra còn có cách nhìn khác về sự lặp đi lặp lại. Người ta gọi nó là sự ổn định. \n    Một công việc có thể sắp đặt trước, một sự nghiệp có thể tính toán trước, là niềm ao ước của rất nhiều người, nhiều quốc gia. \n    Tất nhiên sẽ thật là hay nếu tiên liệu được chỉ số tăng trưởng kinh tế của một đất nước nhưng nếu bạn cũng tiên liệu chính xác như thế về chỉ số tăng trưởng tình cảm của bản thân thì điều đó có khi lại chán ngắt. Sẽ thật kỳ cục nếu như bạn tin chắc rằng một tháng nữa bạn sẽ bắt đầu yêu, ba tháng sau bạn sẽ đang yêu – ít thôi, sáu tháng sau bạn sẽ yêu nhiều hơn... \n    Tôi từng thấy có nhiều người trẻ tuổi lên kế hoạch cho cuộc đời mình: 22 tuổi tốt nghiệp đại học, 25 tuổi lập gia đình, 27 tuổi mở công ty, 30 tuổi sinh con đầu lòng, vân vân và vân vân... Thật sít sao! Nhưng một khi cuộc đời một con người được lập trình chặt chẽ và khoa học đến thế thì nếu tất cả đều vào khuôn như dự tính liệu bạn có bão hoà về cảm xúc hay không? \n    Khi nói về cảm xúc có lẽ không thể không gắn nó với tính cách của từng người. Người lạc quan bảo rằng ổn định cái điều mà người bi quan cho là đơn điệu. Cuộc sống vợ chồng cũng thế thôi, kẻ thì bảo êm đềm, người thì cho vô vị, biết làm thế nào! Quả thật, hai vợ chồng mà sống với nhau êm đềm quá không khéo lại giống sự êm đềm giữa hai người hàng xóm lành tính, và người quá khích lại có dịp bô bô lên rằng êm đềm không hề bà con gì với hạnh phúc, biết nói làm sao! \n    Nhưng ôi thôi, tôi lại nói chuyện lúc tôi đã là người lớn mất rồi. Lại nói chuyện vợ chồng cấm kỵ vô đây nữa! \n    Tôi sẽ quay lại chủ đề của cuốn sách này, quay lại ngay đây, tức là nói cái chuyện tôi hồi tám tuổi. \n    Chuyện tôi sắp kể ra đây, khổ thay, cũng lại liên quan đến chuyện vợ chồng. Nhưng bên cạnh cái khổ cũng có cái may, đây chỉ là trò chơi vợ chồng thôi – cái trò mà đứa trẻ nào bằng tuổi tôi cũng rất thích chơi mặc dù khi lớn lên thì chúng rất dè chừng. \n    Tôi và con Tí sún cạnh nhà tôi là một cặp. \n    Tôi là chồng, con Tí sún là vợ. \n    Con Tí sún không đẹp đẽ gì, người đen nhẻm, tóc xoăn tít vì suốt ngày chạy nhảy ngoài nắng, đã thế lại sún răng. \n    Nhưng tôi sẵn sàng chấp nhận nó làm vợ tôi, chỉ vì nó thích tôi, tôi bảo gì nó cũng nghe răm rắp. Thật lòng, tôi thích con Tủn hơn, vì con Tủn xinh gái nhất xóm, lại có lúm đồng tiền. Nhưng tôi không cưới con Tủn bởi tôi thấy nó cứ hay cặp kè với thằng Hải cò. Sau này tôi biết đó là cảm giác ghen tuông, tất nhiên là ghen tuông theo kiểu trẻ con, còn lúc đó tôi chỉ cảm thấy khó chịu thôi. \n    Và tôi đùng đùng cưới con Tí sún, theo kiểu người lớn hay nói: cưới người yêu mình chứ không cưới người mình yêu, nhất là khi người mình yêu không có vẻ gì là yêu mình! \n    Tôi cưới con Tí sún chừng năm phút thì lập tức đẻ liền một lúc hai đứa con: thằng Hải cò và con Tủn. Ghét hai đứa nó thì bắt chúng làm con vậy thôi, chứ thằng Hải cò lớn hơn tôi một tuổi. \n    - Hải cò đâu?- Tôi kêu lớn. \n    - Dạ, ba gọi con. - Hải cò lon ton chạy tới. \n    Tôi ra oai: \n    - Rót cho ba miếng nước! \n    Thấy con Tủn che miệng cười khúc khích, Hải cò đâm bướng: \n    - Con đang học bài. \n    - Giờ này mà học bài hả? – Tôi quát ầm - Đồ lêu lổng! \n    Hải cò đưa tay ngoáy lỗ tai để nghe cho rõ: \n    - Học bài là lêu lổng? \n    - Chứ gì nữa! Không học bài làm bài gì hết! Con ngoan là phải chạy nhảy, trèo cây, tắm sông, đánh lộn! \n    Hải cò không ngờ vớ được một ông bố điên điên như thế, cười toét miệng: \n    - Vậy con đi đánh lộn đây! \n    Nói xong, nó co giò chạy mất. \n    Nhưng tôi không giận nó. Tôi đang khoái chí. Tôi tình cờ phát hiện ra cách làm cho cuộc sống bớt tẻ nhạt. \n    - Tủn! – Tôi hét. \n    - Dạ. Rót nước hả ba? \n    Tôi cười khảy: \n    - Mày đừng làm ra vẻ ta đây thông minh. Tao hết khát rồi. \n    Tôi nói như trút giận: \n    - Tao là đứa chúa ghét mấy đứa con nít thông minh, tức là mấy đứa học ài nhoáng một cái đã thuộc vanh vách! Hừm, làm như hay lắm! \n    Con Tủn không biết tôi muốn gì. Thấy tôi quát sùi bọt mép, nó sợ run: \n    - Dạ, con không thông minh. Con là đứa ngu đần. \n    Tôi hả hê: \n    - Vậy con mới đúng là con ngoan của ba. \n    Tôi móc túi lấy ra một cây kẹo bé tẹo còn sót lại từ hôm qua: \n    - Đây, ba thưởng cho con. \n    Con Tủn ngơ ngác cầm lấy cây kẹo, không hiểu tại sao ngu mà được thưởng nên không dám ăn. \n    Tôi đang tính bảo con Tủn “Ăn đi con” thì thằng Hải cò từ bên ngoài xồng xộc chạy vô, miệng thở hổn hển, làm như vừa đánh nhau thật. \n    - Con đi đánh lộn về đó hả con? – Tôi âu yếm hỏi. \n    - Dạ. - Hải cò phấn khởi – Con uýnh một lúc mười đứa luôn đó ba! \n    - Con thiệt là ngoan. – Tôi khen, và đưa mắt nhìn Hải cò từ đầu tới chân - Thế quần áo của con... \n    - Vẫn không sao ba à. - Hải cò hớn hở khoe – Con đập nhau với tụi nó mà quần áo vẫn lành lặn, thẳng thớm... \n    - Đồ khốn! – Tôi quát lớn, không cho Hải cò nói hết câu – Đánh nhau mà không rách áo, trầy chân, bầm mặt mà cũng gọi là đánh nhau hả? \n    Sự giận dữ bất ngờ của tôi làm Hải cò nghệt mặt một lúc. Nó chẳng biết phản ứng thế nào ngoài việc ấp a ấp úng: \n    - Dạ... dạ... ủa... ủa... \n    - Dạ dạ ủa ủa cái gì! Con thiệt là đứa hư hỏng! Con làm ba xấu hổ đến chết mất thôi! \n    Con Tí sún, vợ tôi, bắt đầu cảm thấy hoang mang trước lối dạy con của tôi: \n    - Ông à, con nó biết giữ gìn như thế là tốt rồi. \n    - Bà thì biết cái gì! – Tôi nạt con Tí sún, nước miếng bay vèo vèo may mà không trúng mặt nó – Đánh nhau chứ có phải đi dự tiệc đâu! Đánh nhau mà quần áo sạch sẽ thế kia thì có nhục cho tổ tiên không kia chứ! \n    Tôi đấm ngực binh binh: \n    - Ôi, chẳng thà nó chém tôi một dao cho rồi! Con ơi là con! Mày ra đây mà giết ba đi này con! \n    Thấy tôi tru tréo ghê quá, con Tí sún nín khe. \n    Trong khi thằng Hải cò cười hí hí thì con Tủn mặt đực ra như bị thằn lằn ị trúng mặt. Nó không biết làm gì với cây kẹo trên tay, rằng nên nhét vào túi áo hay bỏ vào miệng. Trông mặt nó hết sức lo lắng, có lẽ vì nó hoàn toàn không biết được hành động nào mới không bị ông bố gàn dở kia liệt vào loại “hư hỏng” hay tệ hơn, là “làm nhục tổ tiên”. \n    *** \n    Tụi bạn tôi chỉ ngạc nhiên hôm đầu tiên. Rồi như bất cứ một đứa trẻ chân chính nào, tụi nó nhanh chóng cảm nhận được sự thú vị của trò chơi tuyệt vời đó. \n    Hôm sau đến lượt thằng Hải cò và con Tủn đóng vai ba mẹ. Tôi và con Tí sún làm con. \n    Tối hôm trước Hải cò chắc thao thức suốt đêm, chờ trời sáng. Sáng ra tôi thấy mắt nó đỏ kè. Nếu hôm đó không phải là ngày chủ nhật, có lẽ Hải cò sẽ bị sự nôn nóng đốt thành than trước khi cả bọn đi học về. \n    - Thằng cu Mùi đâu? - Hải cò oang oang, giọng rất chi là hào hứng. \n    Cu Mùi là tên ở nhà của tôi. Ba mẹ tôi gọi tôi như thế có lẽ do tôi sinh năm Mùi. \n    - Dạ. – Tôi ứng tiếng thưa. \n    - Con đem tập vở ra đây cho ba xem nào. \n    Tôi lôi cuốn tập nhét trong lưng quần, hồi hộp đưa cho Hải cò, bụng cố đoán xem nó định “dạy dỗ”tôi như thế nào. \n    Lật lật vài trang, Hải cò hét ầm: \n    - Cu Mùi! \n    Tôi lấm lét nhìn nó: \n    - Dạ. \n    Hải cò đập tay xuống bàn một cái rầm: \n    - Con học hành cách sao mà tập vở trắng tinh như thế hả? \n    Tôi chưa kịp đáp, nó thẳng tay ném cuốn tập qua cửa sổ, gầm gừ: \n    - Học với chả hành! Mày giữ gìn tập vở sạch sẽ như thế này mày không sợ thầy cô bảo ba mẹ mày không biết dạy con hả, thằng kia? \n    Tôi bị mắng như tát nước vào mặt mà ruột nở từng khúc. Tôi không ngờ Hải cò là một ông bố tuyệt vời đến thế. \n    Tôi hân hoan nhận lỗi: \n    - Thưa ba, lần này con trót dại. Lần sau con không dám giữ gìn tập vở kỹ lưỡng như vậy nữa. \n    Tôi nói, và đảo mắt nhìn quanh, thấy đằng góc nhà con Tủn và con Tí sún đưa tay bụm miệng cố nén cười. \n    - Cái con nhóc sún răng kia! Cười cái gì! - Hải cò lừ mắt nhìn con Tí sún – Mày nấu cơm xong chưa mà đứng đó nhe răng sún ra cười hả? \n    Con Tí sún lễ phép: \n    - Dạ, con đã dọn cơm rồi. Mời ba mẹ và anh Hai ăn cơm. \n    - Mày có điên không vậy con! - Hải cò giơ hai tay lên trời - Đến giờ cơm là ngồi vô ăn, chỉ có kẻ không được giáo dục đến nơi đến chốn mới làm như vậy, hiểu chưa? \n    - - Dạ, chưa hiểu. – Con Tí sún thật thà - Chứ kẻ có giáo dục thì đến giờ cơm họ làm gì hả ba? \n    - Họ đi chơi chứ làm gì. - Hải cò khoa tay như một diễn giả - Họ đi bơi, họ chơi bi-da, họ câu cá, họ chơi rượt bắt hoặc đánh nhau, nói chung họ có thể làm bất cứ chuyện gì để người khác phải đợi cơm, trừ cái chuỵên hết sứ vô văn hoá là ngồi vô bàn ăn. \n    Con Tủn tỉnh bơ đế vô: \n    - Ba con nói đúng đó con. Chỉ có bọn hư hỏng mới ăn cơm đúng giờ thôi! \n    *** \n    Lúc đầu, tôi tưởng chỉ có mình tôi khoái cái trò điên điên này. Hoá ra đứa nào cũng khoái. Trong bọn, con Tí sún là đứa hiền lành và chậm chạp nhất nhưng qua đến ngày thứ 3, nó cũng kịp thích ứng với hoàn cảnh bằng cách chỉnh thẳng Hải cò ra trận khi tới lượt nó làm mẹ. \n    2 lần 4 là mấy? \n    - Dạ, là 8. \n    Con Tí sún không quát tháo om sòm như tôi và Hải cò, nhưng mặt nó trông thật thiểu não: \n    - Sao lại là 8 hả con? Thật uổng công mẹ cho con ăn học! \n    Hải cò chớp mắt: \n    - Chứ là mấy? \n    - Là mấy cũng được nhưng không phải là 8. \n    - Mẹ ơi, theo bản cửu chương thì 2 lần 4 là 8. \n    - Mày là con vẹt hả? Bản cửu chương bảo gì mày nghe nấy là sao? Thế mày không có cái đầu à? \n    Hải cò sờ tay lên đầu, hối hận: \n    - Con đúng là một đứa không có đầu óc. Lần sau con sẽ không nghe theo bất cứ ai nữa, dù đó là bản cửu chương hay thầy cô giáo. Con hứa với mẹ con sẽ tự suy cái đầu của con. \n    Câu nói của Hải cò được coi như tuyên bố chung của cả bọn, kết thúc một thời kỳ tăm tối chỉ biết sống dựa vào sự bảo ban của người khác. Ôi, cuộc sống kể từ lúc đó mới thật đáng sống làm sao! \n    Nhưng như người ta thường nói “niềm vui ngắn chẳng tày gang”: vào cái ngày Hải cò mang bộ mặt ủ ê đến gặp tôi, chúng tôi chợt nhận ra cuộc sống vẫn xám xịt như thể xưa nay một năm vẫncó tới bốn mùa đông. \n    - Mày sao thế? Mới bị ăn đòn à? – Tôi tò mò hỏi. \n    - Ừ. Vì cái tội dám bảo chỉ có đứa đần độn mới giữ gìn tập vở sạch sẽ. \n    Con Tí sún xuất hiện với bộ mặt thảm sầu: \n    - Còn mình bị ba mình phạt vì khăng khăng 3 lần 5 không phải là 15. \n    Con Tủn góp vào hai hàng nước mắt và tiếng thút thít: \n    - Còn mình thì mặc cho ba mẹ kêu khản cả cổ, mình nhất định không chạy về ăn trưa. \n    Tôi lướt mắt nhìn ba đứa bạn, lặng lẽ thở dài. \n    Tôi tập tành làm nhà cách mạng bé con, chán nản khi không thay đổi được thế giới, đã thế còn làm vạ lây cho người khác. \n    Cho nên tôi không ủ ê, không thảm sầu, không thút thít và rưng rưng hai hàng nước mắt. \n    Nỗi đau của tôi lặn vào bên trong. Nó sâu sắc hơn, ít nhất là bằng nỗi đau của ba đứa bạn cộng lại. \n    Vì ngày hôm qua tôi bị ăn đòn vì phạm cùng lúc cả ba tội trên kia.', NULL, 'done', '2017-05-20 08:47:15', NULL),
(3, 2, NULL, NULL, 'Chuyện kể rằng nơi thảo nguyên xa xôi, có một cây cỏ xanh nhỏ bé, hát ngân nga trong những cơn gió nhẹ, bài tình ca tặng cây bụi đứng bên. Cây bụi ơi sao chẳng ngoái nhìn, cứ mải mê ngóng những ong và bướm, cứ buồn bã vì mình không có được nét rực rỡ hướng dương hay thơm ngát nụ hồng… Cây bụi không biết có một kẻ hết lòng, tặng cho Cây cả tình yêu, niềm tin, hy vọng, dồn màu xanh vào ba cánh trái tim căng mọng, yêu đơn phương không mong đợi điều chi.\n\nMỗi ngày mới khi màn đêm vừa đi, Cỏ ba lá ngước nhìn mặt trời với khát khao duy nhất, vầng dương ơi hãy lắng nghe tiếng lòng em chân thật, nguyện làm tất cả để Cây bụi được vui.. có thể chăng ban một đoá hoa thôi, là Cây bụi sẽ có được tình yêu của ong và bướm. Cỏ ba lá nhỏ nhoi nhưng tình yêu rộng lớn, có thể làm gì để thực hiện ước mơ? Trên thảo nguyên mây trắng vẫn lững lờ, gió bay qua thì thầm “cần một điều may mắn… chỉ khi nào Cỏ có bốn lá thôi…”\n\nCỏ chợt buồn vì điều đó quá xa xôi, vậy ra trong cuộc đời không chỉ cần có tình yêu, niềm tin, hy vọng… Khẽ nghiêng mình ngắm ba trái tim bé bỏng, làm sao có được một lá thứ tư? Cây bụi đứng bên vẫn ủ rũ trầm tư, Cỏ ba lá run run “vì cây em sẽ…” Cây bụi vô tâm không nghe thấy có âm thanh rất nhẹ…tiếng một trái tim vừa tự vỡ làm đôi. Cỏ ba lá giờ có bốn cánh rồi, cây bụi nở bừng những bông hoa sặc sỡ, vui sướng hân hoan trong nắng vàng rạng rỡ, đâu biết dưới chân Cỏ đang héo dần đi…\n\nHạnh phúc khi yêu là được cho đi... tình yêu đó lớn đến vỡ đôi trái tim em xanh mướt, để nhắn nhủ những ai đang kiếm tìm: may mắn không tự nhiên có được, mà đến từ tình yêu và những trái tim biết sống vị tha.', NULL, 'done', '2017-05-20 08:55:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE IF NOT EXISTS `story` (
  `story_id` int(11) NOT NULL,
  `story_name` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `description` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `author` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `cover` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other_name` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `view` int(11) DEFAULT '0',
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `slug` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`story_id`, `story_name`, `category_id`, `description`, `author`, `cover`, `other_name`, `view`, `create_time`, `update_time`, `slug`, `status`) VALUES
(1, 'Cho tôi một vé đi tuổi thơ', 1, NULL, 'Nguyễn Nhật Ánh', NULL, NULL, 0, '2017-05-20 08:49:49', NULL, 'cho-toi-xin-mot-ve-di-tuoi-tho', NULL),
(2, 'Sự tích cỏ ba lá', 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'su-tich-co-ba-la', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `viewer`
--

CREATE TABLE IF NOT EXISTS `viewer` (
  `view_id` int(11) NOT NULL,
  `story_id` int(11) DEFAULT NULL,
  `chapter_id` int(11) DEFAULT NULL,
  `number_views` int(11) DEFAULT NULL,
  `ip` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `browser` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `geolocation` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`chapter_id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`story_id`);

--
-- Indexes for table `viewer`
--
ALTER TABLE `viewer`
  ADD PRIMARY KEY (`view_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `chapter_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `story_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `viewer`
--
ALTER TABLE `viewer`
  MODIFY `view_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
