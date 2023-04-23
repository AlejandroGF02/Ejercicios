
<?php

include_once "conexion.php";
session_start();

if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header('Location: login-form.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Autenticación correcta</title>
</head>
<body>
<form method="post" action="procesar.php">
    <label for="lista">Lista: </label>
    <input type="text" id="lista" name="lista"><br><br>

</form>
</body>
</html>


