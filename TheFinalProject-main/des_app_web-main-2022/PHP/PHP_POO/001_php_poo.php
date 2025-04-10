<?php

class Persona {
    // Propiedades
    private $nombre;
    private $edad;
    
    // Constructor
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    
    // Métodos
    public function saludar() {
        echo "Hola, mi nombre es " . $this->nombre . " y tengo " . $this->edad . " años.";
    }
    
    public function cumpleanios() {
        $this->edad++;
        echo "¡Feliz cumpleaños! Ahora tengo " . $this->edad . " años.";
    }
}

// Crear un objeto de la clase Persona
$persona = new Persona("Juan", 30);

// Acceder a los métodos del objeto
$persona->saludar(); // Output: Hola, mi nombre es Juan y tengo 30 años.
echo "<br>";
$persona->cumpleanios(); // Output: ¡Feliz cumpleaños! Ahora tengo 31 años.

?>
