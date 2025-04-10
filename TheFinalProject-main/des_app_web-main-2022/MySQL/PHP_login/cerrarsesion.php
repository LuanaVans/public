<?php
session_start();
session_destroy();
?>

<? include '_header.php'; ?>
<h1>La sesión se ha cerrado</h1>
<p>Para volver a iniciar sesión tendrá que loguearse en: <a href="login.php">Acceder</a></p>
<? include '_footer.php'; ?>