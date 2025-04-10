<?php include '_cachitos/config.php';?>
<?php include '_cachitos/_basic-header.php';?>



<? 

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $basedatos";
if ($conn->query($sql) === TRUE) {
  echo "La base esta creada";
} else {
  echo "Error en la creación de la base de datos: " . $conn->error;
}

// cierre de conexión
$conn->close();



?>

<p> Se acaba de crear la base de datos:Restaurante</p>

<a href="--install.php">Volver a Instalador</a>