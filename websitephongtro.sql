-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 22, 2023 lúc 06:23 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `websitephongtro`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anhdinhkem`
--

CREATE TABLE `anhdinhkem` (
  `id` int(11) NOT NULL,
  `anh` varchar(1000) NOT NULL,
  `baidang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `anhdinhkem`
--

INSERT INTO `anhdinhkem` (`id`, `anh`, `baidang_id`) VALUES
(6, 'z4142187654333-a20d9a9448881e58327b5493d3ee1937_1677496970 (1).jpg', 2),
(7, 'z4142187643108-fcf48b817842db20df21e039912304fd_1677496970.jpg', 2),
(8, 'z4142187654333-a20d9a9448881e58327b5493d3ee1937_1677496970.jpg', 2),
(9, 'z4142187630715-2eeff8b991284ece955227ba6407154d_1677496969.jpg', 2),
(10, 'z4142198460834-d584617632ced526a61fb58896de522e_1677496958.jpg', 2),
(17, 'img-1679404393569-1679404422781_1679488031.jpg', 4),
(18, 'img-1679404393701-1679404424884_1679488031.jpg', 4),
(19, 'img-1679404393469-1679404420301_1679488018.jpg', 4),
(29, 'z4199570071023-2856900f211301bb102c55f06a934f96_1679396362.jpg', 3),
(30, 'z4173439666746-58dce2a57d2d609d9a3c06d8df6b195c_1679396358.jpg', 3),
(31, 'z4173426471497-52fa33863e26c9aa97d90cd7080519e7_1679396356.jpg', 3),
(32, 'z4173426434190-7b00ad3db5c5daaf15a8b412b8f1660b_1679396356.jpg', 3),
(33, 'z4173426414905-8b9e9b02e515d3c4bddb649ce89a9f5b_1679396354.jpg', 3),
(34, 'z4173426408294-c534ad81dd94abb382aad2560ce2304a_1679396354.jpg', 3),
(35, '2d7cbb95-23aa-4d52-8fad-0639ed39bfa7_1679121834.jpg', 6),
(36, '59dc4b36-2ab4-432b-934e-fbb53f58c2a3_1679121832.jpg', 6),
(37, '3796dbcf-6e67-4529-b7d2-1be4f8801484_1676280514.jpg', 6),
(38, '79ff108d-449a-4481-8dc3-34867c560450_1676280513.jpg', 6),
(39, 'f73ffe11-573e-4edd-82bf-4199247a2316_1676280511.jpg', 6),
(40, 'ad89d1bb-7122-4e15-ae7a-561e27214758_1676280512.jpg', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baidang`
--

CREATE TABLE `baidang` (
  `id` int(11) NOT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `tieude` varchar(1000) NOT NULL,
  `anh` varchar(1000) NOT NULL,
  `gia` varchar(500) NOT NULL,
  `diachi` text NOT NULL,
  `thoigiandang` date DEFAULT current_timestamp(),
  `sodienthoai` varchar(500) NOT NULL,
  `mota` text NOT NULL,
  `bando` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `baidang`
--

INSERT INTO `baidang` (`id`, `nguoidung_id`, `tieude`, `anh`, `gia`, `diachi`, `thoigiandang`, `sodienthoai`, `mota`, `bando`) VALUES
(2, 1, 'Phòng trọ Tân Bình, full tiện nghi, giá ưu đãi', 'z4142198460834-d584617632ced526a61fb58896de522e_1677496958.jpg', '4000000', '54/37 Đường Bạch Đằng, Phường 2, Quận Tân Bình, Hồ Chí Minh', '2023-03-19', '0321212121', '<p>&bull;Địa chỉ: 54/37 Bạch Đằng, Phường 2, Quận T&acirc;n B&igrave;nh.</p>\r\n\r\n<p>&bull;To&agrave; nh&agrave; c&oacute; 107 ph&ograve;ng với diện t&iacute;ch từ 15-20m2, được trang bị đầy đủ nội thất như m&aacute;y lạnh, m&aacute;y nước n&oacute;ng, kệ bếp, kệ ch&eacute;n, lavabo... Ph&ograve;ng đẹp, sạch sẽ, c&oacute; cửa sổ tho&aacute;ng v&agrave; kệ bếp rộng.</p>\r\n\r\n<p>&bull;Tiện &iacute;ch bao gồm:</p>\r\n\r\n<p>-Nước uống miễn ph&iacute;</p>\r\n\r\n<p>-Hầm để xe th&ocirc;ng tho&aacute;ng v&agrave; rộng r&atilde;i</p>\r\n\r\n<p>-C&oacute; thang m&aacute;y hiện đại, kho&aacute; cổng bằng v&acirc;n tay, camera an ninh.</p>\r\n\r\n<p>-Dịch vụ dọn dẹp vệ sinh hằng ng&agrave;y</p>\r\n\r\n<p>-M&aacute;y giặt tự động, s&acirc;n phơi tho&aacute;ng m&aacute;t.</p>\r\n\r\n<p>- Khu&ocirc;n vi&ecirc;n c&oacute; nhiều c&acirc;y xanh v&agrave; ghế đ&aacute; để thư gi&atilde;n.</p>\r\n\r\n<p>&bull;Gi&aacute; thu&ecirc; ph&ograve;ng: Dao động từ 4.9 - 6 triệu đồng (t&ugrave;y diện t&iacute;ch)</p>\r\n\r\n<p>&bull;Ph&iacute; dịch vụ:</p>\r\n\r\n<p>-điện: 3.8k</p>\r\n\r\n<p>- nước: 80k/người</p>\r\n\r\n<p>-Giữ xe: 150k/chiếc</p>\r\n\r\n<p>-M&aacute;y giặt: 20k/1 lần</p>\r\n\r\n<p>-Dịch vụ ph&ograve;ng: 200k</p>\r\n\r\n<p>Đến với nh&agrave; trọ 54/37 Bạch Đằng, qu&yacute; kh&aacute;ch sẽ được tận hưởng kh&ocirc;ng gian sống tiện nghi, thoải m&aacute;i, đồng thời tiết kiệm chi ph&iacute; cho một kỳ nghỉ d&agrave;i hạn. H&atilde;y li&ecirc;n hệ HOTLINE 1900 5049 hoặc 0827372737 (sms, call, zalo) đặt ph&ograve;ng ngay h&ocirc;m nay để trải nghiệm những tiện &iacute;ch tuyệt vời tại đ&acirc;y nh&eacute;!</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.9738120646043!2d106.6698888132435!3d10.813315892296503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175291f69adc1d9%3A0xe53fdff7d8a9cafe!2zNTQvMzcgQuG6oWNoIMSQ4bqxbmcsIFBoxrDhu51uZyAyLCBUw6JuIELDrG5oLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1679214454577!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(3, 1, 'PHÒNG ĐẸP - GIÁ CỰC TỐT CHỈ VỚI 4TRIEU5', 'z4173426408294-c534ad81dd94abb382aad2560ce2304a_1679396354.jpg', '4500000', '54/37 Đường Bạch Đằng, Phường 2, Quận Tân Bình, Hồ Chí Minh', '2023-03-22', '0827372737', '<p>Vị tr&iacute; đắc địa ngay trung t&acirc;m quận T&acirc;n B&igrave;nh</p>\r\n\r\n<p>Muốn c&oacute; ph&ograve;ng đẹp như h&igrave;nh alo nhấc m&aacute;y gọi liền 1900 5049</p>\r\n\r\n<p>Đầy đủ c&aacute;c tiện &iacute;ch: m&aacute;y lạnh / m&aacute;y n&oacute;ng lạnh / kệ bếp / nước uống / m&aacute;y giặt / c&acirc;y xanh ghế đ&aacute; &hellip;</p>\r\n\r\n<p>Li&ecirc;n hệ thu&ecirc; ph&ograve;ng: 0963.548.594 hoặc zalo 08.2737.2737</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.9738120646043!2d106.6698888132435!3d10.813315892296503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175291f69adc1d9%3A0xe53fdff7d8a9cafe!2zNTQvMzcgQuG6oWNoIMSQ4bqxbmcsIFBoxrDhu51uZyAyLCBUw6JuIELDrG5oLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1679495460875!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(4, 1, 'Cho thuê phòng trọ tại phường 11 quận Gò Vấp', 'img-1679404393569-1679404422781_1679488031.jpg', '2200000', 'Đường số 8, Phường 11, Quận Gò Vấp, Hồ Chí Minh', '2023-03-22', '0975373408', '<p>Ph&ograve;ng trọ nguy&ecirc;n căn tường c&oacute; l&aacute;t gạch</p>\r\n\r\n<p>C&oacute; toilet, bếp ri&ecirc;ng</p>\r\n\r\n<p>C&oacute; đường ra v&agrave;o</p>\r\n\r\n<p>Giờ giấc ra v&agrave;o tự do</p>\r\n\r\n<p>Gi&aacute; nước si&ecirc;u rẻ</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.6056611688973!2d106.66030801260824!3d10.841459660959728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529a5a23074b5%3A0x84e5af58bb9398ca!2zxJAuIFPhu5EgOCwgcGjGsOG7nW5nIDExLCBHw7IgVuG6pXAsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1679496798330!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(6, 2, 'CH full nội thất, cửa sổ trời, máy giặt chung có gác và ko gác', 'ad89d1bb-7122-4e15-ae7a-561e27214758_1676280512.jpg', '3500000', '198 Đường số 3, Phường 9, Quận Gò Vấp, Hồ Chí Minh', '2023-03-22', '0945005128', '<p>Trống sẵn ph&ograve;ng v&agrave; cuối th&aacute;ng trống</p>\r\n\r\n<p>198/74 đường số 3, g&ograve; vấp.</p>\r\n\r\n<p>Ph&ograve;ng g&aacute;c v&agrave; kh&ocirc;ng g&aacute;c, cửa sổ tho&aacute;ng m&aacute;t</p>\r\n\r\n<p>Nội thất c&oacute; kệ bếp + tủ lạnh + tủ &aacute;o quần + nệm + quạt trần, n&oacute;ng lạnh, m&aacute;y lạnh,</p>\r\n\r\n<p>M&aacute;y giặt x&agrave;i chung ở s&acirc;n thượng, tủ d&eacute;p chung ở h&agrave;nh lang.</p>\r\n\r\n<p>Ph&iacute; dịch vụ :</p>\r\n\r\n<p>- Điện 3,8 kw/h.</p>\r\n\r\n<p>- Nước 100k/người</p>\r\n\r\n<p>- dịch vụ 150k/ph&ograve;ng.</p>\r\n\r\n<p>- thang m&aacute;y v&agrave; m&aacute;y giặt free</p>\r\n\r\n<p>- free 1 xe</p>\r\n\r\n<p>Tối đa 4người 2 xe</p>\r\n\r\n<p>Xem ph&ograve;ng b&aacute;o trước 45&rsquo;-1tiếng</p>\r\n\r\n<p>Lh: 094.5005.128</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.5015385735833!2d106.6499570126084!3d10.849406360814367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529962e885db1%3A0x3fb3aff171a49af7!2zMTk4IMSQLiBz4buRIDMsIFBoxrDhu51uZyA5LCBHw7IgVuG6pXAsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1679501793776!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `hoten` varchar(500) NOT NULL,
  `sodienthoai` varchar(500) NOT NULL,
  `taikhoan` varchar(500) NOT NULL,
  `matkhau` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `hoten`, `sodienthoai`, `taikhoan`, `matkhau`) VALUES
(1, 'Lê Văn Nguyên', '0394073645', 'lenguyen', '123456'),
(2, 'Đăng Hoàng', '0321345678', 'danghoang', '123456');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anhdinhkem`
--
ALTER TABLE `anhdinhkem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lien_ket_02` (`baidang_id`);

--
-- Chỉ mục cho bảng `baidang`
--
ALTER TABLE `baidang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lien_ket_01` (`nguoidung_id`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `anhdinhkem`
--
ALTER TABLE `anhdinhkem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `baidang`
--
ALTER TABLE `baidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `anhdinhkem`
--
ALTER TABLE `anhdinhkem`
  ADD CONSTRAINT `lien_ket_02` FOREIGN KEY (`baidang_id`) REFERENCES `baidang` (`id`);

--
-- Các ràng buộc cho bảng `baidang`
--
ALTER TABLE `baidang`
  ADD CONSTRAINT `lien_ket_01` FOREIGN KEY (`nguoidung_id`) REFERENCES `nguoidung` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
