<?php

class Coche {
    // Propiedades
    private $marca;
    private $modelo;
    private $color;
    
    // Constructor
    public function __construct($marca, $modelo, $color) {
        // Inicializar las propiedades del coche con los valores proporcionados
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
    }
    
    // Métodos
    public function getInfo() {
        // Mostrar información sobre el coche
        echo "Este es un coche de la marca " . $this->marca . ", modelo " . $this->modelo . " y color " . $this->color . ".";
    }
    
    public function pintar($nuevoColor) {
        // Cambiar el color del coche
        $this->color = $nuevoColor;
        echo "El coche ha sido pintado de color " . $this->color . ".";
    }
}

// Crear un objeto de la clase Coche
$coche = new Coche("Toyota", "Corolla", "Azul");

// Acceder a los métodos del objeto
$coche->getInfo(); // Output: Este es un coche de la marca Toyota, modelo Corolla y color Azul.
echo "<br>";
$coche->pintar("Rojo"); // Output: El coche ha sido pintado de color Rojo.

?>
