<?php

setcookie('pelicula1', '', time() - 1);
setcookie('pelicula2', '', time() - 1);
setcookie('pelicula3', '', time() - 1);

header('Location: listar.php');
exit;
?>