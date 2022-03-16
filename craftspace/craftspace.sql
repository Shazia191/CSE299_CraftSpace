-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 05:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `craftspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(800) NOT NULL,
  `thumbnail` varchar(300) NOT NULL,
  `video` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `title`, `description`, `thumbnail`, `video`) VALUES
(1, 'cngcbn', 'kjsrfjh tshgn ghshsgfn', '58c4889ef064a5bbfe5c6d5a81f5ca1e.jpg', '2022-03-05 22-25-45.mkv'),
(2, 'sgfb f', 'dhsgn sethsgdn ehbsgnb', '58c4889ef064a5bbfe5c6d5a81f5ca1e.jpg', '2022-03-05 22-25-45.mkv'),
(3, 'lorem', 'lorem ipsum dolores', '3793.jpg', '2022-03-05 22-25-45.mkv'),
(4, 'lorem', 'lorem ipsum dolores', '3793.jpg', '2022-03-05 22-25-45.mkv'),
(5, 'thsdh', 'dfbazbhaebae', '3793.jpg', '2022-03-05 22-25-45.mkv'),
(6, 'thsdh', 'dfbazbhaebae', '3793.jpg', '2022-03-05 22-25-45.mkv'),
(7, 'gbxb', 'dfdbdbf', '3793.jpg', '2022-03-05 22-25-45.mkv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
