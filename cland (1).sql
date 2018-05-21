-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 21, 2018 lúc 05:23 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cland`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `cname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cid` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`cname`, `cid`) VALUES
('Nhà đất cho thuê', 1),
('Cần thuê', 2),
('Cần mua', 3),
('Đất mặt tiền', 14),
('Căn hộ cho thuê', 18);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `idComment` int(10) NOT NULL,
  `name` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_vietnamese_ci NOT NULL,
  `detail` text COLLATE utf8_vietnamese_ci NOT NULL,
  `parentid` int(10) NOT NULL,
  `newsid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`idComment`, `name`, `email`, `detail`, `parentid`, `newsid`) VALUES
(1, 'dinh', 'tdinhv@gmail.com', 'khong co chi', 0, 65);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lands`
--

CREATE TABLE `lands` (
  `lid` int(10) UNSIGNED NOT NULL,
  `lname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cid` int(10) UNSIGNED NOT NULL,
  `picture` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count_views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lands`
--

INSERT INTO `lands` (`lid`, `lname`, `description`, `date_create`, `cid`, `picture`, `area`, `address`, `count_views`) VALUES
(18, 'Cần mua đất chính chủ tại khu đô thị Mỹ Phước, Bến Cát, Bình Dương', 'Gia đình cần mua đất chính chủ đầu tư tại Mỹ Phước 1, 2, 3, 4 cần mua trực tiếp của chủ không qua môi giới, mua nhanh thanh toán nhanh. Anh chị em không có nhu cầu sử dụng xin liên hệ trực tiếp. LH: 0948146917.', '2018-05-21 03:10:43', 3, '20180329140727-c639_wm.jpg', 600, 'Khu đô thị Mỹ Phước 4, Khu đô thị Mỹ Phước 3, Mỹ Phước 2, Khu Đô thị & Công nghiệp Mỹ Phước 1 - Thị xã Bến Cát - Bình Dương', 50),
(48, 'Rosita Khang Garden Nhà Phố, Shophouse quận 9', 'Dự án nhà phố Rosita Garden của Khang Điền tại Quận 9 chính thức mở bán và nhận đặt chỗ ngay hôm nay. DỰ ÁN ROSITA GARDEN THÔNG TIN TỔNG QUAN Tên dự án: Rosita Garden Khang Điền ( Tên cũ của dự án Gia Phước Khang Điền, dự án Monada Khang Điền) Vị trí: Đường 990, Phường Phú Hữu, Quận 9', '2018-03-31 15:35:46', 3, 'du-an-nha-pho-rotisa-khang-dien.png', 135, 'Đường 990, Phường Phú Hữu, Quận 9', 150),
(52, 'Cần mua đất nhà xưởng từ 500-1000-5000 đến 1 ha hoặc 30ha', 'Cần mua đất nhà xưởng 50 năm tại Hà Nội..\r\nDiện tích: 500m2-1000m2-5000m2-10000m2-50000m2 - 30hec.\r\nĐất và nhà xưởng khu công nghiệp hoặc chuyện nhượng dự án xây dưng nhà ở.\r\nLiên hệ: 0979 538 836.', '2018-05-21 03:10:30', 3, 'vinpearl-nam-hoi-an.jpg', 300000, 'Quận Nam Từ Liêm - Hà Nội', 10),
(53, 'Vinpearl Nam Hội An – Dự án Hot nhất 2017 cam kết lợi nhuận 10% một năm.', 'Biệt thự Vincity Quận 9 là một quần thể đẳng cấp nhất của dự án khu đô thị Vincity quận 9, đây là khu biệt thự sở hữu không gian sống và tiện ích bậc nhất quận 9, đồng thời kết nối trực tiếp ra bến du thuyền duy nhất của quận', '2018-03-31 15:33:35', 17, 'vinpearl-nam-hoi-an.jpg', 1000, 'xã Bình Dương, huyện Thăng Bình, tỉnh Quảng Nam', 12),
(55, 'CHO THUÊ 120M2 VĂN PHÒNG PHỐ TRUNG KÍNH, CẦU GIẤY. LH 0986.975.523', 'Do nhu cầu sử dụng không hết, chúng tôi cần cho thuê lại tầng 5 tòa nhà văn phòng tại ngõ 219 Phố Trung Kính - Cầu Giấy. Cách đầu phố 50m, ngõ đi vào rộng 17m (đây cũng là trục đường chính đi từ Dương Đình Nghệ sang phố Trung Kính, vì vậy rất rộng rãi thoáng mát). \r\n\r\nTòa nhà Văn phòng thiết kế đẹp, đã đi vào sử dụng. Hiện nay còn trống diện tích tại tầng 5 với thông tin chi tiết như sau: \r\nDiện tích cho thuê tại tầng 5: 120m2 (bao gồm vệ sinh). \r\nVăn phòng trần thạch cao mới đẹp, đã trang bị toàn bộ đèn chiếu sáng hiện đại. \r\nNhà gỗ công nghiệp, Điều hòa âm trần Misubishi mới cứng, tòa nhà hoàn thiện bằng kính nên có nhiều không gian ánh sáng, view đẹp. \r\nThang máy mới đưa vào sử dụng, lắp mới của hãng Misubishi, \r\n\r\nGiá thuê và các quy định: \r\n1. Giá thuê: 660 USD/tháng. \r\nGiá thuê đã bao gồm, tiền điện hành lang, điện công cộng. \r\nĐã bao gồm phí vệ sinh, bao gồm tiền nước sinh hoạt. \r\nPhí gửi xe máy: 90.000đ/xe \r\nOto:Phí trông oto: 250.000đ/xe \r\nHợp đồng thuê: Dài hạn \r\nCó xuất hóa đơn VAT \r\nPhương thức thanh toán: 06 tháng/lần. \r\nBàn giao mặt bằng ngay. \r\n\r\nLiên hệ chính chủ để xem nhà và giao dịch: \r\n\r\nChị Tân: 0986 975 523 \r\n\r\nChân thành cảm ơn!', '2018-05-21 03:10:22', 1, 'biet-thu-vinpearl-nha-trang-bay-land-resort-villas-biet-thu-mau.png', 1000, 'Quận Cầu Giấy - Hà Nội', 123),
(56, 'Thiên đường nghỉ dưỡng Vinpearl Nha Trang Bay Resort & Villas', 'Ngày nay có rất nhiều du khách muốn tìm kiếm những nơi nghỉ dưỡng gần gũi với thiên nhiên, với gió biển để xa lánh hoàn toàn những bộn bề, mệt mỏi trong công việc, xa lánh sự ồn ào tấp nập của Thành phố. Dự án biệt thự biển Vinpearl Nha Trang Bay sẽ đem đến rất nhiều điều thú vị cho du khách, nơi đây bạn có thể tận hưởng trọn vẹn bầu không khí của thiên nhiên', '2018-03-31 16:11:30', 1, 'biet-thu-vinpearl-nha-trang-bay-land-resort-villas-biet-thu-mau.png', 120, 'Nha Trang', 100),
(57, 'Tiện ích cao cấp tại HomyLand 3 Quận 2', 'Căn hộ HomyLand 3 Quận 2 được đầu tư bởi công ty Bảo Sơn, là dự án được thiết kế theo phong cách tinh tế hiện đại. Với vị trí địa lý vô cùng thuận lợi là chốt giao thông thuận tiện để bạn dễ dàng di chuyển từ đây đến các khu vực trung tâm của thành phố như Quận 1, Quận 3…. hoặc các tuyến đường huyết mạch như đường Xa Lộ Hà Nội …. Nơi đây được mệnh danh là khu đô thị mới, trung tâm mới của thành phố. Trong tương lai bạn không cần phải lo lắng về vấn đề ngập úng hay ùn tắc giao thông tại đây', '2018-03-31 15:26:51', 1, 'Homyland3-Phoi-Canh-1.jpg', 160, ' Khu đô thị Đại Kim - Quận Hoàng Mai - Hà Nội ', 12),
(61, 'Chỉ 1.7 tỷ sở hữu căn hộ cao cấp Monarchy sát cầu Rồng 0914106080', 'Sàn giao dịch BĐS mở bán đợt cuối căn hộ cao cấp Monarchy Block A với các căn như sau:  - Căn hộ shophouse tầng 1 sở hữu luôn tầng lửng để ở giá. Chỉ từ 2.1 tỷ/ căn. - Căn hộ sân vườn còn 1 căn duy nhất giá 1.7 tỷ (1PN). - Căn hộ penthouse 1 căn duy nhất 2PN sở hữu sân thượng. Sức chưa 500 người giá 3.1 tỷ. - Căn hộ tiêu chuẩn còn những căn ở tầng 2 và tầng 3 giá. Chỉ từ 1.7 tỷ (2PN).  Căn hộ cao cấp Monarchy là căn hộ đầu tiên tại Đà Nẵng có công nghệ smarthome cho thuê với giá: Gần 20 triệu/ tháng.  Căn hộ Monarchy sử dụng công nghệ smarthome 4 mặt tiền view đẹp nhất Đà Nẵng.  Thiết kế tinh tế, hiện đại với 60% diện tích là cây xanh Môi trường sống trong lành giữa lòng thành phố hiện đại và năng động.  Vị trí: Nằm ngay tuyến đường du lịch Trần Hưng Đạo, cổng chính khu phức hợp căn hộ cao cấp Monarchy quay về hướng sông Hàn, đối diện là khu biệt thự cao cấp Euro.  Thông tin chi tiết:  View độc đáo: Từ căn hộ đặc biệt có thể ngắm được toàn cảnh thành phố Đà nẵng, sông Hàn thơ mộng, cầu Rồng, cầu Trần Thị Lý, công viên Châu Á, bán đảo Sơn Trà, Chùa Linh Ứng tới biển Đông. Thấp. Hấp dẫn nữa là từ căn hộ có thể chiêm ngưỡng cầu Rồng phun nước, lửa mỗi cuối tuần, pháo hoa và các lễ hội ánh sáng khác.  Thiết kế: Phòng khách + ban công, phòng ăn + bếp, 2 phòng ngủ (1 phòng ngủ khép kín), 2 phòng tắm + toilet, phòng giặt phơi.  Căn hộ được trang bị: Smarthome: Giúp gia chủ tận hưởng cuộc sống hiện đại và tiện nghi: Giải trí đa phương tiện. An ninh giám sát. Chiếu sáng thông minh. M thanh đa vùng. Điều hòa thông minh. Các tiện ích tự động. Hệ thống bảo vệ nguồn điện.  An ninh: Trong nhà: Cameara giám sát 24/7. Ngoài nhà: Bảo vệ 24/7.  Chính sách từ sàn VRM. Nhận ngay chiết khấu 8% nếu thanh toán đúng hạn. Hỗ trợ thiết kế nội thất miễn phí. Hỗ trợ cho thuê lại nhanh chóng lợi nhuận 10%/ năm. Hỗ trợ bán lại nhanh chóng thanh khoản nhanh. Hỗ trợ vay vốn lên đến 70% lãi suất thấp. Thanh toán nhiều đợt tiện lợi.  Nhanh tay để giữ cho gia đình mình căn hộ đẹp. Đầu tư mua căn hộ Monarchy tại Sàn VRM có thể cho thuê lại được ngay. Căn hộ đã hoàn thiện 100%. Mua dọn vào ở luôn.  Liên hệ: Sàn giao dịch BĐS VRM. 200 Nguyễn Hữu Thọ - Hải Châu Đà Nẵng. Điện thoại: 0914106080.', '2018-03-31 15:23:24', 17, 'noi-that-sang-trong-tai-homyland-3.jpg', 50, 'Quận Sơn Trà - Đà Nẵng', 12),
(62, 'GEM RIVERSIDE – TIỆN ÍCH SỐNG CAO CẤP, HOÀN HẢO.', 'Tọa lạc trên trục đường song hành cao tốc Long Thành – Dầu Giây , Dự án Gem Riverside có vị trí giao thông cực kỳ thuận tiện.Kết nối với các quận lân cận qua các trục đường lớn như Mai Chí Thọ, Xa Lộ Hà Nội. Rút ngắn thời gian đi lại, giúp quá trình di chuyển của cư dân trở nên thoải mát, dễ dàng hơn bao giờ hết.', '2018-03-31 15:25:19', 17, 'cho-thue-chung-cu-royal-city-r6.jpg', 65, 'Quận Sơn Trà - Đà Nẵng', 121),
(63, 'Căn hộ Khang Điền quận 9 không gian xanh, tiện ích cao cấp', 'Được đánh giá là chủ đầu tư hùng mạnh với nhiều dự án bất động sản phát triển bền vững. Dự án căn hộ Khang Điền quận 9 trở thành dự án trọng điểm của quận 9 với không gian xanh mát và tiện ích sống cao cấp cho dân cư.', '2018-03-31 16:01:34', 17, 'căn-hộ-Khang-Điền-quận-9-3.jpg', 150, 'Quận 9,TP Hồ Chí Minh', 120),
(64, 'SIÊU DỰ ÁN SHOPHOUSE LE PAVILLON – PHỐ THƯƠNG MẠI SẦM UẤT BẬC NHẤT ĐÀ NẴNG', 'Shophouse Le Paviillon nằm tại vị trí đắc địa và hiếm có tại khu vực trung tâm thành phố Đà Nẵng khi vừa sở hữu mặt sông Hàn vừa nối liền các tiện ích đẳng cấp như:\r\nĐối diện công viên Châu Á Asia Park.\r\nLiền kề khu phức hợp vui chơi Helio Center.\r\nLiền kề trung tâm thương mại Lotte Mart.\r\nView trực diện điểm bắn pháo hoa DIFF 2019', '2018-05-21 02:49:32', 14, 'noi-that-sang-trong-tai-homyland-3.jpg', 100, 'Le Pavillon Luxury - Quận Hải Châu - Đà Nẵng', 120),
(65, ' NHÀ Ở MẶT TIỀN ĐƯỜNG NGUYỄN LƯƠNG BẰNG, LIÊN CHIỂU, ĐÀ NẴNG, GÍA 3,7 TỶ', 'Nhà đẹp, rộng rãi, mặt tiền đường lớn kèm theo bề ngang lớn nên rất thuận lợi cho việc kinh doanh, buôn bán,..\r\nVị trí nằm ngay mặt tiền đường Nguyễn Lương Bằng.', '2018-05-21 03:08:31', 14, 'du-an-nha-pho-rotisa-khang-dien.png', 100, 'NGUYỄN LƯƠNG BẰNG, LIÊN CHIỂU, ĐÀ NẴNG, GÍA 3,7 TỶ', 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`role_id`, `name`) VALUES
(1, 'ADMIN'),
(2, 'EDITOR'),
(3, 'USER');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `enable` int(1) NOT NULL DEFAULT '1',
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `password`, `enable`, `role_id`) VALUES
(1, 'admin', 'Nguyễn Văn C', '12345', 1, 1),
(2, 'mod', 'Đặng Ngọc Huy', '12345', 1, 2),
(3, 'user', 'Người dùng', '12345', 1, 3),
(6, 'dinhtc0', 'Trương Văn Định', '123456', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vnecontact`
--

CREATE TABLE `vnecontact` (
  `cid` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vnecontact`
--

INSERT INTO `vnecontact` (`cid`, `fullname`, `email`, `subject`, `content`) VALUES
(1, 'Phan Quân', 'quanphan558@gmail.com', 'Phòng A1', 'Minh anh cân tất!'),
(2, 'Phan Hải', 'haiphan05@gmail.com', 'Phòng A2', 'Phan thị mua hết tất cả! '),
(3, 'Tuấn vũ', 'tvnt@gmail.com', 'land curry', 'Nhà khá ok'),
(5, 'Tran Trung Vu', 'vunt@gmail.com', 'Nhà cho thuê', 'Test nhà cho thuê'),
(6, 'Tuan Anh Vu', 'tav252548@gmail.com', 'gop y', 'noi dung chua ro rang');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cid`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idComment`);

--
-- Chỉ mục cho bảng `lands`
--
ALTER TABLE `lands`
  ADD PRIMARY KEY (`lid`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vnecontact`
--
ALTER TABLE `vnecontact`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `cid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `idComment` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `lands`
--
ALTER TABLE `lands`
  MODIFY `lid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `vnecontact`
--
ALTER TABLE `vnecontact`
  MODIFY `cid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
