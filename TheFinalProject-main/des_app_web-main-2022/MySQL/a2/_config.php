<?php

//CONFIG
$miurl='http://desappweb.local/des_app_web/MySQL/a2/';
$miTituloWeb='Celulosaland';
$miTituloApartado=$miTituloWeb;


$miDivisa='€';

//Despistamientu zone
$miURL = $miurl;
$miTitulo = $miTituloWeb;


//Temporal para el desarrollo
//$usuarioCorrecto = "bea";
//$passwordCorrecto= "321";
//$rolCorrecto= "admin";

//echo 'config.php';

$connAbierta=false;

function abrirDB(){
    global $connAbierta;
    global $conn;
    //Base de Datos
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "bebeland";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Verificar conexión
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $connAbierta=true;

}



// FUNCIONES

//Conversión a decimal añadiendo divisa
function convertirDecimal($numero) {
    global $miDivisa;
    $decimal = number_format($numero, 2, '.', '');
    
    switch ($miDivisa) {
        case '€':
            $resultado = $decimal . '€';
            break;
        case '$':
            $resultado = '$' . $decimal;
            break;
        default:
            $resultado = $decimal;
            break;
    }
    
    return $resultado;
}











//Inicializa sistema de sesiones
session_start();

?>