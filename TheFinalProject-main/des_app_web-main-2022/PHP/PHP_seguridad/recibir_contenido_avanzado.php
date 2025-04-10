<?php

function miPrintR($valor, $txt="algo"){
echo '<pre>';
echo '//'.$txt;
print_r($valor);
echo '</pre>';
}

$datosBruto = $_GET; // Obtiene todos los datos GET

//print_r de lso datos
miPrintR($datosBruto,'CONTENIDO RECIBIDO EN BRUTO---');

//función para limpiar y sanitizar campos

function sanitizarCampos($datos){
    $datosSanit=array();

    foreach($datos as $campo=>$valor){
        switch($campo){
          //Sanitizar Números
            case 'telefono';
            case 'phone';case 'movil';case 'tel1';case 'tel2';
            case 'tel':
                $datosSanit[$campo]=filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
                break;
          //Sanitizar Emails
            case 'email';
            case 'mail';
                $datosSanit[$campo]=filter_var($valor, FILTER_SANITIZE_EMAIL);
                break;

          //Sanitizar Textos
            default:
            $datosSanit[$campo]=filter_var($valor, FILTER_SANITIZE_STRING);
        }
    }

    return $datosSanit;

}






//pasamos los datos por la función sanitizar

$datosLimpios = sanitizarCampos($datosBruto);

//print_r de lso datos
miPrintR($datosLimpios,'CONTENIDO LIMPIADO ---');



$nombre=$datosLimpios['nombre'];
$email=$datosLimpios['email'];
$telefono=$datosLimpios['telefono'];
$texto=$datosLimpios['texto'];



// Mostramos los datos o operamos con ellos
//Contenido a mostrar en pantalla
echo "<h1>Los campos se han limpiado</h1>";
echo "Nombre:".$nombre."<br>";
echo "Email:".$email."<br>";
echo "Teléfono:".$telefono."<br>";
echo "Texto:".$texto."<br>";
?>

<p>Una vez recibido este contenido, ya procederíamos a enviarlo a la base de datos, mostrarlo, o procesarlo de la manera que consideresmos oportuna</p>