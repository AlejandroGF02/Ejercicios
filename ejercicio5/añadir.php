<?php
include_once "conexion.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['descripcion'])) {
    $descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']);

    $consulta = "INSERT INTO tareas (descripcion) VALUES ('$descripcion')";
    mysqli_query($conexion, $consulta);

    $consulta = "SELECT COUNT(*) FROM tareas";
    $resultado = mysqli_query($conexion, $consulta);
    $num_tareas = mysqli_fetch_row($resultado)[0];

    if ($num_tareas == 1) {
        echo '<form action="borrar-tareas.php" method="post">';
        echo '<input type="submit" value="Borrar todas las tareas">';
        echo '</form>';
    }
}

$consulta = "SELECT * FROM tareas";
$resultado = mysqli_query($conexion, $consulta);

echo '<ul>';
while ($tarea = mysqli_fetch_assoc($resultado)) {
    echo '<li>' . $tarea['descripcion'] . '</li>';
}
echo '</ul>';
?>