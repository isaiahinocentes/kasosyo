-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2017 at 06:38 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasyoso`
--
CREATE DATABASE IF NOT EXISTS `kasyoso` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kasyoso`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `user_id` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`user_id`, `username`, `pass`) VALUES
('sample', 'sample', 'sample');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` varchar(10) NOT NULL,
  `store_id` varchar(10) NOT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `name_desc` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `unit_qty` varchar(10) DEFAULT NULL,
  `unit_cap` double DEFAULT NULL COMMENT 'CAPITAL',
  `unit_int` double DEFAULT NULL COMMENT 'INTEREST / PATONG',
  `unit_price` double DEFAULT NULL,
  `bought_date` datetime DEFAULT NULL,
  `shelf_life` date DEFAULT NULL,
  `instock` double DEFAULT NULL,
  `instock_unit` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `store_id`, `brand`, `name_desc`, `type`, `quantity`, `unit_qty`, `unit_cap`, `unit_int`, `unit_price`, `bought_date`, `shelf_life`, `instock`, `instock_unit`) VALUES
('it0', 'st0', 'nido', 'lactobaciloius milk powder', 'food/dairy', 1, 'kg', 200.4, 20.43, 220.83, '2017-07-22 11:20:36', '2017-11-16', 30, 'kg');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` varchar(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `owner` varchar(100) DEFAULT NULL,
  `open_hours` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `landmark` varchar(100) DEFAULT NULL,
  `images` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `name`, `location`, `owner`, `open_hours`, `contact`, `landmark`, `images`) VALUES
('st0', 'kasyoso store', 'Sta. Mesa, Manila\r\n', 'Manong Pedro', '7:00am - 11:00pm', '096969699', 'Near Rizal park', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trans`
--

CREATE TABLE `trans` (
  `id` varchar(10) NOT NULL,
  `item_id` varchar(10) DEFAULT NULL,
  `item_qty` double DEFAULT NULL,
  `qty_unit` varchar(10) DEFAULT NULL,
  `unit_price` double DEFAULT NULL,
  `total_price` double DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans`
--

INSERT INTO `trans` (`id`, `item_id`, `item_qty`, `qty_unit`, `unit_price`, `total_price`, `timestamp`) VALUES
('tr0', 'it0', 1, 'kg', 0, 220.83, '2017-07-22 06:20:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trans`
--
ALTER TABLE `trans`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
