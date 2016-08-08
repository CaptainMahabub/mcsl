-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2016 at 11:46 AM
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
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `employee_name` varchar(25) NOT NULL,
  `employee_fathers_name` varchar(25) NOT NULL,
  `employee_mothers_name` varchar(25) NOT NULL,
  `employee_birth_date` date NOT NULL,
  `gender_type` varchar(6) NOT NULL,
  `employee_mobile` varchar(15) NOT NULL,
  `employee_email` varchar(25) NOT NULL,
  `document_number` varchar(20) NOT NULL,
  `employee_present_address` varchar(50) NOT NULL,
  `employee_joining_date` date NOT NULL,
  `employee_designation` varchar(25) NOT NULL,
  `employee_salary` int(11) NOT NULL,
  `employee_photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `employee_name`, `employee_fathers_name`, `employee_mothers_name`, `employee_birth_date`, `gender_type`, `employee_mobile`, `employee_email`, `document_number`, `employee_present_address`, `employee_joining_date`, `employee_designation`, `employee_salary`, `employee_photo`) VALUES
(2, 'Sena', 'Ali khan', 'sdf', '1989-07-01', 'Female', '76898089', 'asmaumaiya@gmail.com', '568799', 'ddfgfh', '2016-01-31', 'Manager', 29000, 'img/employee/picture.jpg'),
(3, 'Sena', 'Ali khan', 'sdf', '1992-12-01', 'Female', '76898089', 'asmaumaiya@gmail.com', '568799', 'ddfgfh', '2016-01-31', 'Manager', 29000, 'img/employee/picture.jpg'),
(4, 'Prema', 'Kabir', 'wertwet', '1990-09-09', 'Male', '5686787978', 'asmaumaiya@gmail.com', '567878989', 'dsfrdg', '2016-09-09', 'Manager', 30000, 'img/employee/picture.jpg'),
(5, 'Sanjana', 'fghfgh', 'gfhfgh', '1988-09-09', 'Female', '5678787980', 'aspi87@yahoo.com', '567879879980', 'vcbvbnb', '2016-09-09', 'fvbfb', 565878, 'img/employee/bridal-hijab-styles-8.jpg'),
(6, 'Nilanjana', 'Habib', 'Malisah', '2016-08-03', 'male', '1231214234', 'asd@gmail.com', '234354657', 'Khulshi', '2016-08-01', 'Staff', 15000, 'img/employee/business_woman_FINAL.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
