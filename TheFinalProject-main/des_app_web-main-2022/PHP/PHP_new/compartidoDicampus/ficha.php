<!-- <? $titulo= 'Ficha'?>
<? include 'fragmentos/header.php'?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

         //importar el JSON de la carpeta "JSON/"
    $miJSON = file_get_contents('JSON/'.$archivoJSON);

    //convertir JSON a Array PHP
    $datos = json_decode($miJSON, true);
    
    $ficha =$datos[0];

    echo '<div class="ficha">';
    echo '<img src="'.$ficha['img'].'">';
    echo '<h2>'.$ficha['nombre'].'</h2>';
    echo '<p>'.$ficha['texto'].'</p>';
    echo '<p><span>Year:</span>'.$ficha['year'].'</p>';
    echo '<p><span>Dato1:</span>'.$ficha['dato1'].'</p>';
    echo '<p><span>Dato2:</span>'.$ficha['dato2'].'</p>';
    echo '</div>';




    ?>

<style>
    body{
        background-image:url('<?php echo $ficha['img']; ?>');
        }
</style>


<? include 'fragmentos/header.php'?>

