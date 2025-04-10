<? include '_header.php'; ?>

<? if (isset($_SESSION['rol']) &&  $_SESSION['rol']== 'admin') { ?>

<h1>Listado de usuarios</h1>
<p>Aquí estaría el listado.</p>

<? }
else{
    // En caso contrario redirigimos el visitante a otra página
    header('Location: expulsado.php');
    die();
}


 include '_footer.php'; ?>