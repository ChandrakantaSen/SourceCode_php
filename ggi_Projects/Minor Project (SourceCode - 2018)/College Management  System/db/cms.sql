-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2018 at 06:41 AM
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
-- Database: `cms`
--

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
  `course` varchar(10) NOT NULL,
  `hostel` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `name`, `birthday`, `nation`, `mobile`, `email`, `father`, `gender`, `address`, `qualification`, `board`, `course`, `hostel`) VALUES
(4, 'Sayantani Maity', '2018-11-24', 'HINDU', 9800613776, 'smt9a@gmail.com', 'Abhijit Chatterjee', 'Female', 'HALDIA', 'Graduate', 'MAKAUT', 'BBA', 0),
(5, 'SUMITA MATIA', '2018-11-03', 'HINDU', 7797793817, 'smt9a@gmail.com', 'Abhijit Chatterjee', 'Male', 'HALDIA', 'Graduate', 'MAKAUT', 'BCA', 0),
(6, 'Chandra Sahoo', '2018-11-08', 'HINDU', 9800613776, 'sahoochandra2018@gmail.co', 'Gour sahoo', 'Male', 'HALDIA', 'Graduate', 'MAKAUT', 'BCA', 0),
(7, 'Susmita Roy', '2018-11-08', 'HINDU', 7797793817, 'abc@gmail.com', 'Abhijit Chatterjee', 'Female', 'MSD', 'Graduate', 'MAKAUT', 'BCA', 0),
(9, 'Pallab Mahata', '1998-09-15', 'HINDU', 9734648685, 'pallabmahata16@gmail.com', 'Hemanta Kumar Mahata', 'Male', 'Jhargram', 'Graduate', 'MAKAUT', 'BCA', 0),
(10, 'Moumita Maity', '1998-02-01', 'HINDU', 7797793817, 'smt9a@gmail.com', 'Hemanta Kumar Mahata', 'Male', 'HALDIA', 'Graduate', 'MAKAUT', 'BCA', 0),
(11, 'Puja Chatterjee', '1998-11-05', 'Hindu', 7797793817, 'subhajitchatterjee362@gma', 'Abhijit chatterjee', 'Female', 'MSD', '12', 'WBCHSE', 'BCA', 0),
(14, 'Subhajit Chatterjee', '1998-05-10', 'Hindu', 7797793817, 'subhajitchatterjee362@gma', 'Abhijit chatterjee', 'Male', 'Murshidabad', 'BCA', 'MAKAUT', 'BCA', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`) VALUES
(7, 'Chandra Sahoo', 'sahoochandra2018@gmail.com', ''),
(8, 'Chandra Sahoo', 'sahoochandra2018@gmail.com', ''),
(9, 'Chandra Sahoo', 'sahoochandra2018@gmail.com', 'hi'),
(10, 'SUMITA MATIA', 'Chandrab@gmail.com', 'hi'),
(11, 'Sayani Samanta', 'smt9a@gmail.com', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `adrs` varchar(100) NOT NULL,
  `gender` varchar(23) NOT NULL,
  `state` varchar(200) NOT NULL,
  `dist` varchar(23) NOT NULL,
  `city` varchar(55) NOT NULL,
  `pin` varchar(55) NOT NULL,
  `course` varchar(55) NOT NULL,
  `email` varchar(66) NOT NULL,
  `dob` date NOT NULL,
  `mobile` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `fname`, `mname`, `adrs`, `gender`, `state`, `dist`, `city`, `pin`, `course`, `email`, `dob`, `mobile`) VALUES
(7, 'Chandra Sahoo', 'Gourhari Sahoo', 'Apajita Sahoo', 'HALDIA', 'Male', 'West Bengal', 'Purbo Medinipur', 'Haldia', '721654', 'BCA', 'sahoochandranath@gmail.com', '2018-08-30', 9800613776);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
