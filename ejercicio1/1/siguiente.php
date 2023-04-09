
<?php
$claro=$_GET["claro"];
$oscuro=$_GET["oscuro"];
if ($claro){

    $color="light.css";

}
else{

    $color="dark.css";
}

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/<?php

echo $color;

    ?>
">
    <title>Document</title>
</head>
<body>

<h1>Siguiente pagina</h1>
<a href="blancooscuro.php">Volver a la principal</a>
</body>
</html>
