-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 10:35 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `photo_id`, `author`, `body`) VALUES
(1, 25, 'Chokri hamza', 'good picture thank you');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(255) NOT NULL,
  `alternate_text` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `title`, `caption`, `description`, `filename`, `alternate_text`, `type`, `size`) VALUES
(24, 'fgdfg', 'ghfghf', '          fghfgh', 'images-5.jpg', 'fghfgh', 'image/jpeg', 33192),
(25, 'Puzzle universe ', '', '', 'images-4.jpg', '', 'image/jpeg', 23270),
(27, 'fghfgh', '', '', 'images-38.jpg', '', 'image/jpeg', 21857),
(28, 'car4', '', '', 'images-20.jpg', '', 'image/jpeg', 22942),
(29, 'car5', '', '', 'images-19.jpg', '', 'image/jpeg', 22792),
(30, 'Puzzle universe ', '', '', 'images-42.jpg', '', 'image/jpeg', 22401);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `user_image`) VALUES
(29, 'samiAli', 'dfghgdfhg', 'sami', 'dfgdfg', 'images-4.jpg'),
(31, 'fghfgh', 'fhghfgh', 'fghfgh', 'fghfgh', 'images-26.jpg'),
(32, 'ryrty', 'rtyrt', 'rtyrt', 'rtyr', 'images-6.jpg'),
(36, 'bbb', 'bbb', 'bbb', 'bbb', 'image-1.jpg'),
(37, 'fghfgh', 'fhghfgh', 'fghfgh', 'fghfgh', 'images-34.jpg'),
(38, '', '', '', '', 'images-38.jpg'),
(39, '', '', '', '', 'images-19.jpg'),
(40, '', '', '', '', 'images-42.jpg'),
(41, '', '', '', '', 'images-19.jpg'),
(42, '', '', '', '', 'images-42.jpg'),
(44, '', '', '', '', 'images-20.jpg'),
(45, '', '', '', '', 'images-42.jpg'),
(46, '', '', '', '', 'images-4.jpg'),
(47, '', '', '', '', 'images-20.jpg'),
(48, '', '', '', '', 'images-5.jpg'),
(49, '', '', '', '', 'images-38.jpg'),
(50, '', '', '', '', 'images-38.jpg'),
(51, '', '', '', '', 'images-5.jpg'),
(52, '', '', '', '', 'images-20.jpg'),
(53, '', '', '', '', 'images-5.jpg'),
(54, '', '', '', '', ''),
(55, '', '', '', '', ''),
(56, '', '', '', '', ''),
(57, '', '', '', '', ''),
(58, '', '', '', '', ''),
(59, '', '', '', '', ''),
(60, '', '', '', '', ''),
(61, '', '', '', '', ''),
(62, 'alex', 'alex', 'alex', 'alex', '_large_image_2.jpg'),
(63, 'alex', 'alex', 'alex', 'alex', '_large_image_2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photo_id` (`photo_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
