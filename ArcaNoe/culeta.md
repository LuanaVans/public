// datos tabla especies 
CREATE TABLE `especie` (
  `id_especie` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre_especie` text NOT NULL,
  `icono` varchar NOT NULL
);

// datos tabla animales
CREATE TABLE `animales` (
  `id_animal` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre_animal` text NOT NULL,
  `foto_animal` varchar NOT NULL,
  `descripcion` text NOT NULL,
  `id_especie` text NOT NULL,
);
//insertamos datos con los que jugar 

INSERT INTO `animal` (`nombre_animal`, 
`foto_animal`, `descripcion`, `id_especie`)
VALUES ('elefante', 'foto.jpg', 'bicho con trompa', '1'),
('leon', 'foto.jpg', 'el mas fiero de la selva', '2'),
('tiburon', 'foto.jpg', 'animal peligroso', '3'),
('perro', 'foto.jpg', 'mejor amigo del hombre', '4'),
('gato', 'foto.jpg', 'michi muy cariñoso', '2'),
('pez espada', 'foto.jpg', 'el luchador del mar', '3'),
('rinoceronte', 'foto.jpg', 'muy peligroso cuidado', '1');


INSERT INTO `especie` (`nombre_especie`, `icono`)
VALUES ('paquidermo', 'paquidermo.jpg'),
('felino', 'felino.jpg'),
('pez', 'pez.jpg'),
('canino', 'canino.jpg');

//Relacionamos las 2 tablas

----sql versión simplificada
SELECT nombre_animal, descripcion, nombre_especie FROM animal A, especie B WHERE A.id_animal =  B.id_especie

----sql 
SELECT nombre_animal, descripcion, nombre_especie FROM animal A, especie B WHERE A.id_animal =  B.id_especie
