-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2023 at 08:47 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prj`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `AdminID` int(13) NOT NULL AUTO_INCREMENT,
  `AUserName` varchar(50) NOT NULL,
  `APassword` varchar(50) NOT NULL,
  PRIMARY KEY (`AdminID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `AUserName`, `APassword`) VALUES
(1, 'Admin', 'Admin'),
(4, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `billid` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` int(11) DEFAULT NULL,
  `productid` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  PRIMARY KEY (`billid`),
  KEY `orderid` (`orderid`),
  KEY `productid` (`productid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `orderid` int(5) NOT NULL AUTO_INCREMENT,
  `proid` int(5) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `phoneno` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` varchar(100) NOT NULL,
  `cardno` varchar(20) NOT NULL,
  `cvvno` varchar(5) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`orderid`, `proid`, `cname`, `phoneno`, `email`, `address`, `date`, `cardno`, `cvvno`) VALUES
(4, 0, 'BOB', '4534905843', 'Ptsav4@gmail.com', 'fsoijio', '2023-09-26', '439024895849', ''),
(5, 0, 'ABCD', '1231231231', 'ABC@gmail.com', 'dared', '2023-09-26', '111111111111', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `productid` int(11) NOT NULL AUTO_INCREMENT,
  `productname` varchar(255) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `ProImg` varchar(255) NOT NULL,
  `productdetails` varchar(255) DEFAULT NULL,
  `productprice` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productid`, `productname`, `Category`, `ProImg`, `productdetails`, `productprice`, `quantity`) VALUES
(5, 'Aluminium Machined Parts', 'Automotive Components', 'A1-Aluminium-Automotive-Machined-Parts.jpg', 'Size=52mm', '400.00', 100),
(6, 'Automotive Turned Components', 'Automotive Components', 'A2-Automotive-Turned-Components.jpg', 'Size=30mm', '200.00', 100),
(7, 'Stainless Steel Turned Automotive Components', 'Automotive Components', 'A3-Stainless-Steel-Turned-Automotive-Components.jpg', 'Size=12mm', '325.00', 100),
(8, 'Brass Automotive Components', 'Brass Forged Components', 'B1-Brass-Automotive-Components.jpg', 'Size=60mm', '35.00', 100),
(9, 'Brass Auto Parts', 'Brass Forged Components', 'B2-Brass-Auto-Parts.jpg', 'Size=25mm', '10.00', 100),
(10, 'Brass Forged Earthing Accessories', 'Brass Forged Components', 'B3-Brass-Forged-Earthing-Accessories.jpg', 'Size=10mm', '15.00', 100),
(11, 'Brass Forged Earthing Components', 'Brass Forged Components', 'B4-Brass-Forged-Parts-Components.jpg', 'Size=100mm', '25.00', 100),
(12, 'Brass Terminal Blocks', 'Brass Forged Components', 'B5-Brass-Terminal-Blocks.jpg', 'Size=15mm', '15.00', 100),
(13, 'Medium Low  Volumes Brass Forging', 'Brass Forged Components', 'B6-Medium-Low-Volumes-Brass-Forging.jpg', 'Size=60mm', '170.00', 100),
(14, 'Precision Brass Component', 'Brass Forged Components', 'B7-Precision-Brass-Component.jpg', 'Size=127mm', '700.00', 100),
(15, 'Advance Steel CNC Machined Components', 'CNC Components', 'C1-Advance-Steel-CNC-Machined-Components.jpg', 'Size=1mm', '650.00', 100),
(16, 'CNC Brass Turned Components', 'CNC Components', 'C2-CNC-Brass-Turned-Components.jpg', 'Size=800mm', '3600.00', 100),
(17, 'CNC Components', 'CNC Components', 'C3-CNC-Components.jpg', 'Size=25mm', '750.00', 100),
(18, 'CNC Machined Components', 'CNC Components', 'C4-CNC-Machined-Component.jpg', 'Size=15mm', '30.00', 100),
(19, 'CNC Milling Components', 'CNC Components', 'C5-CNC-Milling-Components.jpg', 'Size=10mm', '320.00', 100),
(20, 'CNC Turned Components', 'CNC Components', 'C6-CNC-Turned-Components.jpg', 'Size=20mm', '325.00', 100),
(21, 'Copper CNC Turned Components', 'CNC Components', 'C7-Copper-Cnc-Turned-Components.jpg', 'Size=140m', '550.00', 100),
(22, 'Copper Clamps Parts', 'Copper Parts', 'D1-Copper-Clamp-Parts.jpg', 'Price=130mm', '250.00', 100),
(23, 'Copper Enclosure Parts', 'Copper Parts', 'D2-Copper-Enclosure-Parts.jpg', 'Size=3mm', '30.00', 100),
(24, 'Copper Turned Parts', 'Copper Parts', 'D3-Copper-Turned-Parts.jpg', 'Size=6mm', '50.00', 100),
(25, 'Precision VMC Parts', 'VMC Components', 'E1-Precision-VMC-Parts.jpg', 'Size=10mm', '20.00', 100),
(26, 'TIG Welding Parts', 'VMC Components', 'E2-TIG-Welding-Parts.jpg', 'Size=2mm', '120.00', 100),
(27, 'VMC Machined Components', 'VMC Components', 'E3-VMC-Machined-Components.jpg', 'Size=1000mm', '600.00', 100),
(28, 'VMC Machine Part Compoents', 'VMC Components', 'E4-VMC-Machine-Part-Components.jpg', 'Size=50mm', '1500.00', 100),
(29, 'VMC Turned Parts', 'VMC Components', 'E5-VMC-Turned-Parts.jpg', 'Size=30mm', '200.00', 100),
(30, 'Milling Part', 'MILLING PART', 'F1-MILLING-PART.jpg', 'Size=40mm', '1500.00', 100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Userid` int(13) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Phno` varchar(15) NOT NULL,
  `Password` varchar(60) NOT NULL,
  PRIMARY KEY (`Userid`),
  UNIQUE KEY `Userid` (`Userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Userid`, `UserName`, `Email`, `Phno`, `Password`) VALUES
(9, 'utsav', 'utsav@gmail.com', '2399485837', 'utsav12345'),
(10, 'jenil', 'jenil@gmail.com', '1234123411', 'jenil1234'),
(11, 'AA', 'ABC@GMAUL.COM', '12312312312', 'AA1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
