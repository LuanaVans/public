<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leer base de datos</title>
</head>
<body>

<h1>Leer contenido de la base de datos</h1><?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "local";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT id, nombre, apellidos FROM alumnos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - mi alumno: " . $row["nombre"]. " " . $row["apellidos"]. "<br>";
  }
} else {
  echo "0 alumnos van a tu clase, eres lo peor";
}
$conn->close();
?>
</body>
</html>