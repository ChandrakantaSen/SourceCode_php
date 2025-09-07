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
-- Database: `collageregistration`
--

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
(7, 'Chandra Sahoo', 'Gourhari Sahoo', 'Apajita Sahoo', 'HALDIA', 'Male', 'West Bengal', 'Purbo Medinipur', 'Haldia', '721654', 'BCA', 'sahoochandranath@gmail.com', '2018-08-30', 9800613776),
(8, 'Bubai', 'Abhijit chatterjee', 'Anjali Chatterjee', 'Kandi', 'Male', 'Chhattisgarh', 'Bankura', 'Haldia', '742137', 'BCA', 'subhajitchatterjee362@gmail.com', '1998-10-20', 7797793817),
(9, 'Subhankar laya', 'mr x', 'mr y', 'sagar', 'Male', 'Assam', 'Malda', 'Newtown', '721635', 'BCA', 'abc@gmail.com', '1010-10-10', 12345788),
(10, 'Rajat Debnath', 'Tapan Debnath', 'Sandhya Debnath', 'c hdfiovhlhvo', 'Male', 'Arunachal pradesh', 'Nadia', 'Haldia', '721635', 'BHM', 'deb2017@gmail.com', '2019-12-05', 123456019);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
