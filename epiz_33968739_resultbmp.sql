-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql105.byetcluster.com
-- Generation Time: Apr 09, 2023 at 11:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_33968739_resultbmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `enno` varchar(255) NOT NULL,
  `Message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `Name`, `enno`, `Message`) VALUES
(1, 'Vishal Jani', '20270107031', 'Hello Kem chho'),
(2, 'Jani Vishalkumar Rameshbhai', '20270107031', 'Hello Sir Nice Very Nice Website Thanks.'),
(3, 'Jani Vishalkumar Rameshbhai', '20270107031', 'Hello Sir Nice Very Nice Website Thanks.');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Enno` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `MAD` int(20) NOT NULL,
  `PHP` int(20) NOT NULL,
  `EPS` int(20) NOT NULL,
  `IPR` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `Name`, `Enno`, `dept`, `MAD`, `PHP`, `EPS`, `IPR`) VALUES
(1, 'Jani Vishalkumar Rameshbhai', '20270107031', 'IT', 20, 20, 18, 17),
(2, 'Bharadiya Sujal Hareshbhai', '20270107010', 'IT', 20, 20, 18, 17),
(3, 'Bhalala Romil Dakubhai', '20270107009', 'COMPUTER', 2, 6, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(255) NOT NULL,
  `Enno` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `Enno`, `Email`, `Pass`) VALUES
(7, '20270107031', 'vishaljani04@gmail.com', '20270107031'),
(8, '20270107010', 'sbooffcial3311@gmail.com', '20270107010'),
(9, '20270107059', 'pandavdhruv786@gmail.com', '20270107059'),
(10, '20270107009', 'romildbhalala15705@gmail.com', '20270107009'),
(11, '', '', 'aaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
