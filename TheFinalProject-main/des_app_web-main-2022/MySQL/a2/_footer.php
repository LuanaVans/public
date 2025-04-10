</main>
<footer>
    <p>&copy; Copyright <?echo $miTituloWeb?></p>
</footer>
</body>
</html>

<?php
//Cerrar Conexión
if($connAbierta){
    $conn->close();
    echo "<p>La conexión se ha cerrado (porque taba abierta)</p>";
}
else{
    echo "<p>La conexión ni se abrió ni se cerró</p>";
}
?>

<?//echo 'footer.php'?>