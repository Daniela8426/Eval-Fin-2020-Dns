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
    <title>Cocinero</title>
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
                    <h2>Datos de Usuario</h2>
                        <div class="img">
                            <img src="../img/usuUno.jpg">
                        </div>
                            <h2>Nombres: <?php echo $full ['nomOne']; echo $full ['nomTwo'];?></h2>
                            <h2>Apellidos: <?php echo $full ['apeOne']; echo $full ['apeTwo'];?></h2>
                            <h2>Correo: <?php echo $full ['correo']?></h2>
                            
                        </div>
                    </div>
                </div>

            <div class="exit">
                <a href="../php/cerrarSesion.php"><i class="fas fa-sign-out-alt"></i></a>
            </div>

        </div>

    </header>


    <div class="encabezado">
        <div class="textos">
            <h3 class="subtitulo">BIENVENIDO</h3>
        </div>
    </div>

    <div class="pedidos">
    <h3>PEDIDOS PARA PREPARAR</h3>
    <?php
        
        $pedidos=("SELECT * FROM pedidos WHERE `id_estado` = 1");
        $query=mysqli_query($conexion,$pedidos);
        echo "<table border='2'>";
        echo "<td>Nombre</td>";
        echo "<td>Telefono</td>";
        echo "<td>Tipo menu</td>";
        echo "<td>Dirección</td>";
        echo "<td>Fecha y Hora</td>";
        echo "<td>Preparar</td>";
        echo "</tr>";


        ?>
        <?php 
        while($columna=mysqli_fetch_array($query))
        {
            echo "<td> $columna[4] </td>";
            echo "<td> $columna[6] </td>";
            echo "<td> $columna[1] </td>";
            echo "<td> $columna[7] </td>";
            echo "<td> $columna[8] </td>";

            echo "<td><a href='inicioUno.php?id=$columna[0]&idPreparar=2'><i class='fas fa-utensils'></i></a></td>";
            echo "</tr>";
            $id_pedido = $columna[0];
            
        }

        echo "</table>";

            extract($_GET);
            if(@$idPreparar==2){

                $cedula=$full ['cedula'];

                $sqlPreparar="UPDATE `pedidos` SET `id_estado` = '2', `idCocinero` = '$cedula', `feHoCocinado`= NOW() WHERE `id_pedido`= '$id_pedido' ";
                $resPreparar=mysqli_query($conexion,$sqlPreparar);
                echo '<script>alert("Pedido Preparado")</script> ';
                echo "<script>location.href='inicioUno.php'</script>";
            }

        ?>
    </div>

    <script src="script.js"></script>
</body>
</html>