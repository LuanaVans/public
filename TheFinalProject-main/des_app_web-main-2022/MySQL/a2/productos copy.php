
<style>
    table img{
        width:20px;
    }
    </style>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bebeland";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar conexión
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


//Consulta
$sql = "SELECT * FROM articulos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo '<table>';
  while($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td>'.$row["id"].'</td>';
    echo '<td><img src="img/'.$row["img"].'"></td>';
    echo '<td>'.$row["nombre"].'</td>';
    echo '<td>'.$row["descripcion"].'</td>';
    echo '<td>'.$row["precio"].'</td>';
    echo '</tr>';
  }
  echo '</table>';
} else {
  echo "0 results";
}

$conn->close();
?>