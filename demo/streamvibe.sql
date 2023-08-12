-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2023 at 12:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `streamvibe`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `artist_name` varchar(100) NOT NULL,
  `song_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `artist_name`, `song_name`) VALUES
(1, 'Darshan ', 'Meherema');

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `id` int(11) NOT NULL,
  `song_name` varchar(100) NOT NULL,
  `audio` varchar(500) NOT NULL,
  `singer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`id`, `song_name`, `audio`, `singer`) VALUES
(9, 'ankho se btanna', 'audio/Aankhon Se Batana  Lyrics   Dikshant #AankhonSeBatana #lyrics.mp3', 'dikshant'),
(10, 'ankho se btanna', 'audio/Aankhon Se Batana  Lyrics   Dikshant #AankhonSeBatana #lyrics.mp3', 'dikshant'),
(11, 'ankho se btanna', 'audio/Aankhon Se Batana  Lyrics   Dikshant #AankhonSeBatana #lyrics.mp3', 'dikshant'),
(12, 'ankho se btanna', 'audio/Aankhon Se Batana  Lyrics   Dikshant #AankhonSeBatana #lyrics.mp3', 'dikshant'),
(13, 'aswdfg', 'audio/Aram Ata Hai Deedar Se Tere   Azan Sami Ik Lamha Aaram Ata Hai Dedar Se Tere Full Song.mp3', 'asd'),
(14, 'aswdfg', 'audio/Aram Ata Hai Deedar Se Tere   Azan Sami Ik Lamha Aaram Ata Hai Dedar Se Tere Full Song.mp3', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `contact` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `contact`, `address`, `message`) VALUES
(1, '[asma]', '[asma@gmail.com]', 0, '[korangi]', '[hi]');

-- --------------------------------------------------------

--
-- Table structure for table `feature_artist`
--

CREATE TABLE `feature_artist` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feature_artist`
--

INSERT INTO `feature_artist` (`id`, `Name`, `Image`) VALUES
(1, 'Arebic Luna', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `imageadd`
--

CREATE TABLE `imageadd` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imageadd`
--

INSERT INTO `imageadd` (`id`, `Name`, `Image`) VALUES
(3, 'arijit songs', 'Arijit-songs.png'),
(4, 'Arman songs', 'arman-songs.png'),
(5, 'Asim Azhar songs', 'Asim-songs.png'),
(6, 'Atif Aslam songs', 'Atifaslam-songs.png'),
(7, 'Bilal Saeed songs', 'bila-Saeed-songs.png'),
(8, 'Boywood  songs', 'bolywood-songs.png'),
(9, 'Dhanvi  songs', 'dhanvi-songs.png'),
(10, 'Jubin  songs', 'jubin-songs.png'),
(11, 'Momina Mustehsm  songs', 'momina-songs.png'),
(12, 'Neha Kakkar  songs', 'neha-songs.png'),
(13, 'Old  songs', 'old Songs.png'),
(14, 'Rimix  songs', 'Rimix.png'),
(15, 'Rock  songs', 'rock.png'),
(16, 'Romantic songs', 'romantic-Songs.png'),
(17, 'Sheriya Ghosla songs', 'sheriya-songs.png'),
(18, 'Sufi songs', 'Sufi.png'),
(19, 'Tony Kakkar songs', 'tony-songs.png');

-- --------------------------------------------------------

--
-- Table structure for table `paylist`
--

CREATE TABLE `paylist` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paylist`
--

INSERT INTO `paylist` (`id`, `Name`, `Image`) VALUES
(1, 'Romantic Songs', '4.jpg'),
(2, 'Romantic', '4.jpg'),
(3, 'Gym', '5.jpg'),
(4, 'Retro Special', '6.jpg'),
(5, 'Solo music', '3.jpg'),
(6, 'Rock band', '2.jpg'),
(7, 'DJ rimix', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` text NOT NULL,
  `specification` text NOT NULL,
  `paymentPage` text NOT NULL,
  `interval` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `name`, `price`, `specification`, `paymentPage`, `interval`) VALUES
(1, 'Free <span class=\"text-warning\">Trial</span>', '0', 'Your Free Trial subscription plan will terminate in 10 days, kindly select your plan.', 'home.php', '10 Days'),
(2, 'Ads <span class=\"text-warning\">Free</span>', '40', 'Access all free songs and app features <br> <br> No Ads between songs', 'basic.php', 'yearly'),
(3, 'Premium', '60', 'Access all free songs and app features <br> <br> No Ads between songs <br> <br> Create playlist & access analytics <br> <br> Listen paid song once & purchase', 'premium.php', 'yearly');

-- --------------------------------------------------------

--
-- Table structure for table `slider_add`
--

CREATE TABLE `slider_add` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `paragraph` varchar(50) NOT NULL,
  `Image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider_add`
--

INSERT INTO `slider_add` (`id`, `Name`, `paragraph`, `Image`) VALUES
(2, 'did it youway (female)', '3.jpg', 'Zunira Willy & Nutty Nin'),
(3, 'Shack your butty', '2.jpg', 'Gerrina Linda'),
(4, 'Did it You way (female)', '3.jpg', 'Zunira Willy & Nutty Nina'),
(5, 'Say yes', '4.jpg', 'Johnny Marro'),
(6, 'Where is your letter', '5.jpg', 'Jina Moore & Lenisa Gory'),
(7, 'Hey not me', '6.jpg', 'Rasomi Pelina');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `artist` varchar(500) NOT NULL,
  `audio_url` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `title`, `artist`, `audio_url`) VALUES
(1, 'song1', 'arijit', 'audio/128-Jee Rahe The Hum (Falling in Love) - Kisi Ka Bhai Kisi Ki Jaan 128 Kbps.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `useradmin` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `useradmin`, `created_at`) VALUES
(1, 'Muhammad Hassan', 'mrhassaanvlogs@gmail.com', 'Khan5237', 'user', '2023-08-11 14:39:02'),
(2, 'Ali Khan', 'alikhan5237@gmail.com', 'khan5276', 'user', '2023-08-11 14:52:10'),
(3, 'kevin David ', 'kevin9090@gmail.com', 'Kevin12345', 'user', '2023-08-11 15:01:00'),
(4, 'Shahid Ahmed', 'shahid2023@gmail.com', 'Khan5237', 'user', '2023-08-11 15:56:20'),
(5, 'khalil ul rehman', 'khalil786786@gmail.com', 'Khalil!123', 'user', '2023-08-12 02:27:14'),
(8, 'Admin', 'admin@gmail.com', 'admin123', 'admin', '2023-08-12 13:38:27'),
(9, 'sawera chohan', 'sawera@gmail.com', 'sawera123', 'user', '2023-08-12 14:49:29'),
(10, 'donaldtrump', 'donaldt69@gmail.com', 'donaldt5656', 'user', '2023-08-12 14:56:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_artist`
--
ALTER TABLE `feature_artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imageadd`
--
ALTER TABLE `imageadd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paylist`
--
ALTER TABLE `paylist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_add`
--
ALTER TABLE `slider_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
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
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feature_artist`
--
ALTER TABLE `feature_artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `imageadd`
--
ALTER TABLE `imageadd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `paylist`
--
ALTER TABLE `paylist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider_add`
--
ALTER TABLE `slider_add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
