<?php
// Incluir la conexión a la base de datos
include('config.php');

// Verificar si el parámetro 'id' ha sido pasado en la URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];  // Obtener el id del alumno desde la URL

    // Realizar una consulta SQL para obtener los detalles del alumno con ese ID
    $query = "SELECT * FROM alumnos WHERE id = $id";
    $result = mysqli_query($conn, $query);

    // Verificar si se encontró el alumno
    if ($row = mysqli_fetch_assoc($result)) {
        // Mostrar los detalles del alumno
        echo "<h1>Detalles de {$row['nombre']} {$row['apellidos']}</h1>";
        echo "<img src='{$row['foto']}' alt='Foto de {$row['nombre']}' class='alumno-img'>";
        echo "<p><strong>Nombre:</strong> {$row['nombre']}</p>";
        echo "<p><strong>Apellidos:</strong> {$row['
    }
    } else {
        echo "<p>No se encontraron detalles para este alumno.</p>";
    }
        
        