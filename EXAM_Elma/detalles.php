<?require_once 'assets/bloques/_config.php'; ?>

<? include 'assets/bloques/_header.php'; ?> 



<?php

// Incluir la conexión a la base de datos


// Obtener el ID del alumno desde la URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta para obtener los detalles del alumno usando el ID
    $query = "SELECT * FROM alumnos WHERE id = $id";
    $result = mysqli_query($conn, $query);


    if ($row = mysqli_fetch_assoc($result)) {
        // Mostrar los detalles del alumno
        echo "<div class='alumno-info'>";
        echo "<img src='{$row['foto']}' alt='Foto de {$row['nombre']}' >";
        echo "<p><strong>Nombre:</strong> {$row['nombre']}</p>";
        echo "<p><strong>Apellidos:</strong> {$row['apellidos']}</p>";
        echo "<p><strong>Teléfono:</strong> {$row['telefono']}</p>";
        echo "</div>";
    } else {
        echo "<p>No se encontraron detalles para este alumno.</p>";
    }
} else {
    echo "<p>No se ha proporcionado un ID válido.</p>";
}
?>



<? include 'assets/bloques/_footer.php'; ?>
