-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 08:48 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(5) NOT NULL,
  `adminfname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `adminlname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `adminprofile` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `memid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `areaid` int(5) NOT NULL,
  `areaname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `areadate` date NOT NULL,
  `areatime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`areaid`, `areaname`, `areadate`, `areatime`) VALUES
(1, 'เมืองกระบี่', '2022-12-16', '02:45:28'),
(2, 'เขาพนม', '2022-12-16', '02:45:35'),
(3, 'เกาะลันตา', '2022-12-16', '02:45:42'),
(4, 'คลองท่อม', '2022-12-16', '02:45:49'),
(5, 'อ่าวลึก', '2022-12-16', '02:45:56'),
(6, 'ปลายพระยา', '2022-12-16', '02:46:01'),
(7, 'ลำทับ', '2022-12-16', '02:46:07'),
(8, 'เหนือคลอง', '2022-12-16', '02:46:14');

-- --------------------------------------------------------

--
-- Table structure for table `custumer`
--

CREATE TABLE `custumer` (
  `cusid` int(5) NOT NULL,
  `cusfullname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cus_img` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cusbirtday` date NOT NULL,
  `custel` int(11) NOT NULL,
  `memid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `districtid` int(5) NOT NULL,
  `districtname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `districtdate` date NOT NULL,
  `districttime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`districtid`, `districtname`, `districtdate`, `districttime`) VALUES
(1, 'ปากน้ำ', '2022-12-16', '02:38:52'),
(2, 'กระบี่ใหญ่', '2022-12-16', '02:39:06'),
(3, 'กระบี่น้อย', '2022-12-16', '02:39:20'),
(4, 'เขาคราม', '2022-12-16', '02:39:28'),
(5, 'เขาทอง', '2022-12-16', '02:39:37'),
(6, 'ทับปริก', '2022-12-16', '02:39:45'),
(7, 'ไสไทย', '2022-12-16', '02:39:52'),
(8, 'อ่าวนาง', '2022-12-16', '02:39:59'),
(9, 'หนองทะเล', '2022-12-16', '02:40:05'),
(10, 'คลองประสงค์', '2022-12-16', '02:40:13'),
(11, 'เขาพนม', '2022-12-16', '02:40:22'),
(12, 'เขาดิน', '2022-12-16', '02:40:28'),
(13, 'สินปุน', '2022-12-16', '02:40:34'),
(14, 'พรุเตียว', '2022-12-16', '02:40:44'),
(15, 'หน้าเขา', '2022-12-16', '02:40:51'),
(16, 'โคกหาร', '2022-12-16', '02:40:57'),
(17, 'เกาะลันตาใหญ่', '2022-12-16', '02:41:04'),
(18, 'เกาะลันตาน้อย', '2022-12-16', '02:41:10'),
(19, 'เกาะกลาง', '2022-12-16', '02:41:17'),
(20, 'คลองยาง', '2022-12-16', '02:41:27'),
(21, 'ศาลาด่าน', '2022-12-16', '02:41:33'),
(22, 'คลองท่อมใต้', '2022-12-16', '02:41:40'),
(23, 'คลองท่อมเหนือ', '2022-12-16', '02:41:45'),
(24, 'คลองพน', '2022-12-16', '02:41:55'),
(25, 'ทรายขาว', '2022-12-16', '02:42:01'),
(26, 'ห้วยน้ำขาว', '2022-12-16', '02:42:07'),
(27, 'พรุดินนา', '2022-12-16', '02:42:13'),
(28, 'เพหลา', '2022-12-16', '02:42:19'),
(29, 'อ่าวลึกใต้', '2022-12-16', '02:42:26'),
(30, 'แหลมสัก', '2022-12-16', '02:42:34'),
(31, 'นาเหนือ', '2022-12-16', '02:42:42'),
(32, 'คลองหิน', '2022-12-16', '02:42:48'),
(33, 'อ่าวลึกน้อย', '2022-12-16', '02:42:55'),
(34, 'อ่าวลึกเหนือ', '2022-12-16', '02:43:02'),
(35, 'เขาใหญ่', '2022-12-16', '02:43:14'),
(36, 'คลองยา', '2022-12-16', '02:43:22'),
(37, 'บ้านกลาง', '2022-12-16', '02:43:32'),
(38, 'ปลายพระยา', '2022-12-16', '02:43:37'),
(39, 'เขาเขน', '2022-12-16', '02:43:44'),
(40, 'เขาต่อ', '2022-12-16', '02:43:51'),
(41, 'คีรีวง', '2022-12-16', '02:43:56'),
(42, 'ลำทับ', '2022-12-16', '02:44:03'),
(43, 'ดินอุดม', '2022-12-16', '02:44:09'),
(44, 'ทุ่งไทรทอง', '2022-12-16', '02:44:15'),
(45, 'ดินแดง', '2022-12-16', '02:44:21'),
(46, 'เหนือคลอง', '2022-12-16', '02:44:29'),
(47, 'เกาะศรีบอยา', '2022-12-16', '02:44:37'),
(48, 'คลองขนาน', '2022-12-16', '02:44:44'),
(49, 'คลองเขม้า', '2022-12-16', '02:44:51'),
(50, 'โคกยาง', '2022-12-16', '02:44:57'),
(51, 'ตลิ่งชัน', '2022-12-16', '02:45:02'),
(52, 'ปกาสัย', '2022-12-16', '02:45:08'),
(53, 'ห้วยยูง', '2022-12-16', '02:45:15');

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
-- Table structure for table `garageimg`
--

CREATE TABLE `garageimg` (
  `garageimgid` int(5) NOT NULL,
  `garageimgname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `garageimgdate` date NOT NULL,
  `garageimgtime` time NOT NULL
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
  `postcodename` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `postcodedate` date NOT NULL,
  `postcodetime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `postcode`
--

INSERT INTO `postcode` (`postcodeid`, `postcodename`, `postcodedate`, `postcodetime`) VALUES
(1, '81000', '2022-12-16', '02:47:14'),
(2, '81140', '2022-12-16', '02:47:21'),
(3, '80240', '2022-12-16', '02:47:28'),
(4, '81150', '2022-12-16', '02:47:35'),
(5, '81120', '2022-12-16', '02:47:47'),
(6, '81170', '2022-12-16', '02:48:03'),
(7, '81110', '2022-12-16', '02:48:23'),
(8, '81160', '2022-12-16', '02:48:45'),
(9, '81130', '2022-12-16', '02:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `provinceid` int(5) NOT NULL,
  `provincename` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `provincedate` date NOT NULL,
  `provincetime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`provinceid`, `provincename`, `provincedate`, `provincetime`) VALUES
(1, 'จังหวัดกระบี่', '2022-12-16', '02:38:32');

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
(3, 'ช่างอิสระ', '2022-12-15', '02:55:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`areaid`);

--
-- Indexes for table `custumer`
--
ALTER TABLE `custumer`
  ADD PRIMARY KEY (`cusid`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `areaid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `custumer`
--
ALTER TABLE `custumer`
  MODIFY `cusid` int(5) NOT NULL AUTO_INCREMENT;

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
  MODIFY `postcodeid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
