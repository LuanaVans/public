<?php include '_cachitos/_funciones.php';?>
<!DOCTYPE html>
<html lang="<? echo $lang?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulin;?> | <?php echo $tituloweb;?></title>
    <link rel="stylesheet" href="css/style.css?v=<? echo time()?>">
    
    <!-- descripción para el SERP -->
    <meta name="description" content="<? echo $descripcion?>" />


<style>
    :root{
        --c:<? echo $colorweb;?>;
    }
 body{
    background:<? echo $colorweb;?>
 }


</style>

</head>
<body class="<?php echo slug($titulin,"_")?>">
    
<header>
    <h2><? echo $tituloweb;?></h2>
    <nav> 
    <?php include '_cachitos/_menu.php';?>
    </nav>
</header>


<main>

<h1><?php echo $titulin;?></h1>