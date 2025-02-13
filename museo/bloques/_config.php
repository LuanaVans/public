<?php



/**** esto luego pa config.php */

$debug= 1;

function debug($message){
    global$debug;
    if($debug)
    {
        echo $message. "n/";
    }

}

debug('estás en modo desarrollo');
  


//mostrar el array
function debugPrint_r($array){
    global $debug;
    if($debug)
    {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
}


function cargarJSON($ruta){
        // cargar el JSON
    if (file_exists($ruta))
    {
        $miJSON=file_get_contents($ruta);
        $miArray=json_decode($miJSON,'true');
        return $miArray;
    }
    else{
        echo "No hemos guardado nada";
    }
        
}

/**** hasta aquí luego pa config.php */


