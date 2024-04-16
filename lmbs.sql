-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2020 at 05:36 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lmbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `clearancegrade11`
--

CREATE TABLE `clearancegrade11` (
  `LRN` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `checkornot` varchar(255) NOT NULL,
  `datecleared` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clearancegrade12`
--

CREATE TABLE `clearancegrade12` (
  `LRN` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `checkornot` varchar(255) NOT NULL,
  `datecleared` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `grade11`
--

CREATE TABLE `grade11` (
  `LRN` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Section` varchar(255) NOT NULL,
  `Book1` varchar(255) NOT NULL,
  `Book2` varchar(255) NOT NULL,
  `Book3` varchar(255) NOT NULL,
  `Book4` varchar(255) NOT NULL,
  `Book5` varchar(255) NOT NULL,
  `Book6` varchar(255) NOT NULL,
  `Book7` varchar(255) NOT NULL,
  `Book8` varchar(255) NOT NULL,
  `Book9` varchar(255) NOT NULL,
  `Date Received` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `grade12`
--

CREATE TABLE `grade12` (
  `LRN` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Section` varchar(255) NOT NULL,
  `Book1` varchar(255) NOT NULL,
  `Book2` varchar(255) NOT NULL,
  `Book3` varchar(255) NOT NULL,
  `Book4` varchar(255) NOT NULL,
  `Book5` varchar(255) NOT NULL,
  `Book6` varchar(255) NOT NULL,
  `Book7` varchar(255) NOT NULL,
  `Book8` varchar(255) NOT NULL,
  `Book9` varchar(255) NOT NULL,
  `Date Received` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `question1` varchar(255) NOT NULL,
  `answer1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `question`, `answer`, `question1`, `answer1`) VALUES
('admin', 'password', 'What is your school name?', 'ACSCI-SHS', 'What is 1+1?            ', '2'),
('library', 'acsci123', 'What is your school?      ', 'ACSCI-SHS', 'What is 2+2?', '4');

-- --------------------------------------------------------

--
-- Table structure for table `registeredbooks`
--

CREATE TABLE `registeredbooks` (
  `id` int(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `book` varchar(255) NOT NULL,
  `columns` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `Sections` varchar(255) NOT NULL,
  `Grade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`Sections`, `Grade`) VALUES
('Adler', '11'),
('section', '11');

-- --------------------------------------------------------

--
-- Table structure for table `summary`
--

CREATE TABLE `summary` (
  `ID` int(255) NOT NULL,
  `No. Students` varchar(255) NOT NULL,
  `Books Submitted` varchar(255) NOT NULL,
  `Total of Books` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `summary`
--

INSERT INTO `summary` (`ID`, `No. Students`, `Books Submitted`, `Total of Books`) VALUES
(1, '0', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clearancegrade11`
--
ALTER TABLE `clearancegrade11`
  ADD PRIMARY KEY (`LRN`);

--
-- Indexes for table `grade11`
--
ALTER TABLE `grade11`
  ADD PRIMARY KEY (`LRN`);

--
-- Indexes for table `grade12`
--
ALTER TABLE `grade12`
  ADD PRIMARY KEY (`LRN`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `registeredbooks`
--
ALTER TABLE `registeredbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`Sections`);

--
-- Indexes for table `summary`
--
ALTER TABLE `summary`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registeredbooks`
--
ALTER TABLE `registeredbooks`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `summary`
--
ALTER TABLE `summary`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
