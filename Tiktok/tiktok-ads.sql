-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2024 at 03:03 PM
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
  `id` int(11) NOT NULL,
  `onoff` tinyint(1) DEFAULT NULL,
  `adsname` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `adgroupname` varchar(255) DEFAULT NULL,
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

INSERT INTO `adsdata` (`id`, `onoff`, `adsname`, `status`, `adgroupname`, `imprs`, `cost`, `reach`, `result`, `click`, `videoname`, `date`) VALUES
(1, 1, '1203-1203', 'Not delivering', 'GROUP of Conda', 12, 23.50, 11, 19, 33, 'video2.mp4', '2024-12-03'),
(32, 0, '1204-1204', 'Active', 'Sample Group', 5000, 120.50, 3000, 100, 150, 'video3.mp4', '2024-12-04'),
(33, 1, '1205-1205', 'Active', 'Sample Group', 5000, 120.50, 3000, 100, 150, 'video.mp4', '2024-12-05'),
(35, 1, '1206-1206', 'Active', 'Sample Group', 5000, 120.50, 3000, 100, 150, 'video2.mp4', '2024-12-06');

--
-- Triggers `adsdata`
--
DELIMITER $$
CREATE TRIGGER `update_totaladsdata_after_delete` AFTER DELETE ON `adsdata` FOR EACH ROW BEGIN
    UPDATE totaladsdata
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM adsdata),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM adsdata),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM adsdata),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM adsdata),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM adsdata);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_totaladsdata_after_insert` AFTER INSERT ON `adsdata` FOR EACH ROW BEGIN
    UPDATE totaladsdata
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM adsdata),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM adsdata),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM adsdata),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM adsdata),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM adsdata);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_totaladsdata_after_update` AFTER UPDATE ON `adsdata` FOR EACH ROW BEGIN
    UPDATE totaladsdata
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM adsdata),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM adsdata),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM adsdata),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM adsdata),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM adsdata);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `adsgroupdata`
--

CREATE TABLE `adsgroupdata` (
  `id` int(11) NOT NULL,
  `onoff` tinyint(1) DEFAULT 0,
  `adsgroupname` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `adsgroupid` bigint(20) NOT NULL,
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

INSERT INTO `adsgroupdata` (`id`, `onoff`, `adsgroupname`, `status`, `adsgroupid`, `cost`, `reach`, `imprs`, `result`, `click`, `date`) VALUES
(1, 1, 'dgdfgdgdf', 'Inactive', 23435345344, 37.00, 8, 3, 2, 11, '2024-12-03'),
(6, 1, 'Ad Group Name 1', 'Not delivering', 16534534645751, 120.50, 3000, 5000, 100, 150, NULL),
(7, 1, 'Ad Group Name 1', 'Active', 16534534645751, 120.50, 3000, 5000, 100, 150, NULL);

--
-- Triggers `adsgroupdata`
--
DELIMITER $$
CREATE TRIGGER `update_totaladsgroupdata_after_delete` AFTER DELETE ON `adsgroupdata` FOR EACH ROW BEGIN
    UPDATE totaladsgroupdata
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM adsgroupdata),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM adsgroupdata),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM adsgroupdata),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM adsgroupdata),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM adsgroupdata);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_totaladsgroupdata_after_insert` AFTER INSERT ON `adsgroupdata` FOR EACH ROW BEGIN
    UPDATE totaladsgroupdata
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM adsgroupdata),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM adsgroupdata),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM adsgroupdata),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM adsgroupdata),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM adsgroupdata);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_totaladsgroupdata_after_update` AFTER UPDATE ON `adsgroupdata` FOR EACH ROW BEGIN
    UPDATE totaladsgroupdata
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM adsgroupdata),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM adsgroupdata),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM adsgroupdata),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM adsgroupdata),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM adsgroupdata);
END
$$
DELIMITER ;

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
  `id` int(11) NOT NULL,
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
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campaigndata`
--

INSERT INTO `campaigndata` (`id`, `onoff`, `campaignname`, `status`, `cost`, `reach`, `imprs`, `result`, `click`, `date`) VALUES
(1, 0, 'DOUBLE CAMPAIGN', 'Inactive', 37.00, 8, 3, 2, 11, NULL),
(2, 1, 'dfgdgd', 'Active', 120.50, 3000, 5000, 11, 150, NULL),
(5, 1, 'Sample Campaign Name', 'Not delivering', 120.50, 3000, 5000, 100, 150, NULL);

--
-- Triggers `campaigndata`
--
DELIMITER $$
CREATE TRIGGER `update_totalcampaigndata_after_delete` AFTER DELETE ON `campaigndata` FOR EACH ROW BEGIN
    UPDATE totalcampaigndata
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM campaigndata),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM campaigndata),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM campaigndata),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM campaigndata),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM campaigndata);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_totalcampaigndata_after_insert` AFTER INSERT ON `campaigndata` FOR EACH ROW BEGIN
    UPDATE totalcampaigndata
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM campaigndata),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM campaigndata),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM campaigndata),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM campaigndata),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM campaigndata);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_totalcampaigndata_after_update` AFTER UPDATE ON `campaigndata` FOR EACH ROW BEGIN
    UPDATE totalcampaigndata
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM campaigndata),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM campaigndata),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM campaigndata),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM campaigndata),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM campaigndata);
END
$$
DELIMITER ;

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
(1, '2024-12-04', '2024-12-06');

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

-- --------------------------------------------------------

--
-- Table structure for table `totaladsdata`
--

CREATE TABLE `totaladsdata` (
  `totalcost` decimal(10,2) NOT NULL,
  `totalreach` int(11) NOT NULL,
  `totalimprs` int(11) NOT NULL,
  `totalresult` int(11) NOT NULL,
  `totalclick` int(11) NOT NULL,
  `totalcpm` decimal(10,2) GENERATED ALWAYS AS (case when `totalimprs` = 0 then 0 else `totalcost` / `totalimprs` * 1000 end) STORED,
  `totalcpc` decimal(10,2) GENERATED ALWAYS AS (case when `totalclick` = 0 then 0 else `totalcost` / `totalclick` end) STORED,
  `totalcpr` decimal(10,2) GENERATED ALWAYS AS (case when `totalresult` = 0 then 0 else `totalcost` / `totalresult` end) STORED,
  `totalctr` decimal(10,2) GENERATED ALWAYS AS (case when `totalimprs` = 0 then 0 else `totalclick` / `totalimprs` * 100 end) STORED,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `totaladsdata`
--

INSERT INTO `totaladsdata` (`totalcost`, `totalreach`, `totalimprs`, `totalresult`, `totalclick`, `date`) VALUES
(385.00, 9011, 15012, 319, 483, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `totaladsgroupdata`
--

CREATE TABLE `totaladsgroupdata` (
  `totalcost` decimal(10,2) NOT NULL,
  `totalreach` int(11) NOT NULL,
  `totalimprs` int(11) NOT NULL,
  `totalresult` int(11) NOT NULL,
  `totalclick` int(11) NOT NULL,
  `totalcpm` decimal(10,2) GENERATED ALWAYS AS (case when `totalimprs` = 0 then 0 else `totalcost` / `totalimprs` * 1000 end) STORED,
  `totalcpc` decimal(10,2) GENERATED ALWAYS AS (case when `totalclick` = 0 then 0 else `totalcost` / `totalclick` end) STORED,
  `totalcpr` decimal(10,2) GENERATED ALWAYS AS (case when `totalresult` = 0 then 0 else `totalcost` / `totalresult` end) STORED,
  `totalctr` decimal(10,2) GENERATED ALWAYS AS (case when `totalimprs` = 0 then 0 else `totalclick` / `totalimprs` * 100 end) STORED,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `totaladsgroupdata`
--

INSERT INTO `totaladsgroupdata` (`totalcost`, `totalreach`, `totalimprs`, `totalresult`, `totalclick`, `date`) VALUES
(278.00, 6008, 10003, 202, 311, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `totalcampaigndata`
--

CREATE TABLE `totalcampaigndata` (
  `totalcost` decimal(10,2) NOT NULL,
  `totalreach` int(11) NOT NULL,
  `totalimprs` int(11) NOT NULL,
  `totalresult` int(11) NOT NULL,
  `totalclick` int(11) NOT NULL,
  `totalcpm` decimal(10,2) GENERATED ALWAYS AS (case when `totalimprs` = 0 then 0 else `totalcost` / `totalimprs` * 1000 end) STORED,
  `totalcpc` decimal(10,2) GENERATED ALWAYS AS (case when `totalclick` = 0 then 0 else `totalcost` / `totalclick` end) STORED,
  `totalcpr` decimal(10,2) GENERATED ALWAYS AS (case when `totalresult` = 0 then 0 else `totalcost` / `totalresult` end) STORED,
  `totalctr` decimal(10,2) GENERATED ALWAYS AS (case when `totalimprs` = 0 then 0 else `totalclick` / `totalimprs` * 100 end) STORED,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `totalcampaigndata`
--

INSERT INTO `totalcampaigndata` (`totalcost`, `totalreach`, `totalimprs`, `totalresult`, `totalclick`, `date`) VALUES
(278.00, 6008, 10003, 113, 311, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adsdata`
--
ALTER TABLE `adsdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adsgroupdata`
--
ALTER TABLE `adsgroupdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_user`
--
ALTER TABLE `ad_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaigndata`
--
ALTER TABLE `campaigndata`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `adsdata`
--
ALTER TABLE `adsdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `adsgroupdata`
--
ALTER TABLE `adsgroupdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ad_user`
--
ALTER TABLE `ad_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `campaigndata`
--
ALTER TABLE `campaigndata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
