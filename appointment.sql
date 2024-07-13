-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 25, 2024 at 03:54 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `profile`, `created_at`) VALUES
(1, 'admin', 'admin', '', '2024-06-14 11:14:26');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `doctor_name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1=Active, 0=Inactive',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `doctor_name`, `email`, `phone`, `specialization`, `address`, `bio`, `status`, `created_at`) VALUES
(1, 'Dave', 'dave@gmail.com', 650507634, 'Dentist', 'Simbock Yaounde', 'i am a dentist', 1, '2024-06-16 17:16:19'),
(12, 'Dr Dave', 'david@gmail.com', 234567, 'physiotherapist', 'Melen', 'ok', 0, '2024-06-16 17:26:42'),
(13, 'Dr Linibell', 'linibell@gmail.com', 654238746, 'pherapist', 'Damas', 'love my job', 1, '2024-06-20 13:17:12'),
(14, 'Dr Steve', 'steve@gmail.com', 659874567, 'Eye Specialist', 'Dubai', 'working for over 20 years', 1, '2024-06-20 17:12:37');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_schedule`
--

DROP TABLE IF EXISTS `doctor_schedule`;
CREATE TABLE IF NOT EXISTS `doctor_schedule` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `doctor_name` varchar(255) NOT NULL,
  `specialization` text NOT NULL,
  `available_days` text NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `end_time` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1=Active,0=Inactive',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_schedule`
--

INSERT INTO `doctor_schedule` (`id`, `doctor_name`, `specialization`, `available_days`, `start_time`, `end_time`, `message`, `status`, `created_at`) VALUES
(12, 'Dave', 'Dentist', 'Monday, Tuesday', '8:30', '4:30', 'ok', 0, '2024-06-25 12:45:09'),
(3, 'Dr Linibell', 'pherapist', 'Thursday', '8:30', '4:30', 'ok', 0, '2024-06-21 10:41:37'),
(5, 'Dr Steve', 'Eye Specialist', 'Sunday, Monday', '8:30', '4:30', 'ok', 0, '2024-06-21 11:01:28');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `role` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

DROP TABLE IF EXISTS `tbl_appointment`;
CREATE TABLE IF NOT EXISTS `tbl_appointment` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `APT_num` int(100) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `doctor_name` text NOT NULL,
  `specialization` text NOT NULL,
  `Date` text NOT NULL,
  `time` text NOT NULL,
  `Phone` int(10) NOT NULL,
  `message` varchar(500) NOT NULL,
  `Remark` varchar(255) NOT NULL,
  `status` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`id`, `APT_num`, `Name`, `Email`, `doctor_name`, `specialization`, `Date`, `time`, `Phone`, `message`, `Remark`, `status`, `created_at`) VALUES
(1, 1, 'Derrick', 'der@gmail.com', 'Dave', 'Dentist', '2024-06-26', '19:31:30', 679578528, 'ok', 'defined', 'Approved', '2024-06-25 00:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_week`
--

DROP TABLE IF EXISTS `tbl_week`;
CREATE TABLE IF NOT EXISTS `tbl_week` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
