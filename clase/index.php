<?php
include_once "conectar.php";
$mostrarn="SELECT nombre FROM personas";
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="añadir.php">
    <label for="nombre">Nombre: </label>
    <input type="text" id="nombre" name="nombre"><br><br>
    <label for="contraseña">Contraseña: </label>
    <input type="password" id="contraseña" name="contraseña"><br><br>
    <button>Enviar</button>
</form>
<br><br>
<?php
echo $mostrarn;
?>

</body>
</html>
