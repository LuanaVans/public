<?php
function wp_header(){
    include_once "header.php";
}

// Incluir header o lo que sea con funciones

$carpetaIncludes= "fragmentos";
$carpetaIncludes= "img";
$carpetaIncludes= "css";


function inc($v){
    global $carpetaincludes; // llamamos a la variable externa
    switch ($v) {
        case "header":
            include "bloques/_header.php";
            break;
            case "pie:"
            case "footer:"
            include "bloques/_footer.php";
            break;
            default:
            include "bloques/$v";
}
}

//función para un enlace
function link($texto, $url, $target){
    if ($target){
        $target=_blank;
    }
    else{
        $target="_self";
    }
    
echo <a href="$url" class="$class" target="$target">$texto</a>;
 
}
link("click aquí,"www.google.es", "miEnlace",1)

// 

?php>
