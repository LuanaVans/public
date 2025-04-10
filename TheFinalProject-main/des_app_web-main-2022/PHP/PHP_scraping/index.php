<?php
// Configurar la codificación de caracteres
header('Content-Type: text/html; charset=UTF-8');
mb_internal_encoding('UTF-8');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scraping de El País</title>
</head>
<body>
    
<h1>Scraping de la web de El País</h1>
<p>Captura todos los h2</p>

<?php
// URL de la página web que quieres analizar
$url = "https://www.elpais.com";

// Crear un objeto DOMDocument
$dom = new DOMDocument('1.0', 'UTF-8');

// Suprimir los errores por etiquetas mal formadas en la página
libxml_use_internal_errors(true);

// Obtener el contenido de la página y convertirlo a UTF-8
$html = file_get_contents($url);
$html = mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8');

// Cargar el contenido HTML
$dom->loadHTML($html, LIBXML_NOERROR | LIBXML_NOWARNING);

// Crear una lista desordenada (ul) para almacenar los resultados
echo "<ul>";

// Obtener todos los elementos h2 de la página
$h2Elements = $dom->getElementsByTagName("h2");

// Recorrer los elementos h2 y mostrar su contenido en la lista
foreach ($h2Elements as $h2) {
    $texto = html_entity_decode($h2->textContent, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    echo "<li>" . htmlspecialchars($texto, ENT_QUOTES | ENT_HTML5, 'UTF-8') . "</li>";
}

// Cerrar la lista desordenada
echo "</ul>";
?>
</body>
</html>
