<?php

include_once "conectar.php";

$nombre=$_GET["nombre"];
$contraseña=$_GET["contraseña"];
$mostrarn="SELECT nombre FROM personas";
$mostrarc="SELECT contraseña FROM personas";

if ($nombre==$mostrarn&&$contraseña==$mostrarc){

    echo "conexion exitosa";

}

else{

    header("location:index.php");

}

?>
