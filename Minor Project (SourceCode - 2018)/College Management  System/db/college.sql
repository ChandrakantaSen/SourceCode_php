-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2018 at 06:42 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(1, 'CMS', 'subhajitchatterjee362@gmail.com', 'group-b', '2016-04-04 20:31:45', '2016-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `ip` varbinary(16) NOT NULL,
  `logintime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `birthday` date NOT NULL,
  `nation` varchar(25) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `father` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `qualification` varchar(10) NOT NULL,
  `board` varchar(30) NOT NULL,
  `course` varchar(1) NOT NULL,
  `hostel` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_sn` varchar(255) NOT NULL,
  `course_fn` varchar(255) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_sn`, `course_fn`, `posting_date`) VALUES
(1, 'B10992', 'B.Tech', 'Bachelor  of Technology', '2016-04-11 19:31:42'),
(2, 'BCOM1453', 'B.Com', 'Bachelor Of commerce ', '2016-04-11 19:32:46'),
(3, 'BSC12', 'BSC', 'Bachelor  of Science', '2016-04-11 19:33:23'),
(4, 'BC36356', 'BCA', 'Bachelor Of Computer Application', '2016-04-11 19:34:18'),
(5, 'MCA565', 'MCA', 'Master of Computer Application', '2016-04-11 19:34:40'),
(6, 'MBA75', 'MBA', 'Master of Business Administration', '2016-04-11 19:34:59'),
(7, 'BE765', 'BE', 'Bachelor of Engineering', '2016-04-11 19:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `address`) VALUES
(1, 'Chandranath Sahoo', 'sahoochandranath@gmail.com', 'hi'),
(2, 'Chandranath Sahoo', 'diya@gmail.com', 'hello'),
(3, 'sayani samanta', 'sayanisamanta@gmail.com', 'Hello testing'),
(4, 'Kakali Das', 'diya@gmail.com', 'All checked'),
(5, 'SuSanTa', 'xyz@gmail.com', 'myadmin'),
(6, 'BuBaI', 'cdf@gmail.com', 'hiii'),
(7, 'Manas Khatua', 'ronikhatua2216@gmail.com', 'hi,i am manas'),
(8, 'Subhajit Chatterjee', 'subhajitchatterjee362@gmail.com', 'hi,i am subhajit'),
(9, 'bubai', 'cdf@gmail.com', 'hlo'),
(10, 'Pallab', 'Mahata', 'I love This College.'),
(11, 'Roki', 'rokijana420@gmail.com', 'hi'),
(12, 'Bubai Chatterjee', 'bubaichatterjee16@gmail.com', 'hiiiii');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `roomno` int(11) NOT NULL,
  `seater` int(11) NOT NULL,
  `feespm` int(11) NOT NULL,
  `foodstatus` int(11) NOT NULL,
  `stayfrom` date NOT NULL,
  `duration` int(11) NOT NULL,
  `course` varchar(500) NOT NULL,
  `regno` int(11) NOT NULL,
  `firstName` varchar(500) NOT NULL,
  `middleName` varchar(500) NOT NULL,
  `lastName` varchar(500) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `contactno` bigint(11) NOT NULL,
  `emailid` varchar(500) NOT NULL,
  `egycontactno` bigint(11) NOT NULL,
  `guardianName` varchar(500) NOT NULL,
  `guardianRelation` varchar(500) NOT NULL,
  `guardianContactno` bigint(11) NOT NULL,
  `corresAddress` varchar(500) NOT NULL,
  `corresCIty` varchar(500) NOT NULL,
  `corresState` varchar(500) NOT NULL,
  `corresPincode` int(11) NOT NULL,
  `pmntAddress` varchar(500) NOT NULL,
  `pmntCity` varchar(500) NOT NULL,
  `pmnatetState` varchar(500) NOT NULL,
  `pmntPincode` int(11) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `roomno`, `seater`, `feespm`, `foodstatus`, `stayfrom`, `duration`, `course`, `regno`, `firstName`, `middleName`, `lastName`, `gender`, `contactno`, `emailid`, `egycontactno`, `guardianName`, `guardianRelation`, `guardianContactno`, `corresAddress`, `corresCIty`, `corresState`, `corresPincode`, `pmntAddress`, `pmntCity`, `pmnatetState`, `pmntPincode`, `postingDate`, `updationDate`) VALUES
(7, 100, 5, 8000, 1, '2016-06-17', 4, 'Bachelor of Engineering', 108061211, 'BAPPA', 'KUMAR', 'JANNA', 'male', 8467067344, 'bappa@gmail.com', 8285703354, 'AMITAVA', 'Father', 9999857868, 'HALDIA', 'HALDIA', 'WB', 202001, 'HALDIA', 'HALDIA', 'WB', 202001, '2016-06-23 11:54:35', ''),
(10, 200, 0, 0, 1, '2018-11-04', 10, 'Bachelor  of Technology', 2147483647, 'Sayantani', '', 'Maity', 'female', 0, 'smt9a@gmail.com', 8888888888, 'Mr X', 'Father', 0, 'Sagar', 'Sagar', 'West Bengal', 721165, 'Sagar', 'Sagar', 'West Bengal', 721165, '2018-11-26 07:24:22', ''),
(11, 5, 0, 0, 0, '2018-11-09', 8, 'Bachelor Of Computer Application', 2147483647, 'Pallab', 'Kumar', 'Mahata', 'male', 993258963, 'pallabmahata16@gmail.com', 8888888888, 'Mr X', 'Father', 0, 'TAMLUK', 'TAMLUK', 'West Bengal', 701630, 'TAMLUK', 'TAMLUK', 'West Bengal', 701630, '2018-11-27 05:31:30', '');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `seater` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `fees` int(11) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `seater`, `room_no`, `fees`, `posting_date`) VALUES
(1, 5, 100, 8000, '2016-04-11 22:45:43'),
(2, 2, 201, 6000, '2016-04-12 01:30:47'),
(3, 2, 200, 6000, '2016-04-12 01:30:58'),
(4, 3, 112, 4000, '2016-04-12 01:31:07'),
(5, 5, 132, 2000, '2016-04-12 01:31:15'),
(6, 1, 5, 2800, '2018-11-26 06:48:58');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `State` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `State`) VALUES
(1, 'Andaman and Nicobar Island (UT)'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh (UT)'),
(7, 'Chhattisgarh'),
(8, 'Dadra and Nagar Haveli (UT)'),
(9, 'Daman and Diu (UT)'),
(10, 'Delhi (NCT)'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu and Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep (UT)'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Puducherry (UT)'),
(28, 'Punjab'),
(29, 'Rajastha'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Telangana'),
(33, 'Tripura'),
(34, 'Uttarakhand'),
(35, 'EPE'),
(36, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `userEmail`, `userIp`, `city`, `country`, `loginTime`) VALUES
(7, 21, 'subhajitchatterjee362@gmail.com', 0x3a3a31, '', '', '2018-11-14 14:31:19'),
(8, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-26 06:53:07'),
(9, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-26 06:55:14'),
(10, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-26 07:18:01'),
(11, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-26 13:23:27'),
(12, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-26 13:24:02'),
(13, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-26 13:24:40'),
(14, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-26 13:26:10'),
(15, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-26 13:26:50'),
(16, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-27 05:25:45'),
(17, 25, 'pallabmahata16@gmail.com', 0x3a3a31, '', '', '2018-11-27 05:27:10'),
(18, 25, 'pallabmahata16@gmail.com', 0x3a3a31, '', '', '2018-11-27 05:29:37'),
(19, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-27 05:45:31'),
(20, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-27 05:47:25'),
(21, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-27 09:12:16'),
(22, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-27 09:22:46'),
(23, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-29 14:14:45'),
(24, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-29 14:19:55'),
(25, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-29 14:33:18'),
(26, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-29 14:39:26'),
(27, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-29 16:39:16'),
(28, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-29 16:39:18'),
(29, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-29 16:39:23'),
(30, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-29 16:39:24'),
(31, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-29 16:39:27'),
(32, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-29 16:39:36'),
(33, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-29 16:39:37'),
(34, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-29 16:39:39'),
(35, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-29 16:39:42'),
(36, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-29 16:41:41'),
(37, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-29 16:46:05'),
(38, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-29 16:49:57'),
(39, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-29 16:51:28'),
(40, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-29 17:02:41'),
(41, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-29 17:06:00'),
(42, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-30 09:54:16'),
(43, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-30 09:56:36'),
(44, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-30 10:02:13'),
(45, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-30 10:21:09'),
(46, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-30 10:22:19'),
(47, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-30 10:42:55'),
(48, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-30 11:09:39'),
(49, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-30 11:17:16'),
(50, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-11-30 11:21:38'),
(51, 23, 'smt9a@gmail.com', 0x3132372e302e302e31, '', '', '2018-11-30 17:36:22'),
(52, 23, 'smt9a@gmail.com', 0x3132372e302e302e31, '', '', '2018-11-30 17:50:18'),
(53, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-12-01 04:59:43'),
(54, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-12-01 05:09:51'),
(55, 23, 'smt9a@gmail.com', 0x3a3a31, '', '', '2018-12-03 17:43:03'),
(56, 23, 'smt9a@gmail.com', 0x3132372e302e302e31, '', '', '2018-12-04 11:12:02'),
(57, 23, 'smt9a@gmail.com', 0x3132372e302e302e31, '', '', '2018-12-04 11:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(11) NOT NULL,
  `regNo` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contactNo` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(45) NOT NULL,
  `passUdateDate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `regNo`, `firstName`, `middleName`, `lastName`, `gender`, `contactNo`, `email`, `password`, `regDate`, `updationDate`, `passUdateDate`) VALUES
(10, '108061211', 'code', 'test', 'projects', 'male', 8467067344, 'test@gmail.com', 'Test@123', '2016-06-22 04:21:33', '23-06-2016 11:04:15', '22-06-2016 05:16:49'),
(19, '102355', 'Harry', 'projects', 'Singh', 'male', 6786786786, 'Harry@gmail.com', '6786786786', '2016-06-26 16:33:36', '', ''),
(20, '586952', 'Benjamin', '', 'projects', 'male', 8596185625, 'Benjamin@gmail.com', '8596185625', '2016-06-26 16:40:07', '', ''),
(21, '33701216011', 'Subhajit', '', 'Chatterjee', 'male', 7797793817, 'subhajitchatterjee362@gmail.com', '7797793817', '2018-11-14 14:25:27', '', ''),
(22, '33701216004', 'SUMITA', '', 'MATIA', 'female', 9679440541, 'smt9a@gmail.com', '9679440541', '2018-11-26 06:38:42', '', ''),
(23, '3370116014', 'Sayantani', '', 'Maity', 'female', 0, 'smt9a@gmail.com', '12345', '2018-11-26 06:52:53', '', ''),
(24, '33701216009', 'Kingsuk', '', 'Mahata', 'male', 993258963, 'abc@gmail.com', '993258963', '2018-11-26 06:57:57', '', ''),
(25, '33701216023', 'Pallab', 'Kumar', 'Mahata', 'male', 993258963, 'pallabmahata16@gmail.com', '12345', '2018-11-27 05:26:51', '', ''),
(26, '12', 'sujb', 'hh', 'jghj', 'female', 57687547, 'sum9t1@gmail.com', '8434', '2018-12-04 11:14:00', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
