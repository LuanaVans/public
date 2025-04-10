
<?
 $elusuario="yomismo";
 $password="loquequieras";
 if(isset($_POST['usuario']) && isset($_POST['pass'])){
   $nombreformulario= $_POST['usuario'];
   $passformulario = $_POST['pass'];
   
   if($nombreformulario==$elusuario && $passformulario==$password){ 
    
     session_start();
     $_SESSION['lasesion'] = "admin";
     $_SESSION['usuario'] = $nombreformulario;
     header('Location: micuenta.php');
    die();
    }
  }
  
  
  ?>
  <? include '_header.php'; ?>
<h2>mi web</h2>

<form action="" method="post">
    <label for="usuario">Usuario:</label>

    <input type="text" id="usuario" name="usuario"><br>

    <label for="pass">Contraseña</label>
    <input type="password" id="pass" name="pass"><br>

    <input type="submit" value="acceder"><br>
    <input type="button" value="Ver Contraseña" onclick="myFunction()">
</form>


<script>
function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>


 <a href="index.php?cerrarSesion">Cerrar Sesión</a>






<? include '_footer.php'; ?>