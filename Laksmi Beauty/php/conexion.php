<?php

$conexion = mysqli_connect("localhost","root","", "parcial_2");

if($conexion){
    echo 'Conectado exitosamente';
}else {
    echo 'No se ha podido conectar a la Base de Datos';
}
?>