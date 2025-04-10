<?php

class PeliculaStarWars {
    private $titulo;
    private $director;
    private $bandaSonora;
    private $actores;
    private $poster;
    private $anio;
    private $numeroEpisodio;
    private $personajes;
    
    public function __construct($titulo, $director, $bandaSonora, $actores, $poster, $anio, $numeroEpisodio, $personajes) {
        $this->titulo = $titulo;
        $this->director = $director;
        $this->bandaSonora = $bandaSonora;
        $this->actores = $actores;
        $this->poster = $poster;
        $this->anio = $anio;
        $this->numeroEpisodio = $numeroEpisodio;
        $this->personajes = $personajes;
    }
    
    public function mostrarFicha() {
        echo "<br><br>";
        echo "<h2>" . $this->titulo . "</h2>";
        echo "<img src='" . $this->poster . "' alt='" . $this->titulo . "'><br>";
        echo "<p><strong>Director:</strong> " . $this->director . "</p>";
        echo "<p><strong>Banda sonora:</strong> " . $this->bandaSonora . "</p>";
        echo "<p><strong>Actores principales:</strong> " . $this->actores . "</p>";
        echo "<p><strong>Año:</strong> " . $this->anio . "</p>";
        echo "<p><strong>Número de episodio:</strong> " . $this->numeroEpisodio . "</p>";
        echo "<p><strong>Personajes principales:</strong> " . $this->personajes . "</p>";
        echo "<br><br>";
    }
}

// Crear objetos de la clase PeliculaStarWars
$episodioIV = new PeliculaStarWars(
    "Star Wars: Episodio IV - Una nueva esperanza",
    "George Lucas",
    "John Williams",
    "Mark Hamill, Harrison Ford, Carrie Fisher",
    "https://example.com/episodio_iv.jpg",
    1977,
    4,
    "Luke Skywalker, Darth Vader, Princess Leia"
);

$episodioV = new PeliculaStarWars(
    "Star Wars: Episodio V - El Imperio contraataca",
    "Irvin Kershner",
    "John Williams",
    "Mark Hamill, Harrison Ford, Carrie Fisher",
    "https://example.com/episodio_v.jpg",
    1980,
    5,
    "Luke Skywalker, Darth Vader, Princess Leia"
);

$episodioVI = new PeliculaStarWars(
    "Star Wars: Episodio VI - El retorno del Jedi",
    "Richard Marquand",
    "John Williams",
    "Mark Hamill, Harrison Ford, Carrie Fisher",
    "https://example.com/episodio_vi.jpg",
    1983,
    6,
    "Luke Skywalker, Darth Vader, Princess Leia"
);



//------


// Crear objetos de la clase PeliculaIndianaJones
$raiders = new PeliculaIndianaJones(
    "En busca del arca perdida",
    "Steven Spielberg",
    "John Williams",
    "Harrison Ford, Karen Allen, Paul Freeman",
    "https://example.com/raiders.jpg",
    1981
);

$templeDoom = new PeliculaIndianaJones(
    "El templo maldito",
    "Steven Spielberg",
    "John Williams",
    "Harrison Ford, Kate Capshaw, Jonathan Ke Quan",
    "https://example.com/temple_doom.jpg",
    1984
);

$lastCrusade = new PeliculaIndianaJones(
    "La última cruzada",
    "Steven Spielberg",
    "John Williams",
    "Harrison Ford, Sean Connery, Denholm Elliott",
    "https://example.com/last_crusade.jpg",
    1989
);



// Mostrar fichas de las películas de StarWars
$episodioIV->mostrarFicha();
$episodioV->mostrarFicha();
$episodioVI->mostrarFicha();


// Mostrar fichas de las películas de Indiana Jones
$raiders->mostrarFicha();
$templeDoom->mostrarFicha();
$lastCrusade->mostrarFicha();




