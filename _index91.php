l<?php
//hacer un archivo directorio para ordenar las carpetas
$directorio="./";
$arrayDirectorio= scandir($directorio);
$arrayNoQuiero=['.', '..']; //lista de elementos que no quiero que se muestren

//borrar las carpetas que no queremos que se vean
$arrayDirectorio= array_diff($arrayDirectorio, array('.','..'));
//print_r($arrayDirectorio);
echo '<ul class="ejercicios">';

foreach ($arrayDirectorio as $archivo){
    $clase="";
    //para destacar carpetas
    if ($archivo=='index.php'){
        $icono="📝";
        $clase='archivo';
    }
    else{
        $icono="📁";
        $clase='carpeta';
    }
    // mostrar el contenido del directorio
        echo "<li><a href='$archivo' class='$clase'>$icono.$archivo</a></li>";
    };
    
echo '</ul>';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
    body {
        margin: 0 auto;
        padding: 0;
    }

    ul {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    li {
        padding: 30px;
        list-style: none;
        border: 2px solid black;
        border-radius: 20px;

    }

    a {
        padding: 10px;


        text-decoration: none;
        color: black;
        font-weight: bold;
        font-size: 20px;
    }

    *:hover {
        outline: 1px solid red;
    }
    </style>
</head>

<body>

</body>

</html>