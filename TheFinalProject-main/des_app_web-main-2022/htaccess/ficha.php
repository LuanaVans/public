<?php include '_header.php';?>


<?php


if(isset($_GET['n'])){
    $nombre=$_GET['n'];
}
else{
    $nombre="sin definir";
}



?>


    <h1>Estas en el apartado <? echo $nombre?></h1>
    <?php include '_footer.php';?>