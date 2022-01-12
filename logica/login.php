<?php
require 'connBD.php';
session_start();

$usuario = $_POST['usuario'];
$pwd = $_POST['pwd'];

$sql = "SELECT COUNT(*) AS conteo FROM usuario WHERE usuario='$usuario' AND pwd='$pwd'";
$consulta = mysqli_query($conexion,$sql);
$resultados = mysqli_fetch_array($consulta);

if(($resultados['conteo'] > 0)){
    $_SESSION['username'] = $usuario;
    header('location: ../pagPrincipal.php');
}else{
    echo "El usuario o la Contraseña son incorrectos";
    header('location: ../iniciar-sesion.html');
}

?>