<style>
    .ficha{ width: 230px; display: inline-block; border: solid 1px black; padding:20px;}
    </style>

<?php

class PersonajeHarryPotter {
    private $nombre;
    private $casa;
    private $varita;
    private $imagen;
    
    public function __construct($nombre, $casa, $varita, $imagen) {
        $this->nombre = $nombre;
        $this->casa = $casa;
        $this->varita = $varita;
        $this->imagen = $imagen;
    }
    
    public function mostrarFicha() {
        echo '<li class="ficha">';
        echo "<h4>" . $this->nombre . "</h4>";
        echo "<img src='" . $this->imagen . "' alt='" . $this->nombre . "'><br>";
        echo "Casa: " . $this->casa . "<br>";
        echo "Varita: " . $this->varita . "<br>";
        echo '</li>';
    }
}

// Crear objetos de la clase PersonajeHarryPotter
$harry = new PersonajeHarryPotter(
    "Harry Potter",
    "Gryffindor",
    "Saúco, 28 cm",
    "harry.jpg"
);

$hermione = new PersonajeHarryPotter(
    "Hermione Granger",
    "Gryffindor",
    "Vid, 25.4 cm",
    "hermione.jpg"
);

$ron = new PersonajeHarryPotter(
    "Ron Weasley",
    "Gryffindor",
    "Sauce, 30 cm",
    "ron.jpg"
);

// Mostrar fichas de los personajes
$harry->mostrarFicha();
$hermione->mostrarFicha();
$ron->mostrarFicha();

?>
