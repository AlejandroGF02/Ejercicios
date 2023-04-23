<?php

include_once "conexion.php";

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de tareas</title>
    <link rel="stylesheet" href="estilo.css?v=4">
</head>
<body>
<h1>Lista de tareas</h1>
<main>
    <form action="nueva.php" method="POST">
        <input type="text" id="tarea" name="tarea" placeholder="Nueva tarea">
        <button id="mas" class="anadir">+</button>
    </form>
    <section>
        <ul id="lista">
            <?php while ($tarea = $resultado->fetch_assoc()): ?>
                <li>
                    <?php echo htmlspecialchars($tarea['nombre']); ?>
                    <?php if ($tarea['completada']): ?>
                        <span class="completada">(Completada)</span>
                    <?php endif; ?>
                    <a href="marcar.php?id=<?php echo $tarea['id']; ?>" class="marcar">Marcar</a>
                    <a href="quitar.php?id=<?php echo $tarea['id']; ?>" class="borrar">Borrar</a>
                </li>
            <?php endwhile; ?>
        </ul>

    </section>
    <section id="errores">
    </section>
</main>
</body>
</html>
