<?php
require_once('../Modelo/Domicilos.php');
if($_POST){
    $ModeloDomicilio=new Domicilio();
    $=$_POST["idDomicilo"];
    $idDomicilo=$_POST["idDomicilo"];
    $horaDomicilo=$_POST["horaDomicilo"];
    $estadoDomicilio=$_POST["estadoDomicilio"];
    $idPedidoFK=$_POST["idPedidoFK"];
    $idUsuarioFK=$_POST["idDomiciliarioFK"];

    $ModeloDomicilio->Agregar($idDomicilo,$horaDomicilo,$estadoDomicilio,$idPedidoFK,$idUsuariofk);
    }else{
        header('Location:../Vista/Domicilos.php');
    }
    ?>
    