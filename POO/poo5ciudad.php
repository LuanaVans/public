<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    



<?php

class Turismo{

    public string $ciudad;
    public string $pais;
    public string $moneda;
    public string $idioma;
    public string $monumento;
    public string $imagen;
   
    public function __construct($ciudad, $pais, $moneda, $idioma, $monumento, $imagen)
    {
        $this->ciudad = $ciudad;
        $this->pais = $pais;
        $this->moneda = $moneda;
        $this->idioma = $idioma;
        $this->monumento = $monumento;
        $this->imagen = $imagen;
        
        $this->verInformacion(); 
    }
    // mostrar la ficha de la ciudad
    public function verInformacion()
    {
        echo "<div class= 'ficha'>
        <img src='{$this->imagen}' alt='{$this->monumento} en {$this->ciudad} de {$this->monumento}'>
        <h1> {$this->ciudad} </h1>
        <p>Está en {$this->pais}</p>
        <p> Tiene como moneda {$this->moneda}.</p>
        <p>Se habla {$this->idioma}</p>
        <p>Su monumento más importante es {$this->monumento}</p>
        </div>";
    }
}

$ciudad1 = new Turismo("Madrid", "España", "Euro", "Español", "Puerta de Alcalá", "https://estaticos.esmadrid.com/cdn/farfuture/KsrOkEPSJFN4UoFn6AnGBD9LRQDKzO5nw2J6pbDcW_s/mtime:1524832498/sites/default/files/recursosturisticos/infoturistica/puerta_alcala_1396965031.778.jpg");
$ciudad2 = new Turismo("Paris", "Francia", "Euro", "Francés", "Torre Eiffel","https://viajes.nationalgeographic.com.es/medio/2024/02/14/torre-eiffel_6e9796fd_278483323_240214093442_1280x853.jpg");
$ciudad3 = new Turismo("Londres", "Reino Unido", "Libra", "Inglés", "Big Ben", "https://fotografias.lasexta.com/clipping/cmsimages01/2020/07/20/94D41234-1D24-4B1D-8A30-D7D6A622D474/104.jpg");
$ciudad4 = new Turismo("Roma", "Italia", "Euro", "Italiano", "Coliseo","https://www.archeoroma.es/wp-content/uploads/2016/10/coliseo-roma.jpg");
$ciudad5 = new Turismo("Nueva York", "Estados Unidos", "Dólar", "Inglés", "Estatua de la Libertad","https://nyc.eu/wp-content/uploads/2015/07/statue_liberte2.jpg");
