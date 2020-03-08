-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2020 at 02:57 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` int(12) NOT NULL,
  `address` varchar(35) NOT NULL,
  `parentnumber` int(12) NOT NULL,
  `parentname` varchar(35) NOT NULL,
  `citizenship` int(12) NOT NULL,
  `blood` varchar(3) NOT NULL,
  `vkey` varchar(45) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `birthday`, `email`, `phone`, `address`, `parentnumber`, `parentname`, `citizenship`, `blood`, `vkey`, `verified`, `createdate`) VALUES
(1, 'rabindra kumar sah', '1996-01-07', 'rabindrasah79@gmail.com', 2147483647, 'Shantinagar, Kathmandu 44600, Nepal', 2147483647, 'RA', 78645489, 'A+', '64da0c3160776da1c1827ca731d6d1dd', 0, '2020-01-19 06:28:46'),
(2, 'rabindra kumar sah', '1996-01-07', 'rabindrasah79@gmail.com', 2147483647, 'Shantinagar, Kathmandu 44600, Nepal', 2147483647, 'RABA RAJI', 2147483647, 'A-', 'f93905ec097d7d81d7d6887ea07e45e1', 0, '2020-01-19 06:32:13'),
(3, 'rabindra kumar sah', '1997-01-07', 'rabindrasah79@gmail.com', 2147483647, 'Shantinagar, Kathmandu 44600, Nepal', 2147483647, 'rabi raja', 7890564, 'B+', 'fcee36dbe250f62bdb0b59642b6b3fa5', 0, '2020-01-20 01:46:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
