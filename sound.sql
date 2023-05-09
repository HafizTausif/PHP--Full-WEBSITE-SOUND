-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 12:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sound`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `Artist_id` int(11) NOT NULL,
  `Artist_name` varchar(100) NOT NULL,
  `Artist_age` varchar(100) NOT NULL,
  `Artist_info` varchar(250) NOT NULL,
  `Artist_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`Artist_id`, `Artist_name`, `Artist_age`, `Artist_info`, `Artist_img`) VALUES
(1, 'Weekend', '30', 'An artist is a person engaged in an activity related to creating art, practicing the arts, or demonstrating an art. The common usage in both everyday speech and academic discourse refers to a practitioner in the visual arts only', '05.jpg'),
(2, 'Alan Walker', '23', 'An artist is a person engaged in an activity related to creating art, practicing the arts, or demonstrating an art. The common usage in both everyday speech and academic discourse refers to a practitioner in the visual arts only', 'download (1).jpg'),
(3, 'Zayn', '32', 'An artist is a person engaged in an activity related to creating art, practicing the arts, or demonstrating an art. The common usage in both everyday speech and academic discourse refers to a practitioner in the visual arts only', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `song_id` varchar(111) NOT NULL,
  `user_id` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `product_id` int(11) NOT NULL,
  `rater_name` varchar(222) NOT NULL,
  `rating_value` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`product_id`, `rater_name`, `rating_value`) VALUES
(123, 'were', '4');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `song_id` int(11) NOT NULL,
  `review_title` varchar(222) NOT NULL,
  `review_text` varchar(222) NOT NULL,
  `review_rating` varchar(222) NOT NULL,
  `reviewer_name` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `song_id`, `review_title`, `review_text`, `review_rating`, `reviewer_name`) VALUES
(1, 18, 'wwd', 'dsdsdsdsds', '4', 'grgr'),
(2, 18, 'dasdsa', 'dasdasda', '4', 'hamza'),
(3, 18, 'Nicee ', 'This Song Is Something Else!!!!!', '4', 'hamza'),
(4, 18, 'Nicee ', 'This Song Is lIt', '2', 'hamza'),
(5, 19, 'Broo', 'This Song Is Something Else!!!!!', '5', 'hamza');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `song_name` varchar(100) NOT NULL,
  `artist_name` varchar(100) NOT NULL,
  `song_img` varchar(100) NOT NULL,
  `song` varchar(100) NOT NULL,
  `song_Info` varchar(255) NOT NULL,
  `Artist_id` int(11) NOT NULL,
  `Year` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `song_name`, `artist_name`, `song_img`, `song`, `song_Info`, `Artist_id`, `Year`) VALUES
(18, 'Blinding Lights', 'Weekend', 'music-event-poster-template-with-colorful-shapes_1361-1591.webp', 'mixkit-sun-and-his-daughter-580.mp3', 'POP', 1, '2005'),
(19, 'Alone', 'Alan Walker', 'modern-music-event-poster-template_1361-1292.webp', 'mixkit-sun-and-his-daughter-580.mp3', 'Reverb', 2, '2010'),
(20, 'Dust Till Dawn', 'Zayn', '6CgYZM.jpg', 'mixkit-sun-and-his-daughter-580.mp3', 'POP', 3, '2016'),
(25, 'Hills', ' Weekend', '13.jpg', 'mixkit-sun-and-his-daughter-580.mp3', 'Rap', 1, '2010'),
(26, 'luv', ' 3', 'music-event-poster-template-with-colorful-shapes_1361-1591.webp', 'mixkit-sun-and-his-daughter-580.mp3', 'reverb', 3, '2019'),
(33, 'Hills', ' 1', 'download (1).jpg', '11.jpg', 'Rap', 1, '2010');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Cpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Username`, `Email`, `Password`, `Cpassword`) VALUES
(2, 'hamza', 'hamza@gmail.com', '123', '123'),
(3, 'bashirlakho0322@gmail.com', 'muhammadhassaansheikh@gmail.com', '123', '123'),
(4, 'hamza', 'hamza@gmail.com', '321', '321'),
(5, 'hamza', 'hamza@gmail.com', '321', '321'),
(6, 'hamza', 'hamza@gmail.com', '321', '321'),
(7, 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `youtube_id` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `youtube_id`) VALUES
(1, 'CQQXmEBKpuU'),
(2, 'q-onUzS-VAQ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`Artist_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Artist_id` (`Artist_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `Artist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_ibfk_1` FOREIGN KEY (`Artist_id`) REFERENCES `artist` (`Artist_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
