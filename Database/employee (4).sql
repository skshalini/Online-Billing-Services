-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2019 at 07:15 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `bill_2`
--

INSERT INTO `bill_2` (`con_id`, `name`, `vill`, `street_no`, `pin_code`, `bill_no`, `bill_date`, `bill_month`, `bill_due`, `ad_pay`, `con_date`, `con_type`, `meter_no`, `read_date`, `m_read`, `fixed_charge`, `meter_charge`, `current_bill`, `total`, `status_3`) VALUES
(13, 'Ratan kumar', 'gopalganj', 67, 244657, 46, '06/Aug/19', 'Aug/19', 0, '0', '02/Aug/19', 'LT new connection', '130', '06/Aug/19', '80', '60', '20', '820', '920', 'paid'),
(14, 'Rakesh sinha', 'gopalganj', 5, 908878, 47, '06/Aug/19', 'Aug/19', 0, '0', '06/Aug/19', 'LT new connection', '131', '06/Aug/19', '90', '60', '20', '890', '990', 'unpaid'),
(15, 'Prakash Raj', 'darbhanga', 9, 568898, 48, '06/Aug/19', 'Aug/19', 0, '0', '06/Aug/19', 'LT new connection', '132', '06/Aug/19', '20', '60', '20', '400', '500', 'unpaid'),
(16, 'Ajay Kumar', 'mirjapur', 7, 567790, 49, '06/Aug/19', 'Aug/19', 0, '0', '06/Aug/19', 'LT new connection', '133', '06/Aug/19', '120', '60', '20', '1100', '1200', 'unpaid'),
(17, 'Jyoti Kumari', 'meernagar', 54, 675567, 50, '06/Aug/19', 'Aug/19', 0, '0', '06/Aug/19', 'HT New Connection', '134', '06/Aug/19', '50', '60', '20', '610', '710', 'unpaid'),
(0, '', '', 0, 0, 51, '11/Aug/19', '', 0, '0', '', '', '', '', '', '798', '20', '', '', 'unpaid'),
(16, 'Ajay Kumar', 'mirjapur', 7, 567790, 56, '11/Aug/19', 'Aug/19', 0, '0', '06/Aug/19', 'LT new connection', '133', '06/Aug/19', '120', '798', '20', '1838', '1938', 'unpaid'),
(14, 'Rakesh sinha', 'gopalganj', 5, 908878, 57, '13/Aug/19', 'Aug/19', 0, '0', '06/Aug/19', 'LT new connection', '131', '06/Aug/19', '90', '798', '20', '1628', '1728', 'unpaid'),
(14, 'Rakesh sinha', 'gopalganj', 5, 908878, 58, '29/Aug/19', 'Aug/19', 0, '0', '06/Aug/19', 'LT new connection', '131', '06/Aug/19', '90', '60', '20', '890', '990', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `c_id` int(20) NOT NULL AUTO_INCREMENT,
  `comp_name` varchar(50) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`c_id`, `comp_name`) VALUES
(8, 'Bihar Power Holding Company Ltd.(BSPHCL)');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE IF NOT EXISTS `complaint` (
  `comp_id` int(20) NOT NULL AUTO_INCREMENT,
  `comp_date` varchar(10) NOT NULL,
  `category` varchar(150) NOT NULL,
  `con_id` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `status_4` varchar(15) NOT NULL,
  PRIMARY KEY (`comp_id`),
  UNIQUE KEY `comp_id` (`comp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`comp_id`, `comp_date`, `category`, `con_id`, `description`, `status_4`) VALUES
(7, '06/Aug/19', 'Irregular Power suppy', '17', 'There is iirregular pawer supply in my area :\r\nboring road,patna,street no-23', 'solved'),
(8, '08/Aug/19', 'Transformer Failure', '17', 'tffgdw', 'pending'),
(9, '13/Aug/19', 'Conversion of Connection type', '16', 'wrong connection type', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `consumer_reg`
--

CREATE TABLE IF NOT EXISTS `consumer_reg` (
  `reg_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(40) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `s_ques` varchar(60) NOT NULL,
  `s_ans` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mob_no` varchar(12) NOT NULL,
  PRIMARY KEY (`reg_id`),
  UNIQUE KEY `user_id` (`user_id`),
  UNIQUE KEY `user_id_2` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `consumer_reg`
--

INSERT INTO `consumer_reg` (`reg_id`, `user_name`, `user_id`, `password`, `s_ques`, `s_ans`, `email`, `mob_no`) VALUES
(14, 'Ratan kumar', '13', 'Ratan2222', 'Your favourite book?', 'paradise lost', 'ratan22@gmail.com', '9807123478'),
(15, 'Rakesh sinha', '14', 'Rakesh2222', 'Your favourite pet animal?', 'dog', 'rakesh22@gmail.com', '8900278934'),
(16, 'Prakash Raj', '15', 'Prakash2222', 'Your favourite book?', 'Godan', 'prakash22@gmail.com', '8766567890'),
(17, 'Ajay kumar', '16', 'Ajay2222', 'Your favourite pet animal?', 'mouse', 'ajay22@gmail.com', '8954672234'),
(18, 'Jyoti kumari', '17', 'Jyoti2222', 'Your nick name?', 'joy', 'jyoti22@gmail.com', '9900223478');

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
  `dept_name` varchar(70) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `dept_form`
--

INSERT INTO `dept_form` (`dept_id`, `dept_name`) VALUES
(16, 'North Bihar Power Distribution Company ltd.(NBPDCL)');

-- --------------------------------------------------------

--
-- Table structure for table `desg_form`
--

CREATE TABLE IF NOT EXISTS `desg_form` (
  `desg_id` int(19) NOT NULL AUTO_INCREMENT,
  `desg_name` varchar(20) NOT NULL,
  `dept_name` varchar(70) NOT NULL,
  PRIMARY KEY (`desg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `desg_form`
--

INSERT INTO `desg_form` (`desg_id`, `desg_name`, `dept_name`) VALUES
(14, 'Secretary', 'North Bihar Power Distribution Company ltd.(NBPDCL)'),
(15, 'MD', 'North Bihar Power Distribution Company ltd.(NBPDCL)'),
(16, 'Director', 'North Bihar Power Distribution Company ltd.(NBPDCL)');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE IF NOT EXISTS `division` (
  `div_id` int(19) NOT NULL AUTO_INCREMENT,
  `div_name` varchar(30) NOT NULL,
  `zone` varchar(30) NOT NULL,
  PRIMARY KEY (`div_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`div_id`, `div_name`, `zone`) VALUES
(5, 'Dharbhanga', 'North'),
(6, 'Kosi', 'North'),
(7, 'Purnia', 'North'),
(8, 'Saran', 'North'),
(9, 'Tirhut', 'North');

-- --------------------------------------------------------

--
-- Table structure for table `employee_detail`
--

CREATE TABLE IF NOT EXISTS `employee_detail` (
  `emp_id` int(4) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(70) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `location` varchar(30) NOT NULL,
  `security` text NOT NULL,
  `answer` varchar(70) NOT NULL,
  `address` varchar(70) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `aadhar_no` int(14) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `desgn` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `employee_detail`
--

INSERT INTO `employee_detail` (`emp_id`, `company_name`, `user_name`, `email`, `password`, `gender`, `location`, `security`, `answer`, `address`, `mobile_no`, `aadhar_no`, `dept`, `desgn`, `photo`, `status`) VALUES
(13, 'Bihar Power Holding Company Ltd.(BSPHCL)', 'Mr. Pankaj Kumar', 'pankaj22@gmail.com', 'Pankaj2222', 'male', 'Bailey road,Patna', 'Your favourite pet animal?', 'Dog', 'Boring road,patna', 2147483647, 2147483647, 'North Bihar Power Distribution Company ltd.(NBPDCL)\r\n', 'Secretary', 'pic2/man1.jpg', 'active'),
(14, 'Bihar Power Holding Company Ltd.(BSPHCL)', 'Mr. Sandeep Sharma', 'sandeep22@gmail.com', 'Sandeep2222', 'male', 'Bailey road,Patna', 'Your nick name?', 'sonu', 'kankarbagh,patna', 2147483647, 2147483647, 'North Bihar Power Distribution Company ltd.(NBPDCL)', 'MD', 'pic2/client2.png', 'active'),
(15, 'Bihar Power Holding Company Ltd.(BSPHCL)', 'Mr. Rishabh Mishra', 'rishabh22@gmail.com', 'Rishabh2222', 'male', 'Bailey road,Patna', 'Your nick name?', 'rishu', 'Bankipur,Patna', 2147483647, 2147483647, 'North Bihar Power Distribution Company ltd.(NBPDCL)', 'MD', 'pic2/employee-satisfaction.jpg', 'active'),
(16, 'Bihar Power Holding Company Ltd.(BSPHCL)', 'Mr. Anil Kumar', 'anil22@gmail.com', 'Anil2222', 'male', 'Bailey road,Patna', 'Your favourite pet animal?', 'puppy', 'Danapur,Patna', 890345782, 2147483647, 'North Bihar Power Distribution Company ltd.(NBPDCL)', 'Director', 'pic2/client3.png', 'active');

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
('HT New Connection', '200', '60'),
('LT New Connection', '100', '50');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `l_id` int(20) NOT NULL AUTO_INCREMENT,
  `c_id` varchar(20) NOT NULL,
  `location_name` varchar(50) NOT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`l_id`, `c_id`, `location_name`) VALUES
(4, '8', 'Bailey road,Patna'),
(5, '10', 'boring road');

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
(13, 130),
(14, 131),
(15, 132),
(16, 133),
(17, 134),
(14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `meter_reading`
--

CREATE TABLE IF NOT EXISTS `meter_reading` (
  `consumer_id` int(10) NOT NULL,
  `month_bill` varchar(30) NOT NULL,
  `unit_reading` varchar(30) NOT NULL,
  `reading_date` varchar(30) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`consumer_id`,`month_bill`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meter_reading`
--

INSERT INTO `meter_reading` (`consumer_id`, `month_bill`, `unit_reading`, `reading_date`, `status`) VALUES
(13, 'Aug/19', '80', '06/Aug/19', 'unpaid'),
(14, 'Aug/19', '90', '06/Aug/19', 'unpaid'),
(15, 'Aug/19', '20', '06/Aug/19', 'unpaid'),
(16, 'Aug/19', '120', '06/Aug/19', 'unpaid'),
(17, 'Aug/19', '50', '06/Aug/19', 'unpaid');

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
  `photo` varchar(300) NOT NULL,
  `connection_date` varchar(10) NOT NULL,
  `address_proof` varchar(50) NOT NULL,
  `add_file` varchar(50) NOT NULL,
  `identity_proof` varchar(50) NOT NULL,
  `district` varchar(40) NOT NULL,
  `status_2` varchar(11) NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `new_connection`
--

INSERT INTO `new_connection` (`con_id`, `con_type`, `unit_1`, `division_1`, `applicant_name`, `fh_name`, `dob`, `gender`, `occupation`, `city_vill_name`, `street_no`, `plot_flat_no`, `pin_code`, `email`, `mob_no`, `photo`, `connection_date`, `address_proof`, `add_file`, `identity_proof`, `district`, `status_2`) VALUES
(13, 'LT new connection', 200, 'Purnia', 'Ratan kumar', 'safdg', '2019-08-16', 'female', 'teacher', 'gopalganj', '67', '123', '244657', 'ratan22@gmail.com', '4578987857', 'con_pic/109537872-portrait-of-confident-male-emplo', '02/Aug/19', 'gagshg', 'address_pic/cabinet-approves-investments-in-indias', 'mole on the neck', 'Motihari', 'inactive'),
(14, 'LT new connection', 100, 'Purnia', 'Rakesh sinha', 'Mr. vikas Sinha', '19991-09-2', 'male', 'teacher', 'gopalganj', '5A', '532', '908878', 'rakesh22@gmail.com', '900087654', 'con_pic/client2.png', '06/Aug/19', 'city-Gopalganj', 'address_pic/cabinet-approves-investments-in-indias', 'mole on the chick', 'Gopalgunj', 'active'),
(15, 'LT new connection', 100, 'Dharbhanga', 'Prakash Raj', 'Mr. Ravi Yadav', '1990-08-17', 'male', 'doctor', 'darbhanga', '9', '465', '568898', 'prakash22@gmailcom', '7923791288', 'con_pic/serious-business-guy-with-folder_23-214758', '06/Aug/19', 'city-Darbhanga', 'address_pic/cabinet-approves-investments-in-indias', 'mole on the chick', 'Darbhanaga(U)/Laheriasarai', 'inactive'),
(16, 'LT new connection', 100, 'Tirhut', 'Ajay Kumar', 'Vijay Kumar', '1984-04-04', 'male', 'government employee', 'mirjapur', '7B', '56', '567790', 'ajay22@gmail.com', '9000917865', 'con_pic/download.jpg', '06/Aug/19', 'mirjapur,tirhut', 'address_pic/DsIOLBSXQAAXkFi.jpg', 'mole on head', 'Katihar', 'inactive'),
(17, 'HT New Connection', 200, 'Saran', 'Jyoti Kumari', 'Rajesh Kumar', '1992-11-09', 'female', 'professor', 'meernagar', '54', '89', '675567', 'jyoti22@gmail.com', '1267908799', 'con_pic/team-member.jpg', '06/Aug/19', 'meernagar,saran', 'address_pic/3.jpg', 'mole on the chick', 'Begusarai', 'inactive');

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
  `card_no` varchar(16) NOT NULL,
  `cvv_code` varchar(3) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`p_id`, `con_id`, `bill_no`, `total_amount`, `p_mode`, `pay_date`, `card_no`, `cvv_code`) VALUES
(19, '16 ', '56', '1938', 'Online', '13/Aug/19', '6789453467897654', '778'),
(20, '16 ', '49', '1200', 'Online', '14/Aug/19', '2345634545346789', '123'),
(21, '13 ', '', '', 'Online', '25/Aug/19', '', ''),
(22, '13 ', '46', '920', 'Online', '25/Aug/19', '', ''),
(23, '13 ', '', '', 'Online', '25/Aug/19', '1789787867567890', '123'),
(24, '13 ', '', '', 'Online', '25/Aug/19', '7890657845345678', '565'),
(25, '13 ', '', '', 'Online', '25/Aug/19', '7890657845345678', '455');

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
(' HT New Connection', 200),
('LT new connection', 100),
('gghju', 89);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
