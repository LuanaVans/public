
<? include '_header.php'; ?>

<? 

if(isset($_GET['email'])){
  $email = urldecode($_GET['email']);
 
  if($miemail == $email){
    echo '<h1>Te hemos enviado un email</h1>
    <p>Revisa la bandeja de entrada de tu correo (también el apartado span si no lo encuentras). El Remitente debería ser micorreo@ejemplo.com.</p>';
  
    
    //Envio de email:
    $to = $email;
    $subject = "Reseteo de de Contraseña";

    $message = "
    <html>
    <head>
    <title>Reseteo de de Contraseña</title>
    </head>
    <body>
    <h1>Reseteo de de Contraseña</h1>
    <table>
    <tr>
    <th>Usuario</th>
    <th>$miusuario</th>
    </tr>
    <tr>
    <td>Contraseña</td>
    <td>$mipassword</td>
    </tr>
    </table>
    </body>
    </html>
    ";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";


    // More headers
    $headers .= 'From: <webmaster@example.com>' . "\r\n";
    $headers .= 'Cc: myboss@example.com' . "\r\n";

    mail($to,$subject,$message,$headers);


  
  }
  else{
    echo "<h1>No hemos encontrado su email en la base de datos</h1>
    <p>El email <strong> $email</strong> no aparece asignado a ningún usuario registrado en la plataforma.</p>";
  }
}
else{

?>

<h1>A ver si lo apuntas en un papelín o algo</h1>
<p>Dinos tu email y te enviaramos un enlace para que puedas resetear tu contraseña</p>

<form action="lostpass.php" method="get">
    
    <label for="email">Email</label>
    <input type="email" id="email" name="email"><br>
    <input type="submit" value="Enviar correo para resetear contraseña"><br>
</form>

<?}?>

<? include '_footer.php'; ?>