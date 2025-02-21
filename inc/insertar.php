<?php require "inc/_config.php"?>
<?php $titulo= "Insertar Alumno Nuevo en la Base de 
datos"?>
<?php include "inc/_header.php"?>

<section id="agregar">
    <h2>Agregar Nuevo Alumno</h2>
    <form action="_insertar.php" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre del alumno:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="dni">DNI del alumno:</label>
        <input type="text" id="dni" name="dni" required>
        
        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto" accept="image/*" required>

        <button type="submit">Insertar Alumno</button>
    </form>
</section>

<?php include "inc/_footer.php"?>