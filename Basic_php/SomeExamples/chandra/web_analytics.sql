-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2016 at 01:06 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web_analytics`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_new_reg`
--

CREATE TABLE IF NOT EXISTS `tbl_new_reg` (
  `reg_id` int(5) NOT NULL AUTO_INCREMENT,
  `reg_fname` varchar(30) NOT NULL,
  `reg_dob` varchar(10) NOT NULL,
  `reg_eml` varchar(20) NOT NULL,
  `reg_mbl` bigint(10) NOT NULL,
  `reg_usrnm` varchar(20) NOT NULL,
  `reg_pwd` varchar(20) NOT NULL,
  `reg_amt` int(10) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_new_reg`
--

INSERT INTO `tbl_new_reg` (`reg_id`, `reg_fname`, `reg_dob`, `reg_eml`, `reg_mbl`, `reg_usrnm`, `reg_pwd`, `reg_amt`) VALUES
(1, 'Chandrakanta Sen', '', 'chandra.hypercube@gm', 2147483647, 'Chandra_se', 'Chandr', 0),
(2, 'Sreedas Sen', '', 'sreedas.sen@gmail.co', 2147483647, 'sreedas.sen', 'sreedas123', 0),
(3, 'Sujit Mukherjee', '', 'sujit@hotmail.com', 8336919598, 'sujit@admin', 'sujit@123', 22900),
(4, 'Amrita Chanda', '', 'amrita@yahoo.com', 9231585291, 'amr_9001', 'amr@2345', 90000),
(5, 'Rana Bakshi', '06/01/2016', 'rana@hexcode.com', 8339919600, 'rana134', 'rana@123', 22900);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
