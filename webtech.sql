-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 10:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountant`
--

CREATE TABLE `accountant` (
  `AccountantNo` varchar(50) NOT NULL,
  `AccountantName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `bloodGroup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accountant`
--

INSERT INTO `accountant` (`AccountantNo`, `AccountantName`, `Password`, `Phone`, `education`, `gender`, `date`, `bloodGroup`) VALUES
('001', 'Khorsed Alam', '159753', '01538975698', 'B.COM(Finance)', 'Male', '1994-02-16', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `adminlist`
--

CREATE TABLE `adminlist` (
  `adminusername` varchar(20) NOT NULL,
  `adminpass` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `PhoneNo` int(15) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `OtherInfo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='All the information''s of Admin Table';

--
-- Dumping data for table `adminlist`
--

INSERT INTO `adminlist` (`adminusername`, `adminpass`, `Address`, `PhoneNo`, `Email`, `OtherInfo`) VALUES
('Faiz220', '123456789', 'C-Block,Mirpur,Dhaka', 1256987563, 'faiz@gmail.com', 'Junior Admin'),
('Nazifa852', '12345', 'Atlanta,Gorgia,USA', 2147483647, 'nazifa@gmail.com', 'Senior Admin'),
('Tamim101', '123456789', '44/2 Borobag, Mirpur-2,Dhaka', 1733991643, 'tamimullislam2012@gm', 'Senior Admin');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` varchar(50) NOT NULL,
  `tourist` varchar(50) NOT NULL,
  `Serviceprovider` varchar(50) NOT NULL,
  `Place` varchar(50) NOT NULL,
  `Duration` varchar(50) NOT NULL,
  `Cost` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `tourist`, `Serviceprovider`, `Place`, `Duration`, `Cost`) VALUES
('Cox2112', 'Kawser Islam', 'Raddison Blue', 'Coxs Bazar', '4 Days', '15000/=');

-- --------------------------------------------------------

--
-- Table structure for table `emailtable`
--

CREATE TABLE `emailtable` (
  `id` int(40) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emailtable`
--

INSERT INTO `emailtable` (`id`, `name`, `email`, `message`) VALUES
(1, 'linkon', 'ankonsarker17@gmail.com', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `hotelbook`
--

CREATE TABLE `hotelbook` (
  `serviceproviderno` varchar(100) NOT NULL,
  `tourist` varchar(100) NOT NULL,
  `PhoneNo` varchar(100) NOT NULL,
  `CompanyName` varchar(100) NOT NULL,
  `Place` varchar(110) NOT NULL,
  `Duration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotelbook`
--

INSERT INTO `hotelbook` (`serviceproviderno`, `tourist`, `PhoneNo`, `CompanyName`, `Place`, `Duration`) VALUES
('H101', 'Kawser Islam', '01733991643', 'Raddison Blue Dhaka Water Garden', 'Dhaka', '3 Days');

-- --------------------------------------------------------

--
-- Table structure for table `inq`
--

CREATE TABLE `inq` (
  `InquiryQuestion` varchar(200) NOT NULL,
  `ReplyFromAdmin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inq`
--

INSERT INTO `inq` (`InquiryQuestion`, `ReplyFromAdmin`) VALUES
('Can I Have The Hotline Number?', '025555783');

-- --------------------------------------------------------

--
-- Table structure for table `mytable`
--

CREATE TABLE `mytable` (
  `id` int(8) NOT NULL,
  `username` varchar(31) NOT NULL,
  `password` varchar(23) NOT NULL,
  `firstname` varchar(21) NOT NULL,
  `lastname` varchar(21) NOT NULL,
  `gender` varchar(23) NOT NULL,
  `email` varchar(31) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mytable`
--

INSERT INTO `mytable` (`id`, `username`, `password`, `firstname`, `lastname`, `gender`, `email`, `phone`) VALUES
(1, 'ankon', '123', 'ankon', 'sarker', 'male', 'ankonsarker17@gmail.com', 1767553784),
(2, 'linkon', '123', '{firstname}', 'sarker', 'male', 'shovon151146.bcpsc@gmail.com', 1767553784),
(3, 'arif', '123', '{firstname}', 'istiak', 'male', 'ankonsarker372@gmail.com', 1767553784);

-- --------------------------------------------------------

--
-- Table structure for table `placetable`
--

CREATE TABLE `placetable` (
  `id` int(8) NOT NULL,
  `placename` text NOT NULL,
  `location` varchar(50) NOT NULL,
  `package` varchar(30) NOT NULL,
  `offer` varchar(40) NOT NULL,
  `photo` varchar(31) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `placetable`
--

INSERT INTO `placetable` (`id`, `placename`, `location`, `package`, `offer`, `photo`, `description`) VALUES
(17, 'cox s bazar', 'chattrogram', '23666', '2%', 'aditto.jpg', 'It is a picnic spot.Nice place'),
(18, 'cox s bazar', 'ctg', '23666', '2%', '../uploads/adi.jpg', 'It is a picnic spot.Nice place');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `ReportersId` varchar(8) NOT NULL,
  `ReportersName` varchar(31) NOT NULL,
  `ReportersPhoneNo` varchar(200) NOT NULL,
  `ReportersEmail` varchar(40) NOT NULL,
  `ReportTopic` varchar(50) NOT NULL,
  `Details` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`ReportersId`, `ReportersName`, `ReportersPhoneNo`, `ReportersEmail`, `ReportTopic`, `Details`) VALUES
('H01', 'ankon', '01767553784', 'ankon@gmail.com', 'update', 'please update the system');

-- --------------------------------------------------------

--
-- Table structure for table `serviceprovider`
--

CREATE TABLE `serviceprovider` (
  `serviceproviderno` int(8) NOT NULL,
  `ServiceType` varchar(50) NOT NULL,
  `CompanyName` varchar(50) NOT NULL,
  `PhoneNo` varchar(11) NOT NULL,
  `Place` varchar(40) NOT NULL,
  `OtherInfo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serviceprovider`
--

INSERT INTO `serviceprovider` (`serviceproviderno`, `ServiceType`, `CompanyName`, `PhoneNo`, `Place`, `OtherInfo`) VALUES
(3, 'Hotel', 'Rose resturant', '01767553784', 'Dhaka', '4 star'),
(9, 'Hotel', 'Rose resturant', '017', 'Dhaka', '4 star'),
(10, 'Hotel', 'Rose resturant', '', 'Dhaka', '4 star'),
(11, 'Hotel', 'Rose resturant', '01767553784', '', '4 star'),
(12, 'Hotel', 'Rose resturant', '01767553784', 'Dhaka', ''),
(13, 'Hotel', 'Rose resturant', '', 'Dhaka', '4 star'),
(14, 'Hotel', 'Rose resturant', '01767553784', 'Dhaka', '4 star');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emailtable`
--
ALTER TABLE `emailtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mytable`
--
ALTER TABLE `mytable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `placetable`
--
ALTER TABLE `placetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`ReportersId`);

--
-- Indexes for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  ADD PRIMARY KEY (`serviceproviderno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emailtable`
--
ALTER TABLE `emailtable`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mytable`
--
ALTER TABLE `mytable`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `placetable`
--
ALTER TABLE `placetable`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  MODIFY `serviceproviderno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
