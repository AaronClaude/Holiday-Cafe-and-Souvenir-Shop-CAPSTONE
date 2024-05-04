-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 02, 2024 at 05:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hscafeacc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `empid` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`empid`, `email`, `mobile`, `password`, `image`) VALUES
(0, '0000@gmail.com', 2147483647, '0000', '1x1 pix rxsn.png'),
(300, 'rxsn@gmail.com', 2147483647, '1234', '1x1 pix rxsn.png'),
(330400, 'ace@gmail.com', 2147483647, 'qwer', 'ace.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `empid` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`empid`, `email`, `mobile`, `password`, `image`) VALUES
(330128, 'geraldllave18@gmail.com', 2147483647, 'qwer', 'migi.png');

-- --------------------------------------------------------

--
-- Table structure for table `useracc`
--

CREATE TABLE `useracc` (
  `id` int(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useracc`
--

INSERT INTO `useracc` (`id`, `uname`, `email`, `mobile`, `password`, `image`) VALUES
(1, 'ace', 'ace@gmail.com', '09616198258', 'qwer', 'ace.jpg'),
(2, 'rex', 'rexson_guno1103@yahoo.com.ph', '09616198258', 'qwer', 'rex.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `useracc`
--
ALTER TABLE `useracc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `empid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34234237;

--
-- AUTO_INCREMENT for table `cashier`
--
ALTER TABLE `cashier`
  MODIFY `empid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=330130;

--
-- AUTO_INCREMENT for table `useracc`
--
ALTER TABLE `useracc`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
