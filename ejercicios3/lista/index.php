<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de tareas</title>
    <link rel="stylesheet" href="estilo.css?v=2">

</head>
<body>
<h1>Lista de tareas</h1>
<main>
    <form action="tarea.php" method="POST">
        <input type="text" id="tarea" name="tarea" placeholder="Nueva tarea">
        <button id="añadir" class="anadir">+</button>
    </form>
    <section>
        <ul id="lista">
            <?php
            $lista="";
            $lista = file_get_contents('tareas.txt');
            echo $lista;
            ?>
        </ul>
    </section>
</main>
</body>
</html>