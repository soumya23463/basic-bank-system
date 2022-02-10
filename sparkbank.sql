-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 04:03 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparkbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `msg`) VALUES
(1, 'soumya', 'student1@gmail.com', 'fghfg'),
(2, 'Soumya kesarwani', 'this@this.com', ''),
(3, 'Soumya kesarwani', 'this@this.com', 'ds'),
(4, 'sahil kesarwani', 'soumyakesarwani70@gmail.com', 'mai pagal hu kya kru'),
(5, 'DEMO', 'DEMO@GMAIL.COM', 'SPARK FOUNDATION TASK'),
(6, 'Spark', 'spark@gmail.com', 'spark task web development and designing');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Soumya kesarwani', 'urja kesarwani', 100, '0000-00-00 00:00:00'),
(2, 'Soumya kesarwani', 'urja kesarwani', 100, '0000-00-00 00:00:00'),
(3, 'urja kesarwani', 'utkarsh ', 100, '0000-00-00 00:00:00'),
(4, 'DEMO', 'Soumya kesarwani', 1000, '0000-00-00 00:00:00'),
(5, 'Spark', 'Soumya kesarwani', 100, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Soumya kesarwani', 'Soumyakesarwani70@gmail.com', 50900),
(2, 'urja kesarwani', 'urjakesarwani1@gmail.com', 70100),
(3, 'Sahil kesarwani', 'sahil@gmail.com', 100000),
(4, 'utkarsh ', 'utkarsh@gmail.com', 100100),
(5, 'nahid nisha', 'nahid@gmail.com', 50000),
(6, 'ishita ', 'ishita@gmail.com', 30000),
(7, 'jaya mishra', 'jaya@gmail.com', 30000),
(8, 'garvita sharma', 'garvita@gmail.com', 30000),
(9, 'farheen bano', 'farheen@gmail.com', 60000),
(10, 'geetika ', 'geetika@gmail.com', 40000),
(11, 'nazia', 'naz@gmail.com', 10000),
(12, 'DEMO', 'DEMO@GMAIL.COM', 9000),
(13, 'Spark', 'spark@gmail.com', 9900);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
