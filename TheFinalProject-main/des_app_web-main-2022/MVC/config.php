<?php

/*  Themes activos ahora mismo:
    Tema 1: fourty
    Tema 2: augustheme

*/

$lang ="es-ES";         // Define el idioma para el HTML lang
$miTheme ="fourty";     // Define el theme a utilizar
$miURL="http://desappweb.local/des_app_web/MVC";    // Ruta Global
$miTitulo="Mi Página Web";              // Título del site
$separador="|";                         // Separador para titulo de apartado | web
$miColor="tan";                         // Color principal.
$miFuente="Arial, sans-serif";          // Tipografía principal.

// Elementos del menú de la web..
$miMenu = [
    ['Inicio','index.php','0','Página de Inicio','ini'],
    ['Servicios','servicios.php','0','Página de Inicio','ser'],
    ['Productos','productos.php','0','Página de Inicio','pro'],
    ['Contacto','contacto.php','0','Página de Inicio','cnt'],
    ['Facebook','https://facebook.com','1','Página de Facebook','fb']
];



/* * * * * * * * * * FUNCIONES * * * * * * * * * * */

// esto en wp se llama get_header();
// hace un include del header
function obtener_cabecera(){
    global $miTheme;

    $elemento ='themes/'.$miTheme.'/header.php'; 
    include $elemento;
}

// esto en wp se llama get_footer();
// hace un include del footer
function obtener_pie(){
    // global $miURL;
    global $miTheme;

    $elemento ='themes/'.$miTheme.'/footer.php'; 
    include $elemento;
}

//escribe el título del site
function el_titulo(){
    global $miTitulo;
    echo $miTitulo;
}

//escribe la ruta a la carpeta del theme (tema)
function ruta_a_theme(){
    global $miTheme;

    $elemento ='themes/'.$miTheme; 
    echo $elemento;
}



//Título del apartado + título de la página:
// Inicio - Mi Página Web

function apartadoyTitulo(){
    global $miTitulo;
    global $miTituloApartado;
    global $separador;

    $titulos= $miTituloApartado." ".$separador." ". $miTitulo;

    echo $titulos;
}

//Constructor de Menú
function menuBuilder(){
    global $miMenu;



    echo '<ul class="menu">';
    foreach($miMenu as $e){
        echo '<li>';
        echo '<a href="'.$e[1].'" class="'.$e[4].'" ';

        if($e[2]){
            echo 'target="_blank" ';
        }

        echo '>'.$e[0].'</a>';
        echo '</li>';

    }
    echo '</ul>';

}


//Cargar Color y Fuente principal
function mainColor(){
    global $miColor;
    global $miFuente;
    echo "<style>:root{--c:".$miColor."; --ff:".$miFuente.";}</style>";
}

//lanzar función al final de la etiqueta <head>
function finHead(){
mainColor();
}

//lanzar función al final de la etiqueta <footer>
function finFooter(){
}

//Carga idioma en la etiqueta lang del HTML
function lang(){
    global $lang;
    echo $lang;
}