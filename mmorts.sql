-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 12, 2019 at 05:20 AM
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
-- Table structure for table `buildings`
--

DROP TABLE IF EXISTS `buildings`;
CREATE TABLE IF NOT EXISTS `buildings` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `city_id` int(255) DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `type` int(2) DEFAULT NULL,
  `level` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(1, 20, 'Istanbul', 1, NULL, NULL);

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
(1, 'Tic Tac Toe', ' - ', 'The Game', 0, 'Cathedral_Knight_Greatsword.png');

-- --------------------------------------------------------

--
-- Table structure for table `game_records`
--

DROP TABLE IF EXISTS `game_records`;
CREATE TABLE IF NOT EXISTS `game_records` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wins` int(255) NOT NULL DEFAULT '0',
  `games_played` int(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game_records`
--

INSERT INTO `game_records` (`id`, `wins`, `games_played`) VALUES
(22, 0, 2),
(29, 0, 25),
(30, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `production`
--

DROP TABLE IF EXISTS `production`;
CREATE TABLE IF NOT EXISTS `production` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `city_id` int(255) DEFAULT NULL,
  `wood_production` int(255) DEFAULT NULL,
  `ore_production` int(255) DEFAULT NULL,
  `clay_production` int(255) DEFAULT NULL,
  `food_production` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `production`
--

INSERT INTO `production` (`id`, `city_id`, `wood_production`, `ore_production`, `clay_production`, `food_production`) VALUES
(1, 1, 100, 100, 100, 100);

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
  `wood` int(255) DEFAULT NULL,
  `ore` int(255) DEFAULT NULL,
  `clay` int(255) DEFAULT NULL,
  `food` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `user_id`, `city_id`, `wood`, `ore`, `clay`, `food`) VALUES
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
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(22, 'Alpacino', '$2y$10$TUw0W1iWQwpcHpfSU/GH4uV.wDXba5eEZNYsdVwgHNt2Wir8FaoKW', 'alpi1997@hotmail.com'),
(30, 'mattymatt', '$2y$10$RG0Lye.9GIGI.M7iW.mgu.csMrJrnspdfcrX00uWIuAhozoQZzCDu', 'matthew@lenepveu.com'),
(29, 'Jezusgaming', '$2y$10$Zc3GV6OXWuC/dtXoJmSATu.q4VOYGfizvCqV8AhdJTSgJqMXDJ1pe', 'test@test.test'),
(31, 'rtg', '$2y$10$n/DDrXMxAcvAHXDw.HZjdu7R8WWtNLQ8YR0qvdCbiu4g3p4Y3sKr.', 'test@test.test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
