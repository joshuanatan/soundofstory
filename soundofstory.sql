-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 01:00 PM
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
(1, 'aaaaaaaaaaaaaa', '', 7, '2019-05-25', 0),
(2, 'Thriller', '', 6, '2019-06-25', 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `question_faq` text NOT NULL,
  `answer_faq` text NOT NULL,
  `status_faq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id_faq`, `question_faq`, `answer_faq`, `status_faq`) VALUES
(1, 'What is Sound of Story today ?', 'Sound of story is a platform for listening stories and songs', 0);

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
(1, 6, 2, '2019-06-25 08:19:05'),
(2, 6, 2, '2019-06-25 08:19:20'),
(3, 6, 2, '2019-06-25 08:19:26');

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

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `sumber_message` varchar(200) NOT NULL COMMENT 'buddy/ask',
  `subject` varchar(200) NOT NULL,
  `konten` text NOT NULL,
  `id_user_add` int(11) NOT NULL,
  `status_message` int(11) NOT NULL,
  `tgl_message_add` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `sumber_message`, `subject`, `konten`, `id_user_add`, `status_message`, `tgl_message_add`) VALUES
(1, 'BUDDY', 'Story Teller Applicants', 'Halo saya punya hobby ', 6, 0, '2019-06-25 10:34:39'),
(2, 'ASK', 'subject', 'message for us', 6, 0, '2019-06-25 10:42:54'),
(3, 'BUDDY', 'Audio Experts Applicants', 'Mau jadi audio expert\r\npunya s1 di audio management', 6, 0, '2019-06-25 11:39:00'),
(4, 'ASK', 'test message', 'mau tanya dong\r\nbelom ada di faq nih', 6, 0, '2019-06-25 11:39:31');

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
(1, 'bbbbbbbbbbbbbbeeeeeeeee', 'Miza_Adam_Sky_Gummy_Kid_-_Escape_From_You.mp3', 'eeeeeeeeeeeeeeee', 1, 7, 0, '2019-05-25'),
(2, 'The Danger Solomon', 'logo-ex-7.png', 'Somehow is Terrfying', 2, 6, 1, '2019-06-25'),
(3, 'Danger Solomon 2', 'logo-ex-7.png', 'Wrong Promise', 2, 6, 1, '2019-06-25');

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
(0, '-', '-', '', ''),
(6, '-', '-', '', ''),
(10, '-', '-', '', ''),
(11, '-', '-', '', ''),
(12, '-', '-', '', ''),
(13, '-', '-', '', ''),
(14, '-', '-', '', ''),
(15, '-', '-', '', '');

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
(1, 'awefawefeeeeeeeeeeeeeeeeeeeeee', 'Imagine_Dragons_-_Whatever_It_Takes_(Lyrics_Lyric_Video).mp3', 'beats.png', 'efawefawe', '00:03:22', 7, 0, '2019-05-25'),
(2, 'Part 1', 'Alan_Walker_‒_On_My_Way_(Lyrics)_ft._Sabrina_Carpenter_Farruko.mp3', '600px-Ski_trail_rating_symbol-blue_square.svg.png', 'Test Description', '00:03:14', 6, 1, '2019-06-25');

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
(1, 6, 2, 2, 1, 1, '2019-06-25');

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
  `role` int(11) NOT NULL DEFAULT '0',
  `premium` int(11) NOT NULL DEFAULT '0',
  `tgl_submit_user` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `password_user`, `gender_user`, `email_user`, `nohp_user`, `foto_profile_user`, `status_user`, `role`, `premium`, `tgl_submit_user`) VALUES
(6, 'Joshua Natan', '523c2c2940a37fb651b7a19b68149e0b', 1, 'joshuanatan.jn@gmail.com', '089616961915', 'default.jpg', 1, 1, 1, '2019-05-25'),
(7, 'Christina', 'e10adc3949ba59abbe56e057f20f883e', 2, 'cfmandagi@gmail.com', '087808780878', 'default.jpg', 1, 1, 1, '2019-05-25'),
(16, 'salsabila ghina', 'cd044665afafc9e1c137cd7d9c66dd54', 0, 'salsaghin@yahoo.com', '081224063635', 'default.jpg', 1, 0, 1, '2019-05-25'),
(20, 'testautoadmin', 'e10adc3949ba59abbe56e057f20f883e', 1, 'joshuanatanee.jn@gmail.com', '12345', 'logo-ex-7.png', 1, 1, 1, '2019-05-26'),
(21, 'jojo', 'e10adc3949ba59abbe56e057f20f883e', 1, 'jo@gmail.com', '12345', 'default.jpg', 1, 1, 1, '2019-05-26'),
(22, 'magnolia', 'c70816b536977188c84face071d0f115', 0, 'chlvnov@gmail.com', '081342938100', 'defaultprofile.png', 1, 0, 0, '2019-05-29');

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
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

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
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

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
  MODIFY `id_comment` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `connection`
--
ALTER TABLE `connection`
  MODIFY `id_connection` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history_recording`
--
ALTER TABLE `history_recording`
  MODIFY `id_history` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
  MODIFY `id_like` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id_playlist` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recording`
--
ALTER TABLE `recording`
  MODIFY `id_recording` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recording_playlist`
--
ALTER TABLE `recording_playlist`
  MODIFY `id_recording_playlist` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id_comment` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_recording`
--
ALTER TABLE `user_recording`
  MODIFY `id_user_recording` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
