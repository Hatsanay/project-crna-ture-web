-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 05:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crna`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `areaid` int(5) NOT NULL,
  `areaname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `districtid` int(5) NOT NULL,
  `districtname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `garage`
--

CREATE TABLE `garage` (
  `garageid` int(5) NOT NULL,
  `garagename` varchar(50) NOT NULL,
  `garagetel` varchar(10) NOT NULL,
  `garagehousenum` varchar(5) NOT NULL,
  `garagegroup` varchar(2) NOT NULL,
  `garageroad` varchar(20) NOT NULL,
  `garagealley` varchar(20) NOT NULL,
  `garagedistrict` varchar(20) NOT NULL,
  `garagearea` varchar(20) NOT NULL,
  `garageprovince` varchar(20) NOT NULL,
  `garagepostcode` varchar(10) NOT NULL,
  `garagelattitude` varchar(20) NOT NULL,
  `garagelonggitude` varchar(20) NOT NULL,
  `garageprofile` varchar(20) NOT NULL,
  `garageimgid` varchar(20) NOT NULL,
  `garageonoff` varchar(1) NOT NULL,
  `ownerid` int(5) NOT NULL,
  `memid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mechanic`
--

CREATE TABLE `mechanic` (
  `mechanicid` int(5) NOT NULL,
  `mechanicfullname` varchar(30) NOT NULL,
  `mechanicsex` varchar(5) NOT NULL,
  `mechanicbirthday` date NOT NULL,
  `mechanictel` varchar(10) NOT NULL,
  `mechanichousenum` varchar(8) NOT NULL,
  `mechanicgroup` varchar(5) NOT NULL,
  `mechanicroad` varchar(30) NOT NULL,
  `mechanicalley` varchar(20) NOT NULL,
  `mechanicdistrict` varchar(20) NOT NULL,
  `mechanicarea` varchar(20) NOT NULL,
  `mechanicprovince` varchar(20) NOT NULL,
  `mechanicpostcode` varchar(10) NOT NULL,
  `mechanicprofile` varchar(30) NOT NULL,
  `mechaniconoff` varchar(5) NOT NULL,
  `memid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `memid` int(5) NOT NULL,
  `memusername` varchar(30) NOT NULL,
  `mempassword` varchar(30) NOT NULL,
  `membersemail` varchar(30) NOT NULL,
  `memlavel` varchar(1) NOT NULL,
  `memdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `ownerid` int(5) NOT NULL,
  `ownerfname` varchar(30) NOT NULL,
  `ownerlname` varchar(30) NOT NULL,
  `ownersex` varchar(1) NOT NULL,
  `ownerbirthday` date NOT NULL,
  `ownertel` varchar(10) NOT NULL,
  `owneraddress` text NOT NULL,
  `ownhousenum` varchar(20) NOT NULL,
  `owngroup` varchar(20) NOT NULL,
  `ownalley` varchar(20) NOT NULL,
  `ownroad` varchar(20) NOT NULL,
  `owndistrict` varchar(20) NOT NULL,
  `ownarea` varchar(20) NOT NULL,
  `ownprovince` varchar(20) NOT NULL,
  `ownpostcode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `postcode`
--

CREATE TABLE `postcode` (
  `postcodeid` int(5) NOT NULL,
  `postcodename` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `provinceid` int(5) NOT NULL,
  `provincename` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sex`
--

CREATE TABLE `sex` (
  `sexid` int(5) NOT NULL,
  `sexname` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `typemembers`
--

CREATE TABLE `typemembers` (
  `typememid` int(2) NOT NULL,
  `typememname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`areaid`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`districtid`);

--
-- Indexes for table `garage`
--
ALTER TABLE `garage`
  ADD PRIMARY KEY (`garageid`);

--
-- Indexes for table `mechanic`
--
ALTER TABLE `mechanic`
  ADD PRIMARY KEY (`mechanicid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memid`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`ownerid`);

--
-- Indexes for table `postcode`
--
ALTER TABLE `postcode`
  ADD PRIMARY KEY (`postcodeid`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`provinceid`);

--
-- Indexes for table `sex`
--
ALTER TABLE `sex`
  ADD PRIMARY KEY (`sexid`);

--
-- Indexes for table `typemembers`
--
ALTER TABLE `typemembers`
  ADD PRIMARY KEY (`typememid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `areaid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `districtid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `garage`
--
ALTER TABLE `garage`
  MODIFY `garageid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mechanic`
--
ALTER TABLE `mechanic`
  MODIFY `mechanicid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `ownerid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postcode`
--
ALTER TABLE `postcode`
  MODIFY `postcodeid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `provinceid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sex`
--
ALTER TABLE `sex`
  MODIFY `sexid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `typemembers`
--
ALTER TABLE `typemembers`
  MODIFY `typememid` int(2) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
