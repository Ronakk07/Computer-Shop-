-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 06:11 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `callattemp`
--

CREATE TABLE `callattemp` (
  `Emp_Id` int(10) NOT NULL,
  `Customer_Number` varchar(10) NOT NULL,
  `Charges` int(20) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `callattemp`
--

INSERT INTO `callattemp` (`Emp_Id`, `Customer_Number`, `Charges`, `status`) VALUES
(1, '9545958364', 250, 'Solved'),
(1, '9545958364', 200, 'Unsolved'),
(1, '9545958364', 200, 'Unsolved'),
(1, '9545958364', 200, 'Unsolved');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `userName` varchar(12) NOT NULL,
  `Mobile_No` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Complaint` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`userName`, `Mobile_No`, `Address`, `Complaint`) VALUES
('rakesh', '9545958364', 'edf', 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `employeedetails`
--

CREATE TABLE `employeedetails` (
  `Emp_Id` int(10) NOT NULL,
  `Emp_Name` varchar(15) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Mobile_Number` varchar(10) NOT NULL,
  `Salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeedetails`
--

INSERT INTO `employeedetails` (`Emp_Id`, `Emp_Name`, `Email`, `Mobile_Number`, `Salary`) VALUES
(1, 'John', 'john@gmail.com', '7845682145', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`firstname`, `lastname`, `email`, `subject`, `message`) VALUES
('Rahul', 'Pawar', 'samit@gmail.com', 'Test', 'Hi Rakesh'),
('Rahul', 'Pawar', 'samit@gmail.com', 'R', 'R');

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE `username` (
  `userName` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `Mob_No` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`userName`, `pass`, `Mob_No`) VALUES
('admin', 'admin123', '8888888888'),
('rakesh', 'rakesh123', '9545958364');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
