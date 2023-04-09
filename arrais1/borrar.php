<?php

session_start();
unset($_SESSION["colores"]);
header("location:lista.php");
/*
 *
 * Cierre completo
 * uset($_SESSION);
 * session_destroy();
 *
 */

?>