<?php $titulo="Leer Datos"; ?>
<?php include 'fragmentos/_header.php';?>
<h1><?php echo $titulo;?></h1>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dicampus";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si hay errores de conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener los datos de la tabla "alumnos"
$sql = "SELECT id, nombre, apellidos, ciudad, fecha_nacimiento, foto FROM alumnos";

// Ejecutar la consulta SQL
$resultado = $conn->query($sql);

// Verificar si hay resultados
if ($resultado->num_rows > 0) {
  // Crear la tabla HTML
  echo "<table>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Ciudad</th>
          <th>Fecha de Nacimiento</th>
          <th>Foto</th>
          <th>Ver</th>
        </tr>";
  
  // Recorrer los resultados y mostrarlos en la tabla HTML
  while($fila = $resultado->fetch_assoc()) {
    echo "<tr>
            <td>" . $fila["id"] . "</td>
            <td>" . $fila["nombre"] . "</td>
            <td>" . $fila["apellidos"] . "</td>
            <td>" . $fila["ciudad"] . "</td>
            <td>" . $fila["fecha_nacimiento"] . "</td>
            <td><img src='img/" . $fila["foto"] . "'></td>
            <td> <a href='read.php?id=" . $fila["id"] . "'>Ver ficha</a></td>
          </tr>";
  }
  
  // Cerrar la tabla HTML
  echo "</table>";
} else {
  echo "No se encontraron resultados";
}

// Cerrar la conexión
$conn->close();
?>




<?php include 'fragmentos/_footer.php';?>