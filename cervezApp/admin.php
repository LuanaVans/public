<?php $t='admin'?>
<?php require 'bloques/_config.php'?>
<?php include_once 'bloques/_header.php'?>

<form action="admin.php" method="get">
<label> Nombre: <input type="text" name="nombre"></label>
<label> Tipo: <input type="text" name="tipo"></label>
<label> Origen: <input type="text" name="origen"></label>
<label> Alcohol: <input type="number" name="alcohol"></label>
<label> Precio: <input type="number" name="precio"></label>
<input type="submit" value="Guardar Cerveza">

</form>
<?php
//cargar datos del json y convertirlo en un Array PHP
//$nombre=trin $_GET['nombre']; // contenido sin revisar, se puede meter código malicioso
//$nombre=strip_tags(S_GET['nombre]); Evita inyección de código

$nombre= $_GET['nombre'];
$tipo = $_GET['tipo'];
$origen = $_GET['origen'];
$alcohol = $_GET['alcohol'];
$precio = $_GET['precio'];


if ($nombre !==strip_tags ($nombre)){
    $nombre =htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8'); //convierte el contenido a un string seguro
echo "<h2> No puede insertar fragmento de código </h2>";
echo "<p> Asi que lo hemos sanitizado. Ahora es: $nombre</p>";
}
// echo <div class="info"><span> Hemos guardado el valor:</sp<n>$nombre <p> <a href
echo $nombre;


//cargamos los datos que recogemos de los inputs ($_GET)
$miArray= cargarJSON('assets/datos/cervezas.json'); //nos evitamos poner lo de cargar file

debugPrint_r($miArray);

//añadir al Array PHP los datos recogidos

$miArray['cervezas'][]=array('nombre'=>$nombre,'tipo'=>$tipo,'origen'=>$origen,'alcohol'=>$alcohol,'precio'=>$precio);

// los corchetes vacíos es para que se añadan cosas como si fuese un push pero abreviado
debugPrint_r($miArray);



//codificar el Array PHP a json
$miJSON = json_encode($miArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

// lo de arriba json pretty etc es para que el archivo se vea bonito



//guardar json
file_put_contents( 'assets/datos/cervezas.json', $miJSON );

?>
<?php include_once 'bloques/_footer.php';?>