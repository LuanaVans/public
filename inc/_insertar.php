<?php
// Conectar a la base de datos
$conn = new mysqli("localhost", "root", "root", "alumnos");

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$dni = $_POST['dni'];
$foto = $_POST['foto'];

// Evitar inyección SQL
$nombre = $conn->real_escape_string($nombre);
$dni = $conn->real_escape_string($dni);
$foto = $conn->real_escape_string($foto);

// Insertar en la base de datos
$sql = "INSERT INTO alumnos (nombre, dni, foto) VALUES ('$nombre', '$dni', '$foto')";

if ($conn->query($sql) === TRUE) {
    echo "Alumno agregado correctamente.";
} else {
    echo "Error: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
