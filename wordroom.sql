-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 26, 2020 at 12:30 AM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.2.24-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wordroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(6) NOT NULL,
  `body` text,
  `media_url` varchar(255) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `post_type` varchar(255) NOT NULL,
  `published` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `body`, `media_url`, `title`, `post_type`, `published`, `created_at`) VALUES
(3, 'adssdbdsffesbjdsfjlkalfbsdajfbvljkfbjlsvlbsdjvbdslkvbafsdghbiuasobvcdasc', 'public/images/images.jpeg', 'Post 1', 'text', NULL, '2020-01-21 16:03:58'),
(4, 'text in here describing the post or sort of text either related to the post or not but made by the admin. * i should create more pages like a readmore pages linked to the post if its made with large number of text contexnts or so. media download can be handled here', 'public/images/images.jpeg', 'NULL', 'text', NULL, '2020-01-23 22:25:57'),
(6, 'text in here describing the post or sort of text either related to the post or not but made by the admin. * i should create more pages like a readmore pages linked to the post if its made with large number of text contexnts or so. media download can be handled here', 'public/audios/08120492076_20150102081003.wav', 'NULL', 'audio', NULL, '2020-01-23 22:38:03'),
(7, 'text in here describing the post or sort of text either related to the post or not but made by the admin. * i should create more pages like a readmore pages linked to the post if its made with large number of text contexnts or so. media download can be handled here', 'public/images/(1).mp4', 'NULL', 'text', NULL, '2020-01-25 06:09:50'),
(8, 'acascccccccdcccccccccccccccccdccsacascsacscdcsadcdascasc', 'public/videos/(2).mp4', 'NULL', 'video', NULL, '2020-01-25 06:21:49'),
(9, 'acascccccccdcccccccccccccccccdccsacascsacscdcsadcdascasc', 'public/videos/(2).mp4', 'NULL', 'video', NULL, '2020-01-25 06:33:50'),
(10, 'wfsfhcdfshfvfsdjsdufgewyasdvshdvcsdhvcdscdsccdscdsc', 'public/audios/B C S Farewell Day Blessings.mp3', 'NULL', 'audio', NULL, '2020-01-25 06:55:57'),
(11, 'fewaffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffsssddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'public/audios/Ruggedman-Fvck-You-Cover.mp3', 'NULL', 'audio', NULL, '2020-01-25 07:03:20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `usenrname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `logged_in` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `usenrname`, `email`, `password`, `logged_in`) VALUES
(1, 'celestine', 'example@gmail.com', '$2y$10$TwEjLNO4ieD3goy3A9eB6.XN0On0bsOg8aHwDnLcgqOOGKfmduQsa', NULL),
(2, 'eminence', 'eminence@email.com', 'eminence', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
