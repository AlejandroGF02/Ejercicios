<?php
$servername = "localhost";
$username = "tarea";
$password = "tarea";
$dbname = "tareas_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";
?>

