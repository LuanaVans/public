<?php
if(isset($_GET['cerrarSesion'])){
session_start();
session_destroy();
echo "La sesión se ha cerrado";
}
?>

<? include '_header.php'; ?>
<h2>estas en mi web</h2>


<? include '_footer.php'; ?>