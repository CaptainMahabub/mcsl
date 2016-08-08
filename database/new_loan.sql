-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2016 at 01:25 PM
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
-- Table structure for table `new_loan`
--

CREATE TABLE `new_loan` (
  `newloan_id` int(11) NOT NULL,
  `account_no` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `loan_amount` varchar(50) NOT NULL,
  `interest_amount` int(20) NOT NULL,
  `installment` varchar(50) NOT NULL,
  `grantors` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_loan`
--

INSERT INTO `new_loan` (`newloan_id`, `account_no`, `date`, `loan_amount`, `interest_amount`, `installment`, `grantors`) VALUES
(4, '11112', '2016-08-08', '50000', 7500, '36', 'Mahabub');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_loan`
--
ALTER TABLE `new_loan`
  ADD PRIMARY KEY (`newloan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_loan`
--
ALTER TABLE `new_loan`
  MODIFY `newloan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
