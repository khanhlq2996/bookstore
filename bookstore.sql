-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 25, 2017 lúc 03:50 SA
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
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `PASSWORD` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `QUYENHAN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`ID`, `USERNAME`, `PASSWORD`, `QUYENHAN`) VALUES
(35, 'khanh', '606d36240d940dcf0faaefc9c5be2d39', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsach`
--

CREATE TABLE `danhmucsach` (
  `LOAISACHID` varchar(5) NOT NULL,
  `LOAISACH` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `IDGIAODICH` bigint(20) NOT NULL,
  `IDDONHANG` int(255) NOT NULL,
  `SACHID` int(11) NOT NULL,
  `SOLUONG` int(11) NOT NULL DEFAULT '0',
  `AMOUNT` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `STATUS` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaodich`
--

CREATE TABLE `giaodich` (
  `IDGIAODICH` bigint(20) NOT NULL,
  `STATUS` tinyint(4) NOT NULL DEFAULT '0',
  `USERID` int(11) NOT NULL DEFAULT '0',
  `USERNAME` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `USEREMAIL` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `USERPHONE` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `AMOUNT` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `PAYMENT` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `PAYMENT_INFO` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `MESSAGE` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `CREATED` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `SACHID` int(11) NOT NULL,
  `TENSACH` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `LOAISACH` varchar(100) NOT NULL,
  `GIASACH` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `TACGIA` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `NXB` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `MOTA` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `GIAMGIA` int(11) NOT NULL,
  `IMAGELINK` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `CREATED` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`SACHID`, `TENSACH`, `LOAISACH`, `GIASACH`, `TACGIA`, `NXB`, `MOTA`, `GIAMGIA`, `IMAGELINK`, `CREATED`) VALUES
(1, 'eee', 'g', '555555.0000', 'huy', 'hn', 'dsfsffsfsfsf', 5, 'ttt/ll', '2017-04-06'),
(3, 'become genous', 'phieu luu', '10000.0000', 'huy', 'hanoi', 'ssffds', 5, 'image/photo-list', '2017-04-05'),
(4, 'become genous', 'phieu luu', '10000.0000', 'huy', 'hanoi', 'ssffds', 5, 'image/photo-list', '2017-04-05'),
(38, '', '', '0.0000', '', '', '', 5, '', '0000-00-00'),
(39, '', '', '0.0000', '', '', '', 0, '', '0000-00-00'),
(40, '', '', '0.0000', '', '', '', 0, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `IDTV` int(11) NOT NULL,
  `HOTEN` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `PASS` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `DIACHI` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PHONE` varchar(15) NOT NULL,
  `CREATED` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`IDTV`, `HOTEN`, `PASS`, `DIACHI`, `EMAIL`, `PHONE`, `CREATED`) VALUES
(20, 'Le Quoc Khanh', '606d36240d940dcf0faaefc9c5be2d39', '', 'quockhanh.96.bka@gmail.com', '', '2017-04-21');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `danhmucsach`
--
ALTER TABLE `danhmucsach`
  ADD PRIMARY KEY (`LOAISACHID`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`IDDONHANG`),
  ADD KEY `IDGIAODICH` (`IDGIAODICH`),
  ADD KEY `SACHID` (`SACHID`);

--
-- Chỉ mục cho bảng `giaodich`
--
ALTER TABLE `giaodich`
  ADD PRIMARY KEY (`IDGIAODICH`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`SACHID`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`IDTV`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `IDDONHANG` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `giaodich`
--
ALTER TABLE `giaodich`
  MODIFY `IDGIAODICH` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `sach`
--
ALTER TABLE `sach`
  MODIFY `SACHID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `IDTV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`SACHID`) REFERENCES `sach` (`SACHID`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`IDGIAODICH`) REFERENCES `giaodich` (`IDGIAODICH`),
  ADD CONSTRAINT `donhang_ibfk_3` FOREIGN KEY (`SACHID`) REFERENCES `sach` (`SACHID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
