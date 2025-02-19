<?php 
require 'bloques/_config.php';
include 'bloques/_header.php'; 
?>


<h1 class="titulo">Catálogo de Películas  Marvel</h1>
<p class="historia">El Universo Marvel  es una vasta y compleja franquicia de películas, cómics, series y otros medios, que ha cautivado a millones de fanáticos alrededor del mundo. Nacido de los cómics de Marvel Comics, este universo cinematográfico se caracteriza por la interconexión de sus historias y personajes a lo largo de diversas entregas.
Desde el estreno de Iron Man en 2008, el MCU ha traído a la pantalla grande a algunos de los héroes más icónicos de la cultura popular, como Spider-Man, Thor, Captain America, Hulk y Iron Man, entre muchos otros. Estos personajes, cada uno con su propio trasfondo y habilidades, se han unido en eventos masivos como Los Vengadores, donde luchan contra amenazas que ponen en peligro la estabilidad del mundo y, en ocasiones, del universo entero.
<br>
<br>

El MCU no solo se limita a los héroes. A lo largo de los años, ha introducido una serie de villanos memorables, como Thanos, Loki y Ultron, que desafían a los héroes en batallas épicas. Además, se han explorado diversos temas como la amistad, el sacrificio, la redención y el poder de la unidad frente a la adversidad.
Más allá de las películas, el Universo Marvel se expande en series de televisión, cómics y videojuegos, creando un mundo cohesivo y lleno de historias interconectadas. El MCU continúa evolucionando, trayendo nuevas fases y personajes que enriquecen aún más este universo, cautivando tanto a fanáticos nuevos como a aquellos que siguen sus historias desde sus primeros días en los cómics.
Marvel es mucho más que solo una franquicia de entretenimiento; es una parte importante de la cultura popular global, que sigue expandiéndose y ofreciendo nuevas aventuras a cada paso.</p>



<?php
// cargamos los datos del JSON
$ruta="assets/datos/datos.json";
elma_debugPrint_r(elma_cargarJSon($ruta));

// mostrar los datos cargados

echo '<ul class="galeria">';
//recorremos el array para mostrar todos los datos
$miArray=elma_cargarJSON($ruta);
foreach ($miArray['peliculas'] as $miPeli) {
    echo "<li class='item'>
    <img class='imagen' src='{$miPeli['imagen']}' alt='{$miPeli['titulo']}'>
    <div class='info'> 

    <h2>{$miPeli['titulo']}</h2>
    <p>{$miPeli['anio']}</p>
    <p>{$miPeli['director']}</p>
    <p>{$miPeli['resumen']}</p>
    <button class='ver'>Ver Película</button>
    
    
    
    </div>
    </li>";
}

    echo '</ul>';





?>


<?php
   include 'bloques/_footer.php';
  ?>

