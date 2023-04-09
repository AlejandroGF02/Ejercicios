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

    for ($cont=1;$cont<=100;$cont++){

        $numero=mt_rand(1,1000);


        if ($numero%2==0){

            $rojo="red";
            echo "<p style= color:$rojo>".$numero."</p>";

        }

        else if ($numero%2==1){

            $verde="greenyellow";
            echo "<p style= color:$verde>".$numero."</p>";
        }



    }

    ?>





</body>
</html>
