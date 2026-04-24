<?php
require_once('../Modelo/Productos.php');
if($_POST){
    $ModeloProducto=new Producto();
    $idProducto=$_POST["idProducto"];
    $descripProducto=$_POST["descripProducto"];
    $precioProducto=$_POST["precioProducto"];
    $categoriaProducto=$_POST["categoriaProducto"];
    $estadoProducto=$_POST["estadoProducto"];
    $ModeloProducto->Agregar($idProducto,$descripProducto,$precioProducto,$categoriaProducto,$estadoProducto);
    }else{
        header('Location:../Vista/Productos.php');
    }
    ?>
    