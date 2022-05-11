-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2022 at 04:58 AM
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
(1, 'qcu_admin', 'cf774e9e17ce451ffb528342bc256f2f', 'QCU', 'Admin', 'sample.jpg');

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
-- Table structure for table `approved_applicant`
--

CREATE TABLE `approved_applicant` (
  `id` int(11) NOT NULL,
  `reg_num` varchar(55) NOT NULL,
  `app_num` varchar(55) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `brithdate` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `date_approval` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `StartTime` varchar(10) NOT NULL,
  `EndTime` varchar(10) NOT NULL,
  `Slot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedID`, `Date`, `StartTime`, `EndTime`, `Slot`) VALUES
(1, '2022-05-16', '10:00AM', '11:00AM', 10),
(2, '2022-05-16', '9:00AM', '10:00AM', 10),
(3, '2022-05-16', '11:00AM', '12:00PM', 10),
(4, '2022-05-16', '12:00PM', '1:00PM', 10),
(5, '2022-05-16', '1:00PM', '2:00PM', 10),
(6, '2022-05-16', '2:00PM', '3:00PM', 10);

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
(1, 'APP202305', 'marlon.union.eballes@gmail.com', '787d5f05953ec39b108869dfdd7733e6');

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
  `Religion` varchar(25) NOT NULL,
  `Mobile_Number` varchar(11) NOT NULL,
  `email` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_application`
--

INSERT INTO `stud_application` (`id`, `reg_num`, `Last_Name`, `First_Name`, `Middle_Name`, `Extension_Name`, `Complete_Address`, `Birthdate`, `Birth_Place`, `Age`, `Sex`, `Civil_Status`, `Religion`, `Mobile_Number`, `email`) VALUES
(1, 'REG202301', 'Eballes', 'Marlon', 'U.', 'N/A', '043 Eulogio St. Don Fabian Barangay Commonwealth Quezon City', '2001-01-01', 'Quezon City', 21, 'Male', 'Single', 'Roman Catholic', '09972760119', 'marlon.union.eballes@gmail.com'),
(3, 'REG202302', 'Bernardo', 'Emiljhon', 'M.', 'N/A', '12f2 BAYES ST. BRGY. GULOD NOVALICHES QC.', '2001-03-14', 'Manila', 21, 'Male', 'Single', 'Roman Catholic', '09498662446', 'emiljhon.bernardo@gmail.com'),
(4, 'REG202303', 'Camaya', 'Jovilyn', 'A.', 'N/A', 'Brgy. Bagbag, Novaliches QC. ', '2001-06-21', 'Apalit, Pampanga', 20, 'Female', 'Single', 'Roman Catholic', '09229517563', 'jovilyn.almario.camaya@gmail.com'),
(5, 'REG202304', 'Ampo', 'Mark Anthony', 'M.', 'N/A', '#31 Saint Anthony Street Republic Avenue Barangay Holy Spirit Quezon City', '2001-06-30', 'Quezon City', 20, 'Male', 'Single', 'Roman Catholic', '09275616645', 'mark.anthony.mejos.ampo@gmail.com'),
(6, 'REG202305', 'Asuan', 'Mark Jay', 'C.', 'N/A', '66 Saint Anthony street barangay holy spirit QC ', '2000-02-26', 'Quezon City', 22, 'Male', 'Single', 'Roman Catholic', '09465209510', 'markjaybabyhawks@gmail.com'),
(7, 'REG202306', 'Taopo', 'Cherry Ann', 'L.', 'N/A', '125 Area 6 Sitio Cabuyao Sauyo Quezon City', '1998-11-14', 'San Miguel, Bulacan', 23, 'Female', 'Single', 'Roman Catholic', '09776021403', 'cherry.ann.taopo.111598@gmail.com'),
(8, 'REG202307', 'Rosal ', 'Erica', 'L.', 'N/A', '021 Bai Compound, Brgy. Vasra, Quezon City ', '2000-09-01', ' Negros Occidental ', 21, 'Female', 'Single', 'Christian ', '09100487940', 'erica.rosal09012000@gmail.com\r\n'),
(9, 'REG202308', 'Galupo', 'Rica Mae', 'L.', 'N/A', '#2339 Kapatiran St. Litex rd. Brgy. Comm Q.C', '2000-04-29', 'Caloocan City', 21, 'Female', 'Single', 'Roman Catholic', '09099573850', 'galuporicamae@gmail.com'),
(10, 'REG202309', 'Hafalla', 'Johnry', 'Y.', 'N/A', 'Alton St. Batasan Hills Q.C', '2000-03-05', 'Manila', 22, 'Male', 'Single', 'Roman Catholic', '09193415679', 'johnry.yape.hafalla@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `stud_documents`
--

CREATE TABLE `stud_documents` (
  `id` int(11) NOT NULL,
  `reg_num` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `diploma` varchar(55) NOT NULL,
  `gradeslip` varchar(55) NOT NULL,
  `id_front` varchar(55) NOT NULL,
  `id_back` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_documents`
--

INSERT INTO `stud_documents` (`id`, `reg_num`, `email`, `diploma`, `gradeslip`, `id_front`, `id_back`) VALUES
(1, 'REG202301', 'marlon.union.eballes@gmail.com', 'sample.jpg', 'sample.jpg', 'sample.jpg', 'sample.jpg'),
(3, 'REG202302', 'emiljhon.bernardo@gmail.com', 'sample.jpg', 'sample1.jpg', 'sample1.jpg', 'sample.jpg');

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
(1, 'REG202301', 1),
(2, 'REG202302', 1);

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
(1, 'REG202301', 'Pending'),
(2, 'REG202302', 'Pending');

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
-- Indexes for table `stud_application`
--
ALTER TABLE `stud_application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_activity`
--
ALTER TABLE `admin_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `approved_applicant`
--
ALTER TABLE `approved_applicant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stud_account`
--
ALTER TABLE `stud_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stud_application`
--
ALTER TABLE `stud_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stud_documents`
--
ALTER TABLE `stud_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stud_sched`
--
ALTER TABLE `stud_sched`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stud_status`
--
ALTER TABLE `stud_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stud_documents`
--
ALTER TABLE `stud_documents`
  ADD CONSTRAINT `stud_documents_ibfk_1` FOREIGN KEY (`email`) REFERENCES `stud_application` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
