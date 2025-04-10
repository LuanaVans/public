<?php
if(isset($_GET['g'])){
   $grados = urldecode($_GET['g']);
}

?>

<img src="img/coche2.jpg">

<p>El tono es:<? echo  $grados?>deg</p>

<style>
    *{
        margin:0;
        padding:0;
    }

body{
    font-family:system-ui, sans-serif;
}
img{
    width:100%;
    filter: hue-rotate(<?php echo $grados ?>deg);
}



    </style>