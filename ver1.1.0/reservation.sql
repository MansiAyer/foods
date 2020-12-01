-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 06:14 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingtable`
--

CREATE TABLE `bookingtable` (
  `bookingID` varchar(50) NOT NULL,
  `bookingType` varchar(100) NOT NULL,
  `numPeople` varchar(20) NOT NULL,
  `bookingDate` varchar(50) NOT NULL,
  `bookingTime` varchar(50) NOT NULL,
  `bookingFName` varchar(100) NOT NULL,
  `bookingLName` varchar(100) DEFAULT NULL,
  `emailID` varchar(50) NOT NULL,
  `bookingPNumber` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingtable`
--

INSERT INTO `bookingtable` (`bookingID`, `bookingType`, `numPeople`, `bookingDate`, `bookingTime`, `bookingFName`, `bookingLName`, `emailID`, `bookingPNumber`) VALUES
('la5fc51e03df3bd', 'Casual', '6', '4-12-2020', '18-00', 'Diana', 'v', 'felicitaa168@gmail.com', '23124454536');

-- --------------------------------------------------------

--
-- Table structure for table `tablelist`
--

CREATE TABLE `tablelist` (
  `table_id` int(11) NOT NULL,
  `t_type` varchar(50) NOT NULL,
  `capacity` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tablelist`
--

INSERT INTO `tablelist` (`table_id`, `t_type`, `capacity`) VALUES
(1, 'Formal', '2'),
(2, 'Formal', '3'),
(3, 'Formal', '4'),
(4, 'Formal', '6'),
(5, 'Formal', '10'),
(6, 'Casual', '2'),
(7, 'Casual', '3'),
(8, 'Casual', '4'),
(9, 'Casual', '6'),
(10, 'Casual', '10'),
(11, 'Outdoor', '2'),
(12, 'Outdoor', '3'),
(13, 'Outdoor', '4'),
(14, 'Outdoor', '6'),
(15, 'Outdoor', '10'),
(16, 'Private Room', '2'),
(17, 'Private Room', '3'),
(18, 'Private Room', '4'),
(19, 'Private Room', '6'),
(20, 'Private Room', '10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingtable`
--
ALTER TABLE `bookingtable`
  ADD PRIMARY KEY (`bookingID`),
  ADD UNIQUE KEY `bookingID` (`bookingID`),
  ADD KEY `bookingID_2` (`bookingID`),
  ADD KEY `bookingID_3` (`bookingID`),
  ADD KEY `bookingID_4` (`bookingID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
