-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2021 at 09:45 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `assessment`
--

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

CREATE TABLE IF NOT EXISTS `logintb` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`username`, `password`) VALUES
('admin', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `onlinetbl`
--

CREATE TABLE IF NOT EXISTS `onlinetbl` (
  `OrderNum` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `totalAmount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onlinetbl`
--

INSERT INTO `onlinetbl` (`OrderNum`, `firstname`, `lastname`, `email`, `contact`, `gender`, `date`, `description`, `totalAmount`) VALUES
('02589', 'Nyikiwe', 'Malubane', 'nwamalubane.nyikiwe@gmail.com', '060142589', 'Male', '02/0/2010', 'lenovo laptop', '6000'),
('02154', 'lolo', 'nkuna', 'nkuna@mail.com', '025698', 'Male', '01/06/2014', 'acer laptop', '6000'),
('258968', 'lucky', 'mkhonto', 'lucky@mail.om', '0715114767', 'Female', '01/02/2012', 'hp laptop', '5600'),
('22365', 'avi', 'mam', 'mam@mail.com', '0236588987', 'Female', '01/02/2021', 'acer laptop', '6000');

-- --------------------------------------------------------

--
-- Table structure for table `ordertbl`
--

CREATE TABLE IF NOT EXISTS `ordertbl` (
  `OrderNum` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surnmane` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `description` double NOT NULL,
  `totalAmount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemId` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Qty` varchar(50) NOT NULL,
  `cost` double NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `itemId`, `name`, `Qty`, `cost`, `total`) VALUES
(1, 11002, 'laptop', '3', 100, 300),
(3, 896, 'mouse toshiba', '3', 500, 1500),
(4, 2545, 'lenovo', '', 3000, 12000),
(8, 8569, 'acer Laptp', '5', 600, 12000),
(9, 265, 'mouse', '5', 600, 12000),
(10, 56325, 'leono', '1', 200, 500),
(11, 33256, 'acer Laptp', '3', 200, 400);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
