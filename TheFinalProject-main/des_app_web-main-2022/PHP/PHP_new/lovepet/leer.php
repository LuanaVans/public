<?php include 'inc/header.php';?>
    <h1>Lectura de Datos de la BBDD</h1>





    <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "lovepet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM animales";
$result = $conn->query($sql);

echo '<ul class="listaAnimales">';

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    echo "<li>";
    echo "<img src='img/". $row["imagen"]."'>";
    echo "<h2>".$row["nombre"]."</h2>";
    echo "<p>".$row["descripcion"]."</p>";
    echo "</li>";
  }
} else {
  echo "0 animales encontrados";
}

echo "</ul>";

$conn->close();
?>





<?php include 'inc/footer.php';?>