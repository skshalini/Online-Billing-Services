-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2019 at 11:07 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `meter_reading`
--

CREATE TABLE IF NOT EXISTS `meter_reading` (
  `consumer_id` int(10) NOT NULL,
  `month_bill` varchar(30) NOT NULL,
  `unit_reading` varchar(30) NOT NULL,
  `entry_date` varchar(30) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`consumer_id`,`month_bill`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meter_reading`
--

INSERT INTO `meter_reading` (`consumer_id`, `month_bill`, `unit_reading`, `entry_date`, `status`) VALUES
(0, 'Jul/19', '5667', '02/Jul/19', 'unpaid'),
(1, 'Jul/19', '45564', '02/Jul/19', 'unpaid'),
(4, 'Jul/19', '45564', '02/Jul/19', 'unpaid');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
