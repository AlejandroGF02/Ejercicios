<?php

if (isset($_COOKIE["nombre"])&&isset($_COOKIE["password"])){

    $nombre=$_COOKIE["nombre"];
    $password=["password"];

    if ($nombre="usuario1"&&$password="12345"){

        header("location:login.php");

    }

    else{


    }


}

else{

}

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulario</title>
</head>
<body>
<h1>Datos personales</h1>
<form action="login.php" method="get">

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre"> <br>
    <label for="password">Nombre</label>
    <input type="password" name="password" id="password">
    <button type="submit">Enviar</button>
</form>

</body>
</html>