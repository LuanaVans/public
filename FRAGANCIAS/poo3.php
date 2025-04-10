<?php

// Personajes de Winnie de Pooh
class Personajes{
    public string $nombre;
    public string $color;
    public string $animal;
    public string $foto;
    public string $casa;
    public string $personalidad;

    // Constructor del Objeto Personajes

    public function __construct($nombre, $animal, $personalidad)
    {
        $this->nombre = $nombre;
        $this->color = $color;
        $this->animal = $animal;
        $this->foto = $foto;
        $this->casa = $casa;
        $this->personalidad = $personalidad;

        
    }

    //Método del objeto
    function medicar()
    {
        echo "<p> Hola soy {$this->nombre} represento al animal {$this->animal} y me he medicado para controlar mi personalidad de {$this->personalidad} </p>";

    }
}

$miNombre=new Personajes();
$miNombre->nombre= "Winnie de Pooh";
echo $miNombre->nombre;

$wini = new Personajes("Winnie the Pooh", "Amarillo", "Oso", "https://www.google.com/search?q=winnie+the+pooh&rlz=1C1GCEU_esES821ES821&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiJ9J6J9J3zAhXQz4UKHbJzDZQQ_AUIBygC&biw=1366&bih=657#imgrc=5
", "Bosque de los Cien Acres", "Amigable");
$tigger = new Personajes("Tigger", "Naranja", "Tigre", "https://www.google.com/search?q=tigger&rlz=1C1GCEU_esES821ES821&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiJ9J6J9J3zAhXQz4UKHbJzDZQQ_AUIBygC&biw=1366&bih=657#imgrc=5", "Bosque de los Cien Acres", "Hiperactivo");
$iglet = new Personajes("Iglet", "Rosa", "Cerdo", "https://www.google.com/search?q=iglet&rlz=1C1GCEU_esES821ES821&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiJ9J6J9J3zAhXQz4UKHbJzDZQQ_AUIBygC&biw=1366&bih=657#imgrc=5", "Bosque de los Cien Acres", "Miedoso");
$conejo = new Personajes("Conejo", "Blanco", "Conejo", "https://www.google.com/search?q=conejo&rlz=1C1GCEU_esES821ES821&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiJ9J6J9J3zAhXQz4UKHbJzDZQQ_AUIBygC&biw=1366&bih=657#imgrc=5", "Bosque de los Cien Acres", "Serio");
$cerdito = new Personajes("Piglet", "Rosa", "Cerdo", "https://www.google.com/search?q=piglet&rlz=1C1GCEU_esES821ES821&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiJ9J6J9J3zAhXQz4UKHbJzDZQQ_AUIBygC&biw=1366&bih=657#imgrc=5", "Bosque de los Cien Acres", "Miedoso");


$wini->medicar();