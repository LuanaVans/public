<?php require '_config.php';?>

<?php
session_start();

// if(isset($_SESSION['logueado'])){
//     header ("Location:laboratoriodelmal.php");
// }
// else{
//     echo "No puedes estar aquí";
//     header ("Location:expulsado.php");
// }

if(isset($_SESSION['logueado'])){
    header ("Location:laboratoriodelmal.php");
}
else{
    header ("Location:expulsado.php");
}
?>

