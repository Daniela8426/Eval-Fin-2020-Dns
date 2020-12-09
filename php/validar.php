<?php 
//validar la cuenta del usuario
if (!isset ($_SESSION['usuario']) || !isset($_SESSION['tipo_usu']))
{
    header("Location: ../index.html");
    exit;
}

?>