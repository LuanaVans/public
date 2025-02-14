<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
    body {
        margin: 0 auto;
        padding: 0;
    }

    ul {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    li {
        padding: 30px;
        list-style: none;
        border: 2px solid black;
        border-radius: 20px;

    }

    a {
        padding: 10px;


        text-decoration: none;
        color: black;
        font-weight: bold;
        font-size: 20px;
    }
    .clase{background: lightblue;}
    .carpeta{background: lightgreen;}

    *:hover {
        outline: 1px solid red;
    }


.destacado{background: lightgray;

}

.archivo{
background: lightblue;
}

.carpeta{background:lightgreen

}


    </style>
</head>

<body>


<h1>Ejercicios de clase</h1>
<a href="index.php"> 🎪volver al Inicio</a>
<ul class="galeria"></ul>

<?php

$directorio="./";

//verificar si hay Get en la URL y es un directorio
if(isset($_GET['dir'])){
    $dirLimpio=basename($_GET['dir']);
    $directorio.=$dirLimpio . "/"; //limpia el directorio
}

if(!is_dir($directorio)){  //mensaje de error si el directorio está vacío
    echo"<p> Error el directoio no existe</p>";
}
else{ 
        
    //hacer un archivo directorio para ordenar las carpetas
   
    $arrayDirectorio= scandir($directorio);
    $arrayNoQuiero=['.', '..']; //lista de elementos que no quiero que se muestren

    //borrar las carpetas que no queremos que se vean
    $arrayDirectorio= array_diff($arrayDirectorio, array('.','..')); //borrar del array directorio los elementos que no queremos



    //print_r($arrayDirectorio);
    echo '<ul class="ejercicios">';

    foreach ($arrayDirectorio as $archivo){
        $clase="";
        $rutaCompleta =$directorio.$archivo;

        //para destacar carpetas
        if ($archivo=='index.php'){
            $clase='destacado ';
        }

        if (is_file($rutaCompleta)){ //variable icono igual al emoticono
            $icono="📝";
            $clase.='archivo'; //el punto es para sumar una clase
            $link= $rutaCompleta;

        }
        else{
            $icono="📁";
            $clase.='carpeta';
            $link= "index.php?dir=".urlencode($archivo);
        }
        // mostrar el contenido del directorio
            echo "<li><a href='$link' class='$clase'>$icono $archivo</a></li>";
        };
        
    echo '</ul>';

}
?>


</body>

</html>