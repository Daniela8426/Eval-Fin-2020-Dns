<?php
    $conexion= mysqli_connect("localhost","root","","dns_bd");
    if($conexion->connect_error)
    {
        die("fallo la conexion" . mysqli_connect_errno());
    }
    session_start();
?>