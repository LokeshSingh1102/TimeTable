-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 11:36 AM
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
  `signup_dttm` datetime DEFAULT NULL,
  `uid` bigint(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `login_token` varchar(200) DEFAULT NULL,
  `login_dttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `signup_dttm`, `uid`, `password`, `login_token`, `login_dttm`) VALUES
(1, NULL, NULL, NULL, 15403320097, 'sam', '9ab0d88431732957a618d4a469a0d4c3', '2023-05-07 18:54:25'),
(2, 'Suvojeet Haldar', 'suvojeethaldar4@gmail.com', '2023-05-12 20:10:09', 3778047383, 'suvo', '251bd0442dfcc53b5a761e050f8022b8', '2023-05-14 09:00:48'),
(3, 'Suvojeet Haldar', 'suvojeethaldar@gmail.com', '2023-05-12 20:12:40', 1643156842, 'suvo', NULL, NULL),
(4, 'Suvojeet Haldar', 'xnjksanxkjsa@gmail.com', '2023-05-14 09:23:59', 1525504260, 'suvo', '250f1d53f87de1fd3d3c7a01dcb37abc', '2023-05-14 09:24:49'),
(5, '', '', '2023-05-14 17:46:33', 1884264216, '', NULL, NULL),
(6, 'suvo', 'abc@gmail.com', '2023-05-15 14:58:52', 1525842973, 'suvo', 'ae3f58a127f6c1f12c4942432d1f246a', '2023-05-15 15:01:42');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_data`
--

CREATE TABLE `teacher_data` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
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

INSERT INTO `teacher_data` (`id`, `name`, `email`, `signup_dttm`, `uid`, `password`, `login_token`, `login_dttm`) VALUES
(2, NULL, '', NULL, 15401220016, 'ramos', '63a99723ebb3af94d52b474c3b21dbe1', '2023-05-10 05:54:15'),
(3, 'Suvojeet Haldar', 'suvojeethaldar4@gmail.com', '2023-05-12 19:50:46', 769260921, 'suvo', '6ef80bb237adf4b6f77d0700e1255907', '2023-05-12 21:39:28'),
(4, 'Suvojeet Haldar', 'suvojeethaldar@gmail.com', '2023-05-12 20:13:51', 4235589349, 'suvo', '561918f13a2832726ec7f2e16ecd76c1', '2023-05-14 08:42:25'),
(5, 'Suvojeet Haldar', 'xnjksanxkjsa@gmail.com', '2023-05-14 09:21:56', 2270621782, 'suvo', '16ba72172e6a4f1de54d11ab6967e371', '2023-05-14 09:23:09'),
(6, '', 'abc@gmail.com', '2023-05-14 17:54:50', 1345500120, 'suvo', NULL, NULL),
(7, 'suvo', 'abcd@gmail.com', '2023-05-15 14:51:20', 518031121, 'suvo', '63a7769efbcc83107e5e385ccc6429de', '2023-05-15 14:55:47');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teacher_data`
--
ALTER TABLE `teacher_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
