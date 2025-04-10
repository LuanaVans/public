<?php  $titulin="Bienvenidos a Pepito Grillo";?> 

<?php include '_cachitos/_header.php';?>

<? 


if(isset($_POST["nombre"])&& isset($_POST["precio"])){
//aqui si llegan post
$nombre=$_POST["nombre"];
$descripcion=$_POST["descripcion"];
$precio=$_POST["precio"];

if(isset($_POST["disponible"])){
  $activado=1;
}
else{
  $activado=0;
}

echo "he cargado los valores de post";
echo "los valores de post son $nombre, $descripcion";



$servername = "localhost";
$username = "root";
$password = "root";
$basedatos = "restaurante";

// Create connection
$conn = new mysqli($servername, $username, $password, $basedatos);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Me conecté bien";


// Insertar datos en tabla Comidas
$sql = "INSERT INTO `comidas` (`nombre`, `descripcion`, `precio`,`activado`)
VALUES ('$nombre', '$descripcion', '$precio','$activado');";

echo "<p>He insertado cosas en la base de datos</p>";
echo "<br><pre><code>$sql</code></pre><br>";

if ($conn->query($sql) === TRUE){
  echo "Se ha creado ";
} else {
  echo "Error: " . $conn->error;
}

// cierre de conexión
$conn->close();
echo "cerre la conexión";

}
//aqui sino hay post
else{
  echo "no tengo na en el post así que cargo la función";
?>




<form action="incluir.php" method ="post"> 

  <label for="nombre">Nombre plato:</label>
  <input type="text" id="nombre" name="nombre" required><br>
  

  <label for="descripcon">Descripción:</label>
  <input type="text" id="descripcion" name="descripcion">

  <label for="precio">Precio:</label>
  <input type="num" id="precio" name="precio" required><br>

  <label for="alergenos">Alergenos:</label>
  <input type="text" id="alergenos" name="alergenos" required>

  <label for="ingredientes">Ingredientes:</label>
  <input type="text" id="ingredientes" name="ingredientes" >

  <label for="iniciotemporada">Inicio de temporada</label>
  <input type="date" id="iniciotemporada" name="inicio_temp">

  <label for="fintemporada">Fin de temporada</label>
  <input type="date" id="fintemporada" name="fin_temp">

  <label for="disponible">Disponible</label>
  <input type="checkbox" id="disponible" name="disponible" checked>

 

  <input value="Nuevo plato" type="submit"> 
</form>

<?php 
//esto cierra el else de arriba

}?> 
<?php include '_cachitos/_footer.php';?>