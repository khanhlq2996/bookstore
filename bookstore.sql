-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 23, 2017 lúc 06:59 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bookstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `adminstrator`
--

CREATE TABLE `adminstrator` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(32) COLLATE utf8_bin NOT NULL,
  `admin_password` varchar(32) COLLATE utf8_bin NOT NULL,
  `admin_email` varchar(100) COLLATE utf8_bin NOT NULL,
  `admin_level` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(32) COLLATE utf8_bin NOT NULL,
  `avata` varchar(200) COLLATE utf8_bin NOT NULL,
  `author_birthday` date DEFAULT NULL,
  `author_date_of_death` date DEFAULT NULL,
  `author_native_land` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `author_description` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `author`
--

INSERT INTO `author` (`author_id`, `author_name`, `avata`, `author_birthday`, `author_date_of_death`, `author_native_land`, `author_description`) VALUES
(1, 'Author 1', '', '2017-05-10', NULL, '', ''),
(2, 'Author 2', '', '2017-05-01', NULL, '', ''),
(3, 'Author 3', '', '2017-05-10', NULL, '', ''),
(4, 'Author 4', '', '2017-05-23', NULL, '', ''),
(5, 'Author 5', '', '2017-05-17', NULL, '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(32) COLLATE utf8_bin NOT NULL,
  `slug` varchar(200) COLLATE utf8_bin NOT NULL,
  `category_description` varchar(500) COLLATE utf8_bin NOT NULL DEFAULT '',
  `category_avata` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT '/imges/author.png',
  `category_parent` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `slug`, `category_description`, `category_avata`, `category_parent`) VALUES
(1, 'Category 1', 'category-1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', NULL),
(2, 'Category 2', 'category-2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', NULL),
(3, 'Category 3', 'category-3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', NULL),
(4, 'Category 4', 'category-4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', NULL),
(5, 'Category 5', 'category-5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', NULL),
(6, 'Category 6', 'category-6', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', NULL),
(7, 'Category 7', 'category-7', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', NULL),
(8, 'Category 8', 'category-8', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', NULL),
(9, 'Category 9', 'category-9', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', NULL),
(10, 'Category 10', 'category-10', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', NULL),
(11, 'Category 11', 'category-11', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', NULL),
(12, 'Category 12', 'category-12', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_messenger` varchar(200) COLLATE utf8_bin NOT NULL,
  `comment_parent` int(11) DEFAULT NULL,
  `comment_created` date NOT NULL,
  `comment_like` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `menu_url` varchar(100) COLLATE utf8_bin NOT NULL,
  `menu_parent` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_url`, `menu_parent`) VALUES
(1, 'Liên hệ', '/lien-he.html', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `options`
--

CREATE TABLE `options` (
  `site_url` varchar(11) COLLATE utf8_bin NOT NULL,
  `site_name` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT 'Shop',
  `site_description` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `site_email` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT 'contact@domain.com',
  `site_phone` varchar(15) COLLATE utf8_bin NOT NULL DEFAULT '+84 123.456.789',
  `site_maps_url` varchar(5000) COLLATE utf8_bin NOT NULL DEFAULT 'https://maps.google.com',
  `site_address` varchar(500) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `options`
--

INSERT INTO `options` (`site_url`, `site_name`, `site_description`, `site_email`, `site_phone`, `site_maps_url`, `site_address`) VALUES
('', 'Shop', '', 'contact@domain.com', '+84 123.456.789', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.8400487560684!2d105.78283531443644!3d20.999047886014463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acb3aa9c813d%3A0x4bbf949cf1be8df9!2zNDAwIEzGsMahbmcgVGjhur8gVmluaCwgTeG7hSBUcsOsLCBU4burIExpw6ptLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1495384433072\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'Hà Nội, Việt Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL DEFAULT '0',
  `order_status` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(32) COLLATE utf8_bin NOT NULL,
  `slug` varchar(200) COLLATE utf8_bin NOT NULL,
  `author_id` int(11) NOT NULL,
  `categories` text COLLATE utf8_bin NOT NULL,
  `product_description` text COLLATE utf8_bin NOT NULL,
  `product_price` int(11) NOT NULL DEFAULT '0',
  `product_avata` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT '/imges/author.png',
  `tags` text COLLATE utf8_bin,
  `product_view` int(11) DEFAULT '0',
  `product_like` int(11) DEFAULT '0',
  `product_share` int(11) DEFAULT '0',
  `product_created` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `slug`, `author_id`, `categories`, `product_description`, `product_price`, `product_avata`, `tags`, `product_view`, `product_like`, `product_share`, `product_created`) VALUES
(7, 'Product 7', 'product-7', 1, '1,2,3,4', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(8, 'Product 8', 'product-8', 1, '1,2,3,4', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(9, 'Product 9', 'product-9', 1, '1,2,3,4', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(10, 'Product 10', 'product-10', 1, '2,3,4,5', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(11, 'Product 11', 'product-11', 2, '2,3,4,5', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(12, 'Product 12', 'product-12', 2, '2,3,4,5', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(13, 'Product 13', 'product-13', 2, '2,3,4,5', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(14, 'Product 14', 'product-14', 2, '2,3,4,5', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(15, 'Product 15', 'product-15', 2, '2,3,4,5', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(16, 'Product 16', 'product-16', 2, '2,3,4,5', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(17, 'Product 17', 'product-17', 2, '2,3,4,5', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(18, 'Product 18', 'product-18', 2, '2,3,4,5', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(19, 'Product 19', 'product-19', 2, '1,2,3,4', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(20, 'Product 20', 'product-20', 2, '1,2,3,4', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(21, 'Product 21', 'product-21', 3, '1,2,3,4', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(22, 'Product 22', 'product-22', 3, '1,2,3,4', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(23, 'Product 23', 'product-23', 3, '1,2,3,4', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(24, 'Product 24', 'product-24', 3, '1,2,3,4', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(25, 'Product 25', 'product-25', 3, '1,2,3,4', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(26, 'Product 26', 'product-26', 3, '1,2,3,4', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(27, 'Product 27', 'product-27', 3, '1,2,3,4', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(28, 'Product 28', 'product-28', 3, '3,4,5,6', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(29, 'Product 29', 'product-29', 3, '3,4,5,6', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(30, 'Product 30', 'product-30', 3, '3,4,5,6', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(31, 'Product 31', 'product-31', 4, '3,4,5,6', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(32, 'Product 32', 'product-32', 4, '3,4,5,6', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(33, 'Product 33', 'product-33', 4, '3,4,5,6', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(34, 'Product 34', 'product-34', 4, '3,4,5,6', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(35, 'Product 35', 'product-35', 4, '3,4,5,6', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(36, 'Product 36', 'product-36', 4, '3,4,5,6', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(37, 'Product 37', 'product-37', 4, '1,2,4,5', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(38, 'Product 38', 'product-38', 4, '1,2,4,5', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(39, 'Product 39', 'product-39', 4, '1,2,4,5', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(40, 'Product 40', 'product-40', 4, '1,2,4,5', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(41, 'Product 41', 'product-41', 5, '1,2,4,5', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(42, 'Product 42', 'product-42', 5, '1,2,4,5', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(43, 'Product 43', 'product-43', 5, '1,2,4,5', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(44, 'Product 44', 'product-44', 5, '1,2,4,5', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(45, 'Product 45', 'product-45', 5, '1,2,4,5', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(46, 'Product 46', 'product-46', 5, '5,6,7,8', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(47, 'Product 47', 'product-47', 5, '5,6,7,8', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(48, 'Product 48', 'product-48', 5, '5,6,7,8', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(49, 'Product 49', 'product-49', 5, '5,6,7,8', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(50, 'Product 50', 'product-50', 5, '5,6,7,8', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(1, 'Product 1', 'product-1', 2, '2,3,4,5', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(2, 'Product 2', 'product-2', 2, '2,3,4,5', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(3, 'Product 3', 'product-3', 2, '2,3,4,5', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(4, 'Product 4', 'product-4', 2, '2,3,4,5', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(5, 'Product 5', 'product-5', 2, '2,3,4,5', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(6, 'Product 6', 'product-6', 2, '2,3,4,5', 'product description here', 0, '', '', 0, 0, 0, '0000-00-00'),
(51, 'Product 51', 'product-51', 2, '9,10,11,12', '', 0, '', NULL, 0, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `slide_id` int(11) NOT NULL,
  `slide_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `slide_list_img` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`slide_id`, `slide_name`, `slide_list_img`) VALUES
(1, 'slide home', '/images/HTBHNew-870.jpg,/images/HTBHNew-870.jpg,/images/HTBHNew-870.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(32) COLLATE utf8_bin NOT NULL,
  `user_phone` varchar(15) COLLATE utf8_bin NOT NULL,
  `user_address` varchar(200) COLLATE utf8_bin NOT NULL,
  `order` text COLLATE utf8_bin NOT NULL,
  `total_pay` int(11) DEFAULT NULL,
  `comment_created` date NOT NULL,
  `transaction_status` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(32) COLLATE utf8_bin NOT NULL,
  `user_password` varchar(32) COLLATE utf8_bin NOT NULL,
  `user_email` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_phone` varchar(15) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_address` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `user_email`, `user_phone`, `user_address`) VALUES
(1, 'khanh', 'c20ad4d76fe97759aa27a0c99bff6710', 'quockhanh.96.bka@gmail.com', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `adminstrator`
--
ALTER TABLE `adminstrator`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- Chỉ mục cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `adminstrator`
--
ALTER TABLE `adminstrator`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
