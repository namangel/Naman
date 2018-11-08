-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 06, 2018 at 07:47 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naman`
--

-- --------------------------------------------------------

--
-- Table structure for table `inv_overview`
--

CREATE TABLE `inv_overview` (
  `Username` varchar(100) NOT NULL,
  `Image` longblob NOT NULL,
  `IndustryOfInterest` text,
  `BasedIn` text,
  `TotalStartupFunded` int(10) DEFAULT NULL,
  `RecentFunding` varchar(50) DEFAULT NULL,
  `FBLink` varchar(50) DEFAULT NULL,
  `TwitterLink` varchar(50) DEFAULT NULL,
  `LinkedIn` varchar(50) DEFAULT NULL,
  `Summary` varchar(500) DEFAULT NULL,
  `GrpName` text,
  `GrpDesignation` text,
  `GrpExperience` varchar(50) DEFAULT NULL,
  `PIName` varchar(50) DEFAULT NULL,
  `PIUrl` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `inv_name` varchar(100) NOT NULL,
  `st_name` varchar(100) NOT NULL,
  `inv_approve` int(50) NOT NULL DEFAULT '0',
  `st_approve` int(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `st_overview`
--

CREATE TABLE `st_overview` (
  `Username` varchar(100) NOT NULL,
  `Stage` varchar(100) DEFAULT NULL,
  `DOF` varchar(100) DEFAULT NULL,
  `EmpNum` int(100) DEFAULT NULL,
  `IncType` varchar(100) DEFAULT NULL,
  `LinkedInLink` varchar(100) DEFAULT NULL,
  `TwitterLink` varchar(100) DEFAULT NULL,
  `FBLink` varchar(100) DEFAULT NULL,
  `Summary` varchar(500) DEFAULT NULL,
  `CAdvName` varchar(100) DEFAULT NULL,
  `CAdvEmail` varchar(100) DEFAULT NULL,
  `PIName` varchar(100) DEFAULT NULL,
  `PIEmail` varchar(100) DEFAULT NULL,
  `OLP` varchar(500) DEFAULT NULL,
  `Logo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_overview`
--

INSERT INTO `st_overview` (`Username`, `Stage`, `DOF`, `EmpNum`, `IncType`, `LinkedInLink`, `TwitterLink`, `FBLink`, `Summary`, `CAdvName`, `CAdvEmail`, `PIName`, `PIEmail`, `OLP`, `Logo`) VALUES
('xyz123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_inv`
--

CREATE TABLE `user_inv` (
  `ID` int(20) NOT NULL,
  `Cname` varchar(100) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Website` varchar(100) NOT NULL,
  `Avg` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_st`
--

CREATE TABLE `user_st` (
  `ID` int(100) NOT NULL,
  `Stname` varchar(100) NOT NULL,
  `Ffname` varchar(100) NOT NULL,
  `Sfname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Website` varchar(100) NOT NULL,
  `Inv` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_st`
--

INSERT INTO `user_st` (`ID`, `Stname`, `Ffname`, `Sfname`, `Email`, `Type`, `Country`, `State`, `City`, `Website`, `Inv`, `Username`, `Phone`, `Password`) VALUES
(1, 'aayush', 'ABC', 'ABC', 'ABC@gmail.com', 'Media and Entertainment', 'IN', 'MH', 'MUM', 'abc.com', '1200000', 'xyz123', '8082189671', 'xyz123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_inv`
--
ALTER TABLE `user_inv`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `user_st`
--
ALTER TABLE `user_st`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_inv`
--
ALTER TABLE `user_inv`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_st`
--
ALTER TABLE `user_st`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
