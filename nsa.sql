-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2023 at 10:15 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Id` int(15) NOT NULL,
  `Date` varchar(50) DEFAULT NULL,
  `Time` varchar(100) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `Contact` varchar(200) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Id`, `Date`, `Time`, `Name`, `Address`, `City`, `Contact`, `Description`) VALUES
(1, '2023-08-03', '23:26', 'Mahi Yais', 'Vitthal Nagar', 'samode', '12324234', 'i want service '),
(6, '2023-02-13', '01:29', 'Ishwar', 'Ram Nagar', 'Dhule', '1232423443', 'i  want hair gut'),
(10, '2023-03-13', '03:55', 'hgjbjl;/', 'dfdgdg', 'dfgdf', '345353', 'xgfdfgdf');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bid` int(10) NOT NULL,
  `bdate` varchar(100) NOT NULL,
  `cid` int(10) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `rate` int(10) NOT NULL,
  `gst` int(10) NOT NULL,
  `damt` int(10) NOT NULL,
  `namt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bid`, `bdate`, `cid`, `cname`, `sname`, `rate`, `gst`, `damt`, `namt`) VALUES
(1, '2023-03-15', 3, 'shweta', 'Coloring', 400, 23, 2, 90);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `ID` int(15) NOT NULL,
  `Course` varchar(100) NOT NULL,
  `Duration` varchar(100) NOT NULL,
  `Amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`ID`, `Course`, `Duration`, `Amount`) VALUES
(2, 'Cosmetology', '6month', 7000),
(3, 'Beauty Therapy', '6month', 7000),
(4, '', '6month', 7000),
(5, 'Beauty Therapy', '6month', 7000),
(6, '', '6month', 7000),
(9, 'Waxing & Clean-up', '9month', 5000),
(10, '', '6month', 7000),
(11, '', '6month', 7000),
(12, '', '6month', 7000),
(13, 'coloring', '6month', 7000),
(15, '', '6month', 7000),
(16, '', '6month', 7000),
(17, '', '6month', 7000),
(18, '', '6month', 7000),
(19, '', '6month', 7000),
(20, '', '6month', 7000),
(22, '', '6month', 7000),
(23, '', '6month', 7000),
(26, '', '6month', 7000),
(27, '', '6month', 7000),
(28, '', '6month', 7000),
(29, '', '6month', 7000),
(30, 'Nail-Art', '8month', 5000),
(31, 'Skin Care', '12month', 120300);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(15) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `cont` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `name`, `address`, `city`, `cont`) VALUES
(3, 'shweta', 'shirpur', 'dondaicha', '12345566'),
(4, 'Ishwar', 'Sakri Road', 'Dhule', '3453453453'),
(9, 'Rushikesh', 'vithalnagar', 'samode', '34343345'),
(21, 'Mahendra Yais', 'Navagaon', 'Samode', '45565654'),
(26, 'Sanchita', 'vithal nagar', 'Vikharan', '123223'),
(29, 'Mahendra Mohan Yais', 'Vthalnagar', 'Samode', '3453453'),
(30, 'Mahendra Mohan Yais', 'Vithal Nagar', 'Samode', '23868723648'),
(31, 'Rushikesh Mohan Yais', 'Vithal Nagar', 'Samode', '77699'),
(32, 'Namrata', 'Ram Nagar', 'Dhule', '407'),
(36, 'Rupali Chaudhari', 'Chitod Road', 'Dhulekar', '3453453453'),
(37, 'dinesh patil', 'shri nagar', 'Dhule', '76576435345'),
(38, 'Mahendra Yais', 'Navagaon', 'Dhule', '45353534');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(15) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `salary` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `Name`, `Address`, `city`, `contact`, `salary`) VALUES
(3, 'Mahi Yais', 'Vitthal Nagar', 'Samode', '234234', 32534534),
(5, 'Ishwar', 'Sakri Road', 'Dhule', '34345353', 120300),
(6, 'Namrata', 'Ram Nagar', 'Dhule', '45646', 435666),
(7, 'Rupali', 'Chitod Road ', 'Dhule', '6576', 576576);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `Id` int(20) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Date` varchar(200) DEFAULT NULL,
  `Course` varchar(200) DEFAULT NULL,
  `Duration` varchar(100) DEFAULT NULL,
  `B_Time` varchar(100) DEFAULT NULL,
  `S_Date` varchar(100) DEFAULT NULL,
  `Contact` varchar(50) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`Id`, `Name`, `Date`, `Course`, `Duration`, `B_Time`, `S_Date`, `Contact`, `Address`, `City`) VALUES
(3, 'Mahendra Yais', '2023-03-06', 'Nail-Art', '6month', '10:54', '2023-03-30', '34343345', 'Vithhal nagar Navagaon ', 'samodekar'),
(4, 'Mahendra Yais', '2023-03-08', 'Select Course Intrested In', '6month', '12:10', '2023-03-30', '3453453453', 'Navagaon', 'Samode'),
(5, 'ramu', '2023-03-14', 'Hairstyling', '9month', '01:18', '2023-03-31', '34345353', 'Vithhal nagar Navagaon ', 'dhule');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uid` int(20) NOT NULL,
  `uname` varchar(200) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `uname`, `pass`) VALUES
(1, 'mahi@gmail.com', 'mahi123');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `sid` int(15) NOT NULL,
  `Service` varchar(100) DEFAULT NULL,
  `Cost` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`sid`, `Service`, `Cost`) VALUES
(1, 'Hair-Style', 200),
(2, 'Coloring', 400),
(3, 'beard', 150),
(5, 'bleaching', 600),
(8, 'waxing', 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `Id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `sid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
