-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 08, 2014 at 06:47 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lib_visitor`
--

-- --------------------------------------------------------

--
-- Table structure for table `st_detail`
--

CREATE TABLE IF NOT EXISTS `st_detail` (
  `visitor_id` varchar(50) NOT NULL,
  `st_name` varchar(50) NOT NULL,
  `st_rollnumber` varchar(20) NOT NULL,
  `st_year` varchar(10) NOT NULL,
  PRIMARY KEY (`visitor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_detail`
--

INSERT INTO `st_detail` (`visitor_id`, `st_name`, `st_rollnumber`,, `reason for visiting`, `department`, `year`) VALUES
('12', 'govind', '12egccs201', 'Picking up new forms', 'HR', '4 year'),
('1255', 'ram', '123bbcs201','Picking up new forms', 'HR', '2 year'),
('22', 'ghanshyam', '12ebbcs202','Picking up new forms', 'HR', '3 year'),
('43543', 'ramesh', '12egctd021','Picking up new forms', 'HR', '3 year'),
('456', 'ramesh', '11egcit045','Picking up new forms', 'HR', '2 year'),
('546', 'vinod', '11egccs025','Picking up new forms', 'HR', '3 year');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_record`
--

CREATE TABLE IF NOT EXISTS `visitor_record` (
  `checkin_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `visitor_id` varchar(250) NOT NULL,
  `time_in` datetime NOT NULL,
  `time_out` datetime NOT NULL,
  PRIMARY KEY (`checkin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `visitor_record`
--

INSERT INTO `visitor_record` (`checkin_id`, `visitor_id`, `time_in`, `time_out`) VALUES
(1, '', '2014-07-13 09:16:00', '2014-07-13 10:00:00'),
(2, '456', '2014-07-14 06:21:00', '2014-07-14 09:04:00'),
(3, '546', '2014-07-14 10:07:10', '2014-07-14 12:10:10'),
(5, '64', '2014-07-15 10:33:40', '2014-07-15 10:57:21'),
(9, 'dfgf', '2014-07-15 14:15:02', '0000-00-00 00:00:00'),
(10, '77777785345', '2014-07-15 14:15:51', '0000-00-00 00:00:00'),
(11, '11', '2014-07-15 14:26:35', '2014-07-15 14:27:12'),
(12, '33', '2014-07-15 14:26:42', '2014-07-15 14:29:08'),
(13, '11', '2014-07-15 14:26:54', '2014-07-15 14:27:12'),
(14, '44', '2014-07-15 14:29:55', '2014-07-15 14:30:14'),
(15, '65', '2014-07-15 14:29:59', '2014-07-15 14:30:29'),
(16, '44', '2014-07-15 14:30:37', '2014-07-15 14:30:50'),
(17, '4354', '2014-07-16 10:54:27', '2014-07-16 10:55:09'),
(18, '4355', '2014-07-16 10:54:45', '2014-07-16 10:56:15'),
(19, '43543', '2014-07-23 09:57:11', '2014-07-24 09:43:45'),
(20, '546', '2014-07-23 06:33:12', '2014-07-24 09:44:38'),
(21, '12', '2014-07-23 08:37:07', '2014-07-24 10:00:00'),
(22, '12', '2014-07-24 08:15:00', '2014-07-24 17:10:00'),
(23, '12', '2014-07-24 09:10:00', '2014-07-24 06:38:00'),
(24, '22', '2014-09-08 08:26:33', '2014-09-08 08:26:44'),
(25, '22', '2014-09-08 08:31:13', '2014-09-08 10:13:08'),
(26, '1255', '2014-09-08 09:20:51', '2014-09-08 10:12:52'),
(27, '1255', '2014-09-08 11:29:18', '0000-00-00 00:00:00');

--
-- Triggers `visitor_record`
--
DROP TRIGGER IF EXISTS `st_name`;
DELIMITER //
CREATE TRIGGER `st_name` BEFORE INSERT ON `visitor_record`
 FOR EACH ROW SET NEW.st_name = NEW.st_name
//
DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
