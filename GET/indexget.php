<?php
echo "Felicidades!!!!!".$_GET['nombre'];

//echo "hola".$GELT['nombre']. yes friki de: ".$_GELT['frikada'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html{background: ligthblue;
        font-size:80px;
        font-family: sans-serif;
        color:red;
        text-align:center;
        margin:0 auto;
        margin-top:50px;
    }
    html:hover {background:blue;
    color:white;}
    </style>
</head>
<body>
    <form action="indexget.php" method="get">
    <input type="text" name="nombre" value="name">
    <input type="submit" value="enviar">
    
    </form>
    <?php

    if(!isset($_GET['nombre'])){
        echo "<h2> Inserte un nombre y dar a intro.</h2>
<form action='indexget.php' method='get'>
<input type='text' name='nombre'>
<input type='submit'>
</form>";
    }
?>
    
</body>
</html>