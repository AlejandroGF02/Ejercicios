<?php
if(isset($_POST['tarea'])) {
    $tarea = $_POST['tarea'];
    echo "<li>$tarea <a href='eliminar.php?tarea=$tarea'>&times;</a></li>";
}
header("Location: index.php");

?>