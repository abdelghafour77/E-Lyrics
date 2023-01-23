-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 23, 2023 at 04:27 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-lyrics`
--
CREATE DATABASE IF NOT EXISTS `e-lyrics` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `e-lyrics`;

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

DROP TABLE IF EXISTS `albums`;
CREATE TABLE IF NOT EXISTS `albums` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin,
  `image` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `artist_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `name`, `description`, `image`, `artist_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Futur nostalgia', 'aaaa', 'Future_Nostalgia.png', 1, '2023-01-23 14:36:02', '2023-01-23 14:36:02', '2023-01-23 14:36:02'),
(2, 'Dua lipa', 'dua_lipa', 'dua_lipa.jpg', 1, '2023-01-23 14:37:23', '2023-01-23 14:37:23', '2023-01-23 14:37:23'),
(3, 'Starboy', 'aaaaa', 'Starboy.png', 2, '2023-01-23 16:02:43', '2023-01-23 16:02:43', '2023-01-23 16:02:43'),
(4, 'After hours', 'lsjdfj', 'after_hours.jfif', 2, '2023-01-23 16:02:43', '2023-01-23 16:02:43', '2023-01-23 16:02:43');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

DROP TABLE IF EXISTS `artists`;
CREATE TABLE IF NOT EXISTS `artists` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(120) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `picture` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `biography` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_by` int NOT NULL,
  `updated_by` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `name`, `picture`, `biography`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'dua lipa', 'dua.jfif', 'lorem ipsu ', '2023-01-23 11:02:37', '2023-01-23 11:02:37', 1, 1),
(2, 'the weeknd', 'the_weeknd.webp', 'the weekndthe weekndthe weekndthe weekndthe weeknd', '2023-01-23 14:38:08', '2023-01-23 14:38:08', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`) VALUES
(1, 'pop', 'La musique pop est un genre musical apparu dans les années 1960 au Royaume-Uni et aux États-Unis. Les chansons pop parlent en général de l\'amour ou des relations amoureuses.', 'pop.jpg'),
(2, 'lit', '', 'lit.jpg'),
(3, 'Psychedelic Rock', '', 'psychedelic-rock.jpg'),
(4, 'Soft Songs', '', 'soft-songs.jpg'),
(5, 'Trap', '', 'trap.jpg'),
(6, 'Brand new chill', '', 'brand-new-chill.jpg'),
(7, 'Soft pop hits', '', 'soft-pop-hits.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

DROP TABLE IF EXISTS `songs`;
CREATE TABLE IF NOT EXISTS `songs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin,
  `lyrics` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image` text CHARACTER SET utf8 COLLATE utf8_bin,
  `type` int NOT NULL,
  `album_id` int DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` text COLLATE utf8_bin NOT NULL,
  `admin` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `admin`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Shelby Romero', 'zusoxely@mailinator.com', '$2y$10$nbPm3rVbspmAloPOM6Jz0ebtZPbygIhnxobEncT4zVS6PXYCgyMni', 0, '2023-01-19 10:11:24', '2023-01-19 10:11:24', NULL),
(7, 'Yuri Owen', 'nachit@mailinator.com', '$2y$10$E8nCJuijTsbrL8C9sy28p.c56gMbUf7dx0co5wXaSARyhk3rY7Cg6', 0, '2023-01-19 13:09:46', '2023-01-19 13:09:46', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
