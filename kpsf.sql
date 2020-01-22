-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 26, 2019 at 06:20 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kpsf`
--
CREATE DATABASE IF NOT EXISTS `kpsf` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kpsf`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `imagename` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `imagename`) VALUES
(1, 'Admin', 'admin', 'img/logo1.png');

-- --------------------------------------------------------

--
-- Table structure for table `allposts`
--

CREATE TABLE IF NOT EXISTS `allposts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) NOT NULL,
  `category` varchar(1000) DEFAULT NULL,
  `year` varchar(225) DEFAULT NULL,
  `comment` text,
  `author` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `allposts`
--

INSERT INTO `allposts` (`id`, `title`, `category`, `year`, `comment`, `author`, `date`, `time`) VALUES
(1, 'Hello guys, can anyone share me the recent edited school calendar?', NULL, NULL, NULL, 'ND/17/COM/FT/005', '2019-07-20', '10:15:41pm'),
(3, 'the new post', NULL, NULL, NULL, 'ND/17/COM/FT/360', '2019-08-01', '11:13:21am'),
(4, 'I need a *** to ***', NULL, NULL, NULL, 'ND/17/COM/FT/184', '2019-08-22', '04:53:20am');

-- --------------------------------------------------------

--
-- Table structure for table `commenttable`
--

CREATE TABLE IF NOT EXISTS `commenttable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(1000) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `postid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `commenttable`
--

INSERT INTO `commenttable` (`id`, `comment`, `author`, `date`, `time`, `postid`) VALUES
(1, 'Add me up on facebook with this user: Lovelogist, so that I can forward the image to you on facedbook?', 'ND/17/COM/FT/184', '2019-07-20', '10:18:03pm', 1),
(2, 'Oh! thanks a lot I will quickly add you up now so that I can share me the file', 'ND/17/COM/FT/005', '2019-07-20', '10:19:22pm', 1),
(3, 'OK', 'ND/17/COM/FT/360', '2019-08-01', '11:12:59am', 1),
(4, 'Thanks', 'ND/17/COM/FT/184', '2019-08-01', '11:13:58am', 3),
(5, 'what kind of post is this', 'ND/17/COM/FT/184', '2019-08-22', '04:41:45am', 3),
(6, 'Any girl *** to *** tonight, I need an *** to ***...!!!', 'ND/17/COM/FT/184', '2019-08-22', '04:58:14am', 4),
(7, 'What are you guys posting that is consisting of asterisks?', 'ND/17/COM/FT/111', '2019-08-22', '12:10:58pm', 4),
(8, 'You must be crazy', 'ND/17/COM/FT/747', '2019-08-26', '07:14:56am', 4),
(9, 'I said it again, you must be ***', 'ND/17/COM/FT/747', '2019-08-26', '07:17:28am', 4);

-- --------------------------------------------------------

--
-- Table structure for table `disabletable`
--

CREATE TABLE IF NOT EXISTS `disabletable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `othername` varchar(225) NOT NULL,
  `matric` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `imagename` varchar(225) NOT NULL,
  `studentid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `disabletable`
--

INSERT INTO `disabletable` (`id`, `firstname`, `lastname`, `othername`, `matric`, `password`, `imagename`, `studentid`) VALUES
(3, 'MUHAMMED', 'SULAIMON', 'OLUWATAMILOLA', 'ND/17/COM/FT/360', '07069259281', 'img/360passport_D4906370.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `othername` varchar(225) NOT NULL,
  `matric` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `imagename` varchar(255) DEFAULT NULL,
  `studentid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstname`, `lastname`, `othername`, `matric`, `password`, `imagename`, `studentid`) VALUES
(6, 'ABDULWASIU', 'ABDULGANIYU', '', 'ND/17/COM/FT/111', '07064898311', 'img/111.jpg', NULL),
(7, 'MOSHOOD', 'MURITALA', 'ABIOLA', 'ND/17/COM/FT/112', '08184864681', 'img/112.jpg', NULL),
(8, 'BOLA', 'LUKUMAN', 'ADEKUNLE', 'ND/17/COM/FT/113', '08188495610', 'img/113.jpg', NULL),
(9, 'ABIGEAL', 'OGUNWALE', 'OLUWAFUNMILAYO', 'ND/17/COM/FT/114', '08189719298', 'img/114.jpg', NULL),
(10, 'OLALEKAN', 'AKOMOLAFE', 'IDRIS', 'ND/17/COM/FT/115', '09035200231', 'img/115.jpg', NULL),
(11, 'ALEXANDRA', 'AGBARA', 'ORIYOMI', 'ND/17/COM/FT/358', '09091612269', 'img/358passport_D2474712.jpg', NULL),
(12, 'Awo', 'Awo', 'Awo', 'ND/17/COM/FT/874', '123456789', '112.jpg', NULL),
(13, 'Yusuf', 'Basirat', 'Abidemi', 'ND/17/COM/FT/005', 'LOVElog9.', 'img/abike.jpg', NULL),
(14, 'Olu', 'Olu', 'Olu', 'ND/17/COM/FT/666', 'LOVElog9.', 'img/111.jpg', NULL),
(15, 'Jola', 'Lola', 'Layo', 'ND/17/COM/FT/747', 'JOLA', 'img/113.jpg', NULL),
(16, 'Dayo', 'Damola', 'Damilola', 'ND/17/COM/FT/444', 'LOVElog9.', 'img/360passport_D4906370.jpg', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
