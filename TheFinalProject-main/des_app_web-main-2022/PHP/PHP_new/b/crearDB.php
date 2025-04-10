

<?php
/*---Crear conexión  conn= variable para conexión*/
// $conn= new mysqli('localhost','root','root');/*(servidor,usuario, contraseña)*/

$serverName = 'localhost';
$user = 'root';
$password = 'root';
//---Creación database
$nombreBaseDatos = 'alumnos';

$conn = new mysqli($serverName,$user,$password);
/*--comprobamos que hay conexión*/ 
if ($conn->connect_error){
    die ('Algo has hecho mal, no te conecta...Miguel tenemos un problema -'.$conn->connect_error);
}
else{
    echo'La conexión se ha realizado ';
}

echo ' Para blabla';


// $sql = "CREATE DATABASE myDBea";
/*realizamos la consulta de SI exite la base de datos y sino la CREARA */
$sql = "CREATE DATABASE IF NOT EXISTS $nombreBaseDatos";
/*si realizas la conexión y me debuelves que es exacta */
if ($conn->query($sql) === TRUE) {
  echo "<br>La base de datos $nombreBaseDatos ha sido creada correctamente.... O ya estaba creada anteriormente. ";
} else {
  echo "<br>Error NO ha sido creada la  base de datos: $nombreBaseDatos" . $conn->error;
}

//------Hasta aquí hemos creado la base de datos










/*--cerramos la conexión */
$conn->close();




?>