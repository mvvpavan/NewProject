-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2017 at 04:21 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brightfeaturehub`
--

-- --------------------------------------------------------

--
-- Table structure for table `newjob`
--

CREATE TABLE `newjob` (
  `newJobID` int(10) NOT NULL,
  `userID` varchar(20) NOT NULL,
  `summary` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `service` varchar(30) NOT NULL,
  `cost` varchar(30) NOT NULL,
  `details` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newjob`
--

INSERT INTO `newjob` (`newJobID`, `userID`, `summary`, `level`, `subject`, `service`, `cost`, `details`) VALUES
(1, '', 'pabbbb', 'AL', 'cdcd\n', 'Tutoring', '10000', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `countrycode` varchar(20) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL,
  `ACTIVE_OR_NOT` varchar(30) NOT NULL DEFAULT 'NOT_ACTIVE'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `fullname`, `email`, `password`, `countrycode`, `mobile`, `type`, `ACTIVE_OR_NOT`) VALUES
(4, 'mvvpavan@gmail.com', 'mvvpavan@gmail.com', 'Srinu@2727', '1', '1234567', 'Student', 'NOT_ACTIVE'),
(5, 'pavan', 'pavan@dddd', 'Srinu@2727', '1', '2222222', 'Student', 'NOT_ACTIVE'),
(6, 'pavan', 'mccd@ss', 'Srinu@2727', '1', '123456789', 'Student', 'NOT_ACTIVE'),
(8, 'Pavan', 'pavan@gmail.com', 'Srinu@2727', '1', '12334444444', 'Tutor', 'NOT_ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `workshopId` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `Costperstudent` varchar(20) NOT NULL,
  `Capacity` int(10) NOT NULL,
  `venu` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`workshopId`, `title`, `date`, `time`, `Costperstudent`, `Capacity`, `venu`, `Address`) VALUES
(5, 'cloudcomputing', '2017-05-25', '13:59:00.000000', '12', 22, 'Online', 'Enter address\r\n                22');

-- --------------------------------------------------------

--
-- Table structure for table `workshopapplied`
--

CREATE TABLE `workshopapplied` (
  `workshopAppliedId` int(10) NOT NULL,
  `workshopId` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newjob`
--
ALTER TABLE `newjob`
  ADD PRIMARY KEY (`newJobID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`workshopId`);

--
-- Indexes for table `workshopapplied`
--
ALTER TABLE `workshopapplied`
  ADD PRIMARY KEY (`workshopAppliedId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newjob`
--
ALTER TABLE `newjob`
  MODIFY `newJobID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `workshopId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `workshopapplied`
--
ALTER TABLE `workshopapplied`
  MODIFY `workshopAppliedId` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
