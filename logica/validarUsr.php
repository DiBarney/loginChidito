<?php
require 'connBD.php';

$usuario = $_POST['usuario'];
$pwd = $_POST['pwd'];
$bandera = 'false';

$sql = "SELECT COUNT(*) AS conteo FROM usuario WHERE usuario='$usuario' AND pwd='$pwd'";
$consulta = mysqli_query($conexion,$sql);
$resultados = mysqli_fetch_array($consulta);

if(($resultados['conteo'] > 0)){
    $bandera = 'true';
    echo $bandera;
}else{
    echo $bandera;
}

?>