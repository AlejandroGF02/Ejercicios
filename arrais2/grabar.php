<?php

if (isset($_GET["color"])){

    if (isset($_COOKIE["colores"])){
        $colores=json_decode($_COOKIE["colores"],true);
    }
    else{
        $colores=array();
    }
    array_push($colores,$_GET["color"]);
    setcookie("colores",json_encode($colores),time()+60*60*24*7*30);
}


header("location:lista.php");

?>