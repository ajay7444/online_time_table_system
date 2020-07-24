-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2018 at 06:40 AM
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
-- Database: `t_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(10) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_id` varchar(100) NOT NULL,
  `dept_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `c_name`, `c_id`, `dept_id`) VALUES
(1, 'Btech Computer Science', 'BCS', 'CSE'),
(2, 'Master Of Computer Application', 'MCA', 'ITCA'),
(3, 'BTech Civil Engineering', 'BCE', 'CE');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(10) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `dept_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dept`, `dept_id`) VALUES
(1, 'Computer Science & Engineering', 'CSE'),
(2, 'Civil Engineering', 'CE'),
(3, 'Information Technology & Computer Application', 'ITCA');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `s_n` int(20) NOT NULL,
  `sub_dept` varchar(10) NOT NULL,
  `sub_class` varchar(20) NOT NULL,
  `sub_sem` int(10) NOT NULL,
  `sub_name` varchar(200) NOT NULL,
  `sub_code` varchar(20) NOT NULL,
  `sub_id` varchar(10) NOT NULL,
  `sub_L` int(10) NOT NULL,
  `sub_T` int(10) NOT NULL,
  `sub_P` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`s_n`, `sub_dept`, `sub_class`, `sub_sem`, `sub_name`, `sub_code`, `sub_id`, `sub_L`, `sub_T`, `sub_P`) VALUES
(21, 'ITCA', 'MCA', 3, 'Introduction To  Web Technology', 'MCA-124', 'WEB', 3, 1, 2),
(22, 'ITCA', 'MCA', 3, 'Computer Graphics', 'MCA-121', 'CG', 3, 1, 2),
(23, 'CSE', 'BCS', 3, 'Programming with C', 'BCS-120', 'C', 3, 1, 2),
(24, 'ITCA', 'MCA', 3, 'Computer Networks', 'MCA-123', 'CN', 3, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(10) NOT NULL,
  `t_name` varchar(100) NOT NULL,
  `t_dept` varchar(20) NOT NULL,
  `t_id` varchar(10) NOT NULL,
  `t_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `t_name`, `t_dept`, `t_id`, `t_type`) VALUES
(1, 'A. K. Mishra', 'AS', 'AKM', 'Regular'),
(2, 'D. S. Singh', 'ITCA', 'DSS', 'Regular'),
(3, 'Shiva Prakash', 'ITCA', 'SP', 'Regular'),
(4, 'Rohit Kumar Tiwari', 'CSE', 'RKT', 'Research Scholar'),
(5, 'Menu', 'CSE', 'MEW', 'Regular'),
(6, 'Jay Prakash', 'CSE', 'JP', 'Regular'),
(7, 'm hassan', 'ITCA', 'mh', 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `dept` varchar(100) NOT NULL,
  `course` varchar(30) NOT NULL,
  `sem` int(10) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `t_id` varchar(30) NOT NULL,
  `day` varchar(30) NOT NULL,
  `lecture` int(10) NOT NULL,
  `room_no` varchar(30) NOT NULL,
  `L_type` varchar(30) NOT NULL,
  `batch` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`dept`, `course`, `sem`, `subject`, `t_id`, `day`, `lecture`, `room_no`, `L_type`, `batch`) VALUES
('ITCA', 'MCA', 3, 'CN', 'SP', 'monday', 1, 'L-101', 'L', 1),
('ITCA', 'MCA', 3, 'CG', 'DSS', 'monday', 2, 'L-102', 'T', 1),
('ITCA', 'MCA', 3, 'WEB', 'SP', 'monday', 2, 'L-101', 'T', 2),
('ITCA', 'MCA', 3, 'CN', 'SP', 'wednesday', 3, 'L-102', 'L', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(13, 'Amar', 'amar@yahoo.com', '25d55ad283aa400af464c76d713c07ad'),
(14, 'ajay', 'ajay7444@gmail.com', 'ed2b1f468c5f915f3f1cf75d7068baae'),
(15, 'Ashis', 'ashish@gmail.com', 'ed2b1f468c5f915f3f1cf75d7068baae');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`s_n`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`lecture`,`t_id`,`day`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `s_n` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
