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
//esto viene de algún lao
$perro=1; // $perro = false;
$gato=0; // $gato = true;
$tortuga=0;
$hamster=0;



?>


<form action="">
    <h2>Tienes mascota:</h2>
    <label for="perro">Perro</label>
    <input type="checkbox" name="perro" id="perro" <?php if($perro){ echo 'checked';}?> >

    <label for="gato">Gato</label>
    <input type="checkbox" name="gato" id="gato" <?php if($gato){ echo 'checked';}?> >

    <label for="Tortuga">Tortuga</label>
    <input type="checkbox" name="Tortuga" id="Tortuga" <?php if($tortuga){ echo 'checked';}?> >

    <label for="Hamster">Hamster</label>
    <input type="checkbox" name="Hamster" id="Hamster" <?php if($hamster){ echo 'checked';}?> >
</form>
    
</body>
</html>