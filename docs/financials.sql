-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2014 at 01:43 PM
-- Server version: 5.5.29
-- PHP Version: 5.3.10-1ubuntu3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `financials`
--

-- --------------------------------------------------------

--
-- Table structure for table `web_user`
--

CREATE TABLE IF NOT EXISTS `web_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `phone_1` varchar(45) DEFAULT NULL,
  `phone_2` varchar(45) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `picture_file_name` varchar(45) DEFAULT NULL,
  `d_create` datetime NOT NULL,
  `d_update` datetime DEFAULT NULL,
  `d_delete` datetime DEFAULT NULL,
  `u_create` int(10) unsigned NOT NULL,
  `u_update` int(10) unsigned DEFAULT NULL,
  `u_delete` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `web_user`
--

INSERT INTO `web_user` (`id`, `login`, `password`, `last_name`, `first_name`, `phone_1`, `phone_2`, `email`, `picture_file_name`, `d_create`, `d_update`, `d_delete`, `u_create`, `u_update`, `u_delete`) VALUES
(1, 'HERREMANS', '496c5f9cacceb85046f3847252eed9ad21982bf4', 'HERMANNS', 'RALPH', '', '', 'mail@example.com', NULL, '2013-07-08 00:00:00', '2013-11-08 13:30:27', NULL, 1, 2, NULL),
(2, 'admin', '70241fd140b0987ad115b29c6d5587bf060c7e26', 'DEMOLIN', 'OLIVIER', '', '', 'mail@example.com', NULL, '2013-07-12 13:35:04', '2013-11-19 11:18:48', NULL, 1, 2, NULL),
(3, 'demo', 'e6938a3f2a62e7924d3424b7ddbf2a6ed188f37e', 'Doe', 'John', '', '', 'mail@example.com', NULL, '2013-07-26 11:59:15', '2013-08-08 09:37:21', '2013-11-08 13:29:11', 1, 3, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
