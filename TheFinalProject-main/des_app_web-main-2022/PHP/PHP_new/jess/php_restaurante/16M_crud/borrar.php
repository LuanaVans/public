<?php include 'header.php';?>
    
<?php

if(isset($_GET['id'])){
  $id=$_GET['id'];

$sql = "DELETE FROM eventos WHERE id =$id";
$result = $conn->query($sql);

echo "<p>El evento se ha borrado correctamente</p>";


} // primer if

else{
  echo '<p>No hemos encontrado el evento que quieres borrar <a href="index.php">volver a Lista de eventos haciendo click aquí</a></p>';
}


echo '<a href="insertar.php">Añadir Evento</a>';
?>
<?php include 'footer.php';?>
