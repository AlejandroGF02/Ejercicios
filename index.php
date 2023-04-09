

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

$numero=mt_rand(1,3);

$rojo="red";

if ($numero==1){

    echo "<h1>"."Hola"."</h1>";

}

else if ($numero==2){

    echo "<h1>"."Que tal"."</h1>";

}

else {

    echo "<h1>"."Hasta luego"."</h1>";

}

?>

<h1 style="color: <?php echo $rojo?>"><?php echo $numero; ?></h1>

</body>
</html>
