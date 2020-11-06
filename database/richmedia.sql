-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 05, 2020 lúc 05:47 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `richmedia`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `company`, `content`, `updated_at`, `created_at`) VALUES
(2, 'Võ Huy Hiếu', 'huyhieu@gmail.com', '0987654321', 'bkap', 'ok man', '2019-12-30 10:50:29', '2019-12-30 10:50:29'),
(3, 'pham truong', 'truongit@gmail.com', '1111111111', 'bks', 'lh lai voi toi', '2019-12-30 15:46:20', '2019-12-30 15:46:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioithieu`
--

CREATE TABLE `gioithieu` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gioithieu`
--

INSERT INTO `gioithieu` (`id`, `title`, `image`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'VỀ CHÚNG TÔI', '72779-gioithieu01.png', '<p>C&ocirc;ng ty TNHH Rich Media được biết đến l&agrave; đơn vị booking đa k&ecirc;nh được nhiều đối t&aacute;c truyền th&ocirc;ng v&agrave; kh&aacute;ch h&agrave;ng lựa chọn. Trong suốt 8 năm hoạt động trong ng&agrave;nh truyền th&ocirc;ng quảng c&aacute;o, ch&uacute;ng t&ocirc;i đ&atilde; vinh dự đồng h&agrave;nh v&agrave; phục vụ hơn 300 đối t&aacute;c truyền th&ocirc;ng c&ugrave;ng hơn 1000 kh&aacute;ch h&agrave;ng doanh nghiệp.<br />\r\n<br />\r\nVới phương ch&acirc;m &ldquo;Giải ph&aacute;p thực&rdquo;, Rich Media lu&ocirc;n nỗ lực để đem đến cho kh&aacute;ch h&agrave;ng những giải ph&aacute;p truyền th&ocirc;ng c&oacute; t&iacute;nh thực tiễn cao, gần gũi v&agrave; hiệu quả. Ch&uacute;ng t&ocirc;i xem vấn đề của kh&aacute;ch h&agrave;ng cũng như l&agrave; của m&igrave;nh, từ đ&oacute; đồng h&agrave;nh c&ugrave;ng đưa ra c&aacute;c giải ph&aacute;p thực tr&ecirc;n cơ sở những thế mạnh của Rich Media.<br />\r\n<br />\r\nMong muốn của ch&uacute;ng t&ocirc;i đ&oacute; l&agrave; x&acirc;y dựng mối quan hệ l&acirc;u d&agrave;i với kh&aacute;ch h&agrave;ng, kh&ocirc;ng chỉ l&agrave; đối t&aacute;c tin cậy trong c&ocirc;ng việc m&agrave; c&ograve;n l&agrave; người bạn th&acirc;n thiết trong cuộc sống. Rich Media hiểu rằng để l&agrave;m được điều đ&oacute; cần phải lấy sự tin tưởng của kh&aacute;ch h&agrave;ng l&agrave;m nền tảng của mối quan hệ. V&igrave; vậy, ch&uacute;ng t&ocirc;i lu&ocirc;n nỗ lực để x&acirc;y dựng l&ograve;ng tin nơi kh&aacute;ch h&agrave;ng bằng sự minh bạch trong ch&iacute;nh s&aacute;ch, kế hoạch, quy tr&igrave;nh triển khai c&ugrave;ng c&aacute;c bản b&aacute;o c&aacute;o truyền th&ocirc;ng r&otilde; r&agrave;ng.<br />\r\n<br />\r\nĐến nay, Rich Media kh&ocirc;ng chỉ l&agrave; một đại l&yacute; booking m&agrave; hơn thế, ch&uacute;ng t&ocirc;i đem đến cho kh&aacute;ch h&agrave;ng c&aacute;c dịch vụ đa dạng bao gồm Rich Radio, Rich Digital, Rich TV, Rich One, Rich Skyview, Rich Voice. Ch&uacute;ng t&ocirc;i đ&atilde;, đang v&agrave; sẽ kh&ocirc;ng ngừng cung cấp c&aacute;c dịch vụ chất lượng, c&oacute; hiệu quả cao nhằm đem đến sự h&agrave;i l&ograve;ng cao nhất cho kh&aacute;ch h&agrave;ng.</p>', 1, '2019-12-28 11:48:45', '2019-12-28 11:48:45'),
(2, 'Sứ mệnh', '94087-gioithieu02.jpg', '<p><span style=\"font-size:26px\">&quot;Hỗ trợ kh&aacute;ch h&agrave;ng v&agrave; đối t&aacute;c thực hiện mục ti&ecirc;u truyền th&ocirc;ng bằng kế hoạch chiến lược s&aacute;ng tạo v&agrave; hiện thực.&quot;</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Hỗ trợ kh&aacute;ch h&agrave;ng v&agrave; đối t&aacute;c thực hiện mục ti&ecirc;u truyền th&ocirc;ng bằng kế hoạch chiến lược s&aacute;ng tạo v&agrave; hiện thực.&quot;<br />\r\n<br />\r\nCh&uacute;ng t&ocirc;i s&aacute;ng tạo từ thực tế cuộc sống. Rich Media tin rằng với ti&ecirc;u ch&iacute; hiện thực, s&aacute;ng tạo, ch&uacute;ng t&ocirc;i sẽ tạo n&ecirc;n c&aacute;c chiến dịch truyền th&ocirc;ng khả thi, c&oacute; hiệu quả l&acirc;u d&agrave;i cho kh&aacute;ch h&agrave;ng v&agrave; đối t&aacute;c của m&igrave;nh.</p>', 1, '2019-12-28 11:49:47', '2019-12-28 11:49:47'),
(3, 'Sự kiện tiêu biểu', '54516-tt07.jpg', '<p>Theo b&aacute;o c&aacute;o mới nhất của Kantar Media về khảo s&aacute;t người nghe Radio trong phạm vi 4 th&agrave;nh phố lớn ở Việt Nam năm 2017 (Tp HCM, Cần Thơ, H&agrave; Nội, Đ&agrave; Nẵng) cho kết luận: Tp HCM l&agrave; khu vực c&oacute; nhiều người nghe ph&aacute;t thanh nhất</p>\r\n\r\n<p>Theo b&aacute;o c&aacute;o mới nhất của Kantar Media về khảo s&aacute;t người nghe Radio trong phạm vi 4 th&agrave;nh phố lớn ở Việt Nam năm 2017 (Tp HCM, Cần Thơ, H&agrave; Nội, Đ&agrave; Nẵng) cho kết luận: Tp HCM l&agrave; khu vực c&oacute; nhiều người nghe ph&aacute;t thanh nhất (763000 người). Theo s&aacute;t n&uacute;t l&agrave; H&agrave; Nội, tiếp đến l&agrave; Cần Thơ v&agrave; Đ&agrave; Nẵng.</p>\r\n\r\n<p>Trong tổng số 1815000 th&iacute;nh giả nghe ph&aacute;t thanh của cả 4 th&agrave;nh phố, tỉ lệ phụ nữ nghe nhiều hơn nam giới l&agrave; kh&ocirc;ng đ&aacute;ng kể. Ngo&agrave;i ra, những người từ 35 đến 39 tuổi c&oacute; mối quan t&acirc;m đến radio nhiều nhất. Ngược lại, độ tuổi từ 15 đến 19 tuổi &iacute;t d&agrave;nh quan t&acirc;m đến loại phương tiện truyền th&ocirc;ng n&agrave;y.</p>\r\n\r\n<p>X&eacute;t theo kh&iacute;a cạnh t&igrave;nh trạng h&ocirc;n nh&acirc;n, những cặp vợ chồng đ&atilde; lấy nhau v&agrave; sinh con d&agrave;nh nhiều thời gian trong ng&agrave;y để nghe radio nhất. Những người đ&atilde; lấy nhau nhưng chưa c&oacute; con th&igrave; &iacute;t quan t&acirc;m hơn.</p>\r\n\r\n<p>X&eacute;t về kh&iacute;a cạnh c&ocirc;ng việc, những người đang đi l&agrave;m nghe ph&aacute;t thanh nhiều hơn những người thất nghiệp. V&agrave; tr&igrave;nh độ học vấn c&agrave;ng cao th&igrave; c&agrave;ng cảm thấy thu h&uacute;t bởi radio.</p>\r\n\r\n<p>Cũng theo nghi&ecirc;n cứu n&agrave;y, trung b&igrave;nh một ng&agrave;y mỗi người d&agrave;nh gần 60 ph&uacute;t để nghe radio, con số n&agrave;y giảm xuống c&ograve;n gần 58 ph&uacute;t v&agrave;o thứ 7, chủ nhật. Mỗi người S&agrave;i G&ograve;n d&agrave;nh gần 62 ph&uacute;t mỗi ng&agrave;y để nghe đ&agrave;i v&agrave; cũng l&agrave; con số cao nhất cả nước. Theo sau lần lượt l&agrave; Cần Thơ, H&agrave; Nội v&agrave; Đ&agrave; Nẵng. V&agrave;o những s&aacute;ng cuối tuần, lượng nghe radio c&oacute; giảm đ&aacute;ng kể, c&ograve;n những thời điểm kh&aacute;c kh&ocirc;ng c&oacute; ch&ecirc;nh lệch nhiều.</p>\r\n\r\n<p>X&eacute;t về kh&iacute;a cạnh th&oacute;i quen, người H&agrave; Nội v&agrave; Cần Thơ nghe radio nhiều nhất v&agrave;o c&aacute;c khung giờ trước 8h v&agrave; 17h đến 19h (trước khi đi l&agrave;m v&agrave; tan tầm). Người Đ&agrave; Nẵng nghe radio nhiều nhất v&agrave;o c&aacute;c khung giờ trước 8h v&agrave; 19h đến 22h (trước khi đi l&agrave;m v&agrave; nghỉ ngơi buổi tối). Người S&agrave;i G&ograve;n nghe radio nhiều nhất v&agrave;o c&aacute;c khung giờ 13h30 đến 17h v&agrave; 19h đến 22h (buổi chiều v&agrave; nghỉ ngơi buổi tối).</p>\r\n\r\n<p>Ở 4 những th&agrave;nh phố lớn, kh&aacute;n giả thường sử dụng đ&agrave;i radio hoặc nghe ph&aacute;t thanh tr&ecirc;n xe bus, taxi, &ocirc; t&ocirc; ri&ecirc;ng. Số c&ograve;n lại nghe tr&ecirc;n app di động, m&aacute;y t&iacute;nh bảng. Lượng nghe trực tiếp tr&ecirc;n website của k&ecirc;nh l&agrave; kh&ocirc;ng đ&aacute;ng kể. Kết quả n&agrave;y vẫn kh&ocirc;ng thay đổi vị tr&iacute; khi x&eacute;t theo độ tuổi, giới t&iacute;nh, thời gian khảo s&aacute;t.&nbsp;</p>', 1, '2019-12-28 11:50:23', '2019-12-29 02:47:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_facebook` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `setting`
--

INSERT INTO `setting` (`id`, `content`, `url_facebook`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, '<ul>\r\n	<li>\r\n	<p><span style=\"color:#ecf0f1\">C&Ocirc;NG TY TNHH AKC</span></p>\r\n\r\n	<ul>\r\n		<li><span style=\"color:#ecf0f1\"><strong>Địa chỉ:</strong>&nbsp;Tầng 6, T&ograve;a nh&agrave; 25T-2, Ho&agrave;ng Đạo Th&uacute;y, Cầu Giấy, H&agrave; Nội</span></li>\r\n		<li><span style=\"color:#ecf0f1\"><strong>Điện thoại:</strong>&nbsp;0243 555 1452</span></li>\r\n		<li><span style=\"color:#ecf0f1\"><strong>Hotline:</strong>&nbsp;0906 049 191</span></li>\r\n		<li><span style=\"color:#ecf0f1\"><strong>Fax:</strong>&nbsp;043 555 1449</span></li>\r\n		<li><span style=\"color:#ecf0f1\"><strong>Email:</strong>&nbsp;contact@richmedia.com.vn</span></li>\r\n	</ul>\r\n	</li>\r\n</ul>', '<script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0&appId=398849584392444&autoLogAppEvents=1\"></script> 							<div class=\"fb-page\" data-href=\"https://www.facebook.com/M&#xf4;t-mai-mai-111851710162960/\" data-tabs=\"timeline\" data-width=\"500\" data-height=\"200\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/M&#xf4;t-mai-mai-111851710162960/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/M&#xf4;t-mai-mai-111851710162960/\">Môt mai mai</a></blockquote></div>', 'Lap top bán chạy nhất thế giới .. nha ae heh ehehe', 'CÔNG TY TNHH AKC  Địa chỉ: Tầng 6, Tòa nhà 25T-2, Hoàng Đạo Thúy, Cầu Giấy, Hà Nội Điện thoại: 0243 555 1452 Hotline: 0906 049 191 Fax: 043 555 1449 Email: contact@richmedia.com.vn DỊCH VỤ  Rich Digital Rich Radio Rich Skyview Rich One Rich TV Rich Voice', 1, '2019-12-29 02:00:05', '2019-12-30 15:50:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_banner`
--

INSERT INTO `tbl_banner` (`id`, `title`, `file`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Giảm giá 50%', '47849-Star_Wars_The_Rise_of_Skywalker_2019_Movies_Poster_1366x768.jpg', 1, '2019-12-25 22:28:59', '2019-12-29 19:08:14'),
(6, 'Khuyến mãi 50%', '97721-Chevrolet_Corvette_z06_Luxury_Car_2019_High_Quality_Photo_1366x768.jpg', 1, '2019-12-25 22:29:17', '2019-12-25 22:29:17'),
(7, 'KHAI TRƯƠNG LAPTOP88 94 TRẦN VỸ', '79397-tt04.jpg', 0, '2019-12-29 19:15:30', '2019-12-29 20:15:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descript` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`, `descript`, `status`, `created_at`, `updated_at`) VALUES
(2, 'abc', 'Convertse, Sneacker for sports', 1, '2019-12-16 01:21:28', '2019-12-31 02:28:42'),
(8, 'Vans', 'Convertse, Sneacker for sports', 1, '2019-12-24 18:28:49', '2019-12-24 18:28:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_item`
--

CREATE TABLE `tbl_item` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_service` bigint(20) UNSIGNED NOT NULL,
  `theme` varchar(268) COLLATE utf8mb4_unicode_ci NOT NULL,
  `web` varchar(268) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(268) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_item`
--

INSERT INTO `tbl_item` (`id`, `id_service`, `theme`, `web`, `file`, `status`, `created_at`, `updated_at`) VALUES
(7, 5, 'ban rau muong', 'uuuu', '96803-gioithieu02.jpg', 1, '2019-12-30 08:37:01', '2019-12-30 08:37:01'),
(8, 6, 'ban ruou', 'akcmedia.net', '62768-tt07.jpg', 1, '2019-12-30 08:49:30', '2019-12-30 08:49:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_service`
--

CREATE TABLE `tbl_service` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_cat` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descript` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_service`
--

INSERT INTO `tbl_service` (`id`, `id_cat`, `name`, `descript`, `status`, `created_at`, `updated_at`) VALUES
(5, 8, 'Rau', 'Convertse, Sneacker for sports', 1, '2019-12-24 19:01:59', '2019-12-24 19:01:59'),
(6, 8, 'phamtruong', 'nhuw ccc', 1, '2019-12-30 08:33:33', '2019-12-30 08:33:33'),
(7, 2, 'one pice', 'ddd', 1, '2019-12-31 02:32:57', '2019-12-31 02:32:57'),
(8, 2, 'Kuruko', 'nhuw ccc', 1, '2019-12-31 02:33:04', '2019-12-31 02:33:04'),
(9, 2, 'Sản Phẩm 3 Update', 'nhuw ccc', 1, '2019-12-31 02:33:19', '2019-12-31 02:33:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tin_tuc`
--

INSERT INTO `tin_tuc` (`id`, `title`, `content`, `summary`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, '​PHI THƯƠNG BẤT PHÚ, CHƯA LÀM SALES THÌ CHƯA GIÀU ĐƯỢC hihihihih', '<p>RICH MEDIA_ĐƠN VỊ TƯ VẤN TRUYỀN TH&Ocirc;NG H&Agrave;NG ĐẦU VIỆT NAM TUYỂN SALES</p>\r\n\r\n<p>PHI THƯƠNG BẤT PH&Uacute;, CHƯA L&Agrave;M SALES TH&Igrave; CHƯA GI&Agrave;U ĐƯỢC</p>\r\n\r\n<p>Nghề sale c&oacute; dễ kiếm tiền kh&ocirc;ng?</p>\r\n\r\n<p>&gt;&gt; Chẳng c&oacute; nghề n&agrave;o kiếm tiền l&agrave; dễ d&agrave;ng cả.</p>\r\n\r\n<p>Để mưu sinh, người c&ocirc;ng nh&acirc;n phải lao động vất vả nguy&ecirc;n cả ng&agrave;y trong thời tiết khắc nghiệt. Để l&agrave;m marketing, người ta cũng phải trải qua h&agrave;ng ng&agrave;n cuộc gặp gỡ, tiếp x&uacute;c kh&aacute;ch h&agrave;ng để ph&acirc;n t&iacute;ch v&agrave; vạch ra chiến lược marketing cho doanh nghiệp.</p>\r\n\r\n<p>Nghề sale cũng vậy, để k&yacute; được hợp đồng bạn phải thuyết phục được kh&aacute;ch h&agrave;ng lựa chọn sản phẩm của m&igrave;nh.</p>\r\n\r\n<p>⛔️ L&agrave;m sale bạn nhận được g&igrave;?</p>\r\n\r\n<p>Tiền bạc (Đương nhi&ecirc;n), thậm ch&iacute; l&agrave; 1 sale giỏi bạn c&oacute; thể kiếm được rất nhiều tiền</p>', 'Pepsi và Coca-Cola vốn có “truyền thống” cạnh tranh từ nhiều năm qua. Hai hãng nước giải khát hàng đầu thế giới này đối đầu nhau ở nhiều mặt trận, thậm chí còn có lúc thuê quảng cáo ở trước trụ sở đối thủ để bêu riếu nhau.', '31790-tt01.jpg', 1, '2019-12-28 11:54:07', '2020-02-05 09:23:04'),
(2, 'Thành phố Hồ Chí Minh là khu vực có lượng thính giả nghe radio nhiều nhất', '<p>Theo b&aacute;o c&aacute;o mới nhất của Kantar Media về khảo s&aacute;t người nghe Radio trong phạm vi 4 th&agrave;nh phố lớn ở Việt Nam năm 2017 (Tp HCM, Cần Thơ, H&agrave; Nội, Đ&agrave; Nẵng) cho kết luận: Tp HCM l&agrave; khu vực c&oacute; nhiều người nghe ph&aacute;t thanh nhất</p>\r\n\r\n<p>Theo b&aacute;o c&aacute;o mới nhất của Kantar Media về khảo s&aacute;t người nghe Radio trong phạm vi 4 th&agrave;nh phố lớn ở Việt Nam năm 2017 (Tp HCM, Cần Thơ, H&agrave; Nội, Đ&agrave; Nẵng) cho kết luận: Tp HCM l&agrave; khu vực c&oacute; nhiều người nghe ph&aacute;t thanh nhất (763000 người). Theo s&aacute;t n&uacute;t l&agrave; H&agrave; Nội, tiếp đến l&agrave; Cần Thơ v&agrave; Đ&agrave; Nẵng.</p>\r\n\r\n<p>Trong tổng số 1815000 th&iacute;nh giả nghe ph&aacute;t thanh của cả 4 th&agrave;nh phố, tỉ lệ phụ nữ nghe nhiều hơn nam giới l&agrave; kh&ocirc;ng đ&aacute;ng kể. Ngo&agrave;i ra, những người từ 35 đến 39 tuổi c&oacute; mối quan t&acirc;m đến radio nhiều nhất. Ngược lại, độ tuổi từ 15 đến 19 tuổi &iacute;t d&agrave;nh quan t&acirc;m đến loại phương tiện truyền th&ocirc;ng n&agrave;y.</p>\r\n\r\n<p>X&eacute;t theo kh&iacute;a cạnh t&igrave;nh trạng h&ocirc;n nh&acirc;n, những cặp vợ chồng đ&atilde; lấy nhau v&agrave; sinh con d&agrave;nh nhiều thời gian trong ng&agrave;y để nghe radio nhất. Những người đ&atilde; lấy nhau nhưng chưa c&oacute; con th&igrave; &iacute;t quan t&acirc;m hơn.</p>\r\n\r\n<p>X&eacute;t về kh&iacute;a cạnh c&ocirc;ng việc, những người đang đi l&agrave;m nghe ph&aacute;t thanh nhiều hơn những người thất nghiệp. V&agrave; tr&igrave;nh độ học vấn c&agrave;ng cao th&igrave; c&agrave;ng cảm thấy thu h&uacute;t bởi radio.</p>\r\n\r\n<p>Cũng theo nghi&ecirc;n cứu n&agrave;y, trung b&igrave;nh một ng&agrave;y mỗi người d&agrave;nh gần 60 ph&uacute;t để nghe radio, con số n&agrave;y giảm xuống c&ograve;n gần 58 ph&uacute;t v&agrave;o thứ 7, chủ nhật. Mỗi người S&agrave;i G&ograve;n d&agrave;nh gần 62 ph&uacute;t mỗi ng&agrave;y để nghe đ&agrave;i v&agrave; cũng l&agrave; con số cao nhất cả nước. Theo sau lần lượt l&agrave; Cần Thơ, H&agrave; Nội v&agrave; Đ&agrave; Nẵng. V&agrave;o những s&aacute;ng cuối tuần, lượng nghe radio c&oacute; giảm đ&aacute;ng kể, c&ograve;n những thời điểm kh&aacute;c kh&ocirc;ng c&oacute; ch&ecirc;nh lệch nhiều.</p>\r\n\r\n<p>X&eacute;t về kh&iacute;a cạnh th&oacute;i quen, người H&agrave; Nội v&agrave; Cần Thơ nghe radio nhiều nhất v&agrave;o c&aacute;c khung giờ trước 8h v&agrave; 17h đến 19h (trước khi đi l&agrave;m v&agrave; tan tầm). Người Đ&agrave; Nẵng nghe radio nhiều nhất v&agrave;o c&aacute;c khung giờ trước 8h v&agrave; 19h đến 22h (trước khi đi l&agrave;m v&agrave; nghỉ ngơi buổi tối). Người S&agrave;i G&ograve;n nghe radio nhiều nhất v&agrave;o c&aacute;c khung giờ 13h30 đến 17h v&agrave; 19h đến 22h (buổi chiều v&agrave; nghỉ ngơi buổi tối).</p>\r\n\r\n<p>Ở 4 những th&agrave;nh phố lớn, kh&aacute;n giả thường sử dụng đ&agrave;i radio hoặc nghe ph&aacute;t thanh tr&ecirc;n xe bus, taxi, &ocirc; t&ocirc; ri&ecirc;ng. Số c&ograve;n lại nghe tr&ecirc;n app di động, m&aacute;y t&iacute;nh bảng. Lượng nghe trực tiếp tr&ecirc;n website của k&ecirc;nh l&agrave; kh&ocirc;ng đ&aacute;ng kể. Kết quả n&agrave;y vẫn kh&ocirc;ng thay đổi vị tr&iacute; khi x&eacute;t theo độ tuổi, giới t&iacute;nh, thời gian khảo s&aacute;t.&nbsp;</p>', 'Theo báo cáo mới nhất của Kantar Media về khảo sát người nghe Radio trong phạm vi 4 thành phố lớn ở Việt Nam năm 2017 (Tp HCM, Cần Thơ, Hà Nội, Đà Nẵng) cho kết luận: Tp HCM là khu vực có nhiều người nghe phát thanh nhất (763000 người). Theo sát nút là Hà Nội, tiếp đến là Cần Thơ và Đà Nẵng.', '29636-tt02.jpg', 1, '2019-12-28 11:54:42', '2020-02-05 09:23:32'),
(3, 'KPI là gì? Tại sao không đạt KPI? Tại sao đạt KPI nhưng kinh doanh vẫn kém?', '<p>Mỗi doanh nghiệp khi hoạt động đều cần phải c&oacute; một mục ti&ecirc;u m&agrave; cần phải đạt được nếu muốn tồn tại v&agrave; ph&aacute;t triển (doanh thu, lợi nhuận, thị phần, hoặc một yếu tố n&agrave;o đ&oacute; m&agrave; doanh nghiệp coi l&agrave; quan trọng).</p>\r\n\r\n<p>Ph&acirc;n biệt goal / objectives, chiến lược, chiến thuật v&agrave; KPI</p>\r\n\r\n<p>Trước khi n&oacute;i tới KPI l&agrave; g&igrave; th&igrave; ch&uacute;ng ta n&ecirc;n n&oacute;i tới mục ti&ecirc;u của doanh nghiệp. C&aacute;c mục ti&ecirc;u n&agrave;y thường được gọi l&agrave; c&aacute;c Key Business Objectives (hay business goals) hoặc mục ti&ecirc;u chiến lược (strategic goal) v&igrave; để đạt được c&aacute;c mục ti&ecirc;u n&agrave;y th&igrave; c&aacute;c nh&agrave; quản l&yacute; thường phải vạch ra c&aacute;c chiến lược (strategy) kh&aacute;c nhau. Mỗi chiến lược thường bao gồm nhiều chiến thuật (tactics) nhỏ hơn b&ecirc;n trong để gi&uacute;p n&oacute; đến gần hơn được hơn với việc đạt được mục ti&ecirc;u chiến lược.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:88/richmedia/public/uploads/images/ttct01.jpg\" style=\"height:467px; width:1012px\" /></p>', 'Pepsi và Coca-Cola vốn có “truyền thống” cạnh tranh từ nhiều năm qua. Hai hãng nước giải khát hàng đầu thế giới này đối đầu nhau ở nhiều mặt trận, thậm chí còn có lúc thuê quảng cáo ở trước trụ sở đối thủ để bêu riếu nhau.', '78184-tt03.jpg', 1, '2019-12-28 11:56:07', '2020-02-05 09:22:55'),
(4, 'Pepsi và Coca-Cola “ăn miếng trả miếng” đêm Halloween', '<p>Pepsi v&agrave; Coca-Cola vốn c&oacute; &ldquo;truyền thống&rdquo; cạnh tranh từ nhiều năm qua. Hai h&atilde;ng nước giải kh&aacute;t h&agrave;ng đầu thế giới n&agrave;y đối đầu nhau ở nhiều mặt trận, thậm ch&iacute; c&ograve;n c&oacute; l&uacute;c thu&ecirc; quảng c&aacute;o ở trước trụ sở đối thủ để b&ecirc;u riếu nhau.</p>\r\n\r\n<p>V&agrave;o m&ugrave;a Haloween năm 2016, Pepsi vừa c&oacute; một chiến dịch quảng c&aacute;o được cho l&agrave; th&agrave;nh c&ocirc;ng với lượt quan t&acirc;m của người d&ugrave;ng rất lớn.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:88/richmedia/public/uploads/images/ttct03.jpg\" style=\"height:1453px; width:1020px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&acirc;u n&oacute;i của Coca gợi nhớ ch&uacute;ng ta tới l&uacute;c c&ograve;n nhỏ, ai cũng cầm c&aacute;i đũa hay kho&aacute;c c&aacute;i chăn v&agrave; cho rằng m&igrave;nh l&agrave; si&ecirc;u nh&acirc;n, với chiếc &aacute;o cho&agrave;ng bay đi giải cứu thế giới. Quả thực, h&igrave;nh ảnh quảng c&aacute;o của Pepsi với c&aacute;i vỏ lon mở rộng ra tr&ocirc;ng kh&aacute; l&agrave; giống với t&agrave; &aacute;o cho&agrave;ng si&ecirc;u nh&acirc;n tung bay.</p>\r\n\r\n<p>&nbsp;</p>', 'Pepsi và Coca-Cola vốn có “truyền thống” cạnh tranh từ nhiều năm qua. Hai hãng nước giải khát hàng đầu thế giới này đối đầu nhau ở nhiều mặt trận, thậm chí còn có lúc thuê quảng cáo ở trước trụ sở đối thủ để bêu riếu nhau.', '48799-tt04.jpg', 1, '2019-12-28 11:58:09', '2020-02-05 09:22:49'),
(6, 'Mua Laptop MSI RTX 20xx, nhận ngay code game Born to Hunt', '<p>Pepsi v&agrave; Coca-Cola vốn c&oacute; &ldquo;truyền thống&rdquo; cạnh tranh từ nhiều năm qua. Hai h&atilde;ng nước giải kh&aacute;t h&agrave;ng đầu thế giới n&agrave;y đối đầu nhau ở nhiều mặt trận, thậm ch&iacute; c&ograve;n c&oacute; l&uacute;c thu&ecirc; quảng c&aacute;o ở trước trụ sở đối thủ để b&ecirc;u riếu nhau.</p>\r\n\r\n<p>V&agrave;o m&ugrave;a Haloween năm 2016, Pepsi vừa c&oacute; một chiến dịch quảng c&aacute;o được cho l&agrave; th&agrave;nh c&ocirc;ng với lượt quan t&acirc;m của người d&ugrave;ng rất lớn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:88/richmedia/public/uploads/images/ttct01.jpg\" style=\"height:467px; width:1012px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pepsi v&agrave; Coca-Cola vốn c&oacute; &ldquo;truyền thống&rdquo; cạnh tranh từ nhiều năm qua. Hai h&atilde;ng nước giải kh&aacute;t h&agrave;ng đầu thế giới n&agrave;y đối đầu nhau ở nhiều mặt trận, thậm ch&iacute; c&ograve;n c&oacute; l&uacute;c thu&ecirc; quảng c&aacute;o ở trước trụ sở đối thủ để b&ecirc;u riếu nhau.</p>\r\n\r\n<p>V&agrave;o m&ugrave;a Haloween năm 2016, Pepsi vừa c&oacute; một chiến dịch quảng c&aacute;o được cho l&agrave; th&agrave;nh c&ocirc;ng với lượt quan t&acirc;m của người d&ugrave;ng rất lớn.</p>', 'Pepsi và Coca-Cola vốn có “truyền thống” cạnh tranh từ nhiều năm qua. Hai hãng nước giải khát hàng đầu thế giới này đối đầu nhau ở nhiều mặt trận, thậm chí còn có lúc thuê quảng cáo ở trước trụ sở đối thủ để bêu riếu nhau.', '58406-tt05.jpg', 1, '2019-12-31 09:10:54', '2020-02-05 09:22:41'),
(7, 'Bán trả góp - Mua laptop đã rẻ, nay lại chẳng cần lo lắng về tài chính', '<p>RICH MEDIA_ĐƠN VỊ TƯ VẤN TRUYỀN TH&Ocirc;NG H&Agrave;NG ĐẦU VIỆT NAM TUYỂN SALES</p>\r\n\r\n<p>RICH MEDIA_ĐƠN VỊ TƯ VẤN TRUYỀN TH&Ocirc;NG H&Agrave;NG ĐẦU VIỆT NAM TUYỂN SALES</p>\r\n\r\n<p>PHI THƯƠNG BẤT PH&Uacute;, CHƯA L&Agrave;M SALES TH&Igrave; CHƯA GI&Agrave;U ĐƯỢC</p>\r\n\r\n<p>Nghề sale c&oacute; dễ kiếm tiền kh&ocirc;ng?</p>\r\n\r\n<p>&gt;&gt; Chẳng c&oacute; nghề n&agrave;o kiếm tiền l&agrave; dễ d&agrave;ng cả.</p>\r\n\r\n<p>Để mưu sinh, người c&ocirc;ng nh&acirc;n phải lao động vất vả nguy&ecirc;n cả ng&agrave;y trong thời tiết khắc nghiệt. Để l&agrave;m marketing, người ta cũng phải trải qua h&agrave;ng ng&agrave;n cuộc gặp gỡ, tiếp x&uacute;c kh&aacute;ch h&agrave;ng để ph&acirc;n t&iacute;ch v&agrave; vạch ra chiến lược marketing cho doanh nghiệp.</p>\r\n\r\n<p>Nghề sale cũng vậy, để k&yacute; được hợp đồng bạn phải thuyết phục được kh&aacute;ch h&agrave;ng lựa chọn sản phẩm của m&igrave;nh.</p>\r\n\r\n<p>⛔️ L&agrave;m sale bạn nhận được g&igrave;?</p>\r\n\r\n<p>Tiền bạc (Đương nhi&ecirc;n), thậm ch&iacute; l&agrave; 1 sale giỏi bạn c&oacute; thể kiếm được rất nhiều tiền</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:88/richmedia/public/uploads/images/ttct01.jpg\" style=\"height:467px; width:1012px\" /></p>', 'Theo báo cáo mới nhất của Kantar Media về khảo sát người nghe Radio trong phạm vi 4 thành phố lớn ở Việt Nam năm 2017 (Tp HCM, Cần Thơ, Hà Nội, Đà Nẵng) cho kết luận: Tp HCM là khu vực có nhiều người nghe phát thanh nhất (763000 người). Theo sát nút là Hà Nội, tiếp đến là Cần Thơ và Đà Nẵng.', '70786-gioithieu02.jpg', 1, '2019-12-31 09:56:13', '2020-02-05 09:17:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(4, 'Nguễn Trọng Nhất', 'trongnhat05032000@gmail.com', '$2y$10$ISIDR7pDMBJX58DSo9kkbeQuwK8fZUY5v0Iscn6hhEI5RVwd9lvyi', '2019-12-31 09:26:02', '2019-12-31 09:26:02');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gioithieu`
--
ALTER TABLE `gioithieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_item_id_service_foreign` (`id_service`);

--
-- Chỉ mục cho bảng `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_service_id_cat_foreign` (`id_cat`);

--
-- Chỉ mục cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `gioithieu`
--
ALTER TABLE `gioithieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_item`
--
ALTER TABLE `tbl_item`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD CONSTRAINT `tbl_item_id_service_foreign` FOREIGN KEY (`id_service`) REFERENCES `tbl_service` (`id`);

--
-- Các ràng buộc cho bảng `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD CONSTRAINT `tbl_service_id_cat_foreign` FOREIGN KEY (`id_cat`) REFERENCES `tbl_category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
