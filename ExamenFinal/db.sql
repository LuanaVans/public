-- Establecer codificación y zona horaria
SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS `events_db` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `events_db`;

-- Eliminar la tabla categories si existe
DROP TABLE IF EXISTS `categories`;

-- Crear la tabla categories
CREATE TABLE `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insertar categorías
INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Concierto'),
(2, 'Conferencia'),
(3, 'Festival'),
(4, 'Taller');

-- Eliminar la tabla events si existe
DROP TABLE IF EXISTS `events`;

-- Crear la tabla events
CREATE TABLE `events` (
  `id` int NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `event_date` datetime NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `events_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insertar eventos
INSERT INTO `events` (`id`, `img`, `title`, `description`, `event_date`, `location`, `image_url`, `latitude`, `longitude`, `category_id`) VALUES
(1, '0', 'Tsunami Xixón Fest', 
'Este verano, Gijón se convierte en la capital del sonido más potente con un evento que reunirá a los mejores artistas nacionales e internacionales de la escena musical. Desde el hardcore más crudo hasta el metal más épico, pasando por el rock más incansable.

Disfruta de una experiencia inolvidable en un entorno espectacular, rodeado de energía, pasión y, por supuesto, ¡mucha música! Prepárate para vivir dos días intensos con actuaciones en vivo que te dejarán sin aliento y una comunidad de fans que comparten la misma devoción por el rock y el metal.', 
'2025-06-12 20:00:00', 'Parque Hermanos Castro', 
'https://www.bringthenoise.events/wp-content/uploads/2024/02/TXF24-CartelDias-v1-Post.jpg', 
43.53573000, -5.66152000, 1),

(2, '0', 'Células Madre 2025', 
'Este encuentro reunirá a los principales expertos e investigadores en el campo de las células madre, la biología regenerativa y las últimas innovaciones tecnológicas. Durante las jornadas, exploraremos los avances más recientes en tratamientos médicos, terapias celulares y la aplicación de tecnologías de vanguardia que están cambiando la forma en que entendemos y tratamos diversas enfermedades.

Con un programa lleno de ponencias, mesas redondas y oportunidades para la colaboración, esta conferencia es el lugar perfecto para aprender, compartir ideas y conectar con profesionales de todo el mundo.', 
'2025-04-10 09:00:00', 'Centro Banamex', 
'https://www.ateneovillaviciosa.es/wp-content/uploads/2023/12/image002.png', 
43.53573000, -5.66152000, 2);

-- Final de la importación
