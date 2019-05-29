-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2019 at 03:18 PM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `meat`
--

CREATE TABLE `meat` (
  `ID` int(4) NOT NULL,
  `Serial_Number` varchar(20) NOT NULL,
  `Species` varchar(5) NOT NULL,
  `Added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Weight` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meat`
--

INSERT INTO `meat` (`ID`, `Serial_Number`, `Species`, `Added`, `Updated`, `Weight`) VALUES
(1, 'beef1', 'KPS', '2018-10-23 13:16:07', '2018-11-02 08:39:30', 0),
(2, 'beef2', 'KPS', '2018-10-23 13:18:55', '2018-11-05 06:58:14', 12.3),
(3, 'beef3', 'SED', '2018-10-23 13:22:26', '2018-11-06 04:47:28', 12.564),
(7, 'beef4', 'KRD', '2018-10-23 14:41:54', '2018-11-06 04:48:21', 0),
(8, 'beef5', 'KPS', '2018-11-05 15:03:24', '2018-11-05 07:06:42', 12),
(13, 'beef7', 'KPS', '2018-12-05 07:21:57', '2018-12-05 07:25:18', 27),
(14, 'beef6', 'ABC', '2018-12-05 07:25:42', '2018-12-05 07:25:42', 123),
(15, '123', 'KPS', '2019-02-24 15:19:26', '2019-03-04 23:29:31', 5),
(16, 'F4SGR', 'KPS', '2019-03-26 09:15:19', '2019-03-26 21:20:31', 12);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID_Member` int(3) NOT NULL,
  `Username` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Surname` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Sex` varchar(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Type` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Nisit',
  `Email` varchar(30) NOT NULL,
  `public_keys` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID_Member`, `Username`, `Password`, `Name`, `Surname`, `Sex`, `Type`, `Email`, `public_keys`) VALUES
(1, 'admin01', 'admin01', 'admin01', 'admin01', 'Male', 'seller1', 'admin01@hotmail.com', '0384801342be70834de1c24262d10dcc71c7d1272e17fd2595207e057101311156'),
(2, 'admin02', 'admin02', 'admin02', 'admin02', 'Female', 'seller2', '', '7984801342be70834desc24262d10dcc5c67d1272e17fd25d8e6se057101311156'),
(3, 'admin03', 'admin03', 'admin03', 'admin03', 'Female', 'seller3', 'mark@hotmail.com', '1c24801344be70834d262dd1272e110dcc71c77fd259520382e07e057101311156'),
(4, 'admin04', 'admin04', 'admin04', 'admin04', 'Male', 'seller4', '', '77fd259520382e07e057101311c24801344be70834d260dcc71c1152dd1272e116');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `id` int(11) NOT NULL,
  `ID_meat` int(11) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lng` varchar(50) NOT NULL,
  `location_name` varchar(200) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`id`, `ID_meat`, `lat`, `lng`, `location_name`, `time`) VALUES
(4, 1, '16.08276411471161', '103.677978515625', 'ร้อยเอ็ด', '2018-11-01 19:39:30'),
(5, 1, '16.05637148556169', '103.1671142578125', 'มหาสารคาม', '2018-11-02 04:39:30'),
(6, 1, '15.056210365453422', '103.106689453125', 'บุรีรัมย์', '2018-11-02 08:39:30'),
(7, 2, '16.0827641147116', '103.167114257811', 'ร้อยเอ็ด2', '2018-11-05 06:58:14'),
(8, 8, '15', '101', '15:03:24', '2018-11-05 07:06:42'),
(9, 9, '14.0214115', '99.9913526', '15:38:10', '2018-11-05 07:41:44'),
(10, 3, '15.056210365453422', '103.167114257811', '', '2018-11-06 04:47:28'),
(12, 7, '16.05637148556169', '103.1671142578125', '', '2018-11-06 04:48:21'),
(18, 13, '14.0214115', '99.9913526', '07:21:57', '2018-12-05 07:21:57'),
(19, 14, '14.0214115', '99.9913526', '07:25:42', '2018-12-05 07:25:42'),
(20, 15, '14.0214115', '99.9913526', '15:19:26', '2019-02-24 15:19:26'),
(21, 16, '14.0214115', '99.9913526', '09:15:19', '2019-03-26 09:15:19');

-- --------------------------------------------------------

--
-- Table structure for table `temperature`
--

CREATE TABLE `temperature` (
  `ID_temp` int(11) NOT NULL,
  `ID_meat` int(11) NOT NULL,
  `temp` float NOT NULL DEFAULT '0',
  `humidity` float DEFAULT '0',
  `reporter` varchar(20) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temperature`
--

INSERT INTO `temperature` (`ID_temp`, `ID_meat`, `temp`, `humidity`, `reporter`, `time`) VALUES
(1, 1, -2.3, 0, '', '2018-10-22 06:07:07'),
(2, 1, -1.2, 0, '', '2018-10-22 06:10:07'),
(3, 1, -2.4, 0, '', '2018-10-22 06:10:10'),
(4, 1, -4.7, 0, '', '2018-10-22 06:10:14'),
(5, 1, -1.2, 0, '', '2018-10-22 06:10:20'),
(8, 2, -3.4, 0, '', '2018-10-23 02:45:29'),
(10, 2, -2.5, 0, '', '2018-10-23 02:46:01'),
(12, 2, -0.5, 0, '', '2018-10-23 02:46:38'),
(13, 3, -42.3, 0, '', '2018-10-23 05:24:09'),
(14, 5, 0, 0, '', '2018-10-23 05:39:52'),
(17, 7, 0, 0, '', '2018-10-23 06:41:54'),
(18, 8, 0, 0, '', '2018-10-23 06:44:37'),
(19, 8, 0, 0, '', '2018-11-05 07:03:24'),
(21, 13, 0, 0, '...', '2018-12-05 07:25:18'),
(22, 14, 0, 0, '...', '2018-12-05 07:25:42'),
(23, 15, 0, 0, '...', '2019-02-24 15:19:26'),
(26, 15, 46.5, 0, '....', '2019-02-25 09:47:30'),
(27, 15, 72.5, 0, '...', '2019-02-25 09:53:19'),
(28, 15, 72.7, 0, '...', '2019-02-25 09:53:27'),
(29, 15, 72.7, 0, '...', '2019-02-25 09:53:32'),
(30, 15, 72.7, 0, '...', '2019-02-25 09:53:38'),
(31, 15, 32.8, 0, '...', '2019-02-25 09:55:24'),
(32, 15, 32.8, 0, '...', '2019-02-25 09:55:30'),
(33, 15, 32.8, 0, '...', '2019-02-25 09:55:36'),
(34, 15, 32.8, 0, '...', '2019-02-25 09:55:41'),
(35, 15, 32.8, 0, '...', '2019-02-25 09:55:46'),
(36, 15, 32.8, 0, '...', '2019-02-25 09:55:52'),
(37, 15, 33.3, 0, '...', '2010-05-23 00:00:00'),
(38, 15, 33.2, 0, '...', '2010-07-11 00:00:00'),
(39, 15, 33.3, 0, '...', '2010-07-17 00:00:00'),
(40, 15, 33.3, 0, '...', '2019-02-25 10:07:16'),
(41, 15, 33.2, 0, '...', '2019-02-25 10:07:27'),
(42, 15, 33.3, 0, '...', '2019-02-25 10:07:32'),
(43, 15, 33.3, 0, '...', '2019-02-25 10:07:43'),
(44, 15, 33.3, 0, '...', '2019-02-25 10:07:48'),
(45, 15, 33.2, 0, '...', '2019-02-25 10:07:58'),
(46, 15, 33.3, 0, '...', '2019-02-25 10:08:07'),
(47, 15, 33.2, 0, '...', '2019-02-25 10:09:32'),
(48, 15, 33.2, 0, '...', '2019-02-25 10:09:37'),
(49, 15, 33.2, 0, '...', '2019-02-25 10:09:43'),
(50, 15, 33.2, 0, '...', '2019-02-25 10:09:50'),
(51, 15, 33.1, 0, '...', '2019-02-25 10:09:56'),
(52, 15, 33.1, 0, '...', '2019-02-25 10:10:02'),
(53, 15, 33.1, 0, '...', '2019-02-25 10:10:09'),
(54, 15, 33.2, 0, '...', '2019-02-25 10:10:16'),
(55, 15, 33.3, 0, '...', '2019-02-25 10:15:09'),
(56, 15, 33.3, 0, '...', '2019-02-25 10:15:14'),
(57, 15, 33.3, 0, '...', '2019-02-25 10:15:20'),
(58, 15, 32.8, 0, '...', '2019-02-25 10:42:05'),
(59, 15, 32.8, 0, '...', '2019-02-25 10:42:10'),
(60, 15, 32.8, 0, '...', '2019-02-25 10:42:15'),
(61, 15, 32.8, 0, '...', '2019-02-25 10:45:11'),
(62, 15, 32.7, 0, '...', '2019-02-25 10:45:17'),
(63, 15, 32.7, 0, '...', '2019-02-25 10:45:29'),
(64, 15, 32.7, 0, '...', '2019-02-25 10:48:13'),
(65, 15, 32.7, 0, '...', '2019-02-25 10:48:19'),
(66, 15, 32.7, 0, '...', '2019-02-25 10:48:30'),
(67, 15, 32.7, 0, '...', '2019-02-25 10:48:35'),
(68, 15, 32.7, 0, '...', '2019-02-25 10:48:41'),
(69, 15, 32.7, 0, '...', '2019-02-25 10:50:17'),
(70, 15, 32.7, 0, '...', '2019-02-25 10:50:23'),
(71, 15, 32.7, 0, '...', '2019-02-25 10:50:30'),
(72, 15, 32.7, 0, '...', '2019-02-25 10:51:39'),
(73, 15, 32.6, 0, '...', '2019-02-25 10:53:46'),
(74, 15, 32.6, 0, '...', '2019-02-25 10:53:57'),
(75, 15, 32.6, 0, '...', '2019-02-25 10:54:08'),
(76, 15, 32.6, 0, '...', '2019-02-25 10:55:02'),
(77, 15, 32.6, 0, '...', '2019-02-25 10:55:42'),
(78, 15, 32.6, 0, '...', '2019-02-25 10:55:47'),
(79, 15, 32, 0, '...', '2019-02-25 18:10:46'),
(80, 15, 32.5, 0, '...', '2019-02-25 18:13:44'),
(81, 15, 32.4, 0, '...', '2019-02-25 18:13:56'),
(82, 15, 32.4, 0, '...', '2019-02-25 18:14:02'),
(83, 15, 28.4, 44.5, '...', '2019-03-04 23:29:21'),
(84, 15, 25.8, 47.6, '...', '2019-03-04 23:29:31'),
(85, 16, 0, 0, '...', '2019-03-26 09:15:19'),
(86, 16, 32.2, 69.5, '...', '2019-03-26 21:18:05'),
(87, 16, 32.4, 68, '...', '2019-03-26 21:18:11'),
(88, 16, 32.4, 68.1, '...', '2019-03-26 21:18:16'),
(89, 16, 32.4, 68.1, '...', '2019-03-26 21:18:22'),
(90, 16, 32.4, 68, '...', '2019-03-26 21:18:27'),
(91, 16, 32.4, 67.9, '...', '2019-03-26 21:18:38'),
(92, 16, 32.4, 67.9, '...', '2019-03-26 21:18:43'),
(93, 16, 32.4, 67.9, '...', '2019-03-26 21:18:49'),
(94, 16, 32.4, 67.8, '...', '2019-03-26 21:18:54'),
(95, 16, 32.6, 99.9, '...', '2019-03-26 21:18:59'),
(96, 16, 32.7, 97.9, '...', '2019-03-26 21:19:10'),
(97, 16, 32.7, 92, '...', '2019-03-26 21:19:15'),
(98, 16, 32.6, 83.6, '...', '2019-03-26 21:19:21'),
(99, 16, 32.6, 77.8, '...', '2019-03-26 21:19:26'),
(100, 16, 32.6, 75, '...', '2019-03-26 21:19:32'),
(101, 16, 32.6, 73.2, '...', '2019-03-26 21:19:42'),
(102, 16, 32.6, 73.1, '...', '2019-03-26 21:19:48'),
(103, 16, 32.6, 72.9, '...', '2019-03-26 21:19:53'),
(104, 16, 32.6, 72.8, '...', '2019-03-26 21:19:59'),
(105, 16, 32.6, 72.8, '...', '2019-03-26 21:20:04'),
(106, 16, 32.5, 72.6, '...', '2019-03-26 21:20:10'),
(107, 16, 32.5, 72.6, '...', '2019-03-26 21:20:20'),
(108, 16, 32.5, 72.6, '...', '2019-03-26 21:20:26'),
(109, 16, 32.6, 72.6, '...', '2019-03-26 21:20:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meat`
--
ALTER TABLE `meat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID_Member`);

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temperature`
--
ALTER TABLE `temperature`
  ADD PRIMARY KEY (`ID_temp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meat`
--
ALTER TABLE `meat`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `ID_Member` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `temperature`
--
ALTER TABLE `temperature`
  MODIFY `ID_temp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;