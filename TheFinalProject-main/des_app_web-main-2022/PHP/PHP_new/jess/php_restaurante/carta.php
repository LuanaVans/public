<?php  $titulin="Bienvenidos a Pepito Grillo";?> 

<?php include '_cachitos/_header.php';?>

<?php
    // Create connection
    $conn = new mysqli($servername, $username, $password, $basedatos);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

$sql = "SELECT * FROM comidas WHERE activado = 1";

$result = $conn->query($sql);
echo '<ul class="carta-comidas">';
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $precioconiva =$row["precio"]+($row["precio"]*($iva/100));
    
    echo "<li class='listcarta'>";
    echo '<img src="./img/'.$row["foto"].'" alt="'.$row["nombre"].'">';
      echo '<div>';
        echo "<h3>".$row["nombre"]. "</h3>";
        echo "<p class='precio'>$precioconiva $moneda</p>";
      echo '</div>';
    echo "<p>".$row["descripcion"]. "</p>";
    echo "</li>";
    //<img src="./img/01.jpg"> (HTML)
  }
  echo '</ul>';

} else {
  echo "0 results";
}
$conn->close();
?>

<?php include '_cachitos/_footer.php';?>