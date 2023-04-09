<?php

$pelicula1=0;
$pelicula2=0;
$pelicula3=0;

if(isset($_COOKIE['pelicula1']) && isset($_COOKIE['pelicula2']) && isset($_COOKIE['pelicula3'])) {

    $pelicula1 = $_COOKIE['pelicula1'];
    $pelicula2 = $_COOKIE['pelicula2'];
    $pelicula3 = $_COOKIE['pelicula3'];

}

?>

<!doctype html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Votación</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
</head>
<body>
<main>
    <h1>Votación de la mejor película</h1>
    <article>
        <form action="index.php" method="GET">
            <label for="pelicula1">Todo a la vez en todas partes</label>
            <input type="text" id="pelicula1" name="pelicula1" value="<?php echo $pelicula1 ?>">
            <label for="pelicula2">Sin novedad en el frente</label>
            <input type="text" id="pelicula2" name="pelicula2" value="<?php echo $pelicula2 ?>">
            <label for="pelicula3">Almas en pena de Inisherin</label>
            <input type="text" id="pelicula3" name="pelicula3" value="<?php echo $pelicula3 ?>">
            <button type="submit">Votar</button>
        </form>
        <form action="borrar.php">
            <button type="submit" class="secondary">Borrar</button>
        </form>
    </article>
    <article>
        <?php
        if(isset($_GET['pelicula1']) && isset($_GET['pelicula2']) && isset($_GET['pelicula3'])) {
            $pelicula1 = $_GET['pelicula1'];
            $pelicula2 = $_GET['pelicula2'];
            $pelicula3 = $_GET['pelicula3'];



            if(is_numeric($pelicula1) && is_numeric($pelicula2) && is_numeric($pelicula3)) {
                if ($pelicula1 >= 1 && $pelicula1 <= 10 && $pelicula2 >= 1 && $pelicula2 <= 10 && $pelicula3 >= 1 && $pelicula3 <= 10) {
                    setcookie("pelicula1",$pelicula1,time()+60*60*24*7);
                    setcookie("pelicula2",$pelicula2,time()+60*60*24*7);
                    setcookie("pelicula3",$pelicula3,time()+60*60*24*7);
                    echo "<h1>Resultados</h1>";
                    echo "<p>Todo a la vez en todas partes: $pelicula1 votos</p>";
                    echo "<p style='background-color: red; width: <?php $pelicula1*10% ?> '>&nbsp;</p>";
                    echo "<p>Sin novedad en el frente: $pelicula2 votos</p>";
                    echo "<p style='background-color: greenyellow; width: <?php $pelicula2*10%  ?>'>&nbsp;</p>";
                    echo "<p>Almas en pena de Inisherin: $pelicula3 votos</p>";
                    echo "<p style='background-color: blue; width: <?php $pelicula3*10%  ?>'>&nbsp;</p>";


                } else {
                    echo '<h1> Error </h1>';
                    echo '<p style="color:red;">Los numeros tienen que estar entre 1 y 10</p>';
                }
            } else {
                echo '<h1> Error </h1>';
                echo '<p style="color:red;">Los valores deben ser numéricos</p>';
            }
        }
        ?>
    </article>
</main>
</body>
</html>