-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 02:01 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `facultyid` varchar(10) NOT NULL,
  `facultyname` varchar(20) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `joiningdate` date NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`facultyid`, `facultyname`, `designation`, `joiningdate`, `qualification`, `gender`, `mobile`, `email`, `batch`, `dob`, `address`, `password`) VALUES
('1', 'anandhu', 'Trainer', '2019-07-16', 'Btech EC', 'Male', 1234567899, 'anandhu@gmail.com', 'JSD2', '1994-03-16', 'Malappuram', '123');

-- --------------------------------------------------------

--
-- Table structure for table `facultyleave`
--

CREATE TABLE `facultyleave` (
  `facultyid` varchar(10) NOT NULL,
  `facultyname` varchar(20) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `reason` varchar(40) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultyleave`
--

INSERT INTO `facultyleave` (`facultyid`, `facultyname`, `fromdate`, `todate`, `reason`, `status`) VALUES
('1', 'anandhu', '2020-01-12', '2020-01-15', 'abcd', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentid` varchar(10) NOT NULL,
  `studentname` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `admissiondate` date NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentid`, `studentname`, `address`, `gender`, `dob`, `email`, `admissiondate`, `qualification`, `mobile`, `batch`, `password`) VALUES
('1', 'Ajumal mohammed', 'Safa Manzil,MythriNagar,Venjaramoodu', 'Male', '1995-01-22', 'ajumal@gmail.com', '2019-09-16', 'BCA', 9846830600, 'JSD2', '123');

-- --------------------------------------------------------

--
-- Table structure for table `studentattendance`
--

CREATE TABLE `studentattendance` (
  `studentid` varchar(10) NOT NULL,
  `studentname` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `hour1` varchar(10) NOT NULL,
  `hour2` varchar(10) NOT NULL,
  `hour3` varchar(10) NOT NULL,
  `hour4` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentattendance`
--

INSERT INTO `studentattendance` (`studentid`, `studentname`, `batch`, `date`, `hour1`, `hour2`, `hour3`, `hour4`) VALUES
('1', 'Ajumal mohammed', 'JSD2', '2020-01-16', 'p', 'p', 'p', 'p');

-- --------------------------------------------------------

--
-- Table structure for table `studentleave`
--

CREATE TABLE `studentleave` (
  `studentid` varchar(10) NOT NULL,
  `studentname` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `reason` varchar(40) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentleave`
--

INSERT INTO `studentleave` (`studentid`, `studentname`, `batch`, `fromdate`, `todate`, `reason`, `status`) VALUES
('1', 'Ajumal mohammed', 'JSD2', '2019-12-13', '2020-01-06', 'abcd', 'Approved'),
('1', 'Ajumal mohammed', 'JSD2', '2019-12-13', '2020-01-06', 'abcd', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `studentmark`
--

CREATE TABLE `studentmark` (
  `studentid` varchar(10) NOT NULL,
  `studentname` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `assessmentno` int(11) NOT NULL,
  `sub1` int(11) NOT NULL,
  `sub2` int(11) NOT NULL,
  `sub3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentmark`
--

INSERT INTO `studentmark` (`studentid`, `studentname`, `batch`, `assessmentno`, `sub1`, `sub2`, `sub3`) VALUES
('1', 'Ajumal mohammed', 'JSD2', 1, 20, 30, 35);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
