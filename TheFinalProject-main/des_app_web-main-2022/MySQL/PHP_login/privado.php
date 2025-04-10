<? include '_header.php'; ?>

<?php

// Creamos la variable en algún momento
chekSesiones();

// Comprobamos si existe con isset()
if (isset($_SESSION['nombre'])) {
    // Si esta identificado, en otras palabras existe la variable, le saludamos
    echo 'Hola ' . $_SESSION['nombre'];
    echo '<p>Texto super secreto y privado.</p>';
    echo '<img src="tesoro.jpg">';
    echo '<h2>¿No te gusta votar? pues toma dos tazas</h2>';
    
} else {
    // En caso contrario redirigimos el visitante a otra página
    header('Location: expulsado.php');
    die();
}

?>

<a href="cerrarsesion.php">Cerrar Sesión</a>



<? include '_footer.php'; ?>