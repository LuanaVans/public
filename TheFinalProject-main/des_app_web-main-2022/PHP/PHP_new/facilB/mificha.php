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
   

if(isset($_GET['id'])){
  $patatin_id=$_GET['id']; 

  
  // Consulta SQL para insertar una fila en la tabla "alumnos"
  $sql = "SELECT * FROM alumnos  WHERE id=$patatin_id ";
  
  // Ejecutar la consulta SQL
$resultado = $conn->query($sql);

echo '<div class="ficha">';
while ($fila=$resultado->fetch_assoc()){

    echo '<div class="foto">'; 
    echo '<img src="./img/'.$fila['foto'].'" alt="'.$fila['nombre'].' '.$fila['apellidos'].'">';
    echo '</div>';
    echo '<div class="datos">';
    echo '<h1>'.$fila['nombre'].' '.$fila['apellidos'].'</h1>'; 
    echo '<p>Ciudad: '.$fila['ciudad'].'</p>';
    echo '<p>Fecha de nacimiento: '.$fila['fecha_nacimiento'].'</p>';
    echo '</div>';
}
echo '</div>';



} //Esto cierra un if

else{
  echo"El alumno solicitado no existe"; 
}

// Cerrar la conexión
$conn->close();
?>

<?php include 'fragmentos/_footer.php';?>