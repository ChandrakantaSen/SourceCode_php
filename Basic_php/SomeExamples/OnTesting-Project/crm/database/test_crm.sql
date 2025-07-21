-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2018 at 07:32 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test_crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(50) DEFAULT NULL,
  `lastname` varchar(500) DEFAULT NULL,
  `firstname` varchar(500) DEFAULT NULL,
  `email_address` varchar(500) DEFAULT NULL,
  `job_title` varchar(500) DEFAULT NULL,
  `business_phone` varchar(250) DEFAULT NULL,
  `home_phone` varchar(250) DEFAULT NULL,
  `mobile_phone` varchar(250) DEFAULT NULL,
  `fax_number` varchar(250) DEFAULT NULL,
  `address` text,
  `city` varchar(50) DEFAULT NULL,
  `state_province` varchar(500) DEFAULT NULL,
  `zip_postalcode` varchar(250) DEFAULT NULL,
  `country_region` varchar(250) DEFAULT NULL,
  `webpage` varchar(500) DEFAULT NULL,
  `notes` text,
  `attachments` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `company`, `lastname`, `firstname`, `email_address`, `job_title`, `business_phone`, `home_phone`, `mobile_phone`, `fax_number`, `address`, `city`, `state_province`, `zip_postalcode`, `country_region`, `webpage`, `notes`, `attachments`) VALUES
(1, 'Hexcode Technologies', 'Dass', 'Samaresh', 'samaresh@hexcodetechnologies.com', 'SEO executive', '', '1345687905', '9988776710', '', 'Technopolis', 'Kolkata', 'West Bengal', '700091', 'India', '', 'New Customer', NULL),
(2, 'HCT', 'Sen', 'Chandrakanta', 'ck@hexcodetechnologies.com', 'Developer', '9883553127', '12345678', '9883553127', '', 'test', 'kolkata', 'wb', '700014', 'india', 'nil', 'hello', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(500) DEFAULT NULL,
  `lastname` varchar(500) DEFAULT NULL,
  `firstname` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `job_title` varchar(500) DEFAULT NULL,
  `business_phone` varchar(250) DEFAULT NULL,
  `home_phone` varchar(250) DEFAULT NULL,
  `mobile_phone` varchar(250) DEFAULT NULL,
  `fax_number` varchar(25) DEFAULT NULL,
  `address` text,
  `city` varchar(500) DEFAULT NULL,
  `state_province` varchar(500) DEFAULT NULL,
  `zip_postalcode` varchar(250) DEFAULT NULL,
  `country_region` varchar(500) DEFAULT NULL,
  `webpage` varchar(500) DEFAULT NULL,
  `notes` text,
  `attachments` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `company`, `lastname`, `firstname`, `email`, `job_title`, `business_phone`, `home_phone`, `mobile_phone`, `fax_number`, `address`, `city`, `state_province`, `zip_postalcode`, `country_region`, `webpage`, `notes`, `attachments`) VALUES
(1, 'Hexcode Technologies', 'Roy', 'Debanjan', 'debanjan@gmail.com', 'Web Developer Trainee', '', '9674156474', '9051900434', '', 'Sodepur', 'Kolkata', 'West Bengal', '700113', 'India', '', 'Hello', NULL),
(2, 'Hexcode Technologies', 'Sahoo', 'Debasish', 'd.sahoo@hexcodetechnologies.com', 'Web Developer', '123456789', '987654321', '990011001', '123456987', 'Digha, Midnapur', 'Digha', 'West Bengal', '546123', 'India', '', 'Hello World', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `filters`
--

CREATE TABLE IF NOT EXISTS `filters` (
  `ID` int(11) DEFAULT NULL,
  `Object Type` smallint(6) DEFAULT NULL,
  `Object Name` varchar(255) DEFAULT NULL,
  `Filter Name` varchar(50) DEFAULT NULL,
  `Filter String` mediumtext,
  `Sort String` mediumtext,
  `Default` bit(1) DEFAULT NULL,
  `Description` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filters`
--

INSERT INTO `filters` (`ID`, `Object Type`, `Object Name`, `Filter Name`, `Filter String`, `Sort String`, `Default`, `Description`) VALUES
(1, 2, 'Open Opportunities List', 'Rating = Hot', '([Open Opportunities Extended].[Rating]="Hot")', '', b'0', NULL),
(2, 2, 'Open Opportunities List', 'Probability > %70', '([Open Opportunities Extended].[Probability]>=0.7)', '', b'0', NULL),
(3, 2, 'Open Opportunities List', 'Category = 3', '([Open Opportunities Extended].[Category]="(3) Category")', '', b'0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `opportunities`
--

CREATE TABLE IF NOT EXISTS `opportunities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `customer` int(11) DEFAULT NULL,
  `employee` int(11) DEFAULT NULL,
  `category` varchar(500) NOT NULL,
  `rating` varchar(20) DEFAULT NULL,
  `how_found` varchar(200) DEFAULT NULL,
  `open_date` date DEFAULT NULL,
  `est_closed_date` date DEFAULT NULL,
  `probability` varchar(200) DEFAULT NULL,
  `est_revenue` varchar(200) DEFAULT NULL,
  `closed` varchar(100) DEFAULT NULL,
  `description` text NOT NULL,
  `comments` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Customer` (`customer`),
  KEY `Employee` (`employee`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `opportunities`
--

INSERT INTO `opportunities` (`id`, `title`, `customer`, `employee`, `category`, `rating`, `how_found`, `open_date`, `est_closed_date`, `probability`, `est_revenue`, `closed`, `description`, `comments`) VALUES
(1, 'Test', 1, 1, '', 'Hot', 'Customer Referral', '2016-01-21', '2016-01-22', '100%', '1', 'yes', 'tr', ''),
(2, 'abcd', 1, 2, '', 'Hot', 'Internet', '2016-01-28', '2016-01-30', '100%', '100000', 'no', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `last_login`) VALUES
(1, 'admin', '1234', '2018-01-15 07:02:19');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `opportunities`
--
ALTER TABLE `opportunities`
  ADD CONSTRAINT `opportunities_ibfk_1` FOREIGN KEY (`customer`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `opportunities_ibfk_2` FOREIGN KEY (`employee`) REFERENCES `employees` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
