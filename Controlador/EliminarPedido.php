<?php
require_once('../Modelo/Pedidos.php');
if($_POST){
    $ModeloPedido=new Pedido();
    $idPedido=$_POST["idPedido"];
    $ModeloPedido->Eliminar($idPedido);
}
else{
    header('Location:../Vista/Pedidos.php');
}
