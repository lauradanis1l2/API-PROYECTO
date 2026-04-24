<?php
require_once('../Modelo/Usuarios.php');
if($_POST){
    $ModeloUsuario=new Usuario();
    $tipoDocUsuario=$_POST["tipoDocUsuario"];
    $numdocUsuario=$_POST["numdocUsuario"];
    $nombreUsuario=$_POST["nombreUsuario"];
    $apellidoUsuario=$_POST["apellidoUsuario"];
    $direccionUsuario=$_POST["direccionUsuario"];
    $telefonoUsuario=$_POST["telefonoUsuario"];
    $correoUsuario=$_POST["correoUsuario"];
    $passwordUsuario=$_POST["passwordUsuario"];
    $estadoUsuario=$_POST["estadoUsuario"];
    $idUsuario=$_POST["idUsuario"];
    $id_RolUsuario_fk=$_POST["id_RolUsuario_fk"];
    $ModeloUsuario->Agregar($idUsuario,$tipoDocUsuario,$numdocUsuario,$nombreUsuario,$apellidoUsuario,$direccionUsuario,$telefonoUsuario, $correoUsuario,$passwordUsuario,$estadoUsuario,$id_RolUsuario_fk);
    }else{
        header('Location:../Vista/Usuarios.php');
    }
    ?>
    