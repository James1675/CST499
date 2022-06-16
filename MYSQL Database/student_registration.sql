-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 07:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseid` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseid`, `subject`, `term`) VALUES
(1, 'English 1', 'Spring'),
(3, 'Math 2', 'Winter'),
(4, 'Java', 'Summer'),
(6, 'History', 'Summer'),
(8, 'C#', 'Spring'),
(9, 'Python', 'Spring'),
(10, 'C++', 'Winter');

-- --------------------------------------------------------

--
-- Table structure for table `stdclass`
--

CREATE TABLE `stdclass` (
  `Count` int(15) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `std_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stdclass`
--

INSERT INTO `stdclass` (`Count`, `subject`, `std_id`) VALUES
(16, 'CourseID: 3 / Subject: Math 2 / Term: Winter', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `SSN` varchar(255) NOT NULL,
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `email`, `password`, `firstName`, `LastName`, `address`, `phone`, `SSN`, `user_id`) VALUES
(53, 'jamessmith1675@gmail.com', 'abc', 'James', 'Smith', '2103 8th Ave North', '12085981101', '44-55-6666', 7);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `ID` int(15) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `user_id` bigint(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `stdclass`
--
ALTER TABLE `stdclass`
  ADD PRIMARY KEY (`Count`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stdclass`
--
ALTER TABLE `stdclass`
  MODIFY `Count` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
