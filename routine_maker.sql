-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2023 at 08:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `routine maker`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `department` varchar(200) DEFAULT NULL,
  `signup_dttm` datetime DEFAULT NULL,
  `uid` bigint(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `login_token` varchar(200) DEFAULT NULL,
  `login_dttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `department`, `signup_dttm`, `uid`, `password`, `login_token`, `login_dttm`) VALUES
(1, NULL, NULL, NULL, NULL, 15403320097, 'sam', '9ab0d88431732957a618d4a469a0d4c3', '2023-05-07 18:54:25'),
(2, 'Suvojeet Haldar', 'suvojeethaldar4@gmail.com', 'BCA', '2023-05-12 20:10:09', 3778047383, 'suvo', NULL, NULL),
(3, 'Suvojeet Haldar', 'suvojeethaldar@gmail.com', 'BCA', '2023-05-12 20:12:40', 1643156842, 'suvo', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `department` varchar(200) DEFAULT NULL,
  `signup_dttm` datetime DEFAULT NULL,
  `uid` bigint(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `login_token` varchar(200) DEFAULT NULL,
  `login_dttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `email`, `department`, `signup_dttm`, `uid`, `password`, `login_token`, `login_dttm`) VALUES
(2, NULL, '', NULL, NULL, 15401220016, 'ramos', '63a99723ebb3af94d52b474c3b21dbe1', '2023-05-10 05:54:15'),
(3, 'Suvojeet Haldar', 'suvojeethaldar4@gmail.com', 'BCA', '2023-05-12 19:50:46', 769260921, 'suvo', NULL, NULL),
(4, 'Suvojeet Haldar', 'suvojeethaldar@gmail.com', 'BCA', '2023-05-12 20:13:51', 4235589349, 'suvo', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
