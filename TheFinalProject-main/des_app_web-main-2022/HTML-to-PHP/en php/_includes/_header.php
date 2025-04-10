
<?php
//datos de la web
$folder_img="img/";
$folder_css="css/";
$folder_include="include/";
$titulo_web="turismoastur";
$descripcion_web="pagina de turismo con puntos de interes en el principado de asturias";

//modo testeo
$debugging=0;

if($debugging){
    echo "estoy en modo depuración";
    echo "<style> *{border: solid 1px red;}</style>";
}

    // alerta('mensaje que queremos mostrar');
    function alerta($mensaje="sin mensaje"){
        global $debugging;
        if($debugging){
            echo "<div class='alerta'>";
            echo $mensaje;
            echo "</div>"; 
        }
    }

    alerta('esto sigue cargado');


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo_web ?></title>
    <link rel="stylesheet" href="<?php echo $folder_css ?>style.css">
</head>
<body>
    <header>
      <h1>Asturias, Paraiso Natural</h1>
      <nav>
      <?php include "_includes/_menu.php";?>
      </nav>

    </header>
    <main>