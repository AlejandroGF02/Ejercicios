<?php
$filas = isset($_GET['filas']) ? intval($_GET['filas']) : 3;
$columnas = isset($_GET['columnas']) ? intval($_GET['columnas']) : 3;
$html = "";
for ($i=0; $i<$filas; $i++) {

    for ($j=0; $j<$columnas; $j++) {
        $color = "rgb(" . rand(0,255) . "," . rand(0,255) . "," . rand(0,255) . ")";
        $html .= "<article class='color' style='background-color:$color'>&nbsp;</article>";
    }

}

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colores aleatorios</title>
    <link rel="stylesheet" href="estilo.css">
    <style>
        .color{
            width:33.333333333333%;
            height:33.333333333333%;
        }
    </style>
</head>
<body>
<header>
    <table>
        <tr>
            <td><a href="mas.php?filas=<?php echo $filas+1 ?>&columnas=<?php echo $columnas+1 ?>">mas</a></td>
            <td><a href="menos.php?filas=<?php echo $filas-1 ?>&columnas=<?php echo $columnas-1 ?>">menos</a></td>
        </tr>
        <script>
            console.log("3");
        </script>
    </table>
</header>


<main>
    <?php echo $html ?>
</main>

</body>
</html>
