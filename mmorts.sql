-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 10, 2019 at 11:00 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmorts`
--

-- --------------------------------------------------------

--
-- Table structure for table `army`
--

DROP TABLE IF EXISTS `army`;
CREATE TABLE IF NOT EXISTS `army` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `position_x` int(255) DEFAULT NULL,
  `position_y` int(255) DEFAULT NULL,
  `city_id` int(255) DEFAULT NULL,
  `spearman` int(255) DEFAULT NULL,
  `swordsmen` int(255) DEFAULT NULL,
  `archers` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL DEFAULT '0',
  `name` varchar(20) DEFAULT NULL,
  `resources_id` int(255) DEFAULT NULL,
  `buildings_id` int(255) DEFAULT NULL,
  `production_id` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `user_id`, `name`, `resources_id`, `buildings_id`, `production_id`) VALUES
(1, 20, 'istanbul', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

DROP TABLE IF EXISTS `configuration`;
CREATE TABLE IF NOT EXISTS `configuration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `seperator` varchar(3) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `maintenance` tinyint(1) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `configuration`
--

INSERT INTO `configuration` (`id`, `name`, `seperator`, `description`, `maintenance`, `logo`) VALUES
(1, 'MMORTS', ' - ', 'MMORTS game', 0, 'Cathedral_Knight_Greatsword.png');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nickname` int(20) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

DROP TABLE IF EXISTS `resources`;
CREATE TABLE IF NOT EXISTS `resources` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) DEFAULT NULL,
  `city_id` int(255) DEFAULT NULL,
  `planks` int(255) DEFAULT NULL,
  `ore` int(255) DEFAULT NULL,
  `clay` int(255) DEFAULT NULL,
  `food` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `user_id`, `city_id`, `planks`, `ore`, `clay`, `food`) VALUES
(1, 20, 1, 100, 100, 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `terrain_types`
--

DROP TABLE IF EXISTS `terrain_types`;
CREATE TABLE IF NOT EXISTS `terrain_types` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `type` int(255) DEFAULT NULL,
  `terrain` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

DROP TABLE IF EXISTS `units`;
CREATE TABLE IF NOT EXISTS `units` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `unit_name` varchar(50) DEFAULT NULL,
  `attack_value` int(255) DEFAULT NULL,
  `defence_value` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) DEFAULT NULL,
  `password` longtext,
  `email` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(20, 'Alpacino', '9e2a629541fc932e5ebebd39f88441a5', 'alpi1997@hotmail.com'),
(21, 'asdasd', '$2y$10$6LNy0O/QPzB5YAgTFdKjKOf.kW9XmxDg0TQH0GaPPf8PoFMxvrJ/i', 'test@test.test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
