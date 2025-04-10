<?php
include('include/db.php');
include('header.php');

$query = "SELECT * FROM eventos";
$stmt = $pdo->query($query);
$eventos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos Culturales</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h1>Eventos Culturales en la Ciudad</h1>

    <div class="eventos-container">
        <?php foreach ($eventos as $evento): ?>
        <div class="evento-card">
            <img src="images/<?= $evento['imagen'] ?>" alt="<?= $evento['nombre'] ?>" class="evento-img">
            <h3><?= $evento['nombre'] ?></h3>
            <p><?= substr($evento['descripcion'], 0, 100) ?>...</p>
            <p><strong>Lugar:</strong> <?= $evento['lugar'] ?></p>
            <p><strong>Fecha:</strong> <?= $evento['fecha'] ?></p>
            <p><strong>Hora:</strong> <?= $evento['hora'] ?></p>
            <p><strong>Precio:</strong> <?= $evento['precio'] ?> €</p>
        </div>
        <?php endforeach; ?>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
