<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lector de Blogs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">inicio</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Mi Blog</h1>


<form action="">
    <select name="r" id="resultados">
        <option value="3">Tres</option>
        <option value="5">Cinco</option>
        <option value="8">Ocho</option>
    </select>
    <input type="submit" value="Cargar">
</form>



<?
// r llega por GET y es la cantidad de resultados

if(isset($_GET['r']) & isset($_GET['p'])){
    $resultados = $_GET['r'];
    $pagina =$_GET['p'];

    if($resultados>10){
        $resultados=10;
        echo"<p>Onde vas ho!, prueba 10 y luego si quies más me cuentes.</p>";
    }
}
else{
    $resultados = 3;
    $pagina = 0;
}

?>


<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "miblog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
http://wp.local/


$sql = "SELECT * FROM articulos LIMIT $resultados OFFSET $pagina";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<h2>".$row["id"].$row["titulo"]."</h2>";
  }
} else {
  echo "0 artículos encontrados";
}
$conn->close();


$pagina = $pagina + $resultados;
$resultados;
?>

<a href="index.php?p=<? echo $pagina;?>&r=<? echo $resultados;?>">Siguientes páginas</a>
<a href="index.php?p=0&r=3">Volver a Página 0</a>

    </main>
    <footer>
        <p>&copy; Copyright 2023 Mi lector de blog.</p>
    </footer>
    
</body>
</html>