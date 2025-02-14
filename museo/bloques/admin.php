<?php $empresa ='admin';




//cargamos el archivo JSON y lo traducimos a un array PHP
$archivo='assets/datos/museo.json';   //ruta del JSON

$museo = cargarJSON($archivo);     //llamada a la función de config.php donde carga el JSON y lo convierte en array que llamaremos $museo

debugPrint_r($museo);           // revisamos si $museo tiene datos


// recolectamos los datos del formulario
if(isset($_GET['titulo'])){ // si existe obra en el GET
    $imagen = $_GET['imagen']; // guardamos en $obra lo que venga en el GET obra
    $titulo = $_GET['titulo']; // guardamos en $autor lo que venga en el GET autor
    $autor = $_GET['autor'];
    $anio = $_GET['anio'];
    $estilo = $_GET['estilo'];
    $tecnica = $_GET['tecnica'];

    // agregamos la nueva obra al array museo
    $museo['obras'][] = array('imagen' => $imagen, 'titulo' => $titulo, 'autor' => $autor, 'año' => $anio, 'estilo' => $estilo, 'tecnica' => $tecnica);



    debugPrint_r($museo);           // revisamos si $museo tiene datos


    $museoJSON = json_encode($museo, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    file_put_contents($archivo, $museoJSON);
}




?>

<form action="admin.php"
method="get">
    <p>Incluya su obra</p>
<label for="imagen">Imagen:
    <input type="text" id="imagen" name="imagen" placeholder="url">
</label>
<label for="titulo">Título:
    <input type="text" id="titulo"  name="titulo" placeholder="título">
</label>
<label for="autor"> Autor:
    <input type="text" id="autor"  name="autor" placeholder="autor">
    </label>
    <label for="anio">Año:
    <input type="text" id="anio" name="anio" placeholder="anio">
</label>
<label for="estilo">Estilo:
    <input type="text" id="estilo"  name="estilo" placeholder="estilo">
</label>
<label for="tecnica"> Técnica:
    <input type="text" id="tecnica"  name="tecnica" placeholder="tecnica">
    </label>
<button type="submit">Enviar</button>
</form>






