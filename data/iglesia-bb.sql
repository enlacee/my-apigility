-- Adminer 4.1.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `places`;
CREATE TABLE `places` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) DEFAULT NULL,
  `latitude` decimal(20,17) DEFAULT NULL,
  `longitude` decimal(20,17) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `places` (`id`, `type`, `latitude`, `longitude`, `name`, `created_at`) VALUES
(2,	'zone',	-12.08479600000000000,	-76.97835500000000000,	'jockey plaza',	'2015-03-29 16:24:40');

DELIMITER ;;

CREATE TRIGGER `places_ai` AFTER INSERT ON `places` FOR EACH ROW
INSERT INTO `Place_points` (`places_id`, `places_type`, `latitude`, `longitude`, `point`,`name`,`created_at`) 
	VALUES (NEW.id, NEW.type,NEW.latitude,NEW.longitude,POINT(NEW.longitude,NEW.latitude),NEW.name,NEW.created_at);;

DELIMITER ;

DROP TABLE IF EXISTS `Place_points`;
CREATE TABLE `Place_points` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `places_id` int(11) NOT NULL,
  `places_type` varchar(45) NOT NULL,
  `latitude` decimal(19,17) NOT NULL,
  `longitude` decimal(20,17) NOT NULL,
  `point` point NOT NULL,
  `zoom` int(11) DEFAULT '8',
  `name` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `places_id_UNIQUE` (`places_id`),
  SPATIAL KEY `spacial_point` (`point`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `Place_points` (`id`, `places_id`, `places_type`, `latitude`, `longitude`, `point`, `zoom`, `name`, `created_at`) VALUES
(2,	2,	'zone',	-12.08479600000000000,	-76.97835500000000000,	GeomFromText('POINT(-76.978355 -12.084796)'),	8,	'jockey plaza',	'2015-03-29 16:24:40');

DROP TABLE IF EXISTS `searchs`;
CREATE TABLE `searchs` (
  `search_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `dni` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`search_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `searchs` (`search_id`, `user_id`, `nombre`, `dni`) VALUES
(1,	'1',	'victor anibal copitan norabuena',	'45269187'),
(2,	'2',	'pepe lucho rios solis',	'56362515'),
(3,	'3',	'juan jose robles camello',	'69584584');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `dni` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`user_id`, `nombre`, `apellido`, `dni`) VALUES
(1,	'victor anibal',	'copitan norabuena',	'45269187'),
(2,	'pepe lucho',	'rios solis',	'56362515'),
(3,	'juan jose',	'robles camello',	'69584584');

-- 2015-03-29 18:55:24
