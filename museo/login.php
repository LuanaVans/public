<?php $empresa ='Museo Dicampus';

require 'bloques/_config.php';
include 'bloques/_header.php'; 

?>

<h1>Museo Dicampus</h1>



<?php
//definimos el usuario y la contraseña que son correctas
$usuarioCorrecto="elma";
$passwordCorrecta="deftones";

//creamos un array con los datos de usuarios
$datosUsuario = 
    [
        "usuario"=> "richard",
        "password"=> "mate",
        "mail"=> "richar@deporte.com",
        "role"=> "admin"
    ];
[
    "usuario"=> "dani",
        "password"=> "canva",
        "mail"=> "dani@deporte.com",
        "role"=> "usuario"
];



// comprobamos que el formulario es rellenado vía post
if (isset($_POST['usuario']) && isset($_POST['password'])) {

    //guardamos los datos introducidos por el usuario en vañiables
   $usuarioIngresado= $_POST['usuario'];
   $passwordIngresado = $_POST['password'];

// comprobar que exista y que se imprima con la función debug que tenemos creada
    debug ("El usuario es: $usuarioIngresado <br>");
    debug ("La contraseña es: $passwordIngresado <br>");  

// comprobamos si el usuario y la contraseña son correctos
    if($usuarioCorrecto == $usuarioIngresado && $passwordCorrecta == $passwordIngresado){
        include ('bloques/admin.php'); //si son correctos, se carga el archivo del admin para añadir más obras

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
<label for="password">password</label>
<input type="password" id="password" name="password">

<button>Ingresar</button>


</form>
<?php
    }
    ?>




<?php
    include 'bloques/_footer.php'; 
    ?>