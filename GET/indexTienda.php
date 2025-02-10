
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{background: ligthblue;
        font-size:20px;
        font-family: sans-serif;
        max-width:520px;
        margin:40 auto;
        }
        input{margin:0 auto;}
    
    </style>
</head> 
<body>
    <form action="indexTienda.php" method="get">
        <label>Nombre:
    <input type="text" name="nombre" value="nombre"required></label>
    <label>Apellidos:
    <input type="text" name="apellidos" value="apellidos"required></label>
    <label>Dirección:
    <input type="text" name="dirección" value="direccion" required></label>
    <label>Email:
    <input type="text" name="email" value="email" required></label>
    <label>Teléfono:
    <input type="number" name="teléfono" value="telefono" required></label>
    <input type="submit" value="Enviar Pedido">
    </form>
   
    
</body>
</html>