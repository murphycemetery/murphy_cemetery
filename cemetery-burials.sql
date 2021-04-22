-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 16, 2021 at 04:37 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `murphy-cemetery`
--

-- --------------------------------------------------------

--
-- Table structure for table `cemetery-burials`
--

CREATE TABLE `cemetery-burials` (
  `burials-id` int(11) NOT NULL,
  `burials-first-name` varchar(500) DEFAULT NULL,
  `burials-middle-name` varchar(500) DEFAULT NULL,
  `burials-last-name` varchar(500) DEFAULT NULL,
  `burials-dob` date DEFAULT NULL,
  `burials-birth-year` year(4) DEFAULT NULL,
  `burials-date-of-death` date DEFAULT NULL,
  `burials-death-year` year(4) DEFAULT NULL,
  `burials-plot-row` int(11) DEFAULT NULL,
  `burials-plot-number` int(11) DEFAULT NULL,
  `burials-interment-date` date DEFAULT NULL,
  `burials-interment-year` year(4) DEFAULT NULL,
  `burials-veteran` varchar(50) DEFAULT NULL,
  `burials-veteran-branch` varchar(500) DEFAULT NULL,
  `burials-veteran-rank` varchar(500) DEFAULT NULL,
  `burials-veteran-service-time` varchar(500) DEFAULT NULL,
  `burials-spouse-first-name` varchar(500) DEFAULT NULL,
  `burials-spouse-middle-name` varchar(500) DEFAULT NULL,
  `burials-spouse-last-name` varchar(500) DEFAULT NULL,
  `burials-childrens-names` varchar(500) DEFAULT NULL,
  `burials-mother-first-name` varchar(500) DEFAULT NULL,
  `burials-mother-middle-name` varchar(500) DEFAULT NULL,
  `burials-mother-last-name` varchar(500) DEFAULT NULL,
  `burials-father-first-name` varchar(500) DEFAULT NULL,
  `burials-father-middle-name` varchar(500) DEFAULT NULL,
  `burials-father-last-name` varchar(500) DEFAULT NULL,
  `burials-img-deceased` varchar(500) DEFAULT NULL,
  `burials-img-grave1` varchar(500) DEFAULT NULL,
  `burials-img-grave2` varchar(500) DEFAULT NULL,
  `burials-obituary` text DEFAULT NULL,
  `burials-family-notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cemetery-burials`
--
ALTER TABLE `cemetery-burials`
  ADD PRIMARY KEY (`burials-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cemetery-burials`
--
ALTER TABLE `cemetery-burials`
  MODIFY `burials-id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
