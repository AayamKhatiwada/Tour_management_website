-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 06:09 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `S no.` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `mobileno` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`S no.`, `name`, `mobileno`, `email`, `fromdate`, `todate`, `comment`) VALUES
(1, '[value-2]', '[value-3]', '[value-4]', '0000-00-00', '0000-00-00', '[value-7]'),
(2, '[value-2]', '[value-3]', '[value-4]', '0000-00-00', '0000-00-00', '[value-7]');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `S no.` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phoneno` varchar(25) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`S no.`, `name`, `email`, `phoneno`, `subject`, `description`) VALUES
(1, '', '', '', '', 'hello'),
(2, 'aayam', 'khatiwadaaayam@gmail.com', '9818354005', 'nothing', 'This just for trying');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `S no.` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `location` varchar(25) NOT NULL,
  `price` varchar(25) NOT NULL,
  `features` text NOT NULL,
  `description` text NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`S no.`, `name`, `type`, `location`, `price`, `features`, `description`, `picture`) VALUES
(1, 'a', 'b', 'c', 'd', 'e', '0', 'g'),
(2, 'q', 'w', 'e', 'r', 't', '0', 'u'),
(3, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '0', '[value-8]'),
(4, 'fwjehbdsjm', 'wevsd', 'weds', '7', 'ewfsd', 'awaesdxfcv ', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `S no.` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneno` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`S no.`, `username`, `email`, `phoneno`, `password`) VALUES
(1, 'aayam', 'afdsv@as', 'sac', 'asdc'),
(2, '[value-2]', '[value-3]', '[value-4]', '[value-5]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`S no.`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`S no.`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`S no.`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`S no.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `S no.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `S no.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `S no.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `S no.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
