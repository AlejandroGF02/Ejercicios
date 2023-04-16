<?php



if(isset($_POST['tarea'])) {
    $tarea = $_POST['tarea'];
    echo "<li>$tarea <a href='eliminar.php?tarea=$tarea'>&times;</a></li>";
    if(isset($_COOKIE['tareas'])) {
        $tareas=json_decode($_COOKIE["tareas"], true);

    }
    else{
        $tareas=array();
    }
    array_push($tareas,$tarea);
    setcookie("tareas",json_encode($tareas),time()+60*60*24*7);
}
else{
    header("Location: listar.php");
}





?>