<?php
//cargar aquí la url principal donde se encuentra el index (o la home) de tu proyecto
$url="http://desappweb.local/des_app_web/PHP_portfolio/";
// y metele una barra al final

//Nombre empresa
$titulo ="Diseño Gráfico y Multimedia";

//Teléfono
$telefono=645658488;

//Datos de conexión
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "portfolio";


// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar conexión
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<? echo $url?>style.css">
</head>
<body>
    <header>
        <nav>
            <? include '_menu.php'?>
        </nav>
    </header>
    <main>