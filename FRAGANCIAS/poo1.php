<?php
// programación orientada a objetos

class Coche {
    // Propiedades
    public string $conductor;
    public string $marca;
    public string $modelo;
    public string $color;
    public string $velocidad;
    

    
    
    // Métodos
    // Constructor
    public function __construct($marca, $modelo, $color,) 
    {
        $this->conductor = $conductor;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->velocidad = $velocidad;
    }
    public function presentacion() {
        echo "<div class='info'>";
        echo "<h2>Soy el coche de {$this->conductor} </h2>";
        echo "<p>Mi color es   {$this->color} </p>";
        echo "<p>Mi marca es   {$this->marca} </p>";
        echo "<p>Mi modelo es   {$this->modelo} </p>";
        echo "</div>";
    }
    // Creamos una instancia de la clase coche con los parámetros iniciales en el mismo orden que le pasaremos a construct
    $cocheElma = new Coche("Elma", "seat", "Ibiza", "Rojo");
$elBugaDeMoi = new Coche("Moises", "Chevrolet", "Impala", "Negro");
$elCocheDeCris = new Coche("Cris", "lamborghini", "Sexto", "Naranja");

$cocheElma->presentacion();
$elBugaDeMoi->presentacion();
$elCocheDeCris->presentacion();

    
    public function frenar() {
        $this->velocidad -= 10;
    }
    
    public function mostrarVelocidad() {
        echo "La velocidad actual es de {$this->velocidad} km/h";
    }
}