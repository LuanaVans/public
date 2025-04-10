<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "alumnos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE TablaRedonda (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
fabricante VARCHAR(30) NOT NULL,
lastnamodelo VARCHAR(30) NOT NULL,
radio INT(4),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>