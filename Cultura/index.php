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
        echo "<li class='container'>
        <div class='contenedor'>
        <img src='{$row['img_url']}' alt='Imagen del evento'class='evento'>
        </div>
        <div class='contenedor'>
        <h2>{$row['nombre']}</h2>
            <p>Tipo: {$row['tipo']}</p>
            <p>Descripcion: {$row['descripcion']}</p>
            <p>Fecha Inicio: ".date("d M Y", strtotime($row['fecha_inicio']))."</p>
            <p>Fecha Fin: ".date("d M Y", strtotime($row['fecha_inicio']))."</p>
            <p>Hora: ".date('H:i', strtotime($row['hora']))."</p>
            <p>Lugar: {$row['lugar']}</p>
            <p>Dirección: {$row['direccion']}</p>
            <p>Precio: {$row['precio']}€</p>
        </div>
        </li>";
    


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









