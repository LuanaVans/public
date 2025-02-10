<?php 

//Variable que usaremos para saber si estamos en debug o no
$debug = true;

//Función que se encargará de mostrar un mensaje si estamos en modo debug
function debug($message) {
    global $debug; //Globalizamos la variable para poder acceder a ella

    //Si debug es true escribimos el mensaje
    if ($debug) {
        echo $message . "\n";// Con el \n hacemos un salto de línea
    }
}

//Llamamos a la función
debug('Hola estás en modo desarrollo 😎');
debug('Hola menganito 👽');

//Función que pinta bonito nuestro array, recibe como parámetro un array
//debugPrint_r($ejemploArray);
function debugPrint_r($array){
    global $debug;//Globalizamo la variable debug
    if($debug)// Si el modo debug está activado escribe por pantalla
    {
       echo '<pre>';
       print_r($array);
       echo '</pre>';
    } 
}

//Función para cargar nuestro JSON
function cargarJSON($ruta)
{
     //Si el archivo existe
    if(file_exists($ruta)){
        $miJSON = file_get_contents($ruta); //Guardamos el contenido 
        $miArray = json_decode($miJSON, true); //Decodificamos el contenido
        return $miArray;//Devolvemos el valor que hay en la variable Array
    }
    else{
        echo 'Onde ta la mi cerveza?';//En el caso de que no exista el archivo mostramos un mensaje por pantalla
    }
}