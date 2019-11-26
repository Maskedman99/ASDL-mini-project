-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 27, 2019 at 01:42 AM
-- Server version: 10.1.43-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ASD`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`ID`, `Name`, `Password`) VALUES
(1, 'admin1', 'admin1pass'),
(2, 'admin2', 'admin2pass');

-- --------------------------------------------------------

--
-- Table structure for table `Events`
--

CREATE TABLE `Events` (
  `Name` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Location` varchar(500) NOT NULL,
  `Fees` int(11) NOT NULL,
  `Tech` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Table to store event details';

--
-- Dumping data for table `Events`
--

INSERT INTO `Events` (`Name`, `Date`, `Location`, `Fees`, `Tech`) VALUES
('NonTechEvent1', '2019-12-12', 'Ground', 500, 'N'),
('nontechevent2', '2019-12-25', '410', 250, 'N'),
('TechEvent1', '2019-11-07', 'Auditorium', 100, 'Y'),
('TechEvent4', '2019-11-07', 'Loacb', 0, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `Registration`
--

CREATE TABLE `Registration` (
  `Name` varchar(200) NOT NULL,
  `Class` varchar(100) NOT NULL,
  `Rollno` int(11) NOT NULL,
  `Eventname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Registration`
--

INSERT INTO `Registration` (`Name`, `Class`, `Rollno`, `Eventname`) VALUES
('rohit', 'cs5b44', 44, 'hi hi'),
('name1', '45f', 34, 'hi hi'),
('name2', 'df4', 54, 'TechEvent4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Events`
--
ALTER TABLE `Events`
  ADD UNIQUE KEY `Name` (`Name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
