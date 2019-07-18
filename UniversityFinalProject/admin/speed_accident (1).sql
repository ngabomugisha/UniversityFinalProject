-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2019 at 09:48 AM
-- Server version: 10.1.39-MariaDB
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
-- Database: `speed&accident`
--

-- --------------------------------------------------------

--
-- Table structure for table `accident`
--

CREATE TABLE `accident` (
  `a_id` int(11) NOT NULL,
  `a_long_lati` varchar(30) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `a_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `h_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accident`
--

INSERT INTO `accident` (`a_id`, `a_long_lati`, `phone`, `a_time`, `h_id`, `p_id`) VALUES
(1, '1213123123', '2132313123', '2019-07-02 22:00:00', 2, 2),
(2, '-1.9590981,30.0576766', '(+250)78624868', '2019-07-08 10:43:01', 0, 0),
(3, '-1.9590981,30.0576766', '(+250)78624868', '2019-07-08 10:43:02', 0, 0),
(4, '-1.9590981,30.0576766', '(+250)78624868', '2019-07-08 15:28:46', 0, 0),
(5, '-1.9590981,30.0576766', '(+250)78624868', '2019-07-08 15:28:46', 0, 0),
(6, '-1.9555358,30.0635297', '(+250)78624868', '2019-07-08 15:31:02', 0, 0),
(7, '-1.9555358,30.0635297', '(+250)78624868', '2019-07-08 15:31:02', 0, 0),
(8, '-1.9555358,30.0635297', '(+250)78624868', '2019-07-08 15:31:02', 0, 0),
(9, '-1.9555358,30.0635297', '(+250)78624868', '2019-07-08 15:31:02', 0, 0),
(10, '-1.9555358,30.0635297', '(+250)78624868', '2019-07-08 15:31:02', 0, 0),
(11, '-1.9555358,30.0635297', '(+250)78624868', '2019-07-08 15:31:03', 0, 0),
(12, '-1.9555358,30.0635297', '(+250)78624868', '2019-07-08 15:31:03', 0, 0),
(13, '-1.9555358,30.0635297', '(+250)78624868', '2019-07-08 15:31:03', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `password`) VALUES
(2, 'ngabo.mugisha.bro@gmail.com', 'kingrobert', 'kingrobert');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(25) NOT NULL,
  `c_type` varchar(24) NOT NULL,
  `c_plate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`c_id`, `c_name`, `c_type`, `c_plate`) VALUES
(5, 'TOYOTA CARINA', 'Private', 'RAC234B'),
(6, 'BMW', 'PUBLIC', 'RAZ654A'),
(22, 'honda', 'public', 'RAB321Z'),
(23, 'Toyota v8', 'Public', 'RAB321U'),
(24, 'vm', 'PUBLIC', 'RAA123A'),
(25, 'toyota', 'PUBLIC', 'RAA437M');

-- --------------------------------------------------------

--
-- Table structure for table `car_owner`
--

CREATE TABLE `car_owner` (
  `o_id` int(11) NOT NULL,
  `o_name` varchar(30) NOT NULL,
  `o_address` varchar(30) NOT NULL,
  `o_phone` varchar(30) NOT NULL,
  `o_email` varchar(30) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_owner`
--

INSERT INTO `car_owner` (`o_id`, `o_name`, `o_address`, `o_phone`, `o_email`, `c_id`) VALUES
(64, 'ROBERT NGABO MUGISHA', '2501 E Memorial Rd', '222222222', 'ngabo.mugisha.bro@gmail.com', 6),
(66, 'NGABO MUGISHA ROBERT', 'Kigali Rwanda', '788793970', 'mugisharobertngabo@gmail.com', 24),
(71, 'nzimenyera robert', 'Kigali Rwanda', '344343434343', 'mugisharobertngabo@gmail.com', 5),
(72, 'nzimenyera innocent', 'nyarugenge', '250781946105', 'brathan42@gmail.com', 25);

-- --------------------------------------------------------

--
-- Table structure for table `data1`
--

CREATE TABLE `data1` (
  `id` int(11) NOT NULL,
  `first` int(11) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data1`
--

INSERT INTO `data1` (`id`, `first`, `timeStamp`) VALUES
(9, 0, '2019-07-07 07:17:14'),
(10, 0, '2019-07-07 07:21:52'),
(11, 0, '2019-07-07 07:22:33'),
(12, 0, '2019-07-07 07:23:35'),
(13, 0, '2019-07-07 07:24:39'),
(14, 0, '2019-07-07 07:25:30'),
(15, 0, '2019-07-07 07:26:19'),
(16, 0, '2019-07-07 07:28:54'),
(17, 0, '2019-07-07 07:30:05'),
(18, 0, '2019-07-07 07:30:19'),
(19, 0, '2019-07-07 07:34:51'),
(20, 0, '2019-07-07 07:35:47'),
(21, 0, '2019-07-07 07:37:07'),
(22, 0, '2019-07-07 07:38:36'),
(23, 0, '2019-07-07 07:41:07'),
(24, 0, '2019-07-07 07:41:16'),
(25, 0, '2019-07-07 07:53:28'),
(26, 0, '2019-07-08 10:37:50'),
(27, 0, '2019-07-08 10:38:47'),
(28, 0, '2019-07-08 10:39:44'),
(29, 0, '2019-07-08 10:47:07'),
(30, 0, '2019-07-08 15:18:58'),
(31, 0, '2019-07-08 15:19:08'),
(32, 0, '2019-07-08 15:19:13'),
(33, 0, '2019-07-08 15:23:12'),
(34, 0, '2019-07-08 15:24:20'),
(35, 0, '2019-07-08 15:24:39'),
(36, 0, '2019-07-08 15:24:40'),
(37, 0, '2019-07-08 15:25:44'),
(38, 0, '2019-07-08 15:25:55'),
(39, 0, '2019-07-08 15:27:43'),
(40, 0, '2019-07-08 15:27:51');

-- --------------------------------------------------------

--
-- Table structure for table `data2`
--

CREATE TABLE `data2` (
  `id2` int(11) NOT NULL,
  `last` int(11) NOT NULL,
  `timeStamp2` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data2`
--

INSERT INTO `data2` (`id2`, `last`, `timeStamp2`) VALUES
(22, 0, '2019-07-07 07:17:22'),
(23, 0, '2019-07-07 07:21:59'),
(24, 0, '2019-07-07 07:22:46'),
(25, 0, '2019-07-07 07:23:47'),
(26, 0, '2019-07-07 07:24:50'),
(27, 0, '2019-07-07 07:25:40'),
(28, 0, '2019-07-07 07:26:30'),
(29, 0, '2019-07-07 07:29:23'),
(30, 0, '2019-07-07 07:30:19'),
(31, 0, '2019-07-07 07:30:52'),
(32, 0, '2019-07-07 07:34:44'),
(33, 0, '2019-07-07 07:34:56'),
(34, 0, '2019-07-07 07:35:54'),
(35, 0, '2019-07-07 07:37:23'),
(36, 0, '2019-07-07 07:38:47'),
(37, 0, '2019-07-07 07:41:20'),
(38, 0, '2019-07-08 10:38:56'),
(39, 0, '2019-07-08 10:39:46'),
(40, 0, '2019-07-08 15:06:35'),
(41, 0, '2019-07-08 15:06:58'),
(42, 0, '2019-07-08 15:07:05'),
(43, 0, '2019-07-08 15:07:08'),
(44, 0, '2019-07-08 15:07:17'),
(45, 0, '2019-07-08 15:17:08'),
(46, 0, '2019-07-08 15:19:05'),
(47, 0, '2019-07-08 15:19:11'),
(48, 0, '2019-07-08 15:23:07'),
(49, 0, '2019-07-08 15:23:43'),
(50, 0, '2019-07-08 15:24:00'),
(51, 0, '2019-07-08 15:24:20'),
(52, 0, '2019-07-08 15:24:22'),
(53, 0, '2019-07-08 15:24:24'),
(54, 0, '2019-07-08 15:24:29'),
(55, 0, '2019-07-08 15:24:33'),
(56, 0, '2019-07-08 15:24:43'),
(57, 0, '2019-07-08 15:24:51'),
(58, 0, '2019-07-08 15:25:05'),
(59, 0, '2019-07-08 15:25:45'),
(60, 0, '2019-07-08 15:27:45'),
(61, 0, '2019-07-08 15:27:49');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `h_id` int(11) NOT NULL,
  `h_name` varchar(25) NOT NULL,
  `h_type` varchar(20) NOT NULL,
  `h_location` varchar(25) NOT NULL,
  `h_longitude` double NOT NULL,
  `h_latitude` double NOT NULL,
  `h_phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`h_id`, `h_name`, `h_type`, `h_location`, `h_longitude`, `h_latitude`, `h_phone`) VALUES
(11, 'kibagabaga hospital', 'public', 'kibagabaga-kigali', -1.93083, 30.112003, 788732945),
(12, 'muhima hospital', 'public', 'muhima-kigali', -1.93688, 30.058452, 728283887),
(13, 'kacyiru district', 'public', 'kacyiru-kigali', -1.933638, 30.0725219, 785061906),
(14, 'university teaching hospi', 'public', 'nyarugenge-kigali', -1.955938, 30.060494, 252575462),
(15, 'masaka hospital', 'public', 'masaka-kigali', -1.992079, 30.212077, 728878194),
(16, 'polyclinique la medicale(', 'private', 'remera-kigali', -1.944905, 30.064468, 788305661),
(17, 'king faisal hospital', 'private', 'kacyiru-kigali', -1.943923, 30.0955233, 788384877),
(18, 'baho international hospit', 'private', 'remera-kigali', -1.937872, 30.101488, 782343710),
(19, 'la croix du sud hospital', 'private', 'remera-kigali', -1.958261, 30.106157, 785246882),
(20, 'wiwo hospital', 'private', 'remera-kigali-kigali', -1.957181, 30.105584, 733444444);

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `p_id` int(11) NOT NULL,
  `p_station` varchar(30) NOT NULL,
  `p_location` varchar(30) NOT NULL,
  `p_longitude` int(15) NOT NULL,
  `p_latitude` int(15) NOT NULL,
  `p_phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`p_id`, `p_station`, `p_location`, `p_longitude`, `p_latitude`, `p_phone`) VALUES
(1, 'kimironko police station', 'kimironko-kigali', -2, 30, 788311177),
(2, 'kabuga police station', 'kabuga-kigali', -2, 30, 781946105),
(3, 'DPU nyarugenge police station', 'nyarugenge-kigali', -2, 30, 788311155),
(4, 'gisozi police staton', 'gisozi-kigali', -2, 30, 781946105),
(5, 'rwanda national police station', 'kanombe-kigali', -2, 30, 788311177);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `r_id` int(11) NOT NULL,
  `r_specification` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`r_id`, `r_specification`) VALUES
(1, 'town-kimisagara'),
(2, 'town-remera'),
(3, 'remera-kabuga'),
(4, 'nyabugogo-kimironko');

-- --------------------------------------------------------

--
-- Table structure for table `violation`
--

CREATE TABLE `violation` (
  `v_id` int(11) NOT NULL,
  `v_name` varchar(30) NOT NULL,
  `v_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `v_charges` int(11) NOT NULL,
  `c_plate` varchar(20) NOT NULL,
  `r_id` int(11) NOT NULL,
  `speed` varchar(20) NOT NULL,
  `v_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `violation`
--

INSERT INTO `violation` (`v_id`, `v_name`, `v_time`, `v_charges`, `c_plate`, `r_id`, `speed`, `v_status`) VALUES
(118, 'overspeed', '2019-07-07 07:39:30', 35000, 'RAB123T\n', 3, '2', 'pending'),
(119, 'overspeed', '2019-07-07 07:39:30', 35000, 'RAB123T\n', 3, '2', 'pending'),
(120, 'overspeed', '2019-07-07 18:30:01', 35000, 'RAB123T\n', 3, '5', 'paid'),
(121, 'overspeed', '2019-07-07 07:39:31', 35000, 'RAB123T\n', 3, '2', 'pending'),
(122, 'overspeed', '2019-07-07 07:39:32', 35000, 'RAB123T\n', 3, '2', 'pending'),
(123, 'overspeed', '2019-07-07 07:39:55', 35000, 'RAB123T\n', 3, '2.3636363636364', 'pending'),
(127, 'overspeed', '2019-07-07 09:38:53', 35000, 'RAB123W\n', 3, '7', 'pending'),
(128, 'overspeed', '2019-07-07 07:41:26', 35000, 'RAB123W\n', 3, '7', 'pending'),
(133, 'overspeed', '2019-07-07 17:45:48', 35000, 'RAB312A', 3, '0.035714285714286', 'pending'),
(135, 'overspeed', '2019-07-07 17:47:03', 35000, 'RAB312A', 3, '0.035714285714286', 'pending'),
(136, 'overspeed', '2019-07-07 17:48:36', 35000, 'RAB312A', 3, '0.035714285714286', 'pending'),
(137, 'overspeed', '2019-07-07 17:49:28', 35000, 'RAB312A', 3, '0.035714285714286', 'pending'),
(138, 'overspeed', '2019-07-07 17:57:07', 35000, 'RAB312A', 3, '0.035714285714286', 'pending'),
(139, 'overspeed', '2019-07-07 18:00:28', 35000, 'RAB312A', 3, '0.035714285714286', 'pending'),
(140, 'overspeed', '2019-07-07 18:01:38', 35000, 'RAB312A', 3, '0.035714285714286', 'pending'),
(141, 'overspeed', '2019-07-08 10:39:02', 35000, 'RAB127G\n', 3, '2.8888888888889', 'pending'),
(142, 'overspeed', '2019-07-08 10:39:02', 35000, 'RAB127G\n', 3, '2.8888888888889', 'pending'),
(143, 'overspeed', '2019-07-08 10:39:02', 35000, 'RAB127G\n', 3, '2.8888888888889', 'pending'),
(144, 'overspeed', '2019-07-08 10:39:02', 35000, 'RAB127G\n', 3, '2.8888888888889', 'pending'),
(145, 'overspeed', '2019-07-08 10:39:02', 35000, 'RAB127G\n', 3, '2.8888888888889', 'pending'),
(146, 'overspeed', '2019-07-08 10:39:02', 35000, 'RAB127G\n', 3, '2.8888888888889', 'pending'),
(147, 'overspeed', '2019-07-08 10:39:02', 35000, 'RAB127G\n', 3, '2.8888888888889', 'pending'),
(148, 'overspeed', '2019-07-08 10:39:02', 35000, 'RAB127G\n', 3, '2.8888888888889', 'pending'),
(151, 'overspeed', '2019-07-08 10:39:03', 35000, 'RAB127G\n', 3, '2.8888888888889', 'pending'),
(152, 'overspeed', '2019-07-08 10:39:03', 35000, 'RAB127G\n', 3, '2.8888888888889', 'pending'),
(153, 'overspeed', '2019-07-08 10:39:03', 35000, 'RAB127G\n', 3, '2.8888888888889', 'pending'),
(154, 'overspeed', '2019-07-08 10:39:03', 35000, 'RAB127G\n', 3, '2.8888888888889', 'pending'),
(155, 'overspeed', '2019-07-08 10:39:04', 35000, 'RAB127G\n', 3, '2.8888888888889', 'pending'),
(156, 'overspeed', '2019-07-08 10:39:04', 35000, 'RAB127G\n', 3, '2.8888888888889', 'pending'),
(157, 'overspeed', '2019-07-08 10:39:04', 35000, 'RAB127G\n', 3, '2.8888888888889', 'pending'),
(158, 'overspeed', '2019-07-08 10:39:04', 35000, 'RAB127G\n', 3, '2.8888888888889', 'pending'),
(159, 'overspeed', '2019-07-08 10:39:05', 35000, 'RAB127G\n', 3, '2.8888888888889', 'pending'),
(160, 'overspeed', '2019-07-08 10:39:05', 35000, 'RAB127G\n', 3, '2.8888888888889', 'pending'),
(161, 'overspeed', '2019-07-08 10:39:05', 35000, 'RAB127G\n', 3, '2.8888888888889', 'pending'),
(162, 'overspeed', '2019-07-08 10:39:05', 35000, 'RAB127G\n', 3, '2.8888888888889', 'pending'),
(163, 'overspeed', '2019-07-08 10:39:06', 35000, 'RAB127G\n', 3, '2.8888888888889', 'pending'),
(164, 'overspeed', '2019-07-08 10:42:02', 35000, 'RAB789Y\n', 3, '13', 'paid'),
(165, 'overspeed', '2019-07-08 10:39:53', 35000, 'RAB789Y\n', 3, '13', 'pending'),
(166, 'overspeed', '2019-07-08 10:39:53', 35000, 'RAB789Y\n', 3, '13', 'pending'),
(167, 'overspeed', '2019-07-08 10:39:53', 35000, 'RAB789Y\n', 3, '13', 'pending'),
(168, 'overspeed', '2019-07-08 10:39:53', 35000, 'RAB789Y\n', 3, '13', 'pending'),
(169, 'overspeed', '2019-07-08 10:39:54', 35000, 'RAB789Y\n', 3, '13', 'pending'),
(170, 'overspeed', '2019-07-08 10:39:54', 35000, 'RAB789Y\n', 3, '13', 'pending'),
(171, 'overspeed', '2019-07-08 10:39:54', 35000, 'RAB789Y\n', 3, '13', 'pending'),
(172, 'overspeed', '2019-07-08 10:39:55', 35000, 'RAB789Y\n', 3, '13', 'pending'),
(173, 'overspeed', '2019-07-08 10:39:55', 35000, 'RAB789Y\n', 3, '13', 'pending'),
(174, 'overspeed', '2019-07-08 10:39:55', 35000, 'RAB789Y\n', 3, '13', 'pending'),
(175, 'overspeed', '2019-07-08 10:39:55', 35000, 'RAB789Y\n', 3, '13', 'pending'),
(176, 'overspeed', '2019-07-08 10:39:56', 35000, 'RAB789Y\n', 3, '13', 'pending'),
(177, 'overspeed', '2019-07-08 15:19:08', 35000, 'RAA437M\n', 3, '3.7142857142857', 'pending'),
(178, 'overspeed', '2019-07-08 15:19:10', 35000, 'RAA437M\n', 3, '3.7142857142857', 'pending'),
(179, 'overspeed', '2019-07-08 15:20:39', 35000, 'RAA437M\n', 3, '8.6666666666667', 'paid'),
(180, 'overspeed', '2019-07-08 15:19:15', 35000, 'RAA437\n', 3, '13', 'pending'),
(181, 'overspeed', '2019-07-08 15:19:16', 35000, 'RAA437M\n', 3, '13', 'pending'),
(182, 'overspeed', '2019-07-08 15:19:16', 35000, 'RAA437M\n', 3, '13', 'pending'),
(183, 'overspeed', '2019-07-08 15:25:51', 35000, 'RAA437M\n', 3, '26', 'pending'),
(184, 'overspeed', '2019-07-08 15:25:54', 35000, 'RAA437M\n', 3, '26', 'pending'),
(185, 'overspeed', '2019-07-08 15:25:54', 35000, 'RAA437M\n', 3, '26', 'pending'),
(186, 'overspeed', '2019-07-08 15:25:54', 35000, 'RAA437M\n', 3, '26', 'pending'),
(187, 'overspeed', '2019-07-08 15:25:55', 35000, 'RAA437M\n', 3, '26', 'pending'),
(188, 'overspeed', '2019-07-08 15:25:55', 35000, 'RAA437M\n', 3, '26', 'pending'),
(189, 'overspeed', '2019-07-08 15:25:55', 35000, 'RAA437M\n', 3, '26', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accident`
--
ALTER TABLE `accident`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `car_owner`
--
ALTER TABLE `car_owner`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `data1`
--
ALTER TABLE `data1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data2`
--
ALTER TABLE `data2`
  ADD PRIMARY KEY (`id2`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `violation`
--
ALTER TABLE `violation`
  ADD PRIMARY KEY (`v_id`),
  ADD KEY `r_id` (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accident`
--
ALTER TABLE `accident`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `car_owner`
--
ALTER TABLE `car_owner`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `data1`
--
ALTER TABLE `data1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `data2`
--
ALTER TABLE `data2`
  MODIFY `id2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `police`
--
ALTER TABLE `police`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `violation`
--
ALTER TABLE `violation`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
