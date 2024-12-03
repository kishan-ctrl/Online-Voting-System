-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 04:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `log_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'akash', '441999', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE `poll` (
  `pollid` double NOT NULL,
  `question` text DEFAULT NULL,
  `poll_date` double DEFAULT NULL,
  `options` varchar(250) DEFAULT NULL,
  `votes` varchar(250) DEFAULT NULL,
  `close` tinyint(1) DEFAULT NULL,
  `number_options` tinyint(3) DEFAULT NULL,
  `poll_timeout` double DEFAULT NULL,
  `voters` int(11) DEFAULT NULL,
  `public` tinyint(1) DEFAULT NULL,
  `last_vote_date` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(0, '$uname', '$password', '$name'),
(5, 'kd', '6865aeb3a9ed28f9a79ec454b259e5d0', 'Akash K.T'),
(6, 'as', 'f970e2767d0cfe75876ea857f92e319b', 'ad'),
(7, 'p', 'd95679752134a2d9eb61dbd7b91c4bcc', 'Kanagasivam Thiben Akash'),
(8, 'ad', '523af537946b79c4f8369ed39ba78605', 'ad'),
(9, 'daniel', '55b7e8b895d047537e672250dd781555', 'ad'),
(10, 'ak', '17540aef7b8470cc3ea8b2b9046af3b6', 'ak'),
(11, 'pk', '1cd3c693132f4c31b5b5e5f4c5eed6bd', 'Kanagasivam Thiben Akash'),
(12, 'kk', 'dc468c70fb574ebd07287b38d0d0676d', 'kishan'),
(13, 'kl', '16ec114932520d2b9c18a28121d515af', 'kl'),
(14, '1', 'c4ca4238a0b923820dcc509a6f75849b', 'ad'),
(15, 'v', '9e3669d19b675bd57058fd4664205d2a', 'vimala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`pollid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `poll`
--
ALTER TABLE `poll`
  MODIFY `pollid` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
