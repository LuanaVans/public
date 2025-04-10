

<? include '_header.php'?>
<?php

if(isset($_GET['s'])){
    $slug=$_GET['s'];
}


$sql = "SELECT * FROM proyectos WHERE slug='$slug'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<h1>'.$row["nombre"].'</h1>';
    echo '<p>'.$row["descripcion"].'</p>';
    echo '<img src="../img/'.$row["img"].'" alt="">';
  }

} else {
  echo "<p>No se ha podido cargar el proyecto <a></a></p>";
}

?>
<? include '_footer.php'?>





