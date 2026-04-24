<?php
require_once('../Modelo/Usuarios.php');
if($_POST){
    $ModeloUsuario=new Usuario();
    $idUsuario=$_POST["idUsuario"];
    $ModeloUsuario->Eliminar($idUsuario);
}
else{
    header('Location:../Vista/Usuarios.php');
}
?>