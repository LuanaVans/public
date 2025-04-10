<?php

// Referencias:
// https://byte-mind.net/filtrado-de-datos-de-entrada-en-php/
// http://www.estrellateyarde.org/manual-de-php/manual-de-php-sanear-datos-de-usuario

//Revisamos todos los campos obtenidos a través de GET:

$nombre = $_GET['nombre'];
$email = $_GET['email'];
$telefono = $_GET['telefono'];
$texto = $_GET['texto'];

//Verificar si los campos exiten o están vacíos
// ---------------------------------------------

// if(empty($nombre) || empty($email) || empty($telefono) || empty($texto)){
//     echo "Porfavor, rellne todos los campos del formulario (volver atrás)";
// }

//Como hacer esto uno por uno es un rollo.
// para no crear lo mismo una y otra vez voy a crear un array
// que liste los elementos a revisar

$campos =[ $nombre, $email, $telefono, $texto];
//if(in_array("",[ $nombre, $email, $telefono, $texto])){

if(in_array("",$campos)){
    //si algún campo está vació, mostrar un mensaje de error
     echo "<p>Porfavor, rellene todos los campos del formulario (volver atrás)</p>";
}

function limpiarEntrada($dato){
    $dato =trim($dato);
    //trim elimina espacios en blanco al principio y al final

    $dato =stripslashes($dato);
    // Elimina barras invertidas

    $dato = htmlspecialchars($dato);
    //convertir caracteres especiales en etiquetas HTML
    

    $dato =filter_var($dato , FILTER_SANITIZE_STRING);


    return $dato;
}




$nombre =   limpiarEntrada($nombre);
$email=     limpiarEntrada($email);
$telefono=  limpiarEntrada($telefono);
$texto=     limpiarEntrada($texto);


//Validar campos específicos 

if(!preg_match('/[a-zA-Z0-9 ]/',$nombre)){
    echo "El nombre insertado contiene caracters inválidos";
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "El EMAIL insertado contiene caracters inválidos";
}

//if(!preg_match('/^\d{9}$/',$telefono)){
if(!preg_match('/[0-9]/',$telefono)){
    echo "El teléfono insertado contiene caracteres inválidos";
}

$telefono = filter_var($telefono, FILTER_SANITIZE_NUMBER_INT);


if(!preg_match('/[a-zA-Z0-9 ]/',$texto)){
    echo "El texto insertado contiene caracters inválidos";
}

if(strlen($texto)>3000){
    echo "El texto no ha de contener más de 3000 caracteres";
}


//Como todo loa nterior es un rollo vamos a hacer una función que valide todos los campos
/*
function validarCampo($campo,$tipo){
    switch($tipo){
        case'texto':
            //Validar campo tipo texto
            break;

        default:
        return "Tipo de camp no válido";
    }
}
*/


// Mostramos los datos o operamos con ellos
//Contenido a mostrar en pantalla
echo "<h1>Los campos se han limpiado</h1>";
echo "Nombre:".$nombre."<br>";
echo "Email:".$email."<br>";
echo "Teléfono:".$telefono."<br>";
echo "Texto:".$texto."<br>";
?>

<p>Una vez recibido este contenido, ya procederíamos a enviarlo a la base de datos, mostrarlo, o procesarlo de la manera que consideresmos oportuna</p>