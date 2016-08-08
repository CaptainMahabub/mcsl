-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2016 at 11:54 AM
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
-- Table structure for table `employee_salary`
--

CREATE TABLE `employee_salary` (
  `salary_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `month_name` varchar(12) NOT NULL,
  `year_name` int(4) NOT NULL,
  `salary_ammount` int(11) NOT NULL,
  `salary_pay_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_salary`
--

INSERT INTO `employee_salary` (`salary_id`, `employee_id`, `month_name`, `year_name`, `salary_ammount`, `salary_pay_date`) VALUES
(1, 1, 'jan', 2015, 5000, '2016-07-30 10:29:00'),
(2, 2, 'January', 2016, 20000, '2016-01-31 00:00:00'),
(3, 3, 'June', 2015, 15000, '2016-08-03 00:00:00'),
(4, 4, 'April', 2016, 15000, '2016-12-31 00:00:00'),
(5, 5, 'March', 2016, 20000, '2016-01-31 00:00:00'),
(6, 6, 'january', 2016, 324, '2016-08-09 00:00:00'),
(7, 0, 'February', 2016, 34000, '2016-08-03 06:51:36'),
(8, 0, 'janu', 2020, 5555555, '2016-08-12 00:00:00'),
(9, 0, 'january', 2013, 0, '2016-08-06 12:04:52'),
(10, 0, 'February', 2013, 0, '2016-08-06 12:13:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_salary`
--
ALTER TABLE `employee_salary`
  ADD PRIMARY KEY (`salary_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_salary`
--
ALTER TABLE `employee_salary`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
