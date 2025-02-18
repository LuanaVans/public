<?php require '_config.php';?>
<?php include '_header.php';?>


<?php
    session_start();
    if(!isset($_SESSION['logueado'])){
        header('Location:expulsado.php');
    }
    
?>


<h1>Estas en el laboratorio del mal 💀</h1>
<p>Estas en una zona super secreta</p>

<?php include '_footer.php';?>
