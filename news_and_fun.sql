-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-03-2020 a las 21:14:23
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `news_and_fun`
--

-- --------------------------------------------------------
CREATE DATABASE news_and_fun CHARACTER SET utf8 COLLATE utf8_general_ci;

USE news_and_fun;

--
-- Estructura de tabla para la tabla `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `name` varchar(150) NOT NULL,
  `url_service` varchar(500) NOT NULL,
  `description` varchar(520) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_service_user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;


--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`id`, `user_id`, `category_id`, `name`, `url_service`, `description`, `created_at`) VALUES
(1, 1, 1, 'noticias', 'url del sitio', 'descripción del sitio', '2020-03-04 21:13:36'),
(2, 2, 2, 'música top', 'url del sitio', 'descripción del sitio', '2020-03-04 21:13:36'),
(3, 3, 3, 'deportes', 'url del sitio', 'descripción del sitio', '2020-03-04 21:13:36'),
(4, 1, 4, 'brico consejos', 'url del sitio', 'descripción del sitio', '2020-03-04 21:13:36');

-- --------------------------------------------------------

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_service_user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;


--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`) VALUES
(1, 1, 'Noticias nacionales'),
(2, 2, 'Música'),
(3, 3, 'Deportes'),
(4, 1, 'Mis aficiones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `role` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `nick` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `surname`, `nick`, `email`, `password`, `created_at`) VALUES
(1, 'ROLE_USER', 'Javier', 'Estrada', '@user1', 'user1@user1.com', '$2y$12$/KpQiMmVlvKXFTCZOQxtX.rilC7/bAONlGKtJ7vZJWv/KrM9EwSbu', '2020-03-04 21:13:35'),
(2, 'ROLE_USER', 'Miguel', 'Ruiz', '@user2', 'user2@user2.com', '$2y$12$/KpQiMmVlvKXFTCZOQxtX.rilC7/bAONlGKtJ7vZJWv/KrM9EwSbu', '2020-03-04 21:13:35'),
(3, 'ROLE_USER', 'Alvaro', 'Miranda', '@user3', 'user3@user3.com', '$2y$12$/KpQiMmVlvKXFTCZOQxtX.rilC7/bAONlGKtJ7vZJWv/KrM9EwSbu', '2020-03-04 21:13:36');

--
-- Filtros para la tabla `services`
--
ALTER TABLE `users`

    ADD CONSTRAINT uk_users_email_nick UNIQUE(email, nick);

ALTER TABLE `services`

    ADD CONSTRAINT uk_services_name UNIQUE(name),
  ADD CONSTRAINT `fk_service_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE restrict ON UPDATE restrict,
  ADD CONSTRAINT `fk_service_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE restrict ON UPDATE restrict;

ALTER TABLE `categories`

    ADD CONSTRAINT uk_catogories_name UNIQUE(name),
  ADD CONSTRAINT `fk_category_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE restrict ON UPDATE restrict;


COMMIT;


