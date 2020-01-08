-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 09:17 AM
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
  `houseRent` varchar(100) NOT NULL,
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
-- Dumping data for table `homerent`
--

INSERT INTO `homerent` (`id`, `roomType`, `houseRent`, `homeAddress`, `ownerName`, `phoneNo`, `vacancyFrom`, `advRent`, `gasBill`, `electricityBill`, `securityFacility`, `cctvCamera`, `liftAvail`, `generatorAvail`, `selectImage`) VALUES
(6, 'Roommate', '12222', '2', '133', 0, '2019-12-01', '20000', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'No', 0x61706172746d656e742d6265642d626564726f6f6d2d626f6f6b2d7368656c7665732d3433393232372e6a7067),
(8, 'Flat', '89999', '38/5 adabor', 'Didarul Islam', 1834455279, '2040-01-01', '90000', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 0x61706172746d656e742d6265642d626564726f6f6d2d63686169722d3237313631382e6a7067),
(9, 'Single Room', '10000 BDT', 'Mohammadpur', 'Piyas', 1834455279, '2020-01-01', '10000 BDT', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 0x6265642d626564726f6f6d2d6675726e69747572652d68656164626f6172642d3237393734362e6a7067),
(10, 'Double Room', '15000BDT', 'nikonjo-2', 'piya', 1621544032, '2020-01-01', '5000BDT', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 0x696d61676573202831292e6a7067),
(11, 'Double Room', '25000BDT', 'uttara', 'rony', 1834455279, '2020-02-01', '6000BDT', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', 0x696d6167657320283237292e6a7067),
(12, 'Flat', '25000BDT', 'bashundhara', 'imran', 1734466279, '2020-04-01', '10000BDT', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 0x696d61676573202832292e6a7067),
(13, 'Double Room', '20000BDT', 'bashundhara', 'riyad', 1699466279, '2020-02-05', '4000BDT', 'No', 'Yes', 'Yes', 'Yes', 'No', 'No', 0x696d61676573202833292e6a7067),
(14, 'Flat', '100000BDT', 'rampura', 'sami', 1559467279, '2020-02-04', '2000BDT', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 0x696d61676573202834292e6a7067),
(15, 'Double Room', '13000BDT', 'north badda', 'hanif', 1990767279, '2020-03-03', '2000BDT', 'Yes', 'No', 'Yes', 'Yes', 'No', 'No', 0x696d61676573202835292e6a7067),
(16, 'Double Room', '15000BDT', 'north badda', 'kader', 1730767279, '2020-05-01', '20000', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 0x696d61676573202836292e6a7067),
(17, 'Flat', ' 18000BDT', 'badda', 'hanif', 1990767279, '2020-04-06', '3000BDT', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 0x696d61676573202838292e6a7067),
(18, 'Flat', '28000BDT', 'gulshan 2', 'shanto', 1755767279, '2020-02-05', '10000BDT', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 0x696d6167657320283131292e6a7067),
(19, 'Double Room', '25000BDT', 'banani', 'rafi', 1375767279, '2020-03-03', '10000', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 0x696d6167657320283133292e6a7067),
(20, 'Double Room', '17000BDT', 'mirpur 10', 'arman', 1966767279, '2020-02-04', '8000BDT', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', 0x696d6167657320283134292e6a7067),
(21, 'Double Room', '18000BDT', 'mirpur 2', 'pavel', 1755767279, '2020-01-01', '2000BDT', 'No', 'Yes', 'Yes', 'No', 'No', 'No', 0x696d6167657320283136292e6a7067),
(22, 'Single Room', '8000BDT', 'mirpur 1', 'rana', 1958867279, '2020-01-01', '2000BDT', 'Yes', 'Yes', 'No', 'Yes', 'No', 'Yes', 0x53696e676c652d526f6f6d2e6a7067),
(23, 'Single Room', '7000BDT', 'khilkhet', 'ali', 1607867289, '2020-02-01', '2000BDT', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 0x696d6167657320283235292e6a7067),
(24, 'Single Room', '5000BDT', 'nikonjo-2', 'jack', 1888867274, '2020-04-02', '2000BDT', 'No', 'Yes', 'Yes', 'No', 'No', 'Yes', 0x696d6167657320283234292e6a7067),
(25, 'Single Room', '7000BDT', 'north badda', 'mobin', 1557867265, '2020-03-04', '2000BDT', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 0x696d6167657320283235292e6a7067);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
