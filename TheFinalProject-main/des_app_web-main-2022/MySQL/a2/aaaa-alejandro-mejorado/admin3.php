<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cssadmin3.css">
</head>
<body>
    
</body>
</html>


<?php

$columnas = [
    ["producto", "text", "producto"],
    ["precio", "text", "precio"],
    ["foto", "text", "foto"],
    ["codigo", "number", "codigo"],
    ["marca", "text", "marca"],
    ["descripcion", "text", "descripcion"],
    ["categoria", "text", "categoria"],
    ["stock_ini", "number", "stock_ini"],
    ["entradas", "number", "entradas"],
    ["salidas", "number", "salidas"],
    ["total", "number", "total"],
    ["animal", "text", "animal"],
    ["tamano", "text", "tamano"],
    ["uni_med", "text", "uni_med"],
    ["valor_unidad", "text", "valor_unidad"],
    ["activo", "text", "activo"]
];

?>

<form method="POST" action="procesar_formulario.php">
    <div class="input-container">
    
        <?php
        foreach ($columnas as $columna) {
            $nombreColumna = $columna[0];
            $tipoEntrada = $columna[1];
            $textoColumna = $columna[2];

            echo "<div>";
            echo "<label for='$nombreColumna'>$textoColumna:</label>";
            echo "<input type='$tipoEntrada' id='$nombreColumna' name='$nombreColumna' required>";
            echo "</div>";
        }
        ?>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </div>
</form>







