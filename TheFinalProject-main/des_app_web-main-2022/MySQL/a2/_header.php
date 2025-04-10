<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? echo $miTituloApartado.' - '.$miTituloWeb?></title>
    <link rel="stylesheet" href="<?echo $miurl?>style.css?v=<? echo time()?>">
</head>
<body>
    
<header>
    <nav>
        <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="productos.php">Productos</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <? if(isset($_SESSION['rol'])){
                if($_SESSION['rol']=='admin'){
                 echo '<li><a href="admin_usuarios.php">Usuarios</a></li>';
                }
            }
            ?>
        </ul>
        <? if(isset($_SESSION['rol'])=='admin'){
            echo '<div class="usuario">';
            echo '<span>Hola '.$_SESSION['usuario'].' </span>';
            echo '<a href="cerrarSesion.php">Cerrar Sesión</a>';
            echo '</div>';
        }
        else{
            echo '<a href="login.php">Iniciar Sesión</a>';
        }
        ?>
    </nav>
</header>
<main>
    <h1><?echo $miTituloApartado?></h1>

<?//echo 'header.php';?>
