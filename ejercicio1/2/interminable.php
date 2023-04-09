<?php

$texto="";
if (isset($_POST["texto"])){
    $texto=$_POST["texto"];
}

?>

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
<style>
    #texto2
</style>
<body>
<header>
    <h1>Texto interminable</h1>
</header>
<main>
    <form action="interminable.php" method="post">
        <label for="texto">Texto</label>
        <textarea name="texto" id="texto" cols="30" rows="10"></textarea> <br>
        <textarea name="texto" id="texto2" cols="30" rows="10"><?= $texto ?></textarea> <br>
        <button>Enviar</button>
    </form>
    <section id="resultado">

        <?php

echo $texto;

        ?>

    </section>
</main>
</body>
</html>
