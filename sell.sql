-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2023 lúc 02:15 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sell`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `avatar`) VALUES
(1, 'Hoang', 'admin@gmail.com', '$2y$10$zxWwHPZ3alnmHA/3yJITdOhGUlIG9GsklsCJBntdbiVABeSVxDG42', './Images/image-admin/hay.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articlepost`
--

CREATE TABLE `articlepost` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datePost` date NOT NULL,
  `likes` int(11) NOT NULL,
  `categories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categoriepost`
--

CREATE TABLE `categoriepost` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categoryproduct`
--

CREATE TABLE `categoryproduct` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categoryproduct`
--

INSERT INTO `categoryproduct` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Phụ kiện khác', '2023-08-31 00:33:47', '2023-08-31 00:33:47'),
(2, 'Giày nam', '2023-08-31 00:34:18', '2023-08-31 00:34:18'),
(3, 'Giày nữ', '2023-08-31 00:34:26', '2023-08-31 00:34:26'),
(4, 'Giày trẻ em', '2023-08-31 00:34:35', '2023-08-31 00:34:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codeCustomer` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `nameCustomers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `imageproduct`
--

CREATE TABLE `imageproduct` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idProduct` bigint(20) UNSIGNED NOT NULL,
  `linkImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `imageproduct`
--

INSERT INTO `imageproduct` (`id`, `idProduct`, `linkImage`, `created_at`, `updated_at`) VALUES
(102, 39, 'http://127.0.0.1:8000/Images/product/women-classic-5.jpg', '2023-07-19 03:16:50', '2023-07-19 03:16:50'),
(103, 39, 'http://127.0.0.1:8000/Images/product/women-classic-7.jpg', '2023-07-19 03:16:50', '2023-07-19 03:16:50'),
(104, 39, 'http://127.0.0.1:8000/Images/product/women-classic-8-1-300x225.jpg', '2023-07-19 03:16:50', '2023-07-19 03:16:50'),
(112, 40, 'http://127.0.0.1:8000/Images/product/giay-dep-tre-em-khong-nen-mua.jpeg', '2023-07-20 00:07:09', '2023-07-20 00:07:09'),
(113, 40, 'http://127.0.0.1:8000/Images/product/giày-tây-deci-7.jpg', '2023-07-20 00:07:09', '2023-07-20 00:07:09'),
(114, 40, 'http://127.0.0.1:8000/Images/product/giayNu.jpg', '2023-07-20 00:07:09', '2023-07-20 00:07:09'),
(115, 40, 'http://127.0.0.1:8000/Images/product/IMG_1209.jpg', '2023-07-20 00:07:09', '2023-07-20 00:07:09'),
(116, 41, 'http://127.0.0.1:8000/Images/product/images.png', '2023-07-20 00:07:32', '2023-07-20 00:07:32'),
(117, 41, 'http://127.0.0.1:8000/Images/product/1920px-WordPress_logo.svg.png', '2023-07-20 00:07:32', '2023-07-20 00:07:32'),
(118, 41, 'http://127.0.0.1:8000/Images/product/xlogo-chinh-dahinh-com_1.png.pagespeed.ic.az47ySdNUl.jpg', '2023-07-20 00:07:32', '2023-07-20 00:07:32'),
(119, 42, 'http://127.0.0.1:8000/Images/product/xlogo-chinh-dahinh-com_1.png.pagespeed.ic.az47ySdNUl.jpg', '2023-07-20 00:07:58', '2023-07-20 00:07:58'),
(123, 39, 'http://127.0.0.1:8000/Images/product/samsung-galaxy-tab.jpg', '2023-08-09 19:53:08', '2023-08-09 19:53:08'),
(124, 39, 'http://127.0.0.1:8000/Images/product/samsung-galaxy-tab-4.jpg', '2023-08-09 19:53:08', '2023-08-09 19:53:08'),
(125, 39, 'http://127.0.0.1:8000/Images/product/samsung-galaxy-tab-3.jpg', '2023-08-09 19:53:08', '2023-08-09 19:53:08'),
(126, 39, 'http://127.0.0.1:8000/Images/product/samsung-galaxy-tab-10.jpg', '2023-08-09 19:53:08', '2023-08-09 19:53:08'),
(127, 43, 'http://127.0.0.1:8000/Images/product/samsung-galaxy-tab.jpg', '2023-08-09 19:55:24', '2023-08-09 19:55:24'),
(128, 43, 'http://127.0.0.1:8000/Images/product/samsung-galaxy-tab-4.jpg', '2023-08-09 19:55:24', '2023-08-09 19:55:24'),
(129, 43, 'http://127.0.0.1:8000/Images/product/samsung-galaxy-tab-3.jpg', '2023-08-09 19:55:24', '2023-08-09 19:55:24'),
(130, 43, 'http://127.0.0.1:8000/Images/product/samsung-galaxy-tab-10.jpg', '2023-08-09 19:55:24', '2023-08-09 19:55:24'),
(131, 39, 'http://127.0.0.1:8000/Images/product/samsung-galaxy-tab.jpg', '2023-08-09 19:56:48', '2023-08-09 19:56:48'),
(132, 39, 'http://127.0.0.1:8000/Images/product/samsung-galaxy-tab-4.jpg', '2023-08-09 19:56:48', '2023-08-09 19:56:48'),
(133, 39, 'http://127.0.0.1:8000/Images/product/samsung-galaxy-tab-3.jpg', '2023-08-09 19:56:48', '2023-08-09 19:56:48'),
(134, 39, 'http://127.0.0.1:8000/Images/product/samsung-galaxy-tab-10.jpg', '2023-08-09 19:56:48', '2023-08-09 19:56:48'),
(135, 40, 'http://127.0.0.1:8000/Images/product/samsung-galaxy-tab.jpg', '2023-08-09 19:57:08', '2023-08-09 19:57:08'),
(136, 40, 'http://127.0.0.1:8000/Images/product/samsung-galaxy-tab-4.jpg', '2023-08-09 19:57:08', '2023-08-09 19:57:08'),
(137, 40, 'http://127.0.0.1:8000/Images/product/samsung-galaxy-tab-3.jpg', '2023-08-09 19:57:08', '2023-08-09 19:57:08'),
(138, 40, 'http://127.0.0.1:8000/Images/product/samsung-galaxy-tab-10.jpg', '2023-08-09 19:57:08', '2023-08-09 19:57:08'),
(139, 41, 'http://127.0.0.1:8000/Images/product/samsung-galaxy-tab.jpg', '2023-08-09 19:57:42', '2023-08-09 19:57:42'),
(140, 41, 'http://127.0.0.1:8000/Images/product/samsung-galaxy-tab-4.jpg', '2023-08-09 19:57:42', '2023-08-09 19:57:42'),
(141, 41, 'http://127.0.0.1:8000/Images/product/samsung-galaxy-tab-3.jpg', '2023-08-09 19:57:42', '2023-08-09 19:57:42'),
(142, 41, 'http://127.0.0.1:8000/Images/product/samsung-galaxy-tab-10.jpg', '2023-08-09 19:57:42', '2023-08-09 19:57:42'),
(143, 42, 'http://127.0.0.1:8000/Images/product/samsung-galaxy-tab.jpg', '2023-08-09 19:57:59', '2023-08-09 19:57:59'),
(144, 42, 'http://127.0.0.1:8000/Images/product/samsung-galaxy-tab-4.jpg', '2023-08-09 19:57:59', '2023-08-09 19:57:59'),
(145, 42, 'http://127.0.0.1:8000/Images/product/samsung-galaxy-tab-3.jpg', '2023-08-09 19:57:59', '2023-08-09 19:57:59'),
(146, 42, 'http://127.0.0.1:8000/Images/product/samsung-galaxy-tab-10.jpg', '2023-08-09 19:57:59', '2023-08-09 19:57:59');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_05_31_064119_create_sessions_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 2),
(8, '2023_07_15_020241_create-product', 3),
(10, '2023_07_15_021748_create_new_products', 4),
(11, '2023_07_15_063837_add_column_detail_product', 5),
(12, '2023_07_15_065650_add_column_detail_product', 6),
(13, '2023_07_16_054410_drop_table_name', 7),
(14, '2023_07_16_054632_create_table_image_product', 8),
(15, '2023_07_16_055414_create_table_image_product', 9),
(16, '2023_07_17_024752_table_image_product', 10),
(18, '2023_07_17_065741_create_table_image_product', 11),
(19, '2023_07_17_071832_create_table_image_product', 12),
(20, '2023_08_10_022542_add-column-slug', 13),
(21, '2023_08_10_023020_add-column-slug', 14),
(22, '2023_08_10_023507_add-column-slug', 15),
(23, '2023_08_15_011850_create_table_post', 16),
(24, '2023_08_15_075834_create_table_article_draft', 17),
(25, '2023_08_15_081523_categorie_post', 18),
(26, '2023_08_15_082134_category_product', 19),
(27, '2023_08_20_071702_add_column_slug', 20),
(28, '2023_08_31_074336_create_table_supplier', 21);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `new_products`
--

CREATE TABLE `new_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nameProduct` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codeProduct` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `prmPrice` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avtProduct` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `detailProduct` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `new_products`
--

INSERT INTO `new_products` (`id`, `nameProduct`, `codeProduct`, `price`, `prmPrice`, `quantity`, `category`, `supplier`, `status`, `avtProduct`, `created_at`, `updated_at`, `detailProduct`, `slug`) VALUES
(39, 'sau supplier', 2, 1223123, 12313, 123, 'Nike', 'Nike', 'còn hàng', 'http://127.0.0.1:8000/Images/product/giay-dep-tre-em-khong-nen-mua.jpeg', '2023-07-19 03:16:50', '2023-08-09 19:56:48', 'admin', 'sau-supplier'),
(40, 'giày NIKE s33', 3, 3322323, 1223123, 100, 'Giày trẻ em', 'Nike', 'còn hàng', 'http://127.0.0.1:8000/Images/product/nh9f0b692914y.jpg', '2023-07-20 00:07:09', '2023-08-09 19:57:08', 'admin', 'giay-nike-s33'),
(41, 'sau avatar', 4, 12121, 1223123, 100, 'Phụ kiện khác', 'Nike', 'còn hàng', 'http://127.0.0.1:8000/Images/product/giayNu.jpg', '2023-07-20 00:07:32', '2023-08-09 19:57:42', 'admin', 'sau-avatar'),
(42, 'sau details', 5, 1212, 1223123, 123, 'Giày nữ', 'Nike', 'còn hàng', 'http://127.0.0.1:8000/Images/product/giày-tây-deci-7.jpg', '2023-07-20 00:07:58', '2023-08-09 19:57:59', 'admin3', 'sau-details'),
(43, 'Giày thượng đình', 1233, 1223123, 212133, 123, 'Giày nam', 'Nike', 'còn hàng', 'http://127.0.0.1:8000/Images/product/samsung-galaxy-tab-3.jpg', '2023-08-09 19:55:24', '2023-08-09 19:55:24', 'admin', 'giay-thuong-dinh');

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
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datePost` datetime NOT NULL,
  `likes` int(11) NOT NULL,
  `categories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `title`, `images`, `content`, `datePost`, `likes`, `categories`, `created_at`, `updated_at`, `slug`) VALUES
(7, 'ha noi không vội dc đâu', 'http://127.0.0.1:8000/Images/posts/anh-ha-noi.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero reprehenderit itaque nostrum consequatur non ducimus numquam quisquam fugit. Magnam sint nesciunt autem eveniet, hic incidunt iusto voluptatum harum perferendis porro.', '2023-08-21 06:59:07', 1, 'ăn uống', '2023-08-20 23:59:07', '2023-08-20 23:59:07', 'ha-noi-khong-voi-dc-dau'),
(9, 'hạ long bien nhớ', 'http://127.0.0.1:8000/Images/posts/hinh-anh-du-lich-ha-long.jpg', 'em vè noi ay, 1 bờ vai xanh 1 dong ldfdjfkdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddđ', '2023-08-21 07:15:23', 1, 'ăn uống', '2023-08-21 00:15:23', '2023-08-21 00:15:23', 'ha-long-bien-nho'),
(10, 'ha noi không vội dc đâu', 'http://127.0.0.1:8000/Images/posts/anh-ha-noi.jpg', 'lorem', '2023-08-21 07:30:21', 1, 'ăn uống', '2023-08-21 00:30:21', '2023-08-21 00:30:21', 'ha-noi-khong-voi-dc-dau'),
(11, 'giay dep giay xau', 'http://127.0.0.1:8000/Images/posts/giay-dep-tre-em-khong-nen-mua.jpeg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore facilis aliquid inventore distinctio velit illo, dolor obcaecati! Dolorem minus sed quae veniam, consequatur, accusantium, cum itaque laborum sint repellat velit.', '2023-08-21 07:41:33', 1, 'ăn uống', '2023-08-21 00:41:33', '2023-08-21 00:41:33', 'giay-dep-giay-xau');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `namePost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryPosts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateSubmitted` date NOT NULL,
  `imagePosts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codePosts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('zEfs6uyxM4PyU8KNEn70uri1l27mzdVh74AQHZ2C', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWW5Zdm9nbTNoWnljanZYdlJvaWlCcHFlSTNoczFSaXpDRUFRZjVwTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1686645722);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `supplier`
--

CREATE TABLE `supplier` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `supplier`
--

INSERT INTO `supplier` (`id`, `supplier`, `created_at`, `updated_at`) VALUES
(1, 'Nike', '2023-08-31 00:53:57', '2023-08-31 00:53:57'),
(2, 'Adidas', '2023-08-31 00:54:32', '2023-08-31 00:54:32'),
(3, 'Puma', '2023-08-31 00:54:38', '2023-08-31 00:54:38'),
(4, 'Converse', '2023-08-31 00:54:51', '2023-08-31 00:54:51'),
(5, 'Balenciaga', '2023-08-31 00:55:08', '2023-08-31 00:55:08'),
(6, 'Asic', '2023-08-31 01:00:23', '2023-08-31 01:00:23');

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `articlepost`
--
ALTER TABLE `articlepost`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categoriepost`
--
ALTER TABLE `categoriepost`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categoryproduct`
--
ALTER TABLE `categoryproduct`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `imageproduct`
--
ALTER TABLE `imageproduct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imageproduct_idproduct_foreign` (`idProduct`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `new_products`
--
ALTER TABLE `new_products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `supplier`
--
ALTER TABLE `supplier`
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
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `articlepost`
--
ALTER TABLE `articlepost`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `categoriepost`
--
ALTER TABLE `categoriepost`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `categoryproduct`
--
ALTER TABLE `categoryproduct`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `imageproduct`
--
ALTER TABLE `imageproduct`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `new_products`
--
ALTER TABLE `new_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `imageproduct`
--
ALTER TABLE `imageproduct`
  ADD CONSTRAINT `imageproduct_idproduct_foreign` FOREIGN KEY (`idProduct`) REFERENCES `new_products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
