<?php 

/*
 *
 * AQUÍ VA TODO LO REFERENTE A CONTENIDO REUTILIZABLE
 * EN TODOS LOS APARTADOS DE LA WEB
 * 
 */

$carpeta_include ="_cachitos/";
$carpeta_img ="img/";
$carpeta_css ="css/";

include $carpeta_include."config.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $basedatos);
// Check connection
if ($conn->connect_error || mysqli_connect_error()) {
  echo "<p>Es posible que tenga que activar el <a href='--install.php'>proceso de instalacion aquí</a></p> <p>Si esto no funciona cree a mano la base de datos 'restaurante'.</p>";
 die("Connection failed: " . $conn->connect_error);
 }
else{ // inicio de else si conexión ok

    $sql = "SELECT * FROM config";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
      $tituloweb=$row["tituloweb"];
      $descripcion=$row["descripcion"];
      $lang=$row["lang"];
      $iva=$row["iva"];
      $moneda=$row["moneda"];
      $colorweb = $row["color"];
      }
    } else {
      echo "No se ha podido cargar info de la tabla config";
    }
    /*
    echo "Titulo es:".$tituloweb;
    echo "descripcion es:".$descripcion;
    echo "lang es:".$lang;
    echo "iva es:".$iva;*/



}// fin de else si conexión ok
















// Funcion que convierte el texto en slug
// (texto sin caracteres latinos ni guiones)

//slug($titulin,"_")
function slug($text, string $divider = '-')
{
  // replace non letter or digits by divider
  $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
  $text = trim($text, $divider);

  // remove duplicate divider
  $text = preg_replace('~-+~', $divider, $text);

  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }

  return $text;
}



echo "<!-- funciones.php cargado -->";
echo "<br>";