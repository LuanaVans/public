-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS testeo CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Usar la base de datos
USE testeo;

-- Crear la tabla asegurando la codificación a nivel de tabla
CREATE TABLE IF NOT EXISTS lista (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Insertar datos iniciales
INSERT INTO lista (nombre)
VALUES 
    ('Juan'),
    ('Pedro'),
    ('Maria'),
    ('Ana'),
    ('Luis'),
    ('Jose');
