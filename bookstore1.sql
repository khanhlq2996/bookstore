/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : bookstore

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-05-06 21:40:14
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `adminstrator`
-- ----------------------------
DROP TABLE IF EXISTS `adminstrator`;
CREATE TABLE `adminstrator` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(32) COLLATE utf8_bin NOT NULL,
  `admin_password` varchar(32) COLLATE utf8_bin NOT NULL,
  `admin_email` varchar(100) COLLATE utf8_bin NOT NULL,
  `admin_level` int(11) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of adminstrator
-- ----------------------------

-- ----------------------------
-- Table structure for `author`
-- ----------------------------
DROP TABLE IF EXISTS `author`;
CREATE TABLE `author` (
  `author_id` int(11) NOT NULL AUTO_INCREMENT,
  `author_name` varchar(32) COLLATE utf8_bin NOT NULL,
  `author_birthday` date DEFAULT NULL,
  `author_date_of_death` date DEFAULT NULL,
  `author_native_land` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `author_description` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`author_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of author
-- ----------------------------
INSERT INTO `author` VALUES ('1', 'Author 1', '2017-05-10', null, '', '');
INSERT INTO `author` VALUES ('2', 'Author 2', '2017-05-01', null, '', '');
INSERT INTO `author` VALUES ('3', 'Author 3', '2017-05-10', null, '', '');
INSERT INTO `author` VALUES ('4', 'Author 4', '2017-05-23', null, '', '');
INSERT INTO `author` VALUES ('5', 'Author 5', '2017-05-17', null, '', '');

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(32) COLLATE utf8_bin NOT NULL,
  `category_description` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT '',
  `category_avata` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT '/imges/author.png',
  `category_parent` int(11) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', 'Category 1', '', '/imges/author.png', null);
INSERT INTO `category` VALUES ('2', 'Category 2', '', '/imges/author.png', null);
INSERT INTO `category` VALUES ('3', 'Category 3', '', '/imges/author.png', null);
INSERT INTO `category` VALUES ('4', 'Category 4', '', '/imges/author.png', null);
INSERT INTO `category` VALUES ('5', 'Category 5', '', '/imges/author.png', null);
INSERT INTO `category` VALUES ('6', 'Category 6', '', '/imges/author.png', null);
INSERT INTO `category` VALUES ('7', 'Category 7', '', '/imges/author.png', null);
INSERT INTO `category` VALUES ('8', 'Category 8', '', '/imges/author.png', null);
INSERT INTO `category` VALUES ('9', 'Category 9', '', '/imges/author.png', null);
INSERT INTO `category` VALUES ('10', 'Category 10', '', '/imges/author.png', null);
INSERT INTO `category` VALUES ('11', 'Category 11', '', '/imges/author.png', null);
INSERT INTO `category` VALUES ('12', 'Category 12', '', '/imges/author.png', null);

-- ----------------------------
-- Table structure for `comment`
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_messenger` varchar(200) COLLATE utf8_bin NOT NULL,
  `comment_parent` int(11) DEFAULT NULL,
  `comment_created` date NOT NULL,
  `comment_like` int(11) DEFAULT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of comment
-- ----------------------------

-- ----------------------------
-- Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `menu_url` varchar(100) COLLATE utf8_bin NOT NULL,
  `menu_parent` int(11) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of menu
-- ----------------------------

-- ----------------------------
-- Table structure for `options`
-- ----------------------------
DROP TABLE IF EXISTS `options`;
CREATE TABLE `options` (
  `site_url` varchar(11) COLLATE utf8_bin NOT NULL,
  `site_name` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT 'Shop',
  `site_description` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `site_email` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT 'contact@domain.com',
  `site_phone` varchar(15) COLLATE utf8_bin NOT NULL DEFAULT '+84 123.456.789',
  `site_maps_url` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT 'https://maps.google.com'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of options
-- ----------------------------

-- ----------------------------
-- Table structure for `order`
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL DEFAULT '0',
  `order_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of order
-- ----------------------------

-- ----------------------------
-- Table structure for `product`
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(32) COLLATE utf8_bin NOT NULL,
  `author_id` int(11) NOT NULL,
  `categories` text COLLATE utf8_bin NOT NULL,
  `product_description` text COLLATE utf8_bin NOT NULL,
  `product_price` int(11) NOT NULL DEFAULT '0',
  `product_avata` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT '/imges/author.png',
  `tags` text COLLATE utf8_bin DEFAULT NULL,
  `product_view` int(11) DEFAULT 0,
  `product_like` int(11) DEFAULT 0,
  `product_share` int(11) DEFAULT 0,
  `product_created` date NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('1', 'Product 1', '2', '2,3,4,5', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('2', 'Product 2', '2', '2,3,4,5', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('3', 'Product 3', '2', '2,3,4,5', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('4', 'Product 4', '2', '2,3,4,5', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('5', 'Product 5', '2', '2,3,4,5', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('6', 'Product 6', '2', '2,3,4,5', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('7', 'Product 7', '1', '1,2,3,4', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('8', 'Product 8', '1', '1,2,3,4', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('9', 'Product 9', '1', '1,2,3,4', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('10', 'Product 10', '1', '2,3,4,5', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('11', 'Product 11', '2', '2,3,4,5', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('12', 'Product 12', '2', '2,3,4,5', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('13', 'Product 13', '2', '2,3,4,5', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('14', 'Product 14', '2', '2,3,4,5', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('15', 'Product 15', '2', '2,3,4,5', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('16', 'Product 16', '2', '2,3,4,5', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('17', 'Product 17', '2', '2,3,4,5', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('18', 'Product 18', '2', '2,3,4,5', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('19', 'Product 19', '2', '1,2,3,4', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('20', 'Product 20', '2', '1,2,3,4', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('21', 'Product 21', '3', '1,2,3,4', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('22', 'Product 22', '3', '1,2,3,4', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('23', 'Product 23', '3', '1,2,3,4', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('24', 'Product 24', '3', '1,2,3,4', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('25', 'Product 25', '3', '1,2,3,4', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('26', 'Product 26', '3', '1,2,3,4', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('27', 'Product 27', '3', '1,2,3,4', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('28', 'Product 28', '3', '3,4,5,6', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('29', 'Product 29', '3', '3,4,5,6', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('30', 'Product 30', '3', '3,4,5,6', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('31', 'Product 31', '4', '3,4,5,6', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('32', 'Product 32', '4', '3,4,5,6', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('33', 'Product 33', '4', '3,4,5,6', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('34', 'Product 34', '4', '3,4,5,6', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('35', 'Product 35', '4', '3,4,5,6', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('36', 'Product 36', '4', '3,4,5,6', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('37', 'Product 37', '4', '1,2,4,5', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('38', 'Product 38', '4', '1,2,4,5', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('39', 'Product 39', '4', '1,2,4,5', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('40', 'Product 40', '4', '1,2,4,5', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('41', 'Product 41', '5', '1,2,4,5', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('42', 'Product 42', '5', '1,2,4,5', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('43', 'Product 43', '5', '1,2,4,5', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('44', 'Product 44', '5', '1,2,4,5', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('45', 'Product 45', '5', '1,2,4,5', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('46', 'Product 46', '5', '5,6,7,8', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('47', 'Product 47', '5', '5,6,7,8', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('48', 'Product 48', '5', '5,6,7,8', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('49', 'Product 49', '5', '5,6,7,8', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');
INSERT INTO `product` VALUES ('50', 'Product 50', '5', '5,6,7,8', 0x70726F64756374206465736372697074696F6E2068657265, '0', '/imges/author.png', '', 0, 0, 0, '0000-00-00');

-- ----------------------------
-- Table structure for `slide`
-- ----------------------------
DROP TABLE IF EXISTS `slide`;
CREATE TABLE `slide` (
  `slide_id` int(11) NOT NULL AUTO_INCREMENT,
  `slide_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `slide_list_img` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`slide_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of slide
-- ----------------------------

-- ----------------------------
-- Table structure for `transaction`
-- ----------------------------
DROP TABLE IF EXISTS `transaction`;
CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(32) COLLATE utf8_bin NOT NULL,
  `user_phone` varchar(15) COLLATE utf8_bin NOT NULL,
  `user_address` varchar(200) COLLATE utf8_bin NOT NULL,
  `order` text COLLATE utf8_bin NOT NULL,
  `total_pay` int(11) DEFAULT NULL,
  `comment_created` date NOT NULL,
  `transaction_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of transaction
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(32) COLLATE utf8_bin NOT NULL,
  `user_password` varchar(32) COLLATE utf8_bin NOT NULL,
  `user_email` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_phone` varchar(15) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_address` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of user
-- ----------------------------
