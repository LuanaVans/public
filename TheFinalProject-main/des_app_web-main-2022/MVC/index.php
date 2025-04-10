<?php require 'config.php'?>
<?php $miTituloApartado="Inicio"; ?>
<?php obtener_cabecera(); ?>

<h1>Bienvenidos al ejemplo de Modelo Vista Controlador.</h1>
<h2>Instalación</h2>
<p>Para que todo funcione correctamente accede al archivo <strong>config.php</strong> y cambia la ruta de la variable miURL de tal manera que coincida con la dirección a la ruta actual.</p>
<p>Es decir: básicamente copia la ruta URL de la barra de direcciones y pégala para que se vea de la siguiente manera</p>
<pre>
    <code>
$miTheme ="augustheme"; // Aquí el nombre del tema a utilizar
$miURL="http://desappweb.local/des_app_web/MVC/"; //Ruta URL
$miTitulo="Otra cosa"; // título de la web

</code>
</pre>
<p>A partir de aquí es un ejemplo de texto, imágen, etc.</p>
<img src="img/001.jpg" alt="">

<p>Esto es un ejemplo de lista:</p>
<ul>
    <li>Primer elemento</li>
    <li>Segundo Elemento</p>
    <li>Tercer Elemento</p>
</ul>

<h1>Título 1 - h1</h1>
<h2>Título 2 - h2</h2>
<h3>Título 3 - h3</h3>
<h4>Título 4 - h4</h4>
<h5>Título 5 - h5</h5>
<h6>Título 6 - h6</h6>
<p>Párrafo a con su lorem ipsum dolor bla bla bla</p>

<button>Ejemplo de botón</button>
<button class="selected">Ejemplo de botón</button>
<button class="disable">Ejemplo de botón</button>

<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam, repudiandae expedita? Nulla possimus quis pariatur! Inventore illum, adipisci provident nisi esse ipsa eos, tempore incidunt laborum officiis amet porro cupiditate.</p>
<? obtener_pie(); ?>