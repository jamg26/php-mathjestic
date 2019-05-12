-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 04:21 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pg6cv1-database`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_to_ct_generate_code`
--

CREATE TABLE `add_to_ct_generate_code` (
  `id_generate_code` int(11) NOT NULL,
  `section_id` varchar(5) NOT NULL,
  `section_name` varchar(20) NOT NULL,
  `id_sa_code` varchar(5) NOT NULL,
  `code` varchar(20) NOT NULL,
  `quarter` varchar(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_to_ct_generate_code`
--

INSERT INTO `add_to_ct_generate_code` (`id_generate_code`, `section_id`, `section_name`, `id_sa_code`, `code`, `quarter`, `date`) VALUES
(5, '7', 'ITE', '14', 'MQ-3005859', '1', '2019-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `badge`
--

CREATE TABLE `badge` (
  `badge_id` int(11) NOT NULL,
  `st_id` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `badge_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `badge`
--

INSERT INTO `badge` (`badge_id`, `st_id`, `date`, `badge_name`) VALUES
(1, '15', '2018-03-24 11:32:59', 'A1'),
(3, '15', '2018-03-24 11:33:15', 'A2'),
(4, '15', '2018-03-24 11:33:25', 'A3'),
(5, '15', '2018-03-24 11:33:29', 'A4'),
(6, '15', '2018-03-24 11:33:33', 'A5'),
(7, '5', '2018-03-24 11:36:36', 'A1'),
(8, '4', '2018-03-24 11:38:09', 'A1'),
(9, '4', '2018-03-24 11:37:09', 'A4'),
(10, '15', '2019-03-25 00:26:00', 'A1'),
(11, '15', '2019-03-25 01:24:52', 'A1'),
(12, '7', '2019-03-25 01:58:19', 'A1'),
(13, '15', '2019-03-25 02:20:58', 'A5'),
(14, '16', '2019-03-25 02:25:57', 'A5'),
(15, '16', '2019-03-25 09:04:55', 'A2'),
(16, '15', '2019-03-25 12:21:09', 'A2');

-- --------------------------------------------------------

--
-- Table structure for table `clm_answer`
--

CREATE TABLE `clm_answer` (
  `answer_id` int(11) NOT NULL,
  `quiz_id` varchar(10) NOT NULL,
  `activity_id` varchar(100) NOT NULL,
  `test_id` varchar(100) NOT NULL,
  `exam_id` varchar(100) NOT NULL,
  `assignment_id` int(100) NOT NULL,
  `question_id` varchar(10) NOT NULL,
  `answer_text` varchar(50) NOT NULL,
  `choices` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clm_answer`
--

INSERT INTO `clm_answer` (`answer_id`, `quiz_id`, `activity_id`, `test_id`, `exam_id`, `assignment_id`, `question_id`, `answer_text`, `choices`, `date`) VALUES
(5, '1', '0', '0', '0', 0, '6', 'ang hihinatay sayo', 'A', '2019-02-07 21:41:12'),
(6, '1', '0', '0', '0', 0, '6', 'ang hihigit sayo', 'B', '2019-02-07 21:41:12'),
(7, '1', '0', '0', '0', 0, '6', 'ang tatalo sayo', 'C', '2019-02-07 21:41:12'),
(8, '1', '0', '0', '0', 0, '6', 'ang laban nato', 'D', '2019-02-07 21:41:12'),
(9, '1', '0', '0', '0', 0, '7', 'Apple', 'A', '2019-02-07 21:51:48'),
(10, '1', '0', '0', '0', 0, '7', 'Bayabas', 'B', '2019-02-07 21:51:48'),
(11, '1', '0', '0', '0', 0, '7', 'Kanding', 'C', '2019-02-07 21:51:48'),
(12, '1', '0', '0', '0', 0, '7', 'Gago', 'D', '2019-02-07 21:51:48'),
(13, '2', '0', '0', '0', 0, '8', 'Apple', 'A', '2019-02-09 03:08:19'),
(14, '2', '0', '0', '0', 0, '8', 'Bayabas', 'B', '2019-02-09 03:08:19'),
(15, '2', '0', '0', '0', 0, '8', 'Kanding', 'C', '2019-02-09 03:08:19'),
(16, '2', '0', '0', '0', 0, '8', 'Gago', 'D', '2019-02-09 03:08:20'),
(17, '1', '0', '0', '0', 0, '11', 'baboy', 'A', '2019-02-09 03:20:12'),
(18, '1', '0', '0', '0', 0, '11', 'kanding', 'B', '2019-02-09 03:20:12'),
(19, '1', '0', '0', '0', 0, '11', 'buko', 'C', '2019-02-09 03:20:12'),
(20, '1', '0', '0', '0', 0, '11', 'baka', 'D', '2019-02-09 03:20:12'),
(21, '4', '0', '0', '0', 0, '12', 'Aaaaaa', 'A', '2019-03-09 08:22:22'),
(22, '4', '0', '0', '0', 0, '12', 'Bbbbb', 'B', '2019-03-09 08:22:25'),
(23, '4', '0', '0', '0', 0, '12', 'Ccccc', 'C', '2019-03-09 08:22:28'),
(24, '4', '0', '0', '0', 0, '12', 'Ddddddd', 'D', '2019-03-09 08:22:32'),
(25, '10', '0', '0', '0', 0, '18', 'Sa mang inasal', 'A', '2019-03-09 06:58:34'),
(26, '10', '0', '0', '0', 0, '18', 'Sa unli rice', 'B', '2019-03-09 06:58:34'),
(27, '10', '0', '0', '0', 0, '18', 'Sa jobe', 'C', '2019-03-09 06:58:34'),
(28, '10', '0', '0', '0', 0, '18', 'Sa chowchow', 'D', '2019-03-09 06:58:34');

-- --------------------------------------------------------

--
-- Table structure for table `clm_attendance`
--

CREATE TABLE `clm_attendance` (
  `attendance_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `student_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_modify` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clm_attendance`
--

INSERT INTO `clm_attendance` (`attendance_id`, `date`, `student_id`, `section_id`, `status`, `date_modify`) VALUES
(1, '2019-03-07', 1, 1, 'Present', '2019-03-07 16:22:16'),
(2, '2019-03-07', 2, 1, 'Present', '2019-03-07 16:22:16'),
(3, '2019-03-07', 3, 1, 'Absent', '2019-03-07 16:22:16'),
(4, '2019-03-14', 14, 4, 'Present', '2019-03-14 07:14:50'),
(5, '2019-03-14', 15, 4, 'Present', '2019-03-14 17:36:25'),
(6, '2019-03-14', 16, 4, 'Present', '2019-03-14 17:36:30'),
(7, '2019-03-14', 17, 4, 'Absent', '2019-03-14 17:36:32'),
(8, '2019-03-14', 18, 4, 'Absent', '2019-03-14 17:36:33'),
(9, '2019-03-14', 19, 4, 'Absent', '2019-03-14 17:36:35'),
(10, '2019-03-14', 20, 4, 'Present', '2019-03-14 17:36:36'),
(11, '2019-03-14', 21, 4, 'Present', '2019-03-14 17:36:40'),
(12, '2019-03-14', 22, 4, 'Present', '2019-03-14 17:36:44'),
(13, '2019-03-14', 23, 4, 'Present', '2019-03-14 17:36:48'),
(14, '2019-03-14', 24, 4, 'Present', '2019-03-14 17:36:51'),
(15, '2019-03-15', 15, 4, 'Present', '2019-03-15 08:13:44'),
(16, '2019-03-20', 16, 4, 'Present', '2019-03-20 17:55:23'),
(17, '2019-03-20', 17, 4, 'Present', '2019-03-20 17:57:42'),
(18, '2019-03-20', 18, 4, 'Absent', '2019-03-20 17:57:50'),
(19, '2019-03-20', 19, 4, 'Absent', '2019-03-20 17:59:45'),
(20, '2019-03-20', 20, 4, 'Present', '2019-03-20 17:59:48'),
(21, '2019-03-20', 21, 4, 'Present', '2019-03-20 18:00:17'),
(22, '2019-03-20', 22, 4, 'Absent', '2019-03-20 18:00:21'),
(23, '2019-03-20', 23, 4, 'Present', '2019-03-20 18:00:24'),
(24, '2019-03-20', 24, 4, 'Present', '2019-03-20 18:00:29'),
(25, '2019-03-20', 25, 4, 'Present', '2019-03-20 18:00:31'),
(26, '2019-03-20', 26, 4, 'Absent', '2019-03-20 18:00:33'),
(27, '2019-03-20', 15, 4, 'Present', '2019-03-20 18:00:35'),
(28, '2019-03-22', 11, 1, 'Absent', '2019-03-22 07:30:24'),
(29, '2019-03-22', 10, 1, 'Present', '2019-03-22 07:30:41'),
(30, '2019-03-25', 1, 1, 'Present', '2019-03-25 01:31:27'),
(31, '2019-03-25', 16, 4, 'Present', '2019-03-25 11:47:41'),
(32, '2019-03-25', 17, 4, 'Absent', '2019-03-25 11:47:45'),
(33, '2019-03-25', 18, 4, 'Present', '2019-03-25 11:47:49'),
(34, '2019-03-25', 19, 4, 'Absent', '2019-03-25 11:47:52'),
(35, '2019-03-26', 33, 7, 'Present', '2019-03-26 17:54:38'),
(36, '2019-03-26', 34, 7, 'Present', '2019-03-26 17:54:40');

-- --------------------------------------------------------

--
-- Table structure for table `clm_grades`
--

CREATE TABLE `clm_grades` (
  `grade_id` int(11) NOT NULL,
  `st_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `score_quiz` double NOT NULL,
  `score_activity` double NOT NULL,
  `score_test` double NOT NULL,
  `score_exam` double NOT NULL,
  `score_assignment` double NOT NULL,
  `quarter_grade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clm_quarter`
--

CREATE TABLE `clm_quarter` (
  `quarter_id` int(11) NOT NULL,
  `quarter` varchar(50) NOT NULL,
  `quarter_status` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clm_quarter`
--

INSERT INTO `clm_quarter` (`quarter_id`, `quarter`, `quarter_status`, `date`) VALUES
(3, '1', 'Current Quarter', '2019-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `clm_question`
--

CREATE TABLE `clm_question` (
  `question_id` int(11) NOT NULL,
  `question_title` text NOT NULL,
  `answer` varchar(50) NOT NULL,
  `quiz_id` varchar(10) NOT NULL,
  `question_type` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clm_question`
--

INSERT INTO `clm_question` (`question_id`, `question_title`, `answer`, `quiz_id`, `question_type`, `date`) VALUES
(6, 'Dugtong dugtong. Dugtongan ang huling kanta,\" Walang yaman \"', 'B', '1', '1', '2019-02-07 21:41:12'),
(7, 'Alin ang tama sa apat na ito si A ay apple si B ay bayabas si c ay kanding si D ay gago', 'D', '1', '1', '2019-02-07 21:51:48'),
(8, 'this is a question this is a question this is a question this is a question this is a question', 'C', '2', '1', '2019-02-09 03:08:19'),
(9, 'tama o mali?', 'False', '2', '2', '2019-02-09 03:16:33'),
(11, 'bagoy bagoy alin ang hindi tao', 'C', '1', '1', '2019-02-09 03:20:11'),
(12, 'Choose the correct answer?', 'A', '4', '1', '2019-03-04 06:17:57'),
(13, 'aa', 'A', '10', '1', '2019-03-04 06:40:51'),
(14, 'aaaaass', 'B', '10', '1', '2019-03-04 06:43:44'),
(16, 'aaaaassasasassff', 'C', '10', '1', '2019-03-04 06:45:17'),
(17, 'helo elholo heoaf amfladf', 'True', '10', '2', '2019-03-07 17:44:33'),
(18, 'asa ta mangaon?', 'B', '10', '1', '2019-03-09 06:58:33');

-- --------------------------------------------------------

--
-- Table structure for table `clm_section`
--

CREATE TABLE `clm_section` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `adviser` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clm_section`
--

INSERT INTO `clm_section` (`section_id`, `section_name`, `date_created`, `adviser`) VALUES
(1, 'Emerald', '2019-03-15 04:57:26', '14'),
(2, 'Gold', '2019-03-15 04:57:48', '11'),
(3, 'Diamond', '2019-03-15 04:57:57', '9'),
(4, 'Ruby', '2019-03-15 04:57:18', '1'),
(5, 'GWAPO', '2019-03-25 02:07:35', '20'),
(6, 'aa', '2019-03-26 15:43:00', '2'),
(7, 'ITE', '2019-03-26 15:44:36', '1');

-- --------------------------------------------------------

--
-- Table structure for table `clm_sholastic_record`
--

CREATE TABLE `clm_sholastic_record` (
  `id` int(11) NOT NULL,
  `student_id` varchar(10) NOT NULL,
  `final_grades` varchar(10) NOT NULL,
  `quarter` varchar(10) NOT NULL,
  `section` varchar(5) NOT NULL,
  `date` varchar(10) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clm_sholastic_record`
--

INSERT INTO `clm_sholastic_record` (`id`, `student_id`, `final_grades`, `quarter`, `section`, `date`, `fullname`, `photo`) VALUES
(12, '5', '63.75', '', '1', '2019-03-26', 'aaa aaa', ''),
(13, '6', '60', '', '1', '2019-03-26', 'bbb bbb', ''),
(14, '7', '60', '', '1', '2019-03-26', 'ccc ccc', ''),
(15, '8', '60', '', '1', '2019-03-26', 'd ddd', ''),
(16, '10', '60', '', '1', '2019-03-26', 'f fff', 'user.png'),
(17, '9', '60', '', '1', '2019-03-26', 'e eee', 'user.png'),
(18, '1', '60', '', '1', '2019-03-26', 'student student', 'user.png'),
(19, '4', '60', '', '1', '2019-03-26', 'student00 student00', 'user.png'),
(20, '33', '60', '', '7', '2019-03-26', 'Tungala, David Sam Suarez', 'user.png'),
(21, '34', '60', '', '7', '2019-03-26', 'Avergonzado, Jojie Ayag', 'user.png');

-- --------------------------------------------------------

--
-- Table structure for table `clm_upload_dll`
--

CREATE TABLE `clm_upload_dll` (
  `dll_upload_id` int(11) NOT NULL,
  `dll_file` varchar(100) NOT NULL,
  `dll_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dll_file_name` varchar(100) NOT NULL,
  `date_series` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clm_upload_dll`
--

INSERT INTO `clm_upload_dll` (`dll_upload_id`, `dll_file`, `dll_date`, `dll_file_name`, `date_series`) VALUES
(3, 'DLL_MATHEMATICS 6_Q1_W2.pdf', '2019-03-22 07:04:26', 'DLL_MATHEMATICS 6_Q1_W2.pdf', '2018'),
(5, 'DLL_MATHEMATICS 6_Q1_W3.pdf', '2019-03-22 07:04:29', 'DLL_MATHEMATICS 6_Q1_W3.pdf', '2015'),
(6, 'DLL_MATHEMATICS 6_Q1_W4.pdf', '2019-03-22 07:04:31', 'DLL_MATHEMATICS 6_Q1_W4.pdf', '2014'),
(7, 'DLL_MATHEMATICS 6_Q1_W5.pdf', '2019-03-22 07:04:33', 'DLL_MATHEMATICS 6_Q1_W5.pdf', '2016'),
(9, 'Yahoo Mail - Re_ update.pdf', '2019-03-25 08:27:27', 'Yahoo Mail - Re_ update.pdf', '2019'),
(10, 'Yahoo Mail - Re_ update.pdf', '2019-03-25 11:43:45', 'Yahoo Mail - Re_ update.pdf', '2019'),
(11, 'Yahoo Mail - Re_ update.pdf', '2020-03-25 11:46:30', 'Yahoo Mail - Re_ update.pdf', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `clm_upload_lesson`
--

CREATE TABLE `clm_upload_lesson` (
  `upload_id` int(11) NOT NULL,
  `the_file` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `file_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clm_upload_lesson`
--

INSERT INTO `clm_upload_lesson` (`upload_id`, `the_file`, `date`, `file_name`) VALUES
(1, '', '2019-03-12 11:22:49', '');

-- --------------------------------------------------------

--
-- Table structure for table `ct_activity`
--

CREATE TABLE `ct_activity` (
  `activity_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `total_Item` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_for_teacher_act` varchar(10) NOT NULL,
  `quarter` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ct_activity`
--

INSERT INTO `ct_activity` (`activity_id`, `name`, `description`, `total_Item`, `date`, `id_for_teacher_act`, `quarter`) VALUES
(1, 'Activity 01', 'Algebra', '10', '2019-03-18 18:49:11', '14', '1'),
(2, 'Activity 02', 'Algorithm', '15', '2019-03-18 18:49:13', '14', '1'),
(3, 'Activity 03', 'Subtraction', '5', '2019-03-18 18:49:15', '14', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ct_activity_questions`
--

CREATE TABLE `ct_activity_questions` (
  `question_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `question_type` int(11) NOT NULL,
  `correct_answer` varchar(100) NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ct_activity_questions`
--

INSERT INTO `ct_activity_questions` (`question_id`, `activity_id`, `question`, `question_type`, `correct_answer`, `a`, `b`, `c`, `d`) VALUES
(1, 3, '2 - 1 = ?', 1, 'A', '1', '2', '4', '3'),
(2, 3, '5 - 3 = ?', 1, 'B', '22', '2', '4', '9'),
(3, 3, '3 - 1 is equal to 2.', 2, 'A', '', '', '', ''),
(4, 3, '5 - 2 is equal to 2.', 2, 'B', '', '', '', ''),
(5, 3, '10 - 5 - 1 = ?', 1, 'A', '4', '44', '444', '4444'),
(6, 2, 'cxcxc', 2, 'A', '', '', '', ''),
(7, 2, 'Computerized Assesment Learning in _____.', 3, 'Mathematics', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ct_activity_records`
--

CREATE TABLE `ct_activity_records` (
  `record_id` int(11) NOT NULL,
  `student` varchar(100) NOT NULL,
  `score` varchar(100) NOT NULL,
  `items` varchar(100) NOT NULL,
  `date_activity_taken` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `activity_id` varchar(100) NOT NULL,
  `quarter` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ct_activity_records`
--

INSERT INTO `ct_activity_records` (`record_id`, `student`, `score`, `items`, `date_activity_taken`, `activity_id`, `quarter`) VALUES
(4, '3', '2', '5', '2019-03-18 18:03:25', '3', '1'),
(5, '15', '5', '5', '2019-03-21 06:24:06', '3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ct_addto`
--

CREATE TABLE `ct_addto` (
  `addto_ID` int(11) NOT NULL,
  `sectionID` varchar(5) NOT NULL,
  `sectionname` varchar(50) NOT NULL,
  `quarter` varchar(5) NOT NULL,
  `quizID` varchar(5) NOT NULL,
  `testid` varchar(5) NOT NULL,
  `examid` varchar(5) NOT NULL,
  `assid` varchar(5) NOT NULL,
  `actid` varchar(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ct_addto`
--

INSERT INTO `ct_addto` (`addto_ID`, `sectionID`, `sectionname`, `quarter`, `quizID`, `testid`, `examid`, `assid`, `actid`, `date`) VALUES
(24, '4', 'Ruby', '1', '18', '', '', '', '', '2019-03-25'),
(25, '4', 'Ruby', '1', '17', '', '', '', '', '2019-03-25'),
(26, '4', 'Ruby', '1', '', '', '6', '', '', '2019-03-25'),
(27, '1', 'Emerald', '1', '', '', '1', '', '', '2019-03-27');

-- --------------------------------------------------------

--
-- Table structure for table `ct_assignment`
--

CREATE TABLE `ct_assignment` (
  `assignment_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `total_Item` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_for_teacher_as` varchar(10) NOT NULL,
  `quarter` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ct_assignment`
--

INSERT INTO `ct_assignment` (`assignment_id`, `name`, `description`, `total_Item`, `date`, `id_for_teacher_as`, `quarter`) VALUES
(1, 'Assignment 01', 'Quadratic Equations', '10', '2019-03-18 18:57:59', '14', '1'),
(2, 'Assignment 02', 'PEMDAS', '5', '2019-03-18 18:58:06', '14', '1'),
(4, 'Assignment 03', 'adsfasdf', '20', '2019-03-18 18:57:51', '14', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ct_assignment_questions`
--

CREATE TABLE `ct_assignment_questions` (
  `question_id` int(11) NOT NULL,
  `assignment_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `question_type` int(11) NOT NULL,
  `correct_answer` varchar(100) NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ct_assignment_questions`
--

INSERT INTO `ct_assignment_questions` (`question_id`, `assignment_id`, `question`, `question_type`, `correct_answer`, `a`, `b`, `c`, `d`) VALUES
(1, 2, '1 x 1 + 2 = ?', 1, 'A', '4', '5', '7', '8'),
(2, 2, '1 + 2 - 3 x 0 = ?', 1, 'B', '3', '0', '5', '6'),
(3, 2, '1 x 1 x 2 + 4 / 2  is equal to 3.', 2, 'A', '', '', '', ''),
(4, 2, '15 / 5 x 1 + 2 = ?', 1, 'A', '5', '15', '20', '10'),
(5, 2, 'PEMDAS means?', 1, 'A', 'Parenthesis Exponent Multiplication Division Addition Subtraction', 'Parenthesis Especial Multiplication Division Addition Subtraction', 'Problem Exponent Multiplication Division Addition Subtraction', 'Problem Especial Multiplication Division Addition Subtraction');

-- --------------------------------------------------------

--
-- Table structure for table `ct_assignment_records`
--

CREATE TABLE `ct_assignment_records` (
  `record_id` int(11) NOT NULL,
  `student` varchar(100) NOT NULL,
  `score` varchar(100) NOT NULL,
  `items` varchar(100) NOT NULL,
  `date_assignment_taken` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `assignment_id` varchar(100) NOT NULL,
  `quarter` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ct_assignment_records`
--

INSERT INTO `ct_assignment_records` (`record_id`, `student`, `score`, `items`, `date_assignment_taken`, `assignment_id`, `quarter`) VALUES
(2, '3', '5', '5', '2019-03-19 03:13:39', '2', '1'),
(3, '15', '4', '5', '2019-03-21 06:24:00', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ct_examination`
--

CREATE TABLE `ct_examination` (
  `exam_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `total_Item` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_for_teacher_exam` varchar(10) NOT NULL,
  `quarter` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ct_examination`
--

INSERT INTO `ct_examination` (`exam_id`, `name`, `description`, `total_Item`, `date`, `id_for_teacher_exam`, `quarter`) VALUES
(1, 'Examination 01', 'Algebra', '50', '2019-03-18 18:56:24', '14', '1'),
(2, 'Examination 02', 'Ratio & Proportion', '50', '2019-03-18 18:56:26', '14', '1'),
(3, 'Examination 03', 'Fractions', '50', '2019-03-18 18:56:28', '14', '1'),
(4, 'Examination 04', 'Division', '5', '2019-03-18 18:56:31', '14', '1'),
(5, 'Examination 05', 'mathjestica', '20', '2019-03-18 18:56:55', '14', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ct_exam_questions`
--

CREATE TABLE `ct_exam_questions` (
  `question_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `question_type` int(11) NOT NULL,
  `correct_answer` varchar(100) NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ct_exam_questions`
--

INSERT INTO `ct_exam_questions` (`question_id`, `exam_id`, `question`, `question_type`, `correct_answer`, `a`, `b`, `c`, `d`) VALUES
(1, 4, '10 dived by 2 is equal to 5. ', 2, 'A', '', '', '', ''),
(2, 4, '20 dived by 2 = ?', 1, 'B', '2', '10', '5', '15'),
(3, 4, '2 dived by 2 = ? ', 1, 'C', '1', '2', '0', '3'),
(4, 4, '15 dived by 3 is equal to 3.', 2, 'A', '', '', '', ''),
(5, 4, '0 divided by 5 is equal to 0.', 2, 'A', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ct_exam_records`
--

CREATE TABLE `ct_exam_records` (
  `record_id` int(11) NOT NULL,
  `student` varchar(100) NOT NULL,
  `score` varchar(100) NOT NULL,
  `items` varchar(100) NOT NULL,
  `date_exam_taken` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `exam_id` varchar(100) NOT NULL,
  `quarter` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ct_generate_code`
--

CREATE TABLE `ct_generate_code` (
  `generate_id` int(11) NOT NULL,
  `code_generated` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `section_id` varchar(5) NOT NULL,
  `teacher_id` varchar(5) NOT NULL,
  `status` enum('deactivate','activate') NOT NULL,
  `quarter` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ct_generate_code`
--

INSERT INTO `ct_generate_code` (`generate_id`, `code_generated`, `date`, `section_id`, `teacher_id`, `status`, `quarter`) VALUES
(13, 'MQ-5566148', '2019-03-28', '1', '14', 'activate', '1'),
(14, 'MQ-3005859', '2019-04-01', '4', '1', 'activate', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ct_quiz`
--

CREATE TABLE `ct_quiz` (
  `quiz_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `total_Item` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_for_teacher_quiz` varchar(10) NOT NULL,
  `quarter` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ct_quiz_questions`
--

CREATE TABLE `ct_quiz_questions` (
  `question_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `question_type` int(11) NOT NULL,
  `correct_answer` varchar(250) NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ct_quiz_questions`
--

INSERT INTO `ct_quiz_questions` (`question_id`, `quiz_id`, `question`, `question_type`, `correct_answer`, `a`, `b`, `c`, `d`) VALUES
(1, 10, 'ang password kay?', 1, 'A', 'asdf', 'xcv', 'ert', 'dfg'),
(3, 10, 'TAma or mali?', 2, 'B', '', '', '', ''),
(9, 1, 'anyare?', 1, 'A', 'gumana', 'di gumana', 'gg na', 'boom'),
(11, 3, 'zxzxzxzxzx', 1, 'A', 'xzx', 'zxz', 'zxzx', 'zxzx'),
(12, 15, '1 + 1 = ?', 1, 'A', '2', '3', '4', '5'),
(13, 15, '1 + 1 is equal to 5', 2, 'B', '', '', '', ''),
(14, 15, '2 + 3 = ?', 1, 'C', '4', '12', '5', '7'),
(15, 15, '2 + 3 is equal to 5', 2, 'A', '', '', '', ''),
(16, 15, '1 + 2 + 3 = ?', 1, 'B', '9', '6', '12', '8'),
(18, 10, 'fdsfdsf', 2, 'A', '', '', '', ''),
(20, 10, 'Kilay is __________?', 3, 'life', '', '', '', ''),
(21, 17, '1 + 5 =', 1, '', '6', '4', '2', '1'),
(22, 18, 'What is the nearest ,ountain', 1, '', 'Apo', 'Lolo', 'Kuya', 'ate'),
(23, 18, 'Kinsay nangutot ? ____', 3, 'Hucamis', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ct_quiz_records`
--

CREATE TABLE `ct_quiz_records` (
  `record_id` int(11) NOT NULL,
  `student` varchar(100) NOT NULL,
  `score` varchar(50) NOT NULL,
  `items` varchar(50) NOT NULL,
  `date_quiz_taken` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `quiz_id` varchar(10) NOT NULL,
  `quarter` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ct_test`
--

CREATE TABLE `ct_test` (
  `test_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `total_Item` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_for_teacher_test` varchar(10) NOT NULL,
  `quarter` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ct_test`
--

INSERT INTO `ct_test` (`test_id`, `name`, `description`, `total_Item`, `date`, `id_for_teacher_test`, `quarter`) VALUES
(1, 'Test 01', 'Algebra', '10', '2019-03-18 18:53:24', '14', '1'),
(2, 'Test 02', 'Multiplication', '5', '2019-03-18 18:53:25', '14', '1'),
(3, 'Test 03', 'Sample', '20', '2019-03-18 18:53:47', '14', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ct_test_questions`
--

CREATE TABLE `ct_test_questions` (
  `question_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `question_type` int(11) NOT NULL,
  `correct_answer` varchar(100) NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ct_test_questions`
--

INSERT INTO `ct_test_questions` (`question_id`, `test_id`, `question`, `question_type`, `correct_answer`, `a`, `b`, `c`, `d`) VALUES
(1, 2, '1 x 1 = ?', 1, 'C', '12', '2', '1', '0'),
(3, 2, '1 x 2 is equal to 3.', 2, 'B', '', '', '', ''),
(4, 2, '5 x 1 = ?', 1, 'A', '5', '2', '54', '8'),
(5, 2, '1 x 3 is equal to 3.', 2, 'A', '', '', '', ''),
(6, 2, '5 x 2 = ?', 1, 'A', '10', '22', '15', '5'),
(7, 2, 'Happy ______?', 3, 'Birthday', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ct_test_records`
--

CREATE TABLE `ct_test_records` (
  `record_id` int(11) NOT NULL,
  `student` varchar(100) NOT NULL,
  `score` varchar(100) NOT NULL,
  `items` varchar(100) NOT NULL,
  `date_test_taken` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `test_id` varchar(100) NOT NULL,
  `quarter` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ct_test_records`
--

INSERT INTO `ct_test_records` (`record_id`, `student`, `score`, `items`, `date_test_taken`, `test_id`, `quarter`) VALUES
(2, '3', '1', '5', '2019-03-18 18:02:52', '2', '1'),
(3, '15', '4', '5', '2019-03-21 06:23:44', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ct_written_task`
--

CREATE TABLE `ct_written_task` (
  `written_id` int(11) NOT NULL,
  `student_ID` varchar(5) NOT NULL,
  `score` varchar(10) NOT NULL,
  `section` varchar(5) NOT NULL,
  `quarter` varchar(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ct_written_task`
--

INSERT INTO `ct_written_task` (`written_id`, `student_ID`, `score`, `section`, `quarter`, `date`) VALUES
(13, '5', '20', '1', '1', '2019-03-26'),
(14, '5', '20', '1', '2', '2019-03-26'),
(15, '5', '20', '1', '3', '2019-03-26');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `player_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `score` varchar(10) NOT NULL,
  `quarter` varchar(50) NOT NULL,
  `missed` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `chapter` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_id` int(11) NOT NULL,
  `unit_number` varchar(50) NOT NULL,
  `unit_title` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `unit_number`, `unit_title`, `date`) VALUES
(1, 'Unit 1', 'Algebra', '2019-02-09 06:53:37'),
(2, 'Unit 2', 'Geometry', '2019-02-09 06:11:38'),
(3, 'Unit 3', 'Trigonometry', '2019-02-09 06:11:50'),
(4, 'Unit 4', 'Calculus', '2019-02-09 06:34:19'),
(6, 'Unit 5', 'hahah', '2019-02-09 06:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `unit_chapter`
--

CREATE TABLE `unit_chapter` (
  `chapter_id` int(11) NOT NULL,
  `chapter_number` varchar(50) NOT NULL,
  `chapter_title` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `unit_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_chapter`
--

INSERT INTO `unit_chapter` (`chapter_id`, `chapter_number`, `chapter_title`, `date`, `unit_id`) VALUES
(1, 'Chapter 1', 'Quadratic Equations', '2019-02-09 07:23:37', 'Unit 1'),
(2, 'Chapter 2', 'Quadratic Functions', '2019-02-09 07:37:13', 'Unit 1'),
(3, 'Chapter 3', 'sss', '2019-02-15 04:02:08', 'Unit 1'),
(4, 'Chapter 4', 'dsdsd', '2019-02-28 08:59:23', 'Unit 1'),
(8, 'Chapter 5', 'hahah', '2018-03-24 11:18:58', 'Unit 1'),
(9, 'Chapter 6', 'test', '2018-03-24 11:56:48', 'Unit 1'),
(10, 'Chapter 7', 'Krug', '2019-03-25 11:50:23', 'Unit 1'),
(11, 'Chapter 8', 'dsdsds', '2019-03-26 07:55:35', 'Unit 1'),
(14, 'Chapter 1', 'kffnknd', '2019-03-26 08:06:44', 'Unit 3'),
(15, 'Chapter 2', 'dsdsdsd', '2019-03-26 08:07:55', 'Unit 3'),
(16, 'Chapter 1', 'Sample02', '2019-03-26 08:25:11', 'Unit 2'),
(17, 'Chapter 3', 'sample', '2019-03-26 08:28:58', 'Unit 3');

-- --------------------------------------------------------

--
-- Table structure for table `unit_lesson`
--

CREATE TABLE `unit_lesson` (
  `lesson_id` int(11) NOT NULL,
  `lesson_content` text NOT NULL,
  `lesson_title` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `unitid` varchar(50) NOT NULL,
  `chapterid` varchar(50) NOT NULL,
  `file_type` varchar(10) NOT NULL,
  `series_year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_lesson`
--

INSERT INTO `unit_lesson` (`lesson_id`, `lesson_content`, `lesson_title`, `date`, `unitid`, `chapterid`, `file_type`, `series_year`) VALUES
(26, 'sdasdasdsad', 'aaasas', '2019-03-26 08:25:23', 'Unit 2', 'Chapter 1', '', ''),
(28, 'TR - Agricultural Crops Production NC III.pdf', '', '2019-03-26 08:26:33', 'Unit 2', 'Chapter 1', 'PDF', '2019'),
(29, 'Yahoo Mail - Re_ update.pdf', '', '2019-03-26 08:28:12', 'Unit 2', 'Chapter 1', 'PDF', '2019'),
(30, 'csdsdsdsdsdsd', 'dssdsdsdsd', '2019-03-26 08:29:13', 'Unit 3', 'Chapter 3', '', ''),
(31, 'TR - Agricultural Crops Production NC III.pdf', '', '2019-03-26 08:29:30', 'Unit 3', 'Chapter 3', 'PDF', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `usr_admin`
--

CREATE TABLE `usr_admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usr_admin`
--

INSERT INTO `usr_admin` (`admin_id`, `username`, `password`, `lastname`, `firstname`, `middlename`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `usr_parent`
--

CREATE TABLE `usr_parent` (
  `pr_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `profile_img` varchar(200) NOT NULL,
  `pr_entry` varchar(50) NOT NULL,
  `pr_entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pr_stat` varchar(50) NOT NULL,
  `pr_info` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usr_parent`
--

INSERT INTO `usr_parent` (`pr_id`, `username`, `password`, `lastname`, `firstname`, `middlename`, `profile_img`, `pr_entry`, `pr_entry_date`, `pr_stat`, `pr_info`) VALUES
(1, 'parent', 'parent', 'parent', 'parent', 'parent', '', '', '2019-02-09 04:14:42', 'Registered', ''),
(2, 'parent00', 'parent00', 'parent00', 'parent00', 'parent00', '', '', '2019-02-28 08:52:00', 'Registered', '');

-- --------------------------------------------------------

--
-- Table structure for table `usr_student`
--

CREATE TABLE `usr_student` (
  `st_id` int(11) NOT NULL,
  `LRNnumber` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `section_id` varchar(50) NOT NULL,
  `profile_img` varchar(200) NOT NULL,
  `st_entry` varchar(50) NOT NULL,
  `st_entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `st_stat` varchar(50) NOT NULL,
  `st_info` varchar(300) NOT NULL,
  `seat_num` varchar(10) NOT NULL,
  `sex` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usr_student`
--

INSERT INTO `usr_student` (`st_id`, `LRNnumber`, `username`, `password`, `lastname`, `firstname`, `middlename`, `section_id`, `profile_img`, `st_entry`, `st_entry_date`, `st_stat`, `st_info`, `seat_num`, `sex`) VALUES
(1, '1176310880019', 'student', 'student', 'student', 'student', 'student', '1', 'user.png', 'Active', '2019-03-09 05:37:16', 'Registered', '', '1', ''),
(2, '1187491880020', 'jojei', 'jojei', 'jojie', 'jojie', 'jojie', '1', 'user.png', 'Active', '2019-03-09 05:50:46', 'Registered', '', '4', ''),
(3, '654827965482', 'kent', 'kent', 'kent', 'kent', 'kent', '1', 'user.png', 'Active', '2019-03-09 05:50:48', 'Registered', '', '5', ''),
(4, '15002323', 'student00', 'student00', 'student00', 'student00', 'student00', '1', 'user.png', 'Active', '2019-03-09 05:50:51', 'Registered', '', '6', ''),
(5, '423423424', 'adoe', 'password', 'aaa', 'aaa', 'aaa', '1', 'user.png', 'Active', '2019-03-23 19:28:16', 'Registered', '', '2', ''),
(6, '42443423423423', 'bdoe', 'password', 'bbb', 'bbb', 'bbb', '1', 'user.png', 'Active', '2019-03-23 19:28:24', 'Registered', '', '7', ''),
(7, '423423424', 'cdoe', 'password', 'ccc', 'ccc', 'ccc', '1', 'user.png', 'Active', '2019-03-23 19:28:34', 'Registered', '', '3', ''),
(8, '42443423423423', 'ddoe', 'password', 'ddd', 'd', 'd', '1', 'user.png', 'Active', '2019-03-23 19:28:38', 'Registered', '', '8', ''),
(9, '675676868', 'edoe', 'password', 'eee', 'e', 'e', '1', 'user.png', 'Active', '2019-03-23 19:28:42', 'Registered', '', '9', ''),
(10, '9080808080', 'fdoe', 'password', 'fff', 'f', 'f', '1', 'user.png', 'Active', '2019-03-23 19:28:45', 'Registered', '', '10', ''),
(11, '6577453453453', 'gdoe', 'password', 'ggg', 'g', 'g', '1', 'user.png', 'Active', '2019-03-23 19:28:49', 'Registered', '', '11', ''),
(12, '32323100053', 'hdoe', 'password', 'hhh', 'h', 'h', '1', 'user.png', 'Active', '2018-03-24 11:47:28', 'Registered', '', '12', ''),
(13, '3243423', 'i', 'password', 'aiii', 'i', 'i', '1', 'user.png', 'Active', '2018-03-24 11:47:46', 'Registered', '', '13', ''),
(15, '178920', 'Ruby01', '123', 'Abuton', 'Carl', 'F', '4', 'user.png', 'Active', '2019-03-26 17:06:23', 'Registered', '', '2', 'Male'),
(16, '178921', 'Cedar02', '123', 'Agon', 'Chris Paul', '-', '4', 'user.png', 'Active', '2019-03-26 17:40:48', 'Registered', '', '', 'Male'),
(17, '178922', 'Cedar03', '123', 'Albon', 'Jimmy', 'J', '4', 'user.png', 'Active', '2019-03-14 17:33:42', 'Registered', '', '', ''),
(18, '178923', 'Cedar04', '123', 'Balmayo', 'Ronnian', 'T', '4', 'user.png', 'Active', '2019-03-14 17:33:46', 'Registered', '', '', ''),
(19, '178924', 'Cedar05', '123', 'Bibat', 'Hidetu', 'C', '4', 'user.png', 'Active', '2019-03-14 17:33:52', 'Registered', '', '', ''),
(20, '178925', 'Cedar06', '123', 'Cababat', 'Jasmin', 'S', '4', 'user.png', 'Active', '2019-03-14 17:33:55', 'Registered', '', '', ''),
(21, '178926', 'Cedar07', '123', 'Darunday', 'Jelinnah', 'M', '4', 'user.png', 'Active', '2019-03-14 17:33:59', 'Registered', '', '', ''),
(22, '178927', 'Cedar08', '123', 'Geverola', 'Jonna Mae', '-', '4', 'user.png', 'Active', '2019-03-14 17:34:03', 'Registered', '', '', ''),
(23, '178928', 'Cedar09', '123', 'Mission', 'Kristine', '-', '4', 'user.png', 'Active', '2019-03-14 17:34:06', 'Registered', '', '', ''),
(24, '178929', 'Cedar10', '123', 'Qiumco', 'Jesmen', 'A', '4', 'user.png', 'Active', '2019-03-14 17:34:10', 'Registered', '', '', ''),
(25, '178930', 'Ruby11', '123', 'Quial', 'Jlo', 'M', '4', 'user.png', 'Active', '2019-03-15 10:04:44', 'Registered', '', '', ''),
(26, '178931', 'Ruby12', '123', 'Revilla', 'Andrea Mae', 'A', '4', 'user.png', 'Active', '2019-03-15 10:05:06', 'Registered', '', '', ''),
(27, '15-000655', 'ass', 'ass', 'Min', 'Yung', 'Park', '5', 'user.png', '', '2019-03-25 02:08:51', 'Registered', '', '', ''),
(28, '11111', 'dabe', 'dabe', 'Sunico', 'Dave', 'Lopez', '4', 'user.png', '', '2019-03-25 02:24:01', 'Registered', '', '', ''),
(29, '111111111111', 'wer', 'wer', 'Cute', 'Ako', 'Syempre', '4', 'user.png', '', '2019-03-25 11:38:04', 'Registered', '', '', ''),
(30, '232323', 'try', 'try', 'try', 'try', 'try', '4', 'user.png', 'Active', '2019-03-26 17:35:26', 'Registered', '', '', 'Male'),
(31, '232323', 'try2', 'try2', 'try2', 'try2', 'try2', '4', 'user.png', 'Active', '2019-03-26 17:37:21', 'Registered', '', '', 'Female'),
(32, '232323', 'try3', 'try3', 'try3', 'try3', 'try3', '4', 'user.png', 'Active', '2019-03-26 17:39:47', 'Registered', '', '', 'Female'),
(33, '15-000571', 'DAVID', 'password', 'Tungala', 'David Sam', 'Suarez', '7', 'user.png', 'Active', '2019-03-26 17:45:29', 'Registered', '', '', 'Male'),
(34, '15-000572', 'JOJIE', 'jojie', 'Avergonzado', 'Jojie', 'Ayag', '7', 'user.png', 'Active', '2019-03-26 17:45:34', 'Registered', '', '', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `usr_teacher`
--

CREATE TABLE `usr_teacher` (
  `tc_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `profile_img` varchar(200) NOT NULL,
  `tc_entry` varchar(50) NOT NULL,
  `tc_entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tc_status` varchar(50) NOT NULL,
  `tc_info` varchar(300) NOT NULL,
  `section_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usr_teacher`
--

INSERT INTO `usr_teacher` (`tc_id`, `username`, `password`, `lastname`, `firstname`, `middlename`, `profile_img`, `tc_entry`, `tc_entry_date`, `tc_status`, `tc_info`, `section_id`) VALUES
(1, 'teacher', 'teacher', 'Acedillo', 'Erwin', 'P.', 'user.png', '', '2019-04-01 05:24:29', 'Registered', '', '4'),
(2, 'test01', 'test01', 'test01', 'test01', 'test01', '', '', '2019-03-26 15:43:00', 'Registered', '', '6'),
(3, 'test02', 'test02', 'test02', 'test02', 'test02', '', '', '2019-03-07 15:12:37', 'Registered', '', ''),
(4, 'test03', 'test03', 'test03', 'test03', 'test03', '', '', '2019-03-07 15:12:37', 'Registered', '', ''),
(5, 'test04', 'test04', 'test04', 'test04', 'test04', '', '', '2019-03-07 15:12:37', 'Registered', '', ''),
(6, 'test05', 'test05', 'test05', 'test05', 'test05', '', '', '2019-03-07 15:12:37', 'Registered', '', ''),
(7, 'test06', 'test06', 'test06', 'test06', 'test06', '', '', '2019-03-07 15:12:37', 'Registered', '', ''),
(8, 'test07', 'test07', 'test07', 'test07', 'test07', '', '', '2019-03-07 15:12:37', 'Registered', '', ''),
(9, 'test08', 'test08', 'test08', 'test08', 'test08', '', '', '2019-03-07 17:48:01', 'Registered', '', '3'),
(10, 'test10', 'test10', 'test10', 'test10', 'test10', '', '', '2019-03-07 15:12:37', 'Registered', '', ''),
(11, 'davesunico', 'password', 'Sunico', 'Dave', 'L.', '', '', '2019-03-07 15:16:03', 'Registered', '', '2'),
(12, 'adminka', 'ADMIN', 'ADMIN', 'ADMIN', 'ADMIN', '', '', '2019-03-07 15:14:55', 'Registered', '', ''),
(13, 'admin', 'admin', 'admin', 'admin', 'admin', '', '', '2019-03-07 15:12:37', 'Registered', '', ''),
(14, 'Melchor', 'melchor', 'Relacion', 'Melchor', 'B.', 'Relacion, M..png', '', '2019-03-23 19:20:02', 'Registered', '', '1'),
(15, 'teacher00', 'teacher00', 'teacher00', 'teacher00', 'teacher00', '', '', '2019-03-07 15:12:37', 'Registered', '', ''),
(16, 'aaa', 'aaaa', 'aaa', 'aaa', 'aaa', 'user.png', '', '2019-03-20 19:16:06', 'Registered', '', ''),
(18, 'jie', 'jie', 'jie', 'jie', 'jie', 'Untitled.png', '', '2019-03-23 19:19:59', 'Registered', '', '6'),
(19, 'dd', 'dd', 'dd', 'dd', 'dd', 'user.png', '', '2019-03-25 01:10:51', 'Unregistered', '', ''),
(20, 'qwerty', 'qwerty', 'Lee', 'Jung', 'Suk', 'user.png', '', '2019-03-25 02:07:35', 'Registered', '', '5'),
(21, 'tt', 'tt', 'Pogi', 'Ako', 'Awiee', 'user.png', '', '2019-03-25 11:35:56', 'Registered', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_to_ct_generate_code`
--
ALTER TABLE `add_to_ct_generate_code`
  ADD PRIMARY KEY (`id_generate_code`);

--
-- Indexes for table `badge`
--
ALTER TABLE `badge`
  ADD PRIMARY KEY (`badge_id`);

--
-- Indexes for table `clm_answer`
--
ALTER TABLE `clm_answer`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `clm_attendance`
--
ALTER TABLE `clm_attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `clm_grades`
--
ALTER TABLE `clm_grades`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `clm_quarter`
--
ALTER TABLE `clm_quarter`
  ADD PRIMARY KEY (`quarter_id`);

--
-- Indexes for table `clm_question`
--
ALTER TABLE `clm_question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `clm_section`
--
ALTER TABLE `clm_section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `clm_sholastic_record`
--
ALTER TABLE `clm_sholastic_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clm_upload_dll`
--
ALTER TABLE `clm_upload_dll`
  ADD PRIMARY KEY (`dll_upload_id`);

--
-- Indexes for table `clm_upload_lesson`
--
ALTER TABLE `clm_upload_lesson`
  ADD PRIMARY KEY (`upload_id`);

--
-- Indexes for table `ct_activity`
--
ALTER TABLE `ct_activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `ct_activity_questions`
--
ALTER TABLE `ct_activity_questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `ct_activity_records`
--
ALTER TABLE `ct_activity_records`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `ct_addto`
--
ALTER TABLE `ct_addto`
  ADD PRIMARY KEY (`addto_ID`);

--
-- Indexes for table `ct_assignment`
--
ALTER TABLE `ct_assignment`
  ADD PRIMARY KEY (`assignment_id`);

--
-- Indexes for table `ct_assignment_questions`
--
ALTER TABLE `ct_assignment_questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `ct_assignment_records`
--
ALTER TABLE `ct_assignment_records`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `ct_examination`
--
ALTER TABLE `ct_examination`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `ct_exam_questions`
--
ALTER TABLE `ct_exam_questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `ct_exam_records`
--
ALTER TABLE `ct_exam_records`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `ct_generate_code`
--
ALTER TABLE `ct_generate_code`
  ADD PRIMARY KEY (`generate_id`);

--
-- Indexes for table `ct_quiz`
--
ALTER TABLE `ct_quiz`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `ct_quiz_questions`
--
ALTER TABLE `ct_quiz_questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `ct_quiz_records`
--
ALTER TABLE `ct_quiz_records`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `ct_test`
--
ALTER TABLE `ct_test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `ct_test_questions`
--
ALTER TABLE `ct_test_questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `ct_test_records`
--
ALTER TABLE `ct_test_records`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `ct_written_task`
--
ALTER TABLE `ct_written_task`
  ADD PRIMARY KEY (`written_id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `unit_chapter`
--
ALTER TABLE `unit_chapter`
  ADD PRIMARY KEY (`chapter_id`);

--
-- Indexes for table `unit_lesson`
--
ALTER TABLE `unit_lesson`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `usr_admin`
--
ALTER TABLE `usr_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `usr_parent`
--
ALTER TABLE `usr_parent`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `usr_student`
--
ALTER TABLE `usr_student`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `usr_teacher`
--
ALTER TABLE `usr_teacher`
  ADD PRIMARY KEY (`tc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_to_ct_generate_code`
--
ALTER TABLE `add_to_ct_generate_code`
  MODIFY `id_generate_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `badge`
--
ALTER TABLE `badge`
  MODIFY `badge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `clm_answer`
--
ALTER TABLE `clm_answer`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `clm_attendance`
--
ALTER TABLE `clm_attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `clm_grades`
--
ALTER TABLE `clm_grades`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clm_quarter`
--
ALTER TABLE `clm_quarter`
  MODIFY `quarter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clm_question`
--
ALTER TABLE `clm_question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `clm_section`
--
ALTER TABLE `clm_section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `clm_sholastic_record`
--
ALTER TABLE `clm_sholastic_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `clm_upload_dll`
--
ALTER TABLE `clm_upload_dll`
  MODIFY `dll_upload_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `clm_upload_lesson`
--
ALTER TABLE `clm_upload_lesson`
  MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ct_activity`
--
ALTER TABLE `ct_activity`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ct_activity_questions`
--
ALTER TABLE `ct_activity_questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ct_activity_records`
--
ALTER TABLE `ct_activity_records`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ct_addto`
--
ALTER TABLE `ct_addto`
  MODIFY `addto_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `ct_assignment`
--
ALTER TABLE `ct_assignment`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ct_assignment_questions`
--
ALTER TABLE `ct_assignment_questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ct_assignment_records`
--
ALTER TABLE `ct_assignment_records`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ct_examination`
--
ALTER TABLE `ct_examination`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ct_exam_questions`
--
ALTER TABLE `ct_exam_questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ct_exam_records`
--
ALTER TABLE `ct_exam_records`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ct_generate_code`
--
ALTER TABLE `ct_generate_code`
  MODIFY `generate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ct_quiz`
--
ALTER TABLE `ct_quiz`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ct_quiz_questions`
--
ALTER TABLE `ct_quiz_questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ct_quiz_records`
--
ALTER TABLE `ct_quiz_records`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ct_test`
--
ALTER TABLE `ct_test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ct_test_questions`
--
ALTER TABLE `ct_test_questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ct_test_records`
--
ALTER TABLE `ct_test_records`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ct_written_task`
--
ALTER TABLE `ct_written_task`
  MODIFY `written_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `unit_chapter`
--
ALTER TABLE `unit_chapter`
  MODIFY `chapter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `unit_lesson`
--
ALTER TABLE `unit_lesson`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `usr_admin`
--
ALTER TABLE `usr_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usr_parent`
--
ALTER TABLE `usr_parent`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usr_student`
--
ALTER TABLE `usr_student`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `usr_teacher`
--
ALTER TABLE `usr_teacher`
  MODIFY `tc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
