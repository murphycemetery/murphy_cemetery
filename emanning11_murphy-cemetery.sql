-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 10.123.0.91:3307
-- Generation Time: May 03, 2021 at 03:57 PM
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
(62, 'Harold', 'L', 'Smith', NULL, 1905, NULL, 1983, 3, 2, NULL, NULL, '', '', '', '', 'Lena', 'E', 'Smith', '', '', '', '', '', '', '', '', '', '', '', ''),
(63, 'Lena', 'E', 'Smith', NULL, 1909, NULL, 1976, 3, 2, NULL, NULL, '', '', '', '', 'Harold', 'L', 'Smith', '', '', '', '', '', '', '', '', '', '', '', ''),
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
(114, 'Frank', '', 'King', '1876-10-04', 1876, '1877-02-04', 1877, 6, 9, NULL, NULL, '', '', '', '', '', '', '', '', 'E', 'A', 'King', 'J', 'W', 'King', '', '', '', '', ''),
(115, 'Baby', NULL, 'French', NULL, NULL, NULL, NULL, 7, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(116, 'Claud', 'M', 'French', '1880-11-24', 1880, '1918-01-18', 1918, 7, 2, NULL, NULL, 'y', NULL, NULL, 'Civil War', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(117, 'Elva', 'M', 'French', NULL, 1860, NULL, 1934, 7, 3, NULL, NULL, '', '', '', '', 'Clark', 'C', 'French', '', '', '', '', '', '', '', '', '', '', '', ''),
(118, 'Clark', 'C', 'French', NULL, 1854, NULL, 1937, 7, 3, NULL, NULL, NULL, NULL, NULL, NULL, 'Elva', 'M', 'French', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(119, 'Theo', 'A', 'French', NULL, 1895, NULL, 1979, 7, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(120, 'Harry', 'Lee', 'French', NULL, 1888, NULL, 1945, 7, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(121, 'Elwood', NULL, 'French', '1922-04-25', 1922, '1987-05-06', 1987, 7, 5, NULL, NULL, 'y', NULL, NULL, 'WWII', NULL, NULL, NULL, 'Julie French', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(122, 'Ione', 'E', 'French', '1922-08-02', 1922, NULL, NULL, 7, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Julie French', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(123, 'J', 'C', 'Hilburn', NULL, 1861, NULL, 1960, 7, 6, NULL, NULL, NULL, NULL, NULL, NULL, 'Rose', NULL, 'Hilburn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(124, 'Rose', NULL, 'Hilburn', NULL, 1876, NULL, 1961, 7, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(125, 'Walter', 'L', 'Hilburn', '1899-05-25', 1899, '1915-06-18', 1915, 7, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rose', NULL, 'Hilburn', 'J', 'C', 'Hilburn', '', '', '', NULL, NULL),
(126, 'Alice', 'June', 'Hilburn', '1895-06-18', 1895, '1895-08-16', 1895, 7, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rose', NULL, 'Hilburn', 'J', 'C', 'Hilburn', '', '', '', NULL, NULL),
(127, 'Emma', 'Hyden', 'Corcoran', NULL, 1881, NULL, 1899, 7, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(128, ' ', NULL, 'Hyden', NULL, NULL, NULL, NULL, 7, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(129, 'Louise', '', 'Hyden', '1842-08-15', 1842, '1891-08-19', 1891, 7, 10, NULL, NULL, '', '', '', '', 'Geo', '', 'Hyden', 'Florence Ann Hyden, Robert John Hyden, Mabel Hyden, George Hyden', '', '', '', '', '', '', '', '', '', '', ''),
(130, 'Geo', NULL, 'Hyden', '1828-05-12', 1828, '1911-02-23', 1911, 7, 10, NULL, NULL, NULL, NULL, NULL, NULL, 'Louise', NULL, 'Hyden', 'Florence Ann Hyden, Robert John Hyden, Mabel Hyden, George Hyden', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(131, 'Robert', 'John', 'Hyden', '1864-06-15', 1864, '1865-09-14', 1865, 7, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Louise', NULL, 'Hyden', 'Geo', NULL, 'Hyden', '', '', '', NULL, NULL),
(132, 'Florence', 'Ann', 'Hyden', '1860-12-11', 1860, '1863-12-17', 1863, 7, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Louise', NULL, 'Hyden', 'Geo', NULL, 'Hyden', '', '', '', NULL, NULL),
(133, 'Mabel', NULL, 'Hyden', '1867-05-15', 1867, '1868-04-01', 1868, 7, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Louise', NULL, 'Hyden', 'Geo', NULL, 'Hyden', '', '', '', NULL, NULL),
(134, ' ', NULL, 'Hyden', NULL, NULL, NULL, NULL, 7, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(135, ' ', NULL, 'Hyden', NULL, NULL, NULL, NULL, 7, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(136, 'George', NULL, 'Hyden', '1870-10-28', 1870, '1878-02-23', 1878, 7, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Louise', NULL, 'Hyden', 'Geo', NULL, 'Hyden', '', '', '', NULL, NULL),
(137, 'Hezia', NULL, 'Velder', '1858-11-25', 1858, '1863-09-06', 1863, 7, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'C', NULL, 'Corey', 'J', 'W', 'Corey', '', '', '', NULL, NULL),
(138, 'Lyle', 'L', 'Hitchings', NULL, 1912, NULL, 1990, 8, 1, NULL, NULL, 'y', '', '', 'WWII', 'Stella', '', 'Hitchings', '', '', '', '', '', '', '', '', '', '', '', ''),
(139, 'Stella', NULL, 'Hitchings', NULL, 1913, NULL, 1980, 8, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'Lyle', 'L', 'Hitchings', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(140, 'Amanda', 'D', 'Oelman', '1981-08-19', 1981, '1981-12-21', 1981, 8, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(141, 'Jennifer', 'N', 'Oelman', '1980-06-07', 1980, '1980-06-20', 1980, 8, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(142, 'Harry', NULL, 'Sherk', '1876-09-22', 1876, '1884-09-04', 1884, 8, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'E', NULL, 'Sherk', 'B', NULL, 'Sherk', '', '', '', NULL, NULL),
(143, 'Isabella', NULL, 'Mackey', '1823-08-28', 1823, '1868-08-28', 1868, 8, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(144, 'Mary', 'E', 'Handsaker', '1862-05-06', 1862, '1863-02-06', 1863, 8, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'E', NULL, 'Handsaker', 'Wm', NULL, 'Handsaker', '', '', '', NULL, NULL),
(145, 'Arminta', '', 'Pool', '1851-04-24', 1851, '1870-11-05', 1870, 8, 6, NULL, NULL, '', '', '', '', '', '', '', '', 'Sarah', 'E', 'Pool', 'Wm', '', 'Pool', '', '', '', '', ''),
(146, 'Father', NULL, 'Pool', NULL, NULL, NULL, NULL, 8, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(147, 'Wm', '', 'Pool', '1826-03-26', 1826, '1895-12-15', 1895, 8, 8, NULL, NULL, '', '', '', '', 'Sarah', '', 'Pool', 'Arminta Pool', '', '', '', '', '', '', '', '', '', '', ''),
(148, 'Sarah', 'E', 'Pool', '1830-10-27', 1830, '1900-01-06', 1900, 8, 9, NULL, NULL, NULL, NULL, NULL, NULL, 'Wm', NULL, 'Pool', 'Arminta Pool', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(149, 'Mother', NULL, 'Pool', NULL, NULL, NULL, NULL, 8, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(150, 'Thomas', NULL, 'Pool', '1789-11-14', 1789, '1877-05-02', 1877, 8, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(151, 'Milo', 'T', 'Corbin', '1875-05-02', 1875, '1898-08-06', 1898, 9, 1, NULL, NULL, 'y', NULL, NULL, 'March 22, 1894 - August 6, 1898', NULL, NULL, NULL, NULL, 'C', 'A', 'Corbin', 'A', NULL, 'Corbin', '', '', '', 'Corbin was enlisted March 22, 1894 in NC Troop first US Cavalry and died fighting for his country at El Camy Cuba. ', NULL),
(152, 'Dela', NULL, 'Corbin', NULL, NULL, NULL, NULL, 9, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(153, 'Mother', NULL, 'Corbin', NULL, NULL, NULL, NULL, 9, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(154, 'Delia', NULL, 'Landreth', '1846-02-18', 1846, '1883-07-04', 1883, 9, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Margaret', NULL, 'Corbin', 'Benjamin', NULL, 'Corbin', '', '', '', NULL, NULL),
(155, 'Benjamin', NULL, 'Corbin', '1807-02-19', 1807, '1960-01-27', 1960, 9, 4, NULL, NULL, NULL, NULL, NULL, NULL, 'Margaret', NULL, 'Corbin', 'Delia Landreth', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(156, 'Margaret', NULL, 'Corbin', '1809-02-22', 1809, '1899-06-15', 1899, 9, 4, NULL, NULL, NULL, NULL, NULL, NULL, 'Benjamin', NULL, 'Corbin', 'Delia Landreth', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(157, 'Father', NULL, 'Corbin', NULL, NULL, NULL, NULL, 9, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(158, 'Delores', NULL, 'Gay', NULL, 1932, NULL, NULL, 9, 6, NULL, NULL, NULL, NULL, NULL, NULL, 'Gilbert', 'L', 'Gay', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(159, 'Gilbert', 'L', 'Gay', NULL, 1921, NULL, 1977, 9, 6, NULL, NULL, NULL, NULL, NULL, NULL, 'Delores', NULL, 'Gay', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(160, 'W', 'C', 'Murphey', '1820-11-14', 1820, '1901-03-08', 1901, 9, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(161, 'Sadie', 'C', 'Smay', '1868-02-16', 1868, '1900-10-07', 1900, 9, 8, NULL, NULL, NULL, NULL, NULL, NULL, 'L J', 'U', 'Smay', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(162, 'Mary', 'H', 'Chitty', '1893-06-20', 1893, '1893-06-20', 1893, 9, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Velle', NULL, 'Chitty', 'J', 'C', 'Chitty', '', '', '', NULL, NULL),
(163, 'Daisy', NULL, 'Robinson', '1876-03-22', 1876, '1896-06-14', 1896, 9, 10, NULL, NULL, NULL, NULL, NULL, NULL, 'Mead', NULL, 'Robinson', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(164, 'Isabel', NULL, 'Murphey', '1830-01-14', 1830, '1890-05-28', 1890, 9, 11, NULL, NULL, NULL, NULL, NULL, NULL, 'W', 'C', 'Murphey', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(165, 'Nannie', NULL, 'Murphy', '1870-01-10', 1870, '1870-08-10', 1870, 9, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(166, 'Nurah', NULL, 'Murphey', '1872-05-10', 1872, '1873-01-10', 1873, 9, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(167, 'Grant', NULL, 'Murphey', '1866-09-12', 1866, '1867-03-14', 1867, 9, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(168, 'Elizabeth', 'M', 'Murphey', '1837-01-15', 1837, '1861-01-20', 1861, 9, 12, NULL, NULL, NULL, NULL, NULL, NULL, 'W', 'C', 'Murphey', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(169, 'Oscar', NULL, 'Murphey', '1860-09-13', 1860, '1861-02-20', 1861, 9, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(170, 'Edna', NULL, 'Picht', '1862-07-14', 1862, '1883-12-10', 1883, 9, 12, NULL, NULL, NULL, NULL, NULL, NULL, 'P', NULL, 'Picht', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(171, 'J', 'J', 'Murphey', '0000-00-00', 1874, '1875-04-13', 1875, 9, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(172, 'Rhoda', NULL, 'Kelly', '1798-08-27', 1798, '1865-04-27', 1865, 9, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(173, 'W', 'M', 'Kelly', '1820-12-31', 1820, '1898-08-27', 1898, 9, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(174, 'In remembrance of our father and mother', NULL, 'Kelly', NULL, NULL, NULL, NULL, 9, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(175, 'Mary', 'M', 'Kelly', '1824-09-18', 1824, '1898-08-02', 1898, 9, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(176, 'August', '', 'Kelly', '1898-09-06', 1898, '1899-02-01', 1899, 9, 17, NULL, NULL, '', '', '', '', '', '', '', '', 'A', 'C', 'Kelly', 'J', 'E', 'Kelly', '', '', '', '', ''),
(177, 'Evelyn', NULL, 'Kelly', '1899-11-20', 1899, '1899-12-06', 1899, 9, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', 'C', 'Kelly', 'J', 'E', 'Kelly', '', '', '', NULL, NULL),
(178, 'Evaline', 'P', 'Hefley', '1849-12-14', 1849, '1884-02-29', 1884, 9, 18, NULL, NULL, NULL, NULL, NULL, NULL, 'Robert', NULL, 'Hefley', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(179, 'Bessie', NULL, 'Hefley', '1881-03-29', 1881, '1881-08-25', 1881, 9, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'E', 'P', 'Hefley', 'P', NULL, 'Hefley', '', '', '', NULL, NULL),
(180, 'Louise', 'M', 'Wood Meier', '1921-08-30', 1921, '1986-11-15', 1986, 10, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(181, 'Margaret', NULL, 'Wood', NULL, 1892, NULL, 1971, 10, 2, NULL, NULL, NULL, NULL, NULL, NULL, 'Harry', NULL, 'Wood', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(182, 'Harry', NULL, 'Wood', NULL, 1878, NULL, 1947, 10, 2, NULL, NULL, NULL, NULL, NULL, NULL, 'Margaret', NULL, 'Wood', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(183, 'Samuel', 'E', 'Eckard', '1870-07-30', 1870, '1956-05-06', 1956, 10, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(184, 'Infant', NULL, 'McCain', NULL, NULL, NULL, NULL, 10, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(185, 'John', 'H', 'McCain', '1830-02-26', 1830, '1903-06-04', 1903, 10, 5, NULL, NULL, '', '', '', '', 'Nancy', 'J', 'McCain', '', '', '', '', '', '', '', '', '', '', '', ''),
(186, 'Nancy', 'J', 'McCain', '1842-09-04', 1842, '1875-06-10', 1875, 10, 6, NULL, NULL, NULL, NULL, NULL, NULL, 'John', 'H', 'McCain', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(187, 'William', 'R', 'McCain', '1864-04-02', 1864, '1874-02-05', 1874, 10, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Nancy', 'J', 'McCain', 'John', 'H', 'McCain', '', '', '', NULL, NULL),
(188, 'Burt', NULL, 'McCain', '1871-03-16', 1871, '1874-01-29', 1874, 10, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Nancy', 'J', 'McCain', 'John', 'H', 'McCain', '', '', '', NULL, NULL),
(189, 'Dean', NULL, 'Toot', NULL, NULL, NULL, 1922, 10, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Leila', 'B', 'Toot', 'C', 'Simpson', 'Toot', '', '', '', NULL, NULL),
(190, 'Dale', NULL, 'Toot', NULL, NULL, NULL, 1922, 10, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Leila', 'B', 'Toot', 'C', 'Simpson', 'Toot', '', '', '', NULL, NULL),
(191, 'Leila', 'B', 'Toot', NULL, 1899, NULL, 1986, 10, 9, NULL, NULL, '', '', '', '', 'C', 'Simpson', 'Toot', 'Dean Toot, Dale Toot', '', '', '', '', '', '', '', '', '', '', ''),
(192, 'C', 'Simpson', 'Toot', NULL, 1895, NULL, 1972, 10, 9, NULL, NULL, 'y', NULL, NULL, 'WWI', 'Leila', 'B', 'Toot', 'Dean Toot, Dale Toot', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(193, 'Sheryl', 'Kay', 'Toot', NULL, 1951, NULL, 1963, 10, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Marjorie', NULL, 'Toot', 'Charles', NULL, 'Toot', '', '', '', NULL, NULL),
(194, 'Inez', 'V', 'Toot', NULL, 1886, NULL, 1945, 10, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(195, 'Carrie', 'A', 'Toot', NULL, 1863, NULL, 1927, 10, 12, NULL, NULL, '', '', '', '', 'Charles', 'E', 'Toot', '', '', '', '', '', '', '', '', '', '', '', ''),
(196, 'Charles', 'E', 'Toot', NULL, 1847, NULL, 1915, 10, 13, NULL, NULL, '', '', '', '', 'Carrie', 'A', 'Toot', '', '', '', '', '', '', '', '', '', '', '', ''),
(197, ' ', NULL, 'Toot', NULL, NULL, NULL, NULL, 10, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(198, 'Phyllis', 'I', 'Schuler', NULL, 1920, NULL, NULL, 10, 15, NULL, NULL, '', '', '', '', 'Harley', 'A', 'Schuler', '', '', '', '', '', '', '', '', '', '', '', ''),
(199, 'Harley', 'A', 'Schuler', NULL, 1916, NULL, 1957, 10, 15, NULL, NULL, NULL, NULL, NULL, NULL, 'Phyllis', 'I', 'Schuler', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(200, 'Elva', 'R', 'Schuler', NULL, 1896, NULL, NULL, 10, 16, NULL, NULL, NULL, NULL, NULL, NULL, 'Alvin', 'G', 'Schuler', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(201, 'Alvin', 'G', 'Schuler', NULL, 1899, NULL, 1982, 10, 16, NULL, NULL, NULL, NULL, NULL, NULL, 'Elva', 'R', 'Schuler', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(202, 'Micah', NULL, 'French', '1792-04-06', 1792, '1889-06-14', 1889, 10, 17, NULL, NULL, 'y', NULL, NULL, 'War of 1812', 'Azuba', NULL, 'French', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(203, 'Azuba', NULL, 'French', '1797-05-05', 1797, '1881-02-04', 1881, 10, 17, NULL, NULL, NULL, NULL, NULL, NULL, 'Micah', NULL, 'French', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(204, 'Mary', 'V', 'Sowers', NULL, 1891, NULL, 1983, 10, 18, NULL, NULL, NULL, NULL, NULL, NULL, 'James', 'S', 'Sowers', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(205, 'James', NULL, 'Sowers', NULL, 1880, NULL, 1974, 10, 18, NULL, NULL, NULL, NULL, NULL, NULL, 'Mary', 'V', 'Sowers', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(206, 'Mary', 'Bell', 'Townsend', NULL, 1870, NULL, 1959, 10, 19, NULL, NULL, NULL, NULL, NULL, NULL, 'Charles', 'S', 'Townsend', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(207, 'Charles', 'S', 'Townsend', NULL, 1866, NULL, 1935, 10, 19, NULL, NULL, NULL, NULL, NULL, NULL, 'Mary', 'Bell', 'Townsend', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(208, 'William', 'E', 'Carr', '1851-03-09', 1851, '1876-04-13', 1876, 10, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'J', NULL, 'Carr', 'A', 'N', 'Carr', '', '', '', NULL, NULL),
(209, 'Dessie', 'M', 'Cawthon', NULL, 1894, NULL, 1980, 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'James', 'A', 'Cawthon', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(210, 'James', 'A', 'Cawthon', NULL, 1886, NULL, 1974, 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'Dessie', 'M', 'Cawthon', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(211, 'Earnest', 'F', 'Gluck', '1910-09-23', 1910, '1943-04-06', 1943, 11, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(212, 'John', 'V', 'Fry', NULL, 1925, NULL, 1967, 11, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(213, 'Ross', 'E', 'Fry', NULL, 1883, NULL, 1942, 11, 4, NULL, NULL, '', '', '', '', 'Edna', 'A', 'Fry', 'Ross E Fry Jr', '', '', '', '', '', '', '', '', '', '', ''),
(214, 'Edna', 'A', 'Fry', NULL, 1886, NULL, 1943, 11, 4, NULL, NULL, '', '', '', '', 'Ross', 'E', 'Fry', 'Ross E Fry Jr', '', '', '', '', '', '', '', '', '', '', ''),
(215, 'Ross', 'E Jr', 'Fry', NULL, 1915, NULL, 1931, 11, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edna', 'A', 'Fry', 'Ross', 'E', 'Fry', '', '', '', NULL, NULL),
(216, 'Helen', 'M', 'Fry', NULL, 1909, NULL, 1910, 11, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(217, 'Kathern', 'A', 'Fry', '1974-01-12', 1974, '1974-01-13', 1974, 11, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(218, 'Galyn', 'H', 'Wilson', '1920-12-23', 1920, NULL, NULL, 12, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'Erma', 'Ruth', 'Wilson', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(219, 'Erma', 'Ruth', 'Wilson', '1924-09-08', 1924, NULL, NULL, 12, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'Galyn', 'H', 'Wilson', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(220, 'Joseph', NULL, 'Smay', '1812-10-25', 1812, '1880-10-20', 1880, 12, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(221, 'Mary', 'H', 'Pearl', '1798-04-27', 1798, '1876-08-29', 1876, 13, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(222, 'Carla', 'J', 'Miller', NULL, 1971, NULL, 1971, 13, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(223, 'Donna', 'Lee', 'Miller', NULL, 1965, NULL, 1987, 13, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(224, 'James', 'J', 'Gericke', NULL, 1891, NULL, 1950, 13, 4, NULL, NULL, '', '', '', '', 'Ruth', 'C', 'Gericke', '', '', '', '', '', '', '', '', '', '', '', ''),
(225, 'Ruth', 'C', 'Gericke', NULL, 1900, NULL, 1995, 13, 4, NULL, NULL, '', '', '', '', 'James', 'J', 'Gericke', '', '', '', '', '', '', '', '', '', '', '', ''),
(226, 'Infant Son', '', 'Gericke', NULL, 1925, NULL, 1925, 13, 5, NULL, NULL, '', '', '', '', '', '', '', '', 'Ruth', 'C', 'Gericke', 'James', 'J', 'Gericke', '', '', '', '', ''),
(227, 'Infant Daughter', NULL, 'Gericke', NULL, 1919, NULL, 1919, 13, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ruth', 'C', 'Gericke', 'James', 'J', 'Gericke', '', '', '', NULL, NULL),
(228, 'Jacob', NULL, 'Solberg', NULL, 1871, NULL, 1935, 13, 7, NULL, NULL, NULL, NULL, NULL, NULL, 'Arttie', NULL, 'Solberg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL),
(229, 'Arttie', NULL, 'Solberg', NULL, 1888, NULL, 1952, 13, 7, NULL, NULL, NULL, NULL, NULL, NULL, 'Jacob', NULL, 'Solberg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL);

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
  MODIFY `burials-id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
