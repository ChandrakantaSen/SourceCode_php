-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2014 at 03:28 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `orderonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('talat', '9748750412');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `Sl_No` bigint(200) NOT NULL AUTO_INCREMENT,
  `First Name` varchar(200) NOT NULL,
  `Last Name` varchar(200) NOT NULL,
  `Company` varchar(200) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Contact` bigint(50) NOT NULL,
  `City` varchar(200) NOT NULL,
  `State` varchar(200) NOT NULL,
  `Postal Code` bigint(50) NOT NULL,
  `Product` varchar(150) NOT NULL,
  `Black` varchar(50) NOT NULL,
  `Brown` varchar(50) NOT NULL,
  `White` varchar(50) NOT NULL,
  `Beige` varchar(50) NOT NULL,
  `Silver` varchar(50) NOT NULL,
  `Golden` varchar(50) NOT NULL,
  `Bronze` varchar(50) NOT NULL,
  `Another Colour` varchar(100) NOT NULL,
  PRIMARY KEY (`Sl_No`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`Sl_No`, `First Name`, `Last Name`, `Company`, `Address`, `Email`, `Contact`, `City`, `State`, `Postal Code`, `Product`, `Black`, `Brown`, `White`, `Beige`, `Silver`, `Golden`, `Bronze`, `Another Colour`) VALUES
(1, 'Kashif', 'Ansaar', 'Fashion Global', 'Chandni Chowk', 'kashif@yahoo.co.in', 9635214527, 'Delhi', 'Delhi', 110003, 'Foiled suede', '', '', '', '', '', '', '', 'Magenta'),
(2, 'Salman', 'Adam', 'Taj Tannery', 'plot no. 24 zone 4 klc Bantala 24 PGNS (S) ', 'salman@yahoo.com', 9865478931, 'Kolkata', 'West Bengal', 700023, 'Silky', '', '', '', '', '', '', '', 'Gray\r\n'),
(3, 'Talat ', 'Quadri', 'Billfold Leathers', '5/3 Green Park', 't_quadri@yahoo.co.in', 9748750412, 'Kolkata', 'West Bengal', 700019, 'Foiled suede', '', '', '', '', '', '', '', 'Navy blue'),
(4, 'Osama', 'Quadri', 'Milan Tannery', '3, Green Park', 'osama123@yahoo.com', 9903562412, 'Kolkata', 'West Bengal', 700019, 'Silky', '', '', '', '', '', '', '', 'Tanned'),
(5, 'sarwish', 'quadri', 'billfold', 'Middleton street', 't_quadri@yahoo.co.in', 9903562412, 'kolkata', 'West Bengal', 700019, 'Glitter metallic suede', '', '', '', '', '', '', '', ''),
(6, 'sarwish', 'quadri', 'billfold', 'Middleton street', 't_quadri@yahoo.co.in', 9903562412, 'kolkata', 'West Bengal', 700019, 'Glitter metallic suede', '', '', '', '', '', '', '', 'Cognac'),
(7, 'sarwish', 'quadri', 'billfold', 'Middleton street', 't_quadri@yahoo.co.in', 9903562412, 'kolkata', 'West Bengal', 700019, 'Glitter metallic suede', '', '', '', '', '', '', '', 'Cognac'),
(8, 'sarwish', 'quadri', 'billfold', 'Middleton street', 't_quadri@yahoo.co.in', 9903562412, 'kolkata', 'West Bengal', 700019, 'Glitter metallic suede', '', '', '', '', '', '', '', 'Cognac'),
(9, 'sarwish', 'quadri', 'billfold', 'Middleton street', 't_quadri@yahoo.co.in', 9903562412, 'kolkata', 'West Bengal', 700019, 'Glitter metallic suede', '', '', '', '', '', '', '', 'Cognac'),
(10, 'sarwish', 'quadri', 'billfold', 'Middleton street', 't_quadri@yahoo.co.in', 9903562412, 'kolkata', 'West Bengal', 700019, 'Glitter metallic suede', '', '', '', '', '', '', '', 'Cognac'),
(11, 'sarwish', 'quadri', 'billfold', 'Middleton street', 't_quadri@yahoo.co.in', 9903562412, 'kolkata', 'West Bengal', 700019, 'Glitter metallic suede', '', '', '', '', '', '', '', 'Cognac'),
(12, 'mahwish', 'quadri', 'billfold', 'Riffle Range Rd', 't_quadri@yahoo.co.in', 9903562412, 'kolkata', 'West Bengal', 700019, 'Suede for shoe upper', '', '', '', '', '', '', '', 'Tanned'),
(13, 'mahwish', 'quadri', 'billfold', 'Riffle Range Rd', 't_quadri@yahoo.co.in', 9903562412, 'kolkata', 'West Bengal', 700019, 'Suede for shoe upper', '', '', '', '', '', '', '', 'Tanned'),
(14, 'mahwish', 'quadri', 'billfold', 'Riffle Range Rd', 't_quadri@yahoo.co.in', 9903562412, 'kolkata', 'West Bengal', 700019, 'Suede for shoe upper', '', '', '', '', '', '', '', 'Tanned'),
(15, 'mahwish', 'quadri', 'billfold', 'Riffle Range Rd', 't_quadri@yahoo.co.in', 9903562412, 'kolkata', 'West Bengal', 700019, 'Suede for shoe upper', 'black', 'brown', '', '', '', '', 'bronze', 'Tanned'),
(16, 'mahwish', 'quadri', 'billfold', 'Riffle Range Rd', 't_quadri@yahoo.co.in', 9903562412, 'kolkata', 'West Bengal', 700019, 'Suede for shoe upper', 'black', 'brown', '', '', '', '', 'bronze', 'Tanned'),
(17, 'mahwish', 'quadri', 'billfold', 'Riffle Range Rd', 't_quadri@yahoo.co.in', 9903562412, 'kolkata', 'West Bengal', 700019, 'Suede for shoe upper', 'black', 'brown', '', '', '', '', 'bronze', 'Tanned');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
