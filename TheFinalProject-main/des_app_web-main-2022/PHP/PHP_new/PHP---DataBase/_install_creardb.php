<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("La conexión ha fallado, asegúrese de que el servidor es localhost, el usuario root y la contraseña root: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE dicampus";
if ($conn->query($sql) === TRUE) {
  echo "Base de datos dicampus creada correctamente";
} else {
  echo "Error creando la base de datos: " . $conn->error;
}

$conn->close();
?>