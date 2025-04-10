<?php include 'header.php';?>
    
<h1>Insertar Evento</h1>

<?php

if(isset($_GET['id'])){
  $id=$_GET['id'];
}



$sql = "SELECT * FROM eventos WHERE id =$id";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>

<form action="actualizar_datos.php" method="get">
  <input type="hidden" name="id" value="<? echo $row['id']?>">
  <label for="titulo">Titulo Evento</label>
  <input type="text" id="titulo" name="titulo" value="<? echo $row['titulo']?>">
  <label for="descripcion">Titulo Evento</label>
  <textarea id="descripcion" name="descripcion"><? echo $row['descripcion']?></textarea>
<input type="submit" value="Guardar Evento">

</form>


<?
  }
} else {
  echo "0 eventos encontrados";
}


?>






<?php 

include 'footer.php';?>
