-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2022 at 07:01 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qcu_ereg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `firstname` varchar(55) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `avatar` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`id`, `username`, `password`, `firstname`, `lastname`, `avatar`) VALUES
(1500021, 'admin_mark', 'admin1234', 'Mark', 'Bacabis', 'profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin_activity`
--

CREATE TABLE `admin_activity` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `activities` varchar(255) NOT NULL,
  `date` varchar(55) NOT NULL,
  `time` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_activity`
--

INSERT INTO `admin_activity` (`id`, `username`, `activities`, `date`, `time`) VALUES
(1, 'qcu_admin', 'Approved Registration Number: 78493019', '2022-04-14', '14:00');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_status`
--

CREATE TABLE `applicant_status` (
  `id` int(11) NOT NULL,
  `reg_num` varchar(55) NOT NULL,
  `app_num` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `approved_applicant`
--

CREATE TABLE `approved_applicant` (
  `id` int(11) NOT NULL,
  `reg_num` varchar(55) NOT NULL,
  `app_num` varchar(55) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `birthdate` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `schedule` varchar(55) NOT NULL,
  `date_approval` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approved_applicant`
--

INSERT INTO `approved_applicant` (`id`, `reg_num`, `app_num`, `fullname`, `gender`, `birthdate`, `email`, `schedule`, `date_approval`) VALUES
(27, 'REG202201', 'APP202202', 'Mark Melvin E Bacabis ', 'M', '2022-05-18', ' mark.melvin.bacabis@gmail.com', '2020-05-16 1:00PM-2:00PM', '22-05-13 09:51:26 PM');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `StartTime` varchar(55) NOT NULL,
  `Slot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedID`, `Date`, `StartTime`, `Slot`) VALUES
(1, '2020-05-16', '9:00AM-10:00AM', 10),
(2, '2020-05-16', '10:00AM-11:00AM', 10),
(3, '2020-05-16', '12:00PM-1:00PM', 10),
(4, '2020-05-16', '1:00PM-2:00PM', 10),
(5, '2020-05-16', '2:00PM-3:00PM', 10),
(6, '2022-05-18', '9:00AM-10:00AM', 9),
(7, '2022-05-20', '9:00AM-10:00AM', 0),
(8, '2022-05-25', '9:00AM-10:00AM', 4);

-- --------------------------------------------------------

--
-- Table structure for table `stud_account`
--

CREATE TABLE `stud_account` (
  `id` int(11) NOT NULL,
  `app_num` varchar(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `stud_password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_account`
--

INSERT INTO `stud_account` (`id`, `app_num`, `email`, `stud_password`) VALUES
(23, 'APP202202', ' mark.melvin.bacabis@gmail.com', 'd@tIYHh1G$CK');

-- --------------------------------------------------------

--
-- Table structure for table `stud_address`
--

CREATE TABLE `stud_address` (
  `id` int(11) NOT NULL,
  `reg_num` varchar(55) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `houseNo` int(11) NOT NULL,
  `brgy` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_address`
--

INSERT INTO `stud_address` (`id`, `reg_num`, `zip_code`, `houseNo`, `brgy`, `city`) VALUES
(2, 'REG202202', 1119, 56, 'Matandang Balara', 'Quezon'),
(3, 'REG202201', 1111, 4242, 'wadaw', 'awda'),
(5, 'REG202203', 1111, 69, 'Hindi ko makita', 'Qc');

-- --------------------------------------------------------

--
-- Table structure for table `stud_application`
--

CREATE TABLE `stud_application` (
  `id` int(11) NOT NULL,
  `reg_num` varchar(55) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Middle_Name` varchar(55) NOT NULL,
  `Extension_Name` varchar(10) NOT NULL,
  `Complete_Address` varchar(255) NOT NULL,
  `Birthdate` date NOT NULL,
  `Birth_Place` varchar(100) NOT NULL,
  `Age` int(2) NOT NULL,
  `Sex` varchar(6) NOT NULL,
  `Civil_Status` varchar(8) NOT NULL,
  `Nationality` varchar(55) NOT NULL,
  `Religion` varchar(25) NOT NULL,
  `Mobile_Number` varchar(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `dor` varchar(55) NOT NULL,
  `month` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_application`
--

INSERT INTO `stud_application` (`id`, `reg_num`, `Last_Name`, `First_Name`, `Middle_Name`, `Extension_Name`, `Complete_Address`, `Birthdate`, `Birth_Place`, `Age`, `Sex`, `Civil_Status`, `Nationality`, `Religion`, `Mobile_Number`, `email`, `dor`, `month`) VALUES
(26, 'REG202201', 'Bacabis', 'Mark Melvin', 'E', '', '4242 wadaw awda 1111', '2022-05-18', 'awdaw', 22, 'M', 'Married', 'awdawwadaw', 'awdawdaw', '09413123131', ' mark.melvin.bacabis@gmail.com', '2022-05-13', 'May'),
(27, 'REG202202', 'Eballes', 'Marlon', 'Union', '', '4242 wadaw awda 1111', '2022-05-18', 'awdaw', 21, 'M', 'Married', 'awdawwadaw', 'awdawdaw', '09413123131', ' marlon.union.eballes@gmail.com', '2022-05-13', 'May'),
(28, 'REG202203', 'Bernardo', 'Ejhay', 'ikaw na lang mamili', '', '69  Hindi ko makita Qc 1111', '2000-01-06', 'Quezon City', 21, 'M', 'Single', 'Filipino', 'Catholic', '09213123343', ' emiljhon.bernardo@gmail.com', '2022-05-13', 'May');

-- --------------------------------------------------------

--
-- Table structure for table `stud_documents`
--

CREATE TABLE `stud_documents` (
  `id` int(11) NOT NULL,
  `reg_num` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `diploma` varchar(255) NOT NULL,
  `good_moral` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `id_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_documents`
--

INSERT INTO `stud_documents` (`id`, `reg_num`, `email`, `diploma`, `good_moral`, `grade`, `id_pic`) VALUES
(15, 'REG202201', 'mark.melvin.bacabis@gmail.com', 'diploma627db232511ab4.22466283.jpg', 'gdMoral627db232511bc3.10764799.png', 'grade627db232511b91.90038550.png', 'id2x2627db232511bf7.67333543.jpg'),
(16, 'REG202202', 'marlon.union.eballes@gmail.com', 'diploma627db25924c6c6.32712684.jpg', 'gdMoral627db25924c842.56835165.png', 'grade627db25924c816.18771746.png', 'id2x2627db25924c876.21480201.jpg'),
(17, 'REG202203', 'emiljhon.bernardo@gmail.com', 'diploma627ddaa8d376d6.53067581.jpg', 'gdMoral627ddaa8d38127.74930623.png', 'grade627ddaa8d380d4.87222288.png', 'id2x2627ddaa8d38151.53016452.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stud_sched`
--

CREATE TABLE `stud_sched` (
  `id` int(11) NOT NULL,
  `reg_num` varchar(55) NOT NULL,
  `schedID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_sched`
--

INSERT INTO `stud_sched` (`id`, `reg_num`, `schedID`) VALUES
(19, 'REG202201', 4),
(20, 'REG202202', 5),
(21, 'REG202203', 4);

-- --------------------------------------------------------

--
-- Table structure for table `stud_status`
--

CREATE TABLE `stud_status` (
  `id` int(11) NOT NULL,
  `reg_num` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_status`
--

INSERT INTO `stud_status` (`id`, `reg_num`, `status`) VALUES
(20, 'REG202201', 'Approved'),
(21, 'REG202202', 'Declined'),
(22, 'REG202203', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `web_preference`
--

CREATE TABLE `web_preference` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_preference`
--

INSERT INTO `web_preference` (`id`, `name`, `status`, `url`) VALUES
(1, 'fillup', 'Off', './applicants/Sorry.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_activity`
--
ALTER TABLE `admin_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicant_status`
--
ALTER TABLE `applicant_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approved_applicant`
--
ALTER TABLE `approved_applicant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedID`);

--
-- Indexes for table `stud_account`
--
ALTER TABLE `stud_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud_address`
--
ALTER TABLE `stud_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud_application`
--
ALTER TABLE `stud_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud_documents`
--
ALTER TABLE `stud_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud_sched`
--
ALTER TABLE `stud_sched`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud_status`
--
ALTER TABLE `stud_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_preference`
--
ALTER TABLE `web_preference`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1500022;

--
-- AUTO_INCREMENT for table `admin_activity`
--
ALTER TABLE `admin_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicant_status`
--
ALTER TABLE `applicant_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `approved_applicant`
--
ALTER TABLE `approved_applicant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stud_account`
--
ALTER TABLE `stud_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `stud_address`
--
ALTER TABLE `stud_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stud_application`
--
ALTER TABLE `stud_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `stud_documents`
--
ALTER TABLE `stud_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `stud_sched`
--
ALTER TABLE `stud_sched`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `stud_status`
--
ALTER TABLE `stud_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `web_preference`
--
ALTER TABLE `web_preference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
