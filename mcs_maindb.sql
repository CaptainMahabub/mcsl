-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2016 at 03:59 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

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
-- Table structure for table `account_holders`
--

CREATE TABLE `account_holders` (
  `account_holder_id` int(11) NOT NULL,
  `account_holder_name` varchar(25) NOT NULL,
  `account_holder_fathersname` varchar(25) NOT NULL,
  `account_holder_mothersname` varchar(25) NOT NULL,
  `account_holder_birthdate` date NOT NULL,
  `gender_type` varchar(5) NOT NULL,
  `account_holder_mobile` int(15) NOT NULL,
  `account_holder_email` varchar(25) NOT NULL,
  `document_number` varchar(20) NOT NULL,
  `account_type_name` varchar(25) NOT NULL,
  `primar_savings_amount` int(11) NOT NULL,
  `account_holder_present_address` varchar(50) NOT NULL,
  `branch_name` varchar(25) NOT NULL,
  `verifier_name` varchar(25) NOT NULL,
  `nominee_name` varchar(25) NOT NULL,
  `account_holder_photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_holders`
--

INSERT INTO `account_holders` (`account_holder_id`, `account_holder_name`, `account_holder_fathersname`, `account_holder_mothersname`, `account_holder_birthdate`, `gender_type`, `account_holder_mobile`, `account_holder_email`, `document_number`, `account_type_name`, `primar_savings_amount`, `account_holder_present_address`, `branch_name`, `verifier_name`, `nominee_name`, `account_holder_photo`) VALUES
(11111, 'Mahabub', 'Mahabub', 'Mahabub', '2001-09-24', 'male', 1234567, 's@gmail.com', '46546465', 'saving', 500, 'mirpur', 'dhaka', 'mizan', 'mizan', 'yes'),
(11112, 'dss', 'sds', 'dss', '0000-00-00', 'dss', 0, 'dss', 'dss', 'dss', 0, 'sds', 'dss', 'dss', 'sds', 'photopath'),
(11113, 'dfgddfgd', 'fdg', 'fdg', '2016-08-02', 'male', 93498546, 'jj@gmail.com', '456575457658678', 'dfgdfh', 0, 'dytryrt', 'dgd', 'dgdg', 'dfgd', 'photopath'),
(11114, '', '', '', '2016-07-31', 'male', 0, '', '', '', 0, '', '', '', '', 'photopath'),
(11115, '', '', '', '2016-08-01', 'male', 0, '', '', '', 0, '', '', '', '', 'photopath'),
(11116, '', '', '', '2016-07-04', 'femal', 0, '', '', '', 0, '', '', '', '', 'photopath'),
(11117, '', '', '', '2016-07-13', 'femal', 0, '', '', '', 0, '', '', '', '', 'photopath'),
(11118, '', '', '', '2016-07-22', 'femal', 0, '', '', '', 0, '', '', '', '', 'photopath'),
(11119, '', '', '', '2016-06-15', 'male', 0, '', '', '', 0, '', '', '', '', 'photopath'),
(11120, '', '', '', '2016-06-19', 'femal', 0, '', '', '', 0, '', '', '', '', 'photopath'),
(11121, '', '', '', '2016-05-16', 'male', 0, '', '', '', 0, '', '', '', '', 'photopath'),
(11122, '', '', '', '2016-06-08', 'femal', 87557645, '', '', '', 0, '', '', '', '', 'photopath'),
(11123, 'dg', 'dg', 'dfg', '2016-07-31', '', 5657867, 'hh@gmail.com', '4675899567456', 'hjh', 0, 'hjk', 'kj', 'jklkj', 'kl', 'img/account_holder/04rct-l.jpg'),
(11124, '', '', '', '2016-08-02', '', 0, 'jj@gmail.com', '', '', 0, '', '', '', '', 'img/account_holder/_09K0400.jpg'),
(11125, '', '', '', '0000-00-00', 'male', 0, 'gds@gmail.com', '', '', 0, '', '', '', '', 'img/account_holder/_09K0400.jpg'),
(11126, '', '', '', '2016-08-02', 'male', 0, 'dd@gmail.com', '', '', 0, '', '', '', '', 'img/account_holder/9-headboard-detail.jpg'),
(11127, 'kgk', 'utytey', 'klkj', '2016-08-21', 'male', 2147483647, 'hh@gmail.com', '6537598078676', 'kjkjh', 0, '', '', '', '', 'img/account_holder/ashrafuzzaman_fc1072da.png'),
(11128, '', '', '', '0000-00-00', '', 0, '', '', '', 0, '', '', '', '', 'img/account_holder/');

-- --------------------------------------------------------

--
-- Table structure for table `account_types`
--

CREATE TABLE `account_types` (
  `account_type_id` int(11) NOT NULL,
  `account_type_name` varchar(15) NOT NULL,
  `account_type_code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account_types`
--

INSERT INTO `account_types` (`account_type_id`, `account_type_name`, `account_type_code`) VALUES
(1, 'Savings Account', 'sa001'),
(2, 'Fixed Deposite', 'fd001');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `attendance_date` date NOT NULL,
  `attendance_intime` time NOT NULL,
  `attendance_intime_sms` varchar(4) NOT NULL,
  `attendance_outtime` time NOT NULL,
  `attendance_outtime_sms` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `branchs`
--

CREATE TABLE `branchs` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(20) NOT NULL,
  `branch_president` varchar(25) NOT NULL,
  `branch_address` varchar(50) NOT NULL,
  `branch_contact_no` varchar(15) NOT NULL,
  `branch_email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `branchs`
--

INSERT INTO `branchs` (`branch_id`, `branch_name`, `branch_president`, `branch_address`, `branch_contact_no`, `branch_email`) VALUES
(1, 'Dumuriya', 'Mizanur Rahman', 'Dumuriya Bazar', '01326457895', 'd@dmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `centers`
--

CREATE TABLE `centers` (
  `center_id` int(11) NOT NULL,
  `center_name` varchar(20) NOT NULL,
  `center_president` varchar(25) NOT NULL,
  `center_address` varchar(50) NOT NULL,
  `center_contact_no` varchar(15) NOT NULL,
  `center_email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `centers`
--

INSERT INTO `centers` (`center_id`, `center_name`, `center_president`, `center_address`, `center_contact_no`, `center_email`) VALUES
(1, 'Savar', 'Mizan', 'savar', '9', 'd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_us_id` int(11) NOT NULL,
  `contact_us_name` varchar(25) NOT NULL,
  `contact_us_email` varchar(25) NOT NULL,
  `contact_us_company` varchar(30) NOT NULL,
  `contact_us_website` varchar(25) NOT NULL,
  `contact_us_message` text NOT NULL,
  `contact_us_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dashboards`
--

CREATE TABLE `dashboards` (
  `id` int(11) NOT NULL,
  `dashboard` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dealers`
--

CREATE TABLE `dealers` (
  `dealer_id` int(11) NOT NULL,
  `dealer_name` varchar(30) NOT NULL,
  `dealer_mobile` varchar(15) NOT NULL,
  `dealer_telephone` varchar(15) NOT NULL,
  `dealer_email` varchar(25) NOT NULL,
  `dealer_website` varchar(25) NOT NULL,
  `dealer_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deposite`
--

CREATE TABLE `deposite` (
  `id` int(11) NOT NULL,
  `account_no` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `tracking_no` varchar(100) NOT NULL,
  `ammount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deposite`
--

INSERT INTO `deposite` (`id`, `account_no`, `date`, `tracking_no`, `ammount`) VALUES
(1, '567686', '2016-08-02', '56876978056', '345456'),
(2, '54678785656', '2016-06-06', '3565787', '343546');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `division_id` int(11) NOT NULL,
  `division_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `document_id` int(11) NOT NULL,
  `document_name` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `document_types`
--

CREATE TABLE `document_types` (
  `document_id` int(11) NOT NULL,
  `document_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'm', 'm', 'm', '2016-07-20', 'm', '22', 'sdfsdf', 'fdfdf', 'dfdfd', '2016-07-30', 'dfdf', 556, 'dfd'),
(2, 'Sena', 'Ali khan', 'sdf', '0000-00-00', 'Male', '76898089', 'asmaumaiya@gmail.com', '568799', 'ddfgfh', '0000-00-00', 'Manager', 29000, 'img/employee/picture.jpg'),
(3, 'Sena', 'Ali khan', 'sdf', '0000-00-00', 'Male', '76898089', 'asmaumaiya@gmail.com', '568799', 'ddfgfh', '0000-00-00', 'Manager', 29000, 'img/employee/picture.jpg'),
(4, 'ere', 'errete', 'wertwet', '1990-09-09', 'Male', '5686787978', 'asmaumaiya@gmail.com', '567878989', 'dsfrdg', '2016-09-09', 'Manager', 30000, 'img/employee/picture.jpg'),
(5, 'fghfg', 'fghfgh', 'gfhfgh', '1988-09-09', 'Female', '5678787980', 'aspi87@yahoo.com', '567879879980', 'vcbvbnb', '2016-09-09', 'fvbfb', 565878, 'img/employee/bridal-hijab-styles-8.jpg'),
(6, '', '', 'Malisah', '2016-08-03', 'male', '1231214234', 'asd@gmail.com', '234354657', 'Khulshi', '2016-08-01', 'Staff', 15000, 'img/employee/business_woman_FINAL.jpg');

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
(1, 0, 'jan', 2015, 5000, '2016-07-30 10:29:00'),
(2, 0, '12', 31, 20000, '2014-09-09 00:00:00'),
(3, 0, 'June', 2015, 15000, '2016-08-03 00:00:00'),
(4, 0, '31', 31, 10000, '2016-08-09 00:00:00'),
(5, 0, '31', 44, 10000, '2014-09-09 00:00:00'),
(6, 0, 'january', 2016, 324, '2016-08-09 00:00:00'),
(7, 0, 'February', 2016, 34000, '2016-08-03 06:51:36'),
(8, 0, 'janu', 2020, 5555555, '2016-08-12 00:00:00'),
(9, 0, 'january', 2013, 0, '2016-08-06 12:04:52'),
(10, 0, 'February', 2013, 0, '2016-08-06 12:13:47');

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `gender_id` int(11) NOT NULL,
  `gender_type` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guarantors`
--

CREATE TABLE `guarantors` (
  `guarantor_id` int(11) NOT NULL,
  `guarantor_name` varchar(25) NOT NULL,
  `guarantor_fathers_name` varchar(25) NOT NULL,
  `guarantor_mothers_name` varchar(25) NOT NULL,
  `guarantor_birth_date` date NOT NULL,
  `guarantor_relation` varchar(12) NOT NULL,
  `document_type` varchar(12) NOT NULL,
  `document_number` int(20) NOT NULL,
  `guarantor_photo_path` varchar(50) NOT NULL,
  `guarantor_signature_path` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guarantors`
--

INSERT INTO `guarantors` (`guarantor_id`, `guarantor_name`, `guarantor_fathers_name`, `guarantor_mothers_name`, `guarantor_birth_date`, `guarantor_relation`, `document_type`, `document_number`, `guarantor_photo_path`, `guarantor_signature_path`) VALUES
(1, 'm', 'm', 'm', '2016-07-30', 'm', 'm', 6, 'm', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `installment`
--

CREATE TABLE `installment` (
  `id` int(11) NOT NULL,
  `account_no` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `loan_amount` varchar(100) NOT NULL,
  `payable_amount` varchar(100) NOT NULL,
  `installment_amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `installment`
--

INSERT INTO `installment` (`id`, `account_no`, `name`, `start_date`, `end_date`, `loan_amount`, `payable_amount`, `installment_amount`) VALUES
(1, '12345', 'sdc', '2016-08-18', '2016-08-02', '23424', '34534', '2344'),
(4, '6587678', 'hythy', '2016-08-03', '2016-08-31', '65765', '5665', '122'),
(5, '34234535', 'mamun', '2016-08-25', '2016-08-28', '415454', '121345', '445'),
(6, '45464565', 'fghfhg', '2016-08-03', '2016-08-18', '5675765', '3243', '34'),
(7, '5555', 'Safa', '2016-08-03', '2016-08-31', '4534537', '4353454', '35345435'),
(8, '909099', 'Waseq', '2016-08-01', '2016-08-31', '80000', '50000', '15'),
(9, '90909', 'Waseq', '2016-08-03', '2016-08-31', '800000', '50000', '15'),
(10, '55550', 'Imon', '2016-08-02', '2016-08-10', '90000', '80000', '12'),
(11, '90009', 'Walid', '2016-08-04', '2016-08-31', '90000', '50000', '12'),
(12, '77770', 'Mira', '2016-08-01', '2016-08-22', '40000', '10000', '12');

-- --------------------------------------------------------

--
-- Table structure for table `installment_deposite`
--

CREATE TABLE `installment_deposite` (
  `id` int(11) NOT NULL,
  `account_no` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `traking_no` int(11) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `installment_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `installment_deposite`
--

INSERT INTO `installment_deposite` (`id`, `account_no`, `date`, `traking_no`, `amount`, `installment_no`) VALUES
(1, '123555', '2016-08-03', 555, '400000', '16');

-- --------------------------------------------------------

--
-- Table structure for table `installment_type`
--

CREATE TABLE `installment_type` (
  `installment_type_id` int(11) NOT NULL,
  `installment_type_name` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `loan_id` int(11) NOT NULL,
  `account_holder_name` varchar(25) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `loan_ammount` int(11) NOT NULL,
  `loan_duration_type` varchar(10) NOT NULL,
  `guarantor_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`loan_id`, `account_holder_name`, `product_name`, `loan_ammount`, `loan_duration_type`, `guarantor_name`) VALUES
(0, 'sds', 'dsds', 252, '12', '');

-- --------------------------------------------------------

--
-- Table structure for table `loan_duration`
--

CREATE TABLE `loan_duration` (
  `loan_duration_id` int(11) NOT NULL,
  `loan_duration_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_duration`
--

INSERT INTO `loan_duration` (`loan_duration_id`, `loan_duration_type`) VALUES
(1, '12 month');

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE `months` (
  `month_id` int(11) NOT NULL,
  `month_name` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `new_loan`
--

CREATE TABLE `new_loan` (
  `newloan_id` int(11) NOT NULL,
  `account_no` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `loan_amount` varchar(50) NOT NULL,
  `installment` varchar(50) NOT NULL,
  `grantors` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_loan`
--

INSERT INTO `new_loan` (`newloan_id`, `account_no`, `date`, `loan_amount`, `installment`, `grantors`) VALUES
(1, '', '2016-08-04', '', '20', 'Wasrer');

-- --------------------------------------------------------

--
-- Table structure for table `nominees`
--

CREATE TABLE `nominees` (
  `nominee_id` int(11) NOT NULL,
  `nominee_name` varchar(25) NOT NULL,
  `nominee_fathers_name` varchar(25) NOT NULL,
  `nominee_mothers_name` varchar(25) NOT NULL,
  `nominee_birth_date` date NOT NULL,
  `nominee_relation` varchar(12) NOT NULL,
  `document_type` varchar(12) NOT NULL,
  `document_number` int(20) NOT NULL,
  `nominee_photo_path` varchar(50) NOT NULL,
  `nominee_signature_path` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nominees`
--

INSERT INTO `nominees` (`nominee_id`, `nominee_name`, `nominee_fathers_name`, `nominee_mothers_name`, `nominee_birth_date`, `nominee_relation`, `document_type`, `document_number`, `nominee_photo_path`, `nominee_signature_path`) VALUES
(1, 'm', 'm', 'm', '2016-07-30', 'm', 'm', 3, 'm', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `office_intime`
--

CREATE TABLE `office_intime` (
  `office_intime_id` int(11) NOT NULL,
  `office_intime_date` date NOT NULL,
  `office_intime_time` time NOT NULL,
  `employee_id` int(11) NOT NULL,
  `employee_password` int(11) NOT NULL,
  `office_intime_sms` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `office_outtime`
--

CREATE TABLE `office_outtime` (
  `office_outtime_id` int(11) NOT NULL,
  `office_outtime_date` date NOT NULL,
  `office_outtime_time` time NOT NULL,
  `employee_id` int(11) NOT NULL,
  `employee_password` int(11) NOT NULL,
  `office_outtime_sms` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_buy`
--

CREATE TABLE `product_buy` (
  `product_buy_id` int(11) NOT NULL,
  `product_buy_date` date NOT NULL,
  `memo_number` varchar(10) NOT NULL,
  `dealer_name` varchar(25) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_per_piece_ammount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_buy`
--

INSERT INTO `product_buy` (`product_buy_id`, `product_buy_date`, `memo_number`, `dealer_name`, `product_id`, `product_quantity`, `product_per_piece_ammount`) VALUES
(1, '2016-07-30', 'ddd', 'sds', 0, 55, 20);

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_details` text NOT NULL,
  `product_buy_ammount` int(11) NOT NULL,
  `product_sale_ammount` int(11) NOT NULL,
  `product_photopath` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id`, `product_name`, `product_details`, `product_buy_ammount`, `product_sale_ammount`, `product_photopath`) VALUES
(1, 'dd', 'dd', 5656, 5568, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `subscriber_id` int(11) NOT NULL,
  `subscriber_email` varchar(25) NOT NULL,
  `subscriber_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`subscriber_id`, `subscriber_email`, `subscriber_date`) VALUES
(1, 'dfsdfsd', '2016-07-29 01:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`) VALUES
(1, 'mahabub'),
(2, 'kjdfkj');

-- --------------------------------------------------------

--
-- Table structure for table `thana_upazila`
--

CREATE TABLE `thana_upazila` (
  `thana_id` int(11) NOT NULL,
  `thana_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `union_postoffice`
--

CREATE TABLE `union_postoffice` (
  `union_id` int(11) NOT NULL,
  `union_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(25) NOT NULL,
  `user_username` varchar(20) NOT NULL,
  `user_email` varchar(25) NOT NULL,
  `user_password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fullname`, `user_username`, `user_email`, `user_password`) VALUES
(1, 'Mahabubur Rahman', 'mcsl', 'mcsl@gmail.com', '07a37091e610be76efa5172d9e96bf11');

-- --------------------------------------------------------

--
-- Table structure for table `verifiers`
--

CREATE TABLE `verifiers` (
  `verifier_id` int(11) NOT NULL,
  `verifier_name` varchar(25) NOT NULL,
  `account_number` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `verifiers`
--

INSERT INTO `verifiers` (`verifier_id`, `verifier_name`, `account_number`) VALUES
(1, 'm', 6542);

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `year_id` int(11) NOT NULL,
  `year_name` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_holders`
--
ALTER TABLE `account_holders`
  ADD PRIMARY KEY (`account_holder_id`);

--
-- Indexes for table `account_types`
--
ALTER TABLE `account_types`
  ADD PRIMARY KEY (`account_type_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `branchs`
--
ALTER TABLE `branchs`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `centers`
--
ALTER TABLE `centers`
  ADD PRIMARY KEY (`center_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `dashboards`
--
ALTER TABLE `dashboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dealers`
--
ALTER TABLE `dealers`
  ADD PRIMARY KEY (`dealer_id`);

--
-- Indexes for table `deposite`
--
ALTER TABLE `deposite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`division_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`document_id`);

--
-- Indexes for table `document_types`
--
ALTER TABLE `document_types`
  ADD PRIMARY KEY (`document_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `employee_salary`
--
ALTER TABLE `employee_salary`
  ADD PRIMARY KEY (`salary_id`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `guarantors`
--
ALTER TABLE `guarantors`
  ADD PRIMARY KEY (`guarantor_id`);

--
-- Indexes for table `installment`
--
ALTER TABLE `installment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `installment_deposite`
--
ALTER TABLE `installment_deposite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `installment_type`
--
ALTER TABLE `installment_type`
  ADD PRIMARY KEY (`installment_type_id`);

--
-- Indexes for table `loan_duration`
--
ALTER TABLE `loan_duration`
  ADD PRIMARY KEY (`loan_duration_id`);

--
-- Indexes for table `months`
--
ALTER TABLE `months`
  ADD PRIMARY KEY (`month_id`);

--
-- Indexes for table `new_loan`
--
ALTER TABLE `new_loan`
  ADD PRIMARY KEY (`newloan_id`);

--
-- Indexes for table `nominees`
--
ALTER TABLE `nominees`
  ADD PRIMARY KEY (`nominee_id`);

--
-- Indexes for table `office_intime`
--
ALTER TABLE `office_intime`
  ADD PRIMARY KEY (`office_intime_id`);

--
-- Indexes for table `office_outtime`
--
ALTER TABLE `office_outtime`
  ADD PRIMARY KEY (`office_outtime_id`);

--
-- Indexes for table `product_buy`
--
ALTER TABLE `product_buy`
  ADD PRIMARY KEY (`product_buy_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`subscriber_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thana_upazila`
--
ALTER TABLE `thana_upazila`
  ADD PRIMARY KEY (`thana_id`);

--
-- Indexes for table `union_postoffice`
--
ALTER TABLE `union_postoffice`
  ADD PRIMARY KEY (`union_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `verifiers`
--
ALTER TABLE `verifiers`
  ADD PRIMARY KEY (`verifier_id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`year_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_holders`
--
ALTER TABLE `account_holders`
  MODIFY `account_holder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11129;
--
-- AUTO_INCREMENT for table `account_types`
--
ALTER TABLE `account_types`
  MODIFY `account_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `branchs`
--
ALTER TABLE `branchs`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `centers`
--
ALTER TABLE `centers`
  MODIFY `center_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_us_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dashboards`
--
ALTER TABLE `dashboards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dealers`
--
ALTER TABLE `dealers`
  MODIFY `dealer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `deposite`
--
ALTER TABLE `deposite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `division_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `document_types`
--
ALTER TABLE `document_types`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `employee_salary`
--
ALTER TABLE `employee_salary`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `gender_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `guarantors`
--
ALTER TABLE `guarantors`
  MODIFY `guarantor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `installment`
--
ALTER TABLE `installment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `installment_deposite`
--
ALTER TABLE `installment_deposite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `installment_type`
--
ALTER TABLE `installment_type`
  MODIFY `installment_type_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loan_duration`
--
ALTER TABLE `loan_duration`
  MODIFY `loan_duration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `months`
--
ALTER TABLE `months`
  MODIFY `month_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `new_loan`
--
ALTER TABLE `new_loan`
  MODIFY `newloan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nominees`
--
ALTER TABLE `nominees`
  MODIFY `nominee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `office_intime`
--
ALTER TABLE `office_intime`
  MODIFY `office_intime_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `office_outtime`
--
ALTER TABLE `office_outtime`
  MODIFY `office_outtime_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_buy`
--
ALTER TABLE `product_buy`
  MODIFY `product_buy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `subscriber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `thana_upazila`
--
ALTER TABLE `thana_upazila`
  MODIFY `thana_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `union_postoffice`
--
ALTER TABLE `union_postoffice`
  MODIFY `union_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `verifiers`
--
ALTER TABLE `verifiers`
  MODIFY `verifier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `year_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
