<?
function chekSesiones(){
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

chekSesiones();
?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <header>

  <h1>MI WEB</h1>
  <nav>
   <ul class="lista">
      <li> <a href="index.php">inicio</a></li>
      <li> <a href="nosotros.php">nosotros</a></li>
      <? if(!isset($_SESSION['lasesion'])){?>
      <li> <a href="loguin.php">loguin</a></li>
      <?   }  ?>
<? if(isset($_SESSION['lasesion']) && $_SESSION['lasesion']=="admin"){?>
     <li> <a href="micuenta.php">micuenta</a></li>
      <li><a href="oferta_especiales.php">ofertas</a></li>
      <li><a href="consejos.php"></a> consejos</li>
      <?   }  ?>
   </ul>
  </nav>
</header>
<main>




