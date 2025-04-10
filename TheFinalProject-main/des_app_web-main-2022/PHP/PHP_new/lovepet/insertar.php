<?php include 'inc/header.php';?>
    <h1>Insertar Nuevos Animales</h1>
    <p>Inserte en el siguiente formulario los datos para añadir un nuevo animal a LovePets</p>


<form action="incluir_datos.php" method="get">

    <label for="nombre">Nombre del Tipo</label>
    <input type="text" id="nombre" name="nombre" required><br>

    <label for="imagen">Nombre archivo</label>
    <input type="text" id="imagen" name="imagen" required><br>

    <label for="descripcion">Descripción del Animal</label>
    <textarea id="descripcion" name="descripcion" required></textarea><br>


    <input type="submit" value="Añadir Animal">
    <input type="reset" value="Borrar Datos">

</form>

<?php include 'inc/footer.php';?>