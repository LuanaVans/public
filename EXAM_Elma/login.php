
<? include 'assets/bloques/_header.php'; ?> 
<?require_once 'assets/bloques/_config.php'; ?>





<?php
//definimos el usuario y la contraseña que son correctas
$usuarioCorrecto="elma";
$passwordCorrecta="deftones";





// comprobamos que el formulario es rellenado vía post
if (isset($_POST['usuario']) && isset($_POST['password'])) {

    //guardamos los datos introducidos por el usuario en vañiables
   $usuarioIngresado= $_POST['usuario'];
   $passwordIngresado = $_POST['password'];



// comprobamos si el usuario y la contraseña son correctos
    if($usuarioCorrecto == $usuarioIngresado && $passwordCorrecta == $passwordIngresado){
        include ('nuevo.php'); //si son correctos, se carga el archivo del admin para añadir más obras

    }
    else {
        echo "Las Credenciales son Incorrectas"; //si no son correctas, se muestra este mensaje 

    }
}
    else{
        ?>
<form method="POST" action="login.php" class="formulario">

<label for="usuario">Usuario:</label>
<input type="text" id="usuario" name="usuario">
<label for="password">password</label>
<input type="password" id="password" name="password">

<button>Ingresar</button>


</form>
<?php
    }
    ?>


<? include 'assets/bloques/_footer.php'; ?>
