-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2017 at 06:52 
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arphi_sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` varchar(25) NOT NULL,
  `id_user` varchar(25) NOT NULL,
  `contact_name` varchar(25) NOT NULL,
  `contact_number` varchar(25) NOT NULL,
  `logtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `id_user`, `contact_name`, `contact_number`, `logtime`) VALUES
('CNT/00001', 'USR00001', 'Arif Ragil', '089623199126', '2017-01-01 08:55:33'),
('CNT/00001', 'USR00001', 'M Fitriyan', '1235', '2017-01-01 08:55:41'),
('CNT/00001', 'USR00001', 'Abc', '234235', '2017-01-01 08:55:53'),
('CNT/00001', 'USR00001', 'Def', '123', '2017-01-01 06:41:42'),
('CNT/00001', 'USR00001', 'asd', 'as', '2017-01-01 06:47:45'),
('CNT/00001', 'USR00001', '4653', '67', '2017-01-01 06:48:29'),
('CNT/00001', 'USR00001', '2342412', '2342345', '2017-01-01 06:49:57'),
('CNT/00001', 'USR00001', '3465', '3423', '2017-01-01 06:50:43'),
('CNT/00001', 'USR00001', 'sadf', 'asd', '2017-01-01 11:53:02'),
('CNT/00001', 'USR00001', 'asd2131', '24523', '2017-01-01 11:54:15'),
('CNT/00001', 'USR00001', '98862', '23948', '2017-01-01 11:54:30');

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE `credit` (
  `id_credit` varchar(25) NOT NULL,
  `id_user` varchar(25) NOT NULL,
  `type_credit` varchar(10) NOT NULL,
  `credit` varchar(25) NOT NULL,
  `price` varchar(25) NOT NULL,
  `price_transfer` varchar(25) NOT NULL,
  `status` int(1) NOT NULL COMMENT '0 : blm trnsfr | 1 : sdh trnsfr | 2 : Verified',
  `logtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`id_credit`, `id_user`, `type_credit`, `credit`, `price`, `price_transfer`, `status`, `logtime`) VALUES
('CRD/01/2017/00001', 'USR00001', '98ds', '2900', '200000', '209418', 1, '2017-01-02 12:08:44'),
('CRD/01/2017/00002', 'USR00001', '98ds', '2900', '200000', '209153', 0, '2017-01-02 12:09:52'),
('CRD/01/2017/00003', 'USR00001', 'as4', '10000', '700000', '709008', 1, '2017-01-02 12:10:42'),
('CRD/01/2017/00004', 'USR00001', 'a97s', '5700', '400000', '402610', 1, '2017-01-02 12:11:29'),
('CRD/01/2017/00005', 'USR00001', 'as4', '10000', '700000', '702434', 0, '2017-01-02 12:19:38'),
('CRD/01/2017/00006', 'USR00001', 'a86s', '4200', '300000', '300911', 1, '2017-01-02 12:19:49');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id_inbox` varchar(25) NOT NULL,
  `number` varchar(20) NOT NULL,
  `text_message` varchar(155) NOT NULL,
  `logtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id_inbox`, `number`, `text_message`, `logtime`) VALUES
('INB', '123', 'mosok', '2017-01-18 02:12:08');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id_message` varchar(25) NOT NULL,
  `id_user` varchar(25) NOT NULL,
  `text_message` varchar(160) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `type` int(1) NOT NULL COMMENT '0 : ori | 1 : brdcst | 2 : schedule | ',
  `status` int(1) NOT NULL COMMENT '0 :  pending | 1 : on proses | 2 : success',
  `dari` int(1) NOT NULL COMMENT '0 : web | 1 : api',
  `logtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id_message`, `id_user`, `text_message`, `no_hp`, `type`, `status`, `dari`, `logtime`) VALUES
('MSG/01/2017/00001', 'USR00001', 'gil', '089623199126', 1, 2, 1, '2017-01-01 10:13:18'),
('MSG/01/2017/00002', 'USR00001', 'gil', '1235', 1, 0, 0, '2017-01-01 10:13:18'),
('MSG/01/2017/00003', 'USR00001', 'as', '089623199126', 1, 0, 0, '2017-01-01 10:23:05'),
('MSG/01/2017/00004', 'USR00001', 'as', '1235', 2, 2, 0, '2017-01-01 10:23:05'),
('MSG/01/2017/00005', 'USR00001', 'as', '234235', 1, 0, 0, '2017-01-01 10:23:05'),
('MSG/01/2017/00006', 'USR00001', 'abc', '089623199126', 1, 0, 0, '2017-01-01 10:23:44'),
('MSG/01/2017/00007', 'USR00001', 'abc', '1235', 1, 2, 0, '2017-01-01 10:23:44'),
('MSG/01/2017/00008', 'USR00001', 'abc', '234235', 1, 0, 0, '2017-01-01 10:23:44'),
('MSG/01/2017/00009', 'USR00001', 'asd', '089623199126', 1, 0, 0, '2017-01-01 10:24:49'),
('MSG/01/2017/00010', 'USR00001', 'asd', '1235', 1, 0, 0, '2017-01-01 10:24:49'),
('MSG/01/2017/00011', 'USR00001', 'asd', '234235', 1, 0, 0, '2017-01-01 10:24:49'),
('MSG/01/2017/00012', 'USR00001', 'hehe', '123', 0, 0, 1, '2017-01-01 01:22:47'),
('MSG/01/2017/00013', 'USR00001', 'Ragil', '089623199126', 1, 0, 0, '2017-01-01 02:25:00'),
('MSG/01/2017/00014', 'USR00001', 'Ragil', 'as', 1, 0, 0, '2017-01-01 02:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id_user` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usr_api` varchar(25) NOT NULL,
  `pass_api` varchar(25) NOT NULL,
  `logtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`id_credit`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
