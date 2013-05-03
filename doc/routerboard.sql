-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2013 at 04:13 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `routerboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

DROP TABLE IF EXISTS `group`;
CREATE TABLE IF NOT EXISTS `group` (
  `group_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(25) NOT NULL,
  `deleted` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`group_id`, `group_name`, `deleted`) VALUES
(1, 'Integrated solutions', 0),
(2, 'RouterBOARD', 0),
(3, 'Enclosures', 0),
(4, 'Interfaces', 0),
(5, 'Accessories', 0),
(6, 'Product archive', 0);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `image_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `url` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `deleted` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`image_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`image_id`, `product_id`, `url`, `position`, `deleted`) VALUES
(1, 1, 'c18.png', -240, 0),
(2, 2, 'c17.png', -320, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  `info` varchar(255) NOT NULL,
  `deleted` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`product_id`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `code`, `name`, `description`, `price`, `group_id`, `info`, `deleted`) VALUES
(1, 'RBSEXTANTG5HPnD', 'SEXTANT G 5HPnD', 'The SEXTANT is a 18dBi 5GHz antenna with a built in RB911G router. It has two polarizations to give you all benefits of 2x2 MIMO in 802.11n. \r\n\r\nInside is the high power RB911 dual chain wireless device, with high performance, high output power, and a Gigabit Ethernet port, to fully \r\nutilize the benefit of 802.11n high speed wireless. \r\n\r\nEasy to use and quick to deploy, SEXTANT is ideal for point to point links. \r\n\r\nPackage contains SEXTANTG5PHnD, mounting kit, PoE injector, power adapter', '110.00', 1, '18dBi dual pol', 0),
(2, 'RB260GS', 'RB260GS', 'The RB260GS is a small SOHO switch. It has five Gigabit Ethernet ports and one SFP cage powered by an Atheros Switch Chip. \r\n\r\nTested and recommended to use with MikroTik SFP modules: S-85DLC05D, S-31DLC20D and S-35/53LC20D (not included) \r\n\r\nIt is powered by an operating system designed specifically for MikroTik Switch products - SwOS. \r\n\r\nSwOS is configurable from your web browser. It gives you all the basic functionality for a managed switch, plus more: Allows to manage port-to-port forwarding, apply MAC filter, configure \r\nVLANs, mirror traffic, apply bandwidth limitation and even adjust some MAC and IP header fields.', '39.95', 1, 'Gigabit switch', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `deleted` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `group` (`group_id`);
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
