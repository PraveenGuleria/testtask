-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2023 at 03:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(15) NOT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `surname`, `email`, `phone`, `message`) VALUES
(1, 'Admin User', 'yy', 'aa@gmai.com', '9876543210', 'dzvzfxfncbnv'),
(2, 'Admin User', 'yy', 'aa@gmai.com', '9876543210', 'dzvzfxfncbnv'),
(3, 'Admin User', 'yy', 'aa@gmai.com', '9876543210', 'dfghgj'),
(4, 'Admin User', 'yy', 'aa@gmai.com', '9876543210', 'we recived your message our team will contact you shortly with the solution of your query'),
(6, 'Admin User', 'yy', 'aa@gmai.com', '9876543210', 'we recived your message our team will contact you shortly with the solution of your query'),
(7, 'Admin User', 'yy', 'aa@gmai.com', '9876543210', 'we recived your message our team will contact you shortly with the solution of your query'),
(8, 'Admin User', 'yy', 'aa@gmai.com', '9876543210', 'rstgdhjm'),
(9, 'Admin User', 'yy', 'aa@gmai.com', '9876543210', 'rstgdhjm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
