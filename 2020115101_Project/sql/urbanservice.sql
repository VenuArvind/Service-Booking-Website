-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 01:03 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urbanservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `appliances`
--

CREATE TABLE `appliances` (
  `Category` varchar(15) NOT NULL,
  `Id` int(4) NOT NULL,
  `Productname` varchar(15) NOT NULL,
  `Productdescription` text NOT NULL,
  `Price` int(5) NOT NULL,
  `Image` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appliances`
--

INSERT INTO `appliances` (`Category`, `Id`, `Productname`, `Productdescription`, `Price`, `Image`) VALUES
('Fridge', 1001, 'Refrigerator', 'Assisted by our affluent industry indulgent and proficiency in this arena, we are able to provide Refrigerator Repairing Service. Provided services are imparted personnel who hold vast knowledge in their respective realm that assists them in imparting these services in a well-organized way. ', 1999, 'fridgeicon.jpg'),
('AC', 1002, 'Air-Conditioner', 'Keeping your HVAC equipment in good repair can save you more than simply money and time. Using a reputable HVAC company such as Urban Serive for your HVAC maintenance can help you prevent HVAC repair emergencies. The company provides comprehensive maintenance that includes the items on the checklist above. We can set up a contract for routine maintenance or assess your HVAC system at any time. Keep your home comfortable with regular maintenance.', 2999, 'acicon.jpg'),
('WM', 1003, 'Washing Machine', 'Owing to our deep experience and in-depth knowledge of this field, we have been able to offer excellent quality Washing Machine Repairing Service to our valuable customers. To perform the offered services within the ensured time frame, we have selected a team of skilled technicians. In addition to this, the offered services can be customized as per the specifications rendered by the customers.', 2999, 'wmicon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cleaning`
--

CREATE TABLE `cleaning` (
  `Category` varchar(15) NOT NULL,
  `Productname` varchar(20) NOT NULL,
  `Productdescription` text NOT NULL,
  `Id` int(4) NOT NULL,
  `Price` int(5) NOT NULL,
  `Image` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cleaning`
--

INSERT INTO `cleaning` (`Category`, `Productname`, `Productdescription`, `Id`, `Price`, `Image`) VALUES
('Interior', 'Interior-Cleaning', 'Cleaning products play an essential role in our daily lives at home, in school and in the office. By safely and effectively removing soils, germs and other contaminants, they prevent the spread of infectious diseases and control allergens, such as dust and mold, helping us to stay healthy. Cleaning products also enable us to care for our homes and possessions.', 1004, 4999, 'cleaningicon1.png'),
('Outside', 'Exterior-Cleaning ', ' Urban Service offer products which are rigorously tested for years, certified by HACCP, RC & CIB, and Evaluated by WHOPES. Urban Service is a 150+ year strong organization known for its highly advance and innovative solutions. Urban Service innovative products are safe to use under different situation like commercial, residential, industrial etc. & are highly effective against the target household /public health pest. Our products are made to manage disease spreading & nuisance creating pest like Cockroach, Mosquito, Flies, Termite, Ants, Rodent, etc.. ', 1005, 3999, 'pc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `salon`
--

CREATE TABLE `salon` (
  `Id` int(4) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Productname` varchar(40) NOT NULL,
  `Price` int(5) NOT NULL,
  `Productdescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salon`
--

INSERT INTO `salon` (`Id`, `Category`, `Productname`, `Price`, `Productdescription`) VALUES
(1006, 'Men', 'Hair-cut-Premier stylist', 900, 'Hair cut by a premier stylist'),
(1007, 'Men', 'Hair-cut-Top stylist', 1150, 'Hair cut by the best stylist in the studio'),
(1008, 'Men', 'Hair wash and conditioning', 400, 'Hair wash using Loreal shampoo and cleaning using hot and cold water followed by conditioning'),
(1009, 'Men', 'Beard Trim', 350, 'Trimming beard using sterilised equipment'),
(1010, 'Women', 'Hair cut-Premier stylist', 1400, 'Hair cut by a Premier stylist'),
(1011, 'Women', 'Hair cut-Top stylist', 1700, 'Hair cut by a Top stylist'),
(1012, 'Women', 'Hair cut-Store Director', 2000, 'Hair cut by the stoer director'),
(1013, 'Women', 'Hair wash and conditioning', 600, 'Hair wash and conditioning by an expert using Loreal products'),
(1014, 'Women', 'Oil Massage', 1200, 'Oil massage by a premier stylist');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Name` varchar(15) NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Name`, `Email`, `Password`) VALUES
('Venu', 'arvind19rajan@gmail.com', 'Hello');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
