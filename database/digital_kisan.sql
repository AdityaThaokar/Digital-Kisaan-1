-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2018 at 08:04 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_kisan`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmerdetails`
--

CREATE TABLE `farmerdetails` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `aadhar` int(10) NOT NULL,
  `jandhan` int(10) NOT NULL,
  `location` varchar(200) NOT NULL,
  `date_now` date NOT NULL,
  `pincode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmerdetails`
--

INSERT INTO `farmerdetails` (`id`, `username`, `password`, `email`, `phone`, `aadhar`, `jandhan`, `location`, `date_now`, `pincode`) VALUES
(1, 'rakesh', '123', 'rakesh@gmail.com', 2147483647, 1524635879, 2147483647, 'Belgaon, Maharashtra, India', '2000-05-01', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `salerdetails`
--

CREATE TABLE `salerdetails` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `aadhar` int(10) NOT NULL,
  `shopid` int(10) NOT NULL,
  `location` varchar(100) NOT NULL,
  `date_now` date NOT NULL,
  `pincode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salerdetails`
--

INSERT INTO `salerdetails` (`id`, `username`, `password`, `email`, `phone`, `aadhar`, `shopid`, `location`, `date_now`, `pincode`) VALUES
(1, 'Aditya ', '1234', 'nimish.mailbox@gmail.com', 2147483647, 1524635879, 986574859, 'Nerul, Navi Mumbai, Maharashtra, India', '1975-05-03', '410206');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmerdetails`
--
ALTER TABLE `farmerdetails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `salerdetails`
--
ALTER TABLE `salerdetails`
  ADD PRIMARY KEY (`aadhar`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farmerdetails`
--
ALTER TABLE `farmerdetails`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `salerdetails`
--
ALTER TABLE `salerdetails`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
