-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2014 at 12:09 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bds`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`, `email`, `created`, `updated`) VALUES
('buiquangbk90', 'ffe4867eb05fc3ecea49482c528192fdaac39bde', 'buiquangbk90@gmail.com', '2014-06-28 12:33:45', '2014-06-28 12:33:45');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id of the post',
  `title` varchar(300) NOT NULL COMMENT 'title of the post',
  `area` float DEFAULT NULL COMMENT 'diện tích ',
  `money` float DEFAULT NULL COMMENT 'Số tiền trên 1 mét vuông',
  `money_unit` int(3) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL COMMENT 'Địa chỉ',
  `city` varchar(20) NOT NULL COMMENT 'Thành phố',
  `state` varchar(100) NOT NULL,
  `description` text NOT NULL COMMENT 'Mô tả chi tiết về nhà đất',
  `type` int(1) NOT NULL COMMENT 'Loại hình bất động sản . 0 là nhà đất bán , 1 là nhà đất cho thuê',
  `subtype` int(3) NOT NULL,
  `created` datetime NOT NULL COMMENT 'Thời gian tạo bài viết',
  `updated` datetime NOT NULL COMMENT 'Thời gian cập nhật bài viết',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT 'Tình trạng đất',
  `priority` tinyint(4) NOT NULL,
  `view_number` int(11) NOT NULL DEFAULT '0' COMMENT 'Số lượng người views',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `area`, `money`, `money_unit`, `address`, `city`, `state`, `description`, `type`, `subtype`, `created`, `updated`, `status`, `priority`, `view_number`) VALUES
(1, 'Cần bán nhà tầng 1, P12, phòng 102, khu đô thị Việt Hưng, liên hệ: 0972932864', 77, 3.05, 0, 'khu đô thị Việt Hưng', 'Hà Nội', 'Quận Long Biên', 'Diện tích 77,5m2. Sổ đỏ chính chủ. Nhà 2 mặt tiền. Trước mặt có khoảng sân rộng. Ô tô vào được, thuận tiện cho kinh doanh cửa hàng, văn phòng. Hiện tại đang cho thuê kinh doanh giá 9 triệu đồng/tháng.\r\nLiên hệ : 0972932864.', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1, 0),
(2, 'Cần bán nhà tầng 1, P12, phòng 102, khu đô thị Việt Hưng, liên hệ: 0972932864', 77, 3.05, 0, 'khu đô thị Việt Hưng', 'Hà Nội', 'Quận Long Biên', 'Diện tích 77,5m2. Sổ đỏ chính chủ. Nhà 2 mặt tiền. Trước mặt có khoảng sân rộng. Ô tô vào được, thuận tiện cho kinh doanh cửa hàng, văn phòng. Hiện tại đang cho thuê kinh doanh giá 9 triệu đồng/tháng.\r\nLiên hệ : 0972932864.', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0),
(3, 'Cần bán nhà tầng 1, P12, phòng 102, khu đô thị Việt Hưng, liên hệ: 0972932864', 77, 3.05, 0, 'khu đô thị Việt Hưng', 'Hà Nội', 'Quận Long Biên', 'Diện tích 77,5m2. Sổ đỏ chính chủ. Nhà 2 mặt tiền. Trước mặt có khoảng sân rộng. Ô tô vào được, thuận tiện cho kinh doanh cửa hàng, văn phòng. Hiện tại đang cho thuê kinh doanh giá 9 triệu đồng/tháng.\r\nLiên hệ : 0972932864.', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0),
(4, 'Cần bán nhà tầng 1, P12, phòng 102, khu đô thị Việt Hưng, liên hệ: 0972932864', 77, 3.05, 0, 'khu đô thị Việt Hưng', 'Hà Nội', 'Quận Long Biên', 'Diện tích 77,5m2. Sổ đỏ chính chủ. Nhà 2 mặt tiền. Trước mặt có khoảng sân rộng. Ô tô vào được, thuận tiện cho kinh doanh cửa hàng, văn phòng. Hiện tại đang cho thuê kinh doanh giá 9 triệu đồng/tháng.\r\nLiên hệ : 0972932864.', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0),
(5, 'Cần bán nhà tầng 1, P12, phòng 102, khu đô thị Việt Hưng, liên hệ: 0972932864', 77, 3.05, 0, 'khu đô thị Việt Hưng', 'Bình Định', 'Huyện Hoài Ân', 'Diện tích 77,5m2. Sổ đỏ chính chủ. Nhà 2 mặt tiền. Trước mặt có khoảng sân rộng. Ô tô vào được, thuận tiện cho kinh doanh cửa hàng, văn phòng. Hiện tại đang cho thuê kinh doanh giá 9 triệu đồng/tháng.\r\nLiên hệ : 0972932864.', 0, 3, '2014-07-15 16:02:58', '2014-07-15 16:02:59', 0, 1, 0),
(6, 'CHUNG CƯ ĐIỆN LỰC HEI TOWER _ MỞ BÁN ĐỢT CUỐI_ SUẤT NGOẠI GIAO GIÁ RẺ _ LH 0975.222.135', NULL, 24.1, 1, NULL, 'Hà Nội', 'Thanh Xuân', 'Kính chào quý khách!\r\nHiện nay chúng tôi kết hợp cùng chủ đầu tư Mở bán đợt cuối chung cư điện lực Hei Tower số 1 Ngụy Như Kon Tum, các căn diện tích nhỏ từ tầng 3-4-5, và các căn góc tầng 6-25. Giá cả hợp lý, cạnh tranh. Vui lòng liên hệ:\r\nHotline: 0975 222 135\r\n\r\nSàn giao dịch Bất Động Sản EZ\r\nChung cư Điện Lực Hei Tower đã được cấp phép chuyển đổi diện tích các tầng thương mại 3 – 4 – 5 sang diện tích nhà ở. Hiện các tầng này được chia lại thành 61 căn hộ với diện tích 59 – 102 m2\r\n\r\nTổng quan dự án\r\n- Chủ đầu tư: Liên doanh tổng Công ty Điện lực Hà Nội và Công ty CP Đầu Tư Điện lực Hà Nội.\r\n- Đơn vị thiết kế: Công ty TNHH Một thành viên Crespimontes Vich Châu Á\r\n- Tiến độ thực hiện:\r\nNăm bắt đầu xây dựng: 2012\r\n- Địa chỉ: Số 1, Ngụy Như Kon Tum, Phường Nhân Chính, Quận Thanh Xuân, TP. Hà Nội\r\nTiện ích dự án\r\n+ Tận hưởng các tiện ích dịch vụ của Hapulico Complex\r\n+ Gần các trường mầm non, tiểu học, trung học và đại học lớn: Tiểu học Phan Đình Giót, Tiểu học Thanh Xuân Trung, Trường THCS Thanh Xuân, THPT Nhân Chính, THPT chuyên Hà Nội – Amsterdam, ĐH Khoa học Tự Nhiên, ĐH Khoa học xã hội và nhân văn, ĐH Hà Nội, học viện Bưu chính viễn thông…\r\n+ Gần chợ, trung tâm mua sắm: Chợ Thanh Xuân, chợ Nhân Chính, siêu thị điện máy Pico, siêu thị Big C…\r\n+ Giao thông thuận tiện: nằm ở những trục đường chính, giá cả hợp lý\r\nThiết kế Hei Tower:\r\n+ Hei Tower được thiết kế theo phong cách hiện đại, tinh tế là một điểm nhấn kiến trúc độc đáo tại Hà Nội.\r\n+ Kiến trúc không gian dạng mở, đối lưu không khí hài hòa, nhiều mặt thoáng, giúp cho tòa nhà tiết kiệm năng lượng vận hành.\r\n+ Kiến trúc phong thủy khoa học tạo sự thoải mái, hợp lý và tiềm năng phát triển vững mạnh.\r\n+ Giao thông nội bộ bao gồm 11 thang máy (09 thang trở người và 02 thang trở hàng và trở người); 02 thang bộ & thoát hiểm. Trong đó: 07 thang máy cho khối căn hộ (06 thang trở người, 01 thang trở hàng và trở người); 04 thang máy cho khối văn phòng (03 thang trở người, 01 thang trở hàng và trở người);\r\n+ Hầm đỗ xe được trang bị hệ thống cửa thủy lực ngăn lũ, cho phép tự động đóng cửa tầng hầm để xe, ngăn tràn nước từ bên ngoài vào, đồng thời hệ thống máy bơm công suất lớn sẽ bơm xả nước từ bể và hệ thống thoát nước ra ngoài khi có mưa lớn, đảm bảo an toàn tuyệt đối cho khu vực tầng hầm để xe, kể cả khi nước ngập cao hơn mặt đường đến 1m\r\n-Tòa nhà chung cư Hei Tower cao 25 tầng (Không kể 02 tầng hầm và 02 tầng kỹ thuật)\r\n- Với 02 tầng hầm chứa khoảng 555 xe máy và 216 ôtô;\r\n- Hei Tower còn có bể bơi và trung tâm chăm sóc sức khỏe trên tầng mái tòa nhà.\r\n\r\nTiến độ thanh toán\r\nĐặt cọc: 100 triệu/căn\r\n- Đợt 1: Đóng 70 % khi ký HĐ mua bán\r\n- Đợt 2: Đóng 30 % khi căn hộ đưa vào sử dụng\r\n\r\nGiá bán: 29 – 31tr/m2 (bao gồm VAT)\r\nMọi thông tin chi tiết xin liên hệ\r\nHot line: 0975 222 135 & 01232 530 537.\r\n', 0, 0, '2014-09-15 09:00:00', '2014-09-15 09:00:00', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id câu hỏi',
  `read_status` int(1) NOT NULL DEFAULT '0',
  `name` varchar(30) DEFAULT NULL COMMENT 'Tên người hỏi',
  `email` varchar(100) NOT NULL COMMENT 'email người hỏi',
  `phone_number` varchar(20) DEFAULT NULL COMMENT 'SDT người hỏi',
  `title` varchar(100) NOT NULL,
  `question` text NOT NULL COMMENT 'Nội dung muốn hỏi',
  `created` datetime NOT NULL COMMENT 'Thời gian gửi câu hỏi',
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `read_status`, `name`, `email`, `phone_number`, `title`, `question`, `created`) VALUES
(1, 0, 'Quang Bùi', 'buiquangbk90@yahoo.com', NULL, '', 'Xin chao. Toi muon mua bat dong san.', '2014-07-22 15:44:46'),
(2, 0, 'Quang Bùi', 'buiquangbk90@yahoo.com', '0973564182', '', 'bui quang', '2014-07-22 15:47:32'),
(3, 0, 'Quang Bùi', 'buiquangbk90@yahoo.com', '0973564182', '', 'bui quang', '2014-07-22 15:48:28'),
(6, 0, 'Bùi Quang', 'buiquangbk90@gmail.com', '0968648569', 'Hỏi về bất động sản', 'Cho mình hỏi có căn hộ nào giá trên 1000 tỷ không ?', '2014-07-22 16:10:13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
