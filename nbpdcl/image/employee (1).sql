-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 12:35 PM
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
-- Table structure for table `bill_2`
--

CREATE TABLE IF NOT EXISTS `bill_2` (
  `con_id` int(20) NOT NULL,
  `name` varchar(70) NOT NULL,
  `vill` varchar(50) NOT NULL,
  `street_no` int(20) NOT NULL,
  `pin_code` int(6) NOT NULL,
  `bill_no` int(20) NOT NULL AUTO_INCREMENT,
  `bill_date` varchar(10) NOT NULL,
  `bill_month` varchar(15) NOT NULL,
  `bill_due` int(10) NOT NULL DEFAULT '0',
  `ad_pay` varchar(30) NOT NULL,
  `con_date` varchar(10) NOT NULL,
  `con_type` varchar(30) NOT NULL,
  `meter_no` varchar(15) NOT NULL,
  `read_date` varchar(10) NOT NULL,
  `m_read` varchar(30) NOT NULL,
  `fixed_charge` varchar(30) NOT NULL,
  `meter_charge` varchar(20) NOT NULL,
  `current_bill` varchar(40) NOT NULL,
  `total` varchar(40) NOT NULL,
  `status_3` text NOT NULL,
  PRIMARY KEY (`bill_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `bill_2`
--

INSERT INTO `bill_2` (`con_id`, `name`, `vill`, `street_no`, `pin_code`, `bill_no`, `bill_date`, `bill_month`, `bill_due`, `ad_pay`, `con_date`, `con_type`, `meter_no`, `read_date`, `m_read`, `fixed_charge`, `meter_charge`, `current_bill`, `total`, `status_3`) VALUES
(6, 'abcd', '', 0, 0, 21, '16/Jul/19', 'Jul/19', 0, '0', '', 'LT New Connection									', '68', '10/Jul/19', '67889', '56', '20', '475479', '475579', 'paid'),
(6, 'abcd', '', 0, 0, 24, '16/Jul/19', 'Jul/19', 0, '0', '', 'LT New Connection									', '68', '10/Jul/19', '67889', '56', '20', '475479', '475579', 'paid'),
(11, 'priyanka ', 'gopalganj', 4, 811101, 25, '16/Jul/19', 'Jul/19', 0, '0', '', 'LT new connection									', '1234', '15/Jul/19', '4000', '56', '20', '28256', '28356', 'unpaid'),
(11, 'priyanka ', 'gopalganj', 4, 811101, 26, '16/Jul/19', 'Jul/19', 0, '0', '', 'LT new connection									', '1234', '15/Jul/19', '4000', '56', '20', '28256', '28356', 'unpaid'),
(6, 'abcd', '', 0, 0, 27, '16/Jul/19', 'Jul/19', 0, '0', '', 'LT New Connection									', '68', '10/Jul/19', '67889', '56', '20', '475479', '475579', 'paid'),
(6, 'abcd', '', 0, 0, 28, '16/Jul/19', 'Jul/19', 0, '0', '', 'LT New Connection									', '68', '10/Jul/19', '67889', '56', '20', '475479', '475579', 'paid'),
(6, 'abcd', '', 0, 0, 29, '16/Jul/19', 'Jul/19', 0, '0', '', 'LT New Connection									', '68', '10/Jul/19', '67889', '56', '20', '475479', '475579', 'paid'),
(6, 'abcd', '', 0, 0, 30, '16/Jul/19', 'Jul/19', 0, '0', '', 'LT New Connection									', '68', '10/Jul/19', '67889', '56', '20', '475479', '475579', 'paid'),
(6, 'abcd', '', 0, 0, 31, '16/Jul/19', 'Jul/19', 0, '0', '', 'LT New Connection									', '68', '10/Jul/19', '67889', '56', '20', '475479', '475579', 'paid'),
(6, 'abcd', '', 0, 0, 32, '16/Jul/19', 'Jul/19', 0, '0', '', 'LT New Connection									', '68', '10/Jul/19', '67889', '56', '20', '475479', '475579', 'paid'),
(6, 'abcd', '', 0, 0, 33, '18/Jul/19', 'Jul/19', 0, '0', '', 'LT New Connection									', '68', '10/Jul/19', '67889', '56', '20', '475479', '475579', 'paid'),
(6, 'abcd', '', 0, 0, 34, '18/Jul/19', 'Jul/19', 0, '0', '', 'LT New Connection									', '68', '10/Jul/19', '67889', '56', '20', '475479', '475579', 'paid'),
(6, 'abcd', '', 0, 0, 35, '18/Jul/19', 'Jul/19', 0, '0', '', 'LT New Connection									', '68', '10/Jul/19', '67889', '56', '20', '475479', '475579', 'paid'),
(6, 'abcd', '', 0, 0, 36, '18/Jul/19', 'Jul/19', 0, '0', '', 'LT New Connection									', '68', '10/Jul/19', '67889', '56', '20', '475479', '475579', 'paid'),
(6, 'abcd', '', 0, 0, 37, '18/Jul/19', 'Jul/19', 0, '0', '', 'LT New Connection									', '68', '10/Jul/19', '67889', '56', '20', '475479', '475579', 'paid'),
(5, 'supriti', 'patna', 0, 811101, 38, '18/Jul/19', 'Jun/19', 0, '0', '', ' HT New Connection									', '67', '10/Jul/19', '576', '', '20', 'NaN', 'NaN', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `c_id` varchar(19) NOT NULL,
  `comp_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`c_id`, `comp_name`) VALUES
('54', '');

-- --------------------------------------------------------

--
-- Table structure for table `consumer_login`
--

CREATE TABLE IF NOT EXISTS `consumer_login` (
  `user_name` varchar(45) NOT NULL,
  `password` varchar(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumer_login`
--

INSERT INTO `consumer_login` (`user_name`, `password`) VALUES
('oratech', '123');

-- --------------------------------------------------------

--
-- Table structure for table `consumer_reg`
--

CREATE TABLE IF NOT EXISTS `consumer_reg` (
  `user_name` varchar(40) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `s_ques` varchar(60) NOT NULL,
  `s_ans` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumer_reg`
--

INSERT INTO `consumer_reg` (`user_name`, `user_id`, `password`, `s_ques`, `s_ans`, `email`) VALUES
('thjgh', 'aa', 'fgh', 'sffff', 'ffgg', 'hhhjkk@gmail.com'),
('usr1', '101', '123', 'addwe', 'dog', 'supriti.priyanka@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `msg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`name`, `email`, `msg`) VALUES
('', '', 'fgfh'),
('ghfg', 'dkdivya07@gmail.com', 'kjhjhu');

-- --------------------------------------------------------

--
-- Table structure for table `dept_form`
--

CREATE TABLE IF NOT EXISTS `dept_form` (
  `dept_id` int(19) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(50) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `dept_form`
--

INSERT INTO `dept_form` (`dept_id`, `dept_name`) VALUES
(1, 'hr'),
(2, 'hr'),
(3, ''),
(4, 'hr'),
(5, ''),
(6, 'hr'),
(7, 'hr'),
(8, 'hr'),
(9, 'hr'),
(10, ''),
(11, 'br'),
(12, 'south'),
(13, 'south');

-- --------------------------------------------------------

--
-- Table structure for table `desg_form`
--

CREATE TABLE IF NOT EXISTS `desg_form` (
  `desg_id` int(19) NOT NULL AUTO_INCREMENT,
  `desg_name` varchar(20) NOT NULL,
  `dept_name` varchar(70) NOT NULL,
  PRIMARY KEY (`desg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `desg_form`
--

INSERT INTO `desg_form` (`desg_id`, `desg_name`, `dept_name`) VALUES
(1, 'fghhjjfjj', ''),
(2, '', ''),
(3, '', ''),
(4, 'fg', ''),
(5, 'fg', '');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE IF NOT EXISTS `division` (
  `div_id` int(19) NOT NULL AUTO_INCREMENT,
  `div_name` varchar(30) NOT NULL,
  `zone` varchar(30) NOT NULL,
  PRIMARY KEY (`div_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`div_id`, `div_name`, `zone`) VALUES
(1, 'patna', 'south'),
(2, 'patna', 'south'),
(3, 'ara', 'south'),
(4, 'muzzafferpur', 'north');

-- --------------------------------------------------------

--
-- Table structure for table `employee_detail`
--

CREATE TABLE IF NOT EXISTS `employee_detail` (
  `emp_id` int(4) NOT NULL AUTO_INCREMENT,
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
  `photo` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `employee_detail`
--

INSERT INTO `employee_detail` (`emp_id`, `company_name`, `user_name`, `user_id`, `email`, `password`, `gender`, `location`, `security`, `answer`, `address`, `reg_id`, `mobile_no`, `aadhar_no`, `dept`, `desgn`, `photo`, `status`) VALUES
(1, 'fhgjh', 'trhghhgju', 'rdg', 'sfdgf@fgfgf', '465654565', 'male', 'Aara', 'Your favourite pet animal?', 'csda', 'fdgfdh', 0, 56767, 565, 'Department Detail', 'Designation Detail', 'pic2/5-Homepage-GLOBES-295.jpg', 'inactive'),
(2, 'nbpdcl', 'suman', 'sam', 'fdsgfd@gmj.com', '65878', 'female', 'Patna', 'Your favourite pet animal?', 'dog', 'patna', 0, 2147483647, 2147483647, 'Department Detail', 'hr', 'pic2/IMG_8286.JPG', 'inactive'),
(3, 'nbpdcl', 'usr1', '101', 'hdg@ghgj.com', '123', 'female', 'Aara', 'Your favourite pet animal?', 'dog', 'patna', 0, 2147483647, 467788, 'ft', 'Designation Detail', 'pic2/DSC07774.JPG', 'active'),
(4, '', 'sss', '', '', '111', '', 'Select', 'Select', '', '', 0, 0, 0, 'Select', 'Select', 'pic2/', 'inactive'),
(5, 'bspcl', 'usr2', '102', 'abcdef@gmail.com', '12345', 'male', 'Aara', 'Your favourite book?', 'cook', 'muzzaffarpur', 0, 2147483647, 2147483647, 'ft', 'hr', 'pic2/IMG_20181122_211353.jpg', 'active'),
(6, 'bihar power holding company ltd.', 'raj sharma', '1234', 'abcd@gmail.com', '123444', 'male', 'Patna', 'Your favourite pet animal?', 'cook', 'patna', 0, 14235457, 2147483647, 'Select', 'Designation Detail', 'pic2/zz.jpeg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `employee_login`
--

CREATE TABLE IF NOT EXISTS `employee_login` (
  `emp_id` varchar(45) NOT NULL,
  `password` varchar(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_login`
--

INSERT INTO `employee_login` (`emp_id`, `password`) VALUES
('3', '123'),
('3', '123');

-- --------------------------------------------------------

--
-- Table structure for table `fixed_charge`
--

CREATE TABLE IF NOT EXISTS `fixed_charge` (
  `con_type` varchar(20) NOT NULL,
  `load` varchar(30) NOT NULL,
  `fixed_charge_1` varchar(30) NOT NULL,
  UNIQUE KEY `con_type` (`con_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fixed_charge`
--

INSERT INTO `fixed_charge` (`con_type`, `load`, `fixed_charge_1`) VALUES
('HT New Connection', '57', '7676'),
('LT New Connection', '5675', '56');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `l_id` varchar(20) NOT NULL,
  `c_id` varchar(20) NOT NULL,
  `location_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`l_id`, `c_id`, `location_name`) VALUES
('35', 'etttt3', 'location_name');

-- --------------------------------------------------------

--
-- Table structure for table `meter`
--

CREATE TABLE IF NOT EXISTS `meter` (
  `con_id` int(20) NOT NULL,
  `meter_no` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meter`
--

INSERT INTO `meter` (`con_id`, `meter_no`) VALUES
(3, 0),
(2, 78),
(2, 68789),
(5, 67),
(6, 68),
(11, 1234);

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
(1, 'Jul/19', '45564', '02/Jul/19', 'unpaid'),
(2, 'Jun/19', '2345', '09/Jul/19', 'unpaid'),
(3, 'Jul/19', '2345', '09/Jul/19', 'unpaid'),
(4, 'Jul/19', '45564', '02/Jul/19', 'unpaid'),
(5, 'Jul/19', '576', '10/Jul/19', 'unpaid'),
(5, 'Jun/19', '325', '21-5-19', 'unpaid'),
(5, 'may/19', '56867', '21-5-19', 'unpaid'),
(6, 'Jul/19', '67889', '10/Jul/19', 'unpaid'),
(6, 'Jun/19', '6876', '21-5-19', 'unpaid'),
(11, 'Jul/19', '4000', '15/Jul/19', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `new_connection`
--

CREATE TABLE IF NOT EXISTS `new_connection` (
  `con_id` int(19) NOT NULL AUTO_INCREMENT,
  `con_type` varchar(40) NOT NULL,
  `unit_1` double NOT NULL,
  `division_1` varchar(30) NOT NULL,
  `applicant_name` varchar(40) NOT NULL,
  `fh_name` varchar(40) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `occupation` varchar(40) NOT NULL,
  `city_vill_name` varchar(30) NOT NULL,
  `street_no` varchar(10) NOT NULL,
  `plot_flat_no` varchar(10) NOT NULL,
  `pin_code` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob_no` varchar(10) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `apply_date` varchar(10) NOT NULL,
  `address_proof` varchar(50) NOT NULL,
  `add_file` varchar(50) NOT NULL,
  `identity_proof` varchar(50) NOT NULL,
  `id_file` varchar(50) NOT NULL,
  `district` varchar(40) NOT NULL,
  `status_2` varchar(11) NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `new_connection`
--

INSERT INTO `new_connection` (`con_id`, `con_type`, `unit_1`, `division_1`, `applicant_name`, `fh_name`, `dob`, `gender`, `occupation`, `city_vill_name`, `street_no`, `plot_flat_no`, `pin_code`, `email`, `mob_no`, `photo`, `apply_date`, `address_proof`, `add_file`, `identity_proof`, `id_file`, `district`, `status_2`) VALUES
(5, ' HT New Connection', 0, 'patna', 'supriti', 'abc', '2-06-1998', 'female', '', 'patna', '', '', '811101', '', '', 'con_pic/', '', 'address_pic/', 'file_pic/', 'iden_pic/', '', 'patna', 'active'),
(6, 'LT New Connection', 0, 'patna', 'abcd', '', '', '', '', '', '', '', '', '', '', 'con_pic/', '', 'address_pic/', 'file_pic/', 'iden_pic/', '', 'Select', 'active'),
(7, 'LT new connection', 57, 'ara', 'abcd', 'swdfdf', '2019-07-16', '', '', '', '', '', '', '', '', 'con_pic/', '', 'address_pic/', 'file_pic/', 'iden_pic/', '324ret', 'Select', 'active'),
(8, 'LT new connection', 324, 'ara', 'supriti', 'abc', '8-2-1998', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'active'),
(9, 'LT New Connection', 324, 'ara', 'divya', 'swdfdf', '2019-07-16', 'female', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'active'),
(10, 'HT New Connection', 0, 'Select', 'abcd', '', '', '', '', '', '', '', '', '', '', 'con_pic/', '', 'address_pic/', 'file_pic/', 'iden_pic/', '', 'Select', 'active'),
(11, 'LT new connection', 523, 'ara', 'priyanka ', 'raj sharma', '2018-12-21', 'male', 'teacher', 'gopalganj', '4', '402', '811101', 'dsdg@fgf.com', '1234567890', 'con_pic/171264809-56a9f6985f9b58b7d0003992.jpg', '', 'address_pic/520849861 (1).jpg', 'file_pic/5-Homepage-GLOBES-295.jpg', 'iden_pic/16_12_2018-cfl_18753575.jpg', 'aadhar', 'Aara', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `con_id` varchar(20) NOT NULL,
  `bill_no` varchar(20) NOT NULL,
  `total_amount` varchar(40) NOT NULL,
  `p_mode` varchar(30) NOT NULL,
  `pay_date` varchar(20) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`p_id`, `con_id`, `bill_no`, `total_amount`, `p_mode`, `pay_date`) VALUES
(1, '6 ', '35', 'cash', '475579', '18/Jul/19'),
(2, '6 ', '37', 'cash', '475579', '18/Jul/19');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
  `con_type` varchar(40) NOT NULL,
  `unit` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`con_type`, `unit`) VALUES
(' HT New Connection', 1200),
('LT new connection', 67834);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
