-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 08:34 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salesbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `cmpany_admin_profile`
--

CREATE TABLE `cmpany_admin_profile` (
  `cmp_admin_id` int(11) NOT NULL,
  `cmp_admin_name` varchar(30) NOT NULL,
  `cmp_admin_email` varchar(50) NOT NULL,
  `cmp_admin_contact_number` bigint(10) NOT NULL,
  `cmp_code` varchar(11) NOT NULL,
  `cmp_name` text NOT NULL,
  `cmp_admin_psw` varchar(30) NOT NULL,
  `cmp_admin_profile_pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmpany_admin_profile`
--

INSERT INTO `cmpany_admin_profile` (`cmp_admin_id`, `cmp_admin_name`, `cmp_admin_email`, `cmp_admin_contact_number`, `cmp_code`, `cmp_name`, `cmp_admin_psw`, `cmp_admin_profile_pic`) VALUES
(6, 'Singh Savrabh Radhemohan', 'saucom99@gmail.com', 9044514273, 'SB005', 'Dream Developer', '$2y$10$nPQjMfgOtGXHLjdLCCqpY.X', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cmpany_admin_profile`
--
ALTER TABLE `cmpany_admin_profile`
  ADD PRIMARY KEY (`cmp_admin_id`),
  ADD UNIQUE KEY `cmp_code` (`cmp_code`),
  ADD UNIQUE KEY `cmp_admin_email` (`cmp_admin_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cmpany_admin_profile`
--
ALTER TABLE `cmpany_admin_profile`
  MODIFY `cmp_admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
