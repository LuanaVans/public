<?php
// simulación de datos de la tabla Usuarios
$miusuario ="fran";
$mipassword="12345";
$miemail="info@miguelesteban.net";
// $mirol="admin";
$mirol="trabajador";

// Datos de la base de datos
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "miweb";

// Abrir conexión con la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
// Comprobar que la conexión
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}






// Chequea si la sesión se ha iniciado.
// Si se ha iniciado. Si no se ha iniciao se inicia y si se ha iniciado ya no se inicia
function chekSesiones(){
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}





?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
</head>
<body>
    <header>
        <h3>TecnoHome</h3>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <?php
                // abrimos el sistema de sesiones
                chekSesiones();

                if (isset($_SESSION['rol']) &&  $_SESSION['rol']== 'admin') { ?>
                    <li><a href="privado.php">Privado</a></li>
                    <li><a href="usuarios.php">Usuarios</a></li>
                <?php } ?>
                <li><a href="contacto.php">Contacto</a></li>
                
                <?php
                if (isset($_SESSION['rol']) &&  $_SESSION['rol']== 'admin') { ?>
                    <li><a href="cerrarsesion.php">Cerrar Sesión</a></li>
                    <? } 
                else{?>
                    <li><a href="login.php">Iniciar Sesión</a></li>

                <?      } ?>
            </ul>
        </nav>
    </header>
    <main>