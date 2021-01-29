-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 04:12 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpi`
--

-- --------------------------------------------------------

--
-- Table structure for table `kpi`
--

CREATE TABLE `kpi` (
  `id` int(11) NOT NULL,
  `appraisee_score` int(11) DEFAULT NULL,
  `appraisee_just` varchar(500) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `teamlead_score` int(11) DEFAULT NULL,
  `teamlead_comment` varchar(500) DEFAULT NULL,
  `lineman_score` int(11) DEFAULT NULL,
  `lineman_comment` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `department` enum('Staff','Developer','Implementation','Sales') DEFAULT 'Staff',
  `position` enum('Staff','Teamlead','Hr') DEFAULT 'Staff',
  `token` varchar(200) NOT NULL,
  `expiry` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `email`, `department`, `position`, `token`, `expiry`) VALUES
(1, 'ade@gmaill.com', 'Developer', '', '2021-01-25', '2021-01-25'),
(2, 'ayo@gmaill.com', 'Developer', 'Staff', '485900', '2021-01-25'),
(3, 'ayo@gmaill.com', 'Developer', 'Staff', '628692', '2021-01-25');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `numbers` varchar(200) NOT NULL,
  `generate-date` varchar(50) NOT NULL,
  `expire-date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`id`, `numbers`, `generate-date`, `expire-date`) VALUES
(1, '804692', '2021-01-25', '2021-01-25'),
(2, '407080', '2021-01-25', '2021-01-25'),
(3, '695204', '2021-01-25', '2021-01-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kpi`
--
ALTER TABLE `kpi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kpi`
--
ALTER TABLE `kpi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
