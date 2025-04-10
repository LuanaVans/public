<?php include '_cachitos/config.php';?>
<?php include '_cachitos/_basic-header.php';?>

<? 

// Create connection
$conn = new mysqli($servername, $username, $password, $basedatos);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Crear Tabla
$sql = "CREATE TABLE IF NOT EXISTS `comidas` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(255) NOT NULL,
  `descripcion` longtext,
  `foto` varchar(255),
  `precio` decimal NOT NULL,
  `ingredientes` longtext,
  `alergenos` text(520) NOT NULL,
  `class` varchar(255),
  `tipo` varchar(255),
  `inicioestacional` date,
  `finestacional` date,
  `activado` BOOLEAN DEFAULT 1
);";
if ($conn->query($sql) === TRUE){
  echo "Se ha creado ";
} else {
  echo "Error: " . $conn->error;
}

// cierre de conexión
$conn->close();



?>

<p> Se acaba de crear la base de datos:Restaurante</p>

<a href="--tablaConfig.php">crear tabla config</a>
<a href="--install.php">Volver a Instalador</a>