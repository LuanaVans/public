<?php
$plantas =[
    'Petunia'=>'violeta' ,
    'Rosa'=>'rosa'    ,
    'Clavel'=>'rojo'  ,
    'Margarita'=>'amarillo',
    'Captus'=>'verde'  ,
    'Geraneo'=>'rojo'  ,
    'Girasol'=>'amarillo'
];

//en caso deque...
function colorines($colorin){
switch ($colorin) {
    case 'rojillo':
    case 'red':
    case "rojo":
      echo "como la sangre";
      break;
    case "amarillo":
      echo "vese mal con el fondo blanco eso...";
      break;
    case "verde":
      echo "como la naturaleza";
      break;
    default:
      echo "mira que guapo";
  }
  echo ", pero nun ye coral!";
}
?>
<ul>
<?php
foreach($plantas as $atributo => $valor):
    // echo "<li><h2>".$planta['nombre']."</h2></li>";
    // echo "<li><h2>{$planta['nombre']}</h2><p>{$planta['color']}</p></li>";
    // echo "<li>";
    // echo "<h2>{$planta['nombre']}</h2>";
    // echo "<p>{$planta['color']}</p>";
    // echo "</li>";
    ?>

    <li><p><?php echo $atributo ." es de color ". $valor ?></p>
    <p><small><?php colorines($valor);?></small></p>
    </li>

<?php endforeach;?>
</ul>