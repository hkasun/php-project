-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2018 at 09:55 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT
= 0;
START TRANSACTION;
SET time_zone
= "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE bazaPodataka;
--
-- Database: `bazapodataka`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users`
(
  `id` int
(11) UNSIGNED NOT NULL,
  `email` varchar
(255) CHARACTER
SET utf8
COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar
(255) CHARACTER
SET utf8
COLLATE utf8_unicode_ci NOT NULL,
  `ime` varchar
(30) CHARACTER
SET utf8
COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `prezime` varchar
(30) CHARACTER
SET utf8
COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `is_active` tinyint
(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`
id`,
`email
`, `password`, `ime`, `prezime`, `is_active`) VALUES
(2, 'hrvoje@hrvoje.com', '$2y$10$oMT.bE77Fj7/vdGMWZ3NgOlvw9c7qMfhM9gKFrrPr2cNrX57WCl5S', 'Hrvoje', 'Hrvoje', 1),
(3, 'pero@pero.com', '$2y$10$vRFED56mGGpfSBPwI74reO5DRVDb11Wl0CVgCmsZ1qE3uv08n2RQS', 'Pero', 'Pero', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
ADD PRIMARY KEY
(`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int
(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
