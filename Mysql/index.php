
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "elma";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM series";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"] . " - nombre: " . $row["nombre"] . " " . $row["año"] . " - año: " . " " . $row["tematica"] . " - tematica <br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>

    </header>
    <main>
        <h1>Hola Mundo</h1>

    </main>
    <footer>

    </footer>
    
</body>
</html>