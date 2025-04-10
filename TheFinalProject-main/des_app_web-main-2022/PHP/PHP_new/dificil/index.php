<?php $titulo="Inicio"; ?>
<?php include 'fragmentos/_header.php';?>
<h1>Bienvenidos</h1>
<p>Este es un sistema de testeo de Base de datos.</p>
<p>Si es la primera vez que utilizas esto quizás tengas que realizar la instalación: en tal caso <a href="install.php">Haz Click aquí</a>.</p>
<h2>Aquí podrás:</h2>
<ul>
    <li><a class="btn" href="read_list.php">Ver la Lista de Alumnos</a></li>
    <li><a class="btn" href="insertar.php">Añadir nuevos alumnos</a></li>
    <li><a class="btn" href="ficha.php">Ver ficha de alumnos</a></li>
    <li><a class="btn" href="install.php">Resetear el sistema</a></li>
</ul>
<?php include 'fragmentos/_footer.php';?>