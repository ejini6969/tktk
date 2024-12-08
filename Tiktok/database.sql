-------------------------------------------------------------------------------------- index.html ---------------------------------------------------------------------------------------
CREATE TABLE ad_user(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL
);

INSERT INTO ad_user(username) VALUES ("bigbang150@gmail.com");

CREATE TABLE currency(
    userid INT AUTO_INCREMENT PRIMARY KEY,
    currency VARCHAR(3) NOT NULL
);

INSERT INTO currency(currency) VALUES ("MYR");

CREATE TABLE daterange (
    userid INT AUTO_INCREMENT PRIMARY KEY,
    startdate DATE NOT NULL,
    enddate DATE NOT NULL
);

INSERT INTO daterange(startdate, enddate) VALUES ('2024-03-01', '2024-04-04');

CREATE TABLE timezone(
    userid INT AUTO_INCREMENT PRIMARY KEY,
    timezone VARCHAR(255) NOT NULL
);

INSERT INTO timezone(timezone) VALUES('kuala_lumpur');

/* ---------------------------------------------------------------- CAMPAIGN DATA --------------------------------------------------------- */
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


CREATE TABLE totalcampaigndata(
    totalcost DECIMAL(10, 2) NOT NULL,
    totalreach INT NOT NULL,
    totalimprs INT NOT NULL,
    totalresult INT NOT NULL,
    totalclick INT NOT NULL,
    totalcpm DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE
            WHEN totalimprs = 0 THEN 0
            ELSE totalcost / totalimprs * 1000
        END
    ) STORED,
    totalcpc DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE 
            WHEN totalclick = 0 THEN 0
            ELSE totalcost / totalclick
        END
    ) STORED,
    totalcpr DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE
            WHEN totalresult = 0 THEN 0
            ELSE totalcost / totalresult
        END
    ) STORED,
    totalctr DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE
            WHEN totalimprs = 0 THEN 0
            ELSE totalclick / totalimprs * 100
        END
    ) STORED
);

INSERT INTO totalcampaigndata (totalcost, totalreach, totalimprs, totalresult, totalclick)
SELECT SUM(cost), SUM(reach), SUM(imprs), SUM(result), SUM(click) FROM campaigndata;

DELIMITER //
CREATE TRIGGER update_totalcampaigndata_after_insert
AFTER INSERT ON campaigndata
FOR EACH ROW
BEGIN
    UPDATE totalcampaigndata
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM campaigndata),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM campaigndata),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM campaigndata),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM campaigndata),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM campaigndata);
END;
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER update_totalcampaigndata_after_update
AFTER UPDATE ON campaigndata
FOR EACH ROW
BEGIN
    UPDATE totalcampaigndata
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM campaigndata),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM campaigndata),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM campaigndata),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM campaigndata),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM campaigndata);
END;
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER update_totalcampaigndata_after_delete
AFTER DELETE ON campaigndata
FOR EACH ROW
BEGIN
    UPDATE totalcampaigndata
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM campaigndata),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM campaigndata),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM campaigndata),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM campaigndata),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM campaigndata);
END;
//
DELIMITER ;

/* ---------------------------------------------------------------- AD GROUP DATA --------------------------------------------------------- */
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


CREATE TABLE totaladsgroupdata(
    totalcost DECIMAL(10, 2) NOT NULL,
    totalreach INT NOT NULL,
    totalimprs INT NOT NULL,
    totalresult INT NOT NULL,
    totalclick INT NOT NULL,
    totalcpm DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE
            WHEN totalimprs = 0 THEN 0
            ELSE totalcost / totalimprs * 1000
        END
    ) STORED,
    totalcpc DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE 
            WHEN totalclick = 0 THEN 0
            ELSE totalcost / totalclick
        END
    ) STORED,
    totalcpr DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE
            WHEN totalresult = 0 THEN 0
            ELSE totalcost / totalresult
        END
    ) STORED,
    totalctr DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE
            WHEN totalimprs = 0 THEN 0
            ELSE totalclick / totalimprs * 100
        END
    ) STORED
);

INSERT INTO totaladsgroupdata (totalcost, totalreach, totalimprs, totalresult, totalclick)
SELECT SUM(cost), SUM(reach), SUM(imprs), SUM(result), SUM(click) FROM adsgroupdata;

DELIMITER //
CREATE TRIGGER update_totaladsgroupdata_after_insert
AFTER INSERT ON adsgroupdata
FOR EACH ROW
BEGIN
    UPDATE totaladsgroupdata
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM adsgroupdata),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM adsgroupdata),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM adsgroupdata),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM adsgroupdata),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM adsgroupdata);
END;
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER update_totaladsgroupdata_after_update
AFTER UPDATE ON adsgroupdata
FOR EACH ROW
BEGIN
    UPDATE totaladsgroupdata
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM adsgroupdata),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM adsgroupdata),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM adsgroupdata),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM adsgroupdata),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM adsgroupdata);
END;
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER update_totaladsgroupdata_after_delete
AFTER DELETE ON adsgroupdata
FOR EACH ROW
BEGIN
    UPDATE totaladsgroupdata
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM adsgroupdata),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM adsgroupdata),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM adsgroupdata),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM adsgroupdata),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM adsgroupdata);
END;
//
DELIMITER ;

/* ----------------------------------------------------------------------------- ADS DATA ----------------------------------------------------------------------- */
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

INSERT INTO `adsdata` 
(`adsid`, `onoff`, `adsname`, `status`, `adsgroupid`, `adgroupname`, `imprs`, `cost`, `reach`, `result`, `click`, `videoname`, `date`) 
VALUES
('123451234567', 1, '1203-1203', 'Not delivering', '987651234567', 'GROUP of Conda', 12, 23.50, 11, 19, 33, 'video2.mp4', '2024-12-03'),
('123451234568', 0, '1204-1204', 'Active', '987651234568', 'Sample Group', 5000, 120.50, 3000, 100, 150, 'video3.mp4', '2024-12-04'),
('123451234569', 1, '1205-1205', 'Active', '987651234569', 'Sample Group', 5000, 120.50, 3000, 100, 150, 'video.mp4', '2024-12-05')


CREATE TABLE totaladsdata(
    totalcost DECIMAL(10, 2) NOT NULL,
    totalreach INT NOT NULL,
    totalimprs INT NOT NULL,
    totalresult INT NOT NULL,
    totalclick INT NOT NULL,
    totalcpm DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE
            WHEN totalimprs = 0 THEN 0
            ELSE totalcost / totalimprs * 1000
        END
    ) STORED,
    totalcpc DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE 
            WHEN totalclick = 0 THEN 0
            ELSE totalcost / totalclick
        END
    ) STORED,
    totalcpr DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE
            WHEN totalresult = 0 THEN 0
            ELSE totalcost / totalresult
        END
    ) STORED,
    totalctr DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE
            WHEN totalimprs = 0 THEN 0
            ELSE totalclick / totalimprs * 100
        END
    ) STORED
);

INSERT INTO totaladsdata (totalcost, totalreach, totalimprs, totalresult, totalclick)
SELECT SUM(cost), SUM(reach), SUM(imprs), SUM(result), SUM(click) FROM adsdata;

DELIMITER //
CREATE TRIGGER update_totaladsdata_after_insert
AFTER INSERT ON adsdata
FOR EACH ROW
BEGIN
    UPDATE totaladsdata
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM adsdata),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM adsdata),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM adsdata),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM adsdata),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM adsdata);
END;
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER update_totaladsdata_after_update
AFTER UPDATE ON adsdata
FOR EACH ROW
BEGIN
    UPDATE totaladsdata
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM adsdata),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM adsdata),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM adsdata),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM adsdata),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM adsdata);
END;
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER update_totaladsdata_after_delete
AFTER DELETE ON adsdata
FOR EACH ROW
BEGIN
    UPDATE totaladsdata
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM adsdata),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM adsdata),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM adsdata),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM adsdata),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM adsdata);
END;
//
DELIMITER ;

-- DROP TABLE `ad_user`;
-- DROP TABLE `currency`;
-- DROP TABLE `daterange`;
-- DROP TABLE `timezone`;
-- DROP TABLE `adsdata`;
-- DROP TABLE `totaladsdata`;
-- DROP TABLE `adsgroupdata`;
-- DROP TABLE `totaladsgroupdata`;

-------------------------------------------------------------------------------------- 1.html ---------------------------------------------------------------------------------------
CREATE TABLE ad_user1(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL
);

INSERT INTO ad_user1(username) VALUES ("bigbang150@gmail.com");

CREATE TABLE currency1(
    userid INT AUTO_INCREMENT PRIMARY KEY,
    currency VARCHAR(3) NOT NULL
);

INSERT INTO currency1(currency) VALUES ("MYR");

CREATE TABLE daterange1 (
    userid INT AUTO_INCREMENT PRIMARY KEY,
    startdate DATE NOT NULL,
    enddate DATE NOT NULL
);

INSERT INTO daterange1(startdate, enddate) VALUES ('2024-03-01', '2024-04-04');

CREATE TABLE timezone1(
    userid INT AUTO_INCREMENT PRIMARY KEY,
    timezone VARCHAR(255) NOT NULL
);

INSERT INTO timezone1(timezone) VALUES('kuala_lumpur');

CREATE TABLE adsdata1(
    id INT AUTO_INCREMENT PRIMARY KEY,
    onoff TINYINT(1) DEFAULT 0,
    videoname VARCHAR(255) NOT NULL,
    adsname VARCHAR(255) NOT NULL,
    status VARCHAR(255) NOT NULL,
    adgroupname VARCHAR(255) NOT NULL,
    cost DECIMAL(10, 2) NOT NULL,
    reach INT NOT NULL,
    imprs INT NOT NULL,
    result INT NOT NULL,
    click INT NOT NULL,
    cpm DECIMAL(10, 2) GENERATED ALWAYS AS (cost / imprs * 1000) STORED,
    cpc DECIMAL(10, 2) GENERATED ALWAYS AS (cost / click) STORED,
    cpr DECIMAL(10, 2) GENERATED ALWAYS AS (cost / result) STORED,
    ctr DECIMAL(10, 2) GENERATED ALWAYS AS (click / imprs * 100) STORED
);

INSERT INTO adsdata1(onoff, videoname, adsname, status, adgroupname, cost, reach, imprs, result, click) 
VALUES (1, "video3.mp4", "ONE AND ONLY ADS", "Active", "GROUP of Conda", 23.5, 11, 12, 19, 33);

INSERT INTO adsdata1(onoff, videoname, adsname, status, adgroupname, cost, reach, imprs, result, click) 
VALUES (0, "video2.mp4", "DOUBLE ADS", "Inactive", "TIKTOK FTW", 37, 8, 3, 2, 11);

CREATE TABLE totaladsdata1(
    totalcost DECIMAL(10, 2) NOT NULL,
    totalreach INT NOT NULL,
    totalimprs INT NOT NULL,
    totalresult INT NOT NULL,
    totalclick INT NOT NULL,
    totalcpm DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE
            WHEN totalimprs = 0 THEN 0
            ELSE totalcost / totalimprs * 1000
        END
    ) STORED,
    totalcpc DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE 
            WHEN totalclick = 0 THEN 0
            ELSE totalcost / totalclick
        END
    ) STORED,
    totalcpr DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE
            WHEN totalresult = 0 THEN 0
            ELSE totalcost / totalresult
        END
    ) STORED,
    totalctr DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE
            WHEN totalimprs = 0 THEN 0
            ELSE totalclick / totalimprs * 100
        END
    ) STORED
);

INSERT INTO totaladsdata1 (totalcost, totalreach, totalimprs, totalresult, totalclick)
SELECT SUM(cost), SUM(reach), SUM(imprs), SUM(result), SUM(click) FROM adsdata1;

DELIMITER //
CREATE TRIGGER update_totaladsdata1_after_insert
AFTER INSERT ON adsdata1
FOR EACH ROW
BEGIN
    UPDATE totaladsdata1
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM adsdata1),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM adsdata1),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM adsdata1),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM adsdata1),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM adsdata1);
END;
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER update_totaladsdata1_after_update
AFTER UPDATE ON adsdata1
FOR EACH ROW
BEGIN
    UPDATE totaladsdata1
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM adsdata1),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM adsdata1),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM adsdata1),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM adsdata1),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM adsdata1);
END;
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER update_totaladsdata1_after_delete
AFTER DELETE ON adsdata1
FOR EACH ROW
BEGIN
    UPDATE totaladsdata1
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM adsdata1),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM adsdata1),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM adsdata1),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM adsdata1),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM adsdata1);
END;
//
DELIMITER ;

-- DROP TABLE `ad_user1`;
-- DROP TABLE `currency1`;
-- DROP TABLE `daterange1`;
-- DROP TABLE `timezone1`;
-- DROP TABLE `adsdata1`;
-- DROP TABLE `totaladsdata1`;

-------------------------------------------------------------------------------------- 2.html ---------------------------------------------------------------------------------------
CREATE TABLE ad_user2(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL
);

INSERT INTO ad_user2(username) VALUES ("bigbang150@gmail.com");

CREATE TABLE currency2(
    userid INT AUTO_INCREMENT PRIMARY KEY,
    currency VARCHAR(3) NOT NULL
);

INSERT INTO currency2(currency) VALUES ("MYR");

CREATE TABLE daterange2 (
    userid INT AUTO_INCREMENT PRIMARY KEY,
    startdate DATE NOT NULL,
    enddate DATE NOT NULL
);

INSERT INTO daterange2(startdate, enddate) VALUES ('2024-03-01', '2024-04-04');

CREATE TABLE timezone2(
    userid INT AUTO_INCREMENT PRIMARY KEY,
    timezone VARCHAR(255) NOT NULL
);

INSERT INTO timezone2(timezone) VALUES('kuala_lumpur');

CREATE TABLE adsdata2(
    id INT AUTO_INCREMENT PRIMARY KEY,
    onoff TINYINT(1) DEFAULT 0,
    videoname VARCHAR(255) NOT NULL,
    adsname VARCHAR(255) NOT NULL,
    status VARCHAR(255) NOT NULL,
    adgroupname VARCHAR(255) NOT NULL,
    cost DECIMAL(10, 2) NOT NULL,
    reach INT NOT NULL,
    imprs INT NOT NULL,
    result INT NOT NULL,
    click INT NOT NULL,
    cpm DECIMAL(10, 2) GENERATED ALWAYS AS (cost / imprs * 1000) STORED,
    cpc DECIMAL(10, 2) GENERATED ALWAYS AS (cost / click) STORED,
    cpr DECIMAL(10, 2) GENERATED ALWAYS AS (cost / result) STORED,
    ctr DECIMAL(10, 2) GENERATED ALWAYS AS (click / imprs * 100) STORED
);

INSERT INTO adsdata2(onoff, videoname, adsname, status, adgroupname, cost, reach, imprs, result, click) 
VALUES (1, "video3.mp4", "ONE AND ONLY ADS", "Active", "GROUP of Conda", 23.5, 11, 12, 19, 33);

INSERT INTO adsdata2(onoff, videoname, adsname, status, adgroupname, cost, reach, imprs, result, click) 
VALUES (0, "video2.mp4", "DOUBLE ADS", "Inactive", "TIKTOK FTW", 37, 8, 3, 2, 11);

CREATE TABLE totaladsdata2(
    totalcost DECIMAL(10, 2) NOT NULL,
    totalreach INT NOT NULL,
    totalimprs INT NOT NULL,
    totalresult INT NOT NULL,
    totalclick INT NOT NULL,
    totalcpm DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE
            WHEN totalimprs = 0 THEN 0
            ELSE totalcost / totalimprs * 1000
        END
    ) STORED,
    totalcpc DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE 
            WHEN totalclick = 0 THEN 0
            ELSE totalcost / totalclick
        END
    ) STORED,
    totalcpr DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE
            WHEN totalresult = 0 THEN 0
            ELSE totalcost / totalresult
        END
    ) STORED,
    totalctr DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE
            WHEN totalimprs = 0 THEN 0
            ELSE totalclick / totalimprs * 100
        END
    ) STORED
);

INSERT INTO totaladsdata2 (totalcost, totalreach, totalimprs, totalresult, totalclick)
SELECT SUM(cost), SUM(reach), SUM(imprs), SUM(result), SUM(click) FROM adsdata2;

DELIMITER //
CREATE TRIGGER update_totaladsdata2_after_insert
AFTER INSERT ON adsdata2
FOR EACH ROW
BEGIN
    UPDATE totaladsdata2
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM adsdata2),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM adsdata2),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM adsdata2),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM adsdata2),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM adsdata2);
END;
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER update_totaladsdata2_after_update
AFTER UPDATE ON adsdata2
FOR EACH ROW
BEGIN
    UPDATE totaladsdata2
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM adsdata2),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM adsdata2),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM adsdata2),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM adsdata2),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM adsdata2);
END;
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER update_totaladsdata2_after_delete
AFTER DELETE ON adsdata2
FOR EACH ROW
BEGIN
    UPDATE totaladsdata2
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM adsdata2),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM adsdata2),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM adsdata2),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM adsdata2),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM adsdata2);
END;
//
DELIMITER ;

-- DROP TABLE `ad_user2`;
-- DROP TABLE `currency2`;
-- DROP TABLE `daterange2`;
-- DROP TABLE `timezone2`;
-- DROP TABLE `adsdata2`;
-- DROP TABLE `totaladsdata2`;

-------------------------------------------------------------------------------------- 3.html ---------------------------------------------------------------------------------------
CREATE TABLE ad_user3(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL
);

INSERT INTO ad_user3(username) VALUES ("bigbang150@gmail.com");

CREATE TABLE currency3(
    userid INT AUTO_INCREMENT PRIMARY KEY,
    currency VARCHAR(3) NOT NULL
);

INSERT INTO currency3(currency) VALUES ("MYR");

CREATE TABLE daterange3 (
    userid INT AUTO_INCREMENT PRIMARY KEY,
    startdate DATE NOT NULL,
    enddate DATE NOT NULL
);

INSERT INTO daterange3(startdate, enddate) VALUES ('2024-03-01', '2024-04-04');

CREATE TABLE timezone3(
    userid INT AUTO_INCREMENT PRIMARY KEY,
    timezone VARCHAR(255) NOT NULL
);

INSERT INTO timezone3(timezone) VALUES('kuala_lumpur');

CREATE TABLE adsdata3(
    id INT AUTO_INCREMENT PRIMARY KEY,
    onoff TINYINT(1) DEFAULT 0,
    videoname VARCHAR(255) NOT NULL,
    adsname VARCHAR(255) NOT NULL,
    status VARCHAR(255) NOT NULL,
    adgroupname VARCHAR(255) NOT NULL,
    cost DECIMAL(10, 2) NOT NULL,
    reach INT NOT NULL,
    imprs INT NOT NULL,
    result INT NOT NULL,
    click INT NOT NULL,
    cpm DECIMAL(10, 2) GENERATED ALWAYS AS (cost / imprs * 1000) STORED,
    cpc DECIMAL(10, 2) GENERATED ALWAYS AS (cost / click) STORED,
    cpr DECIMAL(10, 2) GENERATED ALWAYS AS (cost / result) STORED,
    ctr DECIMAL(10, 2) GENERATED ALWAYS AS (click / imprs * 100) STORED
);

INSERT INTO adsdata3(onoff, videoname, adsname, status, adgroupname, cost, reach, imprs, result, click) 
VALUES (1, "video3.mp4", "ONE AND ONLY ADS", "Active", "GROUP of Conda", 23.5, 11, 12, 19, 33);

INSERT INTO adsdata3(onoff, videoname, adsname, status, adgroupname, cost, reach, imprs, result, click) 
VALUES (0, "video2.mp4", "DOUBLE ADS", "Inactive", "TIKTOK FTW", 37, 8, 3, 2, 11);

CREATE TABLE totaladsdata3(
    totalcost DECIMAL(10, 2) NOT NULL,
    totalreach INT NOT NULL,
    totalimprs INT NOT NULL,
    totalresult INT NOT NULL,
    totalclick INT NOT NULL,
    totalcpm DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE
            WHEN totalimprs = 0 THEN 0
            ELSE totalcost / totalimprs * 1000
        END
    ) STORED,
    totalcpc DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE 
            WHEN totalclick = 0 THEN 0
            ELSE totalcost / totalclick
        END
    ) STORED,
    totalcpr DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE
            WHEN totalresult = 0 THEN 0
            ELSE totalcost / totalresult
        END
    ) STORED,
    totalctr DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE
            WHEN totalimprs = 0 THEN 0
            ELSE totalclick / totalimprs * 100
        END
    ) STORED
);

INSERT INTO totaladsdata3 (totalcost, totalreach, totalimprs, totalresult, totalclick)
SELECT SUM(cost), SUM(reach), SUM(imprs), SUM(result), SUM(click) FROM adsdata3;

DELIMITER //
CREATE TRIGGER update_totaladsdata3_after_insert
AFTER INSERT ON adsdata3
FOR EACH ROW
BEGIN
    UPDATE totaladsdata3
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM adsdata3),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM adsdata3),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM adsdata3),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM adsdata3),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM adsdata3);
END;
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER update_totaladsdata3_after_update
AFTER UPDATE ON adsdata3
FOR EACH ROW
BEGIN
    UPDATE totaladsdata3
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM adsdata3),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM adsdata3),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM adsdata3),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM adsdata3),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM adsdata3);
END;
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER update_totaladsdata3_after_delete
AFTER DELETE ON adsdata3
FOR EACH ROW
BEGIN
    UPDATE totaladsdata3
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM adsdata3),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM adsdata3),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM adsdata3),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM adsdata3),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM adsdata3);
END;
//
DELIMITER ;

-- DROP TABLE `ad_user3`;
-- DROP TABLE `currency3`;
-- DROP TABLE `daterange3`;
-- DROP TABLE `timezone3`;
-- DROP TABLE `adsdata3`;
-- DROP TABLE `totaladsdata3`;

-------------------------------------------------------------------------------------- 4.html ---------------------------------------------------------------------------------------
CREATE TABLE ad_user4(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL
);

INSERT INTO ad_user4(username) VALUES ("bigbang150@gmail.com");

CREATE TABLE currency4(
    userid INT AUTO_INCREMENT PRIMARY KEY,
    currency VARCHAR(4) NOT NULL
);

INSERT INTO currency4(currency) VALUES ("MYR");

CREATE TABLE daterange4 (
    userid INT AUTO_INCREMENT PRIMARY KEY,
    startdate DATE NOT NULL,
    enddate DATE NOT NULL
);

INSERT INTO daterange4(startdate, enddate) VALUES ('2024-04-01', '2024-04-04');

CREATE TABLE timezone4(
    userid INT AUTO_INCREMENT PRIMARY KEY,
    timezone VARCHAR(255) NOT NULL
);

INSERT INTO timezone4(timezone) VALUES('kuala_lumpur');

CREATE TABLE adsdata4(
    id INT AUTO_INCREMENT PRIMARY KEY,
    onoff TINYINT(1) DEFAULT 0,
    videoname VARCHAR(255) NOT NULL,
    adsname VARCHAR(255) NOT NULL,
    status VARCHAR(255) NOT NULL,
    adgroupname VARCHAR(255) NOT NULL,
    cost DECIMAL(10, 2) NOT NULL,
    reach INT NOT NULL,
    imprs INT NOT NULL,
    result INT NOT NULL,
    click INT NOT NULL,
    cpm DECIMAL(10, 2) GENERATED ALWAYS AS (cost / imprs * 1000) STORED,
    cpc DECIMAL(10, 2) GENERATED ALWAYS AS (cost / click) STORED,
    cpr DECIMAL(10, 2) GENERATED ALWAYS AS (cost / result) STORED,
    ctr DECIMAL(10, 2) GENERATED ALWAYS AS (click / imprs * 100) STORED
);

INSERT INTO adsdata4(onoff, videoname, adsname, status, adgroupname, cost, reach, imprs, result, click) 
VALUES (1, "video3.mp4", "ONE AND ONLY ADS", "Active", "GROUP of Conda", 23.5, 11, 12, 19, 33);

INSERT INTO adsdata4(onoff, videoname, adsname, status, adgroupname, cost, reach, imprs, result, click) 
VALUES (0, "video2.mp4", "DOUBLE ADS", "Inactive", "TIKTOK FTW", 37, 8, 3, 2, 11);

CREATE TABLE totaladsdata4(
    totalcost DECIMAL(10, 2) NOT NULL,
    totalreach INT NOT NULL,
    totalimprs INT NOT NULL,
    totalresult INT NOT NULL,
    totalclick INT NOT NULL,
    totalcpm DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE
            WHEN totalimprs = 0 THEN 0
            ELSE totalcost / totalimprs * 1000
        END
    ) STORED,
    totalcpc DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE 
            WHEN totalclick = 0 THEN 0
            ELSE totalcost / totalclick
        END
    ) STORED,
    totalcpr DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE
            WHEN totalresult = 0 THEN 0
            ELSE totalcost / totalresult
        END
    ) STORED,
    totalctr DECIMAL(10, 2) GENERATED ALWAYS AS (
        CASE
            WHEN totalimprs = 0 THEN 0
            ELSE totalclick / totalimprs * 100
        END
    ) STORED
);

INSERT INTO totaladsdata4 (totalcost, totalreach, totalimprs, totalresult, totalclick)
SELECT SUM(cost), SUM(reach), SUM(imprs), SUM(result), SUM(click) FROM adsdata4;

DELIMITER //
CREATE TRIGGER update_totaladsdata4_after_insert
AFTER INSERT ON adsdata4
FOR EACH ROW
BEGIN
    UPDATE totaladsdata4
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM adsdata4),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM adsdata4),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM adsdata4),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM adsdata4),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM adsdata4);
END;
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER update_totaladsdata4_after_update
AFTER UPDATE ON adsdata4
FOR EACH ROW
BEGIN
    UPDATE totaladsdata4
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM adsdata4),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM adsdata4),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM adsdata4),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM adsdata4),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM adsdata4);
END;
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER update_totaladsdata4_after_delete
AFTER DELETE ON adsdata4
FOR EACH ROW
BEGIN
    UPDATE totaladsdata4
    SET
        totalcost = (SELECT IFNULL(SUM(cost), 0) FROM adsdata4),
        totalreach = (SELECT IFNULL(SUM(reach), 0) FROM adsdata4),
        totalimprs = (SELECT IFNULL(SUM(imprs), 0) FROM adsdata4),
        totalresult = (SELECT IFNULL(SUM(result), 0) FROM adsdata4),
        totalclick = (SELECT IFNULL(SUM(click), 0) FROM adsdata4);
END;
//
DELIMITER ;

-- DROP TABLE `ad_user4`;
-- DROP TABLE `currency4`;
-- DROP TABLE `daterange4`;
-- DROP TABLE `timezone4`;
-- DROP TABLE `adsdata4`;
-- DROP TABLE `totaladsdata4`;