-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 04:22 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ggi`
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
(1, 'admin', 'code.lpu1@gmail.com', '12345', '2016-04-04 20:31:45', '2018-12-02'),
(2, 'subha', 'subhankarlaya1999@gmail.com', '1999', '2018-11-27 12:20:32', '2018-11-28');

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
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(50) NOT NULL,
  `name` varchar(60) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` text NOT NULL
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
(4, 'BC36356', 'BCA', 'Bachelor Of Computer Application', '2016-04-11 19:34:18'),
(6, 'BBA75', 'BBA', 'Bachelor of Business Administration', '2016-04-11 19:34:59'),
(7, 'BHM-203', 'BHM', 'Bachelor of Hospitality Management', '2016-04-11 19:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `studentid` varchar(15) NOT NULL,
  `stream` varchar(7) NOT NULL,
  `semester` varchar(12) NOT NULL,
  `month` varchar(12) NOT NULL,
  `totalpay` int(7) NOT NULL,
  `pay` int(7) NOT NULL,
  `due` int(7) NOT NULL,
  `remarks` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `fees_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `name`, `studentid`, `stream`, `semester`, `month`, `totalpay`, `pay`, `due`, `remarks`, `date`, `fees_update`) VALUES
(1, 'Subrata Samanta', 'BCA1234', 'BCA', '1st', 'november', 5000, 4600, 400, 'due', '2018-11-21', '0000-00-00'),
(2, 'Chandranath Sahoo', 'BCA1235', 'BCA', '5th Sem', 'October', 3000, 2500, 500, 'Due must be clear within one week', '2018-11-24', '0000-00-00'),
(3, 'sdfds', '3', 'BCA', '5th', '', 2800, 2800, 0, 'paid', '2018-12-08', '0000-00-00'),
(4, 'laya', '5', 'bca', '5th', '', 2800, 2300, 500, 'due', '2018-12-06', '0000-00-00'),
(5, 'kris', '8', 'bba', '5th', '', 2800, 2300, 500, 'due', '2018-12-05', '2018-12-06'),
(6, 'Suman Mal', '7', 'BCA', '5th', '', 2800, 2300, 500, 'due', '2018-12-06', '0000-00-00'),
(7, 'dd', '10', 'bba', '5th', '', 2800, 2200, 600, 'due', '2018-12-14', '0000-00-00');

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
(6, 100, 5, 8000, 0, '2016-04-22', 5, 'Bachelor  of Technology', 10806121, 'code', '', 'projects', 'male', 8285703354, 'code.lpu1@gmail.com', 0, 'XYZ', 'Mother', 8285703354, 'H n0 18/1 Bihari Puram Phase-1 Melrose Bye Pass', 'Aligarh', 'EPE', 202001, 'H n0 18/1 Bihari Puram Phase-1 Melrose Bye Pass', 'Aligarh', 'EPE', 202001, '2016-04-16 08:24:09', ''),
(7, 100, 5, 8000, 1, '2016-06-17', 4, 'Bachelor of Engineering', 108061211, 'code', 'test', 'projects', 'male', 8467067344, 'test@gmail.com', 8285703354, 'test', 'test', 9999857868, 'H no- 18/1 Bihari puram phase-1 melrose bye pass', 'Aligarh', 'EPE', 202001, 'H no- 18/1 Bihari puram phase-1 melrose bye pass', 'Aligarh', 'EPE', 202001, '2016-06-23 11:54:35', ''),
(9, 132, 5, 2000, 1, '2016-06-28', 6, 'Bachelor of Engineering', 586952, 'Benjamin', '', 'projects', 'male', 8596185625, 'Benjamin@gmail.com', 8285703354, 'demo', 'demo', 8285703354, 'H no- 18/1 Bihari puram phase-1 melrose bye pass', 'Aligarh', 'EPE', 202001, 'H no- 18/1 Bihari puram phase-1 melrose bye pass', 'Aligarh', 'EPE', 202001, '2016-06-26 16:40:07', '');

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
(1, 3, 6, 2800, '2018-12-03 15:38:36'),
(2, 4, 3, 2800, '2018-12-03 15:44:15'),
(3, 5, 4, 2800, '2018-12-04 03:00:51'),
(4, 5, 7, 2800, '2018-12-04 03:02:05');

-- --------------------------------------------------------

--
-- Table structure for table `semester_month`
--

CREATE TABLE `semester_month` (
  `id` int(11) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `month` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester_month`
--

INSERT INTO `semester_month` (`id`, `semester`, `month`) VALUES
(1, 'First Semester', 'January'),
(2, 'Second Semester', 'February'),
(3, 'Third Semester', 'March'),
(4, 'Forth Semester', 'April'),
(5, 'Fifth Semester', 'May'),
(6, 'Six Semester', 'June'),
(7, 'Seven Semester', 'July'),
(8, 'Eight Semester', 'August'),
(9, '', 'September'),
(10, '', 'October'),
(11, '', 'November'),
(12, '', 'December');

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
(1, 10, 'test@gmail.com', '', '', '', '2016-06-22 06:16:42'),
(2, 10, 'test@gmail.com', '', '', '', '2016-06-24 11:20:28'),
(4, 10, 'test@gmail.com', 0x3a3a31, '', '', '2016-06-24 11:22:47'),
(5, 10, 'test@gmail.com', 0x3a3a31, '', '', '2016-06-26 15:37:40'),
(6, 20, 'Benjamin@gmail.com', 0x3a3a31, '', '', '2016-06-26 16:40:57'),
(7, 1, 'subhankarlaya1999@gmail.com', 0x3a3a31, '', '', '2018-12-01 15:14:40'),
(8, 2, 'suvendumaity@gmail.com', 0x3a3a31, '', '', '2018-12-01 16:02:28'),
(9, 1, 'subhankarlaya1999@gmail.com', 0x3a3a31, '', '', '2018-12-01 16:06:13'),
(10, 1, 'subhankarlaya1999@gmail.com', 0x3a3a31, '', '', '2018-12-01 16:07:05'),
(11, 1, 'subhankarlaya1999@gmail.com', 0x3a3a31, '', '', '2018-12-01 19:34:17'),
(12, 1, 'subhankarlaya1999@mail.com', 0x3a3a31, '', '', '2018-12-02 03:03:06'),
(13, 1, 'subhankarlaya1999@mail.com', 0x3a3a31, '', '', '2018-12-02 06:03:00'),
(14, 1, 'subhankarlaya1999@mail.com', 0x3a3a31, '', '', '2018-12-02 06:04:07'),
(15, 1, 'subhankarlaya1999@mail.com', 0x3a3a31, '', '', '2018-12-02 06:17:56'),
(16, 1, 'subhankarlaya1999@mail.com', 0x3a3a31, '', '', '2018-12-02 06:25:54'),
(17, 1, 'subhankarlaya1999@mail.com', 0x3a3a31, '', '', '2018-12-02 06:28:27'),
(18, 1, 'subhankarlaya1999@mail.com', 0x3a3a31, '', '', '2018-12-02 07:03:35'),
(19, 1, 'subhankarlaya1999@mail.com', 0x3a3a31, '', '', '2018-12-02 07:05:01'),
(20, 1, 'subhankarlaya1999@mail.com', 0x3a3a31, '', '', '2018-12-02 07:56:44'),
(21, 1, 'subhankarlaya1999@mail.com', 0x3a3a31, '', '', '2018-12-02 07:59:27'),
(22, 1, 'subhankarlaya1999@mail.com', 0x3a3a31, '', '', '2018-12-02 08:56:52'),
(23, 1, 'subhankarlaya1999@mail.com', 0x3a3a31, '', '', '2018-12-02 10:01:36'),
(24, 1, 'subhankarlaya1999@mail.com', 0x3a3a31, '', '', '2018-12-02 12:22:44'),
(25, 1, 'subhankarlaya1999@mail.com', 0x3a3a31, '', '', '2018-12-02 14:37:55'),
(26, 2, 'malsuman941@gmail.com', 0x3a3a31, '', '', '2018-12-03 12:50:57'),
(27, 3, 'sgfhhf@hb', 0x3a3a31, '', '', '2018-12-03 14:40:26'),
(28, 3, 'sgfhhf@hb', 0x3a3a31, '', '', '2018-12-03 17:58:53'),
(29, 3, 'sgfhhf@hb', 0x3a3a31, '', '', '2018-12-03 18:14:45'),
(30, 3, 'sgfhhf@hb', 0x3a3a31, '', '', '2018-12-03 19:03:29'),
(31, 3, 'sgfhhf@hb', 0x3a3a31, '', '', '2018-12-03 19:16:50'),
(32, 3, 'sgfhhf@hb', 0x3a3a31, '', '', '2018-12-03 19:24:19');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(11) NOT NULL,
  `regno` int(50) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `course` varchar(70) NOT NULL,
  `contactNo` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(45) NOT NULL,
  `passUdateDate` varchar(45) NOT NULL,
  `acontact` bigint(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pin` bigint(250) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `wbse` decimal(50,0) NOT NULL,
  `wbchse` double NOT NULL,
  `graduation` varchar(50) NOT NULL,
  `gname` varchar(60) NOT NULL,
  `grelation` varchar(60) NOT NULL,
  `gcontact` bigint(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `regno`, `firstName`, `middleName`, `lastName`, `gender`, `course`, `contactNo`, `email`, `password`, `regDate`, `updationDate`, `passUdateDate`, `acontact`, `address`, `state`, `pin`, `country`, `city`, `wbse`, `wbchse`, `graduation`, `gname`, `grelation`, `gcontact`) VALUES
(4, 12332465, 'Suman', '', 'Mal', 'male', 'Bachelor Of Computer Application', 9564789202, 'malsuman941@gmail.com', '12345', '2018-12-04 02:52:17', '', '', 7872954230, 'Howrah', 'West Bengal', 72163, 'India', 'Udaynarayanpur', '80', 70, 'Nil', 'Sukumar Mal', 'Father', 8972630806);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `studentid` (`studentid`);

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
-- Indexes for table `semester_month`
--
ALTER TABLE `semester_month`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `semester_month`
--
ALTER TABLE `semester_month`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
