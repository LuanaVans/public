<? include '_config.php'?>
<? $miTituloApartado="Listado de Usuarios";?>
<? include '_header.php'?>


<?
//Si no puede estar aquí le mandamos al index
 if(!isset($_SESSION['rol'])){
    header('Location: index.php');
    die();
  }


?>




<?php


//abrir conexión (tengo una función pa esto en config.php)
abrirDB();


//Consulta
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo '<table>';
    echo '<th> id </th>';
    echo '<th> usuario </th>';
    echo '<th> rol </th>';
  echo '</thead>';
  while($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td>'.$row["id"].'</td>';
    echo '<td>'.$row["usuario"].'</td>';
    echo '<td>'.$row["rol"].'</td>';
    echo '<td><a href="edit.php?id=$row["id"]">Modificar</a></td>';
    echo '<td><a href="borrar.php?id=$row["id"]">Borrar</a></td>';
    echo '</tr>';
  }
  echo '</table>';
} else {
  echo "0 results";
}




    echo '<br><br><br>';
    echo '<a href="add.php">Crear nuevo usuario </a>';

?>




<? include '_footer.php'?>
