-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2019 at 03:54 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

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
  `id_user_category` int(11) NOT NULL,
  `tgl_submit_category` date NOT NULL,
  `status_category` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `nama_category`, `id_user_category`, `tgl_submit_category`, `status_category`) VALUES
(1, 'Thriller', 1, '2019-03-09', 1),
(2, 'Romantic', 1, '2019-03-09', 1);

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
(1, 1, 'Bagus', 1, '2019-03-10', 1);

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
  `status_history` tinyint(4) NOT NULL,
  `tgl_submit_history` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history_recording`
--

INSERT INTO `history_recording` (`id_history`, `id_user`, `id_recording`, `status_history`, `tgl_submit_history`) VALUES
(1, 1, 1, 1, '2019-03-10');

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
  `id_user_tujuan` int(11) NOT NULL,
  `status_message` tinyint(4) NOT NULL,
  `tgl_submit_message` date NOT NULL,
  `jam_submit_message` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id_message`, `konten`, `id_user_dari`, `id_user_tujuan`, `status_message`, `tgl_submit_message`, `jam_submit_message`) VALUES
(1, 'Hai', 1, 2, 1, '2019-03-10', '12:24:02');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `id_playlist` int(10) UNSIGNED NOT NULL,
  `nama_playlist` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_playlist` tinyint(4) NOT NULL,
  `tgl_submit_playlist` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`id_playlist`, `nama_playlist`, `id_user`, `status_playlist`, `tgl_submit_playlist`) VALUES
(1, 'Favorite', 1, 1, '2019-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `alamat_user` text NOT NULL,
  `description_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id_user`, `alamat_user`, `description_user`) VALUES
(0, 'Indonesia', 'Ganteng');

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
(1, 1, 1, 2, 1, '2019-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `recording`
--

CREATE TABLE `recording` (
  `id_recording` int(10) UNSIGNED NOT NULL,
  `judul_recording` text NOT NULL,
  `file_recording` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `status_recording` tinyint(4) NOT NULL,
  `tgl_submit_recording` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recording`
--

INSERT INTO `recording` (`id_recording`, `judul_recording`, `file_recording`, `id_user`, `id_category`, `status_recording`, `tgl_submit_recording`) VALUES
(1, 'Kangen', 'epic-desktop-wallpapers-4.jpg', 1, 2, 1, '2019-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `recording_playlist`
--

CREATE TABLE `recording_playlist` (
  `id_recording_playlist` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_recording` int(11) NOT NULL,
  `id_playlist` int(11) NOT NULL,
  `status_playlist` tinyint(4) NOT NULL,
  `tgl_submit_playlist` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recording_playlist`
--

INSERT INTO `recording_playlist` (`id_recording_playlist`, `id_user`, `id_recording`, `id_playlist`, `status_playlist`, `tgl_submit_playlist`) VALUES
(1, 1, 1, 1, 1, '2019-03-09');

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
(1, 1, '2019-03-10', 1);

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
  `foto_profile_user` text NOT NULL,
  `status_user` tinyint(4) NOT NULL,
  `tgl_submit_user` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `password_user`, `gender_user`, `email_user`, `nohp_user`, `foto_profile_user`, `status_user`, `tgl_submit_user`) VALUES
(1, 'James James', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'james@gmail.com', '08123456789', 'James.jpg', 1, '2019-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `user_recording`
--

CREATE TABLE `user_recording` (
  `id_user_recording` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_recording`
--

INSERT INTO `user_recording` (`id_user_recording`, `id_user`) VALUES
(1, 1);

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
  MODIFY `id_category` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `connection`
--
ALTER TABLE `connection`
  MODIFY `id_connection` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history_recording`
--
ALTER TABLE `history_recording`
  MODIFY `id_history` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
  MODIFY `id_like` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id_playlist` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recording`
--
ALTER TABLE `recording`
  MODIFY `id_recording` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recording_playlist`
--
ALTER TABLE `recording_playlist`
  MODIFY `id_recording_playlist` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id_comment` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_recording`
--
ALTER TABLE `user_recording`
  MODIFY `id_user_recording` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
