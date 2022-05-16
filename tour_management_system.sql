-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 04:18 AM
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
  `package no` int(11) NOT NULL,
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

INSERT INTO `booking` (`S no.`, `package no`, `name`, `mobileno`, `email`, `fromdate`, `todate`, `comment`) VALUES
(1, 2, 'Aayam', '9818354005', 'khatiwadaaayam@gmail.com', '2022-05-24', '2022-06-10', 'For the detail information, I will visit to the office.');

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
(1, 'aayam', 'khatiwadaaayam@gmail.com', '9818354005', 'New package', 'If it is possible, me and my family was planning to travel to Pokhara but there was no package of Pokhara.'),
(2, 'soniya', 'soniyagrg66@gmail.com', '9840754877', 'tour details ', 'I was searching for a good deal to visit pokhara with my friends. ');

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
  `picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`S no.`, `name`, `type`, `location`, `price`, `features`, `description`, `picture`) VALUES
(1, 'Bhaktapur Durbar Square', 'Group package', 'Bhaktapur', '500', '55 window palace. The Palace of Fifty-five Windows was built during the reign of the Malla King Yaksha Malla in 1427 AD and was remodeled by King Bhupatindra Malla in the 17th century', 'Bhaktapur Durbar Square, locally known as Khwopa Lyaku is the royal palace of the old Bhaktapur Kingdom, 1,400 metres above sea level. It is a UNESCO World Heritage Site. Reasonably, it is grounded within the area of 6.52 square miles yet it has numerous temples and wow monuments.', 'bhaktapur.jpg'),
(2, 'Gorkha', 'Family Package', 'Gorkha', '1000', 'Gorkha Durbar & Museum, Manaslu Circuit Trek, Manakamana Temple, Bhimsen Park, Larpak Village ', 'The old royal palace (Gorkha Durbar), Gorakhnath and Kalika (temple of the goddess Kali) are the main attractions. The Royal Palace itself was destroyed in the 2015 earthquake. However the Gorakhnath shrine and Kalika temple are open with no entrance charges.The lower palace (Tallo Durbar) and a modern park are other major attractions. It is also the starting point of the Manasalu Himal (Mount Manasalu) and Mount Ganesh trekking route. Gorkha Hospital is the hospital and Drabya Saha Multiple Campus and Gorkha Education Campus are the two campuses serving the population.', 'gorkhaa.jpg');

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
(1, 'Aayam', 'khatiwadaaayam@gmail.com', '9818354005', '123aayam123'),
(2, 'Soniya', 'soniyagrg66@gmail.com', '9840754877', 'soniya');

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
  MODIFY `S no.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `S no.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `S no.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `S no.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
