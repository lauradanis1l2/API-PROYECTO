<?php
require_once('../Modelo/Domicilios.php');
if($_POST){
    $ModeloDomicilio=new Domicilio();
    $idDomicilio=$_POST["idDomicilio"];
    $horaDomicilio=$_POST["horaDomicilio"];
    $estadoDomicilio=$_POST["estadoDomicilio"];
    $idPedidoFK=$_POST["idPedidoFK"];
    $idUsuarioFK = $_POST["idUsuarioFK"];
    $ModeloDomicilio->Actualizar( $idDomicilio,$horaDomicilio, $estadoDomicilio,$idPedidoFK,$idUsuarioFK);
    }else{
        header('Location:../Vista/Domicilios.php');
    }
