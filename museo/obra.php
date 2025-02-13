

<?php $empresa ='Museo Dicampus';

require 'bloques/_config.php';
include 'bloques/_header.php'; 

//CARGAMOS JSON
        //ubicación de JSON y función para obtener datos
        $ruta='./assets/datos/museo.json';
        //debugPrint_r(cargarJSON($ruta));

        //recorremos el array para mostrar todos los datos
        $miArray=cargarJSON($ruta);


// obtener que obra hemos cargado GET
if_file_exists('obra'){
    $obra = $_GET['obra'];
}





foreach ($miArray['obras'] as $miMuseo) {
    echo "
    <img class='imagen' src='{$miMuseo['imagen']}' alt='{$miMuseo['titulo']}'>
    <div class='info'> 

    <h2>{$miMuseo['titulo']}</h2>

    <p>{$miMuseo['autor']}</p>
    <p>{$miMuseo['año']}</p>
    <p>{$miMuseo['estilo']}</p>
    <p>{$miMuseo['tecnica']}</p>
    <a href='obras.php?obras={$miMuseo['titulo']}'>Ver más</a>
    </div>";
}


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