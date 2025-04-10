-- Crear base de datos
CREATE DATABASE eventos_culturales;

-- Seleccionar la base de datos
USE eventos_culturales;

-- Crear tabla para eventos
CREATE TABLE eventos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    lugar VARCHAR(255),
    fecha DATE,
    hora TIME,
    precio DECIMAL(10, 2),
    imagen VARCHAR(255) -- Ruta de la imagen
);
<?php
$host = 'localhost';
$dbname = 'eventos_culturales';
$username = 'root'; // Cambia esto si es necesario
$password = ''; // Cambia esto si es necesario

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
