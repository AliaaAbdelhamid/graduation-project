-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2021 at 11:46 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_managment`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_syllabus`
--

CREATE TABLE `academic_syllabus` (
  `id` int(11) NOT NULL,
  `teacher_ID` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `filename` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_type` varchar(20) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `destination` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_syllabus`
--

INSERT INTO `academic_syllabus` (`id`, `teacher_ID`, `title`, `description`, `class_id`, `subject_id`, `filename`, `file_type`, `size`, `downloads`, `destination`) VALUES
(4, 1, 'test', 'testing', 1, 1, 'sections 2021 (1).pdf', 'application/pdf', 937593, 0, 'uploads/sections 2021 (1).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE `admin_log` (
  `Admin_ID` int(11) NOT NULL,
  `Admin_User` varchar(50) NOT NULL,
  `Admin_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_log`
--

INSERT INTO `admin_log` (`Admin_ID`, `Admin_User`, `Admin_Password`) VALUES
(1, 'Admin', 'Admin'),
(2, 'aliaa', 'aliaa'),
(3, 'norhan', 'norhan');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('60e1e848bc2a8', '60e1e848d69ce'),
('60e1e849294d4', '60e1e8492e6b0'),
('60e1e849548d4', '60e1e84959da3'),
('60e1e8497519a', '60e1e8497a692'),
('60e1e849c3ba9', '60e1e849d6bc9'),
('60e1e8903d778', '60e1e89058cc9'),
('60e75475cb42b', '60e75475de575'),
('60e7547630ba5', '60e754763b7f4'),
('60e754f1ef21b', '60e754f211851'),
('60e7551fb83d3', '60e7551fd01fc'),
('60e86a6a105a0', '60e86a6a107ab'),
('60e86a7d024a4', '60e86a7d0267a'),
('60e86d0f637b0', '60e86d0f7d249'),
('60e86d2910374', '60e86d292bb02'),
('60eaac00edd00', '60eaac0115e81');

-- --------------------------------------------------------

--
-- Table structure for table `answerexam`
--

CREATE TABLE `answerexam` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answerexam`
--

INSERT INTO `answerexam` (`qid`, `ansid`) VALUES
('60e1e848bc2a8', '60e1e848d69ce'),
('60e1e849294d4', '60e1e8492e6b0'),
('60e1e849548d4', '60e1e84959da3'),
('60e1e8497519a', '60e1e8497a692'),
('60e1e849c3ba9', '60e1e849d6bc9'),
('60e1e8903d778', '60e1e89058cc9'),
('60e75475cb42b', '60e75475de575'),
('60e7547630ba5', '60e754763b7f4'),
('60e754f1ef21b', '60e754f211851'),
('60e7551fb83d3', '60e7551fd01fc'),
('60ea5e6e1f8a8', '60ea5e6e38bdb'),
('60ea5e6e696d0', '60ea5e6e7f050'),
('60ea5e6ed33da', '60ea5e6ee0d22');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assignment_id` int(11) NOT NULL,
  `title` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `timestamp` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `destination` varchar(200) NOT NULL,
  `filename` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment_id`, `title`, `description`, `name`, `file_type`, `class_id`, `teacher_id`, `timestamp`, `size`, `downloads`, `subject_id`, `destination`, `filename`) VALUES
(14, 'assignment (1)', 'Assignemt on chapter 1 , 2', 'assignment', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 14, 1, '', 13847, 5, 1, 'uploads/case study 2 (2).docx', 'assignment(1).docx');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `Student_ID` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT 'attend(1) notattend(0)',
  `class` varchar(30) NOT NULL,
  `subject` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `ID` int(11) NOT NULL,
  `class` varchar(30) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`ID`, `class`, `year`) VALUES
(1, 'kg1', 'kg'),
(2, 'kg2', 'kg'),
(3, 'prim1', 'prim'),
(4, 'prim2', 'prim'),
(5, 'prim3', 'prim'),
(6, 'prim4', 'prim'),
(7, 'prim5', 'prim'),
(8, 'prim6', 'prim'),
(9, 'prep1', 'prep'),
(10, 'prep2', 'prep'),
(11, 'prep3', 'prep'),
(12, 'sec1', 'sec'),
(13, 'sec2', 'sec'),
(14, 'sec3', 'sec');

-- --------------------------------------------------------

--
-- Table structure for table `class_routine`
--

CREATE TABLE `class_routine` (
  `class_routine_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `day` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `eid` text NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`eid`, `title`, `sahi`, `wrong`, `total`, `time`, `intro`, `tag`, `date`, `class_id`, `subject_id`) VALUES
('60ea5db463740', 'Final', 1, 1, 3, 10, 'final exam on arabic to KG1 class', 'final', '2021-07-11 02:55:48', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `size`, `downloads`) VALUES
(17, 'Multimedia SH.A (Mid&Final) 2016-2017 (2).pdf', 961735, 0);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('sunnygkp10@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2015-06-23 09:31:26'),
('sunnygkp10@gmail.com', '558920ff906b8', 4, 2, 2, 0, '2015-06-23 13:32:09'),
('avantika420@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2015-06-23 14:33:04'),
('avantika420@gmail.com', '5589222f16b93', 4, 2, 2, 0, '2015-06-23 14:49:39'),
('mi5@hollywood.com', '5589222f16b93', 4, 2, 2, 0, '2015-06-23 15:12:56'),
('nik1@gmail.com', '558921841f1ec', 1, 2, 1, 1, '2015-06-23 16:11:50'),
('clancy@gmail.com', '5589222f16b93', 4, 2, 2, 0, '2021-04-11 13:24:37'),
('sunnygkp10@gmail.com', '5589222f16b93', 4, 2, 2, 0, '2021-04-11 16:27:21'),
('doe@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2021-04-11 17:20:17'),
('james@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2021-04-11 17:26:12'),
('james@gmail.com', '5589222f16b93', 4, 2, 2, 0, '2021-04-11 17:26:54'),
('steeve@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2021-04-11 17:44:46'),
('steeve@gmail.com', '5589222f16b93', 4, 2, 2, 0, '2021-04-11 17:45:20'),
('steeve@gmail.com', '60e1ee491cb7c', -1, 1, 0, 1, '2021-07-04 17:26:06');

-- --------------------------------------------------------

--
-- Table structure for table `historyexam`
--

CREATE TABLE `historyexam` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `historyexam`
--

INSERT INTO `historyexam` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('sunnygkp10@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2015-06-23 09:31:26'),
('sunnygkp10@gmail.com', '558920ff906b8', 4, 2, 2, 0, '2015-06-23 13:32:09'),
('avantika420@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2015-06-23 14:33:04'),
('avantika420@gmail.com', '5589222f16b93', 4, 2, 2, 0, '2015-06-23 14:49:39'),
('mi5@hollywood.com', '5589222f16b93', 4, 2, 2, 0, '2015-06-23 15:12:56'),
('nik1@gmail.com', '558921841f1ec', 1, 2, 1, 1, '2015-06-23 16:11:50'),
('clancy@gmail.com', '5589222f16b93', 4, 2, 2, 0, '2021-04-11 13:24:37'),
('sunnygkp10@gmail.com', '5589222f16b93', 4, 2, 2, 0, '2021-04-11 16:27:21'),
('doe@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2021-04-11 17:20:17'),
('james@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2021-04-11 17:26:12'),
('james@gmail.com', '5589222f16b93', 4, 2, 2, 0, '2021-04-11 17:26:54'),
('steeve@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2021-04-11 17:44:46'),
('steeve@gmail.com', '5589222f16b93', 4, 2, 2, 0, '2021-04-11 17:45:20'),
('steeve@gmail.com', '60e1ee491cb7c', -1, 1, 0, 1, '2021-07-04 17:26:06'),
('ahmed@eduroute.eg', '60e9044ed732c', -1, 1, 0, 1, '2021-07-10 03:51:33'),
('ahmed@eduroute.eg', '60e90bc791339', -1, 1, 0, 1, '2021-07-10 03:51:38'),
('salem@eduroute.com', '60ea5db463740', 3, 3, 3, 0, '2021-07-11 07:32:56');

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE `lecture` (
  `lecture_id` int(11) NOT NULL,
  `title` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `timestamp` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `destination` varchar(200) NOT NULL,
  `filename` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`lecture_id`, `title`, `description`, `name`, `file_type`, `class_id`, `teacher_id`, `timestamp`, `size`, `downloads`, `subject_id`, `destination`, `filename`) VALUES
(8, 'test lecture', 'testing', 'test', 'application/pdf', 1, 1, '', 937593, 0, 1, 'uploads/sections 2021 (1).pdf', 'sections 2021 (1).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `lecture_ppt`
--

CREATE TABLE `lecture_ppt` (
  `id` int(11) NOT NULL,
  `teacher_ID` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `file_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `mark_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `mark_obtained` int(11) NOT NULL DEFAULT 0,
  `mark_total` int(11) NOT NULL DEFAULT 100,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exam` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `recommend` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`mark_id`, `student_id`, `subject_id`, `class_id`, `mark_obtained`, `mark_total`, `comment`, `exam`, `recommend`) VALUES
(1, 6, 1, 14, 20, 100, 'you need to study more and focus on your weak points', 'midterm', 'solve more assignments and questions from question bank'),
(2, 6, 1, 6, 40, 100, 'you need to study more and focus on your weak points', 'final', ''),
(3, 4, 1, 1, 1, 1, '1', 'final', ''),
(8, 1, 1, 1, 60, 100, 'You need to study more', 'midterm', '');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('60e1e848bc2a8', '51', '60e1e848d69ce'),
('60e1e848bc2a8', '51', '60e1e848d69d4'),
('60e1e848bc2a8', '51', '60e1e848d69d6'),
('60e1e848bc2a8', '51', '60e1e848d69d7'),
('60e1e849294d4', '51', '60e1e8492e6b0'),
('60e1e849294d4', '5', '60e1e8492e6d3'),
('60e1e849294d4', '15', '60e1e8492e6d5'),
('60e1e849294d4', '15', '60e1e8492e6d6'),
('60e1e849548d4', '1', '60e1e84959da3'),
('60e1e849548d4', '51', '60e1e84959daa'),
('60e1e849548d4', '51', '60e1e84959dab'),
('60e1e849548d4', '5', '60e1e84959dac'),
('60e1e8497519a', '1', '60e1e8497a692'),
('60e1e8497519a', '51', '60e1e8497a698'),
('60e1e8497519a', '51', '60e1e8497a69a'),
('60e1e8497519a', '51', '60e1e8497a69b'),
('60e1e849c3ba9', '15', '60e1e849d6bc9'),
('60e1e849c3ba9', '15', '60e1e849d6bd4'),
('60e1e849c3ba9', '15', '60e1e849d6bd6'),
('60e1e849c3ba9', '1', '60e1e849d6bd8'),
('60e1e8903d778', '154', '60e1e89058cc9'),
('60e1e8903d778', '545', '60e1e89058cd0'),
('60e1e8903d778', '4', '60e1e89058cd1'),
('60e1e8903d778', '54', '60e1e89058cd2'),
('60e75475cb42b', '21', '60e75475de55a'),
('60e75475cb42b', '21', '60e75475de574'),
('60e75475cb42b', '21', '60e75475de575'),
('60e75475cb42b', '21', '60e75475de576'),
('60e7547630ba5', '21', '60e754763b7f4'),
('60e7547630ba5', '21', '60e754763b7fb'),
('60e7547630ba5', '21', '60e754763b7fc'),
('60e7547630ba5', '21', '60e754763b7fd'),
('60e754f1ef21b', '5', '60e754f211851'),
('60e754f1ef21b', '45', '60e754f211857'),
('60e754f1ef21b', '45', '60e754f211859'),
('60e754f1ef21b', '45', '60e754f21185a'),
('60e7551fb83d3', '5415', '60e7551fd01fc'),
('60e7551fb83d3', '45', '60e7551fd0203'),
('60e7551fb83d3', '45', '60e7551fd0204'),
('60e7551fb83d3', '45', '60e7551fd0205'),
('60e86a6a105a0', '2', '60e86a6a107ab'),
('60e86a6a105a0', '22', '60e86a6a107b0'),
('60e86a6a105a0', '2', '60e86a6a107b2'),
('60e86a6a105a0', '2', '60e86a6a107b3'),
('60e86a7d024a4', '1', '60e86a7d0267a'),
('60e86a7d024a4', '1', '60e86a7d0267d'),
('60e86a7d024a4', '1', '60e86a7d0267e'),
('60e86a7d024a4', '1', '60e86a7d0267f'),
('60e86d0f637b0', '1', '60e86d0f7d249'),
('60e86d0f637b0', '1', '60e86d0f7d251'),
('60e86d0f637b0', '1', '60e86d0f7d252'),
('60e86d0f637b0', '1', '60e86d0f7d253'),
('60e86d2910374', '2', '60e86d292bb02'),
('60e86d2910374', '1', '60e86d292bb0a'),
('60e86d2910374', '3', '60e86d292bb0c'),
('60e86d2910374', '4', '60e86d292bb0d'),
('60eaac00edd00', '1', '60eaac0115e81'),
('60eaac00edd00', '1', '60eaac0115e88'),
('60eaac00edd00', '1', '60eaac0115e89'),
('60eaac00edd00', '1', '60eaac0115e8b');

-- --------------------------------------------------------

--
-- Table structure for table `optionsexam`
--

CREATE TABLE `optionsexam` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `optionsexam`
--

INSERT INTO `optionsexam` (`qid`, `option`, `optionid`) VALUES
('60e1e848bc2a8', '51', '60e1e848d69ce'),
('60e1e848bc2a8', '51', '60e1e848d69d4'),
('60e1e848bc2a8', '51', '60e1e848d69d6'),
('60e1e848bc2a8', '51', '60e1e848d69d7'),
('60e1e849294d4', '51', '60e1e8492e6b0'),
('60e1e849294d4', '5', '60e1e8492e6d3'),
('60e1e849294d4', '15', '60e1e8492e6d5'),
('60e1e849294d4', '15', '60e1e8492e6d6'),
('60e1e849548d4', '1', '60e1e84959da3'),
('60e1e849548d4', '51', '60e1e84959daa'),
('60e1e849548d4', '51', '60e1e84959dab'),
('60e1e849548d4', '5', '60e1e84959dac'),
('60e1e8497519a', '1', '60e1e8497a692'),
('60e1e8497519a', '51', '60e1e8497a698'),
('60e1e8497519a', '51', '60e1e8497a69a'),
('60e1e8497519a', '51', '60e1e8497a69b'),
('60e1e849c3ba9', '15', '60e1e849d6bc9'),
('60e1e849c3ba9', '15', '60e1e849d6bd4'),
('60e1e849c3ba9', '15', '60e1e849d6bd6'),
('60e1e849c3ba9', '1', '60e1e849d6bd8'),
('60e1e8903d778', '154', '60e1e89058cc9'),
('60e1e8903d778', '545', '60e1e89058cd0'),
('60e1e8903d778', '4', '60e1e89058cd1'),
('60e1e8903d778', '54', '60e1e89058cd2'),
('60e75475cb42b', '21', '60e75475de55a'),
('60e75475cb42b', '21', '60e75475de574'),
('60e75475cb42b', '21', '60e75475de575'),
('60e75475cb42b', '21', '60e75475de576'),
('60e7547630ba5', '21', '60e754763b7f4'),
('60e7547630ba5', '21', '60e754763b7fb'),
('60e7547630ba5', '21', '60e754763b7fc'),
('60e7547630ba5', '21', '60e754763b7fd'),
('60e754f1ef21b', '5', '60e754f211851'),
('60e754f1ef21b', '45', '60e754f211857'),
('60e754f1ef21b', '45', '60e754f211859'),
('60e754f1ef21b', '45', '60e754f21185a'),
('60e7551fb83d3', '5415', '60e7551fd01fc'),
('60e7551fb83d3', '45', '60e7551fd0203'),
('60e7551fb83d3', '45', '60e7551fd0204'),
('60e7551fb83d3', '45', '60e7551fd0205'),
('60ea5e6e1f8a8', 'فانوس', '60ea5e6e38bdb'),
('60ea5e6e1f8a8', 'فانوسى', '60ea5e6e38be2'),
('60ea5e6e1f8a8', 'فانوسة', '60ea5e6e38be3'),
('60ea5e6e1f8a8', 'فانوسك', '60ea5e6e38be4'),
('60ea5e6e696d0', 'اقلام ', '60ea5e6e7f050'),
('60ea5e6e696d0', 'قليم', '60ea5e6e7f056'),
('60ea5e6e696d0', 'قلم', '60ea5e6e7f057'),
('60ea5e6e696d0', 'قلامات', '60ea5e6e7f058'),
('60ea5e6ed33da', 'في', '60ea5e6ee0d22'),
('60ea5e6ed33da', 'علي', '60ea5e6ee0d29'),
('60ea5e6ed33da', 'عن ', '60ea5e6ee0d2a'),
('60ea5e6ed33da', 'امام', '60ea5e6ee0d2b');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `parent_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `profession` longtext COLLATE utf8_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questionbank`
--

CREATE TABLE `questionbank` (
  `question_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questionbank`
--

INSERT INTO `questionbank` (`question_id`, `question`, `answer`, `class_id`, `subject_id`) VALUES
(13, 'مفرد كلمة (كلمات) ', 'كلمة ', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('60e1e83fa854d', '60e1e848bc2a8', '5151', 4, 1),
('60e1e83fa854d', '60e1e849294d4', '51', 4, 2),
('60e1e83fa854d', '60e1e849548d4', '15', 4, 3),
('60e1e83fa854d', '60e1e8497519a', '15', 4, 4),
('60e1e83fa854d', '60e1e849c3ba9', '15', 4, 5),
('60e1e88b6647f', '60e1e8903d778', '55', 4, 1),
('60e7546934059', '60e75475cb42b', '1212', 4, 1),
('60e7546934059', '60e7547630ba5', '21', 4, 2),
('60e754ee325a9', '60e754f1ef21b', '45', 4, 1),
('60e7551bea426', '60e7551fb83d3', '5151', 4, 1),
('60e86d0a81efa', '60e86d0f637b0', '1', 4, 1),
('60e86d21ae88f', '60e86d2910374', '1', 4, 1),
('60eaabfc36ab1', '60eaac00edd00', '1', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `questionsexam`
--

CREATE TABLE `questionsexam` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questionsexam`
--

INSERT INTO `questionsexam` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('60e1e83fa854d', '60e1e848bc2a8', '5151', 4, 1),
('60e1e83fa854d', '60e1e849294d4', '51', 4, 2),
('60e1e83fa854d', '60e1e849548d4', '15', 4, 3),
('60e1e83fa854d', '60e1e8497519a', '15', 4, 4),
('60e1e83fa854d', '60e1e849c3ba9', '15', 4, 5),
('60e1e88b6647f', '60e1e8903d778', '55', 4, 1),
('60e7546934059', '60e75475cb42b', '1212', 4, 1),
('60e7546934059', '60e7547630ba5', '21', 4, 2),
('60e754ee325a9', '60e754f1ef21b', '45', 4, 1),
('60e7551bea426', '60e7551fb83d3', '5151', 4, 1),
('60ea5db463740', '60ea5e6e1f8a8', 'مفرد كلمة فوانيس', 4, 1),
('60ea5db463740', '60ea5e6e696d0', 'جمع كلمة قلم', 4, 2),
('60ea5db463740', '60ea5e6ed33da', 'اكمل الجملة الاتية بكلمة مناسبة \r\nقفز احمد ..... البحر', 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `time`, `intro`, `tag`, `date`, `class_id`, `subject_id`) VALUES
('60eaabfc36ab1', '1', 1, 1, 1, 1, '', '1', '2021-07-11 08:29:48', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rankexam`
--

CREATE TABLE `rankexam` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `day` varchar(100) NOT NULL,
  `S_From` varchar(20) NOT NULL,
  `E_To` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `class`, `subject`, `day`, `S_From`, `E_To`) VALUES
(3, 1, 'arabic', 'sunday', '2', '3'),
(4, 0, 'arabic', 'sunday', '55', '55'),
(6, 1, 'arabic', 'monday', '2', '3'),
(7, 12, 'english', 'monday', '1', '2'),
(8, 12, 'english', 'monday', '1', '2'),
(9, 3, 'arabic', 'monday', '1', '2'),
(10, 14, 'arabic', 'sunday', '12', '1'),
(11, 14, 'applied math', 'sunday', '5', '2'),
(12, 1, 'english', 'sunday', '3', '4');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `class_id`, `section`) VALUES
(1, 13, 'scientific'),
(2, 13, 'literary'),
(3, 14, 'science science'),
(4, 14, 'science math'),
(5, 14, 'literary');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `sex` text COLLATE utf8_unicode_ci NOT NULL,
  `relogion` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) DEFAULT NULL,
  `year` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `birthday`, `sex`, `relogion`, `address`, `phone`, `email`, `password`, `class_id`, `section_id`, `year`) VALUES
(1, 'aliaa', '2013-10-15', 'female', '', '', '', 'aliaa1234@eduroute.eg', '1234', 1, 1, 'kg');

-- --------------------------------------------------------

--
-- Table structure for table `student_assignment`
--

CREATE TABLE `student_assignment` (
  `studentass_id` int(11) NOT NULL,
  `title` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `student_id` int(11) NOT NULL,
  `file_type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL,
  `timestamp` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `tass_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_assignment`
--

INSERT INTO `student_assignment` (`studentass_id`, `title`, `description`, `student_id`, `file_type`, `class_id`, `timestamp`, `size`, `downloads`, `filename`, `subject_id`, `tass_id`, `teacher_id`) VALUES
(31, 'k', 'k', 10, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 14, '', 14073, 6, 'case study 2 (2) (2).docx', 1, 14, 0),
(32, 'k', 'k', 10, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 14, '', 14073, 0, 'case study 2 (2) (2).docx', 1, 14, 0),
(33, 'assignment 1 ', 'arabic assignment 7/11/2021', 1, 'application/pdf', 1, '', 937593, 0, 'sections 2021 (1).pdf', 1, 0, 0),
(34, 'test', 'testing', 1, 'application/pdf', 1, '', 937829, 0, 'sections 2021 (1) (1).pdf', 1, 0, 0),
(35, 'l', 'l', 1, 'application/pdf', 1, '', 937829, 0, 'sections 2021 (1) (1).pdf', 1, 0, 0),
(36, 'i', 'i', 1, 'application/pdf', 1, '', 937829, 0, 'sections 2021 (1) (1).pdf', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `name`) VALUES
(1, 'arabic'),
(2, 'english'),
(3, 'math'),
(5, 'german'),
(6, 'applied math'),
(7, 'art'),
(8, 'biology '),
(9, 'chemistry'),
(10, 'computer'),
(11, 'french'),
(12, 'geography'),
(13, 'geology'),
(14, 'history'),
(15, 'philosophy and logic'),
(16, 'physics'),
(17, 'psychology&sociology'),
(18, 'pure Math'),
(20, 'philosophy and logic'),
(22, 'science'),
(23, 'social Studies');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `birthday` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sex` longtext COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Department` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `name`, `birthday`, `sex`, `religion`, `address`, `phone`, `email`, `password`, `subject`, `Department`) VALUES
(1, 'karen', '2021-07-06', 'female', 'muslim', '3103 Modoc Alley', '015547885565', 'teacher1@eduroute.com', '1234', 'arabic', 'Arabic'),
(3, 'teacher3', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher3@eduroute.eg', '1234', 'Math', 'Maths'),
(4, 'teacher4\r\n', '06/03/1995', 'female', '', '4841 Andell Road', '614-901-1543', 'teacher4@eduroute.eg', '1234', 'Science', 'Science'),
(5, 'teacher5', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher5@eduroute.eg', '1234', 'Social Studies', 'Social Studies'),
(6, 'teacher6', '06/03/1995', 'female', '', '4841 Andell Road', '614-901-1543', 'teacher6@eduroute.eg', '1234', 'french', 'Foreign Language'),
(7, 'teacher7', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher7@eduroute.eg', '1234', ' German', 'Foreign Language'),
(8, 'teacher8\r\n', '06/03/1995', 'female', '', '4841 Andell Road', '614-901-1543', 'teacher8@eduroute.eg', '1234', 'Art', 'Art'),
(9, 'teacher9', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher9@eduroute.eg', '1234', 'Music', 'Music'),
(10, 'teacher10', '06/03/1995', 'female', '', '4841 Andell Road', '614-901-1543', 'teacher10@eduroute.eg', '1234', 'Computer', 'Computer'),
(11, 'teacher11', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher11@eduroute.eg', '1234', 'Phynsical education', 'Phynsical education'),
(12, 'teacher12', '06/03/1995', 'female', '', '4841 Andell Road', '614-901-1543', 'teacher12@eduroute.eg', '1234', 'librarian', 'librarian'),
(13, 'teacher13', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher13@eduroute.eg', '1234', 'History', 'Social Studies'),
(14, 'teacher14', '06/03/1995', 'female', '', '4841 Andell Road', '614-901-1543', 'teacher14@eduroute.eg', '1234', 'Geography', 'Social Studies'),
(15, 'teacher15', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher15@eduroute.eg', '1234', 'Philosophy and Logic', 'Social Studies'),
(16, 'teacher16\r\n', '06/03/1995', 'female', '', '4841 Andell Road', '614-901-1543', 'teacher16@eduroute.eg', '1234', 'Psychology&sociology', 'Social Studies'),
(19, 'teacher19', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher19@eduroute.eg', '1234', 'english', 'English'),
(21, 'teacher21', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher21@eduroute.eg', '1234', 'Pure Math', 'Maths'),
(22, 'teacher22\r\n', '06/03/1995', 'female', '', '4841 Andell Road', '614-901-1543', 'teacher22@eduroute.eg', '1234', 'Science', 'Science'),
(23, 'teacher23', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher23@eduroute.eg', '1234', 'Social Studies', 'Social Studies'),
(24, 'teacher24', '06/03/1995', 'female', '', '4841 Andell Road', '614-901-1543', 'teacher24@eduroute.eg', '1234', 'french', 'Foreign Language'),
(25, 'teacher25', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher25@eduroute.eg', '1234', 'German', 'Foreign Language'),
(26, 'teacher26', '06/03/1995', 'female', '', '4841 Andell Road', '614-901-1543', 'teacher26@eduroute.eg', '1234', 'Art', 'Art'),
(27, 'teacher27', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher27@eduroute.eg', '1234', 'Music', 'Music'),
(28, 'teacher28', '06/03/1995', 'female', '', '4841 Andell Road', '614-901-1543', 'teacher28@eduroute.eg', '1234', 'Computer', 'Computer'),
(29, 'teacher29', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher29@eduroute.eg', '1234', 'Phynsical education', 'Phynsical education'),
(30, 'teacher30', '06/03/1995', 'female', '', '4841 Andell Road', '614-901-1543', 'teacher30@eduroute.eg', '1234', 'librarian', 'librarian'),
(31, 'teacher31', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher31@eduroute.eg', '1234', 'History', 'Social Studies'),
(32, 'teacher32', '06/03/1995', 'female', '', '4841 Andell Road', '614-901-1543', 'teacher32@eduroute.eg', '1234', 'Geography', 'Social Studies'),
(33, 'teacher33', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher33@eduroute.eg', '1234', 'english', 'English'),
(35, 'teacher35', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher35@eduroute.eg', '1234', 'english', 'English'),
(37, 'teacher37', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher37@eduroute.eg', '1234', 'Applied  math', 'Maths'),
(38, 'teacher38', '06/03/1995', 'female', '', '4841 Andell Road', '614-901-1543', 'teacher38@eduroute.eg', '1234', 'Chemistry', 'Science'),
(39, 'teacher39', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher39@eduroute.eg', '1234', 'Geography', 'Social Studies'),
(40, 'teacher40', '06/03/1995', 'female', '', '4841 Andell Road', '614-901-1543', 'teacher40@eduroute.eg', '1234', 'french', 'Foreign Language'),
(41, 'teacher41', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher41@eduroute.eg', '1234', 'German', 'Foreign Language'),
(42, 'teacher42\r\n', '06/03/1995', 'female', '', '4841 Andell Road', '614-901-1543', 'teacher42@eduroute.eg', '1234', 'Art', 'Art'),
(43, 'teacher43', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher43@eduroute.eg', '1234', 'Music', 'Music'),
(44, 'teacher44', '06/03/1995', 'female', '', '4841 Andell Road', '614-901-1543', 'teacher44@eduroute.eg', '1234', 'Computer', 'Computer'),
(45, 'teacher45', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher45@eduroute.eg', '1234', 'Phynsical education', 'Phynsical education'),
(46, 'teacher46', '06/03/1995', 'female', '', '4841 Andell Road', '614-901-1543', 'teacher46@eduroute.eg', '1234', 'librarian', 'librarian'),
(47, 'teacher47', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher47@eduroute.eg', '1234', 'History', 'Social Studies'),
(48, 'teacher48', '06/03/1995', 'female', '', '4841 Andell Road', '614-901-1543', 'teacher48@eduroute.eg', '1234', 'Geography', 'Social Studies'),
(49, 'teacher49', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher49@eduroute.eg', '1234', 'Chemistry', 'Science'),
(50, 'teacher50\r\n', '06/03/1995', 'female', '', '4841 Andell Road', '614-901-1543', 'teacher50@eduroute.eg', '1234', 'Physics', 'Science'),
(51, 'teacher51', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher51@eduroute.eg', '1234', 'english', 'English'),
(53, 'teacher53', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher53@eduroute.eg', '1234', 'Biology ', 'Science'),
(55, 'teacher55', '08/28/1990', 'male', '', '694 Michael Street', '713-732-6331', 'teacher55@eduroute.eg', '1234', 'Pure Math', 'Maths'),
(56, 'teacher56\r\n', '06/03/1995', 'female', '', '4841 Andell Road', '614-901-1543', 'teacher56@eduroute.eg', '1234', 'Geology', 'Science'),
(57, 'teacher57', '2021-05-20', 'male', 'christian', '3103 Modoc Alley', '0125369855', 'teacher57@eduroute.eg', '1234', 'Art', 'Art'),
(60, 'aaaaaaaaaaaaaaaaaaaaaa', '2021-12-31', 'male', 'christian', '3103 Modoc Alley', '-1', 'aliaatarek25@gmail.com', 'student1', 'arabic', ''),
(64, 'Aliaa', '1998-02-05', 'female', 'muslim', '12 Ein shams , cairo', '01113137506', 'aliaa123@eduroute.eg', '1234', 'arabic', 'Arabic');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_attendance`
--

CREATE TABLE `teacher_attendance` (
  `attendance_id` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1 attend, 0 notattend',
  `teacher_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_attendance`
--

INSERT INTO `teacher_attendance` (`attendance_id`, `status`, `teacher_id`, `date`) VALUES
(4, 0, 3, '2021-07-12'),
(5, 0, 4, '2021-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_classes`
--

CREATE TABLE `teacher_classes` (
  `tc_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_classes`
--

INSERT INTO `teacher_classes` (`tc_id`, `teacher_id`, `subject_id`, `class_id`, `section_id`) VALUES
(1, 1, 1, 1, NULL),
(2, 1, 1, 6, NULL),
(3, 1, 1, 14, 3);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_schedule`
--

CREATE TABLE `teacher_schedule` (
  `schedule_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `day` varchar(100) DEFAULT NULL,
  `duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_schedule`
--

INSERT INTO `teacher_schedule` (`schedule_id`, `teacher_id`, `class`, `subject_id`, `day`, `duration`) VALUES
(1, 1, 1, 1, 'sunday', 1),
(2, 1, 3, 1, 'monday', 5),
(3, 1, 4, 1, 'monday', 2),
(4, 1, 7, 1, 'monday', 1),
(5, 1, 1, 1, 'thursday', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_syllabus`
--
ALTER TABLE `academic_syllabus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_ID` (`teacher_ID`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `admin_log`
--
ALTER TABLE `admin_log`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`assignment_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`),
  ADD KEY `Student_ID` (`Student_ID`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `class_routine`
--
ALTER TABLE `class_routine`
  ADD PRIMARY KEY (`class_routine_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecture`
--
ALTER TABLE `lecture`
  ADD PRIMARY KEY (`lecture_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `lecture_ppt`
--
ALTER TABLE `lecture_ppt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_ID` (`teacher_ID`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`mark_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`parent_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `questionbank`
--
ALTER TABLE `questionbank`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `class` (`class`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_assignment`
--
ALTER TABLE `student_assignment`
  ADD PRIMARY KEY (`studentass_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `student ID` (`student_id`),
  ADD KEY `tass_id` (`tass_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `teacher_attendance`
--
ALTER TABLE `teacher_attendance`
  ADD PRIMARY KEY (`attendance_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `teacher_classes`
--
ALTER TABLE `teacher_classes`
  ADD PRIMARY KEY (`tc_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `teacher_classes_ibfk_2` (`subject_id`),
  ADD KEY `teacher_classes_ibfk_3` (`teacher_id`),
  ADD KEY `teacher_classes_ibfk_4` (`section_id`);

--
-- Indexes for table `teacher_schedule`
--
ALTER TABLE `teacher_schedule`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `class` (`class`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_syllabus`
--
ALTER TABLE `academic_syllabus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_log`
--
ALTER TABLE `admin_log`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `class_routine`
--
ALTER TABLE `class_routine`
  MODIFY `class_routine_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `lecture`
--
ALTER TABLE `lecture`
  MODIFY `lecture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lecture_ppt`
--
ALTER TABLE `lecture_ppt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mark`
--
ALTER TABLE `mark`
  MODIFY `mark_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `parent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `questionbank`
--
ALTER TABLE `questionbank`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `student_assignment`
--
ALTER TABLE `student_assignment`
  MODIFY `studentass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `teacher_attendance`
--
ALTER TABLE `teacher_attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher_classes`
--
ALTER TABLE `teacher_classes`
  MODIFY `tc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacher_schedule`
--
ALTER TABLE `teacher_schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `class_routine`
--
ALTER TABLE `class_routine`
  ADD CONSTRAINT `class_routine_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`ID`),
  ADD CONSTRAINT `class_routine_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `mark`
--
ALTER TABLE `mark`
  ADD CONSTRAINT `mark_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mark_ibfk_3` FOREIGN KEY (`class_id`) REFERENCES `classes` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parent`
--
ALTER TABLE `parent`
  ADD CONSTRAINT `parent_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questionbank`
--
ALTER TABLE `questionbank`
  ADD CONSTRAINT `questionbank_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`ID`),
  ADD CONSTRAINT `questionbank_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `teacher_attendance`
--
ALTER TABLE `teacher_attendance`
  ADD CONSTRAINT `teacher_attendance_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
