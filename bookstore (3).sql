-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 21, 2017 lúc 01:46 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

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

--
-- Đang đổ dữ liệu cho bảng `adminstrator`
--

INSERT INTO `adminstrator` (`admin_id`, `admin_name`, `admin_password`, `admin_email`, `admin_level`) VALUES
(1, 'huyboxi', '5ff974c11e7c1e83328f735641703197', 'doohuy171@gmail.com', 1),
(2, 'huyboxi1', '5ff974c11e7c1e83328f735641703197', 'dohuy171@gmail.com', 2),
(3, 'huyboxi1', '5ff974c11e7c1e83328f735641703197', 'dohuy171@gmail.com', 2),
(4, 'huyboxi2', 'anhhuy123', 'dohuy171@gmail.com', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(32) COLLATE utf8_bin NOT NULL,
  `author_birthday` date DEFAULT NULL,
  `author_date_of_death` date DEFAULT NULL,
  `author_native_land` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `author_description` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `author`
--

INSERT INTO `author` (`author_id`, `author_name`, `author_birthday`, `author_date_of_death`, `author_native_land`, `author_description`) VALUES
(1, 'Author 1', '2017-05-10', NULL, '', ''),
(2, 'Author 2', '2017-05-01', NULL, '', ''),
(3, 'Author 3', '2017-05-10', NULL, '', ''),
(4, 'Author 4', '2017-05-23', NULL, '', ''),
(5, 'Author 5', '2017-05-17', NULL, '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(32) COLLATE utf8_bin NOT NULL,
  `category_description` varchar(500) COLLATE utf8_bin NOT NULL DEFAULT '',
  `category_avata` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT '/imges/author.png',
  `category_parent` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_description`, `category_avata`, `category_parent`) VALUES
(1, 'Category 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '/images/author.png', NULL),
(2, 'Category 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '/images/author.png', NULL),
(3, 'Category 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '/images/author.png', NULL),
(4, 'Category 4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '/images/author.png', NULL),
(5, 'Category 5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '/images/author.png', NULL),
(6, 'Category 6', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '/images/author.png', NULL),
(7, 'Category 7', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '/images/author.png', NULL),
(8, 'Category 8', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '/images/author.png', NULL),
(9, 'Category 9', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '/images/author.png', NULL),
(10, 'Category 10', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '/images/author.png', NULL),
(11, 'Category 11', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '/images/author.png', NULL),
(12, 'Category 12', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '/images/author.png', NULL),
(13, 'thu-dong', 'Mua cua nhung cuon tieu thuyet trinh tham hai huoc', './18-05-17/', 1),
(14, 'xuan-ha', 'ngay ach duoc tang gia', '', 3),
(15, 'xuan-ha-thu', 'sdadsda', './18-05-17/journey-game-screenshot-7.jpg', 4);

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
(1, 'Liên hệ', '/index.php?v=page&id=1', 0),
(2, 'Sach-ban-chay', 'index.php?v=55&id=21', 1);

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
  `site_maps_url` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT 'https://maps.google.com'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `options`
--

INSERT INTO `options` (`site_url`, `site_name`, `site_description`, `site_email`, `site_phone`, `site_maps_url`) VALUES
('index.php?i', 'Lam-an-lon', 'mua thu la mua mang dac trunf cua ca mua he va mua dong', 'sitemail@gmail.com', '09zzzzzzzzzzzzz', 'hanoi.url.xyz'),
('index.php?i', 'Lam-an-lon', 'mua thu la mua mang dac trunf cua ca mua he va mua dong', 'sitemail@gmail.com', '09zzzzzzzzzzzzz', 'hanoi.url.xyz'),
('index.php?i', 'Lam-an-lon', 'mua thu la mua mang dac trunf cua ca mua he va mua dong', 'sitemail@gmail.com', '09zzzzzzzzzzzzz', 'hanoi.url.xyz');

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

INSERT INTO `product` (`product_id`, `product_name`, `author_id`, `categories`, `product_description`, `product_price`, `product_avata`, `tags`, `product_view`, `product_like`, `product_share`, `product_created`) VALUES
(8, 'Product 8', 1, '1,2,3,4', 'product description here', 0, '/images/product.jpg', '', 0, 0, 0, '0000-00-00'),
(9, 'Product 9', 1, '1,2,3,4', 'product description here', 0, '/images/product.jpg', '', 0, 0, 0, '0000-00-00'),
(10, 'Product 10', 1, '2,3,4,5', 'product description here', 0, '/images/product.jpg', '', 0, 0, 0, '0000-00-00'),
(11, 'Product 11', 2, '2,3,4,5', 'product description here', 0, '/images/product.jpg', '', 0, 0, 0, '0000-00-00'),
(12, 'Product 12', 2, '2,3,4,5', 'product description here', 0, '/images/product.jpg', '', 0, 0, 0, '0000-00-00'),
(13, 'Product 13', 2, '2,3,4,5', 'product description here', 0, '/images/product.jpg', '', 0, 0, 0, '0000-00-00'),
(14, 'Product 14', 2, '2,3,4,5', 'product description here', 0, '/images/product.jpg', '', 0, 0, 0, '0000-00-00'),
(15, 'Product 15', 2, '2,3,4,5', 'product description here', 0, '/images/product.jpg', '', 0, 0, 0, '0000-00-00'),
(16, 'Product 16', 2, '2,3,4,5', 'product description here', 0, '/images/product.jpg', '', 0, 0, 0, '0000-00-00'),
(17, 'Product 17', 2, '2,3,4,5', 'product description here', 0, '/images/product.jpg', '', 0, 0, 0, '0000-00-00'),
(18, 'Product 18', 2, '2,3,4,5', 'product description here', 0, '/images/product.jpg', '', 0, 0, 0, '0000-00-00'),
(19, 'Product 19', 2, '1,2,3,4', 'product description here', 0, '/images/product.jpg', '', 0, 0, 0, '0000-00-00'),
(20, 'Product 20', 2, '1,2,3,4', 'product description here', 0, '/images/product.jpg', '', 0, 0, 0, '0000-00-00'),
(21, 'Product 21', 3, '1,2,3,4', 'product description here', 0, '/images/product.jpg', '', 0, 0, 0, '0000-00-00'),
(22, 'Product 22', 3, '1,2,3,4', 'product description here', 0, '/images/product.jpg', '', 0, 0, 0, '0000-00-00'),
(23, 'Product 23', 3, '1,2,3,4', 'product description here', 0, '/images/product.jpg', '', 0, 0, 0, '0000-00-00'),
(24, 'Product 24', 3, '1,2,3,4', 'product description here', 0, '/images/product.jpg', '', 0, 0, 0, '0000-00-00'),
(25, 'Product 25', 3, '1,2,3,4', 'product description here', 0, '/images/product.jpg', '', 0, 0, 0, '0000-00-00'),
(26, 'Product 26', 3, '1,2,3,4', 'product description here', 0, '/images/product.jpg', '', 0, 0, 0, '0000-00-00'),
(27, 'Product 27', 3, '1,2,3,4', 'product description here', 0, '/images/product.jpg', '', 0, 0, 0, '0000-00-00'),
(28, 'Product 28', 3, '3,4,5,6', 'product description here', 0, '/images/product.jpg', '', 0, 0, 0, '0000-00-00'),
(29, 'Product 29', 3, '3,4,5,6', 'product description here', 0, '/images/product.jpg', '', 0, 0, 0, '0000-00-00'),
(30, 'Product 30', 3, '3,4,5,6', 'product description here', 0, '/images/product.jpg', '', 0, 0, 0, '0000-00-00'),
(31, 'Product 31', 4, '3,4,5,6', 'product description here', 0, '/images/product.jpg', '', 0, 0, 0, '0000-00-00'),
(32, 'Product 32', 4, '3,4,5,6', 'product description here', 0, '/images/product.jpg\r\n', '', 0, 0, 0, '0000-00-00'),
(33, 'Product 33', 4, '3,4,5,6', 'product description here', 0, '/images/product.jpg\r\n', '', 0, 0, 0, '0000-00-00'),
(34, 'Product 34', 4, '3,4,5,6', 'product description here', 0, '/images/product.jpg\r\n', '', 0, 0, 0, '0000-00-00'),
(35, 'Product 35', 4, '3,4,5,6', 'product description here', 0, '/images/product.jpg\r\n', '', 0, 0, 0, '0000-00-00'),
(36, 'Product 36', 4, '3,4,5,6', 'product description here', 0, '/images/product.jpg\r\n', '', 0, 0, 0, '0000-00-00'),
(37, 'Product 37', 4, '1,2,4,5', 'product description here', 0, '/images/product.jpg\r\n', '', 0, 0, 0, '0000-00-00'),
(38, 'Product 38', 4, '1,2,4,5', 'product description here', 0, '/images/product.jpg\r\n', '', 0, 0, 0, '0000-00-00'),
(39, 'Product 39', 4, '1,2,4,5', 'product description here', 0, '/images/product.jpg\r\n', '', 0, 0, 0, '0000-00-00'),
(40, 'Product 40', 4, '1,2,4,5', 'product description here', 0, '/images/product.jpg\r\n', '', 0, 0, 0, '0000-00-00'),
(41, 'Product 41', 5, '1,2,4,5', 'product description here', 0, '/images/product.jpg\r\n', '', 0, 0, 0, '0000-00-00'),
(42, 'Product 42', 5, '1,2,4,5', 'product description here', 0, '/images/product.jpg\r\n', '', 0, 0, 0, '0000-00-00'),
(43, 'Product 43', 5, '1,2,4,5', 'product description here', 0, '/images/product.jpg\r\n', '', 0, 0, 0, '0000-00-00'),
(44, 'Product 44', 5, '1,2,4,5', 'product description here', 0, '/images/product.jpg\r\n', '', 0, 0, 0, '0000-00-00'),
(45, 'Product 45', 5, '1,2,4,5', 'product description here', 0, '/images/product.jpg\r\n', '', 0, 0, 0, '0000-00-00'),
(46, 'Product 46', 5, '5,6,7,8', 'product description here', 0, '/images/product.jpg\r\n', '', 0, 0, 0, '0000-00-00'),
(47, 'Product 47', 5, '5,6,7,8', 'product description here', 0, '/imges/author.png', '', 0, 0, 0, '0000-00-00'),
(48, 'Product 48', 5, '5,6,7,8', 'product description here', 0, '/imges/author.png', '', 0, 0, 0, '0000-00-00'),
(49, 'Product 49', 5, '5,6,7,8', 'product description here', 0, '/imges/author.png', '', 0, 0, 0, '0000-00-00'),
(50, 'Product 50', 5, '5,6,7,8', 'product description here', 0, '/imges/author.png', '', 0, 0, 0, '0000-00-00');

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
(1, 'slide home', '/images/HTBHNew-870.jpg,/images/HTBHNew-870.jpg,/images/HTBHNew-870.jpg'),
(2, './17-05-17/images.jpg,./17-05-17/journey-game-screenshot-7.jpg,', '1'),
(3, 'th-dong', 'asdasdad'),
(4, 'thu-dong', './17-05-17/images.jpg,./17-05-17/journey-game-screenshot-7.jpg,'),
(5, 'xuan-he', './17-05-17/dich.txt,./17-05-17/BTLkinangmem.txt,'),
(6, '', '');

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

--
-- Đang đổ dữ liệu cho bảng `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `user_id`, `user_name`, `user_phone`, `user_address`, `order`, `total_pay`, `comment_created`, `transaction_status`) VALUES
(10, 21, 'huy', '02559034', 'ádasd', '55000', 23131, '2017-05-24', 1),
(9, 21, 'huy', '02559034', 'ádasd', '55000', 23131, '2017-05-24', 1),
(8, 21, 'huy', '02559034', 'ádasd', '55000', 23131, '2017-05-24', 0);

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
(15, 'huy', 'afasfsa', 'asdsad', '01313103', 'ha noi');

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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
