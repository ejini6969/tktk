-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2024 at 02:45 AM
-- Server version: 10.11.10-MariaDB-cll-lve
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modiquei_tiktok-ads`
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
  `adstext` varchar(255) DEFAULT NULL,
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
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adsdata`
--

INSERT INTO `adsdata` (`adsid`, `onoff`, `adsname`, `domainname`, `adstext`, `status`, `adsgroupid`, `adsgroupname`, `imprs`, `cost`, `reach`, `result`, `click`, `videoname`, `date`) VALUES
('1306407968', 1, 'Sample Ad Name', 'https://example.com', 'fghfhfhf', 'Active', '105820389111', 'Sample Group', 7339, 42.37, 6116, 40, 160, 'v2.mp4', '2024-12-13'),
('1365610861', 1, '888SAMA_TiktokVideo_1217.mp4_2024-12-17 17:44:01', ' https://samataki.info/', 'Register Account And Grab Free RM33', 'Not delivering', '106886807718', ' https://samataki.info/', 278, 1.58, 219, 3, 12, '888SAMA_TiktokVideo_1217.mp4', '2024-12-17'),
('2007694103', 1, 'Sample Ad Name', 'https://example.com', 'fghfhfhf', 'Active', '100243470597', 'Sample Group', 66558, 423.69, 55471, 453, 1431, 'v2.mp4', '2024-12-13'),
('2193094109', 1, 'Sample Ad Name', 'https://example.com', 'fghfhfhf', 'Active', '104839665075', 'Sample Group', 47798, 338.96, 39836, 499, 1324, 'v2.mp4', '2024-12-13'),
('2296593442', 1, 'Sample Ad Name', 'https://example.com', 'fghfhfhf', 'Active', '105348601566', 'Sample Group', 52792, 296.59, 43998, 577, 1267, 'v2.mp4', '2024-12-13'),
('2486157806', 1, 'COD SLOT', 'https://mninetonight.biz', 'Register with Us now, FREE Welcome gift 200PHP!', 'Not delivering', '106886807718', 'COD SLOT', 0, 0.00, 0, 0, 0, 'COD SLOT TIKTOK.mp4', '2024-12-12'),
('2739715760', 1, 'Sample Ad Name', 'https://example.com', 'fghfhfhf', 'Active', '106421783554', 'Sample Group', 39233, 310.71, 32698, 309, 1126, 'v2.mp4', '2024-12-13'),
('3955604437', 1, 'MARCO88', 'https://vacban.biz/', 'Main Sekarang', 'Active', '106886807718', 'Marco88', 4677, 15.26, 3704, 18, 29, 'MARCO88_TiktokVideo_new.mp4', '2024-12-15'),
('9607511546', 1, 'PGTOTO-V1', 'https://medelight.biz/', 'Daftar Sekarang', 'Active', '106886807718', 'PGTOTO-SET1', 174126, 261.42, 123442, 1223, 2490, 'v2.mp4', '2024-12-01'),
('9607511546', 1, 'PGTOTO-V1', 'https://medelight.biz/', 'Daftar Sekarang', 'Active', '106886807718', 'PGTOTO-SET1', 129329, 225.43, 100929, 788, 1927, 'v2.mp4', '2024-12-02'),
('9607511546', 1, 'PGTOTO-V1', 'https://medelight.biz/', 'Daftar Sekarang', 'Active', '106886807718', 'PGTOTO-SET1', 166364, 280.77, 156432, 1222, 2379, 'v2.mp4', '2024-12-03'),
('9607511546', 1, 'PGTOTO-V1', 'https://medelight.biz/', 'Daftar Sekarang', 'Active', '106886807718', 'PGTOTO-SET1', 251448, 437.54, 200961, 2321, 3646, 'v2.mp4', '2024-12-04'),
('9607511546', 1, 'PGTOTO-V1', 'https://medelight.biz/', 'Daftar Sekarang', 'Active', '106886807718', 'PGTOTO-SET1', 153851, 241.40, 124322, 1455, 2277, 'v2.mp4', '2024-12-05'),
('9607511546', 1, 'PGTOTO-V1', 'https://medelight.biz/', 'Daftar Sekarang', 'Active', '106886807718', 'PGTOTO-SET1', 160811, 268.91, 155429, 1122, 2380, 'v2.mp4', '2024-12-06'),
('9607511546', 1, 'PGTOTO-V1', 'https://medelight.biz/', 'Daftar Sekarang', 'Active', '106886807718', 'PGTOTO-SET1', 101364, 249.81, 95433, 977, 1784, 'v2.mp4', '2024-12-07'),
('9607511546', 1, 'PGTOTO-V1', 'https://medelight.biz/', 'Daftar Sekarang', 'Active', '106886807718', 'PGTOTO-SET1', 124069, 233.92, 100087, 933, 1799, 'v2.mp4', '2024-12-08'),
('9607511546', 1, 'PGTOTO-V1', 'https://medelight.biz/', 'Daftar Sekarang', 'Active', '106886807718', 'PGTOTO-SET1', 61364, 189.42, 56778, 233, 884, 'v2.mp4', '2024-12-09');

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
('100243470597', 1, '1', 'Active', '100060327136', 0.00, 0, 0, 0, 0, '2024-12-13'),
('104839665075', 1, '2', 'Active', '101679841082', 0.00, 0, 0, 0, 0, '2024-12-13'),
('105348601566', 1, '3', 'Active', '103709792671', 0.00, 0, 0, 0, 0, '2024-12-13'),
('105820389111', 1, 'Ad Group Name 1', 'Active', '101671874485', 0.00, 0, 0, 0, 0, '2024-12-13'),
('106050274871', 1, 'Ad Group Name 1', 'Active', '100060327136', 0.00, 0, 0, 0, 0, '2024-12-15'),
('106421783554', 1, '4', 'Active', '105209674367', 0.00, 0, 0, 0, 0, '2024-12-13'),
('106886807718', 1, 'PGTOTO-Set1', 'Active', '100060327136', 1.58, 219, 278, 3, 12, '2024-12-09');

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
(1, '\n                        dytdyt');

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
('100060327136', 1, 'MARCO88', 'Active', 1.58, 219, 278, 3, 12, '2024-12-09'),
('101671874485', 1, 'MACRO88- retargeting', 'Active', 0.00, 0, 0, 0, 0, '2024-12-13'),
('101679841082', 1, 'MARCO88 1', 'Active', 0.00, 0, 0, 0, 0, '2024-12-09'),
('103709792671', 1, 'MARCO88 2', 'Not delivering', 0.00, 0, 0, 0, 0, '2024-12-09'),
('105209674367', 1, 'MARCO88 3', 'Active', 0.00, 0, 0, 0, 0, '2024-12-04');

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
(1, 'USD');

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
(1, '2024-12-17', '2024-12-17');

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
  ADD PRIMARY KEY (`adsid`,`date`),
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
