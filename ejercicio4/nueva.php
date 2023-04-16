<?php
include_once "conexion.php";

$tarea = $_POST["tarea"];
if (empty($tarea)) {
    die("La tarea no puede estar vacía");
}

$sql = "INSERT INTO tareas (nombre) VALUES ('$tarea')";
if ($conn->query($sql) !== TRUE) {
    die("Error al agregar tarea: " . $conn->error);
}

header("Location: index.php");
exit;
?>