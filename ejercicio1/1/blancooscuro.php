

<?php
$color="light.css";
if (isset($_GET["color"])){
    $color=$_GET["color"];
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


    if ($color){

        $color="light.css";
    }
    elseif ($color){

        $color="dark.css";
    }
    ?>">
    <title>Document</title>
</head>
<body>

<h1>Elige el modo de trabajo</h1>

    <form action="blancooscuro.php" method="get">

        <input type="radio" name="color" value="claro" id="claro" >
        <label for="claro">Claro</label>
        <input type="radio" name="color" value="oscuro" id="oscuro">
        <label for="oscuro">oscuro</label>
        <button>Enviar</button>


    </form>

<a href="siguiente.php">Ir a la siguiente página</a>


    <br>
    <br>
<h1>Texto de prueba</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores assumenda cum expedita sint. Animi architecto fugit magnam mollitia odit quam repudiandae. Delectus magni necessitatibus nesciunt nisi perferendis velit voluptas?</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores assumenda cum expedita sint. Animi architecto fugit magnam mollitia odit quam repudiandae. Delectus magni necessitatibus nesciunt nisi perferendis velit voluptas?</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores assumenda cum expedita sint. Animi architecto fugit magnam mollitia odit quam repudiandae. Delectus magni necessitatibus nesciunt nisi perferendis velit voluptas?</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores assumenda cum expedita sint. Animi architecto fugit magnam mollitia odit quam repudiandae. Delectus magni necessitatibus nesciunt nisi perferendis velit voluptas?</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores assumenda cum expedita sint. Animi architecto fugit magnam mollitia odit quam repudiandae. Delectus magni necessitatibus nesciunt nisi perferendis velit voluptas?</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores assumenda cum expedita sint. Animi architecto fugit magnam mollitia odit quam repudiandae. Delectus magni necessitatibus nesciunt nisi perferendis velit voluptas?</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores assumenda cum expedita sint. Animi architecto fugit magnam mollitia odit quam repudiandae. Delectus magni necessitatibus nesciunt nisi perferendis velit voluptas?</p>


</body>
</html>


