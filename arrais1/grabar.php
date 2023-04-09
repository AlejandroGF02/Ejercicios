<?php
session_start();
if (isset($_GET["color"])){

    if (isset($_SESSION["colores"])){
        $colores=$_SESSION["colores"];
    }
    else{
        $colores=array();
    }
    array_push($colores,$_GET["color"]);
   $_SESSION["colores"]=$colores;
}


header("location:lista.php");

?>