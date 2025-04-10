<? alerta('lista.php cargado'); ?>


<div id="puntos_interes">
        <h2>Lista de puntos de interés en Asturias</h2>
        <button onclick="cambiar()">Cambiar vista</button>
        <ul id="galeria">
    
        <?php

        $miJSON = file_get_contents('datos.json');

        $datos= json_decode($miJSON,true);

        foreach($datos as $dato){?>

        <li>
        <h2>--<?php echo $dato['lugar'];?>--</h2>
        <img src="img/<?php echo $dato['img'];?>">
        <p><?php echo $dato['texto'];?></p>
        </li>
       
       <?php }

        ?>

            
        </ul>
    </div>