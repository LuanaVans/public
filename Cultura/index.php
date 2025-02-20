<?php
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

// desplegar los datos 

$sql=" SELECT * FROM eventos";

$resultado_array = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado_array) > 0) {
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($resultado_array)) {
        echo "<div class='container'>
        <h2>{$row['nombre']}</h2>
        <img src='{$row['img_url']}' alt='Imagen del evento'>
        <p>{$row['tipo']}</p>
        <p>{$row['descripcion']}</p>
        <p>{$row['fecha_inicio']}</p>
        <p>{$row['fecha_fin']}</p>
        <p>{$row['hora']}</p>
        <p>{$row['lugar']}</p>
        <p>{$row['direccion']}</p>
        <p>{$row['precio']}</p>
        </li>
        </div>";
    }
    echo "</ul>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="datos/style.css">
    <title>Document</title>
    
</head>
<body>
    <a href="insertar.php">Agregar Evento</a>
</body>
</html>









