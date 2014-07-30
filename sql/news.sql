-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 30, 2014 at 08:56 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `date`) VALUES
(1, 'Barclays sees profits fall by 7%', '2014-06-17 16:00:00'),
(2, 'More than five-a-day ''no effect'' ', '2014-06-17 16:00:00'),
(3, 'Obama: Cost to Russia will grow', '2014-07-29 16:00:00'),
(4, 'Putin can make difference', '0000-00-00 00:00:00'),
(5, 'Khmer Rouge duo begin genocide trial', '0000-00-00 00:00:00'),
(6, 'Last Hiroshima bomb crewman dies', '0000-00-00 00:00:00'),
(7, 'Amazon pledges $2bn India investment ', '2014-07-10 08:35:16'),
(8, 'Ten convicted for India school fire ', '2014-07-16 23:38:13'),
(9, 'China media: Zhou Yongkang ', '2014-07-18 01:17:50'),
(10, 'Community steak ', '2014-07-18 01:17:50'),
(11, 'How faces drive first impressions ', '2014-07-18 01:17:50'),
(12, 'MPs bicker over climate report', '2014-07-18 01:17:50'),
(13, 'Twitter shares surge on user growth ', '2014-07-18 01:17:50'),
(14, 'Japan output falls most since 2011 ', '2014-07-18 01:17:50'),
(15, 'Sleep sensor smashes Kickstarter goal ', '2014-07-18 01:17:50');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
