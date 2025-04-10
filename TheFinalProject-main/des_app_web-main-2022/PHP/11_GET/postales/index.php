<?php
$nombre=$_GET['n'];
$texto=$_GET['t'];
$tipo=$_GET['c'];

$postales =['_cumple.php','_boda.php','_friky.php','_navidad.php'];

// if($tipo=="cumple"){ include $postales[0]; }
// else if($tipo=="boda"){ include $postales[1]; }
// else if($tipo=="friki"){ include $postales[2];}
// else{
//     include $postales[rand(0, 2)];
// }

switch ($tipo) {
    case "cumple":
        include $postales[0];;
      break;
    case "boda":
        include $postales[1];
      break;
    case "friki":
        include $postales[2];
      break;
    case "navidad":
        include $postales[3];
      break;
      
    default:
        include $postales[rand(0, count($postales)-1)];
  }
