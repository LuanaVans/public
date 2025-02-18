<?php 
require 'bloques/_config.php';
include 'bloques/_header.php'; 

?>
<h1>Catálogo de series</h1>
<p>¡Bienvenido a nuestro catálogo de series más valoradas! Aquí podrás encontrar algunas de las series más aclamadas por la crítica y queridas por los fans, con historias que te atraparán desde el primer episodio. Ya sea que busques acción, drama, comedia o misterio, tenemos algo para todos los gustos. A continuación, te presentamos algunas de las joyas más destacadas que no puedes dejar de ver:</p>


<?php
// cargamos los datos del JSON
$ruta="assets/datos/series.json";
elma_debugPrint_r(elma_cargarJSon($ruta));

// mostrar los datos cargados

echo '<ul class="galeria">';
//recorremos el array para mostrar todos los datos
$miArray=elma_cargarJSON($ruta);
foreach ($miArray['series'] as $miSerie) {
    echo "<li class='item'>
    <img class='imagen' src='{$miSerie['imagen']}' alt='{$miSerie['titulo']}'>
    <div class='info'> 

    <h2>{$miSerie['titulo']}</h2>
    <p>{$miSerie['anio']}</p>
    <p>{$miSerie['director']}</p>
    <p>{$miSerie['resumen']}</p>
    <button class='ver'>Ver Serie</button>
    
    
    
    </div>
    </li>";
}

    echo '</ul>';





?>


<?php
   include 'bloques/_footer.php';
  ?>









