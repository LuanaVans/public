<?php

//$raizSitio = $_SERVER['DOCUMENT_ROOT'];
//echo $raizSitio;
//echo "<br>";
//$raizUrl = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']);
//echo $raizUrl;

$host='http://' . $_SERVER['HTTP_HOST'];
echo '<link rel="stylesheet" href="'.$host.'/_config/main.css">';

?>


<link rel="stylesheet" href="style.css">

<?php




// ejemplo: https://www.applesfera.com/feedburner.xml

// Ruta del archivo feedburner.xml
$rutaArchivo = 'xml/feedburner.xml';

// Cargar el archivo XML
$xml = simplexml_load_file($rutaArchivo);

// Recorrer los elementos del feed
foreach ($xml->channel->item as $item) {
    // Obtener los datos del artículo
    $titulo = $item->title;
    $descripcion = $item->description;
    $imagen = $item->enclosure['url'];
    $enlace = $item->link;

    // Mostrar el contenido con etiquetas HTML
    echo '<h2>' . $titulo . '</h2>';
    echo '<p>' . $descripcion . '</p>';
    echo '<img src="' . $imagen . '" alt="Imagen del artículo">';
    echo '<a href="' . $enlace . '">Leer más</a>';
    echo '<hr>'; // Opcional: agregar una línea horizontal entre los artículos
}
?>
