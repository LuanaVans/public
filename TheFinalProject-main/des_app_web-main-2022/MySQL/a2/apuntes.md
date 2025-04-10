## Crear tabla articulos

CREATE TABLE `articulos` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` float(8) NOT NULL,
  `stock` int(8) NOT NULL,
  `img` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
);

## Crear usuario

CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `usuario` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `rol` int(5) NOT NULL,
  `avatar` varchar(255) NOT NULL
);