<?php  
require_once("../conecct/conecct.php");

$tipoMenu = $_POST["tipoMenu"];
$cantidad = $_POST["cantidad"];
$cedula = $_POST["numCedula"];
$nomCompleto = $_POST["nombre"];
$tipoPago = $_POST["tipoPago"];
$numContacto = $_POST["contacto"];
$direccion = $_POST["direccion"];

$pedido = "INSERT INTO pedidos (id_pedido, id_tip_menu, numCantidad, numCedula, nomCompleto, id_tip_pago,numContacto, direccion, feHoPedido, id_estado, idCocinero,feHoCocinado, idRepartidor, feHoEntregado) 
VALUES (NULL, '$tipoMenu', '$cantidad' , '$cedula', '$nomCompleto', '$tipoPago', '$numContacto', '$direccion', NOW() , 1, NULL, NULL, NULL, NULL)";
mysqli_query($conexion, $pedido);

echo '<script>alert ("Su pedido ha sido registraron con exito");</script>';
echo '<script>window.location="../index.php"</script>';
   

?>