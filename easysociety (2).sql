-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Oct 11, 2020 at 05:34 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easysociety`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Admintype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`, `Admintype`) VALUES
('Akash123', 'qwerty123', 'Secretary'),
('Anuja123', 'qwerty123', 'Treasurer'),
('Ashish098', 'iam123', 'Security');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `Date` date NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`Date`, `Subject`, `Message`) VALUES
('2020-10-07', 'Annual General Meeting', 'Annual General Meeting will be held on upcoming Sunday of this week. All members are requested to be present. '),
('2020-10-07', 'Festival Plans', 'A meeting will be planned to decide the events to be held in upcoming festive seasons. Your inputs will be highly welcomed.'),
('2020-10-08', 'water cut', 'Water Cut will be experienced in next 2 days. Please use water with care.'),
('2020-10-09', 'Notice about Sweepers', 'Sweepers won\'t be coming on next Thursday and Friday.'),
('2020-10-08', 'power cut', 'It is to confirm that power cut will be witnessed today from 8pm to 9:30pm.'),
('2020-10-09', 'Navaratri', 'Navaratri celebration is cancelled due to COIVD-19.'),
('2020-10-24', 'Society Meeting', 'Society meeting at 3pm 26/10/2020. '),
('2020-10-03', 'Society Meeting 2', 'Meeting will be held tomorrow.e');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `Common Charges (per sqft)` float NOT NULL,
  `Water Charges` float NOT NULL,
  `Sinking Fund` float NOT NULL,
  `Building Repair Fund` float NOT NULL,
  `2 wheeler Parking Charges` float NOT NULL,
  `4 wheeler Parking Charges` float NOT NULL,
  `Insurance Premium` float NOT NULL,
  `Others` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`Common Charges (per sqft)`, `Water Charges`, `Sinking Fund`, `Building Repair Fund`, `2 wheeler Parking Charges`, `4 wheeler Parking Charges`, `Insurance Premium`, `Others`) VALUES
(1.5, 100, 15, 100, 50, 100, 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `duebills`
--

CREATE TABLE `duebills` (
  `MonthandYear` varchar(15) NOT NULL,
  `FlatAddress` varchar(10) NOT NULL,
  `FlatOwner` varchar(20) NOT NULL,
  `Common Charges (per sqft)` float NOT NULL,
  `Water Charges` float NOT NULL,
  `Sinking Fund` float NOT NULL,
  `Building Repair Fund` float NOT NULL,
  `two wheeler Parking Charges` float NOT NULL,
  `four wheeler Parking Charges` float NOT NULL,
  `Insurance Premium` float NOT NULL,
  `Others` float NOT NULL,
  `DueBills` float NOT NULL,
  `Total` float NOT NULL,
  `Seen_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duebills`
--

INSERT INTO `duebills` (`MonthandYear`, `FlatAddress`, `FlatOwner`, `Common Charges (per sqft)`, `Water Charges`, `Sinking Fund`, `Building Repair Fund`, `two wheeler Parking Charges`, `four wheeler Parking Charges`, `Insurance Premium`, `Others`, `DueBills`, `Total`, `Seen_status`) VALUES
('October-2020', 'A-1', 'Ganesh Thakur', 576, 100, 15, 100, 50, 100, 20, 0, 0, 961, 0),
('October-2020', 'B-104', 'Vaishnavi Sankhe', 618, 100, 15, 100, 50, 0, 20, 0, 350, 1253, 0);

-- --------------------------------------------------------

--
-- Table structure for table `flat_and_parking_details`
--

CREATE TABLE `flat_and_parking_details` (
  `FlatAddress` varchar(10) NOT NULL,
  `FlatArea(sqft)` int(11) NOT NULL,
  `FlatOwner` varchar(20) NOT NULL,
  `2-Wheelers` int(11) NOT NULL,
  `4-Wheelers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flat_and_parking_details`
--

INSERT INTO `flat_and_parking_details` (`FlatAddress`, `FlatArea(sqft)`, `FlatOwner`, `2-Wheelers`, `4-Wheelers`) VALUES
('A-1', 384, 'Ganesh Thakur', 1, 1),
('A-30', 800, 'Walter', 1, 0),
('B-104', 412, 'Vaishnavi Sankhe', 1, 0),
('C-32', 900, 'Lance', 2, 1),
('D-20', 900, 'Rajesh Joshi', 1, 1),
('D-214', 384, 'Akash Singh', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `housingmembers`
--

CREATE TABLE `housingmembers` (
  `FlatAddress` varchar(10) NOT NULL,
  `FlatOwner` varchar(20) NOT NULL,
  `No_of_House_Members` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `housingmembers`
--

INSERT INTO `housingmembers` (`FlatAddress`, `FlatOwner`, `No_of_House_Members`, `Username`, `Password`) VALUES
('123', '47679', 1, '123', '   '),
('A-1', 'Ganesh Thakur', 6, 'Ganesh001', 'ganesh121'),
('A-30', 'Walter', 7, 'Walter123', 'walter'),
('B-104', 'Vaishnavi Sankhe', 5, 'vaishnavi121', 'vaishnavi@123'),
('C-32', 'Lance', 3, 'Lance123', 'lance'),
('D-20', 'Rajesh Joshi', 5, 'Rajesh123', 'rajesh'),
('D-214', 'Akash Singh', 3, 'Akash012', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `paymenthistory`
--

CREATE TABLE `paymenthistory` (
  `MonthandYear` varchar(15) NOT NULL,
  `Payment Date` varchar(15) NOT NULL,
  `FlatAddress` varchar(10) NOT NULL,
  `FlatOwner` varchar(20) NOT NULL,
  `Total Payment` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymenthistory`
--

INSERT INTO `paymenthistory` (`MonthandYear`, `Payment Date`, `FlatAddress`, `FlatOwner`, `Total Payment`) VALUES
('October-2020', '08-10-2020', 'D-214', 'Akash Singh', 1311),
('October-2020', '11-10-2020', 'C-32', 'Lance', 3785),
('October-2020', '09-10-2020', 'D-20', 'Rajesh Joshi', 1935),
('October-2020', '09-10-2020', 'A-30', 'Walter', 11485);

-- --------------------------------------------------------

--
-- Table structure for table `remainingbills`
--

CREATE TABLE `remainingbills` (
  `FlatAddress` varchar(10) NOT NULL,
  `DueBills` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remainingbills`
--

INSERT INTO `remainingbills` (`FlatAddress`, `DueBills`) VALUES
('A-1', 961),
('A-30', 0),
('B-104', 1253),
('C-32', 0),
('D-20', 0),
('D-214', 0);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `Date` date NOT NULL,
  `VisitorName` varchar(20) NOT NULL,
  `VisitorContact` bigint(20) NOT NULL,
  `FlatAddress` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`Date`, `VisitorName`, `VisitorContact`, `FlatAddress`) VALUES
('2020-10-08', 'Alok Singh', 9878672314, 'D-214'),
('2020-10-08', 'Aryan Mishra', 9089786790, 'A-1'),
('2020-10-09', 'Harsh Singh', 9878985623, 'D-20'),
('2020-10-10', 'Dinesh', 9802929284, 'A-30'),
('2020-10-09', '   ', 0, '123'),
('2020-10-30', 'Suresh Ambar', 9898435544, 'C-32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `duebills`
--
ALTER TABLE `duebills`
  ADD PRIMARY KEY (`MonthandYear`,`FlatOwner`),
  ADD UNIQUE KEY `FlatAddress` (`FlatAddress`);

--
-- Indexes for table `flat_and_parking_details`
--
ALTER TABLE `flat_and_parking_details`
  ADD PRIMARY KEY (`FlatAddress`);

--
-- Indexes for table `housingmembers`
--
ALTER TABLE `housingmembers`
  ADD PRIMARY KEY (`FlatAddress`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `paymenthistory`
--
ALTER TABLE `paymenthistory`
  ADD PRIMARY KEY (`MonthandYear`,`FlatOwner`),
  ADD KEY `FlatAddress` (`FlatAddress`);

--
-- Indexes for table `remainingbills`
--
ALTER TABLE `remainingbills`
  ADD PRIMARY KEY (`FlatAddress`),
  ADD UNIQUE KEY `FlatAddress` (`FlatAddress`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD KEY `visitors_ibfk_1` (`FlatAddress`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `duebills`
--
ALTER TABLE `duebills`
  ADD CONSTRAINT `duebills_ibfk_1` FOREIGN KEY (`FlatAddress`) REFERENCES `housingmembers` (`FlatAddress`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `flat_and_parking_details`
--
ALTER TABLE `flat_and_parking_details`
  ADD CONSTRAINT `flat_and_parking_details_ibfk_1` FOREIGN KEY (`FlatAddress`) REFERENCES `housingmembers` (`FlatAddress`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paymenthistory`
--
ALTER TABLE `paymenthistory`
  ADD CONSTRAINT `paymenthistory_ibfk_1` FOREIGN KEY (`FlatAddress`) REFERENCES `housingmembers` (`FlatAddress`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `remainingbills`
--
ALTER TABLE `remainingbills`
  ADD CONSTRAINT `remainingbills_ibfk_1` FOREIGN KEY (`FlatAddress`) REFERENCES `housingmembers` (`FlatAddress`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `visitors`
--
ALTER TABLE `visitors`
  ADD CONSTRAINT `visitors_ibfk_1` FOREIGN KEY (`FlatAddress`) REFERENCES `housingmembers` (`FlatAddress`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
