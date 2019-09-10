-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2015 at 08:02 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `soft`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `pid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `descript` varchar(180) NOT NULL,
  `duration` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`pid`, `name`, `descript`, `duration`) VALUES
(1, 'name1', 'des1', 1),
(2, 'name2', 'des2', 2),
(3, 'name3', 'des3', 3),
(4, 'name4', 'des4', 4),
(5, 'name5', 'des5', 5),
(6, 'name6', 'des6', 6),
(7, 'name7', 'des7', 7),
(8, 'name8', 'des8', 8),
(9, 'name9', 'des9', 9),
(10, 'name10', 'des10', 10),
(11, 'name11', 'des11', 11),
(12, 'name12', 'des12', 12),
(13, 'name13', 'des13', 13),
(14, 'name14', 'des14', 14),
(15, 'name15', 'des15', 15),
(16, 'name16', 'des16', 16),
(17, 'name17', 'des17', 17),
(18, 'name18', 'des18', 18),
(19, 'name19', 'des19', 19),
(20, 'name20', 'des20', 20),
(21, 'name21', 'des21', 21),
(22, 'name22', 'des22', 22),
(23, 'name23', 'des23', 23),
(24, 'name24', 'des24', 24),
(25, 'name25', 'des25', 25);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`lid` int(10) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`lid`, `uname`, `pass`, `type`) VALUES
(1, 'a', 'a', 'a'),
(2, 'm', 'm', 'm'),
(3, 'd', 'd', 'd'),
(4, 't', 't', 't');

-- --------------------------------------------------------

--
-- Table structure for table `point`
--

CREATE TABLE IF NOT EXISTS `point` (
`pid` int(10) NOT NULL,
  `tid` int(10) NOT NULL,
  `point` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `point`
--

INSERT INTO `point` (`pid`, `tid`, `point`) VALUES
(1, 1, 'point1'),
(2, 1, 'point2'),
(3, 1, 'point3'),
(4, 1, 'point4'),
(5, 1, 'point5'),
(6, 2, 'point1'),
(7, 2, 'point2'),
(8, 2, 'point3'),
(9, 2, 'point4'),
(10, 2, 'point5'),
(11, 3, 'point1'),
(12, 3, 'point2'),
(13, 3, 'point3'),
(14, 3, 'point4'),
(15, 3, 'point5'),
(16, 4, 'point1'),
(17, 4, 'point2'),
(18, 4, 'point3'),
(19, 4, 'point4'),
(20, 4, 'point5'),
(21, 5, 'point1'),
(22, 5, 'point2'),
(23, 5, 'point3'),
(24, 5, 'point4'),
(25, 5, 'point5'),
(26, 5, 'point1'),
(27, 5, 'point2'),
(28, 5, 'point3'),
(29, 5, 'point4'),
(30, 5, 'point5');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
`pjid` int(10) NOT NULL,
  `project` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pjid`, `project`) VALUES
(1, 'project1'),
(2, 'project2'),
(3, 'project3');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
`tid` int(10) NOT NULL,
  `pjid` int(10) NOT NULL,
  `task` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`tid`, `pjid`, `task`) VALUES
(1, 1, 'task1'),
(2, 1, 'task2'),
(3, 1, 'task3'),
(4, 1, 'task4'),
(5, 1, 'task5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
 ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `point`
--
ALTER TABLE `point`
 ADD PRIMARY KEY (`pid`), ADD KEY `tid` (`tid`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
 ADD PRIMARY KEY (`pjid`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
 ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `lid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `point`
--
ALTER TABLE `point`
MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
MODIFY `pjid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
MODIFY `tid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `info`
--
ALTER TABLE `info`
ADD CONSTRAINT `info_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `point` (`pid`);

--
-- Constraints for table `point`
--
ALTER TABLE `point`
ADD CONSTRAINT `point_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `task` (`tid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
