-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 09, 2020 at 07:14 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14766643_astrology`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `assign_question`
--

CREATE TABLE `assign_question` (
  `id` int(11) NOT NULL,
  `cust_id` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `time_of_birth` varchar(255) NOT NULL,
  `question` text NOT NULL,
  `guru_name` varchar(255) NOT NULL,
  `date_time` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `guruji` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `guru_name` varchar(255) NOT NULL,
  `guru_pass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guruji`
--

INSERT INTO `guruji` (`id`, `name`, `guru_name`, `guru_pass`) VALUES
(8, 'Ram', 'ram@gmail.com', '123'),
(9, 'guru', 'guru@gmail.com', '123'),
(10, 'mohan', 'mohan@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `new_user`
--

CREATE TABLE `new_user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_user`
--

INSERT INTO `new_user` (`id`, `full_name`, `email`, `password`, `confirm_password`, `mobile`, `gender`, `address`, `image`) VALUES
(173, 'ram', 'ram@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '9907758264', 'male', 'sdfgfgfdfdsfdffd', '159799592367800.gif'),
(174, 'Shyam', 'shyam@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '9907767669', 'male', '123456', '159868349145933.jpg'),
(175, 'rishabh', 'rishabh@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567890', 'male', 'dfaefdadfadaf', '159825161237027.jpeg'),
(176, 'sam', 'sam@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567888', 'male', 'dfaefdadfadaf', '159799701161053.jpg'),
(177, 'Divya sharma', 'divya@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', '9907767669', 'female', '320, c saibaba nagar', '159835543754703.jpg'),
(178, 'joker', 'joker@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '9907764589', 'male', 'pal ghar case', NULL),
(179, 'vijay parihar', 'vijay@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '9462722345', 'male', 'zanzeer wla square', '159852239057656.jpg'),
(180, 'klk', 'lklkl@gmil.com', '76f3780904e43e3c7236bc32451bb57db44e1399', '76f3780904e43e3c7236bc32451bb57db44e1399', '4545451245', 'male', 'sg', NULL),
(181, 'rishabh', 'rish@gmial.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '12111111215', 'male', '14545hfjhjh', NULL),
(182, 'ham', 'ham@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567890', 'male', 'ddddffhbhjg', NULL),
(183, 'bhanu pratap', 'bhanupratap64538@gmail.com', '5091e93031a93d0a156a436811cdda6a86e9c923', '5091e93031a93d0a156a436811cdda6a86e9c923', '9123490616', 'male', '2nd floor yashwant plaza indore.105', NULL),
(184, 'suru', 'suru@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '1234567890', 'male', 'fsdgsgdsfghhhf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `id` int(11) NOT NULL,
  `cust_id` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `time_of_birth` varchar(255) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `ask_date_time` varchar(255) DEFAULT NULL,
  `rply_date_time` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`id`, `cust_id`, `customer_name`, `category`, `date_of_birth`, `time_of_birth`, `question`, `answer`, `ask_date_time`, `rply_date_time`, `status`) VALUES
(39, '25', 'Divya sharma', 'HOROSCOPE', '1994-11-04', '05:00', 'Mera aaj ka rashi fal kya hai , kya mera aaj luck aacha hai ,aur mai ye janana chahti hu ki mera roz ka jeevan kesa chal raha hai ?', 'Accha hai !', '08/25/2020 05:12:02 pm', '', 'Active'),
(40, '25', 'Divya sharma', 'HOROSCOPE', '1994-11-04', '05:00', 'Mera aaj ka rashi fal kya hai , kya mera aaj luck aacha hai ,aur mai ye janana chahti hu ki mera roz ka jeevan kesa chal raha hai ?', 'thikk hai ', '08/25/2020 05:12:02 pm', '', 'Active'),
(41, '28', 'joker', 'NUMEROLOGY', '1474-11-11', '11:11', 'mera aaj ka lucky no. kya hai', '13', '08/27/2020 12:45:11 pm', '08/27/2020 12:55:21 pm', 'Active'),
(42, '28', 'joker', 'NUMEROLOGY', '1474-11-11', '11:11', 'mera aaj ka lucky no. kya hai', '13 aur 18', '08/27/2020 12:45:11 pm', '08/27/2020 12:55:55 pm', 'Active'),
(43, '175', 'rishabh', 'NUMEROLOGy', '1994-10-11', '10:00', 'dfgdfgfdghghghgfhfh', 'zxggxzfghfgdfhdhgfjhdg', '08/24/2020 12:18:10 pm', '08/27/2020 01:18:42 pm', 'Active'),
(44, '175', 'rishabh', 'BIRTH', '1145-10-11', '11:55', '..,,.mkjhuit5675r m,u56', 'fdgfdg', '08/24/2020 12:29:21 pm', '08/27/2020 01:32:37 pm', 'close'),
(45, '177', 'Divya sharma', 'HOROSCOPE', '1994-11-04', '05:00', 'Mera aaj ka rashi fal kya hai , kya mera aaj luck aacha hai ,aur mai ye janana chahti hu ki mera roz ka jeevan kesa chal raha hai ?', 'kal pata algeega', '08/25/2020 05:12:02 pm', '08/27/2020 01:45:29 pm', 'close'),
(46, '179', 'vijay parihar', 'HOROSCOPE', '1990-09-13', '06:00', 'Aaj ka bhawishy bataiye', 'AAj aapka bhagya uday rahega , aap kisi ko pareshaan nhii kar payenge kyuki jingoor nhii aaya', '08/27/2020 03:32:38 pm', '08/27/2020 03:35:51 pm', 'close');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `txnid` text NOT NULL,
  `amount` varchar(100) NOT NULL,
  `pinfo` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_feed`
--

CREATE TABLE `user_feed` (
  `id` int(11) NOT NULL,
  `cust_id` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `experience` varchar(255) NOT NULL,
  `time_feed` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(19, '143', 'shanker', 'shanker@gmail.com', '85', '1425364778', '444444', 'good', '08/13/2020 04:45:17 pm'),
(20, '173', 'ram', 'ram@gmail.com', '54', '9907758264', '8989', 'avg', '08/20/2020 11:30:54 am'),
(21, '183', 'bhanu pratap', 'bhanupratap64538@gmail.com', '28', '9123490616', 'good', 'good', '09/04/2020 05:21:45 pm');

-- --------------------------------------------------------

--
-- Table structure for table `user_questions`
--

CREATE TABLE `user_questions` (
  `id` int(11) NOT NULL,
  `cust_id` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `time_of_birth` varchar(255) NOT NULL,
  `question` text NOT NULL,
  `ask_date_time` varchar(255) NOT NULL,
  `assign_id` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_questions`
--

INSERT INTO `user_questions` (`id`, `cust_id`, `full_name`, `email`, `mobile`, `category`, `date_of_birth`, `time_of_birth`, `question`, `ask_date_time`, `assign_id`) VALUES
(10, '145', 'jay', 'jay@gmail.com', '9907767658', 'JANAM KUNDLI / à¤œà¤¨à¤® à¤•à¥à¤‚à¤¡à¤²à¥€', '4454-11-14', '04:11', 'dmxfbnmsdhfj dfsdksdfkdjsflkkdsfkjf sdfsdlkfklsdjfkdsjkfjdskfj dfjdsfkjdklfjlkdsjfkljfdsf dfkdjflkjdfkd sflkjfds fkdjfdlkfj dfdjfk sfjdsf ', '08/13/2020 05:01:35 pm', '8'),
(13, '173', 'ram', 'ram@gmail.com', '9907758264', 'LOVE REMEDIES / à¤ªà¥à¤°à¥‡à¤® à¤¸à¤‚à¤¬à¤‚à¤§à¥€', '1994-05-07', '14:55', 'sachii yaar', '08/20/2020 03:21:32 pm', '9'),
(14, '176', 'sam', 'sam@gmail.com', '1234567888', 'VASTU', '1995-08-08', '15:21', 'loldodjdif', '08/21/2020 01:39:44 pm', '8'),
(16, '175', 'rishabh', 'rishabh@gmail.com', '1234567890', 'NUMEROLOGy', '1994-10-11', '10:00', 'dfgdfgfdghghghgfhfh', '08/24/2020 12:18:10 pm', '8'),
(25, '177', 'Divya sharma', 'divya@gmail.com', '9907767669', 'HOROSCOPE', '1994-11-04', '05:00', 'Mera aaj ka rashi fal kya hai , kya mera aaj luck aacha hai ,aur mai ye janana chahti hu ki mera roz ka jeevan kesa chal raha hai ?', '08/25/2020 05:12:02 pm', '8'),
(24, '174', 'RISHU', 'shyam@gmail.com', '9907767669', 'NUMEROLOGY', '166512-12-12', '02:21', 'dfhfdhkjfdhgjdfhgdfjb', '08/24/2020 07:14:34 pm', '10'),
(23, '175', 'rishabh', 'rishabh@gmail.com', '1234567890', 'BIRTH', '112454-10-12', '12:10', ';;lhfdfcvefdfgsg', '08/24/2020 12:30:29 pm', '9'),
(50, '174', 'Shyam', 'shyam@gmail.com', '9907767669', 'BIRTH', '51111-12-15', '00:02', 'klaskflldkfldlgkdlggfgkkk', '08/29/2020 12:37:26 pm', NULL),
(49, '174', 'Shyam', 'shyam@gmail.com', '9907767669', 'HOROSCOPE', '1994-10-11', '11:11', 'jkdjkjkfjkljdlkfjldjlkfjlkdjfmdkjkmgkjkdmgdskgjkjsmgd dgkjkljglkdg dgkljdlkdg jdkljkljdklseopreyuj riuiudei roisjajeosjsnaj Eosjank er ro rishabh sharna', '08/29/2020 12:19:24 pm', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_question`
--
ALTER TABLE `assign_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guruji`
--
ALTER TABLE `guruji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_user`
--
ALTER TABLE `new_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_feed`
--
ALTER TABLE `user_feed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_questions`
--
ALTER TABLE `user_questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assign_question`
--
ALTER TABLE `assign_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `guruji`
--
ALTER TABLE `guruji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `new_user`
--
ALTER TABLE `new_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_feed`
--
ALTER TABLE `user_feed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_questions`
--
ALTER TABLE `user_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
