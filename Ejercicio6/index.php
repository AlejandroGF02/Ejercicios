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

<?php

$conn = mysqli_connect('localhost', 'geografia', 'geografia', 'geografia');

if (!$conn) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

$sql = "SELECT localidad, provincia, poblacion FROM nombre_de_la_tabla";

$resultado = mysqli_query($conn, $sql);

echo "<table>";
echo "<tr><th>Localidad</th><th>Provincia</th><th>Población</th></tr>";

while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr><td>" . $fila["localidad"] . "</td><td>" . $fila["provincia"] . "</td><td>" . $fila["poblacion"] . "</td></tr>";
}

echo "</table>";

mysqli_close($conn);

?>


</body>
</html>