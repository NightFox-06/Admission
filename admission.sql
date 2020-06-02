-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 02, 2020 at 03:37 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `accademic_details`
--

DROP TABLE IF EXISTS `accademic_details`;
CREATE TABLE IF NOT EXISTS `accademic_details` (
  `user_id` int(11) NOT NULL,
  `hslc_board` varchar(64) NOT NULL,
  `hslc_institute` varchar(64) NOT NULL,
  `hslc_sub` varchar(64) NOT NULL,
  `hslc_year` varchar(64) NOT NULL,
  `hslc_percentage` varchar(64) NOT NULL,
  `hs_board` varchar(64) NOT NULL,
  `hs_institute` varchar(64) NOT NULL,
  `hs_sub` varchar(64) NOT NULL,
  `hs_year` varchar(64) NOT NULL,
  `hs_percentage` varchar(64) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `accademic_details`
--

INSERT INTO `accademic_details` (`user_id`, `hslc_board`, `hslc_institute`, `hslc_sub`, `hslc_year`, `hslc_percentage`, `hs_board`, `hs_institute`, `hs_sub`, `hs_year`, `hs_percentage`, `createdAt`, `updatedAt`) VALUES
(1, 'SEBA', 'SVN', 'fqwrf', '1243', '6', 'AHSEC', 'sdfg', 'sfdg', '54', '54', '2020-06-01 09:19:04', '2020-06-01 13:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `basic_information`
--

DROP TABLE IF EXISTS `basic_information`;
CREATE TABLE IF NOT EXISTS `basic_information` (
  `user_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` date DEFAULT NULL,
  `number` varchar(32) DEFAULT NULL,
  `gender` varchar(32) DEFAULT NULL,
  `caste` varchar(32) DEFAULT NULL,
  `nationality` varchar(32) DEFAULT NULL,
  `current_address` text,
  `current_city` varchar(32) DEFAULT NULL,
  `current_state` varchar(32) DEFAULT NULL,
  `current_postal_code` varchar(32) DEFAULT NULL,
  `current_country` varchar(32) DEFAULT NULL,
  `permanent_address` text,
  `permanent_city` varchar(32) DEFAULT NULL,
  `permanent_state` varchar(32) DEFAULT NULL,
  `permanent_postal_code` varchar(32) DEFAULT NULL,
  `permanent_country` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `basic_information`
--

INSERT INTO `basic_information` (`user_id`, `name`, `dob`, `number`, `gender`, `caste`, `nationality`, `current_address`, `current_city`, `current_state`, `current_postal_code`, `current_country`, `permanent_address`, `permanent_city`, `permanent_state`, `permanent_postal_code`, `permanent_country`, `createdAt`, `updatedAt`) VALUES
(1, 'Pankaj', '1993-12-12', '7708129206', 'male', 'SC', 'Indian', 'Pachatia', 'Morigaon', 'Morigaon', '782105', 'India', 'Pachatia', 'Morigaon', 'Assam', '782105', 'India', '2020-05-31 16:41:06', '2020-06-01 13:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `user_id` int(11) NOT NULL,
  `hslc_certificate` varchar(100) DEFAULT NULL,
  `hslc_marksheet` varchar(100) DEFAULT NULL,
  `hs_certificate` varchar(100) DEFAULT NULL,
  `hs_marksheet` varchar(100) DEFAULT NULL,
  `birth_certificate` varchar(100) DEFAULT NULL,
  `domicial` varchar(100) DEFAULT NULL,
  `caste_certificate` varchar(100) DEFAULT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`user_id`, `hslc_certificate`, `hslc_marksheet`, `hs_certificate`, `hs_marksheet`, `birth_certificate`, `domicial`, `caste_certificate`, `createdAt`, `updatedAt`) VALUES
(1, 'hslc_certificate-1-846367', 'hslc_marksheet-1-823438', 'hs_certificate-1-214341', 'hs_marksheet-1-297991', 'birth_certificate-1-362313', 'domicial-1-112182', 'caste_certificate-1-865519', '2020-06-01 11:46:22', '2020-06-01 13:01:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `dob`) VALUES
(1, 'pankaj', 'pspkpkpankaj9@gmail.com', '7708129206', '1993-12-12');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accademic_details`
--
ALTER TABLE `accademic_details`
  ADD CONSTRAINT `accademic_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
