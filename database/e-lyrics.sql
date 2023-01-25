-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 25 jan. 2023 à 21:00
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e-lyrics`
--
CREATE DATABASE IF NOT EXISTS `e-lyrics` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `e-lyrics`;

-- --------------------------------------------------------

--
-- Structure de la table `albums`
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `albums`
--

INSERT INTO `albums` (`id`, `name`, `description`, `image`, `artist_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Futur nostalgia', 'aaaa', 'Future_Nostalgia.png', 1, '2023-01-23 13:36:02', '2023-01-23 13:36:02', '2023-01-23 13:36:02'),
(2, 'Dua lipa', 'dua_lipa', 'dua_lipa.jfif', 1, '2023-01-23 13:37:23', '2023-01-23 13:37:23', '2023-01-23 13:37:23'),
(3, 'Starboy', 'aaaaa', 'Starboy.png', 2, '2023-01-23 15:02:43', '2023-01-23 15:02:43', '2023-01-23 15:02:43'),
(4, 'After hours', 'lsjdfj', 'after_hours.jfif', 2, '2023-01-23 15:02:43', '2023-01-23 15:02:43', '2023-01-23 15:02:43');

-- --------------------------------------------------------

--
-- Structure de la table `artists`
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
-- Déchargement des données de la table `artists`
--

INSERT INTO `artists` (`id`, `name`, `picture`, `biography`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'dua lipa', 'dua.jfif', 'lorem ipsu ', '2023-01-23 10:02:37', '2023-01-23 10:02:37', 1, 1),
(2, 'the weeknd', 'the_weeknd.webp', 'the weekndthe weekndthe weekndthe weekndthe weeknd', '2023-01-23 13:38:08', '2023-01-23 13:38:08', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
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
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`) VALUES
(1, 'Pop', 'La musique pop est un genre musical apparu dans les années 1960 au Royaume-Uni et aux États-Unis. Les chansons pop parlent en général de l\'amour ou des relations amoureuses.', 'pop.jpg'),
(2, 'Lit', '', 'lit.jpg'),
(3, 'Psychedelic Rock', '', 'psychedelic-rock.jpg'),
(4, 'Soft Songs', '', 'soft-songs.jpg'),
(5, 'Trap', '', 'trap.jpg'),
(6, 'Brand new chill', '', 'brand-new-chill.jpg'),
(7, 'Soft pop hits', '', 'soft-pop-hits.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `songs`
--

DROP TABLE IF EXISTS `songs`;
CREATE TABLE IF NOT EXISTS `songs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin,
  `lyrics` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image` text CHARACTER SET utf8 COLLATE utf8_bin,
  `album_id` int DEFAULT NULL,
  `category_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `songs`
--

INSERT INTO `songs` (`id`, `name`, `description`, `lyrics`, `image`, `album_id`, `category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Eden Rasmussen', 'Quibusdam voluptatum', 'Temporibus ullam nul', 'b.png', 1, 1, '2023-01-25 20:37:40', '2023-01-25 20:37:40', NULL),
(2, 'Jade Pearson', 'Id et aut in laborio', 'Molestiae labore imp', 'b68fce68438fef6c8100785f2a93d537.jpg', 3, 5, '2023-01-25 20:37:40', '2023-01-25 20:37:40', NULL),
(3, 'Carol Cooper', 'Libero qui veniam u', 'Impedit pariatur A', 'minimal-samurai-wallpaper.png', 2, 6, '2023-01-25 20:48:49', '2023-01-25 20:48:49', NULL),
(4, 'Portia Burt', 'Dolorum aperiam at i', 'Molestiae non aut of', 'world-music-day-gradient-background_23-2149397900.webp', 4, 3, '2023-01-25 20:50:31', '2023-01-25 20:50:31', NULL),
(5, 'Portia Burt', 'Dolorum aperiam at i', 'Molestiae non aut of', 'world-music-day-gradient-background_23-2149397900.webp', 4, 3, '2023-01-25 20:50:32', '2023-01-25 20:50:32', NULL),
(6, 'April Browning', 'In quis quasi et sed', 'Tempora dolorum ut v', 'pheonix_logo.png', 0, 7, '2023-01-25 20:51:13', '2023-01-25 20:51:13', NULL),
(7, 'April Browning', 'In quis quasi et sed', 'Tempora dolorum ut v', 'pheonix_logo.png', 0, 7, '2023-01-25 20:51:15', '2023-01-25 20:51:15', NULL),
(8, 'April Browning', 'In quis quasi et sed', 'Tempora dolorum ut v', 'pheonix_logo.png', 0, 7, '2023-01-25 20:51:15', '2023-01-25 20:51:15', NULL),
(9, 'Raja Moss', 'Deleniti at odio qui', 'Velit repudiandae la', 'Class Diagram.jpg', 2, 3, '2023-01-25 20:51:30', '2023-01-25 20:51:30', NULL),
(10, 'Raja Moss', 'Deleniti at odio qui', 'Velit repudiandae la', 'Class Diagram.jpg', 2, 3, '2023-01-25 20:51:51', '2023-01-25 20:51:51', NULL),
(11, 'Raja Moss', 'Deleniti at odio qui', 'Velit repudiandae la', 'Class Diagram.jpg', 2, 3, '2023-01-25 20:52:18', '2023-01-25 20:52:18', NULL),
(12, 'Raja Moss', 'Deleniti at odio qui', 'Velit repudiandae la', 'Class Diagram.jpg', 2, 3, '2023-01-25 20:52:19', '2023-01-25 20:52:19', NULL),
(13, 'Raja Moss', 'Deleniti at odio qui', 'Velit repudiandae la', 'Class Diagram.jpg', 2, 3, '2023-01-25 20:52:19', '2023-01-25 20:52:19', NULL),
(14, 'Raja Moss', 'Deleniti at odio qui', 'Velit repudiandae la', 'Class Diagram.jpg', 2, 3, '2023-01-25 20:52:19', '2023-01-25 20:52:19', NULL),
(15, 'Karleigh Walter', 'Facere exercitation ', 'Esse eum temporibus', 'c3df544cb46208068b93851a8b910322.jpg', 1, 5, '2023-01-25 20:53:40', '2023-01-25 20:53:40', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `admin` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `admin`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Shelby Romero', 'zusoxely@mailinator.com', '$2y$10$nbPm3rVbspmAloPOM6Jz0ebtZPbygIhnxobEncT4zVS6PXYCgyMni', 0, '2023-01-19 10:11:24', '2023-01-19 10:11:24', NULL),
(7, 'Yuri Owen', 'nachit@mailinator.com', '$2y$10$E8nCJuijTsbrL8C9sy28p.c56gMbUf7dx0co5wXaSARyhk3rY7Cg6', 0, '2023-01-19 13:09:46', '2023-01-19 13:09:46', NULL),
(8, 'Abdelghafour aouad', 'email@gmail.com', '$2y$10$C6a6JLWk.br1tojGDbG6f.8oA5IaqWNqCao41hHpDV8GMJ5HpM7dW', 0, '2023-01-21 17:06:10', '2023-01-21 17:06:10', NULL),
(9, 'bixepa6430@hempyl.com', 'bixepa6430@hempyl.com', '$2y$10$fH44X.hXxw.9o2NduJIFI.jeDoS2LphAYHD3BuMxnQwkXaTR4Vzp.', 0, '2023-01-22 15:30:33', '2023-01-22 15:30:33', NULL),
(10, 'abdo@gmail.com', 'abdo@gmail.com', '$2y$10$GdpoftRhaTEMFslySQZLAuXKRUcYxVJr4/m0WMIJhhRdAAxTEOX2G', 0, '2023-01-22 15:34:56', '2023-01-22 15:34:56', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
