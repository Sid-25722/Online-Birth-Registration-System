-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 10:17 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `certificate_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc_information`
--

CREATE TABLE `acc_information` (
  `user_id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_phone` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acc_information`
--

INSERT INTO `acc_information` (`user_id`, `user_name`, `user_phone`, `user_email`, `user_password`, `user_reason`) VALUES
(69322, 'mhlengi', '1111111', 'mhle@yahoo.com', '78965', 'parent'),
(16221561, 'Mpen', '76504774', 'mpe@yahoo.com', '12365', 'parent'),
(23407330, 'Samkelo J', '76713874', 'samkelojd488@gmail.com', '52147', 'parent');

-- --------------------------------------------------------

--
-- Table structure for table `child_information`
--

CREATE TABLE `child_information` (
  `comp_num` bigint(100) NOT NULL,
  `c_id` bigint(100) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_surname` text NOT NULL,
  `DOB` date NOT NULL,
  `POB` varchar(100) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `H_num` bigint(100) NOT NULL,
  `Birth_order` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child_information`
--

INSERT INTO `child_information` (`comp_num`, `c_id`, `c_name`, `c_surname`, `DOB`, `POB`, `sex`, `nationality`, `H_num`, `Birth_order`) VALUES
(9223372036854775807, 2211248100010, 'Siphephelo Smith', 'Dlamini', '2022-11-24', 'Mbabane Gorvernment hospital', 'm', 'swazi', 58740000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(11) NOT NULL,
  `emp_password` varchar(11) NOT NULL,
  `emp_email` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_password`, `emp_email`) VALUES
(112233, 'MR Dube', '2023', 'enock@outlo'),
(112234, 'Mr Lukhele', '2022', 'lukhele@zoo');

-- --------------------------------------------------------

--
-- Table structure for table `father_information`
--

CREATE TABLE `father_information` (
  `f_id` bigint(100) NOT NULL,
  `c_id` bigint(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `f_surname` varchar(100) NOT NULL,
  `f_addr` varchar(100) NOT NULL,
  `f_occup` varchar(100) NOT NULL,
  `f_nationality` varchar(100) NOT NULL,
  `f_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `father_information`
--

INSERT INTO `father_information` (`f_id`, `c_id`, `f_name`, `f_surname`, `f_addr`, `f_occup`, `f_nationality`, `f_status`) VALUES
(7503256100087, 2211248100010, 'Bongane', 'Dlamini', 'PO Box 2247', 'Banker', 'swazi', 'married');

-- --------------------------------------------------------

--
-- Table structure for table `mother_information`
--

CREATE TABLE `mother_information` (
  `m_id` bigint(100) NOT NULL,
  `c_id` bigint(100) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_surname` varchar(100) NOT NULL,
  `m_addr` varchar(100) NOT NULL,
  `m_occup` varchar(100) NOT NULL,
  `m_nationality` varchar(100) NOT NULL,
  `m_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mother_information`
--

INSERT INTO `mother_information` (`m_id`, `c_id`, `m_name`, `m_surname`, `m_addr`, `m_occup`, `m_nationality`, `m_status`) VALUES
(8007046100093, 2211248100010, 'Ziyanda', 'Dlamini', 'PO Box 2247', 'teacher', 'swazi', 'married');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc_information`
--
ALTER TABLE `acc_information`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `child_information`
--
ALTER TABLE `child_information`
  ADD PRIMARY KEY (`comp_num`),
  ADD UNIQUE KEY `c_id` (`c_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `father_information`
--
ALTER TABLE `father_information`
  ADD PRIMARY KEY (`f_id`),
  ADD UNIQUE KEY `f_key` (`c_id`);

--
-- Indexes for table `mother_information`
--
ALTER TABLE `mother_information`
  ADD PRIMARY KEY (`m_id`),
  ADD UNIQUE KEY `f_key` (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc_information`
--
ALTER TABLE `acc_information`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23407331;

--
-- AUTO_INCREMENT for table `child_information`
--
ALTER TABLE `child_information`
  MODIFY `comp_num` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9223372036854775807;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `father_information`
--
ALTER TABLE `father_information`
  ADD CONSTRAINT `father_information_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `child_information` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mother_information`
--
ALTER TABLE `mother_information`
  ADD CONSTRAINT `mother_information_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `child_information` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
