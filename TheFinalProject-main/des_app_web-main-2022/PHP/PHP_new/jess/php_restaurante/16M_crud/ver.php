<?php include 'header.php';?>
    
<?php

if(isset($_GET['id'])){
  $id=$_GET['id'];


$sql = "SELECT * FROM eventos WHERE id =$id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    echo "<h1>". $row["titulo"]. "</h1>";
    echo "<p>". $row["descripcion"]. "</p>";
    echo "<p>". $row["lugar"]. "</p>";
    echo "<p>". $row["img"]. "</p>";
    echo "<p>". $row["fecha_ini"]. "</p>";
    echo "<p>". $row["fecha_fin"]. "</p>";

    echo '<a href="index.php">Volver a Lista</a> ';
    echo '<a href="editar.php">editar</a> ';
    echo '<a href="borrar.php">borrar</a> ';
  }
} else {
  echo '<p>El evento solicitado se ha borrado o no existe. Puede <a href="index.php">volver a Lista de eventos haciendo click aquí</a></p>';
}


} // primer if

else{
  echo '<p>El evento solicitado se ha borrado o no existe. Puede <a href="index.php">volver a Lista de eventos haciendo click aquí</a></p>';
}


echo '<a href="insertar.php">Añadir Evento</a>';
?>
<?php include 'footer.php';?>
