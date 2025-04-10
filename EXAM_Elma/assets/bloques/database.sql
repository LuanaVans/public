------ Crar la Base de Datos-----
-- Crear la base de datos llamada 'academia'
CREATE DATABASE academia;

-- Seleccionar la base de datos 'academia'
USE academia;

-- Crear la tabla 'alumnos'
CREATE TABLE alumnos (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Campo id como clave primaria y auto-incremental
    nombre VARCHAR(100) NOT NULL,      -- Campo nombre con un máximo de 100 caracteres y no nulo
    apellidos VARCHAR(200) NOT NULL,  -- Campo apellidos con un máximo de 200 caracteres y no nulo
    telefono VARCHAR(20),             -- Campo telefono con un máximo de 20 caracteres
    foto BLOB                        -- Campo foto para almacenar la imagen (como BLOB para archivos binarios)
);


-------Datos de los alumnos para rellenar la tabla-------$_COOKIE
-- Insertar 10 registros en la tabla 'alumnos'
INSERT INTO alumnos (nombre, apellidos, telefono, foto) VALUES
('Juan', 'Pérez García', '123456789', NULL),
('Ana', 'López Martínez', '234567890', NULL),
('Carlos', 'Sánchez Rodríguez', '345678901', NULL),
('María', 'González Fernández', '456789012', NULL),
('Pedro', 'Ruiz Pérez', '567890123', NULL),
('Laura', 'Hernández López', '678901234', NULL),
('Luis', 'Moreno Díaz', '789012345', NULL),
('Isabel', 'Jiménez García', '890123456', NULL),
('Antonio', 'Fernández Sánchez', '901234567', NULL),
('Elena', 'Mendoza Pérez', '112233445', NULL);

