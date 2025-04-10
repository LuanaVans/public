<?php include '_cachitos/config.php';?>
<?php include '_cachitos/_basic-header.php';?>



<? 

// Create connection
$conn = new mysqli($servername, $username, $password, $basedatos);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Crear Tabla Usuario
/*
$sql = "CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `texto` text,
  `privilegios` int(2) NOT NULL,
  `fecha_reg` datetime NOT NULL
);";
*/

// Crear Tabla Config

$sql = "CREATE TABLE IF NOT EXISTS `config` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `tituloweb` varchar(255) NOT NULL,
  `descripcion` varchar(255),
  `moneda` varchar(12),
  `lang` varchar(8),
  `iva` decimal(4),
  `direccion` varchar(255),
  `telefono` int(12),
  `telefono2` int(12),
  `email` int(255),
  `rrss` text,
  `cif` varchar(32),
  `color` varchar(32)
);";


echo "<pre>".$sql."</pre>";


if ($conn->query($sql) === TRUE){
  echo "Se ha creado ";
} else {
  echo "Error: " . $conn->error;
}


// cierre de conexión
$conn->close();



?>

<p> Se acaba de crear la tabla Usuarios y la tabla configuración</p>

<a href="--install.php">Volver a Instalador</a>