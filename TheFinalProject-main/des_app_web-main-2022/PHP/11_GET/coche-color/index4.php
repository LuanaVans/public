<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
// CONSULTANDO LA BASE DE DATOS DE VERDAD

function select_colores(){
  // Create connection
  $conn = new mysqli("localhost","root", "root", "concesionario");
  // Check connection
  if ($conn->connect_error) {  die("Connection failed: " . $conn->connect_error);}
  // almacenamos en una varable la consulta que vamos a hacer
  $sql = "SELECT * FROM coches WHERE disponible = 1";
  // hacemos la consulta
  $result = $conn->query($sql);

  //si hay mas de 0 resultados...
  if ($result->num_rows > 0) {

      // abrimos el texto HTML select
    echo '<select name="g" id="color">';
    //mientras haya datos me asocias cada "fila" de datos con una iteración
    while($row = $result->fetch_assoc()) {
      //metes el texto HTML pa crear un option con lso datos de esa "pasada" o interación
      echo '<option value="'.$row["grados"].'">'.$row["color"].'</option>';
    }
    // cerramos el texto HTML select
    echo '</select>';

  } 
  //si hay no hay más de 0 resultados...
  else {
    echo "Lo sentimos, solo pudes comprar un coche gris";
  }
  $conn->close();
}



?>



    

<h1>De qué color quieres tu coche</h1>
<form action="coche2.php" method="get">
    <label for="color">Seleccione color</label>
    <?php select_colores(); ?>
    <input type="submit" value="Dame mi coche">
</form>


</body>
</html>