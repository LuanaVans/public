<?php 
require 'bloques/_config.php';
include 'bloques/_header.php'; 

?>

<h1>Añadir Película</h1>

<?php

$usuarioCorrecto="elma";
$passwordCorrecta="deftones";

if (isset($_POST['usuario']) && isset($_POST['password'])) {

    //guardamos los datos introducidos por el usuario en variables
   $usuarioIngresado= $_POST['usuario'];
   $passwordIngresado = $_POST['password'];

// comprobar que exista y que se imprima con la función debug que tenemos creada
    elma_debug ("El usuario es: $usuarioIngresado <br>");
    elma_debug ("La contraseña es: $passwordIngresado <br>");  

// comprobamos si el usuario y la contraseña son correctos
    if($usuarioCorrecto == $usuarioIngresado && $passwordCorrecta == $passwordIngresado){
        include ('Streming_film/admin.php'); //si son correctos, se carga el archivo del admin para añadir más obras

    }
    else {
        echo "Las Credenciales son Incorrectas"; //si no son correctas, se muestra este mensaje 

    }
}
    else{
        ?>
<form method="POST" action="login.php">

<label for="usuario">Usuario:</label>
<input type="text" id="usuario" name="usuario">
<label for="password">Password</label>
<input type="password" id="password" name="password">

<button type="submit">Ingresar</button>

</form>
<?php
    }
    ?>




<?php
    include 'bloques/_footer.php'; 
    ?>



