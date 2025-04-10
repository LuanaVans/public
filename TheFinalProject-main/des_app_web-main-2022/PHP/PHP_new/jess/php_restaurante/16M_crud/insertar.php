<?php include 'header.php';?>
    
<h1>Insertar Evento</h1>

<?php
if(isset($_GET['titulo']) && isset($_GET['descripcion'])){
  $titulo=$_GET['titulo'];
  $descripcion=$_GET['descripcion'];


$sql = "INSERT INTO eventos (titulo, descripcion)
VALUES ('".$titulo."', '".$descripcion."');";
$result = $conn->query($sql);

echo "<h2>$titulo con la descripción $descripcion se ha insertado correctamente en la base de datos</h2>";



echo '<a href="insertar.php">Añadir Otro Evento</a>';
echo '<a href="index.php">Volver a Lista</a>';

}

else{

?>


<form action="" method="get">
  <label for="titulo">Titulo Evento</label>
  <input type="text" id="titulo" name="titulo">
  <label for="descripcion">Titulo Evento</label>
  <input type="text" id="descripcion" name="descripcion">

<input type="submit" value="Guardar Evento">

</form>


<? } ?>

<?php include 'footer.php';?>
