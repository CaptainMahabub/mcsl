-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2016 at 06:56 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcs_maindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `deposite_withdraw`
--

CREATE TABLE `deposite_withdraw` (
  `id` int(11) NOT NULL,
  `account_no` varchar(100) NOT NULL,
  `deposite_or_withdraw` varchar(12) NOT NULL,
  `date` date NOT NULL,
  `tracking_no` varchar(100) NOT NULL,
  `ammount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deposite_withdraw`
--

INSERT INTO `deposite_withdraw` (`id`, `account_no`, `deposite_or_withdraw`, `date`, `tracking_no`, `ammount`) VALUES
(1, '567686', '', '2016-08-02', '56876978056', '345456'),
(2, '54678785656', '', '2016-06-06', '3565787', '343546');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deposite_withdraw`
--
ALTER TABLE `deposite_withdraw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deposite_withdraw`
--
ALTER TABLE `deposite_withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
