<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

//hacemos la consulta para extaer de la DDBB todos los tipos de colores que se ofren ahora mismo




//SELECT * FROM coches WHERE disponible = 1












$modelos_color=[
  'Rosa' => 330,
  'Caramelo' => 42,
  'Verde' => 110,
  'Azul' => 197,
  'Dark Blue'=>250,
  'Bosque'=>162,
  'Miel'=>70,
  'Casi Coral'=>40,
  'Passion Red'=>8,
  'Marrón'=>63,
  'Violeta'=>290
];
?>



    

<h1>De qué color quieres tu coche</h1>
<form action="coche2.php" method="get">
    <label for="color">Seleccione color</label>
   
    <?php
echo '<select name="g" id="color">';
foreach($modelos_color as $tono => $grados){
  //echo "<li>".$tono." es igual a ".$grados."</li>";
  echo '<option value="'.$grados.'">'.$tono.'</option>';
}
echo '</select>';


?>

    <input type="submit" value="Dame mi coche">
</form>

</body>
</html>