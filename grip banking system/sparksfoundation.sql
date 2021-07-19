-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 05, 2021 at 05:49 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparksfoundation`
--

-- --------------------------------------------------------

--
-- Table structure for table `sparkstransact`
--

CREATE TABLE `sparkstransact` (
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sparkstransact`
--

INSERT INTO `sparkstransact` (`sender`, `receiver`, `balance`, `datetime`) VALUES
('NIRIKSHA', 'POOJA',9000, '2021-07-14 16:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `sparksusers`
--

CREATE TABLE `sparksusers` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sparksusers`
--

INSERT INTO `sparksusers` (`id`, `name`, `email`, `phone`, `balance`) VALUES
(10111, 'NIRIKSHA', 'niriksha234@gmail.com', 563454321, 9000),
(10112, 'VINU', 'Vinu345@gmail.com', 94000002, 5000),
(10113, 'ADITHYA', 'adhi@gmail.com', 9999999, 4000),
(10114, 'POOJA', 'poojaps@gmail.com', 8888888, 7000),
(10115, 'SUSHMA', 'sush123@gmail.com', 568228617, 2000),
(10116, 'Krithi', 'kitty@gmail.com', 456456678, 6000),
(10117, 'LAHARI', 'lahari@gmail.com', 99678435, 7000),
(10118, 'KALUS', 'kalus33@gmail.com',9976548127, 5000),
(10119, 'STEPEN', 'stepen@gmail.com', 888448971, 2000),
(10120, 'DAMON', 'daam10@gmail.com', 777334561, 9000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sparksusers`
--
ALTER TABLE `sparksusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sparksusers`
--
ALTER TABLE `sparksusers`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
