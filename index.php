<?php  
require_once("conecct/conecct.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROYECTO</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img src="img/logo-peluches.png" alt="">
            </div>

            <div class="buscador">
                <i class="fas fa-search"></i>
                <input type="text" class="busca" placeholder="  Buscar">
            </div>
        </nav>
    </header>

    <div class="navegacion">
        <nav>
            <div class="icono" id="icono">
                <i class="fas fa-user-circle"></i>
                <label for="" class="dns">Login</label>
            </div>
            <div class="enlaces si" id="enlaces">
                <form method="POST" name="form1" action="php/inicio.php" class="formulario" autocomplete="off">
                    <!--Titulo-->
                    <h1 class="form_titulo">Login</h1><br>
                    <div class="usuario">
                        <!--Usuario-->
                        <label>Username:</label><br>
                        <input type="text" name="usuario" class="camposLogin">
                    </div><br>

                    <div class="password">
                        <!--Contraseña-->
                        <label>Password:</label><br>
                        <input type="password" name="clave" class="camposLogin">
                    </div><br>

                    <div class="botones">
                        <!--Boton-->
                        <input type="submit" name="Login" value="Submit" class="botonLogin">
                    </div>

                </form>
            </div>
            <ul>
                <li>
                    <a href="">Servicios <spam class="fas fa-caret-up"></spam></a>
                    <div class="subMenu">
                        <div class="subMenu-items">
                            <p>Tipos</p><br><br><br>
                            <ul>
                                <li><a href="">*Compra</a></li>
                                <li><a href="">*Alquiler</a></li>
                            </ul>
                        </div>
                    </div>

                </li>

                <li><a href="">Contactenos <spam class="fas fa-caret-up"></spam></a></li>

            </ul>
        </nav>
    </div>

   <div class="primeroVer">
        <div class= "primero" style="height: 584px; overflow: hidden;">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M208.09,0.00 C152.69,67.10 262.02,75.98 200.80,150.00 L0.00,150.00 L0.00,0.00 Z" style="stroke: none; fill: white;"></path>
            </svg>
        </div>

        <div class="bienvenida">
            <img height= "35%" width="35%" src="img/oso.png" alt="">
        </div>
   </div>
    <section class="ser">
     
        <h2>Nuestros Servicios</h2>
     
        <div class="servicios">
          
         <div class="bloque">
           <div class="bloque-content">
             <h4>Peluches Afelpados</h4>
             <p>Encuentra los mejores peluches para niños navegando por el catálogo virtual Pepe Ganga. Ingresa y antójate de todos nuestros productos!</p>
           </div>
           <img src="img/servicios.jpg">
         </div>
     
         <div class="bloque">
           <div class="bloque-content">
             <h4>Peluches Luz</h4>
             <p>Encuentra Peluches Que Alumbran En La Oscuridad - Muñecos y Muñecas en Falcón en esta gran plataforma digital. Descubre la mejor forma de comprar.</p>
           </div>
           <img src="img/perroLuz.jpg">
         </div>
     
         <div class="bloque">
           <div class="bloque-content">
             <h4>Familia Con Peluches</h4>
             <p>Consigue cualquier linea de coleccion de peluches agotados, te ofrecemos los mejore servicios para que logres tus objetivos.</p>
           </div>
           <img src="img/grandes.jpg">
         </div>
     
         <div class="bloque">
           <div class="bloque-content">
             <h4>Creación de llaveros personalidades en porcelana </h4>
             <p>
                Es un colgante perfecto para tu bolso, teléfono móvil, llave de coche u otra decoración.
                También es un regalo perfecto para cumpleaños, día de la madre, Navidad, graduación y cualquier ocasión.
                </p>
           </div>
           <img src="img/llave.jpg">
         </div>
     
        </div>
     
        </section>

        
     
        <section class="novedades">
            <h1>Novedades</h1>
            <div class="content-novedades">
        
                <div class="productoUno">
                    <div class="bloque">
                    <div class="proUno-img">
                        <img src="img/producto1.jpg">
                    </div>
                    <h2>MENU DUPLA</h2>
                    <a href="#">Saber mas</a>
                    </div>
                </div>
                
                <div class="productoDos">
                    <div class="bloque">
                    <div class="proDos-img">
                        <img src="img/osos.jpg">
                    </div>
                    <h2>MENU FAMILIAR</h2>
                    <a href="#">Saber mas</a>
                    </div>
                </div>
                <div class="productoUno">
                    <div class="bloque">
                    <div class="proUno-img">
                        <img src="img/pulpo.jpg">
                    </div>
                    <h2>MENU INFANTIL</h2>
                    <a href="#">Saber mas</a>
                    </div>
                </div>
        
            </div>
        </section>

        <div class="solicitud">
        <form form method="POST" name="form1" action="php/registroPedidos.php" autocomplete="off">
            <h2>DATOS DE PEDIDO</h2>

            <div class= "pedido">
                <label for="tipo" class= "form_laber" >*Seleccione el Menú que Desea Comprar</label>
                <select class = "seleccionTipo" id="tipoMenu" name= "tipoMenu">
                    <option value="0" placeholder=""></option>
                    <?php
                        $query = $conexion -> query ("SELECT * FROM tipo_menu");
                        while ($valores = mysqli_fetch_array($query)) 
                        { echo '<option value="'.$valores[id_tip_menu].'">'.$valores[nom_menu].'</option>';}
                    ?>
                </select>
            </div>

            <div class="pedido">
                <label for="">*Digite la Cantidad que Desea Comprar</label>
                <input type="number" id="cantidad" name="cantidad">
            </div>
            
            <div class="pedido">
                <label for="">*Digite Su Número de Cedula</label>
                <input type="number" id="numCedula" name="numCedula">
            </div>

            <div class="pedido">
                <label for="">*Digite Su Nombre Completo</label>
                <input type="text" id="nombre" name="nombre" >
            </div>
            
            <div class= "pedido">
                <label for="tipo" class= "form_laber" >*Seleccione su modo de pago</label>
                <select class = "seleccionTipo" id="tipoPago" name= "tipoPago">
                    <option value="0" placeholder=""></option>
                    <?php
                        $query = $conexion -> query ("SELECT * FROM tipo_pago");
                        while ($valores = mysqli_fetch_array($query)) 
                        { echo '<option value="'.$valores[id_tip_pago].'">'.$valores[nom_mdo].'</option>';}
                    ?>
                </select>
            </div>

            <div class="pedido">
                <label for="">*Digite Número de Contacto</label>
                <input type="number" id="contacto" name="contacto">
            </div>

            <div class="pedido">
                <label for="">*Digite Dirección de Envio</label>
                <input type="texto" id="direccion" name="direccion">
            </div>

            <div class="boton">
                <input type="submit" name="pedido" id="pedido" value="comprar">
                <!-- <input type="hidden" name="pedidos" value="pedido"/> -->
            </div>
        </form>
    </div>

        <footer>
            <div class="footer-contenerdor">

               <div class="caja1">
                   <img src="img/logo-peluches.png" alt="">
                   
               </div>

               <div class="social">
                <a href=""><img src="img/icono.facebook.jpg" alt="" width="15px"></a>
                <a href=""><img src="img/icono.youtube.png" alt="" width="30px"></samp></a>
                <a href=""><img src="img/icono-whatsapp.png" alt="" width="30px"></samp></a>
                <a href=""><img src="img/icono.twitter.png" alt="" width="30px"></samp></a>
            </div>
            </div>
        </footer>





    <script src="main.js"></script>
</body>


</html>