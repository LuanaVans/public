

<?php 
require 'bloques/_config.php';
include 'bloques/_header.php'; 

?>
<h1>Museo Dicampus</h1>
<p class="presentacion">Nuestro museo alberga una serie de exposiciones permanentes que permiten a los visitantes explorar distintas épocas, estilos y culturas, desde la antigüedad hasta la contemporaneidad. Cada una de nuestras colecciones ha sido cuidadosamente seleccionada y preservada con el objetivo de ofrecer una visión integral de la evolución humana y su relación con el arte y la cultura a lo largo del tiempo.

Además, organizamos exposiciones temporales que enriquecen y complementan nuestra oferta cultural, presentando trabajos de artistas contemporáneos, así como retrospectivas que exploran la obra de figuras históricas y movimientos artísticos de gran relevancia. Estas exposiciones son oportunidades para conocer nuevas perspectivas, reflexionar sobre el arte en sus distintas manifestaciones y disfrutar.</p>
<hr>
<?
//ubicación de JSON y función para obtener datos
$ruta='./assets/datos/museo.json';
debugPrint_r(cargarJSON($ruta));

//mostrar los datos obtenidos en una lista de HTML

echo '<ul class="galeria">';
//recorremos el array para mostrar todos los datos
$miArray=cargarJSON($ruta);
foreach ($miArray['obras'] as $miMuseo) {
    echo "<li class='item'>
    <img class='imagen' src='{$miMuseo['imagen']}' alt='{$miMuseo['titulo']}'>
    <div class='info'> 

    <h2>{$miMuseo['titulo']}</h2>

    <p>{$miMuseo['autor']}</p>
    <p>{$miMuseo['año']}</p>
    <p>{$miMuseo['estilo']}</p>
    <p>{$miMuseo['tecnica']}</p>
    </div>
    </li>";
}

    echo '</ul>';

    ?>
<section>
    <ul class="horarios">Horario>
    <li> Lunes a Viernes: 10:00 a 20:00</li>
    <li>Sábados y Domingos: 10:00 a 14:00</li>
    <li>Festivos: Cerrado</li>
</ul>
</section>

<hr>





<?
    include 'bloques/_footer.php'; 
    ?>