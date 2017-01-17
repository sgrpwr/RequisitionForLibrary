-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2015 at 09:55 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sspl_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE IF NOT EXISTS `admin_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `admin_ic` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `fname`, `lname`, `admin_ic`, `password`) VALUES
(1, 'sagar', 'sam', '1234', 'sagar');

-- --------------------------------------------------------

--
-- Table structure for table `backup_sspl`
--

CREATE TABLE IF NOT EXISTS `backup_sspl` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `book_title` varchar(100) NOT NULL,
  `user_ic` varchar(255) NOT NULL,
  `book_year` varchar(30) NOT NULL,
  `book_author` varchar(100) NOT NULL,
  `book_cost` varchar(30) NOT NULL,
  `book_publisher` varchar(100) NOT NULL,
  `book_media` varchar(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `backup_sspl`
--

INSERT INTO `backup_sspl` (`id`, `book_title`, `user_ic`, `book_year`, `book_author`, `book_cost`, `book_publisher`, `book_media`, `user_name`) VALUES
(7, 'REVOLUTION 2020 (LOVE.CORRUPTION.AMBITION)', '6', '2011', 'CHETAN BHAGAT', '140.00', 'RUPA PUBLICATIONS INDIA ', 'print', 'dhajji'),
(9, 'ONE NIGHT AT THE CALL CENTER', '1', '2008', 'CHETAN BHAGAT', '140.00', 'RUPA PUBLICATIONS INDIA ', 'Print', 'sagar'),
(11, 'All Eyes on Her', '1', '2011', 'Poonam Sharma', '140.00', 'RUPA PUBLICATIONS INDIA ', 'print', 'sagar');

-- --------------------------------------------------------

--
-- Table structure for table `book_table`
--

CREATE TABLE IF NOT EXISTS `book_table` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `book_title` varchar(100) NOT NULL,
  `user_ic` varchar(255) DEFAULT NULL,
  `book_year` varchar(30) NOT NULL,
  `book_author` varchar(50) NOT NULL,
  `book_cost` varchar(30) NOT NULL,
  `book_publisher` varchar(50) NOT NULL,
  `book_media` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_ic` (`user_ic`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `book_table`
--

INSERT INTO `book_table` (`id`, `book_title`, `user_ic`, `book_year`, `book_author`, `book_cost`, `book_publisher`, `book_media`, `user_name`) VALUES
(5, 'THE FAULT IN OUR STARS', '8', '2012', 'JHON GREEN', '399.00', 'PENGUIN BOOKS', 'print', 'asha'),
(6, 'All Eyes on Her', '7', '2008', 'Poonam Sharma', '225.00', 'MIRA', 'p', 'kittu'),
(8, 'SHE BROKE UP I DIDNT! i just Kissed Someone Else!', '1', '2010', 'Durjoy Dutta', 'Rs 680', 'Grapevin India Publishers', 'Print', 'sagar'),
(10, 'THE 3 MISTAKES OF MY LIFE', '3', '2009', 'CHETAN BHAGAT', '140.00', 'RUPA PUBLICATIONS INDIA ', 'print', 'pooja'),
(14, '.NET 4.5 PROGRAMMING 6-IN-1, BLACK BOOK (BLACK BOOK series)', '1', '2010', 'KOGENT LEARNING SOLUTIONS INC.', 'Rs.270', 'RUPA PUBLICATIONS INDIA ', 'Print', 'sagar'),
(15, '100 Shell Programs in Unix', '1', '2015', 'Sarika Jain, Shivani Jain', 'Rs.100', 'RUPA PUBLICATIONS INDIA ', 'Print', 'sagar');

-- --------------------------------------------------------

--
-- Table structure for table `info_table`
--

CREATE TABLE IF NOT EXISTS `info_table` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `heading` varchar(1000) NOT NULL,
  `body` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `info_table`
--

INSERT INTO `info_table` (`id`, `heading`, `body`) VALUES
(1, 'The Director,\r\nSolid State Physics Laboratory (SSPL)\r\nDefence Research and Development Organization (DRDO)\r\nMinistry of Defence\r\nLucknow Road, Timarpur,\r\nDelhi - 110054\r\nIndia', 'The board of examiners will examine your project and give their comments on your work. You have to submit the final project with complete work by 30th June 2015 for report evaluation\r\nThe board of examiners will examine your project and give their comments on your work. You have to submit the final project with complete work by 30th June 2015 for report evaluation\r\nThe board of examiners will examine your project and give their comments on your work. You have to submit the final project with complete work by 30th June 2015 for report evaluation\r\nThe board of examiners will examine your project and give their comments on your work. You have to submit the final project with complete work by 30th June 2015 for report evaluation');

-- --------------------------------------------------------

--
-- Table structure for table `sspl_table`
--

CREATE TABLE IF NOT EXISTS `sspl_table` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_ic` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_pass` varchar(30) NOT NULL,
  `user_desi` varchar(40) NOT NULL,
  `user_group` varchar(40) NOT NULL,
  PRIMARY KEY (`id`,`user_ic`),
  KEY `user_ic` (`user_ic`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `sspl_table`
--

INSERT INTO `sspl_table` (`id`, `user_ic`, `user_name`, `user_pass`, `user_desi`, `user_group`) VALUES
(17, '1', 'sagar', 'sagar', 'scientist h', 'TIRC'),
(18, '2', 'neha', 'neha', 'abc', 'abc'),
(19, '3', 'pooja', 'pooja', 'abc', 'abc'),
(20, '4', 'heena', 'heena', 'abc', 'abc'),
(21, '5', 'sachin', 'sachin', 'g', 'mems'),
(22, '6', 'dhajji', 'sagar', 'abc', 'abc'),
(23, '7', 'kittu', 'sagar', 'abc', 'abc'),
(24, '8', 'asha', 'sagar', 'abc', 'abc');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_table`
--
ALTER TABLE `book_table`
  ADD CONSTRAINT `book_table_ibfk_1` FOREIGN KEY (`user_ic`) REFERENCES `sspl_table` (`user_ic`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
