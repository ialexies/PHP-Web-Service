-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 12:45 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `groundgurus`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `location`, `course`) VALUES
(2, 'testup23333', 'manila333', 'testup23333'),
(3, 'Elvs', 'Metro Manila ', 'bsit'),
(5, 'fdfd', 'fdf', 'fdfdf'),
(6, 'fdfd', 'fdf', 'fdfdf'),
(7, 'fdfd', 'fdf', 'fdfdf'),
(8, 'momol', 'fasbasf', 'lol'),
(9, 'fdfd', 'fdf', 'fdf'),
(10, 'fdfd', 'fdfdf', 'fdfd'),
(11, 'fdfd', 'fdfdf', 'fdfd'),
(12, 'fdfd', 'fdfdf', 'fdfd'),
(13, 'fdfd', 'fdfdf', 'fdfd'),
(14, 'fdfd', 'fdfdf', 'fdfd'),
(15, 'fdfd', 'fdfdf', 'fdfd'),
(16, 'fdfd', 'fdfdf', 'fdfd'),
(17, 'fdfd', 'fdfdf', 'fdfd'),
(18, 'fdfd', 'fdfdf', 'fdfd'),
(19, 'fdfd', 'fdfdf', 'fdfd'),
(20, 'fdfd', 'fdfdf', 'fdfd'),
(21, 'fdfd', 'fdfdf', 'fdfd'),
(22, 'fdfd', 'fdfdf', 'fdfd'),
(23, 'fdfd', 'fdfdf', 'fdfd'),
(24, 'fdfd', 'fdfdf', 'fdfd'),
(25, 'Alexies blah', 'manila', 'nursing '),
(26, 'fdf', '', 'fdfd'),
(27, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
