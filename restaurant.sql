-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2014 at 05:15 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `image_filename` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `description`, `image_filename`, `category`) VALUES
(34, 'The 96''er', '6 amazing pounds of pure peanut butter, fed to you like a baby bird by a certified ornithologist', 'image546ccb5549cb3.jpg', 'entree'),
(23, 'Mediterranean Salad', 'Just another pile of leafy greens', 'image546c45f853f9c.jpg', 'salad'),
(24, 'Bloody Mary', 'Probably the most delicious blend of tomatoes and alcohol you can imagine.', 'image546c466be8d6c.jpg', 'libation'),
(25, 'New Belgium Fat Tire', 'A best amber ale you will ever drink. Seriously.', 'image546c46ce7d2e1.jpg', 'libation'),
(32, 'Hummus', 'Garlic hummus with pita bread', 'image546c4f6faa8d7.jpg', 'appetizer'),
(33, 'Le'' French Fries', 'Perfected crispness, yukon gold potatoes and hot cheese', 'image546cc9bed4680.jpg', 'appetizer'),
(30, 'Steak Tartare', 'Just a bunch of ground-up beef tips.', 'image546c4e60a5046.jpg', 'entree'),
(31, 'Creme Brulee', 'Mouth orgasm', 'image546c4f24a5f76.jpg', 'dessert'),
(22, 'Tuscan Salad', 'A delicious blend of leaves and other unidentifiable stuff', 'image546c4559331f6.jpg', 'salad'),
(35, 'Schmancy Crepes', 'Crepes with too much sugar on them', 'image546ccbe743900.jpg', 'dessert'),
(36, 'Balsamic Chicken', 'A savory chicken with hella balsamic and rosemary', 'image546d0e6f5483f.jpg', 'entree');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Travis', 'Thurston', 'tthurston@jwu.edu', 'irie');
