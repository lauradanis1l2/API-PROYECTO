<?php
require_once('../Modelo/Pedidos.php');
if($_POST){
    $ModeloPedido=new Pedido();
    $idPedido=$_POST["idPedido"];
    $fechaPedido=$_POST["fechaPedido"];
    $horaPedido=$_POST["horaPedido"];
    $totalPedido=$_POST["totalPedido"];
    $estadoPedido=$_POST["estadoPedido"];
    $idUsuarioFK=$_POST["idUsuarioFK"];
    $ModeloPedido->Actualizar($idPedido,$fechaPedido,$horaPedido,$totalPedido,$estadoPedido,$idUsuarioFK);
    }else{
        header('Location:../Vista/Pedidos.php');
    }
    ?>
    