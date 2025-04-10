<?php

print_r($_GET);


//Valores por defecto
 $nombre="Pepito";
 $ciudad="Madrid";

//Si existe nom y si no está vacío
if(isset($_GET["nom"])){
    if(!empty($_GET["nom"])){
    $nombre=$_GET["nom"];
    }
    
}

if(isset($_GET["city"])){
    if(!empty($_GET["city"])){
    $ciudad=$_GET["city"];
}
}



echo "<h1> hola $nombre, eres de $ciudad </h1>";
