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

CREATE TABLE adsdata (
  adsid VARCHAR(255) PRIMARY KEY, 
  onoff TINYINT(1) DEFAULT NULL,
  adsname VARCHAR(255) DEFAULT NULL,
  status VARCHAR(255) DEFAULT NULL,
  adsgroupid VARCHAR(255) NOT NULL, 
  adgroupname VARCHAR(255) DEFAULT NULL,
  imprs INT(11) DEFAULT NULL,
  cost DECIMAL(10,2) DEFAULT NULL,
  reach INT(11) DEFAULT NULL,
  result INT(11) DEFAULT NULL,
  cpm DECIMAL(10,2) GENERATED ALWAYS AS (cost / imprs * 1000) STORED,
  cpc DECIMAL(10,2) GENERATED ALWAYS AS (cost / click) STORED,
  cpr DECIMAL(10,2) GENERATED ALWAYS AS (cost / result) STORED,
  click INT(11) DEFAULT NULL,
  ctr DECIMAL(10,2) GENERATED ALWAYS AS (click / imprs * 100) STORED,
  videoname VARCHAR(255) NOT NULL,
  date DATE DEFAULT NULL,
  FOREIGN KEY (adsgroupid) REFERENCES adsgroupdata(adsgroupid) ON DELETE CASCADE
);




--
-- Dumping data for table `adsdata`
--

INSERT INTO `adsdata` 
(`adsid`, `onoff`, `adsname`, `status`, `adsgroupid`, `adgroupname`, `imprs`, `cost`, `reach`, `result`, `click`, `videoname`, `date`) 
VALUES
('123451234567', 1, '1203-1203', 'Not delivering', '987651234567', 'GROUP of Conda', 12, 23.50, 11, 19, 33, 'video2.mp4', '2024-12-03'),
('123451234568', 0, '1204-1204', 'Active', '987651234568', 'Sample Group', 5000, 120.50, 3000, 100, 150, 'video3.mp4', '2024-12-04'),
('123451234569', 1, '1205-1205', 'Active', '987651234569', 'Sample Group', 5000, 120.50, 3000, 100, 150, 'video.mp4', '2024-12-05')


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

CREATE TABLE `adsgroupdata` (
  `adsgroupid` VARCHAR(255) PRIMARY KEY, 
  `onoff` TINYINT(1) DEFAULT 0, 
  `adsgroupname` VARCHAR(255) NOT NULL, 
  `status` VARCHAR(255) NOT NULL, 
  `campaignid` VARCHAR(255) NOT NULL, 
  `cost` DECIMAL(10,2) NOT NULL, 
  `reach` INT(11) NOT NULL, 
  `imprs` INT(11) NOT NULL, 
  `result` INT(11) NOT NULL, 
  `click` INT(11) NOT NULL, 
  `cpm` DECIMAL(10,2) GENERATED ALWAYS AS (`cost` / `imprs` * 1000) STORED, 
  `cpc` DECIMAL(10,2) GENERATED ALWAYS AS (`cost` / `click`) STORED, 
  `cpr` DECIMAL(10,2) GENERATED ALWAYS AS (`cost` / `result`) STORED, 
  `ctr` DECIMAL(10,2) GENERATED ALWAYS AS (`click` / `imprs` * 100) STORED, 
  `date` DATE DEFAULT NULL, 
  FOREIGN KEY (`campaignid`) REFERENCES `campaigndata`(`campaignid`) ON DELETE CASCADE
);

--
-- Dumping data for table `adsgroupdata`
--
INSERT INTO `adsgroupdata` 
(`adsgroupid`, `onoff`, `adsgroupname`, `status`, `campaignid`, `cost`, `reach`, `imprs`, `result`, `click`, `date`) 
VALUES
('23435345344', 1, 'dgdfgdgdf', 'Inactive', '102951234567', 37.00, 8, 3, 2, 11, '2024-12-03'),
('16534534645751', 1, 'Ad Group Name 1', 'Not delivering', '102951234568', 120.50, 3000, 5000, 100, 150, NULL),
('16534534645752', 1, 'Ad Group Name 1', 'Active', '102951234569', 120.50, 3000, 5000, 100, 150, NULL);

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
  `campaignid` VARCHAR(255) PRIMARY KEY NOT NULL,
  `onoff` TINYINT(1) DEFAULT 0, 
  `campaignname` VARCHAR(255) NOT NULL, 
  `status` VARCHAR(255) NOT NULL, 
  `cost` DECIMAL(10,2) NOT NULL, 
  `reach` INT(11) NOT NULL, 
  `imprs` INT(11) NOT NULL, 
  `result` INT(11) NOT NULL, 
  `click` INT(11) NOT NULL, 
  `cpm` DECIMAL(10,2) GENERATED ALWAYS AS (`cost` / `imprs` * 1000) STORED, 
  `cpc` DECIMAL(10,2) GENERATED ALWAYS AS (`cost` / `click`) STORED, 
  `cpr` DECIMAL(10,2) GENERATED ALWAYS AS (`cost` / `result`) STORED, 
  `ctr` DECIMAL(10,2) GENERATED ALWAYS AS (`click` / `imprs` * 100) STORED, 
  `date` DATE DEFAULT NULL
)


--
-- Dumping data for table `campaigndata`
--

INSERT INTO `campaigndata` 
(`campaignid`, `onoff`, `campaignname`, `status`, `cost`, `reach`, `imprs`, `result`, `click`, `date`) 
VALUES
('102951234567', 0, 'DOUBLE CAMPAIGN', 'Inactive', 37.00, 8, 3, 2, 11, NULL),
('102951234568', 1, 'Campaign 2', 'Active', 120.50, 3000, 5000, 11, 150, NULL),
('102951234569', 1, 'Campaign 3', 'Active', 150.00, 4000, 7000, 15, 200, NULL);


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
