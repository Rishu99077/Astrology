-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 19, 2020 at 01:35 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rishabh_astro`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_user`
--

DROP TABLE IF EXISTS `active_user`;
CREATE TABLE IF NOT EXISTS `active_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `assign_question`
--

DROP TABLE IF EXISTS `assign_question`;
CREATE TABLE IF NOT EXISTS `assign_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `time_of_birth` varchar(255) NOT NULL,
  `question` text NOT NULL,
  `guru_name` varchar(255) NOT NULL,
  `date_time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_question`
--

INSERT INTO `assign_question` (`id`, `cust_id`, `full_name`, `email`, `mobile`, `category`, `date_of_birth`, `time_of_birth`, `question`, `guru_name`, `date_time`) VALUES
(1, '', '', '', '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `guruji`
--

DROP TABLE IF EXISTS `guruji`;
CREATE TABLE IF NOT EXISTS `guruji` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `guru_name` varchar(255) NOT NULL,
  `guru_pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guruji`
--

INSERT INTO `guruji` (`id`, `guru_name`, `guru_pass`) VALUES
(8, 'ram@gmail.com', '123'),
(9, 'guru@gmail.com', '123'),
(10, 'mohan@gmail.com', '123'),
(11, 'guru', 'guru');

-- --------------------------------------------------------

--
-- Table structure for table `new_user`
--

DROP TABLE IF EXISTS `new_user`;
CREATE TABLE IF NOT EXISTS `new_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=175 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_user`
--

INSERT INTO `new_user` (`id`, `full_name`, `email`, `password`, `confirm_password`, `mobile`, `gender`, `address`, `image`) VALUES
(173, 'ram', 'ram@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '9907758264', 'male', 'sdfgfgfdfdsfdffd', '159782151667430.jpg'),
(174, 'RISHU', 'shyam@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '9907767669', 'male', '123456', '159773396542456.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_feed`
--

DROP TABLE IF EXISTS `user_feed`;
CREATE TABLE IF NOT EXISTS `user_feed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `experience` varchar(255) NOT NULL,
  `time_feed` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_feed`
--

INSERT INTO `user_feed` (`id`, `cust_id`, `full_name`, `email`, `age`, `mobile`, `message`, `experience`, `time_feed`) VALUES
(12, '143', 'shanker', 'shanker@gmail.com', '12', '1425364778', 'kya chal raha 11/0812020', 'avg', ''),
(10, '3', 'ram', 'ram@123', '55', '9907764859', '55555fadgdsgg', 'avg', ''),
(11, '10', 'aarti', 'aarti@gmail.com', '22', '123456789', 'aacha hai par bekar bhi', 'avg', ''),
(13, '143', 'shanker', 'shanker@gmail.com', '36', '1425364778', 'aaj time ka pata chaala', 'avg', '2020-13-08 09:56:37'),
(14, '143', 'shanker', 'shanker@gmail.com', '14', '1425364778', 'humara time kaise chal raha hai', 'good', '13-08-2020'),
(15, '143', 'shanker', 'shanker@gmail.com', '12', '1425364778', 'timememe', 'avg', '13-08-2020'),
(16, '143', 'shanker', 'shanker@gmail.com', '55', '1425364778', 'dekkkak kjjo', 'good', '13-08-2020 10:08:14'),
(17, '143', 'shanker', 'shanker@gmail.com', '63', '1425364778', 'ab to apna time aayega', 'good', '08/13/2020 03:49:53 pm'),
(18, '145', 'jay', 'jay@gmail.com', '63', '9907767658', 'lopp', 'good', '08/13/2020 04:41:54 pm'),
(19, '143', 'shanker', 'shanker@gmail.com', '85', '1425364778', '444444', 'good', '08/13/2020 04:45:17 pm');

-- --------------------------------------------------------

--
-- Table structure for table `user_questions`
--

DROP TABLE IF EXISTS `user_questions`;
CREATE TABLE IF NOT EXISTS `user_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `time_of_birth` varchar(255) NOT NULL,
  `question` text NOT NULL,
  `date_time` varchar(255) NOT NULL,
  `assign_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_questions`
--

INSERT INTO `user_questions` (`id`, `cust_id`, `full_name`, `email`, `mobile`, `category`, `date_of_birth`, `time_of_birth`, `question`, `date_time`, `assign_id`) VALUES
(11, '145', 'jay', 'jay@gmail.com', '9907767658', 'NUMEROLOGY / à¤…à¤‚à¤•à¤œà¥à¤¯à¥‹à¤¤à¤¿à¤·', '1569-10-10', '11:11', 'fadfffffffffffffffffffffffffffffffffffff', '08/13/2020 05:33:42 pm', ''),
(10, '145', 'jay', 'jay@gmail.com', '9907767658', 'JANAM KUNDLI / à¤œà¤¨à¤® à¤•à¥à¤‚à¤¡à¤²à¥€', '4454-11-14', '04:11', 'dmxfbnmsdhfj dfsdksdfkdjsflkkdsfkjf sdfsdlkfklsdjfkdsjkfjdskfj dfjdsfkjdklfjlkdsjfkljfdsf dfkdjflkjdfkd sflkjfds fkdjfdlkfj dfdjfk sfjdsf ', '08/13/2020 05:01:35 pm', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
