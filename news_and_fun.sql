-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 04, 2020 at 05:35 AM
-- Server version: 10.3.22-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amaznjhu_news_and_fun`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`) VALUES
(1, 1, 'Noticias'),
(2, 1, 'Deportes'),
(3, 1, 'Mis aficiones');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `name` varchar(150) NOT NULL,
  `country` varchar(150) NOT NULL,
  `url_service` varchar(500) NOT NULL,
  `description` varchar(520) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `user_id`, `category_id`, `name`, `country`, `url_service`, `description`, `created_at`) VALUES
(1, 1, 1, 'El Mundo. Ultima hora', 'España', 'https://e00-elmundo.uecdn.es/elmundo/rss/portada.xml', 'Noticias de última hora del periódico El Mundo. Portada', '2020-03-04 21:13:36'),
(2, 1, 2, 'El Mundo. Deportes', 'España', 'https://e00-elmundo.uecdn.es/elmundodeporte/rss/portada.xml', 'Deportes. Portada del periódico El Mundo', '2020-03-04 21:13:36'),
(3, 1, 3, 'Motor', 'España', 'https://e00-elmundo.uecdn.es/elmundomotor/rss/portada.xml', 'El mundo del motor. Sección del periódico El Mundo', '2020-03-04 21:13:36'),
(4, 1, 1, 'Noticias int. El Mundo', 'Internacional', 'https://e00-elmundo.uecdn.es/elmundo/rss/internacional.xml', 'Portada. Noticias internacionales. Periódico El Mundo', '2020-03-04 21:13:36'),
(5, 1, 1, 'Actualités Le Monde', 'Francia', 'https://www.lemonde.fr/rss/une.xml', 'Portada de noticias principales de Le Monde', '2020-03-04 21:13:36'),
(6, 1, 1, 'Noticias int. Le Monde', 'Internacional', 'https://www.lemonde.fr/international/rss_full.xml', 'Portada de noticias internacionales de Le Monde', '2020-03-04 21:13:36'),
(7, 1, 3, 'Cinéma', 'Francia', 'https://www.lemonde.fr/cinema/rss_full.xml', 'El mundo del cine. Sección de Le Monde', '2020-03-04 21:13:36'),
(8, 1, 2, 'La une Sport', 'Francia', 'https://www.lemonde.fr/sport/rss_full.xml', 'Portada de noticias deportivas de Le Monde', '2020-03-04 21:13:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `nick` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `surname`, `nick`, `email`, `password`, `created_at`) VALUES
(1, 'ROLE_USER', 'Enrique', 'Estrada', '@kike', 'user1@user.com', '$2y$12$/KpQiMmVlvKXFTCZOQxtX.rilC7/bAONlGKtJ7vZJWv/KrM9EwSbu', '2020-03-04 21:13:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uk_catogories_name` (`name`),
  ADD KEY `fk_service_user` (`user_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uk_services_name` (`name`),
  ADD KEY `fk_service_user` (`user_id`),
  ADD KEY `fk_service_category` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uk_users_email_nick` (`email`,`nick`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `fk_category_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `fk_service_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `fk_service_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
