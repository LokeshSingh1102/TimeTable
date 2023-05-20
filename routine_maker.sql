-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 09:59 AM
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
  `email` varchar(254) DEFAULT NULL,
  `signup_dttm` datetime DEFAULT NULL,
  `uid` bigint(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `login_token` varchar(200) DEFAULT NULL,
  `login_dttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `email`, `signup_dttm`, `uid`, `password`, `login_token`, `login_dttm`) VALUES
(15, 'suvojeethaldar4@gmail.com', '2023-05-19 14:34:49', 1265095990, 'suvo', 'b166b57d195370cd41f80dd29ed523d9', '2023-05-19 14:37:54');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_data`
--

CREATE TABLE `teacher_data` (
  `id` int(11) NOT NULL,
  `email` varchar(254) DEFAULT NULL,
  `signup_dttm` datetime DEFAULT NULL,
  `uid` bigint(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `login_token` varchar(200) DEFAULT NULL,
  `login_dttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_data`
--

INSERT INTO `teacher_data` (`id`, `email`, `signup_dttm`, `uid`, `password`, `login_token`, `login_dttm`) VALUES
(17, 'suvojeethaldar4@gmail.com', '2023-05-19 14:31:54', 1402678636, 'suvo', '9fe4e15b3924b1a78221734d0c063ae7', '2023-05-19 14:32:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_data`
--
ALTER TABLE `teacher_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teacher_data`
--
ALTER TABLE `teacher_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
