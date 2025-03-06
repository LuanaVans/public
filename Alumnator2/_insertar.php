<?php
// Conectar a la base de datos
$conn = new mysqli("localhost", "root", "root", "alumnator");

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha = $_POST['fecha'];
$email = $_POST['email'];
$curso = $_POST['curso'];
$foto = $_POST['foto'];
$desc = $_POST['desc'];

// Evitar inyección SQL
$nombre = $conn->real_escape_string($nombre);
$apellido = $conn->real_escape_string($apellido);
$email = $conn->real_escape_string($email);
$curso = $conn->real_escape_string($curso);
$foto = $conn->real_escape_string($foto);
$desc = $conn->real_escape_string($desc);

// Insertar en la base de datos
$sql = "INSERT INTO alumnos (nombre, apellido, fecha_nacimiento, email, curso, foto, descripcion) 
        VALUES ('$nombre', '$apellido', '$fecha', '$email', '$curso', '$foto', '$desc')";

if ($conn->query($sql) === TRUE) {
    echo "Alumno agregado correctamente.";
} else {
    echo "Error: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
<button><a href="index.php">Volver a Inicio</a></button>