-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS miweb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Usar la base de datos
USE miweb;

-- Crear la tabla usuarios
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    rol ENUM('admin', 'trabajador') NOT NULL DEFAULT 'trabajador',
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insertar algunos usuarios de ejemplo
INSERT INTO usuarios (usuario, password, email, rol) VALUES
('fran', '12345', 'info@miguelesteban.net', 'admin'),
('trabajador1', 'pass123', 'trabajador1@example.com', 'trabajador'),
('trabajador2', 'pass456', 'trabajador2@example.com', 'trabajador');