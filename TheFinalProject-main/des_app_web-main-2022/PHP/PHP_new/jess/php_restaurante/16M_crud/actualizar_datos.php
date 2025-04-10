<?php include 'header.php';?>
<?php
if(isset($_GET['id']) &&isset($_GET['titulo']) && isset($_GET['descripcion'])){
  $id=$_GET['id'];
  $titulo=$_GET['titulo'];
  $descripcion=$_GET['descripcion'];


$sql = "UPDATE `eventos` SET
`titulo` = '".$titulo."',
`descripcion` = '".$descripcion."'
WHERE `id` = '".$id."';";

$result = $conn->query($sql);

echo "<h2>$titulo con la descripción $descripcion se ha actualizado correctamente en la base de datos</h2>";



echo '<a href="insertar.php">Añadir Otro Evento</a>';
echo '<a href="index.php">Volver a Lista</a>';

}

else{

  echo "Error, vuelta al panel editar, actulice e inténtelo de nuevo";
}


?>


<?php include 'footer.php';?>