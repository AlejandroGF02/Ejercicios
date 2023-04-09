<?php


$colores="";
if (isset($_COOKIE["colores"])){
    $colores=json_decode($_COOKIE["colores"]);

}

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
<style>
    div{
        width: 150px;
        height: 150px;
        display: inline-block;
        outline: solid white;
    }
</style>
<body>
<h1>Lista de colores</h1>
<?php

if ($colores){

    foreach ($colores as $i=>$color){
    echo "<div style='background-color:$color'>$i;</div>";
    }
}
else{
    echo "<p> No hay colores elegidos</p>";
}
?>
<br><a href="index.php">Elegir otro color</a>
</body>
</html><?php ?>

