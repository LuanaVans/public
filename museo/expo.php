<?php 
require 'bloques/_config.php';
include 'bloques/_header.php'; 

?>
<h1>Museo Dicampus</h1>

<?php

$archivo='./assets/datos/expo.json';
$museo=cargarJSON($archivo);
//mostrar los datos obtenidos en una lista de HTML


//recorremos el array para mostrar todos los datos
$array=cargarJSON($archivo);
foreach ($array['exposiciones'] as $miMuseo) 
{
   
    
echo "<div class='info'> 
    <h2>{$miMuseo['titulo']}</h2>

    <p>{$miMuseo['fecha']}</p>  
<img class='imagen' src='{$miMuseo['imagen']}' alt='{$miMuseo['titulo']}'>
    
    </div>";
}
   ?>
<?
    include 'bloques/_footer.php'; 
    ?>



