



<?php

echo '<h1>Lo que se obtiene a través del GET es un array</h1>';

echo '<pre>';
echo print_r($_GET);
echo '</pre>';

echo "--------------------";

$foto = $_GET['foto'];
$categoria =$_GET['categoria'];
$marca =$_GET['marca'];
$color =$_GET['color'];




// echo '<h1>Levis</h1>';
echo '<h1>' .$_GET["marca"]. '</h1>' ;
echo '<p>' .$_GET["categoria"]. '</p>';

echo "<h1> $marca </h1>";
echo "<p> $categoria </p>";

//echo '<img src="img/tarta_01.jpg">';
echo '<img src="img/'.$_GET["foto"].'">'; 

//echo '<style> body{background:red;} </style>';
echo '<style> body{background:'.$_GET["color"].';} </style>';

if($_GET["categoria"]=="tarta"){
    echo '<p> quieres tarta pero compra un pantalon</p>';
}

else if($_GET["categoria"]=="pantalon"){
    echo '<p> quieres pantalon pero compra una tarta</p>';
}

else {echo '<p> quieres '.$_GET["categoria"].' pero compra primero un pantalon o una tarta</p>';}
?>