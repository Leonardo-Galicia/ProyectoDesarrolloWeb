<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "abdarqueologia";
    $conexion = new mysqli($host, $user, $pass, $db);
    
    if($conexion->connect_error){
        die('Error en la conexion'.$conexion->connect_error);
    }
?>