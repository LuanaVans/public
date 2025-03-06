# :) AQUÍ APUNTAREMOS COSAS:

## PWA

- [x] llamadas en el meta
- [x] manifest.js
- [x] iconos
- [ ] service-worker.js

## \_config.php

- Listado de Constantes, Variables o Arrays a utilizar;

  - Listados de elementos de menús
    - [x] Menú principal
    - [x] Menú legal
    - [ ] Menú redes sociales

- Llamada a base de datos.

  - [ ] Consultas que devuelven un resultado (array)
  - [ ] Consultas que no devuelven nada

- Listado de funciones reutilizables:
  - [ ]debugs
    - [ ] imprime texto si debug está activo
    - [ ] imprime array si debug está activo
    - [ ] muestra que elementos se han cargado (vale la primera con mensaje)
  - [ ] cargas tipo import
  - [ ] querys mySQL
  - [x] constructor de menús

## Login

- Validación de Usuario y Contraseña que abra sesión y de acceso a apartado privado

## Contacto

- envio de email

## style.css

- Menú superior responsive (plegable tipo hamburguesa)
- Menús footer o inferiores no responsive.




  
  echo "<label "
}

-------array del curso
$f_curso=[
  ['nombre_curso', 'text',],
  ['profesor', 'text',]
   ['descripcion', 'textarea',],
    ['fecha_inicio', 'date',],
     ['fecha_fin', 'date',],
      ['duracion', 'number',],
       ['contraseña', 'password',]
       ['practicas', 'checkbox',]
];

--------bucle para repasar el array
function  constructor_formularios(){

echo "<form action="index.php" method="post">;

foreach($array as $chiflu){
  echo "<label for=".$chiflu[0].">".$chiflu[1].>"</label>;
  echo "<input type='$chiflu[1]' id='$chiflu[0]' name='$chiflu[0]'
  placeholder='$chiflu[2]'>";
}


echo "</form>";

------convierte extos largos en minúsculas, guión bajo y

function simpli($texto){
  $resultado= strtolower($texto);
  $resultado= str_replace('','_',$texto); // remplaza espacios por guión bajo
  return $texto;
}


