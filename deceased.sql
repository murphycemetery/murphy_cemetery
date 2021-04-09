-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 10, 2021 at 01:43 AM
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
-- Database: `murphy_cemetery`
--

-- --------------------------------------------------------

--
-- Table structure for table `deceased`
--

CREATE TABLE `deceased` (
  `deceased_id` int(11) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `middle_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `birth_date` date NOT NULL,
  `death_date` date NOT NULL,
  `burial_date` date DEFAULT NULL,
  `image_of_deceased` varchar(500) DEFAULT NULL,
  `image_of_headstone` varchar(500) DEFAULT NULL,
  `image_of_gravesite` varchar(500) DEFAULT NULL,
  `family_summary` varchar(500) DEFAULT NULL,
  `mother` varchar(500) DEFAULT NULL,
  `father` varchar(500) DEFAULT NULL,
  `siblings` varchar(500) DEFAULT NULL,
  `spouse` varchar(500) DEFAULT NULL,
  `children` varchar(500) DEFAULT NULL,
  `veteran` varchar(1) DEFAULT NULL,
  `military_branch` varchar(500) DEFAULT NULL,
  `dates_of_service` varchar(500) DEFAULT NULL,
  `plot_number` int(11) NOT NULL,
  `grave_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deceased`
--
ALTER TABLE `deceased`
  ADD PRIMARY KEY (`deceased_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deceased`
--
ALTER TABLE `deceased`
  MODIFY `deceased_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
