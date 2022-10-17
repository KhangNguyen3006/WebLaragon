-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th6 27, 2022 lúc 01:15 AM
-- Phiên bản máy phục vụ: 5.7.33
-- Phiên bản PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nguyenthanhkhang2119110013`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentId` int(10) UNSIGNED NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `catName`, `slug`, `parentId`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'SmartPhone', 'smart-phone', 0, 'Điện thoại thông minh hay smartphone là khái niệm để chỉ các loại thiết bị di động kết hợp điện thoại di động các chức năng điện toán di động vào một thiết bị.', 1, '2022-06-02 21:18:08', NULL, NULL),
(2, 'SmartHome', 'smart-home', 0, 'Nhà Thông Minh (Smart home) là kiểu nhà được lắp đặt các thiết bị điện tử có thể được điều khiển thay thế con người trong thực hiện một hoặc một số thao tác quản lý, điều khiển.', 1, '2022-06-02 21:22:42', NULL, NULL),
(3, 'SmartWatch', 'smart-watch', 0, 'Đồng hồ thông minh hay còn gọi là smartwatch là đồng hồ đeo tay vi tính hóa với chức năng như tăng cường thời gian duy trì và thường được so sánh với thiết bị kỹ thuật số cá nhân (PDA).', 1, '2022-06-02 21:22:42', NULL, NULL),
(4, 'Samsung Galaxy Watch', 'samsung-galaxy-watch', 3, '<p>Galaxy Watch là mẫu đồng hồ thông minh thời trang đầu tiên của Samsung có đến 2 kích cỡ: 42mm và 46mm.&nbsp;</p>', 2, '2022-06-02 15:17:36', '2022-06-02 15:17:36', NULL),
(5, 'Apple Watch', 'apple-watch', 3, '<p>Apple Watch là sản phẩm điện tử đến tử đến từ \"hệ sinh thái Apple\"</p>', 2, '2022-06-02 15:18:24', '2022-06-02 15:18:24', NULL),
(6, 'HeadPhone', 'head-phone', 0, '<p>Tai nghe là thiết bị gồm một cặp loa phát âm thanh được thiết kế nhỏ gọn, mang tính di động và vị trí của chúng là thường được đặt áp sát hoặc bên trong tai.</p>', 1, '2022-06-02 15:21:31', '2022-06-02 15:21:31', NULL),
(7, 'Samsung Galaxy Buds', 'samsung-galaxy-buds', 6, '<p>Galaxy Buds là chiếc tai nghe gây khá nhiều tiếng vang kể từ khi sản phẩm này ra mắt. Đây cũng là phiên bản kế nhiệm tiếp theo của dòng Gear ICon X.&nbsp;</p>', 2, '2022-06-02 15:23:18', '2022-06-02 15:23:18', NULL),
(8, 'Apple Airpods', 'apple-airpods', 6, '<p>AirPods là một thiết bị được chế tạo trong cùng một hệ sinh thái nên AirPods dễ dàng kết nối với iPhone, iPad, Apple Watch chỉ với một thao tác chạm đơn giản.&nbsp;</p>', 2, '2022-06-02 15:24:19', '2022-06-02 15:24:19', NULL),
(9, 'Samsung Galaxy', 'samsung-galaxy', 1, '<p>Samsung Galaxy là một loạt thiết bị điện thoại thông minh, tai nghe, đồng hồ thông minh và máy tính bảng chạy hệ điều hành Android được thiết kế, sản xuất và tiếp thị bởi Samsung Electronics.</p>', 2, '2022-06-02 15:26:14', '2022-06-02 15:26:14', NULL),
(10, 'Apple Iphone', 'apple-iphone', 1, '<p>iPhone là mẫu smartphone của hãng điện tử Mỹ Apple Inc. Phiên bản iPhone đầu tiên ra mắt ngày 09 tháng 01 năm 2007 và lên kệ bán vào ngày 29 tháng 6 năm 2007.</p>', 2, '2022-06-02 15:26:57', '2022-06-02 15:26:57', NULL),
(11, 'Google Home', 'google-home', 2, '<p>Google Home là một thương hiệu loa thông minh được phát triển bởi Google. Các thiết bị này cho phép người dùng điều khiển và tương tác với loa bằng giọng nói thông qua Google Assistant.</p>', 1, '2022-06-02 15:28:53', '2022-06-02 15:28:53', NULL),
(12, 'Amazon Alexa', 'amazon-alexa', 2, '<p>Amazon Alexa, hay được gọi tắt là Alexa, tương tự như Siri,Google Assistant hay Bixby, là trợ lý ảo được phát triển bởi Amazon.</p>', 2, '2022-06-02 15:31:04', '2022-06-02 15:31:04', NULL),
(13, 'Xiaomi Mi', 'xiaomi-mi', 1, '<p>Xiaomi Mi là dòng smartphone cao cấp và lâu đời nhất của Xiaomi. Được trang bị những công nghệ mới nhất và tiên tiến nhất cùng với hiệu năng khủng.</p>', 1, '2022-06-02 15:32:58', '2022-06-02 15:32:58', NULL),
(14, 'Sony WF', 'sony-wf', 6, 'Là chiếc tai nghe True Wireless đầu tiên thế giới hỗ trợ âm thanh Hi-res chuẩn LDAC - dữ liệu âm thanh cao gấp 3 lần so với Bluetooth thông thường.', 1, '2022-06-02 22:57:21', '2022-06-13 13:07:31', NULL),
(15, 'Xiaomi Mi Watch', 'xiaomi-mi-watch', 3, '<p>Đồng hồ thông minh Xiaomi Mi Watch cũng có thể theo dõi giấc ngủ xem bạn có đang có những giây phút nghỉ ngơi thực sự thoải mái hay không.</p>', 2, '2022-06-02 16:00:31', '2022-06-02 16:00:31', NULL),
(16, 'Samsung Galaxy Home', 'samsung-galaxy-home', 2, '<p>Samsung đã chính thức giới thiệu chiếc loa thông minh đầu tiên của hãng được gọi là Samsung Galaxy Home để cạnh tranh với Apple HomePod, Amazon Echo và Google Home.</p>', 2, '2022-06-02 16:34:37', '2022-06-02 16:34:37', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2021_09_09_172519_create_categories_table', 2),
(27, '2014_10_12_000000_create_users_table', 3),
(28, '2014_10_12_100000_create_password_resets_table', 3),
(29, '2019_08_19_000000_create_failed_jobs_table', 3),
(30, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(31, '2021_09_10_141716_create_categories_table', 3),
(32, '2022_03_11_165200_create_nguyenthanhkhangbrands_table', 3),
(33, '2022_03_11_165358_create_nguyenthanhkhangpages_table', 3),
(34, '2022_03_11_165432_create_nguyenthanhkhanglinks_table', 3),
(35, '2022_03_11_165449_create_nguyenthanhkhangproducts_table', 3),
(36, '2022_03_11_165507_create_nguyenthanhkhangcontacts_table', 3),
(39, '2022_03_11_165600_create_nguyenthanhkhangcustomers_table', 4),
(40, '2022_03_11_165524_create_nguyenthanhkhangorders_table', 5),
(41, '2022_03_11_165541_create_nguyenthanhkhangorderdetails_table', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenthanhkhangbrands`
--

CREATE TABLE `nguyenthanhkhangbrands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brandName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguyenthanhkhangbrands`
--

INSERT INTO `nguyenthanhkhangbrands` (`id`, `brandName`, `slug`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Samsung', 'samsung', 'Samsung là một tập đoàn đa quốc gia của Hàn Quốc có trụ sở chính đặt tại Samsung Town, Seocho, Seoul.Đây là một trong những thương hiệu công nghệ đắt giá nhất thế giới.', 1, '2022-06-02 22:00:44', NULL, NULL),
(2, 'Apple', 'apple', 'Apple Inc. là một tập đoàn công nghệ đa quốc gia của Mỹ có trụ sở chính tại Cupertino, California, chuyên thiết kế, phát triển và bán thiết bị điện tử tiêu dùng.', 1, '2022-06-02 22:06:26', NULL, NULL),
(3, 'Sony', 'sony', 'Công ty công nghiệp Sony là một tập đoàn đa quốc gia của Nhật Bản, với trụ sở chính nằm tại Minato, Tokyo, Nhật Bản, và là tập đoàn điện tử lớn.', 1, '2022-06-02 22:06:26', NULL, NULL),
(4, 'Xiaomi', 'xiaomi', 'Xiaomi Inc là một Tập đoàn sản xuất hàng điện tử Trung Quốc có trụ sở tại Thâm Quyến. Xiaomi là nhà sản xuất điện thoại thông minh lớn TQ.', 1, '2022-06-02 22:06:26', NULL, NULL),
(5, 'Google', 'google', 'Google LLC là một công ty công nghệ chuyên về các dịch vụ và sản phẩm liên quan đến Internet, bao gồm các công nghệ quảng cáo trực tuyến, công cụ tìm kiếm, điện toán đám mây, phần mềm và phần cứng.', 1, '2022-06-02 22:06:26', NULL, NULL),
(6, 'Amazon', 'amazon', 'Amazon.com, Inc là một công ty công nghệ đa quốc gia của Mỹ có trụ sở tại Seattle, Washington tập trung vào điện toán đám mây, truyền phát kỹ thuật số, trí tuệ nhân tạo và thương mại điện tử.', 1, '2022-06-02 22:06:26', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenthanhkhangcontacts`
--

CREATE TABLE `nguyenthanhkhangcontacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguyenthanhkhangcontacts`
--

INSERT INTO `nguyenthanhkhangcontacts` (`id`, `email`, `title`, `content`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'nguyenthanhkhang@gmail.com', 'chất lượng dịch vụ', 'cần cải thiện thêm', 1, '2022-06-02 18:46:36', '2022-06-20 13:47:30', NULL),
(2, 'nguyenthanhkhang@gmail.com', 'khách hàng', 'feedback for customer', 0, '2022-06-20 13:42:35', '2022-06-20 13:42:43', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenthanhkhangcustomers`
--

CREATE TABLE `nguyenthanhkhangcustomers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customerName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguyenthanhkhangcustomers`
--

INSERT INTO `nguyenthanhkhangcustomers` (`id`, `customerName`, `address`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Nguyenthanhkhang', '1147, Đ.Nguyễn Duy Trinh, TP Thủ Đức, TP.HCM', '0704880256', 'nguyenthanhkhang@gmail.com', NULL, '$2y$10$jnF5CvOinmsDhWt9Uhix.O.TVqbzWr3e3OecCbVtbE3YLHVp6F6ii', 'UgUJFySBmgqWWr3HRp6VFoCWSjtDFtJ1q83rXkpRXg6Xmtl5TxMfk02PS8cU', NULL, NULL, NULL),
(3, 'Nguyen van chien', '1247, Đ.Nguyễn Duy Trinh, TP Thủ Đức, TP.HCM', '080488006', 'nguyenvanchien@gmail.com', NULL, '$2y$10$sRp2/86mYQwslVRjjsHEwuySYHLcZmyJvIbfSqZkVxxgpfKRWJr7.', 'yJcHZVMIc1aBZJDXS9uf2DFCsBNrAhOvnvIWqkTe6EAVoNwKc9DBDu0DzMXm', '2022-06-02 17:28:40', '2022-06-02 17:28:40', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenthanhkhanglinks`
--

CREATE TABLE `nguyenthanhkhanglinks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` tinyint(4) NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` tinyint(3) UNSIGNED NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguyenthanhkhanglinks`
--

INSERT INTO `nguyenthanhkhanglinks` (`id`, `title`, `position`, `image`, `link`, `order`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Home', 1, '', 'http://nguyenthanhkhang2119110013.test/', 2, 1, '2022-06-02 21:50:29', NULL, NULL),
(2, 'Liên hệ', 1, '', 'http://nguyenthanhkhang2119110013.test/contact', 3, 1, '2022-06-02 21:58:45', NULL, NULL),
(3, 'Giới thiệu', 1, '', 'http://nguyenthanhkhang2119110013.test/infor', 1, 1, '2022-06-02 21:58:45', NULL, NULL),
(4, 'Banner1', 2, 'banner1.jpg', '#', 1, 1, '2022-06-02 21:58:45', NULL, NULL),
(5, 'Banner2', 2, 'banner2.jpg', '#', 2, 1, '2022-06-02 21:58:45', NULL, NULL),
(6, 'Banner3', 2, 'banner3.jpg', '#', 3, 1, '2022-06-02 21:58:45', NULL, NULL),
(7, 'Banner4', 2, 'banner4.jpg', '#', 4, 1, '2022-06-02 21:58:45', NULL, NULL),
(8, 'TÀI KHOẢN CỦA BẠN', 3, '', '#', 1, 1, '2022-06-02 21:58:45', NULL, NULL),
(9, 'THÔNG TIN CÁ NHÂN', 3, '', '#', 2, 1, '2022-06-02 21:58:45', NULL, NULL),
(10, 'ĐỊA CHỈ', 3, '', '#', 3, 1, '2022-06-02 21:58:45', NULL, NULL),
(11, 'CHIẾT KHẤU', 3, '', '#', 4, 1, '2022-06-02 21:58:45', NULL, NULL),
(12, 'LỊCH SỬ ĐƠN HÀNG', 3, '', '#', 5, 1, '2022-06-02 21:58:45', NULL, NULL),
(13, 'CONTACT', 4, '', 'http://nguyenthanhkhang2119110013.test/contact', 5, 1, '2022-06-02 21:58:45', NULL, NULL),
(14, 'ĐĂNG KÝ', 4, '', 'http://nguyenthanhkhang2119110013.test/register', 2, 1, '2022-06-02 21:58:45', NULL, NULL),
(15, 'THÔNG BÁO PHÁP LÝ', 4, '', '#', 3, 1, '2022-06-02 21:58:45', NULL, NULL),
(16, 'CÁC ĐIỀU KHOẢN VÀ ĐIỀU KIỆN', 4, '', 'http://nguyenthanhkhang2119110013.test/term', 4, 1, '2022-06-02 21:58:45', NULL, NULL),
(17, 'Câu hỏi thường gặp', 4, '', 'http://nguyenthanhkhang2119110013.test/question', 1, 1, '2022-06-02 21:58:45', NULL, NULL),
(18, 'CHÍNH SÁCH', 5, '', '#', 1, 1, '2022-06-03 23:16:15', NULL, NULL),
(19, 'Chính sách bảo hành', 5, '', 'http://nguyenthanhkhang2119110013.test/insurance', 2, 1, '2022-06-03 23:18:51', NULL, NULL),
(20, 'Chính sách bảo mật', 5, '', 'http://nguyenthanhkhang2119110013.test/security', 3, 1, '2022-06-03 23:18:51', NULL, NULL),
(21, 'Chính sách thanh toán', 5, '', 'http://nguyenthanhkhang2119110013.test/pay', 4, 1, '2022-06-03 23:18:51', NULL, NULL),
(22, 'Chính sách vận chuyển', 5, '', 'http://nguyenthanhkhang2119110013.test/transport', 5, 1, '2022-06-03 23:18:51', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenthanhkhangorderdetails`
--

CREATE TABLE `nguyenthanhkhangorderdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderId` bigint(20) UNSIGNED NOT NULL,
  `productId` bigint(20) UNSIGNED NOT NULL,
  `price` double(10,1) NOT NULL,
  `quantity` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguyenthanhkhangorderdetails`
--

INSERT INTO `nguyenthanhkhangorderdetails` (`id`, `orderId`, `productId`, `price`, `quantity`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 21.0, 1, '2022-06-03 00:12:32', NULL, NULL),
(2, 1, 3, 24.0, 1, '2022-06-03 00:12:32', NULL, NULL),
(3, 2, 13, 4.0, 1, '2022-06-03 00:29:33', NULL, NULL),
(4, 2, 15, 7.0, 1, '2022-06-03 00:29:33', NULL, NULL),
(5, 4, 2, 23.0, 1, '2022-06-14 10:38:08', NULL, NULL),
(6, 5, 21, 4.0, 1, '2022-06-20 19:42:18', NULL, NULL),
(7, 5, 1, 21.0, 1, '2022-06-20 19:42:18', NULL, NULL),
(8, 5, 2, 23.0, 1, '2022-06-20 19:42:18', NULL, NULL),
(9, 6, 21, 4.0, 1, '2022-06-20 19:43:44', NULL, NULL),
(10, 12, 21, 4.0, 1, '2022-06-20 20:37:49', NULL, NULL),
(11, 13, 20, 7.0, 1, '2022-06-20 20:41:40', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenthanhkhangorders`
--

CREATE TABLE `nguyenthanhkhangorders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customerId` bigint(20) UNSIGNED NOT NULL,
  `total` double(100,1) NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguyenthanhkhangorders`
--

INSERT INTO `nguyenthanhkhangorders` (`id`, `customerId`, `total`, `note`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 49.5, 'giao hang', 1, '2022-06-03 00:12:32', NULL, NULL),
(2, 3, 12.1, 'giao hang hoa toc', 1, '2022-06-03 00:29:33', '2022-06-14 04:03:12', NULL),
(3, 3, 0.0, 'giao hang hoa toc', 0, '2022-06-03 00:45:02', '2022-06-14 04:02:57', NULL),
(4, 1, 25.3, 'giao hang', 0, '2022-06-14 10:38:08', '2022-06-20 13:38:33', NULL),
(5, 1, 52.8, 'giao hàng cấp tốc', 0, '2022-06-20 19:42:18', '2022-06-20 13:44:47', NULL),
(6, 1, 4.4, 'aaaaaa', 1, '2022-06-20 19:43:44', NULL, NULL),
(12, 1, 4.4, '12345', 1, '2022-06-20 20:37:49', NULL, NULL),
(13, 1, 7.7, '5678', 1, '2022-06-20 20:41:40', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenthanhkhangpages`
--

CREATE TABLE `nguyenthanhkhangpages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenthanhkhangproducts`
--

CREATE TABLE `nguyenthanhkhangproducts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catId` bigint(20) UNSIGNED NOT NULL,
  `brandId` bigint(20) UNSIGNED NOT NULL,
  `detail` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `salePrice` double(10,2) NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguyenthanhkhangproducts`
--

INSERT INTO `nguyenthanhkhangproducts` (`id`, `productName`, `slug`, `catId`, `brandId`, `detail`, `price`, `salePrice`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Samsung Galaxy Note 9', 'samsung-galaxy-note-9', 9, 1, '<p>Samsung&nbsp;Galaxy Note 9 mang trong mình hàng hoạt các thay đổi đột phá với điểm nhấn đặc biệt đến từ chiếc bút S Pen thần thánh cùng một viên pin dung lượng khổng lồ tới 4.000 mAh.</p>', 21.00, 18.00, 'samsung-galaxy-note-9.png', 1, '2022-06-02 15:36:43', '2022-06-02 15:36:43', NULL),
(2, 'Samsung Galaxy Note 10', 'samsung-galaxy-note-10', 9, 1, '<p>Samsung&nbsp;Galaxy Note 10 mang trong mình hàng hoạt các thay đổi đột phá với điểm nhấn đặc biệt đến từ chiếc bút S Pen thần thánh cùng một viên pin dung lượng khổng lồ tới 4.000 mAh.</p>', 23.00, 19.00, 'samsung-galaxy-note-10.jpg', 1, '2022-06-02 15:38:09', '2022-06-02 15:38:09', NULL),
(3, 'Samsung Galaxy Note 20 Ultra', 'samsung-galaxy-note-20-ultra', 9, 1, '<p>Samsung&nbsp;Galaxy Note 20 mang trong mình hàng hoạt các thay đổi đột phá với điểm nhấn đặc biệt đến từ chiếc bút S Pen thần thánh cùng một viên pin dung lượng khổng lồ tới 4.000 mAh.</p>', 24.00, 20.00, 'samsung-galaxy-note-20-ultra.jpg', 1, '2022-06-02 15:39:29', '2022-06-02 15:39:29', NULL),
(4, 'Samsung Galaxy Z Fold 2', 'samsung-galaxy-z-fold-2', 9, 1, '<p>Samsung&nbsp;Galaxy Z Fold 2 là tên gọi chính thức của điện thoại màn hình gập cao cấp của Samsung.</p>', 25.00, 20.00, 'samsung-galaxy-z-fold-2.jpg', 1, '2022-06-02 15:43:13', '2022-06-02 15:43:13', NULL),
(5, 'Samsung Galaxy Z Fold 3', 'samsung-galaxy-z-fold-3', 9, 1, '<p>Sasung Galaxy Z Fold 3 là tên gọi chính thức của điện thoại màn hình gập cao cấp của&nbsp;Samsung.</p>', 28.00, 25.00, 'samsung-galaxy-z-fold-3.jpg', 1, '2022-06-02 15:45:09', '2022-06-02 15:45:09', NULL),
(6, 'Iphone 10', 'iphone-10', 10, 2, '<p>iPhone X được đã được&nbsp;Apple&nbsp;cho ra mắt ngày 12/9 vừa rồi đánh dấu chặng đường 10 năm lần đầu tiên iPhone ra đời.</p>', 20.00, 15.00, 'iphone-10.jpg', 1, '2022-06-02 15:46:58', '2022-06-02 15:46:58', NULL),
(7, 'Iphone 11', 'iphone-11', 10, 2, '<p>iPhone 11 được đã được&nbsp;Apple&nbsp;cho ra mắt ngày &nbsp;vừa rồi đánh dấu chặng đường 11 năm lần đầu tiên iPhone ra đời.</p>', 21.00, 19.00, 'iphone-11.jpg', 1, '2022-06-02 15:47:39', '2022-06-02 15:47:39', NULL),
(8, 'Iphone 12', 'iphone-12', 10, 2, '<p>iPhone 12 được đã được&nbsp;Apple&nbsp;cho ra mắt ngày vừa rồi đánh dấu chặng đường 12 năm lần đầu tiên iPhone ra đời.</p>', 22.00, 20.00, 'iphone-12.jpg', 1, '2022-06-02 15:48:35', '2022-06-02 15:48:35', NULL),
(9, 'Iphone 13', 'iphone-13', 10, 2, '<p>iPhone 13 được đã được&nbsp;Apple&nbsp;cho ra mắt ngày vừa rồi đánh dấu chặng đường 13 năm lần đầu tiên iPhone ra đời.</p>', 22.00, 20.00, 'iphone-13.jpg', 1, '2022-06-02 15:49:24', '2022-06-02 15:49:24', NULL),
(10, 'Aripods 2', 'airpods-2', 8, 2, '<p>AirPods 2 - một sản phẩm đã từng làm mưa làm gió trước khi người “anh em” AirPods Pro ra mắt.</p>', 2.00, 1.00, 'airpods-2.jpg', 1, '2022-06-02 15:50:44', '2022-06-02 15:50:44', NULL),
(11, 'Aripods Pro', 'airpods-pro', 8, 2, '<p>Airpods Pro được chế tác với vẻ ngoài tinh giản, gam&nbsp;màu trắng trẻ trung, sáng đẹp, phối hợp tuyệt vời với mọi trang phục từ đời thường đến công sở, dự tiệc của bạn.&nbsp;</p>', 4.00, 3.00, 'airpods-pro.png', 1, '2022-06-02 15:52:14', '2022-06-02 15:52:14', NULL),
(12, 'Samsung Galaxy Buds Plus', 'samsung-galaxy-buds-plus', 7, 1, '<p>Kiểu dáng hộp sạc gọn gàng, các cạnh bo tròn mềm mại, housing kiểu in-ear nhỏ nhắn, chỉ&nbsp;5 gram&nbsp;sử dụng&nbsp;nút tai silicone 3 kích cỡ&nbsp;êm ái cho bạn đeo tai nghe vừa khít, dễ chịu, không cấn, đau ngay cả khi đeo trong thời gian dài.&nbsp;</p>', 3.00, 2.00, 'samsung-galaxy-buds-plus.jpg', 1, '2022-06-02 15:54:12', '2022-06-02 15:54:12', NULL),
(13, 'Samsung Galaxy Buds Pro', 'samsung-galaxy-buds-pro', 7, 1, '<p>Kiểu dáng hộp sạc gọn gàng, các cạnh bo tròn mềm mại, housing kiểu in-ear nhỏ nhắn, chỉ&nbsp;5 gram&nbsp;sử dụng&nbsp;nút tai silicone 3 kích cỡ&nbsp;êm ái cho bạn đeo tai nghe vừa khít, dễ chịu, không cấn, đau ngay cả khi đeo trong thời gian dài.&nbsp;</p>', 4.00, 3.00, 'samsung-galaxy-buds-pro.jpg', 1, '2022-06-02 15:54:49', '2022-06-02 15:54:49', NULL),
(14, 'Sony WF-1000MX3', 'sony-wf-1000-mx-3', 14, 3, '<p>Sony WF-1000MX3 là chiếc tai nghe True Wireless đầu tiên thế giới hỗ trợ âm thanh Hi-res chuẩn LDAC - dữ liệu âm thanh cao gấp 3 lần so với Bluetooth thông thường.</p>', 5.00, 4.00, 'sony-wf-1000-mx3.jpg', 1, '2022-06-02 15:58:13', '2022-06-02 15:58:13', NULL),
(15, 'Sony WF-1000MX4', 'sony-wf-1000-mx-4', 14, 3, '<p>Sony WF-1000MX4 là chiếc tai nghe True Wireless hỗ trợ âm thanh Hi-res chuẩn LDAC - dữ liệu âm thanh cao gấp 3 lần so với Bluetooth thông thường.</p>', 7.00, 6.00, 'sony-wf-1000-mx4.jpg', 1, '2022-06-02 15:59:03', '2022-06-02 15:59:03', NULL),
(16, 'Apple Watch Series 5', 'apple-watch-series-5', 5, 2, '<p>Apple Watch&nbsp;có thiết kế bo tròn 4 góc giúp thao tác vuốt chạm thoải mái hơn. Mặt kính cường lực Ion-X strengthened glass&nbsp;với kích thước 1.57 inch, hiển thị rõ ràng.</p>', 4.00, 3.00, 'apple-watch-s5.jpg', 1, '2022-06-02 16:04:31', '2022-06-02 16:04:31', NULL),
(17, 'Apple Watch Series 6', 'apple-watch-series-6', 5, 2, '<p>Apple Watch viền nhôm dây silicone hồng&nbsp;có thiết kế bo tròn 4 góc giúp thao tác vuốt chạm thoải mái hơn. Mặt kính cường lực Ion-X strengthened glass&nbsp;với kích thước 1.57 inch, hiển thị rõ ràng.</p>', 5.00, 4.00, 'apple-watch-s6.jpg', 1, '2022-06-02 16:05:18', '2022-06-02 16:05:18', NULL),
(18, 'Apple Watch Series 7', 'apple-watch-series-7', 5, 2, '<p>Apple Watch viền nhôm dây silicone hồng&nbsp;có thiết kế bo tròn 4 góc giúp thao tác vuốt chạm thoải mái hơn. Mặt kính cường lực Ion-X strengthened glass&nbsp;với kích thước 1.57 inch, hiển thị rõ ràng.</p>', 7.00, 6.00, 'apple-watch-s7.jpg', 1, '2022-06-02 16:05:46', '2022-06-02 16:05:46', NULL),
(19, 'Samsung Galaxy Watch 3', 'samsung-galaxy-watch-3', 4, 1, '<p>Samsung Galaxy Watch 4&nbsp;sở hữu thiết kế quen thuộc với khung viền nhôm bền bỉ, dây đeo silicone. Phiên bản 44mm này dành cho các chàng trai có cổ tay to nhưng vẫn giữ được nét thanh lịch vốn có nhờ kiểu thiết kế mặt đồng hồ tròn cổ điển.</p>', 6.00, 5.00, 'samsung-galaxy-watch-3.jpg', 1, '2022-06-02 16:07:13', '2022-06-02 16:07:13', NULL),
(20, 'Samsung Galaxy Watch 4', 'samsung-galaxy-watch-4', 4, 1, '<p>Samsung Galaxy Watch 4&nbsp;sở hữu thiết kế quen thuộc với khung viền nhôm bền bỉ, dây đeo silicone. Phiên bản 44mm này dành cho các chàng trai có cổ tay to nhưng vẫn giữ được nét thanh lịch vốn có nhờ kiểu thiết kế mặt đồng hồ tròn cổ điển.</p>', 7.00, 6.00, 'samsung-galaxy-watch-4.jpg', 1, '2022-06-02 16:08:08', '2022-06-02 16:08:08', NULL),
(21, 'Samsung Galaxy Watch Active2', 'samsung-galaxy-watch-active-2', 4, 1, '<p>Samsung Galaxy Watch Active&nbsp;2 sở hữu thiết kế quen thuộc với khung viền nhôm bền bỉ, dây đeo silicone. Phiên bản 44mm này dành cho các chàng trai có cổ tay to nhưng vẫn giữ được nét thanh lịch vốn có nhờ kiểu thiết kế mặt đồng hồ tròn cổ điển.</p>', 4.00, 3.00, 'samsung-galaxy-watch-active-2.jpg', 1, '2022-06-02 16:09:12', '2022-06-02 16:09:12', NULL),
(22, 'Xiaomi Mi Watch 1', 'xiaomi-mi-watch-1', 15, 4, '<p>Xiaomi Mi Watch 1sở hữu thiết kế quen thuộc với khung viền nhôm bền bỉ,mặt vuông khá giống thiết kế Apple Watch.</p>', 3.00, 2.00, 'xiaomi-mi-watch.jpg', 1, '2022-06-02 16:10:49', '2022-06-02 16:10:49', NULL),
(23, 'Xiaomi Mi 8', 'xiaomi-mi-8', 13, 4, '<p>Điện thoại&nbsp;Xiaomi Mi 8 là chiếc&nbsp;smartphone&nbsp;đến từ Xiaomi&nbsp;hướng tới nhóm khách hàng đang tìm kiếm cho mình một sản phẩm với cấu hình flagship cao cấp.</p>', 10.00, 8.00, 'xiaomi-mi-8.jpg', 1, '2022-06-02 16:13:28', '2022-06-02 16:13:28', NULL),
(24, 'Xiaomi Mi 9', 'xiaomi-mi-9', 13, 4, '<p>Điện thoại&nbsp;Xiaomi Mi 9 là chiếc&nbsp;smartphone&nbsp;đến từ Xiaomi&nbsp;hướng tới nhóm khách hàng đang tìm kiếm cho mình một sản phẩm với cấu hình tốt, flagship.</p>', 12.00, 10.00, 'xiaomi-mi-9.jpg', 1, '2022-06-02 16:14:51', '2022-06-02 16:14:51', NULL),
(25, 'Xiaomi Mi 10', 'xiaomi-mi-10', 13, 4, '<p>Điện thoại&nbsp;Xiaomi Mi 10 là chiếc&nbsp;smartphone&nbsp;đến từ Xiaomi&nbsp;hướng tới nhóm khách hàng đang tìm kiếm cho mình một sản phẩm với cấu hình tốt, flagship.</p>', 13.00, 10.00, 'xiaomi-mi-10.jpg', 1, '2022-06-02 16:15:26', '2022-06-02 16:15:26', NULL),
(26, 'Xiaomi Mi 11', 'xiaomi-mi-11', 13, 4, '<p>Điện thoại&nbsp;Xiaomi Mi 11 là chiếc&nbsp;smartphone&nbsp;đến từ Xiaomi&nbsp;hướng tới nhóm khách hàng đang tìm kiếm cho mình một sản phẩm với cấu hình tốt, flagship.</p>', 15.00, 10.00, 'xiaomi-mi-11.jpg', 1, '2022-06-02 16:16:00', '2022-06-02 16:16:00', NULL),
(27, 'Amazon Alexa Echo', 'amazon-alexa-echo', 12, 6, '<p>Alexa là một dịch vụ nhận dạng giọng nói thông minh và hiểu ngôn ngữ của loài người. Dịch vụ này có thể được kích hoạt bằng giọng nói thông qua bất kỳ thiết bị nào có micro và loa.</p>', 8.00, 6.00, 'amazon-alexa.jpg', 1, '2022-06-02 16:17:41', '2022-06-02 16:17:41', NULL),
(28, 'Google Home Max', 'google-home-max', 11, 5, '<p>Google Home có khả năng giao tiếp với chủ nhân thông qua giọng nói chứ không đơn thuần là chỉ phát nhạc như những chiếc loa bluetooth thông thường.</p>', 10.00, 8.00, 'google-home-max.jpg', 1, '2022-06-02 16:19:24', '2022-06-02 16:19:24', NULL),
(29, 'Google Home Mini', 'google-home-mini', 11, 5, '<p>Google Home có khả năng giao tiếp với chủ nhân thông qua giọng nói chứ không đơn thuần là chỉ phát nhạc như những chiếc loa bluetooth thông thường.</p>', 5.00, 4.00, 'google-home-mini.jpg', 1, '2022-06-02 16:20:20', '2022-06-02 16:20:20', NULL),
(30, 'Samsung Galaxy Home', 'samsung-galaxy-home', 16, 1, '<p>Thiết kế loa thông minh Galaxy Home tương tự như loa Home của Google, nhưng với ba chân kim loại đứng. Trên cùng, Galaxy Home được xây dựng thương hiệu AKG.</p>', 15.00, 13.00, 'samung-galaxy-home.jpg', 1, '2022-06-02 16:36:16', '2022-06-02 16:36:16', NULL),
(31, 'Samsung Galaxy Home Mini', 'samsung-galaxy-home-mini', 16, 1, '<p>Thiết kế loa thông minh Galaxy Home Mini tương tự như loa Home Mini của Google.</p>', 10.00, 8.00, 'samung-galaxy-home-mini.jpg', 1, '2022-06-02 16:37:05', '2022-06-13 12:58:02', NULL),
(32, 'edit 2', 'eidt-2', 9, 1, '<p>ddddddd</p>', 11.00, 2.00, 'google-home-mini.jpg', 1, '2022-06-03 14:55:01', '2022-06-03 14:55:29', '2022-06-03 14:55:29'),
(33, 'Amazon Alexa Echo Plus', 'amazon-alexa-echo-plus', 12, 6, '<p><strong>Echo Plus thế hệ mới 2018</strong> tích hợp sẵn bộ trung tâm Zigbee điều khiển nhà thông minh. Nâng cấp âm thanh chất lượng cao và tích hợp sẵn cảm biến nhiệt độ. Loa cao cấp mới từ Dolby phát âm thanh 360°. Giọng hát chân thực và âm bass sống động.</p>', 10.00, 8.00, 'echo-plus.jpg', 1, '2022-06-17 13:05:27', '2022-06-17 13:05:27', NULL),
(34, 'Samsung Galaxy S22 Ultra', 'samsung-galaxy-s22-ultra', 9, 1, '<p>Galaxy S22 Ultra 5G được kế thừa form thiết kế từ những dòng Note trước đây của hãng đem đến cho bạn có cảm giác vừa mới lạ vừa hoài niệm. Trọng lượng của máy khoảng 228 g cho cảm giác cầm nắm đầm tay, khi cầm máy trần thì hơi có cảm giác dễ trượt.</p>', 25.00, 20.00, 'Galaxy-S22-Ultra.jpg', 1, '2022-06-17 13:10:19', '2022-06-17 13:10:19', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin 1', 'khangnguyen0704880256@gmail.com', NULL, '$2y$10$yzwXGn33RdUUL0z5/6J7/ORmayBWrTTicMHDcZ55Xewf58CoFVDVa', 'OGsT5EXVAaUYHOCLf6tJ8u7EN3RHjzpUXu55YDNZVQUcIDiZy18mGl413br6', '2022-06-02 14:26:55', '2022-06-02 14:26:55'),
(2, 'admin 2', 'vanchien@gmail.com', NULL, '$2y$10$mkBXcaQ11RD2.i7.kinT8uFU00K3qWHte/Y1YkwRLoruVQ6bWeThq', NULL, '2022-06-02 14:27:16', '2022-06-02 14:27:16');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguyenthanhkhangbrands`
--
ALTER TABLE `nguyenthanhkhangbrands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguyenthanhkhangcontacts`
--
ALTER TABLE `nguyenthanhkhangcontacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguyenthanhkhangcustomers`
--
ALTER TABLE `nguyenthanhkhangcustomers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nguyenthanhkhangcustomers_email_unique` (`email`);

--
-- Chỉ mục cho bảng `nguyenthanhkhanglinks`
--
ALTER TABLE `nguyenthanhkhanglinks`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguyenthanhkhangorderdetails`
--
ALTER TABLE `nguyenthanhkhangorderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguyenthanhkhangorders`
--
ALTER TABLE `nguyenthanhkhangorders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguyenthanhkhangpages`
--
ALTER TABLE `nguyenthanhkhangpages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguyenthanhkhangproducts`
--
ALTER TABLE `nguyenthanhkhangproducts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `nguyenthanhkhangbrands`
--
ALTER TABLE `nguyenthanhkhangbrands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `nguyenthanhkhangcontacts`
--
ALTER TABLE `nguyenthanhkhangcontacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `nguyenthanhkhangcustomers`
--
ALTER TABLE `nguyenthanhkhangcustomers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nguyenthanhkhanglinks`
--
ALTER TABLE `nguyenthanhkhanglinks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `nguyenthanhkhangorderdetails`
--
ALTER TABLE `nguyenthanhkhangorderdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `nguyenthanhkhangorders`
--
ALTER TABLE `nguyenthanhkhangorders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `nguyenthanhkhangpages`
--
ALTER TABLE `nguyenthanhkhangpages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nguyenthanhkhangproducts`
--
ALTER TABLE `nguyenthanhkhangproducts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
