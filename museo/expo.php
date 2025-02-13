<?php 
require 'bloques/_config.php';
include 'bloques/_header.php'; 
$empresa ='Museo Dicampus';

?>
<h1>Museo Dicampus</h1>

<div class="exposiciones">

<?php

$archivo='./assets/datos/expo.json';
$museo=cargarJSON($archivo);
//mostrar los datos obtenidos en una lista de HTML


//recorremos el array para mostrar todos los datos
$array=cargarJSON($archivo);



foreach ($array['exposiciones'] as $miMuseo) 
{
echo "<div class='expo'> 
<img class='imagen' src='{$miMuseo['imagen']}' alt='{$miMuseo['titulo']}'>
<div class='fichita'>
    <h2>{$miMuseo['titulo']}</h2>

    <p class='fecha'>{$miMuseo['fecha']}</p>  
    </div>
    
</div>";
}

   ?>

</div>

<?   include 'bloques/_footer.php';     ?>



