<?require_once 'assets/bloques/_config.php'; ?>
<? include 'assets/bloques/_header.php'; ?> 



<h1>Academia Dicampus Curso 2025</h1>
<?

// 3º Consulta SQL
$sql = "SELECT * FROM alumnos";
$resultado_array = mysqli_query($conn, $sql);

// 4º Verificar si hay resultados antes de recorrer el bucle
if (mysqli_num_rows($resultado_array) > 0) 
{
    echo "<ul class='alumnos'>";
    
    while ($row = mysqli_fetch_assoc($resultado_array)) {
        echo "<div class='alumno-info'>";
        echo "<li class='alumno-item'>";
        echo "<a href='detalles.php?id={$row['id']}' class='alumno-info'>";
      echo "<img src='{$row['foto']}' alt='{$row['foto']}' class='alumno-img'>";
      
      echo "<h2>{$row['nombre']}</h2>";
      echo "<p>Apellidos: {$row['apellidos']}</p>";
      echo "<p>teléfono: {$row['telefono']} </p>";
      echo "</div>";
      echo "</a>";
      echo "</li>";
  }
}

    echo "</ul>";


// 5º Cerrar conexión
$conn->close();
?>

<? include 'assets/bloques/_footer.php'; ?>















