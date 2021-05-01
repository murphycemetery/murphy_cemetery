-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 10.123.0.91:3307
-- Generation Time: May 01, 2021 at 09:21 PM
-- Server version: 8.0.22
-- PHP Version: 7.0.33-0+deb9u10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emanning11_murphy-cemetery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci TABLESPACE `emanning11_murphy-cemetery`;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`) VALUES
(1, 'larry_hall', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `cemetery-burials`
--

CREATE TABLE `cemetery-burials` (
  `burials-id` int NOT NULL,
  `burials-first-name` varchar(500) DEFAULT NULL,
  `burials-middle-name` varchar(500) DEFAULT NULL,
  `burials-last-name` varchar(500) DEFAULT NULL,
  `burials-dob` date DEFAULT NULL,
  `burials-birth-year` int DEFAULT NULL,
  `burials-date-of-death` date DEFAULT NULL,
  `burials-death-year` int DEFAULT NULL,
  `burials-plot-row` int DEFAULT NULL,
  `burials-plot-number` int DEFAULT NULL,
  `burials-interment-date` date DEFAULT NULL,
  `burials-interment-year` int DEFAULT NULL,
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
  `burials-obituary` text,
  `burials-family-notes` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci TABLESPACE `emanning11_murphy-cemetery`;

--
-- Dumping data for table `cemetery-burials`
--

INSERT INTO `cemetery-burials` (`burials-id`, `burials-first-name`, `burials-middle-name`, `burials-last-name`, `burials-dob`, `burials-birth-year`, `burials-date-of-death`, `burials-death-year`, `burials-plot-row`, `burials-plot-number`, `burials-interment-date`, `burials-interment-year`, `burials-veteran`, `burials-veteran-branch`, `burials-veteran-rank`, `burials-veteran-service-time`, `burials-spouse-first-name`, `burials-spouse-middle-name`, `burials-spouse-last-name`, `burials-childrens-names`, `burials-mother-first-name`, `burials-mother-middle-name`, `burials-mother-last-name`, `burials-father-first-name`, `burials-father-middle-name`, `burials-father-last-name`, `burials-img-deceased`, `burials-img-grave1`, `burials-img-grave2`, `burials-obituary`, `burials-family-notes`) VALUES
(35, 'Brad', 'Strummer', 'Grout', '1975-06-05', 1975, '2020-08-21', 2020, 45, 4, '2020-08-25', 2020, 'y', 'Army', 'Officer', 'April 1992 - September 2007', 'Sarah', 'Marie', 'Grout', 'Strummer Andrew Grout, Bobby Junior Grout', 'Haley', 'Sue', 'Grout', 'Shawn', 'David', 'Grout', 'old-man-1208210_640.jpg', 'grave-674443_640.jpg', 'tombstone-1541070_640.jpg', 'RIP', ''),
(38, 'Hannah', '', 'Dunning', '1779-01-02', NULL, '1860-04-23', NULL, 1, 1, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, 'Frank', '', 'Vincent', '1862-03-07', NULL, '1863-01-03', NULL, 1, 2, NULL, NULL, '', '', '', '', '', '', '', '', 'J', '', 'Vincent', 'W', 'S', 'Vincent', '', '', '', '', ''),
(40, 'Maude', '', 'Vincent', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, '', '', '', '', '', '', '', '', 'J', '', 'Vincent', 'W', 'S', 'Vincent', '', '', '', '', ''),
(41, 'Eugene', '', 'McLain', '1887-08-04', NULL, '1887-12-14', NULL, 1, 3, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(42, 'Mary', 'J', 'Page', NULL, 1842, NULL, 1885, 1, 4, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, 'Christopher', 'P', 'Page', NULL, 1822, NULL, 1909, 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(50, 'Sarah', 'A', 'Page', NULL, 1824, NULL, 1976, 1, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(51, ' ', NULL, 'Page', NULL, NULL, NULL, NULL, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(52, 'Olive', NULL, 'Page', NULL, 1859, NULL, 1859, 1, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(53, 'Lydia', 'C', 'Page', NULL, 1852, NULL, 1865, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(54, 'Minnie', 'E', 'Richey', '1871-11-02', 1871, '1898-06-08', 1898, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'J', 'V', 'Richey', 'Howard Lee Richey', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(55, 'Howard', 'Lee', 'Richey', '1895-10-22', 1895, '1897-04-06', 1897, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Minnie', 'E', 'Richey', 'J', 'V', 'Richey', '', '', '', NULL, NULL),
(56, 'Mother', NULL, 'Richey', NULL, NULL, NULL, NULL, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(57, 'Howard', NULL, 'Richey', NULL, NULL, NULL, NULL, 2, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(58, 'Robert', 'B', 'Sellers', '1877-07-31', 1877, '1878-03-14', 1878, 2, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'J', NULL, 'Sellers', 'W', 'Y', 'Sellers', '', '', '', NULL, NULL),
(59, 'Charles', 'M', 'Sellers', '1863-01-31', 1863, '1863-02-19', 1863, 2, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'J', NULL, 'Sellers', 'W', 'Y', 'Sellers', '', '', '', NULL, NULL),
(60, 'Amber', 'May', 'Drahos', NULL, NULL, NULL, NULL, 3, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(61, 'Frank', 'June', 'Drahos', '1900-06-27', 1900, '1977-12-13', 1977, 3, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(62, 'Harold', 'L', 'Smith', NULL, 1905, NULL, 1983, 3, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(63, 'Lena', 'E', 'Smith', NULL, 1909, NULL, 1976, 3, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(64, 'Lucy', 'M', 'Sodders', NULL, 1913, NULL, 1988, 3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(65, 'Clyde', 'C', 'Sodders', NULL, 1900, NULL, 1975, 3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(66, 'Andrew', 'J', 'Romane', '1860-01-08', 1860, '1875-07-20', 1875, 3, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', NULL, 'Romane', 'I', NULL, 'Romane', '', '', '', NULL, NULL),
(67, 'Henry', 'L', 'Romane', '1875-05-23', 1875, '1875-08-31', 1875, 3, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', NULL, 'Romane', 'I', NULL, 'Romane', '', '', '', NULL, NULL),
(68, 'William', 'P', 'Romane', '1869-08-31', 1869, '1875-10-15', 1875, 3, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L', NULL, 'Romane', 'I', NULL, 'Romane', '', '', '', NULL, NULL),
(69, 'Sarah', NULL, 'Cronk', '1799-06-10', 1799, '1873-01-16', 1873, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'Samuel', NULL, 'Cronk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(70, 'Samuel', NULL, 'Cronk', '1796-06-30', 1796, '1874-02-25', 1874, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'Sarah', NULL, 'Cronk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(71, 'Emma', 'E', 'Cronk', '1868-08-28', 1868, '1870-02-08', 1870, 4, 2, NULL, NULL, '', '', '', '', '', '', '', '', 'M', 'I', 'Cronk', 'H', '', 'Cronk', '', '', '', '', ''),
(72, 'Mary', 'C', 'Corben', NULL, 1941, NULL, 1942, 4, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(73, 'John', 'E', 'Corben', NULL, NULL, '1960-12-24', NULL, 4, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sandra', NULL, 'Corben', 'Herman', NULL, 'Corben', '', '', '', NULL, NULL),
(74, 'Joshua', 'A', 'Corbin', NULL, NULL, '1986-12-22', 1986, 4, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Renee', NULL, 'Corbin', 'Kent', NULL, 'Corbin', '', '', '', NULL, NULL),
(75, 'Mary', 'E', 'Corbin', '1914-09-20', 1914, '1987-11-11', 1987, 4, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(76, 'Kittie', 'K', 'Corbin', NULL, 1892, NULL, 1974, 4, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(77, 'Herman', 'A', 'Corbin', NULL, 1886, NULL, 1960, 4, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(78, 'Margaret', 'E', 'See', '1881-03-03', 1881, '1882-06-04', 1882, 4, 7, NULL, NULL, '', '', '', '', '', '', '', '', 'Amanda', '', 'See', 'Frank', '', 'See', '', '', '', '', ''),
(79, 'Mickey', NULL, 'See', NULL, 1830, NULL, 1924, 4, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(80, 'Missouri', '', 'See', '1828-01-04', 1828, '1890-12-02', 1890, 4, 9, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(81, ' ', NULL, 'See', NULL, NULL, NULL, NULL, 4, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(82, 'General', 'M', 'See', '1864-09-27', 1864, '1881-11-28', 1881, 4, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'M', NULL, 'See', 'M', NULL, 'See', '', '', '', NULL, NULL),
(83, 'Joshua', NULL, 'Bryant', NULL, 1850, NULL, 1936, 4, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(84, 'Ella', NULL, 'Bryant', NULL, 1859, NULL, 1919, 4, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(85, 'Sylvester', 'L', 'Bryant', '1862-02-12', 1862, '1898-04-17', 1898, 4, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(86, 'Chas', 'L', 'Bryant', '1825-05-24', 1825, '1904-02-25', 1904, 4, 14, NULL, NULL, NULL, NULL, NULL, NULL, 'America', NULL, 'Bryant', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(87, 'America', NULL, 'Bryant', '1823-12-31', 1823, '1887-03-27', 1887, 4, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(88, 'Charlie', 'P', 'Bryant', '1876-07-31', 1876, '1877-02-25', 1877, 4, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'S', 'E', 'Bryant', 'J', NULL, 'Bryant', '', '', '', NULL, NULL),
(89, 'Mary', 'Jane', 'Bryant', '1864-05-11', 1864, '1872-07-21', 1872, 4, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', NULL, 'Bryant', 'C', NULL, 'Bryant', '', '', '', NULL, NULL),
(90, 'Bossel', NULL, 'Gregory', '1857-05-16', 1857, '1860-01-21', 1860, 4, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', 'C', 'Gregory', 'C', 'A', 'Gregory', '', '', '', NULL, NULL),
(91, 'Thelma', 'L', 'Hall', NULL, 1905, NULL, NULL, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'William', 'J Jr', 'Hall', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(92, 'William', 'J Jr', 'Hall', NULL, 1905, NULL, 1978, 5, 1, NULL, NULL, 'y', NULL, NULL, 'WWII', 'Thelma', 'L', 'Hall', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(93, 'Fredrich', 'L', 'Hall', NULL, 1909, NULL, 1968, 5, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(94, 'Mary', 'Ann', 'Hall', NULL, 1880, NULL, 1946, 5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(95, ' ', NULL, 'Hall', NULL, NULL, NULL, NULL, 5, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(96, 'William', 'J', 'Hall', NULL, 1882, NULL, 1957, 5, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(97, 'Walter', 'G', 'Hall', NULL, 1907, NULL, 1939, 5, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(98, 'Charles', 'B', 'Cook', '1876-05-03', 1876, '1876-08-06', 1876, 5, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(99, 'William', 'T', 'Cook', '1874-05-27', 1874, '1874-06-28', 1874, 5, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(100, 'Mildred', 'L', 'Cook', '1880-09-09', 1880, '1881-07-17', 1881, 5, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(101, 'Inez', '', 'Corbin', '1876-08-24', 1876, '1894-10-14', 1894, 6, 1, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(103, 'Ethel', '', 'Corbin', '1891-11-18', 1891, '1893-08-08', 1893, 6, 6, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(104, 'Eugene', NULL, 'Corbin', '1871-09-01', 1871, '1893-04-30', 1893, 6, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(105, 'John', 'P', 'Corbin', '1848-06-23', 1848, '1899-12-20', 1899, 6, 2, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(106, 'Ernest', '', 'Corbin', '1873-02-22', 1873, '1877-04-14', 1877, 6, 4, NULL, NULL, 'y', '', '', 'Civil War', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(107, 'Manerva', NULL, 'Corbin', '1874-12-22', 1874, '1877-04-16', 1877, 6, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(108, 'Ella', NULL, 'French', NULL, 1895, NULL, 1920, 6, 7, NULL, NULL, NULL, NULL, NULL, NULL, 'Earl', NULL, 'French', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(109, 'Earl', '', 'French', NULL, 1890, NULL, 1950, 6, 7, NULL, NULL, '', '', '', '', 'Ella, Sara', '', 'French', '', '', '', '', '', '', '', '', '', '', '', ''),
(110, 'Sara', NULL, 'French', NULL, 1890, NULL, 1975, 6, 7, NULL, NULL, NULL, NULL, NULL, NULL, 'Earl', NULL, 'French', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(111, 'George', 'P', 'King', '1869-07-27', 1869, '1870-09-01', 1870, 6, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'E', 'A', 'King', 'J', 'W', 'King', '', '', '', NULL, NULL),
(112, 'G', 'P', 'King', '1869-07-31', 1869, '1870-09-03', 1870, 6, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'E', 'A', 'King', 'J', 'W', 'King', '', '', '', NULL, NULL),
(113, 'M', 'M', 'King', '1887-10-13', 1887, '1891-01-13', 1891, 6, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'E', 'A', 'King', 'J', 'W', 'King', '', '', '', NULL, NULL),
(114, 'Frank', NULL, 'King', '1876-10-04', 1876, '1877-02-04', 1877, 6, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'E', 'A', 'King', 'J', 'W', 'King', '', '', '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `cemetery-burials`
--
ALTER TABLE `cemetery-burials`
  ADD PRIMARY KEY (`burials-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cemetery-burials`
--
ALTER TABLE `cemetery-burials`
  MODIFY `burials-id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
