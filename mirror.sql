-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 01, 2022 at 03:30 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mirror`
--

-- --------------------------------------------------------

--
-- Table structure for table `layouts`
--

CREATE TABLE `layouts` (
  `ID` int(11) NOT NULL,
  `LABEL` varchar(50) NOT NULL,
  `IMAGE` varchar(200) NOT NULL,
  `TOP_LEFT` varchar(50) NOT NULL,
  `TOP_RIGHT` varchar(50) NOT NULL,
  `BOTTOM_LEFT` varchar(50) NOT NULL,
  `BOTTOM_RIGHT` varchar(50) NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `layouts`
--

INSERT INTO `layouts` (`ID`, `LABEL`, `IMAGE`, `TOP_LEFT`, `TOP_RIGHT`, `BOTTOM_LEFT`, `BOTTOM_RIGHT`, `IS_ACTIVE`) VALUES
(1, 'Sunday Morning', 'testing.png', 'Clock', 'Calendar', 'Compliments', 'Weather', 0),
(3, 'testing', 'test.png', 'Forecast', 'News', 'Moon', 'Globe', 0),
(4, 'new', 'test', 'Bible', 'Insults', 'Sports', 'Clock', 0),
(5, 'Everyday', 'programming.jpg', 'Globe', 'Moon', 'Bible', 'Calendar', 0),
(8, 'label', 'image', 'earth', 'Moon', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `preferences`
--

CREATE TABLE `preferences` (
  `ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `ALERT` tinyint(4) NOT NULL,
  `ALERT_TIME` varchar(50) NOT NULL,
  `ALERT_LABEL` varchar(50) NOT NULL,
  `ALARM` tinyint(4) NOT NULL,
  `ALARM_TIME` varchar(50) NOT NULL,
  `ALARM_LABEL` varchar(50) NOT NULL,
  `ALARM_MESSAGE` varchar(50) NOT NULL,
  `ALARM_SOUND` varchar(50) NOT NULL,
  `DAYS` varchar(50) NOT NULL,
  `TIMEZONE` varchar(50) NOT NULL,
  `LOCATION` varchar(50) NOT NULL,
  `TEXT` varchar(50) NOT NULL,
  `LEAGUE` varchar(50) NOT NULL,
  `TEAM` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `USERNAME`, `PASSWORD`, `EMAIL`) VALUES
(1, 'user', 'pass', 'email@email.com'),
(4, 'testing', 'test', 'realEmail@email.com'),
(8, 'testing', 'testing', 'test@email.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `layouts`
--
ALTER TABLE `layouts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `preferences`
--
ALTER TABLE `preferences`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `layouts`
--
ALTER TABLE `layouts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `preferences`
--
ALTER TABLE `preferences`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
