-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 30, 2024 lúc 09:22 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tuananh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `email`, `image`) VALUES
(13, 'admin', '12345', 'admin@gmail.com', '2113518_AnhTheSinhVien.jpg.jpg'),
(14, 'huyquang123', '12345678', 'huy.nguyenquangk21ce@hcmut.edu.vn', '66222a01d3208.jpg'),
(15, 'quan123', '987654321', '222@gmail.com', 'avatar.jpg'),
(17, 'khanh.trankiwi', '12345', 'dsadada@gmail.com', 'avatar.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(5) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `brand_image`) VALUES
(1, 'Apple', 'https://images.fpt.shop/unsafe/fit-in/108x40/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2020/8/26/637340490193124614_iPhone-Apple@2x.jpg'),
(2, 'Samsung', 'https://images.fpt.shop/unsafe/fit-in/108x40/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2020/8/26/637340490904217021_Samsung@2x.jpg'),
(3, 'Oppo', 'https://images.fpt.shop/unsafe/fit-in/108x40/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2020/8/26/637340491304997311_Oppo@2x.jpg'),
(4, 'Xiaomi', 'https://images.fpt.shop/unsafe/fit-in/108x40/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/6/2/637582325361253577_Xiaomi@2x.jpg'),
(10, 'Realme\r\n', 'https://images.fpt.shop/unsafe/fit-in/108x40/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2020/8/26/637340491898745716_Realme@2x.jpg'),
(11, 'Vivo', 'https://images.fpt.shop/unsafe/fit-in/108x40/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/8/22/637967768466618842_vivo-icon.jpg'),
(14, 'Nokia', 'https://images.fpt.shop/unsafe/fit-in/108x40/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2020/8/26/637340493755614653_Nokia@2x.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `new`
--

CREATE TABLE `new` (
  `new_id` int(11) NOT NULL,
  `new_title` text NOT NULL,
  `new_tag` text NOT NULL,
  `new_img` text NOT NULL,
  `new_content` text NOT NULL,
  `view_count` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `new`
--

INSERT INTO `new` (`new_id`, `new_title`, `new_tag`, `new_img`, `new_content`, `view_count`, `date`) VALUES
(1, 'Lộ diện thêm hình ảnh màu sắc mới rõ nét iPhone 15 series', 'Công nghệ', './thumbnail/iphone15.jpg', '<p>Một điều chắc chắn về iPhone 15 đ&oacute; l&agrave; n&oacute; sẽ được ph&aacute;t h&agrave;nh trong th&aacute;ng 9. Ch&uacute;ng ta biết điều n&agrave;y v&igrave; Apple lu&ocirc;n rất đều đặn khi ra mắt iPhone, thường v&agrave;o th&aacute;ng 9. D&ugrave; c&oacute; thể sẽ c&oacute; sự chậm trễ trong việc ph&aacute;t h&agrave;nh sản phẩm cho người d&ugrave;ng, th&igrave; sự kiện ra mắt ch&iacute;nh thức vẫn sẽ diễn ra trong th&aacute;ng 9. Giống như thời gian ph&aacute;t h&agrave;nh, Apple cũng sử dụng cấu tr&uacute;c thiết bị v&agrave; phương thức đặt t&ecirc;n giống nhau cho c&aacute;c mẫu iPhone trong một khoảng thời gian gần đ&acirc;y. Dự kiến, Apple sẽ ra mắt bốn mẫu iPhone 15, bao gồm hai phi&ecirc;n bản iPhone 15 Pro v&agrave; hai phi&ecirc;n bản ti&ecirc;u chuẩn. Như iPhone 14, Apple dự kiến sẽ cho ra đời hai cặp điện thoại, bao gồm iPhone 15, iPhone 15 Plus, iPhone 15 Pro v&agrave; iPhone 15 Pro Max. C&ugrave;ng l&uacute;c đ&oacute; iPhone Pro Max mới dự kiến sẽ c&oacute; 2 m&agrave;u mới gồm m&agrave;u Blue v&agrave; m&agrave;u Đỏ thắm. Mặc d&ugrave; t&ecirc;n gọi c&oacute; thể kh&aacute;c nhau, nhưng k&iacute;ch thước v&agrave; kiểu thiết bị sẽ giống như trước đ&acirc;y. C&aacute;c m&ocirc; h&igrave;nh CAD, c&aacute;c mẫu in 3D v&agrave; phi&ecirc;n bản kim loại đều cho thấy k&iacute;ch thước m&agrave;n h&igrave;nh 6,1 inch v&agrave; 6,7 inch sẽ được sử dụng. C&oacute; thể sẽ c&oacute; những thay đổi cho d&ograve;ng sản phẩm iPhone 15 Pro, với những tin đồn về thiết kế viền bo tr&ograve;n hơn v&agrave; th&acirc;n m&aacute;y được sản xuất từ titanium thay v&igrave; th&eacute;p. Điều n&agrave;y c&oacute; thể gi&uacute;p giảm trọng lượng của c&aacute;c mẫu Pro một c&aacute;ch đ&aacute;ng kể. Trong khi đ&oacute;, kh&ocirc;ng c&oacute; th&ocirc;ng tin li&ecirc;n quan đến iPhone 15, cho thấy n&oacute; sẽ được sản xuất bằng vật liệu nh&ocirc;m th&ocirc;ng thường. Trong khi đ&oacute;, m&agrave;n h&igrave;nh của iPhone 15 series c&oacute; thể sẽ kh&ocirc;ng thay đổi nhiều so với iPhone 14. Trong th&aacute;ng 4, một b&aacute;o c&aacute;o cho biết m&agrave;n h&igrave;nh OLED của iPhone 15 sẽ sử dụng c&aacute;c vật liệu tương tự như iPhone 14, với sự thay đổi dự kiến sẽ xảy ra ở iPhone 16. C&aacute;c m&ocirc; h&igrave;nh cho thấy c&aacute;c viền của k&iacute;nh mặt trước của iPhone 15 Pro Max sẽ rất mỏng, điều n&agrave;y cũng được nhiều người đồn đại.&nbsp;</p>', 1, '2024-04-26'),
(2, 'PS5 Pro sẽ nhanh gấp 3 lần PS5 khi ra mắt vào cuối năm nay', 'Công nghệ', './thumbnail/ps5.jpg', '<p>Một điều chắc chắn về iPhone 15 đ&oacute; l&agrave; n&oacute; sẽ được ph&aacute;t h&agrave;nh trong th&aacute;ng 9. Ch&uacute;ng ta biết điều n&agrave;y v&igrave; Apple lu&ocirc;n rất đều đặn khi ra mắt iPhone, thường v&agrave;o th&aacute;ng 9. D&ugrave; c&oacute; thể sẽ c&oacute; sự chậm trễ trong việc ph&aacute;t h&agrave;nh sản phẩm cho người d&ugrave;ng, th&igrave; sự kiện ra mắt ch&iacute;nh thức vẫn sẽ diễn ra trong th&aacute;ng 9. Giống như thời gian ph&aacute;t h&agrave;nh, Apple cũng sử dụng cấu tr&uacute;c thiết bị v&agrave; phương thức đặt t&ecirc;n giống nhau cho c&aacute;c mẫu iPhone trong một khoảng thời gian gần đ&acirc;y. Dự kiến, Apple sẽ ra mắt bốn mẫu iPhone 15, bao gồm hai phi&ecirc;n bản iPhone 15 Pro v&agrave; hai phi&ecirc;n bản ti&ecirc;u chuẩn. Như iPhone 14, Apple dự kiến sẽ cho ra đời hai cặp điện thoại, bao gồm iPhone 15, iPhone 15 Plus, iPhone 15 Pro v&agrave; iPhone 15 Pro Max. C&ugrave;ng l&uacute;c đ&oacute; iPhone Pro Max mới dự kiến sẽ c&oacute; 2 m&agrave;u mới gồm m&agrave;u Blue v&agrave; m&agrave;u Đỏ thắm. Mặc d&ugrave; t&ecirc;n gọi c&oacute; thể kh&aacute;c nhau, nhưng k&iacute;ch thước v&agrave; kiểu thiết bị sẽ giống như trước đ&acirc;y. C&aacute;c m&ocirc; h&igrave;nh CAD, c&aacute;c mẫu in 3D v&agrave; phi&ecirc;n bản kim loại đều cho thấy k&iacute;ch thước m&agrave;n h&igrave;nh 6,1 inch v&agrave; 6,7 inch sẽ được sử dụng. C&oacute; thể sẽ c&oacute; những thay đổi cho d&ograve;ng sản phẩm iPhone 15 Pro, với những tin đồn về thiết kế viền bo tr&ograve;n hơn v&agrave; th&acirc;n m&aacute;y được sản xuất từ titanium thay v&igrave; th&eacute;p. Điều n&agrave;y c&oacute; thể gi&uacute;p giảm trọng lượng của c&aacute;c mẫu Pro một c&aacute;ch đ&aacute;ng kể. Trong khi đ&oacute;, kh&ocirc;ng c&oacute; th&ocirc;ng tin li&ecirc;n quan đến iPhone 15, cho thấy n&oacute; sẽ được sản xuất bằng vật liệu nh&ocirc;m th&ocirc;ng thường. Trong khi đ&oacute;, m&agrave;n h&igrave;nh của iPhone 15 series c&oacute; thể sẽ kh&ocirc;ng thay đổi nhiều so với iPhone 14. Trong th&aacute;ng 4, một b&aacute;o c&aacute;o cho biết m&agrave;n h&igrave;nh OLED của iPhone 15 sẽ sử dụng c&aacute;c vật liệu tương tự như iPhone 14, với sự thay đổi dự kiến sẽ xảy ra ở iPhone 16. C&aacute;c m&ocirc; h&igrave;nh cho thấy c&aacute;c viền của k&iacute;nh mặt trước của iPhone 15 Pro Max sẽ rất mỏng, điều n&agrave;y cũng được nhiều người đồn đại.&nbsp;</p>', 0, '2024-04-26'),
(3, 'Công Phượng ghi dấu ấn trong lần đầu đá chính tại Nhật Bản', 'Thể Thao', './thumbnail/cong phuong 2.png', '<p>Trong lần đầu đ&aacute; ch&iacute;nh tại Nhật Bản,&nbsp;<a href=\"https://znews.vn/tieu-diem/cau-thu-cong-phuong.html\">C&ocirc;ng Phượng</a>&nbsp;c&oacute; m&agrave;n thể hiện kh&aacute; ổn. Tuyển thủ Việt Nam được chơi 68 ph&uacute;t. Anh c&oacute; 1 c&uacute; s&uacute;t tr&uacute;ng đ&iacute;ch, 3 lần tạo cơ hội từ chấm đ&aacute; phạt g&oacute;c v&agrave; nhận một thẻ v&agrave;ng. Sau tiếng c&ograve;i khai cuộc, Yokohama d&agrave;nh cho Okayama bất ngờ, khi dồn kh&aacute; nhiều b&oacute;ng cho C&ocirc;ng Phượng, người được bố tr&iacute; ở vị tr&iacute; tiền vệ tấn c&ocirc;ng lệch phải. Ngay ph&uacute;t thứ 5, cựu sao HAGL đ&atilde; c&oacute; cơ hội đối mặt thủ m&ocirc;n. Anh tung c&uacute; s&uacute;t căng nhưng kh&ocirc;ng đủ hiểm để mở tỷ số. Chỉ 2 ph&uacute;t sau, C&ocirc;ng Phượng tiếp tục ghi dấu ấn với pha treo b&oacute;ng kh&oacute; chịu, buộc thủ m&ocirc;n đội chủ nh&agrave; phải vất vả lao ra đấm b&oacute;ng giải nguy. Sau khoảng 10 ph&uacute;t bị C&ocirc;ng Phượng g&acirc;y kh&oacute; khăn, Okayama chấn chỉnh lại đội h&igrave;nh v&agrave; bịt khoảng trống b&ecirc;n c&aacute;nh phải. Ng&ocirc;i sao của tuyển Việt Nam bị k&egrave;m chặt v&agrave; kh&ocirc;ng c&oacute; th&ecirc;m cơ hội dứt điểm. Ph&uacute;t 29, C&ocirc;ng Phượng tạo ra t&igrave;nh huống s&oacute;ng gi&oacute; trong v&ugrave;ng cấm đội chủ nh&agrave; bằng một pha đ&aacute; phạt g&oacute;c. B&oacute;ng được số 28 treo đến đ&uacute;ng vị tr&iacute; của Katsuya Iwatake. Tuy nhi&ecirc;n, số 22 của Yokohama lại kh&ocirc;ng dứt điểm m&agrave; chọn phương &aacute;n l&agrave;m tường, để rồi bị h&agrave;ng thủ chủ nh&agrave; ngăn chặn. Trong lần đầu đ&aacute; ch&iacute;nh tại Nhật Bản, C&ocirc;ng Phượng để lại nhiều dấu ấn ở mặt trận tấn c&ocirc;ng. Tuy nhi&ecirc;n, anh vẫn để lộ điểm yếu về thể lực v&agrave; khả năng tranh chấp, do đ&atilde; trải qua qu&atilde;ng thời gian d&agrave;i kh&ocirc;ng được thi đấu.&nbsp;Hiệp một c&oacute; 2 b&agrave;n thắng được ghi. Yudai Tanaka mở tỷ số cho Okayama sau một pha đệm cận th&agrave;nh ở ph&uacute;t 15. Đến ph&uacute;t 42, Yokohama gỡ h&ograve;a 1-1, sau si&ecirc;u phẩm s&uacute;t xa của Hinata Ogura. Nhờ khả năng đột biến từ những pha b&oacute;ng cố định, C&ocirc;ng Phượng tiếp tục được giữ tr&ecirc;n s&acirc;n ở hiệp hai. Ph&uacute;t 53, cầu thủ gốc Nghệ An su&yacute;t c&oacute; pha kiến tạo đầu ti&ecirc;n. T&igrave;nh huống đ&aacute; phạt g&oacute;c của số 28 tạo cơ hội cho Solomon Sakuragawa băng v&agrave;o dứt điểm cận th&agrave;nh. Tuy nhi&ecirc;n, anh lại đ&aacute; hụt b&oacute;ng đ&aacute;ng tiếc. Đến ph&uacute;t 68, C&ocirc;ng Phượng được thay ra nghỉ, qua đ&oacute; kh&eacute;p lại ng&agrave;y thi đấu kh&aacute; tốt. Những c&aacute;i t&ecirc;n được HLV đưa v&agrave;o thay C&ocirc;ng Phượng đều kh&ocirc;ng thể gi&uacute;p Yokohama tạo kh&aacute;c biệt.&nbsp;Hai đội h&ograve;a 2-2 trong 90 ph&uacute;t, để rồi phải thi đấu th&ecirc;m hiệp phụ. Okayama vượt l&ecirc;n dẫn trước nhưng Yokohama kịp gỡ h&ograve;a 3-3 nhờ c&ocirc;ng của Caprini, cầu thủ v&agrave;o thay C&ocirc;ng Phượng. Trong loạt lu&acirc;n lưu, Yokohama gi&agrave;nh chiến thắng với tỷ số 5-3, qua đ&oacute; gi&agrave;nh quyền v&agrave;o v&ograve;ng 32 đội. C&ocirc;ng Phượng sẽ tiếp tục c&oacute; cơ hội ra s&acirc;n ở những trận tiếp theo</p>', 0, '2024-04-26'),
(4, 'Counter-Strike 2 tiếp tục khiến người chơi khó chịu, yêu cầu thêm hàng loạt tính năng, chỉnh sửa', 'Game', './thumbnail/cs2.jpg', '<p>Kể từ khi nh&aacute; h&agrave;ng sự xuất hiện của Counter-Strike 2, Valve đ&atilde; khiến cộng đồng m&ograve;n mỏi ng&oacute;ng chờ v&agrave; cũng gi&uacute;p cho dự &aacute;n thu về v&ocirc; số sự kỳ vọng. Thế n&ecirc;n, cũng dễ hiểu khi ở thời điểm Counter-Strike 2 được c&ocirc;ng bố c&aacute;ch đ&acirc;y chưa l&acirc;u, mọi &aacute;nh mắt đ&atilde; đổ dồn v&agrave;o bom tấn n&agrave;y v&agrave; mong chờ những đổi mới chất lượng, th&uacute; vị. Tuy vậy, c&oacute; vẻ như cũng giống với rất nhiều bom tấn kh&aacute;c, Counter-Strike 2 đang thiếu đi v&ocirc; số t&iacute;nh năng v&agrave; khiến đa số c&aacute;c game thủ phải cảm thấy kh&oacute; chịu. Đầu ti&ecirc;n chắc chắn phải kể tới việc trong Counter-Strike 2, người chơi đ&atilde; kh&ocirc;ng thể chỉnh sửa, thay đổi tay cầm s&uacute;ng như trước m&agrave; lu&ocirc;n cố định ở tay phải. Điều n&agrave;y tạo ra sự kh&ocirc;ng thoải m&aacute;i nhất định đối với một bộ phận người chơi vốn đ&atilde; qu&aacute; quen thuộc với việc sử dụng tay tr&aacute;i khi chiến đấu của m&igrave;nh. Ngo&agrave;i ra, đ&oacute; c&ograve;n l&agrave; một số vấn đề li&ecirc;n quan tới hiệu suất cũng khiến c&aacute;c game thủ cảm thấy phiền l&ograve;ng. V&agrave; mới đ&acirc;y th&ocirc;i, c&aacute;c game thủ lại tiếp tục bất b&igrave;nh trước một điều nữa, đ&oacute; l&agrave; thật kh&oacute; để c&oacute; thể đầu h&agrave;ng trong một trận đấu. Cụ thể, kh&ocirc;ng &iacute;t &yacute; kiến cho rằng mặc d&ugrave; họ c&oacute; đa số phiếu bầu, nhưng vẫn kh&ocirc;ng thể lựa chọn đầu h&agrave;ng, tho&aacute;t khỏi trận đấu để tiết kiệm thời gian v&igrave; một vấn đề rất kh&oacute; chịu: kh&ocirc;ng đủ th&agrave;nh vi&ecirc;n. Theo đ&oacute;, ngay cả khi một người chơi đ&atilde; ngắt kết nối, hoặc tệ hơn l&agrave; rời bỏ tr&ograve; chơi, c&aacute;c th&agrave;nh vi&ecirc;n c&ograve;n lại vẫn kh&ocirc;ng được ph&eacute;p đầu h&agrave;ng m&agrave; buộc phải tiếp tục game đấu trong điều kiện bất lợi, thiếu c&ocirc;ng bằng v&agrave; g&acirc;y l&atilde;ng ph&iacute; thời gian cực độ. C&oacute; vẻ như Valve coi người chơi đ&atilde; rời khỏi l&agrave; một phiếu trắng v&agrave; việc bỏ phiếu đầu h&agrave;ng sẽ trở n&ecirc;n v&ocirc; hiệu lực. Nhiều người c&ograve;n cảm thấy h&agrave;i hước hơn khi biết rằng c&aacute;ch đ&acirc;y chưa l&acirc;u, Counter-Strike 2 cũng từng ph&aacute;t sinh lỗi chỉ cần một người chơi đồng &yacute; đầu h&agrave;ng, trận đấu sẽ tự động kết th&uacute;c v&agrave; những người kh&aacute;c bị xử thua. Hiện tại, Valve vẫn chưa đưa ra bất kỳ th&ocirc;ng b&aacute;o n&agrave;o li&ecirc;n quan tới vấn đề n&agrave;y cũng như chưa đề cập tới việc sẽ v&aacute;, sửa c&aacute;c lỗi ph&aacute;t sinh n&agrave;y ra sao. D&ugrave; vậy, hy vọng trong tương lai gần, sẽ c&oacute; một phi&ecirc;n bản cập nhật mới sớm được tung ra để mang tới những trải nghiệm ho&agrave;n hảo nhất cho c&aacute;c game thủ Counter-Strike 2.&nbsp;</p>\r\n<div id=\"admzone474524\"></div>', 0, '2024-04-26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `new_tag`
--

CREATE TABLE `new_tag` (
  `tag_id` int(11) NOT NULL,
  `tag_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `new_tag`
--

INSERT INTO `new_tag` (`tag_id`, `tag_name`) VALUES
(2, 'Công nghệ'),
(3, 'Thể Thao'),
(4, 'Game');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `products_id` int(5) NOT NULL,
  `products_name` varchar(255) NOT NULL,
  `image` char(255) NOT NULL,
  `image_desc_1` varchar(255) NOT NULL,
  `image_desc_2` varchar(255) NOT NULL,
  `image_desc_3` varchar(255) NOT NULL,
  `price` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `brand_id` int(5) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `rating_tb` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`products_id`, `products_name`, `image`, `image_desc_1`, `image_desc_2`, `image_desc_3`, `price`, `description`, `brand_id`, `discount`, `rating_tb`) VALUES
(14, 'iPhone 15 Pro Max', 'https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/10/30/638342502751589917_ip-15-pro-max-dd-bh-2-nam.jpg', 'https://images.fpt.shop/unsafe/fit-in/665x374/filters:quality(100):fill(white)/fptshop.com.vn/Uploads/Originals/2023/10/12/638327041739564335_iphone-15-pro-max-5.jpg', 'https://images.fpt.shop/unsafe/fit-in/665x374/filters:quality(100):fill(white)/fptshop.com.vn/Uploads/Originals/2023/10/12/638327041739877048_iphone-15-pro-max-2.jpg', 'https://images.fpt.shop/unsafe/fit-in/665x374/filters:quality(100):fill(white)/fptshop.com.vn/Uploads/Originals/2023/10/12/638327041738940000_iphone-15-pro-max-12.jpg', '29.590.000', 'Không', 1, '34.990.000', '3'),
(16, 'iPhone 15 Plus', 'https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/10/30/638342507329455238_ip-15-plus-dd-bh-2-nam.jpg', 'https://images.fpt.shop/unsafe/fit-in/665x374/filters:quality(100):fill(white)/fptshop.com.vn/Uploads/Originals/2023/9/13/638302007166386978_1_iPhone_15_Plus_Lineup_Screen__WWEN.jpg', 'https://images.fpt.shop/unsafe/fit-in/665x374/filters:quality(100):fill(white)/fptshop.com.vn/Uploads/Originals/2023/9/13/638302007167793202_5_VN_iPhone_15_Plus_Blue_PDP_Image_Position-4_Design_Detail_Colors.jpg', 'https://images.fpt.shop/unsafe/fit-in/665x374/filters:quality(100):fill(white)/fptshop.com.vn/Uploads/Originals/2023/9/13/638302007254013075_iPhone_15_Plus_iPhone_15_Pink_Combo_Screen__WWEN.jpg', '22.590.000', 'Không', 1, '25.990.000', '3'),
(17, 'iPhone 14 Plus', 'https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/2/20/638440340613418500_iphone-14-plus-dd-bh.jpg', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/Tin-Tuc/02/iPhone-14-Plus.jpg', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/Tin-Tuc/02/Camera-iPhone-14-Plus.jpg', 'https://images.fpt.shop/unsafe/fit-in/960x640/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2022/10/28/638025684533145896_iPhone%2014%20Plus%20(14).jpg', '19.890.000', 'Không', 1, '24.990.000', '0'),
(18, 'iPhone 13', 'https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/1/11/638090353746989186_iphone-13-dd-bh.jpg', 'https://images.fpt.shop/unsafe/fit-in/960x640/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2022/4/4/637846768629201772_iphone-13-all.jpg', 'https://images.fpt.shop/unsafe/fit-in/960x640/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2022/7/28/637946196746975426_iPhone%2013%20(2).jpg', 'https://images.fpt.shop/unsafe/fit-in/960x640/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2022/7/28/637946196746819159_iPhone%2013%20(1).jpg', '13.790.000', 'Không', 1, '18.990.000', '0'),
(19, 'Samsung Galaxy Z Flip5 5G', 'https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/3/28/638472349027667377_samsung-galaxy-zflip-5-dd-ai.jpg', 'https://images.fpt.shop/unsafe/fit-in/960x640/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2023/8/23/638283840025352313_Samsung-Z-Flip5-19.jpg', 'https://images.fpt.shop/unsafe/fit-in/960x640/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2023/8/23/638283839972007494_Samsung-Z-Flip5-5.jpg', 'https://images.fpt.shop/unsafe/fit-in/960x640/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2023/8/23/638283840049060409_Samsung-Z-Flip5-24.jpg', '16.990.000', 'Khong', 2, '25.990.000', '0'),
(20, 'Samsung Galaxy Z Fold5 5G', 'https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/3/28/638472349027667377_samsung-galaxy-zfold-5-dd-ai.jpg', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/Tin-Tuc/hongtt34/Samsung-Galaxy-Z-Fold5.jpg', 'https://images.fpt.shop/unsafe/fit-in/960x640/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2023/8/23/638283859706287261_Samsung-Z-Fold5-18.jpg', 'https://images.fpt.shop/unsafe/fit-in/960x640/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2023/8/23/638283859721462553_Samsung-Z-Fold5-29.jpg', '29.990.000', 'Không', 2, '40.990.000', '0'),
(21, 'Samsung Galaxy A55 5G', 'https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/3/11/638457515829366961_samsung-galaxy-a55-dd.jpg', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/0511/Samsung-Galaxy-A55-5G-2.jpg', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/0511/camera-Samsung-Galaxy-A55-5G.jpg', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/0511/camera-Samsung-Galaxy-A55-5G-7.jpg', '9.690.000', 'Không', 2, '9.990.000', '0'),
(22, 'Vivo Y22s', 'https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/9/9/637983398315589960_vivo-y22s-xanh-dd.jpg', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/vivo-y22s-1.jpg', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/man-hinh-vivo-y22s.png', 'https://images.fpt.shop/unsafe/fit-in/960x640/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2022/8/19/637965269604575631_vivo-y22-s-21.jpg', '4.990.000', 'Không', 11, '5.990.000', '0'),
(24, 'Samsung Galaxy S23 Ultra 5G ', 'https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/3/27/638471599704942918_samsung-galaxy-s23-ultra-xanh-dd-AI.jpg', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/Tin-Tuc/02/Samsung-Galaxy-S23-Ultra-1(1).jpg', 'https://images.fpt.shop/unsafe/fit-in/960x640/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2023/2/16/638121659825996462_DSC09673.JPG', 'https://images.fpt.shop/unsafe/fit-in/960x640/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2023/2/16/638121659917202806_DSC09683.JPG', '24.990.000', 'Không', 2, '31.990.000', '0'),
(31, 'OPPO Find N3 Flip 5G', 'https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/11/7/638349536350266653_oppo-find-n3-5g-vang-8.jpg', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/Tin-Tuc/hongtt34/OPPO-Find-N3-Flip.jpg', 'https://images.fpt.shop/unsafe/fit-in/960x640/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2023/10/24/638337593642086343_OPPO-FIND-N3-FLIP-15.jpg', 'https://images.fpt.shop/unsafe/fit-in/960x640/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2023/10/24/638337593633638745_OPPO-FIND-N3-FLIP-08.jpg', '22.990.000', 'k', 3, '24.900.000', '0'),
(32, 'OPPO Reno10 5G', 'https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/7/19/638253719457391276_oppo-reno10-5g-xanh-5.jpg', 'https://images.fpt.shop/unsafe/fit-in/960x640/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2024/2/23/638442767026181500_OPPO-RENO10-7.jpg', 'https://images.fpt.shop/unsafe/fit-in/960x640/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2024/2/23/638442767066176994_OPPO-RENO10-10.jpg', 'https://images.fpt.shop/unsafe/fit-in/960x640/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2024/2/23/638442767107178820_OPPO-RENO10-19.jpg', '8.490.000', 'l', 3, '9.990.000', '5'),
(33, 'OPPO Reno8 T 4G', 'https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/3/27/638155148198300095_oppo-reno8-t-4g-dd.jpg', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/Tin-Tuc/02/OPPO-Reno8-T-4G(1).jpg', 'https://images.fpt.shop/unsafe/fit-in/960x640/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2023/2/13/638118865556859059_HASP-Oppo%20Reno%208T%20(24).JPG', 'https://images.fpt.shop/unsafe/fit-in/960x640/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2023/2/13/638118865730340913_HASP-Oppo%20Reno%208T%20(35).JPG', '6.990.000', 'k', 3, ' 8.490.000', '0'),
(34, 'OPPO A78', 'https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/7/5/638241536485031136_oppo-a78-den-dd.jpg', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/Tin-Tuc/02/OPPO-A78-1.jpg', 'https://images.fpt.shop/unsafe/fit-in/800x800/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2022/3/1/637817435459912672_acer-nitro-gaming-an515-58-den-2.jpg', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/Tin-Tuc/02/Man-hinh-OPPO-A78.jpg', '6.990.000', '', 3, '8.440.000', '0'),
(35, 'Xiaomi 14', 'https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/3/26/638470498770132071_xiaomi-14-dd-bh.jpg', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/ThienNDDD/xiaomi-14-2.jpg', 'https://images.fpt.shop/unsafe/fit-in/800x800/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2020/11/12/637407982638531818_mba-2020-gray-2.png', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/ThienNDDD/xiaomi-14-3.jpg', '20.990.000', 'Không', 4, '22.990.000', '0'),
(36, 'Xiaomi Redmi Note 13 Pro+ 5G', 'https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/1/29/638421257525766915_xiaomi-redmi-note-13-pro-plus-dd-bh.jpg', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/ThienNDDD/redmi-note-13-pro-plus-2(1).jpg', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/ThienNDDD/redmi-note-13-pro-plus-1(1).jpg', 'https://images.fpt.shop/unsafe/fit-in/960x640/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2024/1/17/638411060669109424_7.jpg', '10.490.000', 'Không', 4, '10.990.000', '0'),
(37, 'Xiaomi Poco M6 Pro ', 'https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/1/25/638417729562660990_xiaomi-poco-m6-pro-dd-docquyen-bh.jpg', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/ThienNDDD/poco-m6-pro-1.jpg', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/ThienNDDD/poco-m6-pro-2.jpg', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/ThienNDDD/poco-m6-pro-10.jpg', '5.990.000', 'Kohng', 4, '6.490.000', '0'),
(38, 'Xiaomi Redmi Note 13 Pro ', 'https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/2/19/638439585124761983_xiaomi-redmi-note-13-pro-dd.jpg', 'https://images.fpt.shop/unsafe/fit-in/960x640/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2024/2/26/638445367234718780_Xiaomi%20Redmi%2013%20Pro-4.jpg', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/ThienNDDD/redmi-note-13-pro-1.jpg', 'https://images.fpt.shop/unsafe/fit-in/960x640/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2024/2/26/638445367240863682_Xiaomi%20Redmi%2013%20Pro-8.jpg', '6.890.000', 'K', 4, '7.290.000', '0'),
(39, 'Realme C51', 'https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/2/1/638423850797799428_realme-c51-dd-doimoi.jpg', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/Tin-Tuc/AnhNQ/04082023/realme-c51-1.jpg', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/Tin-Tuc/AnhNQ/04082023/realme-c51-9.jpg', 'https://images.fpt.shop/unsafe/fit-in/960x640/filters:quality(90):fill(white):upscale()/fptshop.com.vn/Uploads/Originals/2024/2/23/638442761954000475_4.jpg', '4.090.000', 'k', 10, '4.490.000', '0'),
(40, 'Vivo V25e', 'https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/9/14/637987654083012579_vivo-v25e-vang-dd.jpg', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/ThienNDDD/vivo-V25e-1.png', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/ThienNDDD/vivo-V25e-3.png', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/ThienNDDD/vivo-V25e-8.png', '5.490.000', 'k', 11, '8.490.000', '0'),
(41, 'Nokia 110 DS Pro 4G', 'https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/8/14/638276301133266677_nokia-110-ds-pro-4g-dd.jpg', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/ThienNDDD/nokia-110-ds-pro-4g.png', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/ThienNDDD/nokia-110-ds-pro-4g-1.png', 'https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/ThienNDDD/nokia-110-ds-pro-4g-2.png', '', '720.000', 14, '900.000', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reviews`
--

CREATE TABLE `reviews` (
  `cmt_id` int(10) NOT NULL,
  `pr_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rating` int(10) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `reviews`
--

INSERT INTO `reviews` (`cmt_id`, `pr_id`, `name`, `rating`, `comment`, `time`) VALUES
(133, 32, 'ngoquanghai', 5, 'test', '2024-04-16 11:50:15'),
(134, 16, 'admin', 3, 'Trung bình', '2024-04-26 10:58:23'),
(135, 14, 'admin', 3, 'ngon ok', '2024-04-26 22:13:11'),
(136, 0, 'admin', 0, '', '2024-04-30 13:45:10'),
(137, 0, 'admin', 0, '', '2024-04-30 13:45:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_order`
--

CREATE TABLE `user_order` (
  `order_id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(5) NOT NULL,
  `total_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user_order`
--

INSERT INTO `user_order` (`order_id`, `name`, `email`, `phone`, `address`, `order_content`, `product_id`, `total_price`) VALUES
(1, 'tuan', '222@gmail.com', '0123456789', 'hcm', 'iPhone 15 Plus(16)', 16, '22.590.000 đ'),
(2, 'tuan', '222@gmail.com', '0312865743', 'hcm', 'Realme C51(39)x2: 8180000đ, ', 39, '8.180.000 đ'),
(3, 'PayOS Entry Test', 'admin@gmail.com', '0344768682', '8/19 Đội Cấn', 'iPhone 15 Plus(16)x1: 22590000đ, ', 16, '22.590.000 đ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `new`
--
ALTER TABLE `new`
  ADD PRIMARY KEY (`new_id`);

--
-- Chỉ mục cho bảng `new_tag`
--
ALTER TABLE `new_tag`
  ADD PRIMARY KEY (`tag_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`products_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Chỉ mục cho bảng `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`cmt_id`);

--
-- Chỉ mục cho bảng `user_order`
--
ALTER TABLE `user_order`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `new`
--
ALTER TABLE `new`
  MODIFY `new_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `new_tag`
--
ALTER TABLE `new_tag`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `products_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `reviews`
--
ALTER TABLE `reviews`
  MODIFY `cmt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT cho bảng `user_order`
--
ALTER TABLE `user_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
