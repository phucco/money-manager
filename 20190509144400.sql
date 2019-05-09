-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 09, 2019 at 07:43 AM
-- Server version: 10.3.12-MariaDB
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `money`
--

-- --------------------------------------------------------

--
-- Table structure for table `tlpv_account`
--

DROP TABLE IF EXISTS `tlpv_account`;
CREATE TABLE IF NOT EXISTS `tlpv_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `count_transaction` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tlpv_account`
--

INSERT INTO `tlpv_account` (`id`, `name`, `count_transaction`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'Cash', 0, 2047000, '2019-05-05 11:32:01', '2019-05-09 14:34:31'),
(2, 'Credit Card', 0, 15736041, '2019-05-05 11:32:01', '2019-05-08 16:42:30'),
(3, 'VPBank', 0, 2710264, '2019-05-05 11:32:01', '2019-05-09 14:27:49'),
(4, 'ABBank', 0, 53460, '2019-05-05 11:32:01', '2019-05-09 14:34:31'),
(5, 'VIB', 0, 44271, '2019-05-05 11:32:01', '2019-05-08 16:47:34'),
(6, 'Sacombank', 0, 0, '2019-05-05 11:32:01', '2019-05-08 16:47:34');

-- --------------------------------------------------------

--
-- Table structure for table `tlpv_category`
--

DROP TABLE IF EXISTS `tlpv_category`;
CREATE TABLE IF NOT EXISTS `tlpv_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `count_transaction` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tlpv_category`
--

INSERT INTO `tlpv_category` (`id`, `name`, `type`, `description`, `count_transaction`, `created_at`, `updated_at`) VALUES
(1, 'Food', 1, 'Ăn với yêu yêu, ăn với gia đình, ăn một mình. Bao gồm cả ăn uống', 0, '2019-05-05 11:40:04', '2019-05-08 16:45:30'),
(2, 'Entertainment', 1, 'Mua vé xem phim, vé đi chơi, giải trí', 0, '2019-05-05 11:40:04', NULL),
(3, 'My Darling', 1, 'Mua đồ, quà tặng cho yêu yêu, chuyển tiền cho yêu yêu', 0, '2019-05-05 11:40:04', '2019-05-08 16:40:59'),
(4, 'Working', 1, 'Ăn uống tại văn phòng, quỹ công việc', 0, '2019-05-05 11:40:04', NULL),
(5, 'Shopping', 1, 'Mua đồ đạc cho gia đình, cho bản thân', 0, '2019-05-05 11:40:04', NULL),
(6, 'Education', 1, 'Dịch vụ học tập', 0, '2019-05-05 11:40:04', '2019-05-08 16:34:26'),
(7, 'Transportation', 1, 'Xăng, sửa xe, phí gửi xe, đi xe buýt, xe khách', 0, '2019-05-05 11:40:04', NULL),
(8, 'Communication', 1, 'Tiền điện thoại, Đi cafe giao lưu bạn bè', 0, '2019-05-05 11:40:04', NULL),
(9, 'Health', 1, 'Dịch vụ y tế, sức khỏe', 0, '2019-05-05 11:40:04', NULL),
(10, 'Investments', 1, 'Đầu tư tài chính', 0, '2019-05-05 11:40:04', NULL),
(11, 'Transfer From', 1, 'Chuyển tiền ra khỏi tài khoản', 0, '2019-05-05 11:40:04', NULL),
(12, 'Bank Fees', 1, 'Phí thường niên, phí rút tiền, phí chuyển khoản', 0, '2019-05-05 11:40:04', '2019-05-08 16:43:28'),
(13, 'Other Expense', 1, 'Kết chuyển', 0, '2019-05-05 11:40:04', NULL),
(14, 'Salary', 2, NULL, 0, '2019-05-05 11:40:07', '2019-05-08 16:47:34'),
(15, 'Given Cash', 2, NULL, 0, '2019-05-05 11:40:07', NULL),
(16, 'Investments Income', 2, NULL, 0, '2019-05-05 11:40:07', NULL),
(17, 'Freelance Job', 2, NULL, 0, '2019-05-05 11:40:07', NULL),
(18, 'Transfer To', 2, 'Chuyển tiền đến tài khoản', 0, '2019-05-05 11:40:07', NULL),
(19, 'Cashback', 2, NULL, 0, '2019-05-05 11:40:07', NULL),
(20, 'Other Income', 2, 'Kết chuyển', 0, '2019-05-05 11:40:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tlpv_login`
--

DROP TABLE IF EXISTS `tlpv_login`;
CREATE TABLE IF NOT EXISTS `tlpv_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `expired_at` datetime DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `tlpv_transaction`
--

DROP TABLE IF EXISTS `tlpv_transaction`;
CREATE TABLE IF NOT EXISTS `tlpv_transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL,
  `content` varchar(100) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `is_transfer` tinyint(4) NOT NULL DEFAULT 0,
  `date` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
