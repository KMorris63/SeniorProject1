-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 24, 2022 at 01:43 PM
-- Server version: 10.3.34-MariaDB-0+deb10u1
-- PHP Version: 7.3.31-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `IS_ACTIVE` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `layouts`
--

INSERT INTO `layouts` (`ID`, `LABEL`, `IMAGE`, `TOP_LEFT`, `TOP_RIGHT`, `BOTTOM_LEFT`, `BOTTOM_RIGHT`, `IS_ACTIVE`) VALUES
(1, 'Sunday Morning', 'testing.png', 'Clock', 'Calendar', 'Compliments', 'Weather', 0),
(3, 'first', 'test.png', '', 'Clock', 'Calendar', 'Compliments', 0),
(14, 'newitemgcu', 'blank', 'Sports', 'Text', 'Moon', 'Weather', 1),
(15, 'demo', 'img', 'Clock', 'Forecast', 'Globe', 'Compliments', 0);

-- --------------------------------------------------------

--
-- Table structure for table `preferences`
--

CREATE TABLE `preferences` (
  `ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
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

--
-- Dumping data for table `preferences`
--

INSERT INTO `preferences` (`ID`, `USER_ID`, `ALARM`, `ALARM_TIME`, `ALARM_LABEL`, `ALARM_MESSAGE`, `ALARM_SOUND`, `DAYS`, `TIMEZONE`, `LOCATION`, `TEXT`, `LEAGUE`, `TEAM`) VALUES
(1, 1, 1, '10:26', 'test', 'test', 'blackforest.mp3', '0', 'PNT', 'Phoenix, Arizona', 'Hello, World! ', 'MLB', 'ARI');

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
(1, 'user', 'pass', 'email@email.com');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `preferences`
--
ALTER TABLE `preferences`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
