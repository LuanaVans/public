<?php include '_header.php';?>

<?php
// aquí el usuario y la contraseña buena:
$usuarioValido="fran";
$passValido="admin";

//if(isset($_POST['usuario']) && isset($_POST['pass'])){
if(isset($_POST['username'])){
    $usuario=$_POST['username'];
    $pass=$_POST['pass'];

    if($usuario === $usuarioValido && $passValido===$pass){
    
    session_start();
    // Guardar datos de sesión
    $_SESSION['username'] =$usuario;

    echo "Has iniciado sesión correctamente ".$_SESSION["username"]. "ahora puedes acceder al área privada si lo deseas." ;

    }

    else{
        echo '<p>La conatraseña es incorrecta</p>';  
        echo '<p><a href="recuperar.php">Recuperar contraseña </p>';    
        echo '<a href="iniciar.php" class="active">Volver a intentar</a>';    
    }
}

else{
?>
    <form action="iniciar.php" method="POST">
    
    <label for="usarname">usuaario</label>
    <input type="text" name="username" id="usarname"><br>

    <label for="pass">Contraseña</label>
    <input type="password" name="pass" id="pass"><br>

    <input type="submit">
    </form>

    <?php
}   


?>
    
    <a href="privado.php">Area Privada</a><br>
    <a href="cerrar.php">Forzar cierre de sesión</a><br>
    <?php include '_footer.php';?>