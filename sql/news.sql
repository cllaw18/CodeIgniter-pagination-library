-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2014 at 01:36 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `paging`
--
CREATE DATABASE IF NOT EXISTS `paging` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `paging`;

-- --------------------------------------------------------

--
-- Table structure for table `wp_posts`
--

CREATE TABLE IF NOT EXISTS `wp_posts` (
  `id` int(11) DEFAULT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `post_title` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_posts`
--

INSERT INTO `wp_posts` (`id`, `post_date`, `post_title`) VALUES
(1, '2014-03-31 04:41:16', 'Title 1'),
(2, '2014-03-31 04:41:16', 'Title 2'),
(3, '2014-03-31 04:41:16', 'This is Title 3'),
(4, '2014-03-31 04:41:16', 'This is Title 4'),
(5, '2014-03-31 04:41:16', 'Title 5 !'),
(6, '2014-03-31 04:41:16', 'Title 6~'),
(7, '2014-03-31 04:41:16', 'And this is Title 7~'),
(8, '2014-03-31 04:41:16', 'This is Title 8'),
(9, '2014-03-31 04:41:16', ' Title 9'),
(10, '2014-03-31 04:41:16', ' Title 10'),
(11, '2014-03-31 04:41:16', 'Title 11'),
(12, '2014-03-31 04:41:16', 'Title 12'),
(13, '2014-03-31 04:41:16', 'This is Title 13'),
(14, '2014-03-31 04:41:16', 'This is Title 14'),
(15, '2014-03-31 04:41:16', 'Title 15 !'),
(16, '2014-03-31 04:41:16', 'Title 16~'),
(17, '2014-03-31 04:41:16', 'And this is Title 17~'),
(18, '2014-03-31 04:41:16', 'This is Title 18'),
(19, '2014-03-31 04:41:16', ' Title 19'),
(20, '2014-03-31 04:41:16', ' Title 20'),
(21, '2014-03-31 04:41:16', 'Title 21'),
(22, '2014-03-31 04:41:16', 'Title 22'),
(23, '2014-03-31 04:41:16', 'This is Title 23'),
(24, '2014-03-31 04:41:16', 'This is Title 24'),
(25, '2014-03-31 04:41:16', 'Title 25 !'),
(26, '2014-03-31 04:41:16', 'Title 26~'),
(27, '2014-03-31 04:41:16', 'And this is Title 27~'),
(28, '2014-03-31 04:41:16', 'This is Title 28'),
(29, '2014-03-31 04:41:16', ' Title 29'),
(30, '2014-03-31 04:41:16', ' Title 30');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
