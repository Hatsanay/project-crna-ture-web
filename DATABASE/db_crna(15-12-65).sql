-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 04:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
  `areaname` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`areaid`, `areaname`) VALUES
(1, 'เมืองกระบี่'),
(2, 'เขาพนม'),
(3, 'เกาะลันตา'),
(4, 'คลองท่อม'),
(5, 'อ่าวลึก'),
(6, 'ปลายพระยา'),
(7, 'ลำทับ'),
(8, 'เหนือคลอง');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `districtid` int(5) NOT NULL,
  `districtname` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`districtid`, `districtname`) VALUES
(1, 'ปากน้ำ'),
(2, 'กระบี่ใหญ่'),
(3, 'กระบี่น้อย'),
(4, 'เขาคราม'),
(5, ' เขาทอง'),
(6, 'ทับปริก'),
(7, 'ไสไทย'),
(8, 'อ่าวนาง'),
(9, 'หนองทะเล'),
(10, 'คลองประสงค์'),
(11, 'เขาพนม'),
(12, 'เขาดิน'),
(13, 'สินปุน'),
(14, 'พรุเตียว'),
(15, 'หน้าเขา'),
(16, 'โคกหาร'),
(17, 'เกาะลันตาใหญ่'),
(18, 'เกาะลันตาน้อย'),
(19, 'เกาะกลาง'),
(20, 'คลองยาง'),
(21, 'ศาลาด่าน'),
(22, 'คลองท่อมใต้'),
(23, 'คลองท่อมเหนือ'),
(24, 'คลองพน'),
(25, 'ทรายขาว'),
(26, 'ห้วยน้ำขาว'),
(27, 'พรุดินนา'),
(28, 'เพหลา'),
(29, 'อ่าวลึกใต้'),
(30, 'แหลมสัก'),
(31, 'นาเหนือ'),
(32, 'คลองหิน'),
(33, 'อ่าวลึกน้อย'),
(34, 'อ่าวลึกเหนือ'),
(35, 'เขาใหญ่'),
(36, 'คลองยา'),
(37, 'บ้านกลาง'),
(38, 'ปลายพระยา'),
(39, 'เขาเขน'),
(40, 'เขาต่อ'),
(41, 'คีรีวง'),
(42, 'ลำทับ'),
(43, 'ดินอุดม'),
(44, 'ทุ่งไทรทอง'),
(45, 'ดินแดง'),
(46, 'เหนือคลอง'),
(47, 'เกาะศรีบอยา'),
(48, 'คลองขนาน'),
(49, 'คลองเขม้า'),
(50, 'โคกยาง'),
(51, 'ตลิ่งชัน'),
(52, 'ปกาสัย'),
(53, 'ห้วยยูง');

-- --------------------------------------------------------

--
-- Table structure for table `garage`
--

CREATE TABLE `garage` (
  `garageid` int(5) NOT NULL,
  `garagename` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `garagetel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `garagehousenum` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `garagegroup` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `garageroad` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `garagealley` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `garagedistrict` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `garagearea` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `garageprovince` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `garagepostcode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `garagelattitude` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `garagelonggitude` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `garageprofile` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `garageimgid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `garageonoff` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `ownerid` int(5) NOT NULL,
  `memid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mechanic`
--

CREATE TABLE `mechanic` (
  `mechanicid` int(5) NOT NULL,
  `mechanicfullname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mechanicsex` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `mechanicbirthday` date NOT NULL,
  `mechanictel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mechanichousenum` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `mechanicgroup` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `mechanicroad` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mechanicalley` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mechanicdistrict` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mechanicarea` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mechanicprovince` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mechanicpostcode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mechanicprofile` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mechaniconoff` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `memid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `memid` int(5) NOT NULL,
  `memusername` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mempassword` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `membersemail` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `memlavel` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `memdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memid`, `memusername`, `mempassword`, `membersemail`, `memlavel`, `memdate`) VALUES
(1, 'admin1', '1234', 'hatsanay022com@gmail.com', '5', '2022-12-03'),
(2, '', '', '', '3', '2022-12-15'),
(3, '', '', '', '3', '2022-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `ownerid` int(5) NOT NULL,
  `ownerfname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ownerlname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ownersex` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `ownerbirthday` date NOT NULL,
  `ownertel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `owneraddress` text COLLATE utf8_unicode_ci NOT NULL,
  `ownhousenum` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `owngroup` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ownalley` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ownroad` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `owndistrict` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ownarea` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ownprovince` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ownpostcode` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `postcode`
--

CREATE TABLE `postcode` (
  `postcodeid` int(5) NOT NULL,
  `postcodename` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `postcode`
--

INSERT INTO `postcode` (`postcodeid`, `postcodename`) VALUES
(1, '81120'),
(2, '81150'),
(3, '81140'),
(4, '80240'),
(5, '81170'),
(6, '81160'),
(7, '81000'),
(8, '81130');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `provinceid` int(5) NOT NULL,
  `provincename` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`provinceid`, `provincename`) VALUES
(1, 'กระบี่');

-- --------------------------------------------------------

--
-- Table structure for table `sex`
--

CREATE TABLE `sex` (
  `sexid` int(5) NOT NULL,
  `sexname` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sex`
--

INSERT INTO `sex` (`sexid`, `sexname`) VALUES
(1, 'ชาย'),
(2, 'หญิง');

-- --------------------------------------------------------

--
-- Table structure for table `typemembers`
--

CREATE TABLE `typemembers` (
  `typememid` int(2) NOT NULL,
  `typememname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `typememdate` date NOT NULL,
  `typememtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `typemembers`
--

INSERT INTO `typemembers` (`typememid`, `typememname`, `typememdate`, `typememtime`) VALUES
(1, 'ผู้ใช้ทั่วไป', '2022-12-15', '02:38:53'),
(2, 'อู่/ศูนย์ให้บริการ', '2022-12-15', '02:45:12'),
(3, 'ช่างอิสระ', '2022-12-15', '02:55:59'),
(5, 'ผู้ดูแลระบบ', '2022-12-15', '04:10:17');

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
  MODIFY `areaid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `districtid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

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
  MODIFY `memid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `ownerid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postcode`
--
ALTER TABLE `postcode`
  MODIFY `postcodeid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `provinceid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sex`
--
ALTER TABLE `sex`
  MODIFY `sexid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
