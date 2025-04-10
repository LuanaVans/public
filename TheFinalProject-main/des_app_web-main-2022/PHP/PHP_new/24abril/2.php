<?php
$plantas =[
    ['nombre'=>'Petunia',     'color'=>'violeta', 'produccion'=>'holanda' ],
    ['nombre'=>'Rosa',        'color'=>'rosa',     'produccion'=>'francia'],
    ['nombre'=>'Clavel',      'color'=>'rojo',     'produccion'=>'alemania'],
    ['nombre'=>'Margarita',   'color'=>'amarilla', 'produccion'=>'españa'],
    ['nombre'=>'Captus',      'color'=>'verde',   'produccion'=>'italia'],
    ['nombre'=>'Girasol',     'color'=>'naranja',  'produccion'=>'holanda'] 
];

echo "<ul>";
foreach($plantas as $planta){
    echo "<li>";
    foreach($planta as $atr=>$valor){
        echo "".$atr. " es: ".$valor;
        echo "<br>";
    }
    echo "<br>";
    echo "</li>";
    }

    echo "</ul>";
