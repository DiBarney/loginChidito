<?php
session_start();
$usuario = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <main>
        <?php
        if(!isset($usuario)){
            header('location: iniciar-sesion.html');
        }else{
            echo "<h1>Bienvenido $usuario</h1>";
        }
        ?>
        <a href="logica/logout.php">Cerrar Sesión</a>
    </main>
</body>
</html>