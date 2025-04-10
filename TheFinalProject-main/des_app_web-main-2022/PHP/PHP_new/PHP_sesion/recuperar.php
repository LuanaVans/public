<?php include '_header.php';?>
    <h1>Te hemos enviado un email con tus datos de acceso</h1>
 


    <?php 
// Ejemplo super sencillo:
/*
mail("pepito@desarrolloweb.com,maria@guiartemultimedia.com","asuntillo","Este es el cuerpo del mensaje") 
*/




// sistema de envio por correo con PHP
$destinatario = "pepito@desarrolloweb.com"; 
$asunto = "Olvidaste la contraseña ho?"; 
$cuerpo = ' 
<html> 
<head> 
   <title>Reseteo Contraseña</title> 
   <style>
   body{
    background:coral;
    font-family:sans-serif;
    text-align:center;
    padding:120px;
   }
   </style>
</head> 
<body> 
<h1>Apuntala o algo cagonrosh!</h1> 
<p> 
<b>A ver ho! tan dificil ye apuntala o poner en algún lado de tu mente "fran" / "admin". Pero sin comillas!. 
</p> 
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: PHP sessions <no-reply@sesionesphp.com>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
$headers .= "Reply-To: info@sesionesphp.com\r\n"; 

//ruta del mensaje desde origen a destino 
$headers .= "Return-path: info@sesionesphp.com\r\n"; 

//direcciones que recibián copia 
$headers .= "Cc: miguelin@sesionesphp.com\r\n"; 

//direcciones que recibirán copia oculta 
$headers .= "Bcc: superboss@sesionesphp.com,maria@sesionesphp.com\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers) 
?>


    <?php include '_footer.php';?>