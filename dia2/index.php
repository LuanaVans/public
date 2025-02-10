<?php
$cursos= [
    "Ofimática",
    "Matemáticas",
    "Física",
    "Química",
    "Inglés",
    "Ciberseguridad"
];

$alumnos= [
    "María",
    "Pedro",
    "Juan",
    "Luis",
    "Ana",  
    "Carlos"
];
$alumno_aleatorio = $alumnos[array_rand($alumnos)];
$curso_aleatorio = $cursos[array_rand($cursos)];
$texto = "El alumno $alumno_aleatorio está haciendo el curso de $curso_aleatorio.";

echo $texto;
?>

