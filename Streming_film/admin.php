<?php

require 'bloques/_config.php';
include 'bloques/_header.php'; 

?>

<form action="admin.php" method="GET">
    <p>Incluya Película</p>

    <label for="titulo">Título:
        <input type="text" id="titulo" name="titulo" placeholder="Título de la película" required>
    </label>

    <label for="imagen">Imagen:
        <input type="text" id="imagen" name="imagen" placeholder="URL de la imagen">
    </label>


    <label for="anio">Año:
        <input type="number" min="1900" max="2099" step="1" value="<?php echo date('Y')?>"  id="anio" name="anio" placeholder="Año de lanzamiento" />

    </label>

    <label for="director">Director:
        <input type="text" id="director" name="director" placeholder="Director de la película">
    </label>

    <label for="resumen">Resumen:
        <textarea  id="resumen" name="resumen" placeholder="Resumen de la película"></textarea>
    </label>

    <button type="submit">Enviar</button>
</form>

<?php
$archivo='assets/datos/datos.json';   //ruta del JSON

$peli = elma_cargarJson($archivo);   //llamada a la función de config.php donde carga el JSON y lo convierte en array que llamaremos $peli

elma_debugPrint_r($peli);         // revisamos si $peli tiene datos

                 // mostramos los datos del JSON


// recolectamos los datos del formulario
if(isset($_GET['imagen'])){ 
    $imagen = $_GET['imagen']; 
    $titulo = $_GET['titulo']; 
    $anio = $_GET['anio'];
    $director = $_GET['director'];
    $resumen = $_GET['resumen'];
    

   
    $peli['peliculas'][] = array('titulo' => $titulo, 'imagen' => $imagen,  'anio' => $anio, 'director' => $director, 'resumen' => $resumen);



    elma_debugPrint_r($peli);           


    
}
// codificar el array a php
$datos = json_encode($peli, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
file_put_contents($archivo, $datos); 


?>
