

<?php
/*---Crear conexión  conn= variable para conexión*/
// $conn= new mysqli('localhost','root','root');/*(servidor,usuario, contraseña,nombre de la base de datos)*/

$serverName = 'localhost';
$user = 'root';
$password = 'root';
$nombreBaseDatos = 'sor_presa_1';


$conn = new mysqli($serverName,$user,$password,$nombreBaseDatos);
/*--comprobamos que hay conexión*/ 
if ($conn->connect_error){
    die ('Algo has hecho mal, no te conecta...Miguel tenemos un problema -'.$conn->connect_error);
}
else{
    echo'La conexión se ha realizado ';
}

echo ' Para blabla';

//---Creación database
// $sql = "CREATE DATABASE myDBea";
/*realizamos la consulta de SI exite la base de datos y sino la CREARA */
// sql to create table
$sql = "CREATE TABLE `tablaRedonda` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(255) NOT NULL,
  `modelo` varchar(255) NOT NULL
);";
$sql = "CREATE DATABASE IF NOT EXISTS $nombreBaseDatos";
/*si realizas la conexión y me debuelves que es exacta */
if ($conn->query($sql) === TRUE) {
  echo "<br>La base de datos $nombreBaseDatos ha sido creada correctamente.... O ya estaba creada anteriormente. ";
} else {
  echo "<br>Error NO ha sido creada la  base de datos: $nombreBaseDatos" . $conn->error;
}

//------Hasta aquí hemos creado la base de datos


//----Aquí empezamos a crear las tablas de la base








/*--cerramos la conexión */
$conn->close();




?>