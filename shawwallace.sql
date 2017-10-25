-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2014 at 04:34 AM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shawwallace`
--

-- --------------------------------------------------------

--
-- Table structure for table `pcategory_tb`
--

CREATE TABLE IF NOT EXISTS `pcategory_tb` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pcategory` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pcategory_tb`
--

INSERT INTO `pcategory_tb` (`id`, `pcategory`) VALUES
(1, 'AUTOMOTIVE'),
(2, 'FOOD SERVICE'),
(3, 'FMCG - Food'),
(4, 'FMCG - Personal Care'),
(5, 'MANUFACTURING'),
(6, 'PROPERTY DEVELOPMENT');

-- --------------------------------------------------------

--
-- Table structure for table `product_tb`
--

CREATE TABLE IF NOT EXISTS `product_tb` (
  `pid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product` text,
  `p_des` text,
  `id` int(11) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1032 ;

--
-- Dumping data for table `product_tb`
--

INSERT INTO `product_tb` (`pid`, `product`, `p_des`, `id`) VALUES
(1001, 'Delphi Rubber', NULL, 1),
(1002, 'Dunlop', NULL, 1),
(1003, 'Dunlop', NULL, 1),
(1004, 'Grip', NULL, 1),
(1005, 'Lockheed', NULL, 1),
(1006, 'Pioneer', NULL, 1),
(1007, 'Aji No Moto', NULL, 3),
(1008, 'Angler', NULL, 3),
(1009, 'Captain', NULL, 3),
(1010, 'Plaza', NULL, 3),
(1011, 'Rainer''s', NULL, 3),
(1012, 'Ranposha', NULL, 3),
(1013, 'Renuka', NULL, 3),
(1014, 'Sun Gold', NULL, 3),
(1015, 'Aladin', NULL, 4),
(1016, 'Homerun Pas', NULL, 4),
(1017, 'Milk White', NULL, 4),
(1018, 'Ranwan Venivel', NULL, 4),
(1019, 'Sun flower', NULL, 4),
(1020, 'Supermax', NULL, 4),
(1021, 'Aji No Moto', NULL, 2),
(1022, 'Captain', NULL, 2),
(1023, 'Golden Dragon', NULL, 2),
(1024, 'Plaza', NULL, 2),
(1025, 'Rainer''s', NULL, 2),
(1026, 'Renuka', NULL, 2),
(1027, 'Rooster', NULL, 2),
(1028, 'Selecta', NULL, 2),
(1029, 'Sun Flower', NULL, 2),
(1030, 'Sun Gold', NULL, 2),
(1031, 'Tangana', NULL, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
