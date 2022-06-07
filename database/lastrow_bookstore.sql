-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 05:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lastrow_bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`, `name`) VALUES
('admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `no` int(11) NOT NULL,
  `id` varchar(255) NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `postage` double NOT NULL,
  `total` double NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`no`, `id`, `isbn`, `quantity`, `postage`, `total`, `address`) VALUES
(1, 'cust1', '00000001', 1, 10.5, 15, 'testing street'),
(2, 'cust2', '00000002', 12, 6.6, 17, 'buying street');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `password`, `name`, `address`, `phone`, `email`) VALUES
('ss', 'ss', 'ss', 'ss', '0123456789', 'sdsd@ss'),
('test', 'test', 'test', 'ss', '0123456789', 'sdsd@ss');

-- --------------------------------------------------------

--
-- Table structure for table `featured_books`
--

CREATE TABLE `featured_books` (
  `bookNo` int(11) NOT NULL,
  `isbn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `featured_books`
--

INSERT INTO `featured_books` (`bookNo`, `isbn`) VALUES
(1, '00000001'),
(2, '00000002'),
(3, '00000004'),
(4, '00000003'),
(5, '00000005'),
(6, '00000006');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `isbn` varchar(255) NOT NULL,
  `bookName` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publishDate` varchar(255) NOT NULL,
  `bookDesc` varchar(255) NOT NULL,
  `pictureUrl` varchar(255) NOT NULL,
  `tradePrice` double NOT NULL,
  `retailPrice` double NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`isbn`, `bookName`, `author`, `publishDate`, `bookDesc`, `pictureUrl`, `tradePrice`, `retailPrice`, `quantity`) VALUES
('00000001', 'The Amazing Spider-Man #1', 'Stan Lee', '01/03/1963', 'WHAT DID SPIDER-MAN DO?! Ock’s on Spider-Man’s tail and the Master Planner has something truly terrible planned for when he gets his tentacles on Spidey.', '00000001.jpg', 14.99, 24.99, 10),
('00000002', 'Iron Man (2020) #14', 'Christopher Cantwell', '24/11/2021', 'BEHOLD THE BIRTH OF COSMIC IRON MAN! Iron Man has tasted a higher power and is forever changed.', '00000002.jpg', 14.99, 24.99, 13),
('00000003', 'Carnage #2', 'Ram. V.', '27/4/2022', 'CARNAGE and CLETUS KASADY, Sharing a bond unique even among symbiotes and their hosts, the two were the most notorious and prolific serial killers in the Marvel Universe.', '00000003.jpg', 14.99, 24.99, 14),
('00000004', 'Ms. Marvel: Beyond The Limit #5', 'Samira Ahmed', '27/4/2022', 'Ms. Marvel and Qarin face off in this epic finale! If Ms. Marvel can’t stop her, with some help from Bruno and Nadia Van Dyne, is this the end of Ms. Marvel – for good?', '00000004.jpg', 14.99, 24.99, 7),
('00000005', 'Hulk Smash Avengers (2011) #1', 'Stan Lee', '2/5/2012', 'One of the strongest heroes in the Marvel U faces off against the AVENGERS in a five-part punch-fest!', '00000005.jpg', 9.99, 14.99, 23),
('00000006', 'Avengers Vs. X-Men #9', 'Jason Aaron', '1/8/2012', 'Their numbers dwindling, the Avengers stage a daring raid on the X-Men\'s prison to rescue their captive members-and you won\'t believe where it is!', '00000006.jpg', 14.99, 24.99, 25),
('00000007', ' Savage Avengers (2022) #1', 'David Pepose', '18/5/2022', 'AN ALL-NEW, ALL-DIFFERENT, ALL-DANGEROUS TEAM ASSEMBLES! Don’t miss out on a bold new beginning for Marvel’s most savage super heroes.', '00000007.jpg', 6.99, 10.99, 31);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_books`
--
ALTER TABLE `featured_books`
  ADD PRIMARY KEY (`bookNo`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`isbn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
