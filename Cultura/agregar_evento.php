<?php
$nombre= $_GET['evento'];  
$img= $_GET['img'];  
$tipo= $_GET['tipo'];  



// conexión a la base de datos 

$dbHost="localhost";    
$dbUser="root";         
$dbPass="root";         
$dbName="cultura";         

// Create connection
$conn = new mysqli($dbHost, 'root', 'root', $dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";






$sql = "INSERT INTO eventos (nombre, img_url, tipo) VALUES ('$nombre', '$img', '$tipo');";
if ($conn->query($sql) === TRUE) {
  echo "el valor $nombre se ha insertado correctamente<br>";
  echo "<a href='index.php'>Regresar</a>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



?>