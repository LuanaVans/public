<?php $titulo="Insertarción de datos" ?>
<?php include 'fragmentos/_header.php';?>


<?php

// Obtener datos POST en caso de que existan
if (isset($_POST['nombre'])) {
  $nombre     = $_POST['nombre'];
  $apellidos  = $_POST['apellidos'];
  $ciudad     = $_POST['ciudad'];
  $fnacim     = $_POST['fnacim'];
  $foto       = $_POST['foto'];

  //Si hay datos conectarse a la base de datos
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
  $sql = "INSERT INTO alumnos (nombre, apellidos, ciudad, fecha_nacimiento, foto)
  VALUES ('$nombre','$apellidos','$ciudad','$fnacim','$foto');";
// echo $sql;

  // Ejecutar la consulta SQL
  $resultado = $conn->query($sql);

  //Mostramos lo insertado en una mini-ficha:
  ?>


  <div class="ficha">
  <div class="foto">
  <img src='img/<? echo $foto;?>'>
  </div>

  <div class="datos">
    <h1><span><?echo $nombre."</span> ".$apellidos; ?></h1>
    
    <p><span>Fecha Nacimiento:</span> <? echo $fnacim;?></p>
    <p><span>Ciudad:</span> <? echo $ciudad;?></p>
    <p><span>Edad:</span> <? echo obtener_edad_segun_fecha($fnacim);?></p>

  </div>
  </div>

<?php
  // Cerrar la conexión
  $conn->close();
  } //fin de la comprobación if isset POST
  
  //Si no se da ese caso, significará que no hay datos POST
  // Por lo que mostramos el Formulario
  else {
?>



<form action="" method="post">
  <label for="nom">Nombre:</label>
  <input id="nom" type="text" name="nombre"><br>

  <label for="ape">Apellidos:</label>
  <input id="ape" type="text" name="apellidos"><br>

  <label for="city">Ciudad:</label>
  <input id="city" type="text" name="ciudad"><br>

  <label for="fnacim">Fecha Nacimiento::</label>
  <input id="fnacim" type="date" name="fnacim"><br>

  <label for="foto">Foto:</label>
  <input id="foto" type="text" name="foto"><br>

  <input type="submit" value="Guardar datos de Alumno">

</form>



<?php 


  } // fin de else

  include 'fragmentos/_footer.php';?>