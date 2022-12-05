-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 07:52 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `detsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblexpense`
--

CREATE TABLE `tblexpense` (
  `ID` int(10) NOT NULL,
  `UserId` int(10) NOT NULL,
  `ExpenseDate` date DEFAULT NULL,
  `ExpenseItem` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `ExpenseCost` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `NoteDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblexpense`
--

INSERT INTO `tblexpense` (`ID`, `UserId`, `ExpenseDate`, `ExpenseItem`, `ExpenseCost`, `NoteDate`) VALUES
(35, 11, '2021-10-26', 'book', '300', '2021-10-26 14:13:22'),
(36, 11, '2021-10-25', 'pen', '20', '2021-10-26 14:14:48'),
(37, 12, '2021-10-27', 'fruits', '100', '2021-10-27 07:31:36'),
(40, 12, '2021-11-13', 'book', '500', '2021-11-14 07:51:52'),
(41, 12, '2021-11-15', 'book', '500', '2021-11-15 06:59:51'),
(43, 13, '2019-03-15', 'house', '1000', '2021-11-15 12:06:25'),
(44, 13, '2019-07-15', 'books', '1200', '2021-11-15 12:07:41'),
(45, 13, '2019-10-15', 'fruits', '500', '2021-11-15 12:08:17'),
(46, 13, '2020-05-15', 'food', '300', '2021-11-15 13:02:24'),
(47, 13, '2020-10-15', 'Cell Phone', '20000', '2021-11-15 13:03:48'),
(48, 13, '2020-10-15', 'Clothes', '3000', '2021-11-15 13:05:32'),
(49, 13, '2021-07-15', 'food', '400', '2021-11-15 13:07:17'),
(50, 13, '2021-11-03', 'Bills', '1500', '2021-11-15 13:10:38'),
(52, 13, '2021-11-15', 'food', '500', '2021-11-15 13:11:49'),
(55, 13, '2021-11-16', 'fruits', '300', '2021-11-16 08:25:55'),
(57, 13, '2021-11-17', 'hospital', '2500', '2021-11-17 06:48:38');

-- --------------------------------------------------------

--
-- Table structure for table `tblincome`
--

CREATE TABLE `tblincome` (
  `ID` int(10) NOT NULL,
  `UserId` int(10) NOT NULL,
  `IncomeDate` date DEFAULT NULL,
  `Source` varchar(200) DEFAULT NULL,
  `Income` int(10) NOT NULL,
  `NoteDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblincome`
--

INSERT INTO `tblincome` (`ID`, `UserId`, `IncomeDate`, `Source`, `Income`, `NoteDate`) VALUES
(30, 12, '2021-11-12', 'job', 10000, '2021-11-12 15:41:35'),
(32, 12, '2021-11-10', 'Teaching', 2000, '2021-11-12 15:55:14'),
(33, 11, '2021-11-12', 'part-time', 4000, '2021-11-12 15:57:47'),
(36, 13, '2019-11-15', 'part-time', 10000, '2021-11-15 13:12:44'),
(38, 13, '2021-11-01', 'part-time', 15000, '2021-11-15 13:13:50'),
(39, 13, '2020-11-15', 'Teaching', 30000, '2021-11-15 13:14:31'),
(40, 13, '2021-11-15', 'Teaching', 10000, '2021-11-15 13:31:31'),
(41, 13, '2021-11-16', 'Teaching', 10000, '2021-11-16 04:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(150) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Email` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Password` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FullName`, `Email`, `MobileNumber`, `Password`, `RegDate`) VALUES
(11, 'aaa', '20bcs063@iiitdmj.ac.in', 1234567891, '7b7a53e239400a13bd6be6c91c4f6c4e', '2021-10-26 14:09:27'),
(12, 'abc', 'apparaochanda@gmail.com', 1234567899, '05a5cf06982ba7892ed2a6d38fe832d6', '2021-10-27 07:30:27'),
(13, 'asrita', 'asritha@gmail.com', 1234567899, '827ccb0eea8a706c4c34a16891f84e7b', '2021-11-15 12:05:05'),
(14, 'abc', 'abc@iiitdmj.ac.in', 1234567899, '827ccb0eea8a706c4c34a16891f84e7b', '2021-11-15 13:19:47'),
(15, 'shanthi', 'shanthi@gmail.com', 1112211122, '827ccb0eea8a706c4c34a16891f84e7b', '2021-11-15 16:30:37'),
(16, 'kamakshi', 'kamakshi@gmail.com', 1234566899, '827ccb0eea8a706c4c34a16891f84e7b', '2021-11-15 16:34:14'),
(17, 'siri', 'siri@gmail.com', 9234566899, '827ccb0eea8a706c4c34a16891f84e7b', '2021-11-15 16:41:31'),
(18, 'CHANDA ASRITA', 'chanda@gmail.com', 9494566899, '827ccb0eea8a706c4c34a16891f84e7b', '2021-11-15 16:42:30'),
(19, 'ABC', 'ABC@gmail.com', 1234567899, '827ccb0eea8a706c4c34a16891f84e7b', '2021-11-16 09:45:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblexpense`
--
ALTER TABLE `tblexpense`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblincome`
--
ALTER TABLE `tblincome`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblexpense`
--
ALTER TABLE `tblexpense`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tblincome`
--
ALTER TABLE `tblincome`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
