<?php include 'inc/header.php';?>

<?php 

//comprueba si nos llegan datos via URL (metodo GET)
if(isset($_GET['nombre']) && isset($_GET['descripcion']) &&isset($_GET['imagen'])){
    
    $nombre=$_GET['nombre'];
    $descripcion= $_GET['descripcion'];
    $imagen = $_GET['imagen'];



    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "lovepet";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    

    /*
    $sql = "INSERT INTO `animales` (`nombre`, `descripcion`, `imagen`)
    VALUES ('".$nombre."', '".$descripcion."', '".$imagen."');";
    */


    $sql = "INSERT INTO animales (nombre, descripcion, imagen)
    VALUES ('".$nombre."', '".$descripcion."', '".$imagen."');";
    $result = $conn->query($sql);
    


    
    $conn->close();

    echo "<h1>Hemos añadido su $nombre a la base de datos.</h1>";
    echo "<p>Con la descripcion: $descripcion a</p>";
    echo "<img src='img/".$imagen."' alt='".$nombre."'>";






}
else{
    echo '<p>Lo sentimos pero necesita más datos. <a href="insertar.php">Rellene el formulario anterior completando todos los campos</a></p>';
}


?>


<?php include 'inc/footer.php';?>