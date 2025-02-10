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
$nombre= $_GET['nombre'];
echo $nombre;


//cargamos los datos que recogemos de los inputs ($_GET)
$miArray= cargarJSON('assets/datos/cervezas.json'); //nos evitamos poner lo de cargar file

debugPrint_r($miArray);

//añadir al Array PHP los datos recogidos

$miArray['cervezas'][]=array('nombre'=>$nombre);
// los corchetes vacíos es para que se añadan cosas como si fuese un push pero abreviado
debugPrint_r($miArray);



//codificar el Array PHP a json
$miJSON = json_encode($miArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

// lo de arriba json pretty etc es para que el archivo se vea bonito



//guardar json
file_put_contents( 'assets/datos/cervezas.json', $miJSON );

?>
<?php include_once 'bloques/_footer.php';?>