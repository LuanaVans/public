<?php $empresa ='Museo Dicampus';

require 'bloques/_config.php';
include 'bloques/_header.php'; 

?>

<h1>Museo Dicampus</h1>

<form method="POST" action="login.php">

    <label for="usuario">Usuario:</label>
    <input type="text" id="usuario" name="usuario">
    <label for="password">password</label>
    <input type="password" id="password" name="password">

    <button>Ingresar</button>
    
   
</form>


<?php
$usuarioCorrecto="elma";

$passwordCorrecta="deftones";

if (isset($_POST['usuario']) && isset($_POST['password'])) {
   $usuarioIngresado= $_POST['usuario'];
   $passwordIngresado = $_POST['password'];

// comprobar que exista y que se imprima
    debug ("El usuario es: $usuarioIngresado <br>");
    debug ("La contraseña es: $passwordIngresado <br>");  


    if($usuarioCorrecto == $usuarioIngresado && $passwordCorrecta == $passwordIngresado){
        header ("Location: admin.php");

    }


}


    include 'bloques/_footer.php'; 
    ?>