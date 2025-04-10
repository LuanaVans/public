<? include '_header.php'?>
<h1>Lista de Proyectos</h1>



<?php

$sql = "SELECT * FROM proyectos";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  echo '<ul class="lista">';
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<li>';
    echo '<a href="proyecto/'.$row["slug"].'">';
    echo '<img src="img/'.$row["img"].'" alt="'.$row["nombre"].'">';
    echo '<h3>'.$row["nombre"].'</h3>';
    echo '</a></li>';
  }
  echo '</ul>';

} else {
  echo "<p>0 proyectos cargados</p>";
}

?>
<? include '_footer.php'?>





