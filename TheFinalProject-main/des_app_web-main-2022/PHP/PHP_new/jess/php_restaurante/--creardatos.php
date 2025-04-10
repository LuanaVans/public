<?php include '_cachitos/config.php';?>
<?php include '_cachitos/_basic-header.php';?>

<? 

// Create connection
$conn = new mysqli($servername, $username, $password, $basedatos);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Crear Tabla
$sql = "INSERT INTO `comidas` (`nombre`, `descripcion`, `foto`, `precio`, `ingredientes`, `alergenos`, `class`, `tipo`, `inicioestacional`, `finestacional`,`activado`)
VALUES
('Cachopo',                   'Típica carne asturiana rebozada y rellena de queso y cecina',                'cachopo.jpg',                  '12', 'carne y coses asturianes', 'huevo y carne roja', NULL, 'Segundo', NULL, NULL,1),
('Ensalada Cesar',            'Ensalada con huevo cocido, pan y productos frescos',               'ensaladacesar.jpg',            '18', 'asdfasdf', 'levadura', NULL, 'Ensaladas', NULL, NULL,1),
('Ensaladilla Ucraniana',     'Patata, cebolleta, jamon york, pimiento negro, aceitunas y mahonesa',   'chipiron.jpg',                 '21', 'carne y coses asdf', '', NULL, 'Segundo', NULL, NULL,1),
('Spaguetti a la Bolognesa',  'Spaguetti y carne bolognesa',   'chipiron.jpg',                 '24', 'carne y coses asdf', '', NULL, 'Segundo', NULL, NULL,1),
('Ñoquis con salsa Cabrales', 'Deliciosos ñoquis con salsa de queso cabrales',   'chipiron.jpg',                 '22', 'carne y coses asdf', '', NULL, 'Segundo', NULL, NULL,1),
('Ensalada de la Huerta',     'Ensalada con productos de la zona',   'chipiron.jpg',                 '22', 'carne y coses asdf', '', NULL, 'Segundo', NULL, NULL,1),
('Patates con Huevo Frito',   'El tradicional producto de huevos con picadillo y chorizo opcional',            'huevofrito.jpg', '15', 'huevo frito', '', NULL, 'Segundo', NULL, NULL,1),
('Melón con Jamón',           'Típico producto de verano simple y refrescante',      'melon.jpg', '15', 'Queso, Tomate', '', NULL, 'Primero', NULL, NULL,1),
('Piza Carbonara',            'Pizza con Nata, bacon, huevo, pimienta negra, aceitunas',      'pizza_carbonara.jpg', '15', 'Queso, Tomate', '', NULL, 'Pizza', NULL, NULL,1),
('Chuleton',                  'De xata rosa', 'chuleton.jpg', '20', 'carne y sdfsdf asturianes', 'carne roja', NULL, 'Segundo', NULL, NULL,1);";

if ($conn->query($sql) === TRUE){
  echo "Se ha creado ";
} else {
  echo "Error: " . $conn->error;
}

// cierre de conexión
$conn->close();



?>

<p> Se acaba de crear la base de datos:Restaurante</p>

<a href="--install.php">Volver a Instalador</a>