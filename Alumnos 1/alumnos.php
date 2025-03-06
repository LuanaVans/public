<?php require "inc/_config.php"?>
<?php include "inc/_header.php"?>

<h2>Lista de Alumnos</h2>

<!-- Botones para cambiar la vista -->
<div>
  <button onclick="cambiarVista('lista')">Vista de Lista</button>
  <button onclick="cambiarVista('reticula')">Vista en Retícula</button>
  <button onclick="cambiarVista('tarjetas')">Vista en Tarjetas</button>
</div>

<!-- Campo de búsqueda -->
<input type="text" id="buscador" placeholder="Filtrar Alumno o curso..." onkeyup="filtrarAlumnos()">



<?php

// Array de alumnos con los detalles: nombre, curso y URL de la imagen
$alumnos = [
    [
        'nombre' => 'Sandra Fernandez Mazorca',
        'curso' => 'Diseño de Aplicaciones para Páginas Web.',
        'imagen' => 'https://img.freepik.com/foto-gratis/retrato-mujer-moderna_23-2147626504.jpg'
    ],
    [
        'nombre' => 'Ivan Gutiérez Castellanos',
        'curso' => 'Curso: Autocad.',
        'imagen' => 'https://img.freepik.com/fotos-premium/retrato-primer-plano-jugador-deportes-serio_13339-161317.jpg'
    ],
    [
        'nombre' => 'María Claudia Sánchez Quirós',
        'curso' => 'Curso: Inglés Comercial (Nivel B1).',
        'imagen' => 'https://img.freepik.com/foto-gratis/retrato-mujer-acostada-cama_1150-8829.jpg'
    ],
    [
        'nombre' => 'Jorge Javier Casillas Praderas',
        'curso' => 'Curso: Sistemas Microinformáticos.',
        'imagen' => 'https://img.freepik.com/foto-gratis/cerrar-guapo-chico-barbudo-ojos-sonadores_176420-16058.jpg'
    ],
    [
        'nombre' => 'Lidia Buendía Vicario',
        'curso' => 'Curso: Marketing Internacional.',
        'imagen' => 'https://img.freepik.com/foto-gratis/retrato-joven-sueter-amarillo_1303-13117.jpg'
    ]
];
?>


<ul id="listaAlumnos" class="lista">

<?php
// Itera a través del array de alumnos y genera los elementos <li>
foreach ($alumnos as $alumno) {
    echo '<li>';
    echo '<img class="alumno" src="' . $alumno['imagen'] . '" alt="">';
    echo '<h3 class="nombre">' . $alumno['nombre'] . '</h3>';
    echo '<p class="curso">' . $alumno['curso'] . '</p>';
    echo '</li>';
}
?>
   
</ul>



<script>
// Filtrar alumnos con el buscador
function filtrarAlumnos() {
    const busqueda = document.getElementById('buscador').value.toLowerCase();
    const alumnos = document.querySelectorAll('.lista li');
    
    alumnos.forEach(function(alumno) {
        const nombre = alumno.querySelector('.nombre').textContent.toLowerCase();
        const curso = alumno.querySelector('.curso').textContent.toLowerCase();
        
        if (nombre.includes(busqueda) || curso.includes(busqueda)) {
            alumno.style.display = '';
        } else {
            alumno.style.display = 'none';
        }
    });
}

// Cambiar vista de la lista
function cambiarVista(vista) {
    const lista = document.getElementById('listaAlumnos');
    
    // Eliminar todas las clases actuales
    lista.classList.remove('lista', 'reticula', 'tarjetas');
    
    // Añadir la clase correspondiente al modo de vista
    lista.classList.add(vista);
}
</script>


<?php include "inc/_footer.php"?>