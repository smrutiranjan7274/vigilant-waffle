-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 09:18 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_machine`
--
ALTER TABLE `add_machine`
  ADD UNIQUE KEY `uqid` (`m_uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
