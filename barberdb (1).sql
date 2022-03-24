-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 07:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barberdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingId` int(11) NOT NULL,
  `bookingDate` date NOT NULL,
  `bookingTime` time NOT NULL,
  `customer_customerId` int(11) NOT NULL,
  `branch_branchId` int(11) NOT NULL,
  `stylist_stylistId` int(11) NOT NULL,
  `service_serviceId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `branch_location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`, `branch_location`) VALUES
(7, 'tetuan branch 1', 'tetuan'),
(8, 'lunzuran', 'lunzuran'),
(9, 'talon talon branch', 'street talon talon'),
(10, 'talon talon branch', 'street talon talon');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerId` int(11) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_id`, `title`, `body`, `created_at`) VALUES
(7, 75, 'LET PACMAN LEAD THE PRAYER', 'Boxing with papa digs', '0000-00-00 00:00:00'),
(8, 75, 'LENI LUGAW', 'Pinkish yarn', '0000-00-00 00:00:00'),
(9, 75, 'BLENGBLONG LANG SAKALAM', 'I ask natin kay blengbloooongsss', '0000-00-00 00:00:00'),
(10, 75, 'ISKO TWO JOINTS', 'Parang mafia boss', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `serviceId` int(11) NOT NULL,
  `serviceCost` int(11) NOT NULL,
  `serviceName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `Service` varchar(255) NOT NULL,
  `Stylist` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `Service`, `Stylist`, `Price`, `Branch`) VALUES
(1, 'haircut ', 'Stylist 2', 350, 'Branch 2'),
(2, 'groom', 'Stylist 3', 400, 'Branch 2'),
(3, 'facial massage', 'Stylist 3', 500, 'Branch 3'),
(5, 'haircut ', 'Stylist 2', 200, 'Branch 1');

-- --------------------------------------------------------

--
-- Table structure for table `stylist`
--

CREATE TABLE `stylist` (
  `stylist_id` int(11) NOT NULL,
  `stylist_name` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `motto` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stylist`
--

INSERT INTO `stylist` (`stylist_id`, `stylist_name`, `branch`, `motto`, `image`) VALUES
(2, 'jessa', 'tetuan', 'stay positive alway', '262544897_310888830944348_611643605232142222_n.png'),
(3, 'france', 'tetuan branch 1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `vkey` varchar(100) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `createdate` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `address`, `number`, `password`, `vkey`, `verified`, `createdate`, `role`) VALUES
(18, 'dedw', 'lc201700492@wmsu.edu.ph', 'lussdvhjq', 3456789, '8f0a8258d0a0bb552b99cfd56a12965c', '2e39e112e5d8dfd88b12a00dfaee99ac', 0, '2022-02-19 05:12:30.290449', ''),
(23, 'fern', 'fernargo@yahoo.com', 'ehujerhf4hh8767i', 2147483647, '7fa430a7fc7e1a6315670366578e9b1f', '72ba52e3054eaadd0ec63af4cb7e778c', 0, '2022-02-28 17:42:44.036847', ''),
(72, 'awit', 'frncrebollos@admin.com', '', 0, '$2y$10$wZE9aE0lgc9YUGVLV4htj.S/7c8cyrVTMIiIzIucXLTj3zZekZkta', '', 0, '2022-03-17 12:51:04.773526', ''),
(75, 'france', 'frncrebollos@admin.com', '', 0, '$2y$10$Wlpf/0K1iadeDl1i24Ulb.gn6N95Vqr8aYAvluwAcEDTGo1Q8NWNm', '', 0, '2022-03-17 13:06:08.461018', 'Admin'),
(76, 'edward123', 'frncrebollos@gmail.com', '', 0, '$2y$10$AE5dW9pxGxME1z4cX1pk/OjPHHIAPdhPg/YnarVB5vomsRh5DgHZy', '', 0, '2022-03-17 14:55:51.345910', 'Customer'),
(78, 'france12345', 'frncrebollos@gmail.com', '', 0, '$2y$10$sbFvAajnH2eeHTAFcnVJCu3J4dlxZyNyJVtcJ130AMD4yWqf4v9ia', '', 0, '2022-03-18 13:57:23.554920', ''),
(81, 'france1234', 'frncrebollos@gmail.com', '', 0, '$2y$10$2Gmkhn3sYaiV5nXimpkAh.57Yd8OU61xmAQezpx1ZEfSDGJlrnHBe', '', 0, '2022-03-18 14:05:28.014905', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingId`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerId`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serviceId`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stylist`
--
ALTER TABLE `stylist`
  ADD PRIMARY KEY (`stylist_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `serviceId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stylist`
--
ALTER TABLE `stylist`
  MODIFY `stylist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
