-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2019 at 10:30 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ehr`
--

-- --------------------------------------------------------

--
-- Table structure for table `homerent`
--

CREATE TABLE `homerent` (
  `id` int(11) NOT NULL,
  `roomType` varchar(100) NOT NULL,
  `houseRent` int(50) NOT NULL,
  `homeAddress` varchar(300) NOT NULL,
  `ownerName` varchar(200) NOT NULL,
  `phoneNo` int(11) NOT NULL,
  `vacancyFrom` date NOT NULL,
  `advRent` varchar(100) NOT NULL,
  `gasBill` varchar(100) NOT NULL,
  `electricityBill` varchar(100) NOT NULL,
  `securityFacility` varchar(100) NOT NULL,
  `cctvCamera` varchar(100) NOT NULL,
  `liftAvail` varchar(100) NOT NULL,
  `generatorAvail` varchar(100) NOT NULL,
  `selectImage` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `homerent`
--
ALTER TABLE `homerent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `homerent`
--
ALTER TABLE `homerent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
