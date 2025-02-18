<?php require '_config.php';?>
<?php include '_header.php';?>
<h1>Acceder</h1>
<p>Acabamos de abrir la sesión</p>

<?php
session_start();
$_SESSION['logueado'] = true;

?>

<?php include '_footer.php';?>
