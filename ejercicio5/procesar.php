<?php

include_once "conexion.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $consulta = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
    $resultado = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultado) == 1) {
        $_SESSION['authenticated'] = true;

        header('Location: loging.php');
        exit;
    } else {
        $error = 'Nombre de usuario o contraseña incorrectos';
    }
}
?>
