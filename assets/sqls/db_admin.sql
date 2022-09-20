-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 07:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_machine`
--

CREATE TABLE `add_machine` (
  `m_name` varchar(25) NOT NULL,
  `m_uid` int(5) NOT NULL,
  `m_lat` decimal(19,4) NOT NULL,
  `m_long` decimal(19,4) NOT NULL,
  `m_desc` varchar(100) NOT NULL,
  `m_image` varchar(100) NOT NULL,
  `m_qrcode` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_machine`
--

INSERT INTO `add_machine` (`m_name`, `m_uid`, `m_lat`, `m_long`, `m_desc`, `m_image`, `m_qrcode`) VALUES
('Sub Machine Gun', 42083, '85.8384', '20.2935', 'a short and rapid firing gun', 'logo.png', 'https://chart.googleapis.com/chart?cht=qr&chs=500x500&chl=42083'),
('Machine Train', 50839, '85.8369', '20.2876', 'Bakes cakes over the oven! Fast mode of transport!', 'machine_640.jpg', 'https://chart.googleapis.com/chart?cht=qr&chs=500x500&chl=50839'),
('Tuning Machine', 51414, '85.8369', '20.2876', 'Used for tuning various stuffs!', 'tuning_640.jpg', 'https://chart.googleapis.com/chart?cht=qr&chs=500x500&chl=51414'),
('Harley Davidson', 65222, '85.8384', '20.2935', 'retro bike with a great look and feel!', 'harley-davidson_640.jpg', 'https://chart.googleapis.com/chart?cht=qr&chs=500x500&chl=65222'),
('Last Moment Hustle', 78288, '85.8384', '20.2935', 'Keyboard with new functions and mechanics to conquer in valorant!', 'Screenshot_20200122-163932.png', 'https://chart.googleapis.com/chart?cht=qr&chs=500x500&chl=78288'),
('Gg', 85425, '85.8384', '20.2935', 'Please', 'RadhesHome.png', 'https://chart.googleapis.com/chart?cht=qr&chs=500x500&chl=85425'),
('Automatic Boat', 98215, '85.8384', '20.2935', 'The all new auto sailing boat with new features', 'game.png', 'https://chart.googleapis.com/chart?cht=qr&chs=500x500&chl=98215'),
('Macro Machine', 99533, '85.8369', '20.2876', 'Dont know much about the description for this machine', 'macro_640.jpg', 'https://chart.googleapis.com/chart?cht=qr&chs=500x500&chl=99533');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `c_uid` int(5) NOT NULL,
  `c_desc` varchar(300) NOT NULL,
  `c_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`c_uid`, `c_desc`, `c_status`) VALUES
(42083, 'not working as described on the description !', 0),
(50839, 'Definitely cant bake cakes! and please fix the description asap!', 1),
(65222, 'engine needs servicing and not running properly', 0),
(85425, 'wrong description provided! not functioning properly!', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `uid` varchar(25) NOT NULL,
  `pwd` varchar(25) NOT NULL,
  `role` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`uid`, `pwd`, `role`) VALUES
('Admin', 'Admin@123', 'ADMIN'),
('User', 'User@123', 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_machine`
--
ALTER TABLE `add_machine`
  ADD PRIMARY KEY (`m_uid`),
  ADD UNIQUE KEY `m_uid` (`m_uid`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`c_uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
