
<? include '_config.php'?>
<? $miTituloApartado="Inserción de Datos:";?>
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
?>

<form action="add_checker.php" method="POST">

<?
    foreach($elementos as $elemento){       
        echo '<label for="'.$elemento[0].'">'.$elemento[2].'</label>';
        echo '<input type="'.$elemento[1].'" id="'.$elemento[0].'" name="'.$elemento[0].'">';
    }
?>

<input type="submit" value="Enviarlooo!">

</form>


<? include '_footer.php'?>
