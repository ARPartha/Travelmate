-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 07, 2020 at 11:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelmates`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `hotel_name` varchar(60) NOT NULL,
  `customer_name` varchar(60) NOT NULL,
  `booking_date` varchar(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `hotel_name`, `customer_name`, `booking_date`, `customer_id`) VALUES
(1, 'Radison Blu', 'swapnil', '2/1/2020', 3),
(2, 'seraton', 'swapnil', '2/3/2020', 3),
(3, 'seraton', 'swapnil', '2/7/2020', 3);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hotel_id` int(11) NOT NULL,
  `hotel_name` varchar(60) NOT NULL,
  `hotel_location` varchar(60) NOT NULL,
  `check_in` varchar(60) NOT NULL,
  `check_out` varchar(60) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `hotel_name`, `hotel_location`, `check_in`, `check_out`, `cost`) VALUES
(1, 'seraton', 'Dhaka', '2/1/2020', '2/29/2020', 2500),
(2, 'Radison Blu', 'Chittagong', '2/1/2020', '2/29/2020', 3500),
(3, 'sonagong', 'Comilla', '2/1/2020', '2/29/2020', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `mates`
--

CREATE TABLE `mates` (
  `group_id` int(11) NOT NULL,
  `mate_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `place` varchar(60) NOT NULL,
  `s_date` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mates`
--

INSERT INTO `mates` (`group_id`, `mate_id`, `client_id`, `place`, `s_date`) VALUES
(1, 0, 0, 'bali', '2/15/2020');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `p_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `place` varchar(60) NOT NULL,
  `s_date` varchar(60) NOT NULL,
  `e_date` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`p_id`, `user_id`, `user_name`, `place`, `s_date`, `e_date`) VALUES
(1, 3, 'swapnil', 'sajek', '2/4/2020', '2/13/2020'),
(2, 3, 'swapnil', 'darjiling', '2/12/2020', '2/29/2020'),
(3, 3, 'swapnil', 'sajek', '2/5/2020', '2/7/2020'),
(4, 3, 'swapnil', 'bali', '2/15/2020', '2/29/2020');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_name` varchar(60) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `phone`, `email`, `pass`, `gender`, `user_id`) VALUES
('partha', '01624848689', 'abrahmanpartha@gmail.com', '1234', 'male', 1),
('rayed_tuhin', '01765665446', 'yourdad@gmai;.com', '1234', 'male', 2),
('swapnil', '01953164146', 's@gmail.com', '1234', 'male', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `mates`
--
ALTER TABLE `mates`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mates`
--
ALTER TABLE `mates`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
