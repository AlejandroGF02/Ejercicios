<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
    <title>Document</title>
</head>
<body>
<header>
    <h1>Patrón de colores</h1>
</header>
<main>
    <form action="enviar.php" method="post">
        <label for="color1">Color 1</label>
        <input type="color" name="color1" id="color1"><br>
        <label for="color2">Color 2</label>
        <input type="color" name="color2" id="color2" value="#FFFFFF"><br>
        <label for="filas">Nº de filas</label>
        <input type="number" id="filas" name="filas"><br>
        <label for="columnas">Nº de columnas</label>
        <input type="number" id="columnas" name="columnas"><br>
        <button>Enviar</button>
    </form>
</main>
</body>
</html>
<?php

?>