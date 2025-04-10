<?php
if(isset($_GET['c'])){
   $color = urldecode($_GET['c']);
}

?>

<img src="img/coche1.png">

<style>
    *{
        margin:0;
        padding:0;
    }

body{
    background:<?php echo $color ?>;
    font-family:system-ui, sans-serif;
}
img{
    width:100%;
}



    </style>