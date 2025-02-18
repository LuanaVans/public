<?php 
require 'bloques/_config.php';
include 'bloques/_header.php'; 
?>



<form>
    <p>Si tiene alguna duda o consulta, póngase en contacto con nosotros.</p>
<label for="nombre">Nombre:
    <input type="text" id="name" name="nombre" placeholder="Nombre">
</label>
<label for="email">Email:
    <input type="text" id="name"  name="email" placeholder="email">
</label>
<label for="mensaje"> Escriba su Mensaje:
    <textarea name="mensaje" id="mensaje">Mensaje</textarea>
</label>
<button type="submit">Enviar</button>
</form>


<?php
   include 'bloques/_footer.php';
  ?>
