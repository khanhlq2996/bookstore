-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 06, 2017 lúc 10:37 SA
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
  `author_birthday` date DEFAULT NULL,
  `author_date_of_death` date DEFAULT NULL,
  `author_native_land` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `author_description` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(32) COLLATE utf8_bin NOT NULL,
  `category_description` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT '',
  `category_avata` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT '/imges/author.png',
  `category_parent` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  `product_view` int(11) DEFAULT NULL,
  `product_like` int(11) DEFAULT NULL,
  `product_share` int(11) DEFAULT NULL,
  `product_created` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `slide_id` int(11) NOT NULL,
  `slide_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `slide_list_img` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
