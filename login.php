<?php

if (isset($_GET["nombre"])&&isset($_GET["password"])){

    $nombre=$_GET["nombre"];
    $password=$_GET["password"];
    if ($nombre=="usuario1"&&$password=="12345"){

        setcookie("nombre",$nombre,time()+60*60*24*7);
        setcookie("password",$password,time()+60*60*24*7);

    }

    else{
        header("location:formulariocookies.php");
    }

}

else if (isset($_COOKIE["nombre"])&&isset($_COOKIE["password"])){

    $nombre=$_COOKIE["nombre"];
    $password=$_COOKIE["password"];
    if ($nombre!="usuario1"||$password!="12345"){

        setcookie("nombre",false,time()-1);
        setcookie("password",false,time()-1);
        header("location:formulariocookies.php");

    }

}

else{
    header("location:formulariocookies.php");
}



?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>

<h1>Bienbenid@ <?= $nombre ?> </h1>
<a href="cerrarsesion.php">Cerrar sesion</a>
</body>
</html>