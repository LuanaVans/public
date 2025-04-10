<? include '_config.php'?>
<? $miTituloApartado="Inicio de Sesión";?>
<? include '_header.php'?>

<?
if(isset($_GET['cosa'])){
   echo '<h2>Datos incorrectos</h2>';
}

if(isset($_COOKIE["Haker"])) {
    //La cookie "Haker" existe....

   // Obtener el valor actual de la cookie para comprovar los intentos
   $valorCookie = $_COOKIE['Haker'];
    
   // Verificar si el valor es mayor o igual a 3
    if ($valorCookie >= 3) {
       //aquí lo que pasaría si la cookie sí existe
   echo "<p>Se han producido demasiados intentos de acceso inválidos a la plataforma. Por cuestiones de seguridad no podrá over a insertar la contarseña en los próximos 5min</p>";
  }
  else {
  
   //Redirigir a Formulario de Longin con mensaje de error
   ?>
   <form action="login_check.php" method="POST">
   <input type="text" id="usuario" name="usuario" placeholder="usuario"><br>
   <input type="password" id="password" name="password" placeholder="contraseño/ña"><br>
 
   <input type="submit"  value="Acceder">
 </form>
 
 <?
  }


 } else {
  
  //Redirigir a Formulario de Longin con mensaje de error
  ?>
  <form action="login_check.php" method="POST">
  <input type="text" id="usuario" name="usuario" placeholder="usuario"><br>
  <input type="password" id="password" name="password" placeholder="contraseño/ña"><br>

  <input type="submit"  value="Acceder">
</form>

<?
 }


?>




<? include '_footer.php'?>