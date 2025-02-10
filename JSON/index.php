<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: sans-serif;
            background: tan;

        }


        ul {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            list-style: none;
        }

        li {
            flex: 1 1 120px;
            background: white;
            border-radius: 10px;
            padding: 10px;
        }

        li h2{font-size:19px;}

        img {
            max-width: 100%;
            height: 250px;
            object-fit: cover;
            aspect-ratio: 1/1;
            border-radius: 30px;
        }

        p {
            text-align: center;
        }
    </style>


</head>

<body>




    <?php
$construccion=true;

$archivo='datos.json';
if(file_exists($archivo)){
    $archivoJSON=file_get_contents($archivo);
    $datos= json_decode($archivoJSON,true);



    if($construccion){
        echo "<pre>";
            print_r($archivoJSON);
        echo "</pre>";
        }
    
    echo "<ul>";
    foreach ($datos["datos"] as $valor){
        echo "<li>";
        echo '<img src="'.$valor["img"].'" />';
        echo "<h2>".$valor['nombre']."</h2>";
    
        echo "<p>".$valor["autor"]."<p>";
        echo "<p>{$valor["fecha"]}<p>";
        echo "<p>".$valor["dato1"]."<p>";
        echo "</li>";
    }
    echo "</ul>";
}
else{
echo "No se puede cargar el archivo".$archivo;
}
?>



</body>

</html>