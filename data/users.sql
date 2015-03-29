/**
* Create users
*/
DROP TABLE IF EXISTS users;
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
