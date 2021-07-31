-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 01, 2008 at 04:41 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exam_hall_allocation_system`
--
CREATE DATABASE IF NOT EXISTS `exam_hall_allocation_system` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `exam_hall_allocation_system`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `address`, `phno`, `email`, `password`) VALUES
(10, 'sushant gunjikar', 'belgaum', '7353659929', 'sushantgunjikar@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `no_of_stud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`no_of_stud`) VALUES
(10);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `pics` varchar(60) NOT NULL,
  `reg_no` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phno` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `hall_no` int(11) NOT NULL,
  PRIMARY KEY (`reg_no`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`pics`, `reg_no`, `name`, `address`, `phno`, `email`, `dob`, `sem`, `year`, `hall_no`) VALUES
('uploads/Penguins.jpg', '10', 'mayur', 'belgaum', '7353659929', 'mayur@gmail.com', '19997-11-21', '2', '2019', 1),
('uploads/Desert.jpg', '11', 'rohit', 'belgaum', '7353659929', 'rohit@gmail.com', '1997-11-21', '2', '2019', 1),
('uploads/Desert.jpg', '12', 'shweta', 'belgaum', '7353659929', 'shweta@gmail.com', '1997-11-21', '2', '2019', 1),
('uploads/Desert.jpg', '13', 'ashish', 'belgaum', '7353659929', 'ashish@gmail.com', '1997-11-21', '2', '2019', 1),
('uploads/Desert.jpg', '14', 'aishwarya', 'belgaum', '7353659929', 'aishwarya@gmail.com', '1997-11-21', '2', '2019', 2),
('uploads/Desert.jpg', '15', 'roshan', 'belgaum', '7353659929', 'roshan@gmail.com', '1997-11-21', '2', '2019', 2),
('uploads/Desert.jpg', '16', 'navin', 'belgaum', '7353659929', 'navin@gmail.com', '1997-11-21', '2', '2019', 2),
('uploads/Desert.jpg', '17', 'sarthak', 'belgaum', '7353659929', 'sarthak@gmail.com', '1997-11-21', '2', '2019', 2),
('uploads/Desert.jpg', '18', 'rutu', 'belgaum', '7353659929', 'rutu@gmail.com', '1997-11-21', '4', '2019', 1),
('uploads/Desert.jpg', '19', 'kiran', 'belgaum', '7353659929', 'kiran@gmail.com', '1997-11-21', '4', '2019', 1),
('uploads/Desert.jpg', '2', 'abhishek', 'belgaum', '7353659929', 'abhishek@gmail.com', '1997-11-21', '2', '2019', 3),
('uploads/Desert.jpg', '20', 'manoj', 'belgaum', '7353659929', 'manoj@gmail.com', '1997-11-21', '4', '2019', 1),
('uploads/Desert.jpg', '21', 'swapnali', 'belgaum', '7353659929', 'swapnali@gmail.com', '1997-11-21', '4', '2019', 2),
('uploads/Desert.jpg', '22', 'samir', 'belgaum', '7353659929', 'samit@gmail.com', '1997-11-21', '4', '2019', 2),
('uploads/Desert.jpg', '23', 'samrudhi', 'belgaum', '7353659929', 'samrudhi@gmail.com', '1997-11-21', '6', '2019', 1),
('uploads/Desert.jpg', '24', 'sachin', 'belgaum', '7353659929', 'sacnin@gmail.com', '1997-11-21', '6', '2019', 1),
('uploads/Desert.jpg', '25', 'vinay', 'belgaum', '7353659929', 'vinay@gmail.com', '1997-11-21', '6', '2019', 1),
('uploads/Chrysanthemum.jpg', '26', 'mayuresh', 'khanapur', '7353659929', 'mayuresh@gmail.com', '2008-01-01', '2', '2019', 3),
('uploads/Desert.jpg', '27', 'akshata', 'belgaum', '7353659929', 'akshata@gmail.com', '1997-11-21', '2', '2019', 3),
('uploads/Desert.jpg', '28', 'sushmita', 'belgaum', '7353659929', 'sushmita@gmail.com', '1997-11-21', '6', '2019', 1),
('uploads/Desert.jpg', '29', 'shaan', 'belgaum', '7353659929', 'shaan@gmail.com', '1997-11-21', '6', '2019', 2),
('uploads/Desert.jpg', '3', 'shrushti', 'belgaum', '7353659929', 'shrushti@gmail.com', '1997-11-21', '2', '2019', 3),
('uploads/Desert.jpg', '30', 'kavita', 'belgaum', '7353659929', 'kavita@gmail.com', '1997-11-21', '6', '2019', 2),
('uploads/Desert.jpg', '31', 'shekhar', 'belgaum', '7353659929', 'shekhar@gmail.com', '1997-11-21', '6', '2019', 2),
('uploads/Desert.jpg', '4', 'megha', 'belgaum', '7353659929', 'megha@gmail.com', '1997-11-21', '4', '2019', 2),
('uploads/Desert.jpg', '5', 'utkarsha', 'belgaum', '7353659929', 'utkarsha@gmail.com', '1997-11-21', '4', '2019', 3),
('uploads/Desert.jpg', '6', 'khushi', 'belgaum', '7353659929', 'khushi@gmail.com', '1997-11-21', '4', '2019', 3),
('uploads/Desert.jpg', '7', 'ashitosh', 'belgaum', '7353659929', 'ashitosh@gmail.com', '1997-11-21', '6', '2019', 2),
('uploads/Desert.jpg', '8', 'rohan', 'belgaum', '7353659929', 'rohan@gmail.com', '1997-11-21', '6', '2019', 3),
('uploads/Desert.jpg', '9', 'meghana', 'belgaum', '7353659929', 'meghana@gmail.com', '1997-11-21', '6', '2019', 3);

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE IF NOT EXISTS `student_reg` (
  `reg_no` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phno` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`reg_no`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
