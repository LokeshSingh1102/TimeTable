-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 07:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
-- Table structure for table `course_subjects`
--

CREATE TABLE `course_subjects` (
  `sno` int(11) NOT NULL,
  `Cname` varchar(50) NOT NULL,
  `Semester` int(11) NOT NULL,
  `Sub1` varchar(35) DEFAULT NULL,
  `Sub2` varchar(35) DEFAULT NULL,
  `Sub3` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_subjects`
--

INSERT INTO `course_subjects` (`sno`, `Cname`, `Semester`, `Sub1`, `Sub2`, `Sub3`) VALUES
(1, 'BCA', 5, 'Internet Technology', 'Computer Networking', 'Internet Technology Lab'),
(2, 'BCA', 3, 'abc', 'asdf', 'xyz'),
(3, 'BBA', 5, 'asej', 'jojo', 'yopopo'),
(4, 'BHM', 3, 'aezakmi', 'ajse', 'jenfa'),
(5, 'BHM', 5, 'abcd', 'efgh', 'ijkl'),
(8, 'BCA', 1, 'Digital Electronics', 'Soft Skills', 'Rest in piece'),
(9, 'BBA', 5, 'LOLO', 'lasjsdf', 'jaslseun'),
(10, 'BBA', 5, 'LOLO', 'lasjsdf', 'jaslseun'),
(11, 'BBA', 5, 'LOLO', 'lasjsdf', 'jaslseun'),
(12, 'BHM', 0, 'lajsdf', 'asdfadsf', 'jaslseun'),
(13, 'BHM', 5, 'lajsdf', 'asdfadsf', 'jaslseun'),
(14, 'yopopo', 5, 'lajsdf', 'asdfadsf', 'jaslseun'),
(15, 'baba', 5, 'lajsdf', 'asdfadsf', 'jaslseun'),
(16, 'lolo', 3, 'asd', 'ads', 'asd'),
(17, 'BCA', 6, 'DS', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `friday`
--

CREATE TABLE `friday` (
  `teacherName` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `period` int(10) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `semester` int(10) NOT NULL,
  `section` varchar(4) NOT NULL,
  `tempTeacher` varchar(20) NOT NULL,
  `tempSubject` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `friday`
--

INSERT INTO `friday` (`teacherName`, `subject`, `period`, `dept`, `semester`, `section`, `tempTeacher`, `tempSubject`) VALUES
('Indrani', 'Accounts', 1, 'BCA', 1, 'A', '', ''),
('Ganjendar', 'Physics', 3, 'BCA', 1, 'A', '', ''),
('Kam Raju', 'English', 2, 'BCA', 1, 'A', '', ''),
('Ajit', 'Finance', 4, 'BCA', 1, 'A', '', ''),
('Atul', 'Maths', 2, 'BCA', 3, 'B', '', ''),
('Manish', 'Geography', 3, 'BCA', 3, 'B', '', ''),
('Debarpita', 'Geography', 2, 'BSc', 2, 'B', '', ''),
('Rajiv', 'English', 1, 'BSc', 2, 'B', '', ''),
('Naruto', 'Ninja Way', 1, 'Commerce', 3, 'A', '', ''),
('Indrani', 'Accounts', 3, 'Commerce', 3, 'A', '', ''),
('Ajit', 'Finance', 2, 'Commerce', 3, 'A', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `monday`
--

CREATE TABLE `monday` (
  `teacherName` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `semester` int(20) NOT NULL,
  `period` int(10) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `section` varchar(4) NOT NULL,
  `tempTeacher` varchar(20) NOT NULL,
  `tempSubject` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `monday`
--

INSERT INTO `monday` (`teacherName`, `subject`, `semester`, `period`, `dept`, `section`, `tempTeacher`, `tempSubject`) VALUES
('Indrani', 'Accounts', 1, 1, 'BCA', 'A', '', ''),
('Ajit', 'Finance', 1, 4, 'BCA', 'A', '', ''),
('Ganjendar', 'Physics', 1, 3, 'BCA', 'A', '', ''),
('Kam Raju', 'English', 1, 2, 'BCA', 'A', '', ''),
('Naruto', 'shipuden', 6, 1, 'anime', 'A', '', ''),
('Naruto', 'shippuden', 6, 2, 'anime', 'A', '', ''),
('bleach', 'sword', 6, 4, 'anime', 'A', '', ''),
('one piece', 'adventure', 6, 3, 'anime', 'A', '', ''),
('Atul', 'Maths', 3, 1, 'BCA', 'B', '', ''),
('Manish', 'Geography', 3, 2, 'BCA', 'B', '', ''),
('Rajdeep', 'C++', 3, 3, 'BCA', 'B', '', ''),
('Debarpita', 'Geography', 2, 1, 'BSc', 'B', '', ''),
('Chaitali', 'EVS', 2, 2, 'BSc', 'B', '', ''),
('Rajiv', 'English', 2, 3, 'BSc', 'B', '', ''),
('Naruto', 'hinata', 2, 3, 'BCA', 'B', '', ''),
('sasuke', 'karim', 2, 1, 'BCA', 'B', '', ''),
('Indrani', 'Accounts', 3, 2, 'Commerce', 'A', '', ''),
('Naruto', 'Ninja Way', 3, 4, 'Commerce', 'A', '', ''),
('Ajit', 'Finance', 3, 1, 'Commerce', 'A', '', ''),
('lokesh', 'anime', 4, 1, 'BCA', 'B', '', ''),
('shreyash', 'manga', 4, 2, 'BCA', 'B', '', ''),
('lokesh', 'anime', 4, 1, 'BCA', 'B', '', ''),
('shreyash', 'manga', 4, 2, 'BCA', 'B', '', ''),
('lokesh', 'anime', 4, 1, 'BCA', 'B', '', ''),
('shreyash', 'manga', 4, 2, 'BCA', 'B', '', ''),
('lokesh', 'anime', 4, 1, 'BCA', 'B', '', ''),
('shreyash', 'manga', 4, 2, 'BCA', 'B', '', ''),
('lokesh', 'anime', 4, 1, 'BCA', 'B', '', ''),
('shreyash', 'manga', 4, 2, 'BCA', 'B', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `saturday`
--

CREATE TABLE `saturday` (
  `teacherName` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `period` int(10) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `semester` int(10) NOT NULL,
  `section` varchar(4) NOT NULL,
  `tempTeacher` varchar(20) NOT NULL,
  `tempSubject` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, NULL, NULL, NULL, 15403320097, 'sam', 'f6a4f71e72dfe084f2d4b5bf96963e02', '2023-05-19 14:05:13'),
(2, 'Suvojeet Haldar', 'suvojeethaldar4@gmail.com', '2023-05-12 20:10:09', 3778047383, 'suvo', '251bd0442dfcc53b5a761e050f8022b8', '2023-05-14 09:00:48'),
(3, 'Suvojeet Haldar', 'suvojeethaldar@gmail.com', '2023-05-12 20:12:40', 1643156842, 'suvo', NULL, NULL),
(4, 'Suvojeet Haldar', 'xnjksanxkjsa@gmail.com', '2023-05-14 09:23:59', 1525504260, 'suvo', '250f1d53f87de1fd3d3c7a01dcb37abc', '2023-05-14 09:24:49'),
(5, '', '', '2023-05-14 17:46:33', 1884264216, '', NULL, NULL),
(6, 'suvo', 'abc@gmail.com', '2023-05-15 14:58:52', 1525842973, 'suvo', 'ae3f58a127f6c1f12c4942432d1f246a', '2023-05-15 15:01:42');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacherName` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `class` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(2, NULL, '', NULL, 15401220016, 'ramos', 'c9f06bc7b46d0247a91c8fc665c13d0e', '2023-05-19 14:05:57'),
(3, 'Suvojeet Haldar', 'suvojeethaldar4@gmail.com', '2023-05-12 19:50:46', 769260921, 'suvo', '6ef80bb237adf4b6f77d0700e1255907', '2023-05-12 21:39:28'),
(4, 'Suvojeet Haldar', 'suvojeethaldar@gmail.com', '2023-05-12 20:13:51', 4235589349, 'suvo', '561918f13a2832726ec7f2e16ecd76c1', '2023-05-14 08:42:25'),
(5, 'Suvojeet Haldar', 'xnjksanxkjsa@gmail.com', '2023-05-14 09:21:56', 2270621782, 'suvo', '16ba72172e6a4f1de54d11ab6967e371', '2023-05-14 09:23:09'),
(6, '', 'abc@gmail.com', '2023-05-14 17:54:50', 1345500120, 'suvo', NULL, NULL),
(7, 'suvo', 'abcd@gmail.com', '2023-05-15 14:51:20', 518031121, 'suvo', '63a7769efbcc83107e5e385ccc6429de', '2023-05-15 14:55:47');

-- --------------------------------------------------------

--
-- Table structure for table `tempview`
--

CREATE TABLE `tempview` (
  `teacherName` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `period` int(10) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `semester` int(10) NOT NULL,
  `section` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thursday`
--

CREATE TABLE `thursday` (
  `teacherName` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `period` int(10) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `semester` int(10) NOT NULL,
  `section` varchar(4) NOT NULL,
  `tempTeacher` varchar(20) NOT NULL,
  `tempSubject` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thursday`
--

INSERT INTO `thursday` (`teacherName`, `subject`, `period`, `dept`, `semester`, `section`, `tempTeacher`, `tempSubject`) VALUES
('Ganjendar', 'Physics', 2, 'BCA', 1, 'A', '', ''),
('Kam Raju', 'English', 1, 'BCA', 1, 'A', '', ''),
('Indrani', 'Accounts', 4, 'BCA', 1, 'A', '', ''),
('Ajit', 'Finance', 3, 'BCA', 1, 'A', '', ''),
('Naruto', 'shippuden', 1, 'anime', 6, 'A', '', ''),
('one piece', 'adventure', 2, 'anime', 6, 'A', '', ''),
('bleach', 'sword', 3, 'anime', 6, 'A', '', ''),
('Naruto', 'shipuden', 4, 'anime', 6, 'A', '', ''),
('Atul', 'Maths', 1, 'BCA', 3, 'B', '', ''),
('Manish', 'Geography', 2, 'BCA', 3, 'B', '', ''),
('Rajdeep', 'C++', 3, 'BCA', 3, 'B', '', ''),
('Debarpita', 'Geography', 1, 'BSc', 2, 'B', '', ''),
('Chaitali', 'EVS', 2, 'BSc', 2, 'B', '', ''),
('Rajiv', 'English', 3, 'BSc', 2, 'B', '', ''),
('Naruto', 'hinata', 2, 'BCA', 2, 'B', '', ''),
('sasuke', 'karim', 1, 'BCA', 2, 'B', '', ''),
('Ajit', 'Finance', 1, 'Commerce', 3, 'A', '', ''),
('Naruto', 'Ninja Way', 3, 'Commerce', 3, 'A', '', ''),
('Indrani', 'Accounts', 2, 'Commerce', 3, 'A', '', ''),
('shreyash', 'manga', 1, 'BCA', 4, 'B', '', ''),
('lokesh', 'anime', 2, 'BCA', 4, 'B', '', ''),
('lokesh', 'anime', 2, 'BCA', 4, 'B', '', ''),
('shreyash', 'manga', 1, 'BCA', 4, 'B', '', ''),
('shreyash', 'manga', 1, 'BCA', 4, 'B', '', ''),
('lokesh', 'anime', 2, 'BCA', 4, 'B', '', ''),
('lokesh', 'anime', 2, 'BCA', 4, 'B', '', ''),
('shreyash', 'manga', 1, 'BCA', 4, 'B', '', ''),
('shreyash', 'manga', 1, 'BCA', 4, 'B', '', ''),
('lokesh', 'anime', 2, 'BCA', 4, 'B', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tuesday`
--

CREATE TABLE `tuesday` (
  `teacherName` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `semester` int(20) NOT NULL,
  `period` int(10) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `section` varchar(4) NOT NULL,
  `tempTeacher` varchar(20) NOT NULL,
  `tempSubject` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tuesday`
--

INSERT INTO `tuesday` (`teacherName`, `subject`, `semester`, `period`, `dept`, `section`, `tempTeacher`, `tempSubject`) VALUES
('Indrani', 'Accounts', 1, 2, 'BCA', 'A', '', ''),
('Ajit', 'Finance', 1, 1, 'BCA', 'A', '', ''),
('Kam Raju', 'English', 1, 3, 'BCA', 'A', '', ''),
('Ganjendar', 'Physics', 1, 4, 'BCA', 'A', '', ''),
('Naruto', 'shipuden', 6, 2, 'anime', 'A', '', ''),
('bleach', 'sword', 6, 1, 'anime', 'A', '', ''),
('Naruto', 'shippuden', 6, 3, 'anime', 'A', '', ''),
('one piece', 'adventure', 6, 4, 'anime', 'A', '', ''),
('Rajdeep', 'C++', 3, 1, 'BCA', 'B', '', ''),
('Atul', 'Maths', 3, 2, 'BCA', 'B', '', ''),
('Manish', 'Geography', 3, 3, 'BCA', 'B', '', ''),
('Rajiv', 'English', 2, 1, 'BSc', 'B', '', ''),
('Debarpita', 'Geography', 2, 2, 'BSc', 'B', '', ''),
('Chaitali', 'EVS', 2, 3, 'BSc', 'B', '', ''),
('sasuke', 'karim', 2, 2, 'BCA', 'B', '', ''),
('Naruto', 'hinata', 2, 4, 'BCA', 'B', '', ''),
('Ajit', 'Finance', 3, 2, 'Commerce', 'A', '', ''),
('Indrani', 'Accounts', 3, 3, 'Commerce', 'A', '', ''),
('Naruto', 'Ninja Way', 3, 1, 'Commerce', 'A', '', ''),
('shreyash', 'manga', 4, 1, 'BCA', 'B', '', ''),
('lokesh', 'anime', 4, 2, 'BCA', 'B', '', ''),
('shreyash', 'manga', 4, 1, 'BCA', 'B', '', ''),
('lokesh', 'anime', 4, 2, 'BCA', 'B', '', ''),
('shreyash', 'manga', 4, 1, 'BCA', 'B', '', ''),
('lokesh', 'anime', 4, 2, 'BCA', 'B', '', ''),
('lokesh', 'anime', 4, 2, 'BCA', 'B', '', ''),
('shreyash', 'manga', 4, 1, 'BCA', 'B', '', ''),
('shreyash', 'manga', 4, 1, 'BCA', 'B', '', ''),
('lokesh', 'anime', 4, 2, 'BCA', 'B', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `wednesday`
--

CREATE TABLE `wednesday` (
  `teacherName` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `period` int(10) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `semester` int(8) NOT NULL,
  `section` varchar(4) NOT NULL,
  `tempTeacher` varchar(20) NOT NULL,
  `tempSubject` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wednesday`
--

INSERT INTO `wednesday` (`teacherName`, `subject`, `period`, `dept`, `semester`, `section`, `tempTeacher`, `tempSubject`) VALUES
('ganjendar', 'physics', 1, 'BCA', 1, 'A', '', ''),
('Indrani', 'Accounts', 3, 'BCA', 1, 'A', '', ''),
('Ajit', 'Finance', 2, 'BCA', 1, 'A', '', ''),
('Kam Raju', 'English', 4, 'BCA', 1, 'A', '', ''),
('Naruto', 'shipuden', 3, 'anime', 6, 'A', '', ''),
('bleach', 'sword', 2, 'anime', 6, 'A', '', ''),
('one piece', 'adventure', 1, 'anime', 6, 'A', '', ''),
('Naruto', 'shippuden', 4, 'anime', 6, 'A', '', ''),
('Manish', 'Geography', 1, 'BCA', 3, 'B', '', ''),
('Rajdeep', 'C++', 2, 'BCA', 3, 'B', '', ''),
('Atul', 'Maths', 3, 'BCA', 3, 'B', '', ''),
('Chaitali', 'EVS', 1, 'BSc', 2, 'B', '', ''),
('Rajiv', 'English', 2, 'BSc', 2, 'B', '', ''),
('Debarpita', 'Geography', 3, 'BSc', 2, 'B', '', ''),
('Naruto', 'hinata', 1, 'BCA', 2, 'B', '', ''),
('sasuke', 'karim', 2, 'BCA', 2, 'B', '', ''),
('Indrani', 'Accounts', 1, 'Commerce', 3, 'A', '', ''),
('Naruto', 'Ninja Way', 2, 'Commerce', 3, 'A', '', ''),
('Ajit', 'Finance', 3, 'Commerce', 3, 'A', '', ''),
('shreyash', 'manga', 2, 'BCA', 4, 'B', '', ''),
('lokesh', 'anime', 1, 'BCA', 4, 'B', '', ''),
('lokesh', 'anime', 1, 'BCA', 4, 'B', '', ''),
('shreyash', 'manga', 2, 'BCA', 4, 'B', '', ''),
('shreyash', 'manga', 2, 'BCA', 4, 'B', '', ''),
('lokesh', 'anime', 1, 'BCA', 4, 'B', '', ''),
('lokesh', 'anime', 1, 'BCA', 4, 'B', '', ''),
('shreyash', 'manga', 2, 'BCA', 4, 'B', '', ''),
('shreyash', 'manga', 2, 'BCA', 4, 'B', '', ''),
('lokesh', 'anime', 1, 'BCA', 4, 'B', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_subjects`
--
ALTER TABLE `course_subjects`
  ADD PRIMARY KEY (`sno`);

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
-- AUTO_INCREMENT for table `course_subjects`
--
ALTER TABLE `course_subjects`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
