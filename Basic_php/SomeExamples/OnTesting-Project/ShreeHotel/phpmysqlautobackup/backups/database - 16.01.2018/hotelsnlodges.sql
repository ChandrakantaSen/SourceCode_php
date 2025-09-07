-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2018 at 01:07 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotelsnlodges`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE IF NOT EXISTS `booking_details` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `c_id` int(20) NOT NULL,
  `room_number` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `room_type` varchar(500) NOT NULL,
  `rate` int(50) NOT NULL,
  `total_price` int(11) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `status` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`id`, `c_id`, `room_number`, `room_type`, `rate`, `total_price`, `payment`, `check_in`, `check_out`, `status`) VALUES
(1, 1, '101', 'Standard Double Bedroom(Non AC)', 850, 2550, 'Paid', '2016-02-02', '2016-02-04', 'Cancel'),
(2, 2, '101', 'Standard Double Bedroom(Non AC)', 850, 2550, 'Paid', '2016-02-27', '2016-03-01', 'Cancel'),
(3, 3, '201', 'Standard four bedded bedroom(Non AC)', 1350, 4050, 'Non Paid', '2016-02-27', '2016-03-01', 'Cancel'),
(4, 4, '209', 'Deluxe Double Bedroom(AC)', 1350, 2700, 'Non Paid', '2016-02-27', '2016-02-29', 'Booked'),
(5, 5, '101', 'Standard Double Bedroom(Non AC)', 850, 1700, '0', '2016-02-03', '2016-02-04', 'Booked');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `contact_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `subject`, `comments`, `contact_date`) VALUES
(10, 'Debashis Sahoo', 'd.sahoo@hexcodetechnologies.com', '9804254250', 'Feedback', 'nice hotel in digha..', 1454330084),
(11, 'Debashis Sahoo', 'info@hexcodetechnologies.com', '9804254250', 'Suggestion', 'nice trip', 1454331447);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `phpmysqlautobackup`
--

CREATE TABLE IF NOT EXISTS `phpmysqlautobackup` (
  `id` int(11) NOT NULL,
  `version` varchar(6) DEFAULT NULL,
  `time_last_run` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phpmysqlautobackup`
--

INSERT INTO `phpmysqlautobackup` (`id`, `version`, `time_last_run`) VALUES
(1, '1.6.3', 1454567555);

-- --------------------------------------------------------

--
-- Table structure for table `room_details`
--

CREATE TABLE IF NOT EXISTS `room_details` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL DEFAULT '0',
  `room_number` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `room_details`
--

INSERT INTO `room_details` (`id`, `name`, `description`, `price`, `room_number`) VALUES
(3, 'Standard Double Bedroom(Non AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 850, '101'),
(6, 'Standard Double Bedroom(Non AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 850, '102'),
(7, 'Standard Double Bedroom(Non AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 850, '103'),
(8, 'Standard Double Bedroom(Non AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 850, '104'),
(9, 'Standard Double Bedroom(Non AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 850, '105'),
(10, 'Standard Double Bedroom(Non AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 850, '106'),
(11, 'Standard Double Bedroom(Non AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 850, '107'),
(12, 'Standard Double Bedroom(Non AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 850, '108'),
(13, 'Standard Double Bedroom(Non AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 850, '109'),
(14, 'Standard Double Bedroom(Non AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 850, '110'),
(15, 'Standard Double Bedroom(Non AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 850, '111'),
(16, 'Standard Double Bedroom(Non AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 850, '112'),
(17, 'Standard Double Bedroom(Non AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 850, '113'),
(18, 'Deluxe Double Bedroom(Non AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 950, '202'),
(19, 'Deluxe Double Bedroom(Non AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 950, '203'),
(20, 'Deluxe Double Bedroom(Non AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 950, '204'),
(21, 'Deluxe Double Bedroom(Non AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 950, '205'),
(22, 'Deluxe Double Bedroom(Non AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 950, '206'),
(23, 'Deluxe Double Bedroom(Non AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 950, '208'),
(24, 'Deluxe Double Bedroom(Non AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 950, '210'),
(25, 'Deluxe Double Bedroom(Non AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 950, '302'),
(26, 'Deluxe Double Bedroom(Non AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 950, '303'),
(27, 'Deluxe Double Bedroom(Non AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 950, '304'),
(28, 'Standard four bedded bedroom(Non AC)', 'Max. 4 adults & 2 child/ Max. 5 adults', 1350, '201'),
(29, 'Standard Double Bedroom(AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 1150, '207'),
(30, 'Standard Double Bedroom(AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 1150, '308'),
(31, 'Deluxe Double Bedroom(AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 1350, '209'),
(32, 'Deluxe Double Bedroom(AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 1350, '305'),
(33, 'Deluxe Double Bedroom(AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 1350, '306'),
(34, 'Deluxe Double Bedroom(AC)', 'Max. 2 adults & 2 child/ Max. 3 adults', 1350, '307'),
(37, 'Standard four bedded bedroom(AC)', 'Max. 4 adults & 2 child/ Max. 5 adults', 1750, '301');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_details`
--

CREATE TABLE IF NOT EXISTS `visitor_details` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `visitor_details`
--

INSERT INTO `visitor_details` (`id`, `name`, `address`, `contact`, `email`) VALUES
(1, 'Debashis Sahoo', 'digha', '9804254250', 'd.sahoo@hexcodetechnologies.com'),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, 'Amaresh', 'Shyamnagar', '123456789', 'amaresh@gmail.com'),
(5, 'Debashis Sahoo', 'digha', '9804254250', 'd.sahoo@hexcodetechnologies.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
