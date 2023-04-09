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

$numero=mt_rand(1,100);

$rojo="red";

if ($numero%2==0){

    echo "<h1>"."Par"."</h1>";

}

else if ($numero%2==1){

    echo "<h1>"."Impar"."</h1>";

}



?>

<h1 style="color: <?php echo $rojo?>"><?php echo $numero; ?></h1>

</body>
</html>
