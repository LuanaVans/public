<?php $titulo="milista"; ?>
<?php include 'fragmentos/_header.php';?>



<?php
//Establecer conexión o conectarse
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



  // Consulta SQL para insertar una fila en la tabla "alumnos"
  $sql = "SELECT * FROM alumnos  WHERE (ciudad  LIKE 'B%') OR (nombre LIKE'F%') ORDER BY ciudad, apellidos, nombre  
  ";
  
  // Ejecutar la consulta SQL
$resultado = $conn->query($sql);

echo '<table>';
while ($fila=$resultado->fetch_assoc()){
 
    echo '<tr>';
    echo '<td>';
    echo '<a href="mificha.php?id='.$fila['id'].'">';
    echo '<img src="./img/'.$fila['foto'].'" alt="'.$fila['nombre'].' '.$fila['apellidos'].'">';
    echo '</a>';
    echo '</td>';
    echo '<td>'.$fila['nombre'].' '.$fila['apellidos'].'</td>';
  
    echo '<td>'.$fila['ciudad'].'</td>';
    echo '<td>'.$fila['fecha_nacimiento'].'</td>';
    echo '</tr>';
}
echo '</table>';


// Cerrar la conexión
$conn->close();
?>


<?php include 'fragmentos/_footer.php';?>