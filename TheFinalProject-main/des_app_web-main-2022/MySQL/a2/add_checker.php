<? include '_config.php'?>
<? $miTituloApartado="Insertado en la base de datos";?>
<? include '_header.php'?>


<?php
    $elementos =[
        ['nombre',      'text',     'Nombre usuario:'],
        ['descripcion', 'text',     'Tu descripcion:'],
        ['precio',      'number',   'El Precio:'],
        ['stock',       'number',   'Stock:'],
        ['img',         'text',     'Imagen destacada:'],
        ['slug',        'text',     'Texto para URL:']
    ];

//Tomar los datos que llegan por POST
// if(isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['stock']) && isset($_POST['img']) && isset($_POST['slug']) ){
//     $nombre= $_POST['nombre'];
//     $nombre= $_POST['nombre'];
//     $nombre= $_POST['nombre'];
//     $nombre= $_POST['nombre'];
//     $nombre= $_POST['nombre'];
//     $nombre= $_POST['nombre'];
// }

// crear un array
$datos= [];


foreach($elementos as $elemt){
    if(isset($_POST[$elemt[0]])){
        array_push($datos, $_POST[$elemt[0]] );
    }
    else{
        //echo "<p>No se han encontrado los elementos esperados $elemt[0]</p>";
        // si se entra en la url sin los datos POSTs requeridos lo mandamos al index
        header('Location: index.php');
    }
}





// INSERTAR DATOS EN LA BASE DE DATOS
// Obtener lo que nos llega por el POST y enviarlo a la DB
//abrir conexión (tengo una función pa esto en config.php)
abrirDB();

//Consulta
$sql = "INSERT INTO `articulos` (`nombre`, `descripcion`, `precio`, `stock`, `img`, `slug`) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]');";
$result = $conn->query($sql);


    echo '<h3>Datos insertados:</h3>';
    echo '<ul>';
    foreach( $datos as $dato){
        echo "<li>$dato</li>";
    }
    echo '<ul>';



    // echo '<pre>';
    // print_r($datos);
    // echo '</pre>';







?>
    <? include '_footer.php'?>