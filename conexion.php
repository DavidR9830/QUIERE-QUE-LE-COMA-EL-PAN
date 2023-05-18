<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "206208";
$dbname = "db_asistencia";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
  die("Conexión fallida: " . mysqli_connect_error());
}
?>