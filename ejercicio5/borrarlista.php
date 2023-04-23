<?php
include_once "conexion.php";

$consulta = "TRUNCATE TABLE tareas";
mysqli_query($conexion, $consulta);

header('Location: index.php');
exit;
?>






