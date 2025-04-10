<?php include 'header.php';?>
    
<h1>Listar Elementos</h1>

<?php

$sql = "SELECT * FROM eventos";
$result = $conn->query($sql);

echo "<table>";
echo "<tr><th>titulo</th><th>descripcion</th><th>ver</th><th>editar</th><th>borrar</th>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>". $row["titulo"]. "</td>";
    echo "<td>". $row["descripcion"]. "</td>";
    echo '<td><a href="ver.php?id='.$row["id"].'">ver</a></td> ';
    echo '<td><a href="editar.php?id='.$row["id"].'">editar</a></td> ';
    echo '<td><a href="borrar.php?id='.$row["id"].'">borrar</a></td> ';
    echo "</tr>";
  }
} else {
  echo "0 eventos encontrados";
}


echo "</table>";
echo '<a href="insertar.php">Añadir Evento</a>';
?>





<?php include 'footer.php';?>
