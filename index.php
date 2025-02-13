<?php
$data = [
    ['Dia 1', '/dia1', 1],
    ['Dia 2', '/dia2', 1],
    ['Restaurante', '/restaurante', 1],
    ['json', '/json', 1],
    ['GET', '/get', 1],
    ['Dia 6', '/restaurante2', 1],
    ['Dia 7', '/dia7', 1],
    ['Dia 8', '/VIAJES', 1],
    ['Dia 9', '/cervezapp', 1]
];


 echo '<h1>LOS EJERCICIOS DE ELMA</h1>';
 /*
 echo '<ul>';

 for($i=0; $i<count($datos); $i++){
    echo '<li> <a href="'.$datos[$i][1].'">'.$datos[$i][0].'</a></li>';
}
echo '</ul>';
*/

foreach($data as $valor) {
    if($valor[2]){
    echo '<li> <a href="'.$valor[1].'">'.$valor[0].'</a></li>';
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0 auto;
            padding: 20px;
            max-width: 560px;
            background:white;
            border-radius:50px;
        }

        html {
            padding: 20px;
            background:tan;
        }

        h1 {
            font-size: 24px;
            font-family: sans-serif
            font-weight: bold;
        }

        ul {
            list-style: none;
        }
        li{font-family:sans-serif;
        font-size: 20px;
        padding:10px;
        
        }
        a{text-decoration:none;
        color:black;}


    </style>

</head>

<body>

</body>

</html>