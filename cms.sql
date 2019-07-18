-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2019 at 09:44 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `dist` text NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`, `designation`, `dist`) VALUES
('amit@1', 'amit@12345', 'DM', 'Mathura\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE IF NOT EXISTS `complaints` (
  `cid` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `pname` varchar(20) NOT NULL,
  `pmob` varchar(20) NOT NULL,
  `pdob` varchar(20) NOT NULL,
  `paddress` varchar(50) NOT NULL,
  `pemail` varchar(50) NOT NULL,
  `apname1` varchar(20) NOT NULL,
  `apinfo1` varchar(20) NOT NULL,
  `apname2` varchar(20) NOT NULL,
  `apinfo2` varchar(20) NOT NULL,
  `apname3` varchar(20) NOT NULL,
  `apinfo3` varchar(20) NOT NULL,
  `apname4` varchar(20) NOT NULL,
  `apinfo4` varchar(20) NOT NULL,
  `charges` varchar(50) NOT NULL,
  `des` varchar(80) NOT NULL,
  `status` varchar(20) NOT NULL,
  `finalreport` varchar(80) NOT NULL,
  `station` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`cid`, `date`, `pname`, `pmob`, `pdob`, `paddress`, `pemail`, `apname1`, `apinfo1`, `apname2`, `apinfo2`, `apname3`, `apinfo3`, `apname4`, `apinfo4`, `charges`, `des`, `status`, `finalreport`, `station`) VALUES
(1, '0000-00-00', 'Amit', '8273966422', '2019-05-07', 'Barari', 'luckyamitkuntal420@gmail.com', 'luckyamitkuntal420@g', 'mkl', 'mlkm', 'apn2', 'mlm', 'lmmkl', 'mklm', 'm', '12121', 'des', 'CLOSED', 'mkmk', ''),
(2, '0000-00-00', '', '', '2019-05-15', 'Vill:-Dhana Teja Post:Barari', 'amitkuntal1997@gmail.com', 'amitkuntal1997@gmail', 'jj', 'jl', 'jjlkjj', 'kjjkj', 'jkjk', 'jk', 'jkj', '121', 'lll', 'PENDING', '', ''),
(3, '0000-00-00', 'aa', '999', '2019-05-26', 'Barari', 'asasa@gmail.com', 'aaaaa', 'aaaaaaaa', 'aaaa', 'aaaaa', 'aaaaa', 'aaaaa', 'aaaaa', 'aaaaa', '302', 'des', 'PENDING', '--', 'BAD');

-- --------------------------------------------------------

--
-- Table structure for table `crime`
--

CREATE TABLE IF NOT EXISTS `crime` (
  `id` bigint(20) NOT NULL,
  `section` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crime`
--

INSERT INTO `crime` (`id`, `section`, `name`, `description`) VALUES
(2, '301', 'Murder', 'When a person kill someone');

-- --------------------------------------------------------

--
-- Table structure for table `missing`
--

CREATE TABLE IF NOT EXISTS `missing` (
  `id` bigint(10) NOT NULL,
  `name` text NOT NULL,
  `height` varchar(10) NOT NULL,
  `color` text NOT NULL,
  `mark` text NOT NULL,
  `age` text NOT NULL,
  `dob` varchar(20) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `cmob1` varchar(20) NOT NULL,
  `cmob2` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stationlogin`
--

CREATE TABLE IF NOT EXISTS `stationlogin` (
  `email` varchar(80) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `dist` text NOT NULL,
  `block` text NOT NULL,
  `state` text NOT NULL,
  `siname` text NOT NULL,
  `contact` text NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stationlogin`
--

INSERT INTO `stationlogin` (`email`, `password`, `name`, `dist`, `block`, `state`, `siname`, `contact`) VALUES
('amitkuntal1997@gmail.com', '123', 'BAD', 'Mathura', 'Farah', 'UP', 'DAYARAM YADAV', '8273966422'),
('luckyamitkuntal420@gmail.com', '1234', 'BAD', 'Mathura', 'Farah', 'UP', 'DAYARAM YADAV', '8273966422'),
('ref#1', 'amit@12345', 'Mathura refienery station', 'mathura', 'FARAH', 'Up', 'Amit', '8218071802');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `mobile` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `name` text NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`mobile`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`mobile`, `dob`, `name`, `email`) VALUES
('8273966422', '1997-03-10', 'Amit', 'amitkuntal1997@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
