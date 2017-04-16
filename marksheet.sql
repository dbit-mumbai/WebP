-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2017 at 03:10 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `marksheet`
--

CREATE TABLE `marksheet` (
  `First Name` varchar(25) NOT NULL,
  `Middle Name` varchar(25) NOT NULL,
  `Last Name` varchar(25) NOT NULL,
  `Father's Name` varchar(20) NOT NULL,
  `Mother's Name` varchar(20) NOT NULL,
  `Birthday` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Stream` varchar(10) NOT NULL,
  `Physics` int(2) NOT NULL,
  `Chemistry` int(2) NOT NULL,
  `Maths` int(3) NOT NULL,
  `English` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marksheet`
--

INSERT INTO `marksheet` (`First Name`, `Middle Name`, `Last Name`, `Father's Name`, `Mother's Name`, `Birthday`, `Gender`, `Stream`, `Physics`, `Chemistry`, `Maths`, `English`) VALUES
('Harshad', 'Dhruva', 'Singh', 'Dhruva', 'Shabnam', '1997-10-20', 'male', 'Science', 78, 56, 90, 78);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marksheet`
--
ALTER TABLE `marksheet`
  ADD PRIMARY KEY (`First Name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
