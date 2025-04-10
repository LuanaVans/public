<? include '_header.php'; ?>
<h1>Contacte con nosotros</h1>
<address>C/ Corrida 22, , Bajo A</address>


<?php
chekSesiones();
//$_SESSION['rol'] = 'admin';

// Comprobamos si es admin
if (isset($_SESSION['rol']) &&  $_SESSION['rol']== 'admin') {
    // Si esta identificado, en otras palabras existe la variable, le saludamos
    echo 'Hola ' . $_SESSION['rol'];
    echo '<p>Con el rol que tienes puedes acceder a los siguientes datos:</p>';
    echo '<ul><li>Teléfono: 666 555 444 </li><li>info@empresa.com</li></ul>';
}


else if (isset($_SESSION['rol']) &&  $_SESSION['rol']== 'trabajador') {
    // Si esta identificado, en otras palabras existe la variable, le saludamos
    echo 'Hola ' . $_SESSION['rol'];
    echo '<p>Eres un currelas. No puedes ver más datos que el mail de tu jefe</p>';
    echo '<ul><li>mariano@empresa.com</li></ul>';
}

else {
    // En caso contrario redirigimos el visitante a otra página
    echo '<p>Envíenos un correo postal</p>';
}

?>


<? include '_footer.php'; ?>