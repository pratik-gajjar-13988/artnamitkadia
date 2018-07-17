-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2018 at 09:02 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `art_gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `full_nm` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_nm`, `username`, `password`) VALUES
(5, 'namrata gajjar', 'admin@gmail.com', 'admin@123'),
(6, '', '', '$2y$10$EjeJv.BUhYv8RsVHC8.wP.hziefY6ZWYdU/kkOzp2Qqfnh2CNr65u');

-- --------------------------------------------------------

--
-- Table structure for table `art_items`
--

CREATE TABLE `art_items` (
  `item_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `source` varchar(400) NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `new_flag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `art_items`
--

INSERT INTO `art_items` (`item_id`, `name`, `source`, `price`, `category`, `description`, `new_flag`) VALUES
(11, 'City112', 'images/DSC_9269.jpg', 30000, 'water', '', 0),
(14, 'Sea Boat', 'images/DSC_9267.jpg', 3000, 'water', '',0),
(15, 'Ganga River', 'images/water_ganga.jpg', 4500, 'water', '',0),
(16, 'wedding', 'images/../images/DSC_9278.jpg', 2000, 'photo', '',0),
(17, 'test', 'images/../images/DSC_9272.jpg', 30000, 'acrylic', '',0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `address` text NOT NULL,
  `phone` bigint(12) NOT NULL,
  `email` varchar(150) NOT NULL,
  `time` varchar(150) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`address`, `phone`, `email`, `time`, `uid`) VALUES
('G-27 Parth Avenue, Opp. Nalanda School, Ghatlodia, Ahmedabad-380061  Gujarat State, India.', 9825055807, 'nkadia09@gmail.co.in', 'Monday - Friday: 9:00 AM to 6:00 PM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `img_nm` varchar(50) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `img_nm`, `path`) VALUES
(9, 'Penguins.jpg', 'images/SliderPenguins.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `uid` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `insta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`uid`, `facebook`, `twitter`, `linkedin`, `insta`) VALUES
(1, 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.linkedln.com/', 'https://www.instagram.com/');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `add1` varchar(100) NOT NULL,
  `add2` varchar(100) NOT NULL,
  `add3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`fname`, `lname`, `gender`, `contact`, `email`, `password`, `add1`, `add2`, `add3`) VALUES
('', '', 'Male', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '	', '	', '	'),
('pratik', 'gajjar', 'Male', '9909102385', 'pratikgajjar139@gmail.com', '5598d1b067fdfcef075bac3e1a7e28fd', '	yogeshwar homes', '	new ranip', '	ahmedabad'),
('test', 'test', 'Male', '1234567890', 'test@mail.com', '098f6bcd4621d373cade4e832627b4f6', '	ad1', '	ad2', '	ad3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `art_items`
--
ALTER TABLE `art_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `art_items`
--
ALTER TABLE `art_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
