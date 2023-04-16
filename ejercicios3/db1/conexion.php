<?php
error_reporting(E_ERROR);
//$driver=new mysqli_driver();
//$driver->report_mode=mysqli_report_error | mysqli_report_strict;

function getconexion(){

    $con=new mysqli("localhost","palabras","palabras","palabras");

    return $con;
}
function mensajeerror($codigo){
    if ($codigo==2002) return "Da fallado la conexion a la base de datos";
    elseif ($codigo==1045) return "Usuario o contraseña incorrecto";
    elseif ($codigo==1044) return "No se pudo abrir la base de datos";
    else return "error desconocido";

}
?>