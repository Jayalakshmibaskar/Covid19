-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 12:48 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `Msgid` int(255) NOT NULL,
  `Msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`Msgid`, `Msg`) VALUES
(0, 'stay sfae');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderId` int(255) NOT NULL,
  `Orders` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderId`, `Orders`) VALUES
(4, '[{\"prodName\":\"orange\",\"Quantity\":\"2\"},{\"prodName\":\"apple\",\"Quantity\":\"2\"},{\"prodName\":\"grapes\",\"Quantity\":\"2\"},{\"prodName\":\"guava\",\"Quantity\":\"2\"}]'),
(6, '[\r\n{\r\n\"prodName\":\"carrot\",\r\n\"Quantity\":\"2\"\r\n},{\r\n\"prodName\":\"tomato\",\r\n\"Quantity\":\"2\"\r\n},{\r\n\"prodName\":\"potato\",\r\n\"Quantity\":\"2\"\r\n},{\r\n\"prodName\":\"lady\'s finger\",\r\n\"Quantity\":\"2\"\r\n}\r\n]');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserId` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Locality` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `Name`, `Email`, `Password`, `Phone`, `Address`, `Locality`, `usertype`) VALUES
(1, 'jaya', 'jaya@gmail.com', 'Jaya@123', '8794521036', 'madipakkam', 'chennai', 'customer'),
(3, 'Aadhi', 'adhi@gmail.com', 'aadhi@123', '9041568605', 'porur', 'chennai', 'trader'),
(4, 'Karthika', 'karthika@gmail.com', 'karthi@123', '8045679520', 'koyambedu', 'chennai', 'customer'),
(6, 'xxx', 'abc@gmail.com', '13dffg', '457894', 'sgwr', 'gregewrr', 'customer'),
(8, 'riaz', 'riaz@gmail.com', 'acc@134', '8794012630', 'no 123 yz street', 'chennai', 'trader'),
(9, 'gerg', 'fesf@gmail.com', 'acc@134', '8794012630', 'no 123 yz street', 'chennai', 'trader'),
(10, 'gerg', 'fegsfssd@gmail.com', 'acc@134', '8794012630', 'no 123 yz street', 'chennai', 'trader'),
(11, 'gerg', 'sfssd@gmail.com', 'acc@134', '8794012630', 'no 123 yz street', 'chennai', 'trader'),
(12, 'gerg', 'sfcgh@gmail.com', 'acc@134', '8794012630', 'no 123 yz street', 'chennai', 'trader'),
(13, 'gerg', 'kjkgh@gmail.com', 'acc@134', '8794012630', 'no 123 yz street', 'chennai', 'trader');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`Msgid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
