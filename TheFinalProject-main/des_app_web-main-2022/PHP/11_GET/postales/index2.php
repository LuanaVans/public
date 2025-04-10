<?php
$nombre=$_GET['n'];
$texto=$_GET['t'];
$tipo=$_GET['c'];



if($tipo=="cumple"){ ?>

<link rel="stylesheet" href="css/cumple.css">

<main>
<h1>Feliz cumpleaños</h1>
<h2><?php echo $nombre?></h2>
<p><?php echo $texto?></p>
</main>

<?php
}

if($tipo=="boda"){?>

<link rel="stylesheet" href="css/boda.css">

<div>
<h1>Nos casamos</h1>
<p><?php echo $texto?></p>
<h2><?php echo $nombre?></h2>
</div>

<?php }

if($tipo=="friki"){?>

<link rel="stylesheet" href="css/friky.css">

<div>
<h1>Feliz May the 4th</h1>
<p>Que la fuerza te acompañe</p>
<p><?php echo $texto?></p>
<h2><?php echo $nombre?></h2>
</div>

<?php } ?>