<?php
require_once('../Modelo/Productos.php');
if($_POST){
    $ModeloProducto=new Producto();
    $idProducto=$_POST["idProducto"];
    $ModeloProducto->Eliminar($idProducto);
}
else{
    header('Location:../Vista/Usuarios.php');
}
?>