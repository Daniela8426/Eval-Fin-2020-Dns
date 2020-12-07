<?php
    require_once("../conecct/conecct.php");
    if($_POST['Login']){

        $usuario = $_POST["usuario"];
        $clave = $_POST["clave"];
       
        //Consulta
        $consul = "SELECT * FROM  usuario WHERE user = '$usuario' AND password = '$clave'";
        $query = mysqli_query($conexion, $consul);
        $dns = mysqli_fetch_assoc($query);

        
        if($dns){
            //    VARIABLES             BD
            $_SESSION['id_usua'] = $dns['cedula'];
            $_SESSION['usuario'] = $dns['user'];
            $_SESSION['clave'] = $dns['password'];
            $_SESSION['correo'] = $dns['correo'];
            $_SESSION['nomOne'] = $dns['nomOne'];
            $_SESSION['nomTwo'] = $dns['nomTwo'];
            $_SESSION['apeOne'] = $dns['apeOne'];
            $_SESSION['apeTwo'] = $dns['apeTwo'];
            $_SESSION['tipo_usu'] = $dns['id_tip_usu'];

            if($_SESSION['tipo_usu'] == 1) {
                header("Location: ../usuUno/inicioUno.php");
                exit();
            }
            
            elseif($_SESSION['tipo_usu'] == 2) {
                header("Location: ../usuDos/inicioDos.php");
                exit();
            }
        }
    
    else{
        header("Location: ../errorLogin.html");
        exit();
    }
}
?>