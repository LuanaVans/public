<?php
const TITULO_SITE='Alumnator';
const DESCRIPCION='Sistema para la administracion de alumnos en plataforma de formación.';
const INSTAGRAM='https://instagram.com/alumnator';
const BLUESKY='https://bluesky.com/alumnator';

//const DATOS_MENU=['index.php','alumnos.php','insertar.php','contacto.php','login.php'];
const DATOS_MENUPRINCIPAL=[
  //  0.nombre     1.url        2.target    3.class         4.titulo
    ['Inicio',    'index.php',      0,      'destacado',    'Home de la web'],
    ['Alumnos',   'alumnos.php',    0,      '',             'Alumnos'],
    ['Insertar',  'insertar.php',   0,      '',             'Insertar'],
    ['Contacto',  'contacto.php',   0,      '',             'Contacto'],
    ['Login',     'login.php',      0,      '',             'Login'],
    ['Instagram', INSTAGRAM,        1,      'ext',          'Instagram'],
    ['Bluesky',   BLUESKY ,         1,      'ext',          'Bluesky'],
    ['Alumno',   'infoAlumno.php' , 0,      '',             'Alumno'],
];
const DATOS_MENULEGAL=[
    //  0.nombre                  1.url              2.target  3.class  4.titulo
      ['Aviso legal',             'avisolegal.php',  0,        '',      ''],
      ['Politica de cookies',     'cookies.php',     0,        '',      ''],
      ['Politica de privacidad',  'privacidad.php',  0,        '',      '']
];

function menu($array=DATOS_MENUPRINCIPAL){
echo '<nav>

<!-- Checkbox que controlará la visibilidad del menú -->
<input type="checkbox" id="menu-toggle" class="menu-toggle">

<!-- Label que actuará como el icono del menú hamburguesa -->
<label for="menu-toggle" class="menu-icon">&#9776;</label>

<!-- Menú de navegación -->
<ul class="menu">';
    
   foreach($array as $item){
    
    echo "<li><a href='$item[1]' class='$item[3]' title='$item[4] '";
    //si target=1 poner blank
     if($item[2]){ 
        echo " target='_blank'";     
     } 
        
    echo ">$item[0]</a></li>";


      
          


}
    
echo '</ul></nav>';
}




function titulo() {
  global $titulo;

  /*
  if(isset($titulo)){
    $contenido=$titulo.' - ';
  }
  Simplificado más bajo en formato TERNARIO
  */
  
  echo (isset($titulo) ? $titulo.' - ' : '') . TITULO_SITE;
}

