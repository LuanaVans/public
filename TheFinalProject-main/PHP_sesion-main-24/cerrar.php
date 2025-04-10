<?php include '_header.php';?>

<?php
session_start();
// Eliminar el nombre de usuario:
unset($_SESSION["username"]);

// Eliminar todas las sesiones:
session_unset();

// Terminar la sesión:
session_destroy();
?>

    <h1>Se ha cerrado la sesión</h1>
    <a href="index.php" class="active">Volver a Inicio</a>
    
    <?php include '_footer.php';?>  