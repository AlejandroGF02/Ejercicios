<?php
if(isset($_GET['tarea'])) {
    $tarea = $_GET['tarea'];
}

$tareas = array("Tarea 1", "Tarea 2", "Tarea 3");
foreach($tareas as $tarea) {
    echo "<li>$tarea <a href='eliminar.php?tarea=$tarea'>&times;</a></li>";
}
?>