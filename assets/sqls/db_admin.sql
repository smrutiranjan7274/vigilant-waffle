-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 09:19 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

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
  `m_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_machine`
--

INSERT INTO `add_machine` (`m_name`, `m_uid`, `m_lat`, `m_long`, `m_desc`, `m_image`) VALUES
('JCB100', 9644, '85.8384', '20.2935', 'ghtds', 'hd-3840x2160-abstract-polygon-13564.jpg'),
('luna k800', 23755, '85.8384', '20.2935', 'faster than your munna!!!', 'tvs-heavydutysuperxl.webp'),
('JCB100', 59308, '85.8384', '20.2935', 'bheri big', '6946828.jpg'),
('New Machine', 62807, '85.8384', '20.2935', 'New mechanics drills thru the core', 'logo.png'),
('Baymax hero 6', 71590, '85.8384', '20.2935', 'Lesgoooo', 'wGVydcScn4XigfG0-mD7CkhlEQ4xryFxBPDYjpB8zuo.webp'),
('gamur da faq', 94451, '85.8384', '20.2935', 'true gamurr', 'smruti.png');

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` int(11) NOT NULL COMMENT 'role_id',
  `role` varchar(255) DEFAULT NULL COMMENT 'role_text'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Editor'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(25) DEFAULT NULL,
  `roleid` tinyint(4) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `username`, `email`, `password`, `mobile`, `roleid`, `isActive`, `created_at`, `updated_at`) VALUES
(7, 'Adarsh', 'turndownforwhat', 'hellophp@gmail.com', '7474d443fd4bcf6b44075ac5761fa065734142c1', '9969697969', 1, 0, '2020-03-12 16:23:01', '2020-03-12 16:23:01'),
(22, 'Alex Panda', 'jodorwhattt', 'jodgamer@yahoo.com', 'cae29ef7d55a230f519bf472eeabd612a1c02ebb', '5421637896', 3, 0, '2022-09-13 18:33:17', '2022-09-13 18:33:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_machine`
--
ALTER TABLE `add_machine`
  ADD UNIQUE KEY `uqid` (`m_uid`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'role_id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
