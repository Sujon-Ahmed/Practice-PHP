-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2021 at 05:13 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doel`
--

-- --------------------------------------------------------

--
-- Table structure for table `simple`
--

CREATE TABLE `simple` (
  `id` int(11) NOT NULL,
  `photo` varchar(80) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `district` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simple`
--

INSERT INTO `simple` (`id`, `photo`, `name`, `email`, `phone`, `district`, `gender`, `hobby`, `message`, `created_at`) VALUES
(2, '61c4a01635c1d7.01877438.jpg', 'Sujon Ahmed', 'sujonahmed@gmail.com', '01906888478', 'dhaka', 'male', 'cricket,football,badminton', 'Hi, I am Sujon Ahmed', '2021-12-23 22:13:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `simple`
--
ALTER TABLE `simple`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `simple`
--
ALTER TABLE `simple`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
