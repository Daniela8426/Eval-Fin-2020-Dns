<?php
    require_once("../conecct/conecct.php");
    include ("../php/validar.php");
    $sql = "SELECT * FROM usuario, tipo_usu WHERE user = '".$_SESSION['usuario']."'";
    $usuario = mysqli_query($conexion, $sql);
    $full = mysqli_fetch_assoc($usuario);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario #2</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="logo">
            <img src="../img/logo-peluches.png" alt="">
        </div>
        <div class="accesos">

            <div class="verPerfil">

                <div class="icono" id="icono">
                    <i class="fas fa-user-circle"></i>   
                </div>

                <div class="datos uno" id="datos">
                    <div class="info">
                        <div class="img">
                            <img src="../img/usuUno.jpg">
                        </div>
                            <h2>Nombre</h2>
                            <h2>Nombre</h2>
                            <h2>Nombre</h2>
                            <h2>Nombre</h2>
                            <h2>Nombre</h2>
                            <h2>Nombre</h2>
                        </div>
                    </div>
                </div>

            <div class="exit">
                <i class="fas fa-sign-out-alt"></i>
            </div>

        </div>

    </header>


    <div class="encabezado">
        <div class="textos">
            <h3 class="subtitulo">BIENVENIDO</h3>
            <h1 class= "titulo" ><!-- <?php echo $full ['nombres'];?> --></h1>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>