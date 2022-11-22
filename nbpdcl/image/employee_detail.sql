-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2019 at 11:44 AM
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
-- Table structure for table `employee_detail`
--

CREATE TABLE IF NOT EXISTS `employee_detail` (
  `company_name` varchar(70) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `location` varchar(30) NOT NULL,
  `security` text NOT NULL,
  `answer` varchar(70) NOT NULL,
  `address` varchar(70) NOT NULL,
  `reg_id` int(20) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `aadhar_no` int(14) NOT NULL,
  `dept` varchar(25) NOT NULL,
  `desgn` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_detail`
--

INSERT INTO `employee_detail` (`company_name`, `user_name`, `user_id`, `email`, `password`, `gender`, `location`, `security`, `answer`, `address`, `reg_id`, `mobile_no`, `aadhar_no`, `dept`, `desgn`, `photo`) VALUES
('hsjk', 'hjsgd', 'hgdshdg', 'hdg@ghgj.com', 'sd', 'male', 'Patna', 'Your favourite book?', 'csda', 'zdcdsf', 0, 214367989, 2147483647, 'Select', 'hr', 'pic2/IMG-20181014-WA0000.jpg'),
('hsjk', 'ghgf', '', 'dsdg@fgf.com', '4235', 'female', 'Patna', 'Your nick name?', 'gg', 'fgf', 0, 4678689, 46578687, 'Department Detail', 'hr', 'pic2/33157545.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
