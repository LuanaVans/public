<?php require "inc/_config.php"?>
<?php $titulo= "Insertar Alumno Nuevo en la Base de 
datos"?>
<?php include "inc/_header.php"?>

<section id="agregar">
    <h2>Agregar Nuevo Alumno</h2>
    <form action="_insertar.php" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre del alumno:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellido">Apellidos del alumno:</label>
        <input type="text" id="apellido" name="apellido" required>
        
        <label for="fecha">Fecha de nacimiento:</label>
        <input type="date" id="fecha" name="fecha" required>

        <label for="email">Email alumno:</label>
        <input type="email" id="email" name="email" required>

        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" required>        
        
        <label for="foto">Foto:</label>
        <input type="text" id="foto" name="foto" required>

        <label for="desc">Descripción:</label>
        <textarea id="desc" name="desc" rows="4" cols="50"></textarea>

        <button type="submit">Insertar Alumno</button>
    </form>
</section>

<?php include "inc/_footer.php"?>