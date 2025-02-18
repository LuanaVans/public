<?php

// definimos una variable para usar como título de la página
$titulo="Streaming Film";

//hacemos el modo desarrollo
$debug=0;

function elma_debug($message){
    global $debug;
    if($debug){
        echo $message. "\n";
    }
}
elma_debug("Estamos en Desarrollo");

// función de debug print para ver el array
function elma_debugPrint_r($array) {
    global $debug;
    if($debug) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
    
}
// Creamos la función para cargar el array de películas

function elma_cargarJson($ruta){
   
if(file_exists($ruta)){
    $json = file_get_contents($ruta);
    $miArray = json_decode($json, true);
    return $miArray;
}
}
    
    ?>
    