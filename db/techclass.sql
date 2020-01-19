-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 19, 2020 at 01:12 PM
-- Server version: 5.7.20
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techclass`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `act_id` int(11) NOT NULL,
  `act_items` int(11) NOT NULL,
  `act_cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`act_id`, `act_items`, `act_cid`) VALUES
(1, 25, 1),
(2, 20, 1),
(3, 50, 6);

-- --------------------------------------------------------

--
-- Table structure for table `act_score`
--

CREATE TABLE `act_score` (
  `acs_id` int(11) NOT NULL,
  `acs_sid` int(11) NOT NULL,
  `acs_acid` int(11) NOT NULL,
  `acs_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `act_score`
--

INSERT INTO `act_score` (`acs_id`, `acs_sid`, `acs_acid`, `acs_score`) VALUES
(1, 17, 1, 25),
(2, 15, 1, 25),
(3, 16, 1, 25),
(4, 14, 1, 24),
(5, 10, 1, 23),
(6, 18, 1, 24),
(7, 17, 2, 18),
(8, 15, 2, 19),
(9, 16, 2, 17),
(10, 14, 2, 16),
(11, 10, 2, 15),
(12, 18, 2, 19),
(13, 21, 3, 45);

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `ass_id` int(11) NOT NULL,
  `ass_items` int(11) NOT NULL,
  `ass_cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`ass_id`, `ass_items`, `ass_cid`) VALUES
(1, 10, 1),
(2, 20, 1),
(3, 20, 6),
(4, 50, 6),
(5, 40, 6);

-- --------------------------------------------------------

--
-- Table structure for table `assign_score`
--

CREATE TABLE `assign_score` (
  `as__id` int(11) NOT NULL,
  `as_sid` int(11) NOT NULL,
  `as_aid` int(11) NOT NULL,
  `as_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assign_score`
--

INSERT INTO `assign_score` (`as__id`, `as_sid`, `as_aid`, `as_score`) VALUES
(1, 17, 1, 10),
(2, 15, 1, 10),
(3, 16, 1, 10),
(4, 14, 1, 10),
(5, 10, 1, 10),
(6, 18, 1, 10),
(7, 17, 2, 15),
(8, 15, 2, 15),
(9, 16, 2, 15),
(10, 14, 2, 14),
(11, 10, 2, 13),
(12, 18, 2, 12),
(13, 21, 3, 10),
(14, 21, 4, 25),
(15, 21, 5, 15);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_section` varchar(10) NOT NULL,
  `c_code` varchar(8) NOT NULL,
  `c_sched` varchar(25) NOT NULL,
  `c_quiz` int(11) NOT NULL,
  `c_ass` int(11) NOT NULL,
  `c_pro` int(11) NOT NULL,
  `c_act` int(11) NOT NULL,
  `c_pre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_id`, `c_name`, `c_section`, `c_code`, `c_sched`, `c_quiz`, `c_ass`, `c_pro`, `c_act`, `c_pre`) VALUES
(1, 'Accounting 1', 'IT - B', 'dsfds', 'TF 7:30-10:30am', 30, 20, 10, 20, 20),
(2, 'Web Sevices', 'IT - B', 'aemnakar', 'W 1:30-6:30pm', 30, 10, 30, 10, 20),
(3, 'Capstone 1', 'IT - B', 'sdhfskdj', 'MH 4:30-6:00pm', 0, 0, 0, 0, 0),
(4, 'AI ', 'IT - B', 'hfjdshjf', 'MH 1:30-4:00pm', 0, 323, 323, 233, 323),
(5, 'Boys Dormitory', 'Room 10', 'secret', 'Everyday', 5, 5, 20, 35, 35),
(6, 'Simulation', 'IT-A', 'Defense', 'defdef', 25, 10, 20, 30, 15);

-- --------------------------------------------------------

--
-- Table structure for table `presentation`
--

CREATE TABLE `presentation` (
  `pre_id` int(11) NOT NULL,
  `pre_items` int(11) NOT NULL,
  `pre_cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `presentation`
--

INSERT INTO `presentation` (`pre_id`, `pre_items`, `pre_cid`) VALUES
(1, 100, 1),
(2, 50, 6);

-- --------------------------------------------------------

--
-- Table structure for table `pre_score`
--

CREATE TABLE `pre_score` (
  `pres_id` int(11) NOT NULL,
  `pres_sid` int(11) NOT NULL,
  `pres_pid` int(11) NOT NULL,
  `pres_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pre_score`
--

INSERT INTO `pre_score` (`pres_id`, `pres_sid`, `pres_pid`, `pres_score`) VALUES
(1, 17, 1, 88),
(2, 15, 1, 99),
(3, 16, 1, 77),
(4, 14, 1, 89),
(5, 10, 1, 78),
(6, 18, 1, 85),
(7, 21, 2, 50);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `pro_id` int(11) NOT NULL,
  `pro_items` int(11) NOT NULL,
  `pro_cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pro_id`, `pro_items`, `pro_cid`) VALUES
(1, 100, 1),
(2, 50, 6),
(3, 50, 6);

-- --------------------------------------------------------

--
-- Table structure for table `pro_score`
--

CREATE TABLE `pro_score` (
  `pros_id` int(11) NOT NULL,
  `pros_sid` int(11) NOT NULL,
  `pros_pid` int(11) NOT NULL,
  `pros_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pro_score`
--

INSERT INTO `pro_score` (`pros_id`, `pros_sid`, `pros_pid`, `pros_score`) VALUES
(1, 17, 1, 85),
(2, 15, 1, 74),
(3, 16, 1, 90),
(4, 14, 1, 90),
(5, 10, 1, 84),
(6, 18, 1, 75),
(7, 21, 2, 50),
(8, 21, 3, 30);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `q_id` int(11) NOT NULL,
  `q_topic` varchar(20) NOT NULL,
  `q_items` int(11) NOT NULL,
  `q_cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`q_id`, `q_topic`, `q_items`, `q_cid`) VALUES
(1, 'Nothin\'', 5, 1),
(2, 'AgainNo', 10, 1),
(3, 'Ambot', 20, 1),
(4, 'Anything', 25, 1),
(5, 'Tana', 25, 1),
(6, 'Pop Quiz', 5, 1),
(7, 'Nothing', 15, 2),
(8, 'Sample Quiz', 10, 1),
(9, 'tOPIC ', 15, 1),
(10, 'Top1', 20, 6),
(11, 'Top2', 30, 6),
(12, 'top3', 30, 6),
(13, 'dsada', 5, 1),
(14, 'ewan', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_score`
--

CREATE TABLE `quiz_score` (
  `qs_id` int(11) NOT NULL,
  `qs_sid` int(11) NOT NULL,
  `qs_qid` int(11) NOT NULL,
  `qs_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz_score`
--

INSERT INTO `quiz_score` (`qs_id`, `qs_sid`, `qs_qid`, `qs_score`) VALUES
(29, 17, 1, 1),
(30, 15, 1, 1),
(31, 16, 1, 1),
(32, 14, 1, 2),
(33, 10, 1, 3),
(34, 18, 1, 4),
(35, 17, 2, 9),
(36, 15, 2, 9),
(37, 16, 2, 9),
(38, 14, 2, 9),
(39, 10, 2, 9),
(40, 18, 2, 9),
(41, 17, 3, 20),
(42, 15, 3, 20),
(43, 16, 3, 20),
(44, 14, 3, 20),
(45, 10, 3, 20),
(46, 18, 3, 20),
(47, 17, 4, 21),
(48, 15, 4, 23),
(49, 16, 4, 24),
(50, 14, 4, 25),
(51, 10, 4, 21),
(52, 18, 4, 20),
(53, 17, 5, 22),
(54, 15, 5, 22),
(55, 16, 5, 22),
(56, 14, 5, 22),
(57, 10, 5, 22),
(58, 18, 5, 22),
(59, 17, 6, 3),
(60, 15, 6, 4),
(61, 16, 6, 3),
(62, 14, 6, 4),
(63, 10, 6, 5),
(64, 18, 6, 5),
(65, 9, 7, 15),
(66, 19, 7, 13),
(67, 20, 7, 14),
(68, 17, 8, 10),
(69, 15, 8, 10),
(70, 16, 8, 10),
(71, 14, 8, 10),
(72, 10, 8, 10),
(73, 18, 8, 10),
(74, 15, 9, 13),
(75, 16, 9, 13),
(76, 14, 9, 14),
(77, 10, 9, 15),
(78, 18, 9, 11),
(79, 21, 10, 10),
(80, 21, 11, 10),
(81, 21, 12, 20),
(82, 15, 13, 4),
(83, 16, 13, 0),
(84, 14, 13, 2),
(85, 10, 13, 1),
(86, 18, 13, 3),
(87, 15, 14, 5),
(88, 16, 14, 5),
(89, 14, 14, 5),
(90, 10, 14, 5),
(91, 18, 14, 5),
(92, 22, 14, 5);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(11) NOT NULL,
  `s_fname` varchar(20) NOT NULL,
  `s_mname` varchar(15) NOT NULL,
  `s_lname` varchar(15) NOT NULL,
  `s_gender` enum('M','F') NOT NULL,
  `s_cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_fname`, `s_mname`, `s_lname`, `s_gender`, `s_cid`) VALUES
(9, 'Mark ', 'Concepcion', 'Lambino', 'M', 2),
(10, 'Edmund', 'Concepcion', 'Lambino', 'M', 1),
(11, 'Angel Grace', 'Concepcion', 'Samiley', 'F', 3),
(12, 'Mark Christian', 'Concepcion', 'Lambino', 'M', 5),
(13, 'Ryan Christopher', 'Ortigaz', 'Ordeniza', 'M', 5),
(14, 'Danica', 'Ambot', 'Gomisong', 'F', 1),
(15, 'Cherry Mae Anne', 'Barcelona', 'Besin', 'F', 1),
(16, 'Harrison', 'PalaHubog', 'Dimitiman', 'M', 1),
(18, 'Fritzie', 'Aydontno', 'Mantiza', 'F', 1),
(19, 'Keith', 'Samuel', 'Winchester', 'M', 2),
(20, 'Mary', 'Campbell', 'Winchester', 'F', 2),
(21, 'Jana', 'Dela Victoria', 'Sybil', 'M', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_fname` varchar(20) NOT NULL,
  `u_mname` varchar(15) NOT NULL,
  `u_lname` varchar(15) NOT NULL,
  `u_uname` varchar(10) NOT NULL,
  `u_type` enum('Teacher','Student','Parent') NOT NULL,
  `u_createdate` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `u_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_fname`, `u_mname`, `u_lname`, `u_uname`, `u_type`, `u_createdate`, `u_password`) VALUES
(2, 'Mark Christian', 'Concepcion', 'Lambino', 'McChrist03', 'Student', '2018-05-23 07:34:47.067958', 'aemnakari');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`act_id`);

--
-- Indexes for table `act_score`
--
ALTER TABLE `act_score`
  ADD PRIMARY KEY (`acs_id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`ass_id`);

--
-- Indexes for table `assign_score`
--
ALTER TABLE `assign_score`
  ADD PRIMARY KEY (`as__id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `presentation`
--
ALTER TABLE `presentation`
  ADD PRIMARY KEY (`pre_id`);

--
-- Indexes for table `pre_score`
--
ALTER TABLE `pre_score`
  ADD PRIMARY KEY (`pres_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `pro_score`
--
ALTER TABLE `pro_score`
  ADD PRIMARY KEY (`pros_id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `quiz_score`
--
ALTER TABLE `quiz_score`
  ADD PRIMARY KEY (`qs_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `act_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `act_score`
--
ALTER TABLE `act_score`
  MODIFY `acs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `ass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `assign_score`
--
ALTER TABLE `assign_score`
  MODIFY `as__id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `presentation`
--
ALTER TABLE `presentation`
  MODIFY `pre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pre_score`
--
ALTER TABLE `pre_score`
  MODIFY `pres_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pro_score`
--
ALTER TABLE `pro_score`
  MODIFY `pros_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `quiz_score`
--
ALTER TABLE `quiz_score`
  MODIFY `qs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
