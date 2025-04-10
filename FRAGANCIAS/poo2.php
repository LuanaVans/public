<?php

// harry potter
class Personaje
{
    // atributos de la clase
    public string $nombre;
    public string $apellido;
    public string $varita;
    public string $casa;
    public string $mascota;
    private int $curso;

    // constructor de la clase personajes
    // el constructor se jecuta al crear la instancia del objeto
    public function __construct($nombre, $apellido, $varita, $casa, $mascota)
    {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->varita = $varita;
    $this->casa = $casa;
    $this->mascota = $mascota;
    $this->curso = 1; // esto para poder sumar un curso cada vez que se inscribe un alumno

    // si ejecutamos la función dentro del contructor del objeto no es necesario llamarla
    $this->inscribirAlumno();
}
    
 // Método para inscribir al alumno
 public function inscribirAlumno()
 {
echo "<p> Se ha inscrito al alumno {$this->nombre} {$this->apellido} en la casa {$this->casa} con la mascota {$this->mascota}</p>";
    }
    
     // método que hará pasar de curso al alumno
public function pasarCurso()
{
    $this->curso += 1; // Incrementar el curso del objeto
    echo "<p>Felicidades {$this->nombre} {$this->apellido} has avanzado de curso, ahora estás en el curso {$this->curso} </p>";
if(($this->curso)>=5){
        echo "<p> {$this->mascota} ha fallecido de una manera terrible </p>";
        $this->mascota = "RIP";
        
}
}
}

// creamos varios objetos de la clase personaje
$alumno1 = new Personaje("Harry", "Potter", "Sauco", "Gryffindor", "Lechuza");
$alumno2 = new Personaje("Hermione", "Granger", "Vid", "Gryffindor", "Gato");
$alumno3 = new Personaje("Ron", "Weasley", "Fresno", "Gryffindor", "Rata");

$alumno1->inscribirAlumno();
$alumno1->pasarCurso();
echo "<p>Mascota: $alumno->mascota</p>";
$alumno2->pasarCurso();
echo "<p>Mascota: $alumno->mascota</p>";
$alumno3->pasarCurso();
echo "<p>Mascota: $alumno->mascota</p>";


echo "El alumno {$alumno1->nombre} está en el curso {$alumno1->curso}";
