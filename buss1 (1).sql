-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2018 at 12:52 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bussiness`
--

-- --------------------------------------------------------

--
-- Table structure for table `buss1`
--

CREATE TABLE `buss1` (
  `phn` int(11) NOT NULL,
  `service` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `image` longblob NOT NULL,
  `name` varchar(40) NOT NULL,
  `latitude` decimal(10,8) NOT NULL,
  `longitude` decimal(10,8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buss1`
--

INSERT INTO `buss1` (`phn`, `service`, `location`, `image`, `name`, `latitude`, `longitude`) VALUES
(2111, 'zczvsvz', 'wwewe', 0x66732e6a7067, 'zzvz', '18.11243720', '79.01929970'),
(666661, 'electrician', 'yeswanth', 0x72732e706e67, 'yeswanthh', '0.00000000', '0.00000000'),
(3222211, 'electrician', 'adada', 0x66732e6a7067, 'sikkku', '17.38504400', '78.48667100'),
(12312312, 'asfasfafag', 'rre', 0x66732e6a7067, 'asfa', '17.43992950', '78.49827410'),
(15252561, 'electrician', 'bvrm', 0x66732e6a7067, 'yeswanth', '0.00000000', '0.00000000'),
(2147483647, 'electrician', 'tpg', 0x66732e6a7067, 'raghu', '0.00000000', '0.00000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buss1`
--
ALTER TABLE `buss1`
  ADD PRIMARY KEY (`phn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
