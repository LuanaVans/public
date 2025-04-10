<?
// 1º Conexión con base de datos
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "academia";

$conn = new mysqli($servername, $username, $password, $dbname);

// 2º Revisar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


