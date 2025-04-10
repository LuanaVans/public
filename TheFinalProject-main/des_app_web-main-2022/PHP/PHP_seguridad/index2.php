<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Avanzado2: Limpiar y validar contenido insertado en el formulario</h1>
    <h2>Sanitazión y escape de datos, o revisión de código malicioso</h2>
    <p>En el siguiente contenido vamos a intentar romper el sistema insertando bien un fragmento de código CSS, JS o SQL.</p>
    <p> Por ejemplo si insertásemos un style con todos los elementos display none, desapareceria todo el contenido de la página web</p>
    <p>Si inserto un script con un alert podría salirme ese alert cada vez que se carga la web con el contenido</p>
    <p>Si inserto una consulta SQL podría borrar el contenido de todas la base de datos</p>


<form action="recibir_contenido_avanzado.php" method="get">
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <label for="telefono">Telefono</label>
    <input type="tel" min="600000000" max="799999999" id="telefono" name="telefono" required>

    <label for="texto"></label>
    <textarea name="texto" id="texto" cols="30" rows="10" required></textarea>

    <input type="submit" value="Enviar">
</form>

</body>
</html>