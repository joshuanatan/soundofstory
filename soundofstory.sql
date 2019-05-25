-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2019 at 04:00 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soundofstory`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(10) UNSIGNED NOT NULL,
  `nama_category` text NOT NULL,
  `description_category` text NOT NULL,
  `id_user_category` int(11) NOT NULL,
  `tgl_submit_category` date NOT NULL,
  `status_category` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `nama_category`, `description_category`, `id_user_category`, `tgl_submit_category`, `status_category`) VALUES
(1, 'Thriller', 'They elicit, giving viewers heightened feelings of suspense, excitement, surprise, anticipation and anxiety', 1, '2019-03-09', 1),
(2, 'Romantic', 'Romance cannot be found in a store, whatever is in the mall isn\'t what you\'re looking for', 1, '2019-03-09', 1),
(3, 'asdf', '', 3, '2019-05-23', 0),
(4, 'Science Fiction e', '', 3, '2019-05-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `comment` text NOT NULL,
  `id_recording` int(11) NOT NULL,
  `tgl_submit_comment` date NOT NULL,
  `status_comment` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_comment`, `id_user`, `comment`, `id_recording`, `tgl_submit_comment`, `status_comment`) VALUES
(1, 1, 'Bagus', 1, '2019-03-10', 1),
(2, 3, 'test', 1, '2019-05-23', 1),
(3, 3, 'test komen chapter 1 pintu kemana saja', 11, '2019-05-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `connection`
--

CREATE TABLE `connection` (
  `id_connection` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_user_2` int(11) NOT NULL,
  `status_connection` tinyint(4) NOT NULL,
  `tgl_submit_connection` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `connection`
--

INSERT INTO `connection` (`id_connection`, `id_user`, `id_user_2`, `status_connection`, `tgl_submit_connection`) VALUES
(1, 1, 2, 1, '2019-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `history_recording`
--

CREATE TABLE `history_recording` (
  `id_history` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_recording` int(11) NOT NULL,
  `tgl_submit_history` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history_recording`
--

INSERT INTO `history_recording` (`id_history`, `id_user`, `id_recording`, `tgl_submit_history`) VALUES
(1, 1, 1, '2019-03-10 00:00:00'),
(2, 3, 12, '2019-05-24 18:19:16'),
(3, 3, 12, '2019-05-24 18:21:20'),
(4, 3, 12, '2019-05-24 18:21:50'),
(5, 3, 12, '2019-05-24 18:21:59'),
(6, 3, 12, '2019-05-24 18:22:11'),
(7, 3, 12, '2019-05-24 18:22:30'),
(8, 3, 12, '2019-05-24 18:22:57'),
(9, 3, 12, '2019-05-24 18:23:09'),
(10, 3, 12, '2019-05-24 18:23:46'),
(11, 3, 12, '2019-05-24 18:24:08'),
(12, 3, 12, '2019-05-24 18:24:16'),
(13, 3, 12, '2019-05-24 18:34:46'),
(14, 3, 12, '2019-05-24 19:03:38'),
(15, 3, 12, '2019-05-24 19:06:26'),
(16, 3, 12, '2019-05-24 19:07:11'),
(17, 3, 12, '2019-05-24 19:07:17'),
(18, 3, 12, '2019-05-24 19:07:18'),
(19, 3, 12, '2019-05-24 19:07:42'),
(20, 3, 12, '2019-05-24 19:08:15'),
(21, 3, 12, '2019-05-24 19:08:25'),
(22, 3, 12, '2019-05-24 19:08:46'),
(23, 3, 11, '2019-05-24 19:08:58'),
(24, 3, 11, '2019-05-24 19:10:36'),
(25, 3, 11, '2019-05-24 19:18:43'),
(26, 3, 11, '2019-05-24 19:18:54'),
(27, 3, 11, '2019-05-24 19:18:56'),
(28, 3, 11, '2019-05-24 19:23:08'),
(29, 3, 11, '2019-05-24 19:24:46'),
(30, 3, 11, '2019-05-24 19:25:16'),
(31, 3, 11, '2019-05-24 19:25:25'),
(32, 3, 11, '2019-05-24 19:25:55'),
(33, 3, 11, '2019-05-24 19:26:04'),
(34, 3, 11, '2019-05-24 19:26:18'),
(35, 3, 11, '2019-05-24 19:26:25'),
(36, 3, 11, '2019-05-24 19:32:46'),
(37, 3, 11, '2019-05-24 19:33:01'),
(38, 3, 11, '2019-05-24 19:33:05'),
(39, 3, 11, '2019-05-24 19:33:30'),
(40, 3, 11, '2019-05-24 19:33:36'),
(41, 3, 11, '2019-05-24 19:33:54'),
(42, 3, 11, '2019-05-24 19:34:15'),
(43, 3, 11, '2019-05-24 19:42:32'),
(44, 3, 11, '2019-05-24 19:42:42'),
(45, 3, 11, '2019-05-24 19:43:05'),
(46, 3, 11, '2019-05-24 19:43:29'),
(47, 3, 12, '2019-05-24 19:44:06'),
(48, 3, 11, '2019-05-24 19:44:29'),
(49, 3, 11, '2019-05-24 19:44:32'),
(50, 3, 11, '2019-05-24 19:44:34'),
(51, 3, 11, '2019-05-24 19:54:40'),
(52, 3, 11, '2019-05-24 19:55:07'),
(53, 3, 11, '2019-05-24 19:55:14'),
(54, 3, 11, '2019-05-24 19:55:31'),
(55, 3, 12, '2019-05-24 19:56:57'),
(56, 3, 12, '2019-05-24 22:52:23'),
(57, 3, 12, '2019-05-24 22:52:24'),
(58, 3, 12, '2019-05-24 22:52:26'),
(59, 3, 12, '2019-05-24 22:52:27'),
(60, 3, 12, '2019-05-24 22:52:27'),
(61, 3, 12, '2019-05-24 22:52:28'),
(62, 3, 12, '2019-05-24 22:52:29'),
(63, 3, 12, '2019-05-24 22:52:30'),
(64, 3, 12, '2019-05-24 22:52:31'),
(65, 3, 12, '2019-05-24 22:52:32'),
(66, 3, 12, '2019-05-24 22:52:33'),
(67, 3, 11, '2019-05-24 22:59:04'),
(68, 3, 11, '2019-05-24 22:59:05'),
(69, 3, 11, '2019-05-24 22:59:06'),
(70, 3, 11, '2019-05-24 22:59:06'),
(71, 3, 11, '2019-05-24 22:59:06'),
(72, 3, 11, '2019-05-24 22:59:07'),
(73, 3, 11, '2019-05-24 23:50:16'),
(74, 3, 11, '2019-05-25 09:00:21');

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE `like` (
  `id_like` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_recording` int(11) NOT NULL,
  `status_like` tinyint(4) NOT NULL,
  `tgl_submit_like` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `like`
--

INSERT INTO `like` (`id_like`, `id_user`, `id_recording`, `status_like`, `tgl_submit_like`) VALUES
(1, 1, 1, 1, '2019-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id_message` int(10) UNSIGNED NOT NULL,
  `konten` text NOT NULL,
  `id_user_dari` int(11) NOT NULL,
  `status_message` tinyint(4) NOT NULL,
  `tgl_submit_message` date NOT NULL,
  `jam_submit_message` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id_message`, `konten`, `id_user_dari`, `status_message`, `tgl_submit_message`, `jam_submit_message`) VALUES
(1, 'Hai', 1, 1, '2019-03-10', '12:24:02'),
(2, 'Apa kabar?', 1, 1, '2019-05-13', '14:28:30'),
(3, 'asddas', 1, 1, '2019-05-13', '13:00:00'),
(4, 'Baik', 2, 1, '2019-05-14', '12:07:12'),
(5, 'Lagi apa?', 1, 1, '2019-05-14', '12:36:23'),
(6, 'Test', 1, 1, '2019-05-14', '12:36:57'),
(7, 'woi', 1, 1, '2019-05-14', '13:14:51'),
(8, 'woi', 1, 1, '2019-05-14', '13:15:03'),
(9, 'HAHHAA', 1, 1, '2019-05-14', '13:17:11'),
(10, 'asdf', 3, 1, '2019-05-24', '00:25:25');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `id_playlist` int(10) UNSIGNED NOT NULL,
  `nama_playlist` text NOT NULL,
  `foto_playlist` text NOT NULL,
  `description_playlist` text NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_playlist` tinyint(4) NOT NULL,
  `tgl_submit_playlist` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`id_playlist`, `nama_playlist`, `foto_playlist`, `description_playlist`, `id_category`, `id_user`, `status_playlist`, `tgl_submit_playlist`) VALUES
(1, 'Pintu ke mana saja', 'product_5.jpg', 'Ada apa di balik pintu?', 1, 1, 1, '2019-03-09'),
(3, 'Nama Playlist', 'logo-ex-7.png', 'asdfasdf', 4, 3, 1, '2019-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `alamat_user` text NOT NULL,
  `description_user` text NOT NULL,
  `tgl_lahir_user` text NOT NULL,
  `profesi_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id_user`, `alamat_user`, `description_user`, `tgl_lahir_user`, `profesi_user`) VALUES
(1, 'Indonesia', 'Ganteng', '1990-04-03', 'Writer'),
(2, 'Tangerang', 'WOW', '1998-05-01', 'CEO'),
(3, 'Jakarta', 'AHAHA', '1970-01-01', 'Developer');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_recording` int(11) NOT NULL,
  `jumlah_rating` int(11) NOT NULL,
  `status_rating` tinyint(4) NOT NULL,
  `tgl_submit_rating` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id_rating`, `id_user`, `id_recording`, `jumlah_rating`, `status_rating`, `tgl_submit_rating`) VALUES
(1, 1, 1, 1, 1, '2019-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `recording`
--

CREATE TABLE `recording` (
  `id_recording` int(10) UNSIGNED NOT NULL,
  `judul_recording` text NOT NULL,
  `file_recording` text NOT NULL,
  `foto_recording` text NOT NULL,
  `description_recording` text NOT NULL,
  `duration_recording` time NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_recording` tinyint(4) NOT NULL,
  `tgl_submit_recording` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recording`
--

INSERT INTO `recording` (`id_recording`, `judul_recording`, `file_recording`, `foto_recording`, `description_recording`, `duration_recording`, `id_user`, `status_recording`, `tgl_submit_recording`) VALUES
(11, 'testupload', 'Sia_-_Bird_Set_Free_(Lyrics).mp3', '600px-Ski_trail_rating_symbol-blue_square.svg.png', 'testttt', '00:04:11', 3, 1, '2019-05-24'),
(12, 'test2', 'Dusk_Till_Dawn_-_ZAYN_ft._Sia_(Lyrics).mp3', 'beats.png', 'test3', '00:04:27', 3, 1, '2019-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `recording_playlist`
--

CREATE TABLE `recording_playlist` (
  `id_recording_playlist` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_recording` int(11) NOT NULL,
  `id_playlist` int(11) NOT NULL,
  `chapter_playlist` int(11) NOT NULL,
  `status_playlist` tinyint(4) NOT NULL,
  `tgl_submit_playlist` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recording_playlist`
--

INSERT INTO `recording_playlist` (`id_recording_playlist`, `id_user`, `id_recording`, `id_playlist`, `chapter_playlist`, `status_playlist`, `tgl_submit_playlist`) VALUES
(12, 3, 11, 1, 1, 1, '2019-05-24'),
(13, 3, 12, 3, 1, 1, '2019-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id_comment` int(10) UNSIGNED NOT NULL,
  `id_user_pelapor` int(11) NOT NULL,
  `tgl_submit_report` date NOT NULL,
  `status_report` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id_comment`, `id_user_pelapor`, `tgl_submit_report`, `status_report`) VALUES
(1, 1, '2019-03-10', 1),
(2, 3, '2019-05-23', 1),
(3, 3, '2019-05-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `nama_user` text NOT NULL,
  `password_user` text NOT NULL,
  `gender_user` tinyint(4) NOT NULL,
  `email_user` text NOT NULL,
  `nohp_user` text NOT NULL,
  `foto_profile_user` varchar(400) NOT NULL DEFAULT 'default.jpg',
  `status_user` tinyint(4) NOT NULL DEFAULT '1',
  `tgl_submit_user` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `password_user`, `gender_user`, `email_user`, `nohp_user`, `foto_profile_user`, `status_user`, `tgl_submit_user`) VALUES
(1, 'James', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'james@gmail.com', '08123456789', 'default.jpg', 0, '2019-03-09'),
(2, 'Jovan', 'b59c6e9b344bae1a36fe427a42889265', 1, 'hidayatjovan@gmail.com', '081234567890', 'default.jpg', 1, '2019-05-07'),
(3, 'Joshua', 'd1133275ee2118be63a577af759fc052', 1, 'joshuanatan@gmail.com', '081234567899', 'default.jpg', 1, '2019-05-17'),
(4, 'Joshua natan', '123456', 0, 'joshuanatan98@gmail.com', '0983493840', 'default.jpg', 1, '2019-05-21'),
(5, 'Joshua Natan', 'e10adc3949ba59abbe56e057f20f883e', 0, 'joshuanatan.jN@gmail.com', '89349348390', 'default.jpg', 1, '2019-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `user_recording`
--

CREATE TABLE `user_recording` (
  `id_user_recording` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_recording` int(11) NOT NULL,
  `tgl_user_recording` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_recording`
--

INSERT INTO `user_recording` (`id_user_recording`, `id_user`, `id_recording`, `tgl_user_recording`) VALUES
(1, 1, 1, '2019-05-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `connection`
--
ALTER TABLE `connection`
  ADD PRIMARY KEY (`id_connection`);

--
-- Indexes for table `history_recording`
--
ALTER TABLE `history_recording`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`id_like`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id_playlist`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`);

--
-- Indexes for table `recording`
--
ALTER TABLE `recording`
  ADD PRIMARY KEY (`id_recording`);

--
-- Indexes for table `recording_playlist`
--
ALTER TABLE `recording_playlist`
  ADD PRIMARY KEY (`id_recording_playlist`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_recording`
--
ALTER TABLE `user_recording`
  ADD PRIMARY KEY (`id_user_recording`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `connection`
--
ALTER TABLE `connection`
  MODIFY `id_connection` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history_recording`
--
ALTER TABLE `history_recording`
  MODIFY `id_history` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
  MODIFY `id_like` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id_playlist` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recording`
--
ALTER TABLE `recording`
  MODIFY `id_recording` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `recording_playlist`
--
ALTER TABLE `recording_playlist`
  MODIFY `id_recording_playlist` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id_comment` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_recording`
--
ALTER TABLE `user_recording`
  MODIFY `id_user_recording` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
