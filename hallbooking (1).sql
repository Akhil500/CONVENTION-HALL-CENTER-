-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 05:57 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hallbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id1` varchar(10) NOT NULL,
  `inn` date NOT NULL,
  `out1` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id1`, `inn`, `out1`) VALUES
('4BD21', '2019-11-24', '2019-11-25'),
('4BD22', '2019-11-26', '2019-11-27'),
('4BD21', '2019-11-24', '2019-11-25'),
('4BD22', '2019-11-26', '2019-11-27'),
('4ch21', '2020-12-31', '2021-01-08'),
('4CH22', '2021-01-16', '2021-01-09'),
('4ch21', '2021-01-09', '2021-01-10'),
('4ch28', '2021-01-09', '2021-01-10'),
('4ch28', '2021-01-08', '2021-01-10'),
('4ch42', '2021-02-02', '2021-02-03');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `registration_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`registration_id`, `name`, `email`, `password`, `phone`) VALUES
(0, '', '', '', 0),
(0, 'akhil', 'akhil@gmail.com', '12334', 9206717583),
(0, 'ak', 'akk@gmail.com', '1234', 9206717584),
(1233, 'arun', 'ar@gmail.com', '1234', 8746512454),
(29, 'arun', 'arun@gmail.com', '1997', 9095526847),
(456, 'bharath', 'batta@gmail.com', '1234', 7022303461),
(0, 'bh', 'bh@gmail.com', 'bh', 7022303465),
(123, 'akhil', 'sheryas@gmail.com', '1213', 9206787456),
(234, 'Siddu', 'Sidewalk@gmail.com', '1234', 1234568906);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `phone` (`phone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
