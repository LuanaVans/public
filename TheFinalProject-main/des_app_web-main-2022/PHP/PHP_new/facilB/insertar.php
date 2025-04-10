<?php $titulo="Insertar Nuevo Alumno/na"; ?>
<?php include 'fragmentos/_header.php';?>


<?php
if(isset($_POST['nombre'])){
//convertimos los valores que llegan desde POST a variables PHP
 $nombre = $_POST['nombre'];
 $apellidos = $_POST['apellidos'];
 $ciudad = $_POST['ciudad'];
 $foto = $_POST['foto'];
 $fnacim = $_POST['fnacim'];


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
  $sql = "INSERT INTO alumnos (nombre, apellidos, ciudad, fecha_nacimiento, foto)
VALUES ('$nombre', '$apellidos', '$ciudad', '$fnacim', '$foto');";
  
// echo $sql;



  // Ejecutar la consulta SQL
$resultado = $conn->query($sql);

echo "<h1>Los datos de $nombre $apellidos (de $ciudad, nacido el $fnacim). Han sido insertados correctamente.</h1>";
echo "<img src='img/$foto'>";
// Cerrar la conexión
$conn->close();


}

else{
?>

<h1>Inserte datos del nuevo alumno:</h1>

<form action="" method="POST">
  <label for="nombre">Nombre:</label><br>
  <input type="text" id="nombre" name="nombre"><br>

  <label for="apellidos">Apellidos:</label><br>
  <input type="text" id="apellidos" name="apellidos"><br>

  <label for="ciudad">Ciudad:</label><br>
  <input type="text" id="ciudad" name="ciudad"><br>

  <label for="fnacim">Fecha Nacimiento:</label><br>
  <input type="date" id="fnacim" name="fnacim"><br>

  <label for="foto">Foto:</label><br>
  <input type="text" id="foto" name="foto" placeholder="foto5.png"><br>
 
  <input type="submit" value="Submit">
</form>

</form>
<?php
}
?>

<?php include 'fragmentos/_footer.php';?>