<?php
include '_header.php'; 

// Recibir desde el formulario via POST:
if(isset($_POST['usuario']) && isset($_POST['pass'])){
    $POSTnombre = $_POST['usuario'];
    $POSTpass = $_POST['pass'];

    //Realizar consulta a la base de datos
    $sql = "SELECT * FROM usuarios WHERE usuario='$POSTnombre' AND password='$POSTpass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
           $miusuario = $row["usuario"];
           $mipassword = $row["password"];
           $miemail = $row["email"];
           $mirol = $row["rol"];
        }
      } else {
        echo "No se han encontrado resultados";
      }



}
















//Chequeo de contraseña
if(($POSTnombre == $miusuario) && ($POSTpass == $mipassword)){
    echo "<p>Usario y contraseña correctos</p>";
    echo "<h1>Bienvenido ".$miusuario."</h1>";

    // SI LA CONTRASEÑA ES CORRECTA, INCIA LA SESION con usuario miguel y rol admin
    // Abrir sistema de sesiones
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['nombre'] = $miusuario;
    $_SESSION['rol'] = $mirol;
    // a partir de aquí la sesión está abierta.



}
// Si la contraseña no es correcta
else{
    //echo "Contraseña Incorrecta";
    header('Location: login.php?m');
}
/*
echo "<br>";
echo "$POSTnombre:".$POSTnombre;
echo "<br>";
echo "$POSTpass:".$POSTpass;
echo "<br>";
echo "miusuario:".$miusuario;
echo "<br>";
echo "$mipassword:".$mipassword;
echo "<br>";
*/







// Comprobamos si existe con isset()
if (isset($_SESSION['nombre'])) {
    // Si esta identificado, en otras palabras existe la variable, le saludamos
    echo 'Hola ' . $_SESSION['nombre'].' <br>';
    echo 'tu rol es: ' . $_SESSION['rol'].' <br>';
    echo '<p>Puedes acceder a la zona  <a href="privado.php">Privada</p>';
} else {
    // En caso contrario redirigimos el visitante a otra página
    header('Location: expulsado.php');
    die();
}

?>

<? include '_footer.php'; ?>