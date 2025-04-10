<?php
$plantas =[
    ['nombre'=>'Petunia',     'color'=>'violeta', 'produccion'=>['holanda', 'francia', 'españa'] ],
    ['nombre'=>'Rosa',        'color'=>'rosa',     'produccion'=>['holanda', 'francia','españa'] ],
    ['nombre'=>'Clavel',      'color'=>'rojo',     'produccion'=>['holanda','belgica', 'alemania'] ],
    ['nombre'=>'Margarita',   'color'=>'amarilla', 'produccion'=>['holanda', 'alemania', 'españa'] ],
    ['nombre'=>'Captus',      'color'=>'verde',   'produccion'=>['holanda', 'italia', 'españa'] ],
    ['nombre'=>'Girasol',     'color'=>'naranja',  'produccion'=>['holanda', 'francia', 'italia'] ]
];

echo "<ul>";

foreach($plantas as $planta){
    echo "<li>";
    foreach($planta as $atr=>$valor){
        
        
        if(is_array($valor)){
            echo "Se produce en: ";
            foreach($valor as $cosa){
                echo $cosa;
                echo ", ";
            }
        }
        else{
            echo $atr. " es: ".$valor;
            echo "<br>";
        }
        
    }
    echo "<br>";
    echo "</li>";
}

echo "</ul>";
