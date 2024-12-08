-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2024 at 04:06 PM
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
-- Database: `tiktok-ads`
--

-- --------------------------------------------------------

--
-- Table structure for table `adsdata`
--

CREATE TABLE `adsdata` (
  `adsid` varchar(255) NOT NULL,
  `onoff` tinyint(1) DEFAULT NULL,
  `adsname` varchar(255) DEFAULT NULL,
  `domainname` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `adsgroupid` varchar(255) NOT NULL,
  `adsgroupname` varchar(255) DEFAULT NULL,
  `imprs` int(11) DEFAULT NULL,
  `cost` decimal(10,2) DEFAULT NULL,
  `reach` int(11) DEFAULT NULL,
  `result` int(11) DEFAULT NULL,
  `cpm` decimal(10,2) GENERATED ALWAYS AS (`cost` / `imprs` * 1000) STORED,
  `cpc` decimal(10,2) GENERATED ALWAYS AS (`cost` / `click`) STORED,
  `cpr` decimal(10,2) GENERATED ALWAYS AS (`cost` / `result`) STORED,
  `click` int(11) DEFAULT NULL,
  `ctr` decimal(10,2) GENERATED ALWAYS AS (`click` / `imprs` * 100) STORED,
  `videoname` varchar(255) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adsdata`
--

INSERT INTO `adsdata` (`adsid`, `onoff`, `adsname`, `domainname`, `status`, `adsgroupid`, `adsgroupname`, `imprs`, `cost`, `reach`, `result`, `click`, `videoname`, `date`) VALUES
('123451234567', 1, '1203-1203', 'https://example.com', 'Not delivering', '987651234567', 'GROUP of Conda', 12, 23.50, 11, 19, 33, 'video2.mp4', '2024-12-03'),
('123451234568', 1, '1204-1204', 'https://google.com', 'Active', '987651234568', 'Sample Group', 5000, 120.50, 3000, 22, 150, 'video3.mp4', '2024-12-04'),
('123458766123', 1, 'ADS 22', 'https://abc.com', 'Active', '987651234568', 'GGG', 651, 111.85, 3000, 23, 150, 'video.mp4', '2024-12-07'),
('3699884872', 1, 'AAA', 'https://guthib.com/', 'Active', '987651234568', 'Sample Group', 5000, 120.50, 3000, 100, 150, 'video2.mp4', '2024-12-07'),
('6640374618', 1, 'Sample Ad Name', 'https://amazon.com', 'Active', '987651234568', 'Sample Group', 5000, 120.50, 3000, 100, 150, 'video.mp4', '2024-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `adsgroupdata`
--

CREATE TABLE `adsgroupdata` (
  `adsgroupid` varchar(255) NOT NULL,
  `onoff` tinyint(1) DEFAULT 0,
  `adsgroupname` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `campaignid` varchar(255) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `reach` int(11) NOT NULL,
  `imprs` int(11) NOT NULL,
  `result` int(11) NOT NULL,
  `click` int(11) NOT NULL,
  `cpm` decimal(10,2) GENERATED ALWAYS AS (`cost` / `imprs` * 1000) STORED,
  `cpc` decimal(10,2) GENERATED ALWAYS AS (`cost` / `click`) STORED,
  `cpr` decimal(10,2) GENERATED ALWAYS AS (`cost` / `result`) STORED,
  `ctr` decimal(10,2) GENERATED ALWAYS AS (`click` / `imprs` * 100) STORED,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adsgroupdata`
--

INSERT INTO `adsgroupdata` (`adsgroupid`, `onoff`, `adsgroupname`, `status`, `campaignid`, `cost`, `reach`, `imprs`, `result`, `click`, `date`) VALUES
('103372239368', 1, 'TESTING FINAL ADGRPSSSS', 'Active', '102951234568', 0.00, 0, 0, 0, 0, '2024-12-07'),
('105302509326', 1, 'AD GRP 568', 'Active', '102951234568', 0.00, 0, 0, 0, 0, '2024-12-07'),
('987651234567', 1, 'AD GRP 569', 'Active', '102951234569', 23.50, 11, 12, 19, 33, '2024-12-04'),
('987651234568', 1, 'dgdfgdgdf', 'Inactive', '102951234567', 473.35, 12000, 15651, 245, 600, '2024-12-03'),
('987651234569', 1, 'ADG', 'Not delivering', '102951234568', 0.00, 0, 0, 0, 0, '2024-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `ad_user`
--

CREATE TABLE `ad_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ad_user`
--

INSERT INTO `ad_user` (`id`, `username`) VALUES
(1, 'Justin Ngu');

-- --------------------------------------------------------

--
-- Table structure for table `campaigndata`
--

CREATE TABLE `campaigndata` (
  `campaignid` varchar(255) NOT NULL,
  `onoff` tinyint(1) DEFAULT 0,
  `campaignname` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `reach` int(11) NOT NULL,
  `imprs` int(11) NOT NULL,
  `result` int(11) NOT NULL,
  `click` int(11) NOT NULL,
  `cpm` decimal(10,2) GENERATED ALWAYS AS (`cost` / `imprs` * 1000) STORED,
  `cpc` decimal(10,2) GENERATED ALWAYS AS (`cost` / `click`) STORED,
  `cpr` decimal(10,2) GENERATED ALWAYS AS (`cost` / `result`) STORED,
  `ctr` decimal(10,2) GENERATED ALWAYS AS (`click` / `imprs` * 100) STORED,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campaigndata`
--

INSERT INTO `campaigndata` (`campaignid`, `onoff`, `campaignname`, `status`, `cost`, `reach`, `imprs`, `result`, `click`, `date`) VALUES
('102951234567', 0, 'DOUBLE CAMPAIGN', 'Inactive', 473.35, 12000, 15651, 245, 600, '2024-12-03'),
('102951234568', 1, 'Campaign 2', 'Active', 0.00, 0, 0, 0, 0, '2024-12-04'),
('102951234569', 1, 'Campaign 3', 'Active', 23.50, 11, 12, 19, 33, '2024-12-05'),
('104635814326', 1, 'THIS FOR TEST', 'Not delivering', 0.00, 0, 0, 0, 0, '2024-12-05'),
('106500340620', 1, 'CPP 555', 'Active', 0.00, 0, 0, 0, 0, '2024-12-07'),
('108659361799', 1, 'test new cmp', 'Inactive', 0.00, 0, 0, 0, 0, '2024-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `userid` int(11) NOT NULL,
  `currency` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`userid`, `currency`) VALUES
(1, 'MYR');

-- --------------------------------------------------------

--
-- Table structure for table `daterange`
--

CREATE TABLE `daterange` (
  `userid` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daterange`
--

INSERT INTO `daterange` (`userid`, `startdate`, `enddate`) VALUES
(1, '2024-12-02', '2024-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `timezone`
--

CREATE TABLE `timezone` (
  `userid` int(11) NOT NULL,
  `timezone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timezone`
--

INSERT INTO `timezone` (`userid`, `timezone`) VALUES
(1, 'kuala_lumpur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adsdata`
--
ALTER TABLE `adsdata`
  ADD PRIMARY KEY (`adsid`),
  ADD KEY `adsgroupid` (`adsgroupid`);

--
-- Indexes for table `adsgroupdata`
--
ALTER TABLE `adsgroupdata`
  ADD PRIMARY KEY (`adsgroupid`),
  ADD KEY `campaignid` (`campaignid`);

--
-- Indexes for table `ad_user`
--
ALTER TABLE `ad_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaigndata`
--
ALTER TABLE `campaigndata`
  ADD PRIMARY KEY (`campaignid`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `daterange`
--
ALTER TABLE `daterange`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `timezone`
--
ALTER TABLE `timezone`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad_user`
--
ALTER TABLE `ad_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daterange`
--
ALTER TABLE `daterange`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `timezone`
--
ALTER TABLE `timezone`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adsdata`
--
ALTER TABLE `adsdata`
  ADD CONSTRAINT `adsdata_ibfk_1` FOREIGN KEY (`adsgroupid`) REFERENCES `adsgroupdata` (`adsgroupid`) ON DELETE CASCADE;

--
-- Constraints for table `adsgroupdata`
--
ALTER TABLE `adsgroupdata`
  ADD CONSTRAINT `adsgroupdata_ibfk_1` FOREIGN KEY (`campaignid`) REFERENCES `campaigndata` (`campaignid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
