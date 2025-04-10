# Apuntes del proceso
## crear tabla

CREATE TABLE `proyectos` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(255) NOT NULL,
  `descripcion` longtext NOT NULL,
  `img` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `slug` varchar(255) NOT NULL
);

## llenar de contenido

INSERT INTO `proyectos` (`nombre`, `descripcion`, `img`, `fecha`, `slug`)
VALUES ('Branding Psicólogos Uría', 'Renovación de la identidad de marca de la empresa y subempresas de Psicología uría', '001.jpg', '2019/12/02 15:00:00', 'branding-psicologos-uria');

INSERT INTO `proyectos` (`nombre`, `descripcion`, `img`, `fecha`, `slug`)
VALUES ('Video reforma Calle Luanco', 'Animación en Affter Effects con el antes y el después de una calle en Luanco', 'luanco.jpg', '2023/02/02 15:00:00', 'animacion-construcion-calle-antes-despues');


## W3schools
Emeplos de todas las propiedades css en práctica:

https://www.w3schools.com/cssref/playdemo.php?filename=playcss_word-spacing