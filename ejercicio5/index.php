<?php
include_once "conexion.php";



?>

<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
</head>
<body>
<h1>Iniciar sesión</h1>
<form method="post" action="procesar.php">
    <label for="username">Nombre de usuario:</label>
    <input type="text" id="username" name="username"><br><br>
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Iniciar sesión">
</form>
</body>
</html>